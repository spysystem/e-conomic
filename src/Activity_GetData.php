<?php

namespace Economic;

class Activity_GetData
{

    /**
     * @var ActivityHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param ActivityHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return ActivityHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param ActivityHandle $entityHandle
     * @return \Economic\Activity_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
