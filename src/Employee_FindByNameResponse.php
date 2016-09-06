<?php

namespace Economic;

class Employee_FindByNameResponse
{

    /**
     * @var ArrayOfEmployeeHandle $Employee_FindByNameResult
     */
    protected $Employee_FindByNameResult = null;

    /**
     * @param ArrayOfEmployeeHandle $Employee_FindByNameResult
     */
    public function __construct($Employee_FindByNameResult)
    {
      $this->Employee_FindByNameResult = $Employee_FindByNameResult;
    }

    /**
     * @return ArrayOfEmployeeHandle
     */
    public function getEmployee_FindByNameResult()
    {
      return $this->Employee_FindByNameResult;
    }

    /**
     * @param ArrayOfEmployeeHandle $Employee_FindByNameResult
     * @return \Economic\Employee_FindByNameResponse
     */
    public function setEmployee_FindByNameResult($Employee_FindByNameResult)
    {
      $this->Employee_FindByNameResult = $Employee_FindByNameResult;
      return $this;
    }

}
