<?php

namespace ResponseMapperTests\Fixtures\Models\LinkedInModels;

use ResponseMapperTests\Fixtures\Models\ArrayAccessObject;

/**
 * Class AlternativeNames
 * @package ResponseMapperTests
 */
class AlternativeNames extends ArrayAccessObject
{
    /** @var Locale */
    protected $locale;

    /** @var string */
    protected $value;

    /**
     * @param Locale $locale
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
    }

    /**
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return Locale
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
}
