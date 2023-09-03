<?php

namespace Symfony\Config\EasyAdmin\Design;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TemplatesConfig 
{
    private $layout;
    private $menu;
    private $edit;
    private $list;
    private $new;
    private $show;
    private $action;
    private $exception;
    private $flashMessages;
    private $paginator;
    private $fieldArray;
    private $fieldAssociation;
    private $fieldAvatar;
    private $fieldBigint;
    private $fieldBoolean;
    private $fieldCountry;
    private $fieldDate;
    private $fieldDatetime;
    private $fieldDatetimetz;
    private $fieldDecimal;
    private $fieldEmail;
    private $fieldFloat;
    private $fieldId;
    private $fieldImage;
    private $fieldInteger;
    private $fieldRaw;
    private $fieldSimpleArray;
    private $fieldSmallint;
    private $fieldString;
    private $fieldTel;
    private $fieldText;
    private $fieldTime;
    private $fieldToggle;
    private $fieldUrl;
    private $labelEmpty;
    private $labelInaccessible;
    private $labelNull;
    private $labelUndefined;
    private $_usedProperties = [];

    /**
     * Used to decorate the main templates (list, edit, new and show)
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function layout($value): self
    {
        $this->_usedProperties['layout'] = true;
        $this->layout = $value;

        return $this;
    }

    /**
     * Used to render the main menu
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function menu($value): self
    {
        $this->_usedProperties['menu'] = true;
        $this->menu = $value;

        return $this;
    }

    /**
     * Used to render the page where entities are edited
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function edit($value): self
    {
        $this->_usedProperties['edit'] = true;
        $this->edit = $value;

        return $this;
    }

    /**
     * Used to render the listing page and the search results page
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function list($value): self
    {
        $this->_usedProperties['list'] = true;
        $this->list = $value;

        return $this;
    }

    /**
     * Used to render the page where new entities are created
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function new($value): self
    {
        $this->_usedProperties['new'] = true;
        $this->new = $value;

        return $this;
    }

    /**
     * Used to render the contents stored by a given entity
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function show($value): self
    {
        $this->_usedProperties['show'] = true;
        $this->show = $value;

        return $this;
    }

    /**
     * Used to render an action for a given entity
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function action($value): self
    {
        $this->_usedProperties['action'] = true;
        $this->action = $value;

        return $this;
    }

    /**
     * Used to render the error page when some exception happens
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function exception($value): self
    {
        $this->_usedProperties['exception'] = true;
        $this->exception = $value;

        return $this;
    }

    /**
     * Used to render the notification area were flash messages are displayed
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function flashMessages($value): self
    {
        $this->_usedProperties['flashMessages'] = true;
        $this->flashMessages = $value;

        return $this;
    }

    /**
     * Used to render the paginator in the list page
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function paginator($value): self
    {
        $this->_usedProperties['paginator'] = true;
        $this->paginator = $value;

        return $this;
    }

    /**
     * Used to render array field types
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldArray($value): self
    {
        $this->_usedProperties['fieldArray'] = true;
        $this->fieldArray = $value;

        return $this;
    }

    /**
     * Used to render fields that store Doctrine associations
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldAssociation($value): self
    {
        $this->_usedProperties['fieldAssociation'] = true;
        $this->fieldAssociation = $value;

        return $this;
    }

    /**
     * Used to render fields related to user avatar images
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldAvatar($value): self
    {
        $this->_usedProperties['fieldAvatar'] = true;
        $this->fieldAvatar = $value;

        return $this;
    }

    /**
     * Used to render bigint field types
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldBigint($value): self
    {
        $this->_usedProperties['fieldBigint'] = true;
        $this->fieldBigint = $value;

        return $this;
    }

    /**
     * Used to render boolean field types
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldBoolean($value): self
    {
        $this->_usedProperties['fieldBoolean'] = true;
        $this->fieldBoolean = $value;

        return $this;
    }

    /**
     * Used to render the country names and/or flags
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldCountry($value): self
    {
        $this->_usedProperties['fieldCountry'] = true;
        $this->fieldCountry = $value;

        return $this;
    }

    /**
     * Used to render date and date_immutable field types
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldDate($value): self
    {
        $this->_usedProperties['fieldDate'] = true;
        $this->fieldDate = $value;

        return $this;
    }

    /**
     * Used to render datetime and datetime_immutable field types
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldDatetime($value): self
    {
        $this->_usedProperties['fieldDatetime'] = true;
        $this->fieldDatetime = $value;

        return $this;
    }

    /**
     * Used to render datetimetz field types
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldDatetimetz($value): self
    {
        $this->_usedProperties['fieldDatetimetz'] = true;
        $this->fieldDatetimetz = $value;

        return $this;
    }

    /**
     * Used to render decimal field types
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldDecimal($value): self
    {
        $this->_usedProperties['fieldDecimal'] = true;
        $this->fieldDecimal = $value;

        return $this;
    }

    /**
     * Used to render clickable email addresses
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldEmail($value): self
    {
        $this->_usedProperties['fieldEmail'] = true;
        $this->fieldEmail = $value;

        return $this;
    }

    /**
     * Used to render float field types
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldFloat($value): self
    {
        $this->_usedProperties['fieldFloat'] = true;
        $this->fieldFloat = $value;

        return $this;
    }

    /**
     * Used to render the field called "id". This avoids formatting its value as any other regular number (with decimals and thousand separators) 
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldId($value): self
    {
        $this->_usedProperties['fieldId'] = true;
        $this->fieldId = $value;

        return $this;
    }

    /**
     * Used to render image field types (a special type that displays the image contents)
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldImage($value): self
    {
        $this->_usedProperties['fieldImage'] = true;
        $this->fieldImage = $value;

        return $this;
    }

    /**
     * Used to render integer field types
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldInteger($value): self
    {
        $this->_usedProperties['fieldInteger'] = true;
        $this->fieldInteger = $value;

        return $this;
    }

    /**
     * Used to render unescaped values
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldRaw($value): self
    {
        $this->_usedProperties['fieldRaw'] = true;
        $this->fieldRaw = $value;

        return $this;
    }

    /**
     * Used to render simple array field types
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldSimpleArray($value): self
    {
        $this->_usedProperties['fieldSimpleArray'] = true;
        $this->fieldSimpleArray = $value;

        return $this;
    }

    /**
     * Used to render smallint field types
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldSmallint($value): self
    {
        $this->_usedProperties['fieldSmallint'] = true;
        $this->fieldSmallint = $value;

        return $this;
    }

    /**
     * Used to render string field types
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldString($value): self
    {
        $this->_usedProperties['fieldString'] = true;
        $this->fieldString = $value;

        return $this;
    }

    /**
     * Used to render clickable telephone number
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldTel($value): self
    {
        $this->_usedProperties['fieldTel'] = true;
        $this->fieldTel = $value;

        return $this;
    }

    /**
     * Used to render text field types
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldText($value): self
    {
        $this->_usedProperties['fieldText'] = true;
        $this->fieldText = $value;

        return $this;
    }

    /**
     * Used to render time and time_immutable field types
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldTime($value): self
    {
        $this->_usedProperties['fieldTime'] = true;
        $this->fieldTime = $value;

        return $this;
    }

    /**
     * Used to render toggle field types (a special type that display booleans as flip switches)
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldToggle($value): self
    {
        $this->_usedProperties['fieldToggle'] = true;
        $this->fieldToggle = $value;

        return $this;
    }

    /**
     * Used to render clickable URLs
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldUrl($value): self
    {
        $this->_usedProperties['fieldUrl'] = true;
        $this->fieldUrl = $value;

        return $this;
    }

    /**
     * Used when the field to render is an empty collection
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function labelEmpty($value): self
    {
        $this->_usedProperties['labelEmpty'] = true;
        $this->labelEmpty = $value;

        return $this;
    }

    /**
     * Used when is not possible to access the value of the field to render (there is no getter or public field)
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function labelInaccessible($value): self
    {
        $this->_usedProperties['labelInaccessible'] = true;
        $this->labelInaccessible = $value;

        return $this;
    }

    /**
     * Used when the value of the field to render is null
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function labelNull($value): self
    {
        $this->_usedProperties['labelNull'] = true;
        $this->labelNull = $value;

        return $this;
    }

    /**
     * Used when any kind of error or exception happens when trying to access the value of the field to render
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function labelUndefined($value): self
    {
        $this->_usedProperties['labelUndefined'] = true;
        $this->labelUndefined = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('layout', $value)) {
            $this->_usedProperties['layout'] = true;
            $this->layout = $value['layout'];
            unset($value['layout']);
        }

        if (array_key_exists('menu', $value)) {
            $this->_usedProperties['menu'] = true;
            $this->menu = $value['menu'];
            unset($value['menu']);
        }

        if (array_key_exists('edit', $value)) {
            $this->_usedProperties['edit'] = true;
            $this->edit = $value['edit'];
            unset($value['edit']);
        }

        if (array_key_exists('list', $value)) {
            $this->_usedProperties['list'] = true;
            $this->list = $value['list'];
            unset($value['list']);
        }

        if (array_key_exists('new', $value)) {
            $this->_usedProperties['new'] = true;
            $this->new = $value['new'];
            unset($value['new']);
        }

        if (array_key_exists('show', $value)) {
            $this->_usedProperties['show'] = true;
            $this->show = $value['show'];
            unset($value['show']);
        }

        if (array_key_exists('action', $value)) {
            $this->_usedProperties['action'] = true;
            $this->action = $value['action'];
            unset($value['action']);
        }

        if (array_key_exists('exception', $value)) {
            $this->_usedProperties['exception'] = true;
            $this->exception = $value['exception'];
            unset($value['exception']);
        }

        if (array_key_exists('flash_messages', $value)) {
            $this->_usedProperties['flashMessages'] = true;
            $this->flashMessages = $value['flash_messages'];
            unset($value['flash_messages']);
        }

        if (array_key_exists('paginator', $value)) {
            $this->_usedProperties['paginator'] = true;
            $this->paginator = $value['paginator'];
            unset($value['paginator']);
        }

        if (array_key_exists('field_array', $value)) {
            $this->_usedProperties['fieldArray'] = true;
            $this->fieldArray = $value['field_array'];
            unset($value['field_array']);
        }

        if (array_key_exists('field_association', $value)) {
            $this->_usedProperties['fieldAssociation'] = true;
            $this->fieldAssociation = $value['field_association'];
            unset($value['field_association']);
        }

        if (array_key_exists('field_avatar', $value)) {
            $this->_usedProperties['fieldAvatar'] = true;
            $this->fieldAvatar = $value['field_avatar'];
            unset($value['field_avatar']);
        }

        if (array_key_exists('field_bigint', $value)) {
            $this->_usedProperties['fieldBigint'] = true;
            $this->fieldBigint = $value['field_bigint'];
            unset($value['field_bigint']);
        }

        if (array_key_exists('field_boolean', $value)) {
            $this->_usedProperties['fieldBoolean'] = true;
            $this->fieldBoolean = $value['field_boolean'];
            unset($value['field_boolean']);
        }

        if (array_key_exists('field_country', $value)) {
            $this->_usedProperties['fieldCountry'] = true;
            $this->fieldCountry = $value['field_country'];
            unset($value['field_country']);
        }

        if (array_key_exists('field_date', $value)) {
            $this->_usedProperties['fieldDate'] = true;
            $this->fieldDate = $value['field_date'];
            unset($value['field_date']);
        }

        if (array_key_exists('field_datetime', $value)) {
            $this->_usedProperties['fieldDatetime'] = true;
            $this->fieldDatetime = $value['field_datetime'];
            unset($value['field_datetime']);
        }

        if (array_key_exists('field_datetimetz', $value)) {
            $this->_usedProperties['fieldDatetimetz'] = true;
            $this->fieldDatetimetz = $value['field_datetimetz'];
            unset($value['field_datetimetz']);
        }

        if (array_key_exists('field_decimal', $value)) {
            $this->_usedProperties['fieldDecimal'] = true;
            $this->fieldDecimal = $value['field_decimal'];
            unset($value['field_decimal']);
        }

        if (array_key_exists('field_email', $value)) {
            $this->_usedProperties['fieldEmail'] = true;
            $this->fieldEmail = $value['field_email'];
            unset($value['field_email']);
        }

        if (array_key_exists('field_float', $value)) {
            $this->_usedProperties['fieldFloat'] = true;
            $this->fieldFloat = $value['field_float'];
            unset($value['field_float']);
        }

        if (array_key_exists('field_id', $value)) {
            $this->_usedProperties['fieldId'] = true;
            $this->fieldId = $value['field_id'];
            unset($value['field_id']);
        }

        if (array_key_exists('field_image', $value)) {
            $this->_usedProperties['fieldImage'] = true;
            $this->fieldImage = $value['field_image'];
            unset($value['field_image']);
        }

        if (array_key_exists('field_integer', $value)) {
            $this->_usedProperties['fieldInteger'] = true;
            $this->fieldInteger = $value['field_integer'];
            unset($value['field_integer']);
        }

        if (array_key_exists('field_raw', $value)) {
            $this->_usedProperties['fieldRaw'] = true;
            $this->fieldRaw = $value['field_raw'];
            unset($value['field_raw']);
        }

        if (array_key_exists('field_simple_array', $value)) {
            $this->_usedProperties['fieldSimpleArray'] = true;
            $this->fieldSimpleArray = $value['field_simple_array'];
            unset($value['field_simple_array']);
        }

        if (array_key_exists('field_smallint', $value)) {
            $this->_usedProperties['fieldSmallint'] = true;
            $this->fieldSmallint = $value['field_smallint'];
            unset($value['field_smallint']);
        }

        if (array_key_exists('field_string', $value)) {
            $this->_usedProperties['fieldString'] = true;
            $this->fieldString = $value['field_string'];
            unset($value['field_string']);
        }

        if (array_key_exists('field_tel', $value)) {
            $this->_usedProperties['fieldTel'] = true;
            $this->fieldTel = $value['field_tel'];
            unset($value['field_tel']);
        }

        if (array_key_exists('field_text', $value)) {
            $this->_usedProperties['fieldText'] = true;
            $this->fieldText = $value['field_text'];
            unset($value['field_text']);
        }

        if (array_key_exists('field_time', $value)) {
            $this->_usedProperties['fieldTime'] = true;
            $this->fieldTime = $value['field_time'];
            unset($value['field_time']);
        }

        if (array_key_exists('field_toggle', $value)) {
            $this->_usedProperties['fieldToggle'] = true;
            $this->fieldToggle = $value['field_toggle'];
            unset($value['field_toggle']);
        }

        if (array_key_exists('field_url', $value)) {
            $this->_usedProperties['fieldUrl'] = true;
            $this->fieldUrl = $value['field_url'];
            unset($value['field_url']);
        }

        if (array_key_exists('label_empty', $value)) {
            $this->_usedProperties['labelEmpty'] = true;
            $this->labelEmpty = $value['label_empty'];
            unset($value['label_empty']);
        }

        if (array_key_exists('label_inaccessible', $value)) {
            $this->_usedProperties['labelInaccessible'] = true;
            $this->labelInaccessible = $value['label_inaccessible'];
            unset($value['label_inaccessible']);
        }

        if (array_key_exists('label_null', $value)) {
            $this->_usedProperties['labelNull'] = true;
            $this->labelNull = $value['label_null'];
            unset($value['label_null']);
        }

        if (array_key_exists('label_undefined', $value)) {
            $this->_usedProperties['labelUndefined'] = true;
            $this->labelUndefined = $value['label_undefined'];
            unset($value['label_undefined']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['layout'])) {
            $output['layout'] = $this->layout;
        }
        if (isset($this->_usedProperties['menu'])) {
            $output['menu'] = $this->menu;
        }
        if (isset($this->_usedProperties['edit'])) {
            $output['edit'] = $this->edit;
        }
        if (isset($this->_usedProperties['list'])) {
            $output['list'] = $this->list;
        }
        if (isset($this->_usedProperties['new'])) {
            $output['new'] = $this->new;
        }
        if (isset($this->_usedProperties['show'])) {
            $output['show'] = $this->show;
        }
        if (isset($this->_usedProperties['action'])) {
            $output['action'] = $this->action;
        }
        if (isset($this->_usedProperties['exception'])) {
            $output['exception'] = $this->exception;
        }
        if (isset($this->_usedProperties['flashMessages'])) {
            $output['flash_messages'] = $this->flashMessages;
        }
        if (isset($this->_usedProperties['paginator'])) {
            $output['paginator'] = $this->paginator;
        }
        if (isset($this->_usedProperties['fieldArray'])) {
            $output['field_array'] = $this->fieldArray;
        }
        if (isset($this->_usedProperties['fieldAssociation'])) {
            $output['field_association'] = $this->fieldAssociation;
        }
        if (isset($this->_usedProperties['fieldAvatar'])) {
            $output['field_avatar'] = $this->fieldAvatar;
        }
        if (isset($this->_usedProperties['fieldBigint'])) {
            $output['field_bigint'] = $this->fieldBigint;
        }
        if (isset($this->_usedProperties['fieldBoolean'])) {
            $output['field_boolean'] = $this->fieldBoolean;
        }
        if (isset($this->_usedProperties['fieldCountry'])) {
            $output['field_country'] = $this->fieldCountry;
        }
        if (isset($this->_usedProperties['fieldDate'])) {
            $output['field_date'] = $this->fieldDate;
        }
        if (isset($this->_usedProperties['fieldDatetime'])) {
            $output['field_datetime'] = $this->fieldDatetime;
        }
        if (isset($this->_usedProperties['fieldDatetimetz'])) {
            $output['field_datetimetz'] = $this->fieldDatetimetz;
        }
        if (isset($this->_usedProperties['fieldDecimal'])) {
            $output['field_decimal'] = $this->fieldDecimal;
        }
        if (isset($this->_usedProperties['fieldEmail'])) {
            $output['field_email'] = $this->fieldEmail;
        }
        if (isset($this->_usedProperties['fieldFloat'])) {
            $output['field_float'] = $this->fieldFloat;
        }
        if (isset($this->_usedProperties['fieldId'])) {
            $output['field_id'] = $this->fieldId;
        }
        if (isset($this->_usedProperties['fieldImage'])) {
            $output['field_image'] = $this->fieldImage;
        }
        if (isset($this->_usedProperties['fieldInteger'])) {
            $output['field_integer'] = $this->fieldInteger;
        }
        if (isset($this->_usedProperties['fieldRaw'])) {
            $output['field_raw'] = $this->fieldRaw;
        }
        if (isset($this->_usedProperties['fieldSimpleArray'])) {
            $output['field_simple_array'] = $this->fieldSimpleArray;
        }
        if (isset($this->_usedProperties['fieldSmallint'])) {
            $output['field_smallint'] = $this->fieldSmallint;
        }
        if (isset($this->_usedProperties['fieldString'])) {
            $output['field_string'] = $this->fieldString;
        }
        if (isset($this->_usedProperties['fieldTel'])) {
            $output['field_tel'] = $this->fieldTel;
        }
        if (isset($this->_usedProperties['fieldText'])) {
            $output['field_text'] = $this->fieldText;
        }
        if (isset($this->_usedProperties['fieldTime'])) {
            $output['field_time'] = $this->fieldTime;
        }
        if (isset($this->_usedProperties['fieldToggle'])) {
            $output['field_toggle'] = $this->fieldToggle;
        }
        if (isset($this->_usedProperties['fieldUrl'])) {
            $output['field_url'] = $this->fieldUrl;
        }
        if (isset($this->_usedProperties['labelEmpty'])) {
            $output['label_empty'] = $this->labelEmpty;
        }
        if (isset($this->_usedProperties['labelInaccessible'])) {
            $output['label_inaccessible'] = $this->labelInaccessible;
        }
        if (isset($this->_usedProperties['labelNull'])) {
            $output['label_null'] = $this->labelNull;
        }
        if (isset($this->_usedProperties['labelUndefined'])) {
            $output['label_undefined'] = $this->labelUndefined;
        }

        return $output;
    }

}
