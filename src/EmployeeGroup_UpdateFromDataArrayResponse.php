<?php

namespace Economic;

class EmployeeGroup_UpdateFromDataArrayResponse
{

    /**
     * @var ArrayOfEmployeeGroupHandle $EmployeeGroup_UpdateFromDataArrayResult
     */
    protected $EmployeeGroup_UpdateFromDataArrayResult = null;

    /**
     * @param ArrayOfEmployeeGroupHandle $EmployeeGroup_UpdateFromDataArrayResult
     */
    public function __construct($EmployeeGroup_UpdateFromDataArrayResult)
    {
      $this->EmployeeGroup_UpdateFromDataArrayResult = $EmployeeGroup_UpdateFromDataArrayResult;
    }

    /**
     * @return ArrayOfEmployeeGroupHandle
     */
    public function getEmployeeGroup_UpdateFromDataArrayResult()
    {
      return $this->EmployeeGroup_UpdateFromDataArrayResult;
    }

    /**
     * @param ArrayOfEmployeeGroupHandle $EmployeeGroup_UpdateFromDataArrayResult
     * @return \Economic\EmployeeGroup_UpdateFromDataArrayResponse
     */
    public function setEmployeeGroup_UpdateFromDataArrayResult($EmployeeGroup_UpdateFromDataArrayResult)
    {
      $this->EmployeeGroup_UpdateFromDataArrayResult = $EmployeeGroup_UpdateFromDataArrayResult;
      return $this;
    }

}
