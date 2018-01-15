<?php

namespace ResponseMapperTests\Fixtures\Models\LinkedInModels;

use ResponseMapperTests\Fixtures\Models\ArrayAccessObject;

/**
 * Class FoundedOn
 * @package Infrastructure\WebServiceClient\LinkedInApi\ApiSpecification\Models\Response
 */
class FoundedOn extends ArrayAccessObject
{
    /** @var string */
    protected $year;

    /**
     * @param string $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * @return string
     */
    public function getYear()
    {
        return $this->year;
    }
}
