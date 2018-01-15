<?php

namespace ResponseMapperTests\Fixtures\Models\LinkedInModels;

use ResponseMapperTests\Fixtures\Models\ArrayAccessObject;

/**
 * Class SocialActions
 * @package Infrastructure\WebServiceClient\LinkedInApi\ApiSpecification\Models\Response
 * @todo check the format of statuses and errors
 */
class SocialActions extends ArrayAccessObject
{
    /** @var array */
    protected $statuses;

    /** @var ShareResults[] */
    protected $results;

    /** @var array */
    protected $errors;

    /**
     * @param array $statuses
     */
    public function setStatuses($statuses)
    {
        $this->statuses = $statuses;
    }

    /**
     * @param ShareResults[] $results
     */
    public function setResults($results)
    {
        $this->results = $this->getResultsWithKeyAsAttribute($results);
    }

    /**
     * @param array $errors
     */
    public function setErrors($errors)
    {
        $this->errors = $errors;
    }

    /**
     * @return array
     */
    public function getStatuses()
    {
        return $this->statuses;
    }

    /**
     * @return array
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @return ShareResults[]
     */
    public function getResults()
    {
        return $this->results;
    }

    private function getResultsWithKeyAsAttribute($results1)
    {
        foreach ($results1 as $shareUrn => $result) {
            $results1[$shareUrn]->setShareUrn($shareUrn);
        }
        return $results1;
    }
}
