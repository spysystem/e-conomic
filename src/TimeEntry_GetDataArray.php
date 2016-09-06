<?php

namespace Economic;

class TimeEntry_GetDataArray
{

    /**
     * @var ArrayOfTimeEntryHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfTimeEntryHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfTimeEntryHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfTimeEntryHandle $entityHandles
     * @return \Economic\TimeEntry_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
