<?php

namespace Economic;

class Project_GetResponsibleResponse
{

    /**
     * @var EmployeeHandle $Project_GetResponsibleResult
     */
    protected $Project_GetResponsibleResult = null;

    /**
     * @param EmployeeHandle $Project_GetResponsibleResult
     */
    public function __construct($Project_GetResponsibleResult)
    {
      $this->Project_GetResponsibleResult = $Project_GetResponsibleResult;
    }

    /**
     * @return EmployeeHandle
     */
    public function getProject_GetResponsibleResult()
    {
      return $this->Project_GetResponsibleResult;
    }

    /**
     * @param EmployeeHandle $Project_GetResponsibleResult
     * @return \Economic\Project_GetResponsibleResponse
     */
    public function setProject_GetResponsibleResult($Project_GetResponsibleResult)
    {
      $this->Project_GetResponsibleResult = $Project_GetResponsibleResult;
      return $this;
    }

}
