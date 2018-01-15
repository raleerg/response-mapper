<?php

namespace ResponseMapperTests\Fixtures\Models\LinkedInModels;

use ResponseMapperTests\Fixtures\Models\ArrayAccessObject;

/**
 * Class Created
 * @package ResponseMapperTests
 */
class Created extends ArrayAccessObject
{
    /** @var string */
    protected $actor;

    /** @var integer */
    protected $time;

    /**
     * @param string $actor
     */
    public function setActor($actor)
    {
        $this->actor = $actor;
    }

    /**
     * @param integer $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     * @return string
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * @return integer
     */
    public function getTime()
    {
        return $this->time;
    }
}
