<?php

namespace Economic;

class TimeEntry_GetData
{

    /**
     * @var TimeEntryHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param TimeEntryHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return TimeEntryHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param TimeEntryHandle $entityHandle
     * @return \Economic\TimeEntry_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
