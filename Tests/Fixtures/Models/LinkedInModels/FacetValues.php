<?php

namespace ResponseMapperTests\Fixtures\Models\LinkedInModels;

use ResponseMapperTests\Fixtures\Models\ArrayAccessObject;

/**
 * Class FacetValues
 * @package ResponseMapperTests
 */
class FacetValues extends ArrayAccessObject
{
    /** @var integer */
    protected $count;

    /** @var boolean */
    protected $isSelected;

    /** @var string */
    protected $value;

    /**
     * @param int $count
     */
    public function setCount($count)
    {
        $this->count = $count;
    }

    /**
     * @param bool $isSelected
     */
    public function setIsSelected($isSelected)
    {
        $this->isSelected = $isSelected;
    }

    /**
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return bool
     */
    public function getIsSelected()
    {
        return $this->isSelected;
    }
}
