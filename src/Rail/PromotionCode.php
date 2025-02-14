<?php

namespace FilippoToso\Travelport\Rail;

class PromotionCode
{

    /**
     * @var typePromoCodeString $_
     */
    public $_ = null;

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @param typePromoCodeString $_
     * @param typeRef $Key
     */
    public function __construct($_ = null, $Key = null)
    {
      $this->_ = $_;
      $this->Key = $Key;
    }

    /**
     * @return typePromoCodeString
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param typePromoCodeString $_
     * @return \FilippoToso\Travelport\Rail\PromotionCode
     */
    public function set_($_)
    {
      $this->_ = $_;
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
     * @return \FilippoToso\Travelport\Rail\PromotionCode
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
