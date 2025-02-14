<?php

namespace FilippoToso\Travelport\UniversalRecord;

class HotelSearchModifiers
{

    /**
     * @var PermittedChains $PermittedChains
     */
    public $PermittedChains = null;

    /**
     * @var ProhibitedChains $ProhibitedChains
     */
    public $ProhibitedChains = null;

    /**
     * @var PermittedProviders $PermittedProviders
     */
    public $PermittedProviders = null;

    /**
     * @var PermittedAggregators $PermittedAggregators
     */
    public $PermittedAggregators = null;

    /**
     * @var LoyaltyCard $LoyaltyCard
     */
    public $LoyaltyCard = null;

    /**
     * @var string $HotelName
     */
    public $HotelName = null;

    /**
     * @var CorporateDiscountID $CorporateDiscountID
     */
    public $CorporateDiscountID = null;

    /**
     * @var typeOTACode[] $RateCategory
     */
    public $RateCategory = null;

    /**
     * @var HotelRating $HotelRating
     */
    public $HotelRating = null;

    /**
     * @var SearchPriority $SearchPriority
     */
    public $SearchPriority = null;

    /**
     * @var HotelBedding $HotelBedding
     */
    public $HotelBedding = null;

    /**
     * @var Amenities $Amenities
     */
    public $Amenities = null;

    /**
     * @var typeHotelPaymentType $HotelPaymentType
     */
    public $HotelPaymentType = null;

    /**
     * @var NumberOfChildren $NumberOfChildren
     */
    public $NumberOfChildren = null;

    /**
     * @var HotelTransportation $HotelTransportation
     */
    public $HotelTransportation = null;

    /**
     * @var BookingGuestInformation $BookingGuestInformation
     */
    public $BookingGuestInformation = null;

    /**
     * @var int $NumberOfAdults
     */
    public $NumberOfAdults = null;

    /**
     * @var int $NumberOfRooms
     */
    public $NumberOfRooms = null;

    /**
     * @var int $MaxProperties
     */
    public $MaxProperties = null;

    /**
     * @var boolean $IsRelaxed
     */
    public $IsRelaxed = null;

    /**
     * @var typeCurrency $PreferredCurrency
     */
    public $PreferredCurrency = null;

    /**
     * @var boolean $AvailableHotelsOnly
     */
    public $AvailableHotelsOnly = null;

    /**
     * @var int $MaxWait
     */
    public $MaxWait = null;

    /**
     * @var boolean $AggregateResults
     */
    public $AggregateResults = null;

    /**
     * @var boolean $ReturnPropertyDescription
     */
    public $ReturnPropertyDescription = null;

    /**
     * @var int $NumOfRatePlans
     */
    public $NumOfRatePlans = null;

    /**
     * @var boolean $ReturnAmenities
     */
    public $ReturnAmenities = null;

