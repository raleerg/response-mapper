<?php

namespace ResponseMapperTests\Fixtures\Models\LinkedInModels;

use ResponseMapperTests\Fixtures\Models\ArrayAccessObject;

/**
 * Class FacetContainers
 * @package ResponseMapperTests
 */
class FacetContainers extends ArrayAccessObject
{
    /** @var string */
    protected $facetType;

    /** @var boolean */
    protected $isPremiumFacet;

    /** @var boolean */
    protected $hasSelectedFacets;

    /** @var FacetValues[] */
    protected $facetValues;

    /** @var string */
    protected $shortName;

    /** @var integer */
    protected $numSelectedFacets;

    /** @var string */
    protected $isNotDecorated;

    /**
     * @param string $facetType
     */
    public function setFacetType($facetType)
    {
        $this->facetType = $facetType;
    }

    /**
     * @param bool $isPremiumFacet
     */
    public function setIsPremiumFacet($isPremiumFacet)
    {
        $this->isPremiumFacet = $isPremiumFacet;
    }

    /**
     * @param bool $hasSelectedFacets
     */
    public function setHasSelectedFacets($hasSelectedFacets)
    {
        $this->hasSelectedFacets = $hasSelectedFacets;
    }

    /**
     * @param FacetValues $facetValues
     */
    public function setFacetValues($facetValues)
    {
        $this->facetValues = $facetValues;
    }

    /**
     * @param string $shortName
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;
    }

    /**
     * @param int $numSelectedFacets
     */
    public function setNumSelectedFacets($numSelectedFacets)
    {
        $this->numSelectedFacets = $numSelectedFacets;
    }

    /**
     * @param string $isNotDecorated
     */
    public function setIsNotDecorated($isNotDecorated)
    {
        $this->isNotDecorated = $isNotDecorated;
    }

    /**
     * @return string
     */
    public function getFacetType()
    {
        return $this->facetType;
    }

    /**
     * @return bool
     */
    public function getIsPremiumFacet()
    {
        return $this->isPremiumFacet;
    }

    /**
     * @return bool
     */
    public function getHasSelectedFacets()
    {
        return $this->hasSelectedFacets;
    }

    /**
     * @return FacetValues
     */
    public function getFacetValues()
    {
        return $this->facetValues;
    }

    /**
     * @return string
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * @return int
     */
    public function getNumSelectedFacets()
    {
        return $this->numSelectedFacets;
    }

    /**
     * @return string
     */
    public function getIsNotDecorated()
    {
        return $this->isNotDecorated;
    }
}
