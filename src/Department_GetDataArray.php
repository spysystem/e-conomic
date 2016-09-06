<?php

namespace Economic;

class Department_GetDataArray
{

    /**
     * @var ArrayOfDepartmentHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfDepartmentHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfDepartmentHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfDepartmentHandle $entityHandles
     * @return \Economic\Department_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
