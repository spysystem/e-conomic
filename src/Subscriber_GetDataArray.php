<?php

namespace Economic;

class Subscriber_GetDataArray
{

    /**
     * @var ArrayOfSubscriberHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfSubscriberHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfSubscriberHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfSubscriberHandle $entityHandles
     * @return \Economic\Subscriber_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
