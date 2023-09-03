<?php

namespace Symfony\Config\EasyAdmin\Design\Assets;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class FaviconConfig 
{
    private $path;
    private $mimeType;
    private $_usedProperties = [];

    /**
     * @default 'favicon.ico'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function path($value): self
    {
        $this->_usedProperties['path'] = true;
        $this->path = $value;

        return $this;
    }

    /**
     * @default 'image/x-icon'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function mimeType($value): self
    {
        $this->_usedProperties['mimeType'] = true;
        $this->mimeType = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('path', $value)) {
            $this->_usedProperties['path'] = true;
            $this->path = $value['path'];
            unset($value['path']);
        }

        if (array_key_exists('mime_type', $value)) {
            $this->_usedProperties['mimeType'] = true;
            $this->mimeType = $value['mime_type'];
            unset($value['mime_type']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['path'])) {
            $output['path'] = $this->path;
        }
        if (isset($this->_usedProperties['mimeType'])) {
            $output['mime_type'] = $this->mimeType;
        }

        return $output;
    }

}