    /**
     * @param PermittedProviders $PermittedProviders
     * @param PermittedAggregators $PermittedAggregators
     * @param LoyaltyCard $LoyaltyCard
     * @param CorporateDiscountID $CorporateDiscountID
     * @param HotelRating $HotelRating
     * @param SearchPriority $SearchPriority
     * @param HotelBedding $HotelBedding
     * @param NumberOfChildren $NumberOfChildren
     * @param BookingGuestInformation $BookingGuestInformation
     * @param int $NumberOfAdults
     * @param int $NumberOfRooms
     * @param int $MaxProperties
     * @param boolean $IsRelaxed
     * @param typeCurrency $PreferredCurrency
     * @param boolean $AvailableHotelsOnly
     * @param int $MaxWait
     * @param boolean $AggregateResults
     * @param boolean $ReturnPropertyDescription
     * @param int $NumOfRatePlans
     * @param boolean $ReturnAmenities
     */
    public function __construct($PermittedProviders = null, $PermittedAggregators = null, $LoyaltyCard = null, $CorporateDiscountID = null, $HotelRating = null, $SearchPriority = null, $HotelBedding = null, $NumberOfChildren = null, $BookingGuestInformation = null, $NumberOfAdults = null, $NumberOfRooms = null, $MaxProperties = null, $IsRelaxed = null, $PreferredCurrency = null, $AvailableHotelsOnly = null, $MaxWait = null, $AggregateResults = null, $ReturnPropertyDescription = null, $NumOfRatePlans = null, $ReturnAmenities = null)
    {
      $this->PermittedProviders = $PermittedProviders;
      $this->PermittedAggregators = $PermittedAggregators;
      $this->LoyaltyCard = $LoyaltyCard;
      $this->CorporateDiscountID = $CorporateDiscountID;
      $this->HotelRating = $HotelRating;
      $this->SearchPriority = $SearchPriority;
      $this->HotelBedding = $HotelBedding;
      $this->NumberOfChildren = $NumberOfChildren;
      $this->BookingGuestInformation = $BookingGuestInformation;
      $this->NumberOfAdults = $NumberOfAdults;
      $this->NumberOfRooms = $NumberOfRooms;
      $this->MaxProperties = $MaxProperties;
      $this->IsRelaxed = $IsRelaxed;
      $this->PreferredCurrency = $PreferredCurrency;
      $this->AvailableHotelsOnly = $AvailableHotelsOnly;
      $this->MaxWait = $MaxWait;
      $this->AggregateResults = $AggregateResults;
      $this->ReturnPropertyDescription = $ReturnPropertyDescription;
      $this->NumOfRatePlans = $NumOfRatePlans;
      $this->ReturnAmenities = $ReturnAmenities;
    }

    /**
     * @return PermittedChains
     */
    public function getPermittedChains()
    {
      return $this->PermittedChains;
    }

    /**
     * @param PermittedChains $PermittedChains
     * @return \FilippoToso\Travelport\UniversalRecord\HotelSearchModifiers
     */
    public function setPermittedChains($PermittedChains)
    {
      $this->PermittedChains = $PermittedChains;
      return $this;
    }

    /**
     * @return ProhibitedChains
     */
    public function getProhibitedChains()
    {
      return $this->ProhibitedChains;
    }

    /**
     * @param ProhibitedChains $ProhibitedChains
     * @return \FilippoToso\Travelport\UniversalRecord\HotelSearchModifiers
     */
    public function setProhibitedChains($ProhibitedChains)
    {
      $this->ProhibitedChains = $ProhibitedChains;
      return $this;
    }

    /**
     * @return PermittedProviders
     */
    public function getPermittedProviders()
    {
      return $this->PermittedProviders;
    }

    /**
     * @param PermittedProviders $PermittedProviders
     * @return \FilippoToso\Travelport\UniversalRecord\HotelSearchModifiers
     */
    public function setPermittedProviders($PermittedProviders)
    {
      $this->PermittedProviders = $PermittedProviders;
      return $this;
    }

    /**
     * @return PermittedAggregators
     */
    public function getPermittedAggregators()
    {
      return $this->PermittedAggregators;
    }

    /**
     * @param PermittedAggregators $PermittedAggregators
     * @return \FilippoToso\Travelport\UniversalRecord\HotelSearchModifiers
     */
    public function setPermittedAggregators($PermittedAggregators)
    {
      $this->PermittedAggregators = $PermittedAggregators;
      return $this;
    }

    /**
     * @return LoyaltyCard
     */
    public function getLoyaltyCard()
    {
      return $this->LoyaltyCard;
    }

    /**
     * @param LoyaltyCard $LoyaltyCard
     * @return \FilippoToso\Travelport\UniversalRecord\HotelSearchModifiers
     */
    public function setLoyaltyCard($LoyaltyCard)
    {
      $this->LoyaltyCard = $LoyaltyCard;
      return $this;
    }

    /**
     * @return string
     */
    public function getHotelName()
    {
      return $this->HotelName;
    }

    /**
     * @param string $HotelName
     * @return \FilippoToso\Travelport\UniversalRecord\HotelSearchModifiers
     */
    public function setHotelName($HotelName)
    {
      $this->HotelName = $HotelName;
      return $this;
    }

