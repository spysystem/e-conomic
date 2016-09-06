<?php

namespace Economic;

class Subscriber_SetStartDate
{

    /**
     * @var SubscriberHandle $subscriberHandle
     */
    protected $subscriberHandle = null;

    /**
     * @var \DateTime $value
     */
    protected $value = null;

    /**
     * @param SubscriberHandle $subscriberHandle
     * @param \DateTime $value
     */
    public function __construct($subscriberHandle, \DateTime $value)
    {
      $this->subscriberHandle = $subscriberHandle;
      $this->value = $value->format(\DateTime::ATOM);
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
     * @return \Economic\Subscriber_SetStartDate
     */
    public function setSubscriberHandle($subscriberHandle)
    {
      $this->subscriberHandle = $subscriberHandle;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getValue()
    {
      if ($this->value == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->value);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $value
     * @return \Economic\Subscriber_SetStartDate
     */
    public function setValue(\DateTime $value)
    {
      $this->value = $value->format(\DateTime::ATOM);
      return $this;
    }

}
