<?php

namespace Economic;

class Employee_GetData
{

    /**
     * @var EmployeeHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param EmployeeHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return EmployeeHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param EmployeeHandle $entityHandle
     * @return \Economic\Employee_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
