<?php

namespace Economic;

class Project_CreateFromDataResponse
{

    /**
     * @var ProjectHandle $Project_CreateFromDataResult
     */
    protected $Project_CreateFromDataResult = null;

    /**
     * @param ProjectHandle $Project_CreateFromDataResult
     */
    public function __construct($Project_CreateFromDataResult)
    {
      $this->Project_CreateFromDataResult = $Project_CreateFromDataResult;
    }

    /**
     * @return ProjectHandle
     */
    public function getProject_CreateFromDataResult()
    {
      return $this->Project_CreateFromDataResult;
    }

    /**
     * @param ProjectHandle $Project_CreateFromDataResult
     * @return \Economic\Project_CreateFromDataResponse
     */
    public function setProject_CreateFromDataResult($Project_CreateFromDataResult)
    {
      $this->Project_CreateFromDataResult = $Project_CreateFromDataResult;
      return $this;
    }

}
