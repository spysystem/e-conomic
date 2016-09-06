<?php

namespace Economic;

class Employee_GetDataArray
{

    /**
     * @var ArrayOfEmployeeHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfEmployeeHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfEmployeeHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfEmployeeHandle $entityHandles
     * @return \Economic\Employee_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
