<?php

namespace ResponseMapperTests\Fixtures\Models\LinkedInModels;

use ResponseMapperTests\Fixtures\Models\ArrayAccessObject;

/**
 * Class Image
 * @package ResponseMapperTests
 */
class Image extends ArrayAccessObject
{
    /** @var string */
    protected $original;

    /** @var string */
    protected $cropped;

    /** @var CropInfo */
    protected $cropInfo;

    /**
     * @param string $original
     */
    public function setOriginal($original)
    {
        $this->original = $original;
    }

    /**
     * @param string $cropped
     */
    public function setCropped($cropped)
    {
        $this->cropped = $cropped;
    }

    /**
     * @param CropInfo $cropInfo
     */
    public function setCropInfo($cropInfo)
    {
        $this->cropInfo = $cropInfo;
    }

    /**
     * @return string
     */
    public function getOriginal()
    {
        return $this->original;
    }

    /**
     * @return string
     */
    public function getCropped()
    {
        return $this->cropped;
    }

    /**
     * @return CropInfo
     */
    public function getCropInfo()
    {
        return $this->cropInfo;
    }
}
