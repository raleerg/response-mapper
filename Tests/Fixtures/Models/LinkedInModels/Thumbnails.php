<?php

namespace ResponseMapperTests\Fixtures\Models\LinkedInModels;

use ResponseMapperTests\Fixtures\Models\ArrayAccessObject;

/**
 * Class Thumbnails
 * @package ResponseMapperTests
 */
class Thumbnails extends ArrayAccessObject
{
    /** @var ImageSpecificContent */
    protected $imageSpecificContent;

    /** @var string */
    protected $resolvedUrl;

    /**
     * @param ImageSpecificContent $imageSpecificContent
     */
    public function setImageSpecificContent($imageSpecificContent)
    {
        $this->imageSpecificContent = $imageSpecificContent;
    }

    /**
     * @param string $resolvedUrl
     */
    public function setResolvedUrl($resolvedUrl)
    {
        $this->resolvedUrl = $resolvedUrl;
    }

    /**
     * @return ImageSpecificContent
     */
    public function getImageSpecificContent()
    {
        return $this->imageSpecificContent;
    }

    /**
     * @return string
     */
    public function getResolvedUrl()
    {
        return $this->resolvedUrl;
    }
}
