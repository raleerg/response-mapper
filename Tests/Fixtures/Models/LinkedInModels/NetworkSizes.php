<?php

namespace ResponseMapperTests\Fixtures\Models\LinkedInModels;

use ResponseMapperTests\Fixtures\Models\ArrayAccessObject;

/**
 * Class NetworkSizes
 * @package ResponseMapperTests
 */
class NetworkSizes extends ArrayAccessObject
{
    /** @var string */
    protected $firstDegreeSize;

    /**
     * @param $firstDegreeSize
     */
    public function setFirstDegreeSize($firstDegreeSize)
    {
        $this->firstDegreeSize = $firstDegreeSize;
    }

    /**
     * @return string
     */
    public function getFirstDegreeSize()
    {
        return $this->firstDegreeSize;
    }
}
