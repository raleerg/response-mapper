<?php

namespace ResponseMapperTests\Fixtures\Models\LinkedInModels;

use ResponseMapperTests\Fixtures\Models\ArrayAccessObject;

/**
 * Class Name
 * @package ResponseMapperTests
 */
class Name extends ArrayAccessObject
{
    /** @var array */
    protected $localized;

    /** @var Locale */
    protected $preferredLocale;

    /**
     * @param array $localized
     */
    public function setLocalized($localized)
    {
        $this->localized = $localized;
    }

    /**
     * @param Locale $preferredLocale
     */
    public function setPreferredLocale($preferredLocale)
    {
        $this->preferredLocale = $preferredLocale;
    }

    /**
     * @return array
     */
    public function getLocalized()
    {
        return $this->localized;
    }

    /**
     * @return Locale
     */
    public function getPreferredLocale()
    {
        return $this->preferredLocale;
    }
}
