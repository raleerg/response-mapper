<?php

namespace ResponseMapperTests\Fixtures\Models\LinkedInModels;

use ResponseMapperTests\Fixtures\Models\ArrayAccessObject;

/**
 * Class Content
 * @package ResponseMapperTests
 */
class Content extends ArrayAccessObject
{
    /** @var ContentEntities[] */
    protected $contentEntities;

    /** @var string */
    protected $shareMediaCategory;

    /** @var string */
    protected $description;

    /** @var string */
    protected $title;

    /**
     * @param ContentEntities[] $contentEntities
     */
    public function setContentEntities($contentEntities)
    {
        $this->contentEntities = $contentEntities;
    }

    /**
     * @param string $shareMediaCategory
     */
    public function setShareMediaCategory($shareMediaCategory)
    {
        $this->shareMediaCategory = $shareMediaCategory;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return ContentEntities[]
     */
    public function getContentEntities()
    {
        return $this->contentEntities;
    }

    /**
     * @return string
     */
    public function getShareMediaCategory()
    {
        return $this->shareMediaCategory;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
}
