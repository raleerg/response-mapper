<?php

namespace ResponseMapperTests\Fixtures\Models\LinkedInModels;

namespace ResponseMapperTests\Fixtures\Models\LinkedInModels;

use ResponseMapperTests\Fixtures\Models\ArrayAccessObject;

/**
 * Class Date
 * @package ResponseMapperTests
 */
class Date extends ArrayAccessObject
{
    /** @var string */
    protected $actor;

    /** @var string */
    protected $time;

    /**
     * @param string $actor
     */
    public function setActor($actor)
    {
        $this->actor = $actor;
    }

    /**
     * @param string $time
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
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }
}
