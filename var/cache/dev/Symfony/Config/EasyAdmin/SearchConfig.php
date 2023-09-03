<?php

namespace Symfony\Config\EasyAdmin;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SearchConfig 
{
    private $title;
    private $_usedProperties = [];

    /**
     * The visible page title displayed in the search view.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function title($value): self
    {
        $this->_usedProperties['title'] = true;
        $this->title = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('title', $value)) {
            $this->_usedProperties['title'] = true;
            $this->title = $value['title'];
            unset($value['title']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['title'])) {
            $output['title'] = $this->title;
        }

        return $output;
    }

}
