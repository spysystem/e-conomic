<?php

namespace Economic;

class Subscription_CreateFromDataArray
{

    /**
     * @var ArrayOfSubscriptionData $dataArray
     */
    protected $dataArray = null;

    /**
     * @param ArrayOfSubscriptionData $dataArray
     */
    public function __construct($dataArray)
    {
      $this->dataArray = $dataArray;
    }

    /**
     * @return ArrayOfSubscriptionData
     */
    public function getDataArray()
    {
      return $this->dataArray;
    }

    /**
     * @param ArrayOfSubscriptionData $dataArray
     * @return \Economic\Subscription_CreateFromDataArray
     */
    public function setDataArray($dataArray)
    {
      $this->dataArray = $dataArray;
      return $this;
    }

}