    /**
     * @return CorporateDiscountID
     */
    public function getCorporateDiscountID()
    {
      return $this->CorporateDiscountID;
    }

    /**
     * @param CorporateDiscountID $CorporateDiscountID
     * @return \FilippoToso\Travelport\UniversalRecord\HotelSearchModifiers
     */
    public function setCorporateDiscountID($CorporateDiscountID)
    {
      $this->CorporateDiscountID = $CorporateDiscountID;
      return $this;
    }

    /**
     * @return typeOTACode[]
     */
    public function getRateCategory()
    {
      return $this->RateCategory;
    }

    /**
     * @param typeOTACode[] $RateCategory
     * @return \FilippoToso\Travelport\UniversalRecord\HotelSearchModifiers
     */
    public function setRateCategory(array $RateCategory = null)
    {
      $this->RateCategory = $RateCategory;
      return $this;
    }

    /**
     * @return HotelRating
     */
    public function getHotelRating()
    {
      return $this->HotelRating;
    }

    /**
     * @param HotelRating $HotelRating
     * @return \FilippoToso\Travelport\UniversalRecord\HotelSearchModifiers
     */
    public function setHotelRating($HotelRating)
    {
      $this->HotelRating = $HotelRating;
      return $this;
    }

    /**
     * @return SearchPriority
     */
    public function getSearchPriority()
    {
      return $this->SearchPriority;
    }

    /**
     * @param SearchPriority $SearchPriority
     * @return \FilippoToso\Travelport\UniversalRecord\HotelSearchModifiers
     */
    public function setSearchPriority($SearchPriority)
    {
      $this->SearchPriority = $SearchPriority;
      return $this;
    }

    /**
     * @return HotelBedding
     */
    public function getHotelBedding()
    {
      return $this->HotelBedding;
    }

    /**
     * @param HotelBedding $HotelBedding
     * @return \FilippoToso\Travelport\UniversalRecord\HotelSearchModifiers
     */
    public function setHotelBedding($HotelBedding)
    {
      $this->HotelBedding = $HotelBedding;
      return $this;
    }

    /**
     * @return Amenities
     */
    public function getAmenities()
    {
      return $this->Amenities;
    }

    /**
     * @param Amenities $Amenities
     * @return \FilippoToso\Travelport\UniversalRecord\HotelSearchModifiers
     */
    public function setAmenities($Amenities)
    {
      $this->Amenities = $Amenities;
      return $this;
    }

    /**
     * @return typeHotelPaymentType
     */
    public function getHotelPaymentType()
    {
      return $this->HotelPaymentType;
    }

    /**
     * @param typeHotelPaymentType $HotelPaymentType
     * @return \FilippoToso\Travelport\UniversalRecord\HotelSearchModifiers
     */
    public function setHotelPaymentType($HotelPaymentType)
    {
      $this->HotelPaymentType = $HotelPaymentType;
      return $this;
    }

    /**
     * @return NumberOfChildren
     */
    public function getNumberOfChildren()
    {
      return $this->NumberOfChildren;
    }

    /**
     * @param NumberOfChildren $NumberOfChildren
     * @return \FilippoToso\Travelport\UniversalRecord\HotelSearchModifiers
     */
    public function setNumberOfChildren($NumberOfChildren)
    {
      $this->NumberOfChildren = $NumberOfChildren;
      return $this;
    }

    /**
     * @return HotelTransportation
     */
    public function getHotelTransportation()
    {
      return $this->HotelTransportation;
    }

    /**
     * @param HotelTransportation $HotelTransportation
     * @return \FilippoToso\Travelport\UniversalRecord\HotelSearchModifiers
     */
    public function setHotelTransportation($HotelTransportation)
    {
      $this->HotelTransportation = $HotelTransportation;
      return $this;
    }

    /**
     * @return BookingGuestInformation
     */
    public function getBookingGuestInformation()
    {
      return $this->BookingGuestInformation;
    }

