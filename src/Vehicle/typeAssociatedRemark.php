<?php

namespace FilippoToso\Travelport\Vehicle;

class typeAssociatedRemark extends typeRemarkWithTravelerRef
{

    /**
     * @var typeRef $Key
     */
    public $Key = null;

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
     * @param typeRef $ProviderReservationInfoRef
     * @param typeProviderCode $ProviderCode
     * @param typeRef $Key
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($RemarkData = null, $ProviderReservationInfoRef = null, $ProviderCode = null, $Key = null, $ElStat = null, $KeyOverride = null)
    {
      parent::__construct($RemarkData, $ProviderReservationInfoRef, $ProviderCode);
      $this->Key = $Key;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
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
     * @return \FilippoToso\Travelport\Vehicle\typeAssociatedRemark
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
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
     * @return \FilippoToso\Travelport\Vehicle\typeAssociatedRemark
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
     * @return \FilippoToso\Travelport\Vehicle\typeAssociatedRemark
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
