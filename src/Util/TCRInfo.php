<?php

namespace FilippoToso\Travelport\Util;

class TCRInfo
{

    /**
     * @var typeTCRStatus $Status
     */
    public $Status = null;

    /**
     * @var \DateTime $Date
     */
    public $Date = null;

    /**
     * @var typeTCRNumber $TCRNumber
     */
    public $TCRNumber = null;

    /**
     * @var typeRef $ProviderReservationInfoRef
     */
    public $ProviderReservationInfoRef = null;

    /**
     * @param typeTCRStatus $Status
     * @param \DateTime $Date
     * @param typeTCRNumber $TCRNumber
     * @param typeRef $ProviderReservationInfoRef
     */
    public function __construct($Status = null, \DateTime $Date = null, $TCRNumber = null, $ProviderReservationInfoRef = null)
    {
      $this->Status = $Status;
      $this->Date = $Date ? $Date->format(\DateTime::ATOM) : null;
      $this->TCRNumber = $TCRNumber;
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
    }

    /**
     * @return typeTCRStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param typeTCRStatus $Status
     * @return \FilippoToso\Travelport\Util\TCRInfo
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
      if ($this->Date == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Date
     * @return \FilippoToso\Travelport\Util\TCRInfo
     */
    public function setDate(\DateTime $Date)
    {
      $this->Date = $Date->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return typeTCRNumber
     */
    public function getTCRNumber()
    {
      return $this->TCRNumber;
    }

    /**
     * @param typeTCRNumber $TCRNumber
     * @return \FilippoToso\Travelport\Util\TCRInfo
     */
    public function setTCRNumber($TCRNumber)
    {
      $this->TCRNumber = $TCRNumber;
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
     * @return \FilippoToso\Travelport\Util\TCRInfo
     */
    public function setProviderReservationInfoRef($ProviderReservationInfoRef)
    {
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      return $this;
    }

}
