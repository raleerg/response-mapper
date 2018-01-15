<?php

namespace ResponseMapperTests\Fixtures\Models\LinkedInModels;

use ResponseMapperTests\Fixtures\Models\ArrayAccessObject;

/**
 * Class SharesWithPaging
 * @package ResponseMapperTests
 */
class SharesWithPaging extends ArrayAccessObject
{
    /** @var Share[] */
    protected $elements;

    /** @var Paging */
    protected $paging;

    /**
     * @param Share[] $elements
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
     * @return Share[]
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
