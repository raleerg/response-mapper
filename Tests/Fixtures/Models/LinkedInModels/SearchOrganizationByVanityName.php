<?php

namespace ResponseMapperTests\Fixtures\Models\LinkedInModels;

use ResponseMapperTests\Fixtures\Models\ArrayAccessObject;

/**
 * Class SearchOrganizationByVanityName
 * @package ResponseMapperTests
 */
class SearchOrganizationByVanityName extends ArrayAccessObject
{
    /** @var Organizations[] */
    protected $elements;

    /** @var Paging */
    protected $paging;

    /**
     * @param Organizations[] $elements
     */
    public function setElements($elements)
    {
        $this->elements = $elements;
    }

    /**
     * @param Paging $paging
     */
    public function setPaging($paging)
    {
        $this->paging = $paging;
    }

    /**
     * @return Organizations[]
     */
    public function getElements()
    {
        return $this->elements;
    }

    /**
     * @return Paging
     */
    public function getPaging()
    {
        return $this->paging;
    }
}
