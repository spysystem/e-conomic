<?php

namespace Economic;

class ProjectGroup_GetData
{

    /**
     * @var ProjectGroupHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param ProjectGroupHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return ProjectGroupHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param ProjectGroupHandle $entityHandle
     * @return \Economic\ProjectGroup_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
