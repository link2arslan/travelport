<?php

namespace FilippoToso\Travelport\Rail;

class VoidResultInfo
{

    /**
     * @var string $FailureRemark
     */
    public $FailureRemark = null;

    /**
     * @var string $ResultType
     */
    public $ResultType = null;

    /**
     * @var StringLength1to13 $DocumentNumber
     */
    public $DocumentNumber = null;

    /**
     * @var anonymous453 $DocumentType
     */
    public $DocumentType = null;

    /**
     * @param string $ResultType
     * @param StringLength1to13 $DocumentNumber
     * @param anonymous453 $DocumentType
     */
    public function __construct($ResultType = null, $DocumentNumber = null, $DocumentType = null)
    {
      $this->ResultType = $ResultType;
      $this->DocumentNumber = $DocumentNumber;
      $this->DocumentType = $DocumentType;
    }

    /**
     * @return string
     */
    public function getFailureRemark()
    {
      return $this->FailureRemark;
    }

    /**
     * @param string $FailureRemark
     * @return \FilippoToso\Travelport\Rail\VoidResultInfo
     */
    public function setFailureRemark($FailureRemark)
    {
      $this->FailureRemark = $FailureRemark;
      return $this;
    }

    /**
     * @return string
     */
    public function getResultType()
    {
      return $this->ResultType;
    }

    /**
     * @param string $ResultType
     * @return \FilippoToso\Travelport\Rail\VoidResultInfo
     */
    public function setResultType($ResultType)
    {
      $this->ResultType = $ResultType;
      return $this;
    }

    /**
     * @return StringLength1to13
     */
    public function getDocumentNumber()
    {
      return $this->DocumentNumber;
    }

    /**
     * @param StringLength1to13 $DocumentNumber
     * @return \FilippoToso\Travelport\Rail\VoidResultInfo
     */
    public function setDocumentNumber($DocumentNumber)
    {
      $this->DocumentNumber = $DocumentNumber;
      return $this;
    }

    /**
     * @return anonymous453
     */
    public function getDocumentType()
    {
      return $this->DocumentType;
    }

    /**
     * @param anonymous453 $DocumentType
     * @return \FilippoToso\Travelport\Rail\VoidResultInfo
     */
    public function setDocumentType($DocumentType)
    {
      $this->DocumentType = $DocumentType;
      return $this;
    }

}
