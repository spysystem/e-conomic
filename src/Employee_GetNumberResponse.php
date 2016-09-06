<?php

namespace Economic;

class Employee_GetNumberResponse
{

    /**
     * @var int $Employee_GetNumberResult
     */
    protected $Employee_GetNumberResult = null;

    /**
     * @param int $Employee_GetNumberResult
     */
    public function __construct($Employee_GetNumberResult)
    {
      $this->Employee_GetNumberResult = $Employee_GetNumberResult;
    }

    /**
     * @return int
     */
    public function getEmployee_GetNumberResult()
    {
      return $this->Employee_GetNumberResult;
    }

    /**
     * @param int $Employee_GetNumberResult
     * @return \Economic\Employee_GetNumberResponse
     */
    public function setEmployee_GetNumberResult($Employee_GetNumberResult)
    {
      $this->Employee_GetNumberResult = $Employee_GetNumberResult;
      return $this;
    }

}
