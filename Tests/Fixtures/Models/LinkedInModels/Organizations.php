<?php

namespace ResponseMapperTests\Fixtures\Models\LinkedInModels;

use ResponseMapperTests\Fixtures\Models\ArrayAccessObject;

/**
 * Class Organizations
 * @package ResponseMapperTests
 */
class Organizations extends ArrayAccessObject
{
    /** @var string */
    protected $vanityName;

    /** @var string */
    protected $localizedName;

    /** @var Website */
    protected $website;

    /** @var FoundedOn */
    protected $foundedOn;

    /** @var Image */
    protected $coverPhoto;

    /** @var Description */
    protected $description;

    /** @var string */
    protected $organizationStatus;

    /** @var Locale */
    protected $defaultLocale;

    /** @var string */
    protected $organizationType;

    /** @var AlternativeNames[] */
    protected $alternativeNames;

    /** @var Specialties[] */
    protected $specialties;

    /** @var ParentRelationship */
    protected $parentRelationship;

    /** @var string */
    protected $staffCountRange;

    /** @var array */
    protected $localizedSpecialties;

    /** @var array */
    protected $industries;

    /** @var Name */
    protected $name;

    /** @var Image */
    protected $logo;

    /** @var Locations[] */
    protected $locations;

    /** @var string */
    protected $id;

    /** @var string */
    protected $localizedDescription;

    /** @var Image */
    protected $overviewPhoto;

    /**
     * @var string
     * @arrayKey $URN
     */
    protected $URN;

    /** @var string */
    protected $localizedWebsite;

    /**
     * @param string $vanityName
     */
    public function setVanityName($vanityName)
    {
        $this->vanityName = $vanityName;
    }

    /**
     * @param string $localizedName
     */
    public function setLocalizedName($localizedName)
    {
        $this->localizedName = $localizedName;
    }

    /**
     * @param Website $website
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    }

    /**
     * @param FoundedOn $foundedOn
     */
    public function setFoundedOn($foundedOn)
    {
        $this->foundedOn = $foundedOn;
    }

    /**
     * @param Image $coverPhoto
     */
    public function setCoverPhoto($coverPhoto)
    {
        $this->coverPhoto = $coverPhoto;
    }

    /**
     * @param Description $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @param string $organizationStatus
     */
    public function setOrganizationStatus($organizationStatus)
    {
        $this->organizationStatus = $organizationStatus;
    }

    /**
     * @param Locale $defaultLocale
     */
    public function setDefaultLocale($defaultLocale)
    {
        $this->defaultLocale = $defaultLocale;
    }

    /**
     * @param string $organizationType
     */
    public function setOrganizationType($organizationType)
    {
        $this->organizationType = $organizationType;
    }

    /**
     * @param AlternativeNames[] $alternativeNames
     */
    public function setAlternativeNames($alternativeNames)
    {
        $this->alternativeNames = $alternativeNames;
    }

    /**
     * @param Specialties[] $specialties
     */
    public function setSpecialties($specialties)
    {
        $this->specialties = $specialties;
    }

    /**
     * @param ParentRelationship $parentRelationship
     */
    public function setParentRelationship($parentRelationship)
    {
        $this->parentRelationship = $parentRelationship;
    }

    /**
     * @param string $staffCountRange
     */
    public function setStaffCountRange($staffCountRange)
    {
        $this->staffCountRange = $staffCountRange;
    }

    /**
     * @param array $localizedSpecialties
     */
    public function setLocalizedSpecialties($localizedSpecialties)
    {
        $this->localizedSpecialties = $localizedSpecialties;
    }

    /**
     * @param array $industries
     */
    public function setIndustries($industries)
    {
        $this->industries = $industries;
    }

    /**
     * @param Name $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param Image $logo
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    }

    /**
     * @param Locations[] $locations
     */
    public function setLocations($locations)
    {
        $this->locations = $locations;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param string $localizedDescription
     */
    public function setLocalizedDescription($localizedDescription)
    {
        $this->localizedDescription = $localizedDescription;
    }

    /**
     * @param Image $overviewPhoto
     */
    public function setOverviewPhoto($overviewPhoto)
    {
        $this->overviewPhoto = $overviewPhoto;
    }

    /**
     * @param string $URN
     */
    public function setURN($URN)
    {
        $this->URN = $URN;
    }

    /**
     * @param string $localizedWebsite
     */
    public function setLocalizedWebsite($localizedWebsite)
    {
        $this->localizedWebsite = $localizedWebsite;
    }

    /**
     * @return string
     */
    public function getVanityName()
    {
        return $this->vanityName;
    }

    /**
     * @return string
     */
    public function getLocalizedName()
    {
        return $this->localizedName;
    }

    /**
     * @return Website
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @return FoundedOn
     */
    public function getFoundedOn()
    {
        return $this->foundedOn;
    }

    /**
     * @return Image
     */
    public function getCoverPhoto()
    {
        return $this->coverPhoto;
    }

    /**
     * @return Description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getOrganizationStatus()
    {
        return $this->organizationStatus;
    }

    /**
     * @return Locale
     */
    public function getDefaultLocale()
    {
        return $this->defaultLocale;
    }

    /**
     * @return string
     */
    public function getOrganizationType()
    {
        return $this->organizationType;
    }

    /**
     * @return AlternativeNames[]
     */
    public function getAlternativeNames()
    {
        return $this->alternativeNames;
    }

    /**
     * @return Specialties[]
     */
    public function getSpecialties()
    {
        return $this->specialties;
    }

    /**
     * @return ParentRelationship
     */
    public function getParentRelationship()
    {
        return $this->parentRelationship;
    }

    /**
     * @return string
     */
    public function getStaffCountRange()
    {
        return $this->staffCountRange;
    }

    /**
     * @return array
     */
    public function getLocalizedSpecialties()
    {
        return $this->localizedSpecialties;
    }

    /**
     * @return array
     */
    public function getIndustries()
    {
        return $this->industries;
    }

    /**
     * @return Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return Image
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @return Locations[]
     */
    public function getLocations()
    {
        return $this->locations;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getLocalizedDescription()
    {
        return $this->localizedDescription;
    }

    /**
     * @return Image
     */
    public function getOverviewPhoto()
    {
        return $this->overviewPhoto;
    }

    /**
     * @return string
     */
    public function getURN()
    {
        return $this->URN;
    }

    /**
     * @return string
     */
    public function getLocalizedWebsite()
    {
        return $this->localizedWebsite;
    }
}
