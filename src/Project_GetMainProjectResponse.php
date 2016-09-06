<?php

namespace Economic;

class Project_GetMainProjectResponse
{

    /**
     * @var ProjectHandle $Project_GetMainProjectResult
     */
    protected $Project_GetMainProjectResult = null;

    /**
     * @param ProjectHandle $Project_GetMainProjectResult
     */
    public function __construct($Project_GetMainProjectResult)
    {
      $this->Project_GetMainProjectResult = $Project_GetMainProjectResult;
    }

    /**
     * @return ProjectHandle
     */
    public function getProject_GetMainProjectResult()
    {
      return $this->Project_GetMainProjectResult;
    }

    /**
     * @param ProjectHandle $Project_GetMainProjectResult
     * @return \Economic\Project_GetMainProjectResponse
     */
    public function setProject_GetMainProjectResult($Project_GetMainProjectResult)
    {
      $this->Project_GetMainProjectResult = $Project_GetMainProjectResult;
      return $this;
    }

}
