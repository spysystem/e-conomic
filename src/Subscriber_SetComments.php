<?php

namespace Economic;

class Subscriber_SetComments
{

    /**
     * @var SubscriberHandle $subscriberHandle
     */
    protected $subscriberHandle = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param SubscriberHandle $subscriberHandle
     * @param string $value
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
     * @return \Economic\Subscriber_SetComments
     */
    public function setSubscriberHandle($subscriberHandle)
    {
      $this->subscriberHandle = $subscriberHandle;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \Economic\Subscriber_SetComments
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
