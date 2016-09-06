<?php

namespace Economic;

class Project_GetData
{

    /**
     * @var ProjectHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param ProjectHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return ProjectHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param ProjectHandle $entityHandle
     * @return \Economic\Project_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
