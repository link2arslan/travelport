<?php

namespace FilippoToso\Travelport\Hotel;

class GeneralRemark
{

    /**
     * @var string $RemarkData
     */
    public $RemarkData = null;

    /**
     * @var typeRef[] $BookingTravelerRef
     */
    public $BookingTravelerRef = null;

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @var anonymous108 $Category
     */
    public $Category = null;

    /**
     * @var typeGdsRemark $TypeInGds
     */
    public $TypeInGds = null;

    /**
     * @var typeProduct $SupplierType
     */
    public $SupplierType = null;

    /**
     * @var typeRef $ProviderReservationInfoRef
     */
    public $ProviderReservationInfoRef = null;

    /**
     * @var typeDirection $Direction
     */
    public $Direction = null;

    /**
     * @var \DateTime $CreateDate
     */
    public $CreateDate = null;

    /**
     * @var boolean $UseProviderNativeMode
     */
    public $UseProviderNativeMode = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    public $ProviderCode = null;

    /**
     * @var typeSupplierCode $SupplierCode
     */
    public $SupplierCode = null;

    /**
     * @var typeElementStatus $ElStat
     */
    public $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    public $KeyOverride = null;

    /**
     * @param string $RemarkData
     * @param typeRef $Key
     * @param anonymous108 $Category
     * @param typeGdsRemark $TypeInGds
     * @param typeProduct $SupplierType
     * @param typeRef $ProviderReservationInfoRef
     * @param typeDirection $Direction
     * @param \DateTime $CreateDate
     * @param boolean $UseProviderNativeMode
     * @param typeProviderCode $ProviderCode
     * @param typeSupplierCode $SupplierCode
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($RemarkData = null, $Key = null, $Category = null, $TypeInGds = null, $SupplierType = null, $ProviderReservationInfoRef = null, $Direction = null, \DateTime $CreateDate = null, $UseProviderNativeMode = null, $ProviderCode = null, $SupplierCode = null, $ElStat = null, $KeyOverride = null)
    {
      $this->RemarkData = $RemarkData;
      $this->Key = $Key;
      $this->Category = $Category;
      $this->TypeInGds = $TypeInGds;
      $this->SupplierType = $SupplierType;
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      $this->Direction = $Direction;
      $this->CreateDate = $CreateDate ? $CreateDate->format(\DateTime::ATOM) : null;
      $this->UseProviderNativeMode = $UseProviderNativeMode;
      $this->ProviderCode = $ProviderCode;
      $this->SupplierCode = $SupplierCode;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
    }

    /**
     * @return string
     */
    public function getRemarkData()
    {
      return $this->RemarkData;
    }

    /**
     * @param string $RemarkData
     * @return \FilippoToso\Travelport\Hotel\GeneralRemark
     */
    public function setRemarkData($RemarkData)
    {
      $this->RemarkData = $RemarkData;
      return $this;
    }

    /**
     * @return typeRef[]
     */
    public function getBookingTravelerRef()
    {
      return $this->BookingTravelerRef;
    }

    /**
     * @param typeRef[] $BookingTravelerRef
     * @return \FilippoToso\Travelport\Hotel\GeneralRemark
     */
    public function setBookingTravelerRef(array $BookingTravelerRef = null)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \FilippoToso\Travelport\Hotel\GeneralRemark
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return anonymous108
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param anonymous108 $Category
     * @return \FilippoToso\Travelport\Hotel\GeneralRemark
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
    }

    /**
     * @return typeGdsRemark
     */
    public function getTypeInGds()
    {
      return $this->TypeInGds;
    }

    /**
     * @param typeGdsRemark $TypeInGds
     * @return \FilippoToso\Travelport\Hotel\GeneralRemark
     */
    public function setTypeInGds($TypeInGds)
    {
      $this->TypeInGds = $TypeInGds;
      return $this;
    }

    /**
     * @return typeProduct
     */
    public function getSupplierType()
    {
      return $this->SupplierType;
    }

    /**
     * @param typeProduct $SupplierType
     * @return \FilippoToso\Travelport\Hotel\GeneralRemark
     */
    public function setSupplierType($SupplierType)
    {
      $this->SupplierType = $SupplierType;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getProviderReservationInfoRef()
    {
      return $this->ProviderReservationInfoRef;
    }

    /**
     * @param typeRef $ProviderReservationInfoRef
     * @return \FilippoToso\Travelport\Hotel\GeneralRemark
     */
    public function setProviderReservationInfoRef($ProviderReservationInfoRef)
    {
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      return $this;
    }

    /**
     * @return typeDirection
     */
    public function getDirection()
    {
      return $this->Direction;
    }

    /**
     * @param typeDirection $Direction
     * @return \FilippoToso\Travelport\Hotel\GeneralRemark
     */
    public function setDirection($Direction)
    {
      $this->Direction = $Direction;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreateDate()
    {
      if ($this->CreateDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreateDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreateDate
     * @return \FilippoToso\Travelport\Hotel\GeneralRemark
     */
    public function setCreateDate(\DateTime $CreateDate)
    {
      $this->CreateDate = $CreateDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseProviderNativeMode()
    {
      return $this->UseProviderNativeMode;
    }

    /**
     * @param boolean $UseProviderNativeMode
     * @return \FilippoToso\Travelport\Hotel\GeneralRemark
     */
    public function setUseProviderNativeMode($UseProviderNativeMode)
    {
      $this->UseProviderNativeMode = $UseProviderNativeMode;
      return $this;
    }

    /**
     * @return typeProviderCode
     */
    public function getProviderCode()
    {
      return $this->ProviderCode;
    }

    /**
     * @param typeProviderCode $ProviderCode
     * @return \FilippoToso\Travelport\Hotel\GeneralRemark
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return typeSupplierCode
     */
    public function getSupplierCode()
    {
      return $this->SupplierCode;
    }

    /**
     * @param typeSupplierCode $SupplierCode
     * @return \FilippoToso\Travelport\Hotel\GeneralRemark
     */
    public function setSupplierCode($SupplierCode)
    {
      $this->SupplierCode = $SupplierCode;
      return $this;
    }

    /**
     * @return typeElementStatus
     */
    public function getElStat()
    {
      return $this->ElStat;
    }

    /**
     * @param typeElementStatus $ElStat
     * @return \FilippoToso\Travelport\Hotel\GeneralRemark
     */
    public function setElStat($ElStat)
    {
      $this->ElStat = $ElStat;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeyOverride()
    {
      return $this->KeyOverride;
    }

    /**
     * @param boolean $KeyOverride
     * @return \FilippoToso\Travelport\Hotel\GeneralRemark
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
