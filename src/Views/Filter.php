<?php

namespace Rappasoft\LaravelLivewireTables\Views;

/**
 * Class Filter.
 */
class Filter
{
    public const TYPE_SELECT = 'select';
    public const TYPE_TEXTBOX = 'textbox';
    public const TYPE_DATE = 'date';



    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $type;

    /**
     * @var array
     */
    public array $options = [];

    public bool $multiple;
    /**
     * Filter constructor.
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param string $name
     *
     * @return Filter
     */
    public static function make(string $name): Filter
    {
        return new static($name);
    }

    /**
     * @param array $options
     *
     * @return $this
     */
    public function select(array $options = [],bool $multiple = false): Filter
    {
        $this->type = self::TYPE_SELECT;

        $this->multiple = $multiple;

        $this->options = $options;

        return $this;
    }

    public function date(array $options = []): Filter
    {
        $this->type = self::TYPE_DATE;

        $this->options = $options;

        return $this;
    }
    /**
     *
     * @return $this
     */
    public function textbox(): Filter
    {
        $this->type = self::TYPE_TEXTBOX;

        return $this;
    }

    /**
     * @return string
     */
    public function name(): string
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function options(): array
    {
        return $this->options;
    }

    /**
     * @return bool
     */
    public function isSelect(): bool
    {
        return $this->type === self::TYPE_SELECT;
    }

    /**
     * @return bool
     */
    public function isTextbox(): bool
    {
        return $this->type === self::TYPE_TEXTBOX;
    }
    public function isDate(): bool
    {
        return $this->type === self::TYPE_DATE;
    }
}
