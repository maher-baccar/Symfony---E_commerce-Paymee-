<?php

namespace Symfony\Config\EasyAdmin;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class FormatsConfig 
{
    private $date;
    private $time;
    private $datetime;
    private $number;
    private $dateinterval;
    private $_usedProperties = [];

    /**
     * The PHP date format applied to "date" and "date_immutable" field types.
     * @example d/m/Y (see http://php.net/manual/en/function.date.php)
     * @default 'Y-m-d'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function date($value): self
    {
        $this->_usedProperties['date'] = true;
        $this->date = $value;

        return $this;
    }

    /**
     * The PHP time format applied to "time" and "time_immutable" field types.
     * @example h:i a (see http://php.net/date)
     * @default 'H:i:s'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function time($value): self
    {
        $this->_usedProperties['time'] = true;
        $this->time = $value;

        return $this;
    }

    /**
     * The PHP date/time format applied to "datetime" and "datetime_immutable" field types.
     * @example l, F jS Y / h:i (see http://php.net/date)
     * @default 'F j, Y H:i'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function datetime($value): self
    {
        $this->_usedProperties['datetime'] = true;
        $this->datetime = $value;

        return $this;
    }

    /**
     * The sprintf-compatible format applied to numeric values.
     * @example %.2d (see http://php.net/sprintf)
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function number($value): self
    {
        $this->_usedProperties['number'] = true;
        $this->number = $value;

        return $this;
    }

    /**
     * The PHP dateinterval-compatible format applied to "dateinterval" field types.
     * @example %%y Year(s) %%m Month(s) %%d Day(s) (see http://php.net/manual/en/dateinterval.format.php)
     * @default '%%y Year(s) %%m Month(s) %%d Day(s)'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function dateinterval($value): self
    {
        $this->_usedProperties['dateinterval'] = true;
        $this->dateinterval = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('date', $value)) {
            $this->_usedProperties['date'] = true;
            $this->date = $value['date'];
            unset($value['date']);
        }

        if (array_key_exists('time', $value)) {
            $this->_usedProperties['time'] = true;
            $this->time = $value['time'];
            unset($value['time']);
        }

        if (array_key_exists('datetime', $value)) {
            $this->_usedProperties['datetime'] = true;
            $this->datetime = $value['datetime'];
            unset($value['datetime']);
        }

        if (array_key_exists('number', $value)) {
            $this->_usedProperties['number'] = true;
            $this->number = $value['number'];
            unset($value['number']);
        }

        if (array_key_exists('dateinterval', $value)) {
            $this->_usedProperties['dateinterval'] = true;
            $this->dateinterval = $value['dateinterval'];
            unset($value['dateinterval']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['date'])) {
            $output['date'] = $this->date;
        }
        if (isset($this->_usedProperties['time'])) {
            $output['time'] = $this->time;
        }
        if (isset($this->_usedProperties['datetime'])) {
            $output['datetime'] = $this->datetime;
        }
        if (isset($this->_usedProperties['number'])) {
            $output['number'] = $this->number;
        }
        if (isset($this->_usedProperties['dateinterval'])) {
            $output['dateinterval'] = $this->dateinterval;
        }

        return $output;
    }

}
