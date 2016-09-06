<?php

namespace Economic;

class Subscription_GetDataArray
{

    /**
     * @var ArrayOfSubscriptionHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfSubscriptionHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfSubscriptionHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfSubscriptionHandle $entityHandles
     * @return \Economic\Subscription_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
