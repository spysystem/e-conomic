<?php

namespace Economic;

class Project_GetAllUpdatedResponse
{

    /**
     * @var ArrayOfProjectHandle $Project_GetAllUpdatedResult
     */
    protected $Project_GetAllUpdatedResult = null;

    /**
     * @param ArrayOfProjectHandle $Project_GetAllUpdatedResult
     */
    public function __construct($Project_GetAllUpdatedResult)
    {
      $this->Project_GetAllUpdatedResult = $Project_GetAllUpdatedResult;
    }

    /**
     * @return ArrayOfProjectHandle
     */
    public function getProject_GetAllUpdatedResult()
    {
      return $this->Project_GetAllUpdatedResult;
    }

    /**
     * @param ArrayOfProjectHandle $Project_GetAllUpdatedResult
     * @return \Economic\Project_GetAllUpdatedResponse
     */
    public function setProject_GetAllUpdatedResult($Project_GetAllUpdatedResult)
    {
      $this->Project_GetAllUpdatedResult = $Project_GetAllUpdatedResult;
      return $this;
    }

}
