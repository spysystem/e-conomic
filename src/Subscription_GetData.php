<?php

namespace Economic;

class Subscription_GetData
{

    /**
     * @var SubscriptionHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param SubscriptionHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return SubscriptionHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param SubscriptionHandle $entityHandle
     * @return \Economic\Subscription_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
