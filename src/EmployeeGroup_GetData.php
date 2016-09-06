<?php

namespace Economic;

class EmployeeGroup_GetData
{

    /**
     * @var EmployeeGroupHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param EmployeeGroupHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return EmployeeGroupHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param EmployeeGroupHandle $entityHandle
     * @return \Economic\EmployeeGroup_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
