<?php

namespace Economic;

class SubscriptionLine_GetData
{

    /**
     * @var SubscriptionLineHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param SubscriptionLineHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return SubscriptionLineHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param SubscriptionLineHandle $entityHandle
     * @return \Economic\SubscriptionLine_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
