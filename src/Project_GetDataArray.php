<?php

namespace Economic;

class Project_GetDataArray
{

    /**
     * @var ArrayOfProjectHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfProjectHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfProjectHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfProjectHandle $entityHandles
     * @return \Economic\Project_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
