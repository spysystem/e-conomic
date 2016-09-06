<?php

namespace Economic;

class Project_GetDataResponse
{

    /**
     * @var ProjectData $Project_GetDataResult
     */
    protected $Project_GetDataResult = null;

    /**
     * @param ProjectData $Project_GetDataResult
     */
    public function __construct($Project_GetDataResult)
    {
      $this->Project_GetDataResult = $Project_GetDataResult;
    }

    /**
     * @return ProjectData
     */
    public function getProject_GetDataResult()
    {
      return $this->Project_GetDataResult;
    }

    /**
     * @param ProjectData $Project_GetDataResult
     * @return \Economic\Project_GetDataResponse
     */
    public function setProject_GetDataResult($Project_GetDataResult)
    {
      $this->Project_GetDataResult = $Project_GetDataResult;
      return $this;
    }

}
