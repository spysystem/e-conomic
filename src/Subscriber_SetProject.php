<?php

namespace Economic;

class Subscriber_SetProject
{

    /**
     * @var SubscriberHandle $subscriberHandle
     */
    protected $subscriberHandle = null;

    /**
     * @var ProjectHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param SubscriberHandle $subscriberHandle
     * @param ProjectHandle $valueHandle
     */
    public function __construct($subscriberHandle, $valueHandle)
    {
      $this->subscriberHandle = $subscriberHandle;
      $this->valueHandle = $valueHandle;
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
     * @return \Economic\Subscriber_SetProject
     */
    public function setSubscriberHandle($subscriberHandle)
    {
      $this->subscriberHandle = $subscriberHandle;
      return $this;
    }

    /**
     * @return ProjectHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param ProjectHandle $valueHandle
     * @return \Economic\Subscriber_SetProject
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
