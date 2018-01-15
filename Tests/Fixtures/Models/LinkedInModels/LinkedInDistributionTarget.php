<?php

namespace ResponseMapperTests\Fixtures\Models\LinkedInModels;

use ResponseMapperTests\Fixtures\Models\ArrayAccessObject;

/**
 * Class LinkedInDistributionTarget
 * @package ResponseMapperTests
 */
class LinkedInDistributionTarget extends ArrayAccessObject
{
    /** @var string @todo check the type */
    protected $visibleToGuest;

    /**
     * @param string $visibleToGuest
     */
    public function setVisibleToGuest($visibleToGuest)
    {
        $this->visibleToGuest = $visibleToGuest;
    }

    /**
     * @return string
     */
    public function getVisibleToGuest()
    {
        return $this->visibleToGuest;
    }
}
