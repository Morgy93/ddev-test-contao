<?php

declare(strict_types=1);

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\Image\Tests\PhpunitExtension;

use Contao\Image\ResizeConfigurationInterface;
use Contao\TestCase\DeprecatedClassesPhpunitExtension;

final class DeprecatedClasses extends DeprecatedClassesPhpunitExtension
{
    protected function deprecationProvider(): array
    {
        return [
            ResizeConfigurationInterface::class => ['%sResizeConfigurationInterface%shas been deprecated%s'],
        ];
    }
}
