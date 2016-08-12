<?php
declare(strict_types = 1);

namespace NewInventor\TagUtility;


class Object
{
    /** @var string */
    protected $name;

    /** @var array */
    protected $params;

    /** @var array */
    protected static $defaultParams = [
        'short' => false,
    ];

    /**
     * Object constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->applyParams([]);
    }


    /**
     * @param array $params
     */
    protected function applyParams(array $params)
    {
        $this->params = array_merge(static::$defaultParams, $params);
    }

    protected static function normalizeName($name)
    {
        $name = preg_replace('/([A-Z])/', '-$1', $name);
        $name = preg_replace('/(_)/', '-', $name);
        return strtolower($name);
    }

    /**
     * @return $this
     */
    public function short()
    {
        $this->params['short'] = true;
        return $this;
    }

    public function options(array $options){
        $this->applyParams($options);
        return $this;
    }
}