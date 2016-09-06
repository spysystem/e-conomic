<?php

namespace Economic;

class ProjectGroup_GetDataArray
{

    /**
     * @var ArrayOfProjectGroupHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfProjectGroupHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfProjectGroupHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfProjectGroupHandle $entityHandles
     * @return \Economic\ProjectGroup_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
