<?php

namespace Symfony\Config\EasyAdmin\Design;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Assets'.\DIRECTORY_SEPARATOR.'FaviconConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class AssetsConfig 
{
    private $css;
    private $js;
    private $favicon;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function css($value): self
    {
        $this->_usedProperties['css'] = true;
        $this->css = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function js($value): self
    {
        $this->_usedProperties['js'] = true;
        $this->js = $value;

        return $this;
    }

    /**
     * @return \Symfony\Config\EasyAdmin\Design\Assets\FaviconConfig|$this
     */
    public function favicon($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['favicon'] = true;
            $this->favicon = $value;

            return $this;
        }

        if (!$this->favicon instanceof \Symfony\Config\EasyAdmin\Design\Assets\FaviconConfig) {
            $this->_usedProperties['favicon'] = true;
            $this->favicon = new \Symfony\Config\EasyAdmin\Design\Assets\FaviconConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "favicon()" has already been initialized. You cannot pass values the second time you call favicon().');
        }

        return $this->favicon;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('css', $value)) {
            $this->_usedProperties['css'] = true;
            $this->css = $value['css'];
            unset($value['css']);
        }

        if (array_key_exists('js', $value)) {
            $this->_usedProperties['js'] = true;
            $this->js = $value['js'];
            unset($value['js']);
        }

        if (array_key_exists('favicon', $value)) {
            $this->_usedProperties['favicon'] = true;
            $this->favicon = \is_array($value['favicon']) ? new \Symfony\Config\EasyAdmin\Design\Assets\FaviconConfig($value['favicon']) : $value['favicon'];
            unset($value['favicon']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['css'])) {
            $output['css'] = $this->css;
        }
        if (isset($this->_usedProperties['js'])) {
            $output['js'] = $this->js;
        }
        if (isset($this->_usedProperties['favicon'])) {
            $output['favicon'] = $this->favicon instanceof \Symfony\Config\EasyAdmin\Design\Assets\FaviconConfig ? $this->favicon->toArray() : $this->favicon;
        }

        return $output;
    }

}
