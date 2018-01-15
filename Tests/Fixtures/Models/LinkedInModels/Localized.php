<?php

namespace ResponseMapperTests\Fixtures\Models\LinkedInModels;

use ResponseMapperTests\Fixtures\Models\ArrayAccessObject;

/**
 * Class Localized
 * @package ResponseMapperTests
 */
class Localized extends ArrayAccessObject
{
    /** @var string */
    protected $en_US;

    /**
     * @param string $en_US
     */
    public function setEnUS($en_US)
    {
        $this->en_US = $en_US;
    }

    /**
     * @return string
     */
    public function getEnUS()
    {
        return $this->en_US;
    }
}
