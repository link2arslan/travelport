<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileModifyTagsRsp extends BaseRsp
{

    /**
     * @var Tag[] $Tag
     */
    public $Tag = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param Tag[] $Tag
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, array $Tag = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->Tag = $Tag;
    }

    /**
     * @return Tag[]
     */
    public function getTag()
    {
      return $this->Tag;
    }

    /**
     * @param Tag[] $Tag
     * @return \FilippoToso\Travelport\UProfile\ProfileModifyTagsRsp
     */
    public function setTag(array $Tag)
    {
      $this->Tag = $Tag;
      return $this;
    }

}
