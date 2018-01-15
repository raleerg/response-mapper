<?php

namespace ResponseMapperTests\Fixtures\Models\LinkedInModels;

use ResponseMapperTests\Fixtures\Models\ArrayAccessObject;

/**
 * Class ImageSpecificContent
 * @package ResponseMapperTests
 */
class ImageSpecificContent extends ArrayAccessObject
{
    /** @var integer */
    protected $size;

    /** @var integer */
    protected $width;

    /** @var integer */
    protected $height;

    /**
     * @param integer $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @param integer $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @param integer $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return integer
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @return integer
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @return integer
     */
    public function getHeight()
    {
        return $this->height;
    }
}
