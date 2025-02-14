<?php

namespace FilippoToso\Travelport\Terminal;

class QueueSelector
{

    /**
     * @var string $Queue
     */
    public $Queue = null;

    /**
     * @var string $Category
     */
    public $Category = null;

    /**
     * @var string $DateRange
     */
    public $DateRange = null;

    /**
     * @param string $Queue
     * @param string $Category
     * @param string $DateRange
     */
    public function __construct($Queue = null, $Category = null, $DateRange = null)
    {
      $this->Queue = $Queue;
      $this->Category = $Category;
      $this->DateRange = $DateRange;
    }

    /**
     * @return string
     */
    public function getQueue()
    {
      return $this->Queue;
    }

    /**
     * @param string $Queue
     * @return \FilippoToso\Travelport\Terminal\QueueSelector
     */
    public function setQueue($Queue)
    {
      $this->Queue = $Queue;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param string $Category
     * @return \FilippoToso\Travelport\Terminal\QueueSelector
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
    }

    /**
     * @return string
     */
    public function getDateRange()
    {
      return $this->DateRange;
    }

    /**
     * @param string $DateRange
     * @return \FilippoToso\Travelport\Terminal\QueueSelector
     */
    public function setDateRange($DateRange)
    {
      $this->DateRange = $DateRange;
      return $this;
    }

}
