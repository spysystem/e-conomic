<?php

namespace Economic;

class EmployeeGroup_FindByNameResponse
{

    /**
     * @var ArrayOfEmployeeGroupHandle $EmployeeGroup_FindByNameResult
     */
    protected $EmployeeGroup_FindByNameResult = null;

    /**
     * @param ArrayOfEmployeeGroupHandle $EmployeeGroup_FindByNameResult
     */
    public function __construct($EmployeeGroup_FindByNameResult)
    {
      $this->EmployeeGroup_FindByNameResult = $EmployeeGroup_FindByNameResult;
    }

    /**
     * @return ArrayOfEmployeeGroupHandle
     */
    public function getEmployeeGroup_FindByNameResult()
    {
      return $this->EmployeeGroup_FindByNameResult;
    }

    /**
     * @param ArrayOfEmployeeGroupHandle $EmployeeGroup_FindByNameResult
     * @return \Economic\EmployeeGroup_FindByNameResponse
     */
    public function setEmployeeGroup_FindByNameResult($EmployeeGroup_FindByNameResult)
    {
      $this->EmployeeGroup_FindByNameResult = $EmployeeGroup_FindByNameResult;
      return $this;
    }

}
