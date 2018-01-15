<?php

namespace ResponseMapperTests\Fixtures\Models\LinkedInModels;

use ResponseMapperTests\Fixtures\Models\ArrayAccessObject;

/**
 * Class Link
 * @package ResponseMapperTests
 */
class Link extends ArrayAccessObject
{
    /** @var string */
    protected $rel;

    /** @var string */
    protected $href;

    /** @var string */
    protected $type;

    /**
     * @param string $rel
     */
    public function setRel($rel)
    {
        $this->rel = $rel;
    }

    /**
     * @param string $href
     */
    public function setHref($href)
    {
        $this->href = $href;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getRel()
    {
        return $this->rel;
    }

    /**
     * @return string
     */
    public function getHref()
    {
        return $this->href;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}
