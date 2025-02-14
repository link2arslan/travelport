<?php

namespace FilippoToso\Travelport\Hotel;

class ExtraChild
{

    /**
     * @var int $Count
     */
    public $Count = null;

    /**
     * @var string $Content
     */
    public $Content = null;

    /**
     * @param int $Count
     * @param string $Content
     */
    public function __construct($Count = null, $Content = null)
    {
      $this->Count = $Count;
      $this->Content = $Content;
    }

    /**
     * @return int
     */
    public function getCount()
    {
      return $this->Count;
    }

    /**
     * @param int $Count
     * @return \FilippoToso\Travelport\Hotel\ExtraChild
     */
    public function setCount($Count)
    {
      $this->Count = $Count;
      return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param string $Content
     * @return \FilippoToso\Travelport\Hotel\ExtraChild
     */
    public function setContent($Content)
    {
      $this->Content = $Content;
      return $this;
    }

}
