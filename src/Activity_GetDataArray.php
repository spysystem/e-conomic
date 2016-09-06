<?php

namespace Economic;

class Activity_GetDataArray
{

    /**
     * @var ArrayOfActivityHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfActivityHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfActivityHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfActivityHandle $entityHandles
     * @return \Economic\Activity_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
