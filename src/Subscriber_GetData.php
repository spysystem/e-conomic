<?php

namespace Economic;

class Subscriber_GetData
{

    /**
     * @var SubscriberHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param SubscriberHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return SubscriberHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param SubscriberHandle $entityHandle
     * @return \Economic\Subscriber_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
