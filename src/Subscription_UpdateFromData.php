<?php

namespace Economic;

class Subscription_UpdateFromData
{

    /**
     * @var SubscriptionData $data
     */
    protected $data = null;

    /**
     * @param SubscriptionData $data
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * @return SubscriptionData
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param SubscriptionData $data
     * @return \Economic\Subscription_UpdateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
