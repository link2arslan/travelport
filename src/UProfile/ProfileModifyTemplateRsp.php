<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileModifyTemplateRsp extends BaseRsp
{

    /**
     * @var ProfileTemplate $ProfileTemplate
     */
    public $ProfileTemplate = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param ProfileTemplate $ProfileTemplate
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $ProfileTemplate = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->ProfileTemplate = $ProfileTemplate;
    }

    /**
     * @return ProfileTemplate
     */
    public function getProfileTemplate()
    {
      return $this->ProfileTemplate;
    }

    /**
     * @param ProfileTemplate $ProfileTemplate
     * @return \FilippoToso\Travelport\UProfile\ProfileModifyTemplateRsp
     */
    public function setProfileTemplate($ProfileTemplate)
    {
      $this->ProfileTemplate = $ProfileTemplate;
      return $this;
    }

}
