<?php

namespace Economic;

class Project_GetActivitiesResponse
{

    /**
     * @var ArrayOfActivityHandle $Project_GetActivitiesResult
     */
    protected $Project_GetActivitiesResult = null;

    /**
     * @param ArrayOfActivityHandle $Project_GetActivitiesResult
     */
    public function __construct($Project_GetActivitiesResult)
    {
      $this->Project_GetActivitiesResult = $Project_GetActivitiesResult;
    }

    /**
     * @return ArrayOfActivityHandle
     */
    public function getProject_GetActivitiesResult()
    {
      return $this->Project_GetActivitiesResult;
    }

    /**
     * @param ArrayOfActivityHandle $Project_GetActivitiesResult
     * @return \Economic\Project_GetActivitiesResponse
     */
    public function setProject_GetActivitiesResult($Project_GetActivitiesResult)
    {
      $this->Project_GetActivitiesResult = $Project_GetActivitiesResult;
      return $this;
    }

}
