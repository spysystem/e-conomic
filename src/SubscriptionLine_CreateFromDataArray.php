<?php

namespace Economic;

class SubscriptionLine_CreateFromDataArray
{

    /**
     * @var ArrayOfSubscriptionLineData $dataArray
     */
    protected $dataArray = null;

    /**
     * @param ArrayOfSubscriptionLineData $dataArray
     */
    public function __construct($dataArray)
    {
      $this->dataArray = $dataArray;
    }

    /**
     * @return ArrayOfSubscriptionLineData
     */
    public function getDataArray()
    {
      return $this->dataArray;
    }

    /**
     * @param ArrayOfSubscriptionLineData $dataArray
     * @return \Economic\SubscriptionLine_CreateFromDataArray
     */
    public function setDataArray($dataArray)
    {
      $this->dataArray = $dataArray;
      return $this;
    }

}
