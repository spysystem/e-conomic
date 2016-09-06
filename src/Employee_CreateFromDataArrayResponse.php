<?php

namespace Economic;

class Employee_CreateFromDataArrayResponse
{

    /**
     * @var ArrayOfEmployeeHandle $Employee_CreateFromDataArrayResult
     */
    protected $Employee_CreateFromDataArrayResult = null;

    /**
     * @param ArrayOfEmployeeHandle $Employee_CreateFromDataArrayResult
     */
    public function __construct($Employee_CreateFromDataArrayResult)
    {
      $this->Employee_CreateFromDataArrayResult = $Employee_CreateFromDataArrayResult;
    }

    /**
     * @return ArrayOfEmployeeHandle
     */
    public function getEmployee_CreateFromDataArrayResult()
    {
      return $this->Employee_CreateFromDataArrayResult;
    }

    /**
     * @param ArrayOfEmployeeHandle $Employee_CreateFromDataArrayResult
     * @return \Economic\Employee_CreateFromDataArrayResponse
     */
    public function setEmployee_CreateFromDataArrayResult($Employee_CreateFromDataArrayResult)
    {
      $this->Employee_CreateFromDataArrayResult = $Employee_CreateFromDataArrayResult;
      return $this;
    }

}
