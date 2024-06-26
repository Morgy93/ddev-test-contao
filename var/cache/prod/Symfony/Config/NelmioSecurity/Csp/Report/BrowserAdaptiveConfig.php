<?php

namespace Symfony\Config\NelmioSecurity\Csp\Report;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class BrowserAdaptiveConfig 
{
    private $enabled;
    private $parser;
    private $_usedProperties = [];

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): static
    {
        $this->_usedProperties['enabled'] = true;
        $this->enabled = $value;

        return $this;
    }

    /**
     * @default 'nelmio_security.ua_parser.ua_php'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function parser($value): static
    {
        $this->_usedProperties['parser'] = true;
        $this->parser = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('parser', $value)) {
            $this->_usedProperties['parser'] = true;
            $this->parser = $value['parser'];
            unset($value['parser']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }
        if (isset($this->_usedProperties['parser'])) {
            $output['parser'] = $this->parser;
        }

        return $output;
    }

}