    /**
     * @param BookingGuestInformation $BookingGuestInformation
     * @return \FilippoToso\Travelport\UniversalRecord\HotelSearchModifiers
     */
    public function setBookingGuestInformation($BookingGuestInformation)
    {
      $this->BookingGuestInformation = $BookingGuestInformation;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfAdults()
    {
      return $this->NumberOfAdults;
    }

    /**
     * @param int $NumberOfAdults
     * @return \FilippoToso\Travelport\UniversalRecord\HotelSearchModifiers
     */
    public function setNumberOfAdults($NumberOfAdults)
    {
      $this->NumberOfAdults = $NumberOfAdults;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfRooms()
    {
      return $this->NumberOfRooms;
    }

    /**
     * @param int $NumberOfRooms
     * @return \FilippoToso\Travelport\UniversalRecord\HotelSearchModifiers
     */
    public function setNumberOfRooms($NumberOfRooms)
    {
      $this->NumberOfRooms = $NumberOfRooms;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxProperties()
    {
      return $this->MaxProperties;
    }

    /**
     * @param int $MaxProperties
     * @return \FilippoToso\Travelport\UniversalRecord\HotelSearchModifiers
     */
    public function setMaxProperties($MaxProperties)
    {
      $this->MaxProperties = $MaxProperties;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsRelaxed()
    {
      return $this->IsRelaxed;
    }

    /**
     * @param boolean $IsRelaxed
     * @return \FilippoToso\Travelport\UniversalRecord\HotelSearchModifiers
     */
    public function setIsRelaxed($IsRelaxed)
    {
      $this->IsRelaxed = $IsRelaxed;
      return $this;
    }

    /**
     * @return typeCurrency
     */
    public function getPreferredCurrency()
    {
      return $this->PreferredCurrency;
    }

    /**
     * @param typeCurrency $PreferredCurrency
     * @return \FilippoToso\Travelport\UniversalRecord\HotelSearchModifiers
     */
    public function setPreferredCurrency($PreferredCurrency)
    {
      $this->PreferredCurrency = $PreferredCurrency;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAvailableHotelsOnly()
    {
      return $this->AvailableHotelsOnly;
    }

    /**
     * @param boolean $AvailableHotelsOnly
     * @return \FilippoToso\Travelport\UniversalRecord\HotelSearchModifiers
     */
    public function setAvailableHotelsOnly($AvailableHotelsOnly)
    {
      $this->AvailableHotelsOnly = $AvailableHotelsOnly;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxWait()
    {
      return $this->MaxWait;
    }

    /**
     * @param int $MaxWait
     * @return \FilippoToso\Travelport\UniversalRecord\HotelSearchModifiers
     */
    public function setMaxWait($MaxWait)
    {
      $this->MaxWait = $MaxWait;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAggregateResults()
    {
      return $this->AggregateResults;
    }

    /**
     * @param boolean $AggregateResults
     * @return \FilippoToso\Travelport\UniversalRecord\HotelSearchModifiers
     */
    public function setAggregateResults($AggregateResults)
    {
      $this->AggregateResults = $AggregateResults;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnPropertyDescription()
    {
      return $this->ReturnPropertyDescription;
    }

    /**
     * @param boolean $ReturnPropertyDescription
     * @return \FilippoToso\Travelport\UniversalRecord\HotelSearchModifiers
     */
    public function setReturnPropertyDescription($ReturnPropertyDescription)
    {
      $this->ReturnPropertyDescription = $ReturnPropertyDescription;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumOfRatePlans()
    {
      return $this->NumOfRatePlans;
    }

    /**
     * @param int $NumOfRatePlans
     * @return \FilippoToso\Travelport\UniversalRecord\HotelSearchModifiers
     */
    public function setNumOfRatePlans($NumOfRatePlans)
    {
      $this->NumOfRatePlans = $NumOfRatePlans;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnAmenities()
    {
      return $this->ReturnAmenities;
    }

    /**
     * @param boolean $ReturnAmenities
     * @return \FilippoToso\Travelport\UniversalRecord\HotelSearchModifiers
     */
    public function setReturnAmenities($ReturnAmenities)
    {
      $this->ReturnAmenities = $ReturnAmenities;
      return $this;
    }

}
