<?php

namespace FilippoToso\Travelport\Rail;

class ProviderReservationInfo
{

    /**
     * @var ProviderReservationDetails $ProviderReservationDetails
     */
    public $ProviderReservationDetails = null;

    /**
     * @var ProviderReservationDisplayDetailsList $ProviderReservationDisplayDetailsList
     */
    public $ProviderReservationDisplayDetailsList = null;

    /**
     * @var ExternalReservationInfo $ExternalReservationInfo
     */
    public $ExternalReservationInfo = null;

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    public $ProviderCode = null;

    /**
     * @var typeProviderLocatorCode $LocatorCode
     */
    public $LocatorCode = null;

    /**
     * @var \DateTime $CreateDate
     */
    public $CreateDate = null;

    /**
     * @var date $HostCreateDate
     */
    public $HostCreateDate = null;

    /**
     * @var time $HostCreateTime
     */
    public $HostCreateTime = null;

    /**
     * @var \DateTime $ModifiedDate
     */
    public $ModifiedDate = null;

    /**
     * @var boolean $Imported
     */
    public $Imported = null;

    /**
     * @var typeRef $TicketingModifiersRef
     */
    public $TicketingModifiersRef = null;

    /**
     * @var boolean $InQueueMode
     */
    public $InQueueMode = null;

    /**
     * @var typeRef $GroupRef
     */
    public $GroupRef = null;

    /**
     * @var typePCC $OwningPCC
     */
    public $OwningPCC = null;

    /**
     * @var typeElementStatus $ElStat
     */
    public $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    public $KeyOverride = null;

    /**
     * @var anonymous515 $AgentOverride
     */
    public $AgentOverride = null;

    /**
     * @param ProviderReservationDetails $ProviderReservationDetails
     * @param ProviderReservationDisplayDetailsList $ProviderReservationDisplayDetailsList
     * @param ExternalReservationInfo $ExternalReservationInfo
     * @param typeRef $Key
     * @param typeProviderCode $ProviderCode
     * @param typeProviderLocatorCode $LocatorCode
     * @param \DateTime $CreateDate
     * @param date $HostCreateDate
     * @param time $HostCreateTime
     * @param \DateTime $ModifiedDate
     * @param boolean $Imported
     * @param typeRef $TicketingModifiersRef
     * @param boolean $InQueueMode
     * @param typeRef $GroupRef
     * @param typePCC $OwningPCC
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     * @param anonymous515 $AgentOverride
     */
    public function __construct($ProviderReservationDetails = null, $ProviderReservationDisplayDetailsList = null, $ExternalReservationInfo = null, $Key = null, $ProviderCode = null, $LocatorCode = null, \DateTime $CreateDate = null, $HostCreateDate = null, $HostCreateTime = null, \DateTime $ModifiedDate = null, $Imported = null, $TicketingModifiersRef = null, $InQueueMode = null, $GroupRef = null, $OwningPCC = null, $ElStat = null, $KeyOverride = null, $AgentOverride = null)
    {
      $this->ProviderReservationDetails = $ProviderReservationDetails;
      $this->ProviderReservationDisplayDetailsList = $ProviderReservationDisplayDetailsList;
      $this->ExternalReservationInfo = $ExternalReservationInfo;
      $this->Key = $Key;
      $this->ProviderCode = $ProviderCode;
      $this->LocatorCode = $LocatorCode;
      $this->CreateDate = $CreateDate ? $CreateDate->format(\DateTime::ATOM) : null;
      $this->HostCreateDate = $HostCreateDate;
      $this->HostCreateTime = $HostCreateTime;
      $this->ModifiedDate = $ModifiedDate ? $ModifiedDate->format(\DateTime::ATOM) : null;
      $this->Imported = $Imported;
      $this->TicketingModifiersRef = $TicketingModifiersRef;
      $this->InQueueMode = $InQueueMode;
      $this->GroupRef = $GroupRef;
      $this->OwningPCC = $OwningPCC;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
      $this->AgentOverride = $AgentOverride;
    }

    /**
     * @return ProviderReservationDetails
     */
    public function getProviderReservationDetails()
    {
      return $this->ProviderReservationDetails;
    }

    /**
     * @param ProviderReservationDetails $ProviderReservationDetails
     * @return \FilippoToso\Travelport\Rail\ProviderReservationInfo
     */
    public function setProviderReservationDetails($ProviderReservationDetails)
    {
      $this->ProviderReservationDetails = $ProviderReservationDetails;
      return $this;
    }

    /**
     * @return ProviderReservationDisplayDetailsList
     */
    public function getProviderReservationDisplayDetailsList()
    {
      return $this->ProviderReservationDisplayDetailsList;
    }

    /**
     * @param ProviderReservationDisplayDetailsList $ProviderReservationDisplayDetailsList
     * @return \FilippoToso\Travelport\Rail\ProviderReservationInfo
     */
    public function setProviderReservationDisplayDetailsList($ProviderReservationDisplayDetailsList)
    {
      $this->ProviderReservationDisplayDetailsList = $ProviderReservationDisplayDetailsList;
      return $this;
    }

