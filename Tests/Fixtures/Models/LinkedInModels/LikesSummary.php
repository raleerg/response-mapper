<?php

namespace ResponseMapperTests\Fixtures\Models\LinkedInModels;

use ResponseMapperTests\Fixtures\Models\ArrayAccessObject;

/**
 * Class LikesSummary
 * @package ResponseMapperTests
 */
class LikesSummary extends ArrayAccessObject
{
    /** @var integer */
    protected $totalLikes;

    /**
     * @param int $totalLikes
     */
    public function setTotalLikes($totalLikes)
    {
        $this->totalLikes = $totalLikes;
    }

    /**
     * @return int
     */
    public function getTotalLikes()
    {
        return $this->totalLikes;
    }
}
