<?php

namespace Economic;

class Project_GetProjectGroupResponse
{

    /**
     * @var ProjectGroupHandle $Project_GetProjectGroupResult
     */
    protected $Project_GetProjectGroupResult = null;

    /**
     * @param ProjectGroupHandle $Project_GetProjectGroupResult
     */
    public function __construct($Project_GetProjectGroupResult)
    {
      $this->Project_GetProjectGroupResult = $Project_GetProjectGroupResult;
    }

    /**
     * @return ProjectGroupHandle
     */
    public function getProject_GetProjectGroupResult()
    {
      return $this->Project_GetProjectGroupResult;
    }

    /**
     * @param ProjectGroupHandle $Project_GetProjectGroupResult
     * @return \Economic\Project_GetProjectGroupResponse
     */
    public function setProject_GetProjectGroupResult($Project_GetProjectGroupResult)
    {
      $this->Project_GetProjectGroupResult = $Project_GetProjectGroupResult;
      return $this;
    }

}
