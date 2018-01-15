<?php

namespace ResponseMapperTests\Fixtures\Models\LinkedInModels;

use ResponseMapperTests\Fixtures\Models\ArrayAccessObject;

/**
 * Class SearchOrganization
 * @package ResponseMapperTests
 */
class SearchOrganization extends ArrayAccessObject
{
    /** @var Metadata */
    protected $metadata;

    /** @var Elements[] */
    protected $elements;

    /** @var Paging */
    protected $paging;

    /**
     * @param Metadata $metadata
     */
    public function setMetadata($metadata)
    {
        $this->metadata = $metadata;
    }

    /**
     * @param Elements[] $elements
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
     * @return Metadata
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @return Elements[]
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
