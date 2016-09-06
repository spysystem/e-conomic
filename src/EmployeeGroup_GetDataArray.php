<?php

namespace Economic;

class EmployeeGroup_GetDataArray
{

    /**
     * @var ArrayOfEmployeeGroupHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfEmployeeGroupHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfEmployeeGroupHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfEmployeeGroupHandle $entityHandles
     * @return \Economic\EmployeeGroup_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
