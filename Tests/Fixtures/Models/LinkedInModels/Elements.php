<?php

namespace ResponseMapperTests\Fixtures\Models\LinkedInModels;

use ResponseMapperTests\Fixtures\Models\ArrayAccessObject;

/**
 * Class Elements
 * @package ResponseMapperTests
 */
class Elements extends ArrayAccessObject
{
    /**
     * @var Organizations
     * @arrayKey entity~
     */
    protected $entityDetails;

    /** @var string */
    protected $entity;

    /**
     * @param Organizations $entityDetails
     */
    public function setEntityDetails($entityDetails)
    {
        $this->entityDetails = $entityDetails;
    }

    /**
     * @param string $entity
     */
    public function setEntity($entity)
    {
        $this->entity = $entity;
    }

    /**
     * @return Organizations
     */
    public function getEntityDetails()
    {
        return $this->entityDetails;
    }

    /**
     * @return string
     */
    public function getEntity()
    {
        return $this->entity;
    }
}
