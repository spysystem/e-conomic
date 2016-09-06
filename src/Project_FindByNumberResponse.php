<?php

namespace Economic;

class Project_FindByNumberResponse
{

    /**
     * @var ProjectHandle $Project_FindByNumberResult
     */
    protected $Project_FindByNumberResult = null;

    /**
     * @param ProjectHandle $Project_FindByNumberResult
     */
    public function __construct($Project_FindByNumberResult)
    {
      $this->Project_FindByNumberResult = $Project_FindByNumberResult;
    }

    /**
     * @return ProjectHandle
     */
    public function getProject_FindByNumberResult()
    {
      return $this->Project_FindByNumberResult;
    }

    /**
     * @param ProjectHandle $Project_FindByNumberResult
     * @return \Economic\Project_FindByNumberResponse
     */
    public function setProject_FindByNumberResult($Project_FindByNumberResult)
    {
      $this->Project_FindByNumberResult = $Project_FindByNumberResult;
      return $this;
    }

}
