<?php

namespace Economic;

class EmployeeGroup_CreateFromDataArrayResponse
{

    /**
     * @var ArrayOfEmployeeGroupHandle $EmployeeGroup_CreateFromDataArrayResult
     */
    protected $EmployeeGroup_CreateFromDataArrayResult = null;

    /**
     * @param ArrayOfEmployeeGroupHandle $EmployeeGroup_CreateFromDataArrayResult
     */
    public function __construct($EmployeeGroup_CreateFromDataArrayResult)
    {
      $this->EmployeeGroup_CreateFromDataArrayResult = $EmployeeGroup_CreateFromDataArrayResult;
    }

    /**
     * @return ArrayOfEmployeeGroupHandle
     */
    public function getEmployeeGroup_CreateFromDataArrayResult()
    {
      return $this->EmployeeGroup_CreateFromDataArrayResult;
    }

    /**
     * @param ArrayOfEmployeeGroupHandle $EmployeeGroup_CreateFromDataArrayResult
     * @return \Economic\EmployeeGroup_CreateFromDataArrayResponse
     */
    public function setEmployeeGroup_CreateFromDataArrayResult($EmployeeGroup_CreateFromDataArrayResult)
    {
      $this->EmployeeGroup_CreateFromDataArrayResult = $EmployeeGroup_CreateFromDataArrayResult;
      return $this;
    }

}
