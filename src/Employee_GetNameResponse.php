<?php

namespace Economic;

class Employee_GetNameResponse
{

    /**
     * @var string $Employee_GetNameResult
     */
    protected $Employee_GetNameResult = null;

    /**
     * @param string $Employee_GetNameResult
     */
    public function __construct($Employee_GetNameResult)
    {
      $this->Employee_GetNameResult = $Employee_GetNameResult;
    }

    /**
     * @return string
     */
    public function getEmployee_GetNameResult()
    {
      return $this->Employee_GetNameResult;
    }

    /**
     * @param string $Employee_GetNameResult
     * @return \Economic\Employee_GetNameResponse
     */
    public function setEmployee_GetNameResult($Employee_GetNameResult)
    {
      $this->Employee_GetNameResult = $Employee_GetNameResult;
      return $this;
    }

}
