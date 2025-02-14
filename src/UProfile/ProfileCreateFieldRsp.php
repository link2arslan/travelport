<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileCreateFieldRsp extends BaseRsp
{

    /**
     * @var Field $Field
     */
    public $Field = null;

    /**
     * @var FieldGroup $FieldGroup
     */
    public $FieldGroup = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param Field $Field
     * @param FieldGroup $FieldGroup
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $Field = null, $FieldGroup = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->Field = $Field;
      $this->FieldGroup = $FieldGroup;
    }

    /**
     * @return Field
     */
    public function getField()
    {
      return $this->Field;
    }

    /**
     * @param Field $Field
     * @return \FilippoToso\Travelport\UProfile\ProfileCreateFieldRsp
     */
    public function setField($Field)
    {
      $this->Field = $Field;
      return $this;
    }

    /**
     * @return FieldGroup
     */
    public function getFieldGroup()
    {
      return $this->FieldGroup;
    }

    /**
     * @param FieldGroup $FieldGroup
     * @return \FilippoToso\Travelport\UProfile\ProfileCreateFieldRsp
     */
    public function setFieldGroup($FieldGroup)
    {
      $this->FieldGroup = $FieldGroup;
      return $this;
    }

}
