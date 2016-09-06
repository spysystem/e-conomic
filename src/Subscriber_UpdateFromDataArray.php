<?php

namespace Economic;

class Subscriber_UpdateFromDataArray
{

    /**
     * @var ArrayOfSubscriberData $dataArray
     */
    protected $dataArray = null;

    /**
     * @param ArrayOfSubscriberData $dataArray
     */
    public function __construct($dataArray)
    {
      $this->dataArray = $dataArray;
    }

    /**
     * @return ArrayOfSubscriberData
     */
    public function getDataArray()
    {
      return $this->dataArray;
    }

    /**
     * @param ArrayOfSubscriberData $dataArray
     * @return \Economic\Subscriber_UpdateFromDataArray
     */
    public function setDataArray($dataArray)
    {
      $this->dataArray = $dataArray;
      return $this;
    }

}
