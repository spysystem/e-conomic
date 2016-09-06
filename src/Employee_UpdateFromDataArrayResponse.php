<?php

namespace Economic;

class Employee_UpdateFromDataArrayResponse
{

    /**
     * @var ArrayOfEmployeeHandle $Employee_UpdateFromDataArrayResult
     */
    protected $Employee_UpdateFromDataArrayResult = null;

    /**
     * @param ArrayOfEmployeeHandle $Employee_UpdateFromDataArrayResult
     */
    public function __construct($Employee_UpdateFromDataArrayResult)
    {
      $this->Employee_UpdateFromDataArrayResult = $Employee_UpdateFromDataArrayResult;
    }

    /**
     * @return ArrayOfEmployeeHandle
     */
    public function getEmployee_UpdateFromDataArrayResult()
    {
      return $this->Employee_UpdateFromDataArrayResult;
    }

    /**
     * @param ArrayOfEmployeeHandle $Employee_UpdateFromDataArrayResult
     * @return \Economic\Employee_UpdateFromDataArrayResponse
     */
    public function setEmployee_UpdateFromDataArrayResult($Employee_UpdateFromDataArrayResult)
    {
      $this->Employee_UpdateFromDataArrayResult = $Employee_UpdateFromDataArrayResult;
      return $this;
    }

}
