<?php

namespace ResponseMapperTests\Fixtures\Models\LinkedInModels;

use ResponseMapperTests\Fixtures\Models\ArrayAccessObject;

/**
 * Class CommentsSummary
 * @package ResponseMapperTests
 */
class CommentsSummary extends ArrayAccessObject
{
    /** @var integer */
    protected $totalFirstLevelComments;

    /**
     * @param integer $totalFirstLevelComments
     */
    public function setTotalFirstLevelComments($totalFirstLevelComments)
    {
        $this->totalFirstLevelComments = $totalFirstLevelComments;
    }

    /**
     * @return integer
     */
    public function getTotalFirstLevelComments()
    {
        return $this->totalFirstLevelComments;
    }
}
