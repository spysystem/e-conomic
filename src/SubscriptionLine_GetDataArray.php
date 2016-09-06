<?php

namespace Economic;

class SubscriptionLine_GetDataArray
{

    /**
     * @var ArrayOfSubscriptionLineHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfSubscriptionLineHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfSubscriptionLineHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfSubscriptionLineHandle $entityHandles
     * @return \Economic\SubscriptionLine_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
