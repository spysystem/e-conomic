<?php

namespace Economic;

class SubscriptionLine_UpdateFromData
{

    /**
     * @var SubscriptionLineData $data
     */
    protected $data = null;

    /**
     * @param SubscriptionLineData $data
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * @return SubscriptionLineData
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param SubscriptionLineData $data
     * @return \Economic\SubscriptionLine_UpdateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
