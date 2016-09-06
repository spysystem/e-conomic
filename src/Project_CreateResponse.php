<?php

namespace Economic;

class Project_CreateResponse
{

    /**
     * @var ProjectHandle $Project_CreateResult
     */
    protected $Project_CreateResult = null;

    /**
     * @param ProjectHandle $Project_CreateResult
     */
    public function __construct($Project_CreateResult)
    {
      $this->Project_CreateResult = $Project_CreateResult;
    }

    /**
     * @return ProjectHandle
     */
    public function getProject_CreateResult()
    {
      return $this->Project_CreateResult;
    }

    /**
     * @param ProjectHandle $Project_CreateResult
     * @return \Economic\Project_CreateResponse
     */
    public function setProject_CreateResult($Project_CreateResult)
    {
      $this->Project_CreateResult = $Project_CreateResult;
      return $this;
    }

}
