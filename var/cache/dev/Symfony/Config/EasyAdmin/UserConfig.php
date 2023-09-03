<?php

namespace Symfony\Config\EasyAdmin;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class UserConfig 
{
    private $displayName;
    private $displayAvatar;
    private $namePropertyPath;
    private $avatarPropertyPath;
    private $_usedProperties = [];

    /**
     * If true, the user name is displayed in the logged user section.
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function displayName($value): self
    {
        $this->_usedProperties['displayName'] = true;
        $this->displayName = $value;

        return $this;
    }

    /**
     * If true, the user avatar image is displayed in the logged user section.
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function displayAvatar($value): self
    {
        $this->_usedProperties['displayAvatar'] = true;
        $this->displayAvatar = $value;

        return $this;
    }

    /**
     * A valid PropertyPath expression used to get the value of the user name (by default, __toString() is used).
     * @default '__toString'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function namePropertyPath($value): self
    {
        $this->_usedProperties['namePropertyPath'] = true;
        $this->namePropertyPath = $value;

        return $this;
    }

    /**
     * A valid PropertyPath expression used to get the value of the avatar image path which is used as the "src" attribute of the <img> element.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function avatarPropertyPath($value): self
    {
        $this->_usedProperties['avatarPropertyPath'] = true;
        $this->avatarPropertyPath = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('display_name', $value)) {
            $this->_usedProperties['displayName'] = true;
            $this->displayName = $value['display_name'];
            unset($value['display_name']);
        }

        if (array_key_exists('display_avatar', $value)) {
            $this->_usedProperties['displayAvatar'] = true;
            $this->displayAvatar = $value['display_avatar'];
            unset($value['display_avatar']);
        }

        if (array_key_exists('name_property_path', $value)) {
            $this->_usedProperties['namePropertyPath'] = true;
            $this->namePropertyPath = $value['name_property_path'];
            unset($value['name_property_path']);
        }

        if (array_key_exists('avatar_property_path', $value)) {
            $this->_usedProperties['avatarPropertyPath'] = true;
            $this->avatarPropertyPath = $value['avatar_property_path'];
            unset($value['avatar_property_path']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['displayName'])) {
            $output['display_name'] = $this->displayName;
        }
        if (isset($this->_usedProperties['displayAvatar'])) {
            $output['display_avatar'] = $this->displayAvatar;
        }
        if (isset($this->_usedProperties['namePropertyPath'])) {
            $output['name_property_path'] = $this->namePropertyPath;
        }
        if (isset($this->_usedProperties['avatarPropertyPath'])) {
            $output['avatar_property_path'] = $this->avatarPropertyPath;
        }

        return $output;
    }

}
