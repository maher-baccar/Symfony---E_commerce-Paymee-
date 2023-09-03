<?php

namespace Symfony\Config\EasyAdmin;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class NewConfig 
{
    private $title;
    private $actions;
    private $itemPermission;
    private $_usedProperties = [];

    /**
     * The visible page title displayed in the new view.
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

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function actions($value): self
    {
        $this->_usedProperties['actions'] = true;
        $this->actions = $value;

        return $this;
    }

    /**
     * The permission or array of permissions that the user must have to create new items
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function itemPermission($value): self
    {
        $this->_usedProperties['itemPermission'] = true;
        $this->itemPermission = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('title', $value)) {
            $this->_usedProperties['title'] = true;
            $this->title = $value['title'];
            unset($value['title']);
        }

        if (array_key_exists('actions', $value)) {
            $this->_usedProperties['actions'] = true;
            $this->actions = $value['actions'];
            unset($value['actions']);
        }

        if (array_key_exists('item_permission', $value)) {
            $this->_usedProperties['itemPermission'] = true;
            $this->itemPermission = $value['item_permission'];
            unset($value['item_permission']);
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
        if (isset($this->_usedProperties['actions'])) {
            $output['actions'] = $this->actions;
        }
        if (isset($this->_usedProperties['itemPermission'])) {
            $output['item_permission'] = $this->itemPermission;
        }

        return $output;
    }

}
