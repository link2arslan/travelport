<?php

namespace FilippoToso\Travelport\GDSQueue;

class ApplicationLevel
{

    /**
     * @var ApplicationLimits $ApplicationLimits
     */
    public $ApplicationLimits = null;

    /**
     * @var ServiceData $ServiceData
     */
    public $ServiceData = null;

    /**
     * @var anonymous318 $ApplicableLevels
     */
    public $ApplicableLevels = null;

    /**
     * @var string $ProviderDefinedApplicableLevels
     */
    public $ProviderDefinedApplicableLevels = null;

    /**
     * @param ServiceData $ServiceData
     * @param anonymous318 $ApplicableLevels
     * @param string $ProviderDefinedApplicableLevels
     */
    public function __construct($ServiceData = null, $ApplicableLevels = null, $ProviderDefinedApplicableLevels = null)
    {
      $this->ServiceData = $ServiceData;
      $this->ApplicableLevels = $ApplicableLevels;
      $this->ProviderDefinedApplicableLevels = $ProviderDefinedApplicableLevels;
    }

    /**
     * @return ApplicationLimits
     */
    public function getApplicationLimits()
    {
      return $this->ApplicationLimits;
    }

    /**
     * @param ApplicationLimits $ApplicationLimits
     * @return \FilippoToso\Travelport\GDSQueue\ApplicationLevel
     */
    public function setApplicationLimits($ApplicationLimits)
    {
      $this->ApplicationLimits = $ApplicationLimits;
      return $this;
    }

    /**
     * @return ServiceData
     */
    public function getServiceData()
    {
      return $this->ServiceData;
    }

    /**
     * @param ServiceData $ServiceData
     * @return \FilippoToso\Travelport\GDSQueue\ApplicationLevel
     */
    public function setServiceData($ServiceData)
    {
      $this->ServiceData = $ServiceData;
      return $this;
    }

    /**
     * @return anonymous318
     */
    public function getApplicableLevels()
    {
      return $this->ApplicableLevels;
    }

    /**
     * @param anonymous318 $ApplicableLevels
     * @return \FilippoToso\Travelport\GDSQueue\ApplicationLevel
     */
    public function setApplicableLevels($ApplicableLevels)
    {
      $this->ApplicableLevels = $ApplicableLevels;
      return $this;
    }

    /**
     * @return string
     */
    public function getProviderDefinedApplicableLevels()
    {
      return $this->ProviderDefinedApplicableLevels;
    }

    /**
     * @param string $ProviderDefinedApplicableLevels
     * @return \FilippoToso\Travelport\GDSQueue\ApplicationLevel
     */
    public function setProviderDefinedApplicableLevels($ProviderDefinedApplicableLevels)
    {
      $this->ProviderDefinedApplicableLevels = $ProviderDefinedApplicableLevels;
      return $this;
    }

}
