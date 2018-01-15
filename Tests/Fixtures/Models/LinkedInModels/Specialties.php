<?php

namespace ResponseMapperTests\Fixtures\Models\LinkedInModels;

use ResponseMapperTests\Fixtures\Models\ArrayAccessObject;

/**
 * Class Specialties
 * @package ResponseMapperTests
 */
class Specialties extends ArrayAccessObject
{
    /** @var Locale */
    protected $locale;

    /** @var array */
    protected $tags;

    /**
     * @param Locale $locale
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
    }

    /**
     * @param array $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    /**
     * @return Locale
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @return array
     */
    public function getTags()
    {
        return $this->tags;
    }
}