    /**
     * @return ExternalReservationInfo
     */
    public function getExternalReservationInfo()
    {
      return $this->ExternalReservationInfo;
    }

    /**
     * @param ExternalReservationInfo $ExternalReservationInfo
     * @return \FilippoToso\Travelport\Rail\ProviderReservationInfo
     */
    public function setExternalReservationInfo($ExternalReservationInfo)
    {
      $this->ExternalReservationInfo = $ExternalReservationInfo;
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
     * @return \FilippoToso\Travelport\Rail\ProviderReservationInfo
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
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
     * @return \FilippoToso\Travelport\Rail\ProviderReservationInfo
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return typeProviderLocatorCode
     */
    public function getLocatorCode()
    {
      return $this->LocatorCode;
    }

    /**
     * @param typeProviderLocatorCode $LocatorCode
     * @return \FilippoToso\Travelport\Rail\ProviderReservationInfo
     */
    public function setLocatorCode($LocatorCode)
    {
      $this->LocatorCode = $LocatorCode;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreateDate()
    {
      if ($this->CreateDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreateDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreateDate
     * @return \FilippoToso\Travelport\Rail\ProviderReservationInfo
     */
    public function setCreateDate(\DateTime $CreateDate)
    {
      $this->CreateDate = $CreateDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return date
     */
    public function getHostCreateDate()
    {
      return $this->HostCreateDate;
    }

    /**
     * @param date $HostCreateDate
     * @return \FilippoToso\Travelport\Rail\ProviderReservationInfo
     */
    public function setHostCreateDate($HostCreateDate)
    {
      $this->HostCreateDate = $HostCreateDate;
      return $this;
    }

    /**
     * @return time
     */
    public function getHostCreateTime()
    {
      return $this->HostCreateTime;
    }

    /**
     * @param time $HostCreateTime
     * @return \FilippoToso\Travelport\Rail\ProviderReservationInfo
     */
    public function setHostCreateTime($HostCreateTime)
    {
      $this->HostCreateTime = $HostCreateTime;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModifiedDate()
    {
      if ($this->ModifiedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ModifiedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ModifiedDate
     * @return \FilippoToso\Travelport\Rail\ProviderReservationInfo
     */
    public function setModifiedDate(\DateTime $ModifiedDate)
    {
      $this->ModifiedDate = $ModifiedDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return boolean
     */
    public function getImported()
    {
      return $this->Imported;
    }

    /**
     * @param boolean $Imported
     * @return \FilippoToso\Travelport\Rail\ProviderReservationInfo
     */
    public function setImported($Imported)
    {
      $this->Imported = $Imported;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getTicketingModifiersRef()
    {
      return $this->TicketingModifiersRef;
    }

    /**
     * @param typeRef $TicketingModifiersRef
     * @return \FilippoToso\Travelport\Rail\ProviderReservationInfo
     */
    public function setTicketingModifiersRef($TicketingModifiersRef)
    {
      $this->TicketingModifiersRef = $TicketingModifiersRef;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInQueueMode()
    {
      return $this->InQueueMode;
    }

    /**
     * @param boolean $InQueueMode
     * @return \FilippoToso\Travelport\Rail\ProviderReservationInfo
     */
    public function setInQueueMode($InQueueMode)
    {
      $this->InQueueMode = $InQueueMode;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getGroupRef()
    {
      return $this->GroupRef;
    }

    /**
     * @param typeRef $GroupRef
     * @return \FilippoToso\Travelport\Rail\ProviderReservationInfo
     */
    public function setGroupRef($GroupRef)
    {
      $this->GroupRef = $GroupRef;
      return $this;
    }

    /**
     * @return typePCC
     */
    public function getOwningPCC()
    {
      return $this->OwningPCC;
    }

    /**
     * @param typePCC $OwningPCC
     * @return \FilippoToso\Travelport\Rail\ProviderReservationInfo
     */
    public function setOwningPCC($OwningPCC)
    {
      $this->OwningPCC = $OwningPCC;
      return $this;
    }

    /**
     * @return typeElementStatus
     */
    public function getElStat()
    {
      return $this->ElStat;
    }

    /**
     * @param typeElementStatus $ElStat
     * @return \FilippoToso\Travelport\Rail\ProviderReservationInfo
     */
    public function setElStat($ElStat)
    {
      $this->ElStat = $ElStat;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeyOverride()
    {
      return $this->KeyOverride;
    }

    /**
     * @param boolean $KeyOverride
     * @return \FilippoToso\Travelport\Rail\ProviderReservationInfo
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

    /**
     * @return anonymous515
     */
    public function getAgentOverride()
    {
      return $this->AgentOverride;
    }

    /**
     * @param anonymous515 $AgentOverride
     * @return \FilippoToso\Travelport\Rail\ProviderReservationInfo
     */
    public function setAgentOverride($AgentOverride)
    {
      $this->AgentOverride = $AgentOverride;
      return $this;
    }

}
