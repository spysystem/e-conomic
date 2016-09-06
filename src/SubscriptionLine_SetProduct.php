<?php

namespace Economic;

class SubscriptionLine_SetProduct
{

    /**
     * @var SubscriptionLineHandle $subscriptionLineHandle
     */
    protected $subscriptionLineHandle = null;

    /**
     * @var ProductHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param SubscriptionLineHandle $subscriptionLineHandle
     * @param ProductHandle $valueHandle
     */
    public function __construct($subscriptionLineHandle, $valueHandle)
    {
      $this->subscriptionLineHandle = $subscriptionLineHandle;
      $this->valueHandle = $valueHandle;
    }

    /**
     * @return SubscriptionLineHandle
     */
    public function getSubscriptionLineHandle()
    {
      return $this->subscriptionLineHandle;
    }

    /**
     * @param SubscriptionLineHandle $subscriptionLineHandle
     * @return \Economic\SubscriptionLine_SetProduct
     */
    public function setSubscriptionLineHandle($subscriptionLineHandle)
    {
      $this->subscriptionLineHandle = $subscriptionLineHandle;
      return $this;
    }

    /**
     * @return ProductHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param ProductHandle $valueHandle
     * @return \Economic\SubscriptionLine_SetProduct
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
