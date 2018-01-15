<?php

namespace ResponseMapperTests\Fixtures\Models\LinkedInModels;

use ResponseMapperTests\Fixtures\Models\ArrayAccessObject;

/**
 * Class Metadata
 * @package ResponseMapperTests
 */
class Metadata extends ArrayAccessObject
{
    /** @var string */
    protected $primaryType;

    /** @var FacetContainers[] */
    protected $facetContainers;

    /**
     * @param string $primaryType
     */
    public function setPrimaryType($primaryType)
    {
        $this->primaryType = $primaryType;
    }

    /**
     * @param FacetContainers[] $facetContainers
     */
    public function setFacetContainers($facetContainers)
    {
        $this->facetContainers = $facetContainers;
    }

    /**
     * @return string
     */
    public function getPrimaryType()
    {
        return $this->primaryType;
    }

    /**
     * @return FacetContainers[]
     */
    public function getFacetContainers()
    {
        return $this->facetContainers;
    }
}
