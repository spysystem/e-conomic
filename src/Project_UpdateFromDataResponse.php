<?php

namespace Economic;

class Project_UpdateFromDataResponse
{

    /**
     * @var ProjectHandle $Project_UpdateFromDataResult
     */
    protected $Project_UpdateFromDataResult = null;

    /**
     * @param ProjectHandle $Project_UpdateFromDataResult
     */
    public function __construct($Project_UpdateFromDataResult)
    {
      $this->Project_UpdateFromDataResult = $Project_UpdateFromDataResult;
    }

    /**
     * @return ProjectHandle
     */
    public function getProject_UpdateFromDataResult()
    {
      return $this->Project_UpdateFromDataResult;
    }

    /**
     * @param ProjectHandle $Project_UpdateFromDataResult
     * @return \Economic\Project_UpdateFromDataResponse
     */
    public function setProject_UpdateFromDataResult($Project_UpdateFromDataResult)
    {
      $this->Project_UpdateFromDataResult = $Project_UpdateFromDataResult;
      return $this;
    }

}
