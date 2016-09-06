<?php

namespace Economic;

class Department_GetData
{

    /**
     * @var DepartmentHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param DepartmentHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return DepartmentHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param DepartmentHandle $entityHandle
     * @return \Economic\Department_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
