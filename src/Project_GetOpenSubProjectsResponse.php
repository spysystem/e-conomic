<?php

namespace Economic;

class Project_GetOpenSubProjectsResponse
{

    /**
     * @var ArrayOfProjectHandle $Project_GetOpenSubProjectsResult
     */
    protected $Project_GetOpenSubProjectsResult = null;

    /**
     * @param ArrayOfProjectHandle $Project_GetOpenSubProjectsResult
     */
    public function __construct($Project_GetOpenSubProjectsResult)
    {
      $this->Project_GetOpenSubProjectsResult = $Project_GetOpenSubProjectsResult;
    }

    /**
     * @return ArrayOfProjectHandle
     */
    public function getProject_GetOpenSubProjectsResult()
    {
      return $this->Project_GetOpenSubProjectsResult;
    }

    /**
     * @param ArrayOfProjectHandle $Project_GetOpenSubProjectsResult
     * @return \Economic\Project_GetOpenSubProjectsResponse
     */
    public function setProject_GetOpenSubProjectsResult($Project_GetOpenSubProjectsResult)
    {
      $this->Project_GetOpenSubProjectsResult = $Project_GetOpenSubProjectsResult;
      return $this;
    }

}
