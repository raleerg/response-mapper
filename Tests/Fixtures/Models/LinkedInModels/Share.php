<?php

namespace ResponseMapperTests\Fixtures\Models\LinkedInModels;

use ResponseMapperTests\Fixtures\Models\ArrayAccessObject;

/**
 * Class Share
 * @package ResponseMapperTests
 */
class Share extends ArrayAccessObject
{
    /** @var string */
    protected $owner;

    /** @var string */
    protected $activity;

    /** @var string */
    protected $edited;

    /** @var Created */
    protected $created;

    /** @var integer */
    protected $id;

    /** @var Date */
    protected $lastModified;

    /** @var Text */
    protected $text;

    /** @var Distribution */
    protected $distribution;

    /** @var Content */
    protected $content;

    /**
     * @param string $owner
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
    }

    /**
     * @param string $activity
     */
    public function setActivity($activity)
    {
        $this->activity = $activity;
    }

    /**
     * @param string $edited
     */
    public function setEdited($edited)
    {
        $this->edited = $edited;
    }

    /**
     * @param Created $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param Date $lastModified
     */
    public function setLastModified($lastModified)
    {
        $this->lastModified = $lastModified;
    }

    /**
     * @param Text $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @param Distribution $distribution
     */
    public function setDistribution($distribution)
    {
        $this->distribution = $distribution;
    }

    /**
     * @param Content $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @return string
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * @return string
     */
    public function getEdited()
    {
        return $this->edited;
    }

    /**
     * @return Content
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Date
     */
    public function getLastModified()
    {
        return $this->lastModified;
    }

    /**
     * @return Text
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @return Distribution
     */
    public function getDistribution()
    {
        return $this->distribution;
    }

    /**
     * @return Created
     */
    public function getCreated()
    {
        return $this->created;
    }
}
