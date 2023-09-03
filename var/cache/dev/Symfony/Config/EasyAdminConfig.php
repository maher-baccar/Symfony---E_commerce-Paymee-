<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'EasyAdmin'.\DIRECTORY_SEPARATOR.'FormatsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'EasyAdmin'.\DIRECTORY_SEPARATOR.'UserConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'EasyAdmin'.\DIRECTORY_SEPARATOR.'DesignConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'EasyAdmin'.\DIRECTORY_SEPARATOR.'ListConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'EasyAdmin'.\DIRECTORY_SEPARATOR.'SearchConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'EasyAdmin'.\DIRECTORY_SEPARATOR.'EditConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'EasyAdmin'.\DIRECTORY_SEPARATOR.'NewConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'EasyAdmin'.\DIRECTORY_SEPARATOR.'ShowConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class EasyAdminConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $siteName;
    private $formats;
    private $disabledActions;
    private $translationDomain;
    private $user;
    private $design;
    private $list;
    private $search;
    private $edit;
    private $new;
    private $show;
    private $entities;
    private $_usedProperties = [];

    /**
     * The name displayed as the title of the administration zone (e.g. company name, project name).
     * @default 'EasyAdmin'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function siteName($value): self
    {
        $this->_usedProperties['siteName'] = true;
        $this->siteName = $value;

        return $this;
    }

    public function formats(array $value = []): \Symfony\Config\EasyAdmin\FormatsConfig
    {
        if (null === $this->formats) {
            $this->_usedProperties['formats'] = true;
            $this->formats = new \Symfony\Config\EasyAdmin\FormatsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "formats()" has already been initialized. You cannot pass values the second time you call formats().');
        }

        return $this->formats;
    }

    /**
     * The names of the actions disabled for all backend entities.
     * @default array (
    )
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function disabledActions($value = array (
    )): self
    {
        $this->_usedProperties['disabledActions'] = true;
        $this->disabledActions = $value;

        return $this;
    }

    /**
     * The translation domain used to translate the main menu and the labels, titles and help messages of all entities.
     * @default 'messages'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function translationDomain($value): self
    {
        $this->_usedProperties['translationDomain'] = true;
        $this->translationDomain = $value;

        return $this;
    }

    public function user(array $value = []): \Symfony\Config\EasyAdmin\UserConfig
    {
        if (null === $this->user) {
            $this->_usedProperties['user'] = true;
            $this->user = new \Symfony\Config\EasyAdmin\UserConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "user()" has already been initialized. You cannot pass values the second time you call user().');
        }

        return $this->user;
    }

    public function design(array $value = []): \Symfony\Config\EasyAdmin\DesignConfig
    {
        if (null === $this->design) {
            $this->_usedProperties['design'] = true;
            $this->design = new \Symfony\Config\EasyAdmin\DesignConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "design()" has already been initialized. You cannot pass values the second time you call design().');
        }

        return $this->design;
    }

    public function list(array $value = []): \Symfony\Config\EasyAdmin\ListConfig
    {
        if (null === $this->list) {
            $this->_usedProperties['list'] = true;
            $this->list = new \Symfony\Config\EasyAdmin\ListConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "list()" has already been initialized. You cannot pass values the second time you call list().');
        }

        return $this->list;
    }

    public function search(array $value = []): \Symfony\Config\EasyAdmin\SearchConfig
    {
        if (null === $this->search) {
            $this->_usedProperties['search'] = true;
            $this->search = new \Symfony\Config\EasyAdmin\SearchConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "search()" has already been initialized. You cannot pass values the second time you call search().');
        }

        return $this->search;
    }

    public function edit(array $value = []): \Symfony\Config\EasyAdmin\EditConfig
    {
        if (null === $this->edit) {
            $this->_usedProperties['edit'] = true;
            $this->edit = new \Symfony\Config\EasyAdmin\EditConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "edit()" has already been initialized. You cannot pass values the second time you call edit().');
        }

        return $this->edit;
    }

    public function new(array $value = []): \Symfony\Config\EasyAdmin\NewConfig
    {
        if (null === $this->new) {
            $this->_usedProperties['new'] = true;
            $this->new = new \Symfony\Config\EasyAdmin\NewConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "new()" has already been initialized. You cannot pass values the second time you call new().');
        }

        return $this->new;
    }

    public function show(array $value = []): \Symfony\Config\EasyAdmin\ShowConfig
    {
        if (null === $this->show) {
            $this->_usedProperties['show'] = true;
            $this->show = new \Symfony\Config\EasyAdmin\ShowConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "show()" has already been initialized. You cannot pass values the second time you call show().');
        }

        return $this->show;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function entities(string $name, $value): self
    {
        $this->_usedProperties['entities'] = true;
        $this->entities[$name] = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'easy_admin';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('site_name', $value)) {
            $this->_usedProperties['siteName'] = true;
            $this->siteName = $value['site_name'];
            unset($value['site_name']);
        }

        if (array_key_exists('formats', $value)) {
            $this->_usedProperties['formats'] = true;
            $this->formats = new \Symfony\Config\EasyAdmin\FormatsConfig($value['formats']);
            unset($value['formats']);
        }

        if (array_key_exists('disabled_actions', $value)) {
            $this->_usedProperties['disabledActions'] = true;
            $this->disabledActions = $value['disabled_actions'];
            unset($value['disabled_actions']);
        }

        if (array_key_exists('translation_domain', $value)) {
            $this->_usedProperties['translationDomain'] = true;
            $this->translationDomain = $value['translation_domain'];
            unset($value['translation_domain']);
        }

        if (array_key_exists('user', $value)) {
            $this->_usedProperties['user'] = true;
            $this->user = new \Symfony\Config\EasyAdmin\UserConfig($value['user']);
            unset($value['user']);
        }

        if (array_key_exists('design', $value)) {
            $this->_usedProperties['design'] = true;
            $this->design = new \Symfony\Config\EasyAdmin\DesignConfig($value['design']);
            unset($value['design']);
        }

        if (array_key_exists('list', $value)) {
            $this->_usedProperties['list'] = true;
            $this->list = new \Symfony\Config\EasyAdmin\ListConfig($value['list']);
            unset($value['list']);
        }

        if (array_key_exists('search', $value)) {
            $this->_usedProperties['search'] = true;
            $this->search = new \Symfony\Config\EasyAdmin\SearchConfig($value['search']);
            unset($value['search']);
        }

        if (array_key_exists('edit', $value)) {
            $this->_usedProperties['edit'] = true;
            $this->edit = new \Symfony\Config\EasyAdmin\EditConfig($value['edit']);
            unset($value['edit']);
        }

        if (array_key_exists('new', $value)) {
            $this->_usedProperties['new'] = true;
            $this->new = new \Symfony\Config\EasyAdmin\NewConfig($value['new']);
            unset($value['new']);
        }

        if (array_key_exists('show', $value)) {
            $this->_usedProperties['show'] = true;
            $this->show = new \Symfony\Config\EasyAdmin\ShowConfig($value['show']);
            unset($value['show']);
        }

        if (array_key_exists('entities', $value)) {
            $this->_usedProperties['entities'] = true;
            $this->entities = $value['entities'];
            unset($value['entities']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['siteName'])) {
            $output['site_name'] = $this->siteName;
        }
        if (isset($this->_usedProperties['formats'])) {
            $output['formats'] = $this->formats->toArray();
        }
        if (isset($this->_usedProperties['disabledActions'])) {
            $output['disabled_actions'] = $this->disabledActions;
        }
        if (isset($this->_usedProperties['translationDomain'])) {
            $output['translation_domain'] = $this->translationDomain;
        }
        if (isset($this->_usedProperties['user'])) {
            $output['user'] = $this->user->toArray();
        }
        if (isset($this->_usedProperties['design'])) {
            $output['design'] = $this->design->toArray();
        }
        if (isset($this->_usedProperties['list'])) {
            $output['list'] = $this->list->toArray();
        }
        if (isset($this->_usedProperties['search'])) {
            $output['search'] = $this->search->toArray();
        }
        if (isset($this->_usedProperties['edit'])) {
            $output['edit'] = $this->edit->toArray();
        }
        if (isset($this->_usedProperties['new'])) {
            $output['new'] = $this->new->toArray();
        }
        if (isset($this->_usedProperties['show'])) {
            $output['show'] = $this->show->toArray();
        }
        if (isset($this->_usedProperties['entities'])) {
            $output['entities'] = $this->entities;
        }

        return $output;
    }

}
