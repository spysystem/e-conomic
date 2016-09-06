<?php

namespace Economic;

class Subscriber_SetQuantityFactor
{

    /**
     * @var SubscriberHandle $subscriberHandle
     */
    protected $subscriberHandle = null;

    /**
     * @var float $value
     */
    protected $value = null;

    /**
     * @param SubscriberHandle $subscriberHandle
     * @param float $value
     */
    public function __construct($subscriberHandle, $value)
    {
      $this->subscriberHandle = $subscriberHandle;
      $this->value = $value;
    }

    /**
     * @return SubscriberHandle
     */
    public function getSubscriberHandle()
    {
      return $this->subscriberHandle;
    }

    /**
     * @param SubscriberHandle $subscriberHandle
     * @return \Economic\Subscriber_SetQuantityFactor
     */
    public function setSubscriberHandle($subscriberHandle)
    {
      $this->subscriberHandle = $subscriberHandle;
      return $this;
    }

    /**
     * @return float
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param float $value
     * @return \Economic\Subscriber_SetQuantityFactor
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
