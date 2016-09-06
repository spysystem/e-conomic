<?php

namespace Economic;

class EmployeeGroup_GetDataArrayResponse
{

    /**
     * @var ArrayOfEmployeeGroupData $EmployeeGroup_GetDataArrayResult
     */
    protected $EmployeeGroup_GetDataArrayResult = null;

    /**
     * @param ArrayOfEmployeeGroupData $EmployeeGroup_GetDataArrayResult
     */
    public function __construct($EmployeeGroup_GetDataArrayResult)
    {
      $this->EmployeeGroup_GetDataArrayResult = $EmployeeGroup_GetDataArrayResult;
    }

    /**
     * @return ArrayOfEmployeeGroupData
     */
    public function getEmployeeGroup_GetDataArrayResult()
    {
      return $this->EmployeeGroup_GetDataArrayResult;
    }

    /**
     * @param ArrayOfEmployeeGroupData $EmployeeGroup_GetDataArrayResult
     * @return \Economic\EmployeeGroup_GetDataArrayResponse
     */
    public function setEmployeeGroup_GetDataArrayResult($EmployeeGroup_GetDataArrayResult)
    {
      $this->EmployeeGroup_GetDataArrayResult = $EmployeeGroup_GetDataArrayResult;
      return $this;
    }

}
