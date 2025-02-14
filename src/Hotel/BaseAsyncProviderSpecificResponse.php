<?php

namespace FilippoToso\Travelport\Hotel;

class BaseAsyncProviderSpecificResponse
{

    /**
     * @var typeProviderCode $ProviderCode
     */
    public $ProviderCode = null;

    /**
     * @var boolean $MoreResults
     */
    public $MoreResults = null;

    /**
     * @param typeProviderCode $ProviderCode
     * @param boolean $MoreResults
     */
    public function __construct($ProviderCode = null, $MoreResults = null)
    {
      $this->ProviderCode = $ProviderCode;
      $this->MoreResults = $MoreResults;
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
     * @return \FilippoToso\Travelport\Hotel\BaseAsyncProviderSpecificResponse
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMoreResults()
    {
      return $this->MoreResults;
    }

    /**
     * @param boolean $MoreResults
     * @return \FilippoToso\Travelport\Hotel\BaseAsyncProviderSpecificResponse
     */
    public function setMoreResults($MoreResults)
    {
      $this->MoreResults = $MoreResults;
      return $this;
    }

}
