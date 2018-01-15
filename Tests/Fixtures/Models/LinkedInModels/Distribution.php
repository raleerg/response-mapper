<?php

namespace ResponseMapperTests\Fixtures\Models\LinkedInModels;

use ResponseMapperTests\Fixtures\Models\ArrayAccessObject;

/**
 * Class Distribution
 * @package Infrastructure\WebServiceClient\LinkedInApi\ApiSpecification\Models\Response
 */
class Distribution extends ArrayAccessObject
{
    /** @var LinkedInDistributionTarget */
    protected $linkedInDistributionTarget;

    /**
     * @param LinkedInDistributionTarget $linkedInDistributionTarget
     */
    public function setLinkedInDistributionTarget($linkedInDistributionTarget)
    {
        $this->linkedInDistributionTarget = $linkedInDistributionTarget;
    }

    /**
     * @return LinkedInDistributionTarget
     */
    public function getLinkedInDistributionTarget()
    {
        return $this->linkedInDistributionTarget;
    }
}
