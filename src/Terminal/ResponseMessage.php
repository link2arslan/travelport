<?php

namespace FilippoToso\Travelport\Terminal;

class ResponseMessage
{

    /**
     * @var string $_
     */
    public $_ = null;

    /**
     * @var int $Code
     */
    public $Code = null;

    /**
     * @var anonymous94 $Type
     */
    public $Type = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    public $ProviderCode = null;

    /**
     * @var typeSupplierCode $SupplierCode
     */
    public $SupplierCode = null;

    /**
     * @param string $_
     * @param int $Code
     * @param anonymous94 $Type
     * @param typeProviderCode $ProviderCode
     * @param typeSupplierCode $SupplierCode
     */
    public function __construct($_ = null, $Code = null, $Type = null, $ProviderCode = null, $SupplierCode = null)
    {
      $this->_ = $_;
      $this->Code = $Code;
      $this->Type = $Type;
      $this->ProviderCode = $ProviderCode;
      $this->SupplierCode = $SupplierCode;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return \FilippoToso\Travelport\Terminal\ResponseMessage
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return int
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param int $Code
     * @return \FilippoToso\Travelport\Terminal\ResponseMessage
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return anonymous94
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous94 $Type
     * @return \FilippoToso\Travelport\Terminal\ResponseMessage
     */
    public function setType($Type)
    {
      $this->Type = $Type;
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
     * @return \FilippoToso\Travelport\Terminal\ResponseMessage
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
     * @return \FilippoToso\Travelport\Terminal\ResponseMessage
     */
    public function setSupplierCode($SupplierCode)
    {
      $this->SupplierCode = $SupplierCode;
      return $this;
    }

}
