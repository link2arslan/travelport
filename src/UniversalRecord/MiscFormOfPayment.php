<?php

namespace FilippoToso\Travelport\UniversalRecord;

class MiscFormOfPayment
{

    /**
     * @var anonymous37 $CreditCardType
     */
    public $CreditCardType = null;

    /**
     * @var typeCreditCardNumber $CreditCardNumber
     */
    public $CreditCardNumber = null;

    /**
     * @var gYearMonth $ExpDate
     */
    public $ExpDate = null;

    /**
     * @var string $Text
     */
    public $Text = null;

    /**
     * @var anonymous38 $Category
     */
    public $Category = null;

    /**
     * @var boolean $AcceptanceOverride
     */
    public $AcceptanceOverride = null;

    /**
     * @param anonymous37 $CreditCardType
     * @param typeCreditCardNumber $CreditCardNumber
     * @param gYearMonth $ExpDate
     * @param string $Text
     * @param anonymous38 $Category
     * @param boolean $AcceptanceOverride
     */
    public function __construct($CreditCardType = null, $CreditCardNumber = null, $ExpDate = null, $Text = null, $Category = null, $AcceptanceOverride = null)
    {
      $this->CreditCardType = $CreditCardType;
      $this->CreditCardNumber = $CreditCardNumber;
      $this->ExpDate = $ExpDate;
      $this->Text = $Text;
      $this->Category = $Category;
      $this->AcceptanceOverride = $AcceptanceOverride;
    }

    /**
     * @return anonymous37
     */
    public function getCreditCardType()
    {
      return $this->CreditCardType;
    }

    /**
     * @param anonymous37 $CreditCardType
     * @return \FilippoToso\Travelport\UniversalRecord\MiscFormOfPayment
     */
    public function setCreditCardType($CreditCardType)
    {
      $this->CreditCardType = $CreditCardType;
      return $this;
    }

    /**
     * @return typeCreditCardNumber
     */
    public function getCreditCardNumber()
    {
      return $this->CreditCardNumber;
    }

    /**
     * @param typeCreditCardNumber $CreditCardNumber
     * @return \FilippoToso\Travelport\UniversalRecord\MiscFormOfPayment
     */
    public function setCreditCardNumber($CreditCardNumber)
    {
      $this->CreditCardNumber = $CreditCardNumber;
      return $this;
    }

    /**
     * @return gYearMonth
     */
    public function getExpDate()
    {
      return $this->ExpDate;
    }

    /**
     * @param gYearMonth $ExpDate
     * @return \FilippoToso\Travelport\UniversalRecord\MiscFormOfPayment
     */
    public function setExpDate($ExpDate)
    {
      $this->ExpDate = $ExpDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string $Text
     * @return \FilippoToso\Travelport\UniversalRecord\MiscFormOfPayment
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

    /**
     * @return anonymous38
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param anonymous38 $Category
     * @return \FilippoToso\Travelport\UniversalRecord\MiscFormOfPayment
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAcceptanceOverride()
    {
      return $this->AcceptanceOverride;
    }

    /**
     * @param boolean $AcceptanceOverride
     * @return \FilippoToso\Travelport\UniversalRecord\MiscFormOfPayment
     */
    public function setAcceptanceOverride($AcceptanceOverride)
    {
      $this->AcceptanceOverride = $AcceptanceOverride;
      return $this;
    }

}
