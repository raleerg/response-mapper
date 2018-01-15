<?php

namespace ResponseMapperTests\Fixtures\Models\LinkedInModels;

use ResponseMapperTests\Fixtures\Models\ArrayAccessObject;

/**
 * Class ContentEntities
 * @package ResponseMapperTests
 */
class ContentEntities extends ArrayAccessObject
{
    /** @var string */
    protected $description;

    /** @var string */
    protected $entityLocation;

    /** @var string */
    protected $title;

    /** @var Thumbnails[] */
    protected $thumbnails;

    /** @var string */
    protected $entity;

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @param string $entityLocation
     */
    public function setEntityLocation($entityLocation)
    {
        $this->entityLocation = $entityLocation;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @param Thumbnails[] $thumbnails
     */
    public function setThumbnails($thumbnails)
    {
        $this->thumbnails = $thumbnails;
    }

    /**
     * @param string $entity
     */
    public function setEntity($entity)
    {
        $this->entity = $entity;
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
    public function getEntityLocation()
    {
        return $this->entityLocation;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return Thumbnails[]
     */
    public function getThumbnails()
    {
        return $this->thumbnails;
    }

    /**
     * @return string
     */
    public function getEntity()
    {
        return $this->entity;
    }
}
