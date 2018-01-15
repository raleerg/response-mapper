<?php

namespace ResponseMapperTests\Fixtures\Models\LinkedInModels;

use ResponseMapperTests\Fixtures\Models\ArrayAccessObject;

/**
 * Class ShareResults
 * @package ResponseMapperTests
 */
class ShareResults extends ArrayAccessObject
{
    /** @var CommentsSummary */
    protected $commentsSummary;

    /** @var LikesSummary */
    protected $likesSummary;

    /** @var string */
    protected $target;

    /** @var string */
    protected $shareUrn;

    /**
     * @param CommentsSummary $commentsSummary
     */
    public function setCommentsSummary($commentsSummary)
    {
        $this->commentsSummary = $commentsSummary;
    }

    /**
     * @param LikesSummary $likesSummary
     */
    public function setLikesSummary($likesSummary)
    {
        $this->likesSummary = $likesSummary;
    }

    /**
     * @param string $target
     */
    public function setTarget($target)
    {
        $this->target = $target;
    }

    /**
     * @param string $shareUrn
     */
    public function setShareUrn($shareUrn)
    {
        $this->shareUrn = $shareUrn;
    }

    /**
     * @return string
     */
    public function getShareUrn()
    {
        return $this->shareUrn;
    }

    /**
     * @return CommentsSummary
     */
    public function getCommentsSummary()
    {
        return $this->commentsSummary;
    }

    /**
     * @return LikesSummary
     */
    public function getLikesSummary()
    {
        return $this->likesSummary;
    }

    /**
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }
}
