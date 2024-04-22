<?php

namespace Symfony\Config\Contao;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Messenger'.\DIRECTORY_SEPARATOR.'WorkersConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class MessengerConfig 
{
    private $workers;
    private $_usedProperties = [];

    public function workers(array $value = []): \Symfony\Config\Contao\Messenger\WorkersConfig
    {
        $this->_usedProperties['workers'] = true;

        return $this->workers[] = new \Symfony\Config\Contao\Messenger\WorkersConfig($value);
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('workers', $value)) {
            $this->_usedProperties['workers'] = true;
            $this->workers = array_map(fn ($v) => new \Symfony\Config\Contao\Messenger\WorkersConfig($v), $value['workers']);
            unset($value['workers']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['workers'])) {
            $output['workers'] = array_map(fn ($v) => $v->toArray(), $this->workers);
        }

        return $output;
    }

}
