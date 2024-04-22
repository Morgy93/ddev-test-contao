<?php

declare(strict_types=1);

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\CoreBundle\Image\Studio;

use Contao\CoreBundle\Image\ImageFactoryInterface;
use Contao\CoreBundle\Image\PictureFactoryInterface;
use Contao\Image\DeferredImageInterface;
use Contao\Image\DeferredResizerInterface;
use Contao\Image\Image;
use Contao\Image\ImageDimensions;
use Contao\Image\ImageInterface;
use Contao\Image\PictureConfiguration;
use Contao\Image\PictureInterface;
use Contao\Image\ResizeOptions;
use Psr\Container\ContainerInterface;
use Symfony\Component\Filesystem\Path;

class ImageResult
{
    /**
     * Cached picture.
     */
    private PictureInterface|null $picture = null;

    /**
     * Cached image dimensions.
     */
    private ImageDimensions|null $originalDimensions = null;

    /**
     * @internal Use the Contao\CoreBundle\Image\Studio\Studio factory to get an instance of this class
     */
    public function __construct(
        private readonly ContainerInterface $locator,
        private readonly string $projectDir,
        private readonly ImageInterface|string $filePathOrImageInterface,
        private readonly PictureConfiguration|array|int|string|null $sizeConfiguration = null,
        private readonly ResizeOptions|null $resizeOptions = null,
    ) {
    }

    /**
     * Creates a picture with the defined size configuration.
     */
    public function getPicture(): PictureInterface
    {
        if (!$this->picture) {
            $this->picture = $this
                ->pictureFactory()
                ->create($this->filePathOrImageInterface, $this->sizeConfiguration, $this->resizeOptions)
            ;
        }

        return $this->picture;
    }

    /**
     * Returns the "sources" part of the current picture.
     */
    public function getSources(): array
    {
        return $this->getPicture()->getSources($this->projectDir, $this->staticUrl());
    }

    /**
     * Returns the "img" part of the current picture.
     */
    public function getImg(): array
    {
        return $this->getPicture()->getImg($this->projectDir, $this->staticUrl());
    }

    /**
     * Returns the "src" attribute of the image. This will return a URL by default.
     * Set $asPath to true to get a relative file path instead.
     */
    public function getImageSrc(bool $asPath = false): string
    {
        if ($asPath) {
            /** @var Image $image */
            $image = $this->getPicture()->getImg()['src'];

            return Path::makeRelative($image->getPath(), $this->projectDir);
        }

        return $this->getImg()['src'] ?? '';
    }

    /**
     * Returns the image dimensions of the base resource.
     */
    public function getOriginalDimensions(): ImageDimensions
    {
        if ($this->originalDimensions) {
            return $this->originalDimensions;
        }

        if ($this->filePathOrImageInterface instanceof ImageInterface) {
            return $this->originalDimensions = $this->filePathOrImageInterface->getDimensions();
        }

        return $this->originalDimensions = $this
            ->imageFactory()
            ->create($this->filePathOrImageInterface)
            ->getDimensions()
        ;
    }

    /**
     * Returns the file path of the base resource.
     *
     * Set $absolute to true to return an absolute path instead of a path relative to
     * the project dir.
     */
    public function getFilePath(bool $absolute = false): string
    {
        $path = $this->filePathOrImageInterface instanceof ImageInterface
            ? $this->filePathOrImageInterface->getPath()
            : $this->filePathOrImageInterface;

        return $absolute ? $path : Path::makeRelative($path, $this->projectDir);
    }

    /**
     * Synchronously processes images if they are deferred.
     *
     * This will make sure that the target files physically exist instead of being
     * generated by the Contao\CoreBundle\Controller\ImagesController on first access.
     */
    public function createIfDeferred(): void
    {
        $picture = $this->getPicture();
        $candidates = [];

        foreach ([$picture->getImg(), ...$picture->getSources()] as $source) {
            $candidates[] = $source['src'] ?? null;

            foreach ($source['srcset'] ?? [] as $srcset) {
                $candidates[] = $srcset[0] ?? null;
            }
        }

        $deferredImages = array_filter(
            $candidates,
            static fn ($image): bool => $image instanceof DeferredImageInterface,
        );

        if (!$deferredImages) {
            return;
        }

        $resizer = $this->locator->get('contao.image.resizer');

        if (!$resizer instanceof DeferredResizerInterface) {
            throw new \RuntimeException('The "contao.image.resizer" service does not support deferred resizing.');
        }

        foreach ($deferredImages as $deferredImage) {
            $resizer->resizeDeferredImage($deferredImage);
        }
    }

    private function imageFactory(): ImageFactoryInterface
    {
        return $this->locator->get('contao.image.factory');
    }

    private function pictureFactory(): PictureFactoryInterface
    {
        return $this->locator->get('contao.image.picture_factory');
    }

    private function staticUrl(): string
    {
        return $this->locator->get('contao.assets.files_context')->getStaticUrl();
    }
}