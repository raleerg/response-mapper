<?php

namespace ResponseMapperTests\Fixtures\Models\LinkedInModels;

use ResponseMapperTests\Fixtures\Models\ArrayAccessObject;

/**
 * Class ParentRelationship
 * @package ResponseMapperTests
 */
class ParentRelationship extends ArrayAccessObject
{
    /** @var string */
    protected $parent;

    /** @var string */
    protected $organizationRelationshipType;

    /** @var string */
    protected $relationshipStatus;

    /**
     * @param string $parent
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    }

    /**
     * @param string $organizationRelationshipType
     */
    public function setOrganizationRelationshipType($organizationRelationshipType)
    {
        $this->organizationRelationshipType = $organizationRelationshipType;
    }

    /**
     * @param string $relationshipStatus
     */
    public function setRelationshipStatus($relationshipStatus)
    {
        $this->relationshipStatus = $relationshipStatus;
    }

    /**
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @return string
     */
    public function getOrganizationRelationshipType()
    {
        return $this->organizationRelationshipType;
    }

    /**
     * @return string
     */
    public function getRelationshipStatus()
    {
        return $this->relationshipStatus;
    }
}
