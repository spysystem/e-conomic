<?php

namespace Economic;

class ProjectGroup_GetProjectsResponse
{

    /**
     * @var ArrayOfProjectHandle $ProjectGroup_GetProjectsResult
     */
    protected $ProjectGroup_GetProjectsResult = null;

    /**
     * @param ArrayOfProjectHandle $ProjectGroup_GetProjectsResult
     */
    public function __construct($ProjectGroup_GetProjectsResult)
    {
      $this->ProjectGroup_GetProjectsResult = $ProjectGroup_GetProjectsResult;
    }

    /**
     * @return ArrayOfProjectHandle
     */
    public function getProjectGroup_GetProjectsResult()
    {
      return $this->ProjectGroup_GetProjectsResult;
    }

    /**
     * @param ArrayOfProjectHandle $ProjectGroup_GetProjectsResult
     * @return \Economic\ProjectGroup_GetProjectsResponse
     */
    public function setProjectGroup_GetProjectsResult($ProjectGroup_GetProjectsResult)
    {
      $this->ProjectGroup_GetProjectsResult = $ProjectGroup_GetProjectsResult;
      return $this;
    }

}
