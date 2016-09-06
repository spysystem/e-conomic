<?php

namespace Economic;

class Project_GetAllResponse
{

    /**
     * @var ArrayOfProjectHandle $Project_GetAllResult
     */
    protected $Project_GetAllResult = null;

    /**
     * @param ArrayOfProjectHandle $Project_GetAllResult
     */
    public function __construct($Project_GetAllResult)
    {
      $this->Project_GetAllResult = $Project_GetAllResult;
    }

    /**
     * @return ArrayOfProjectHandle
     */
    public function getProject_GetAllResult()
    {
      return $this->Project_GetAllResult;
    }

    /**
     * @param ArrayOfProjectHandle $Project_GetAllResult
     * @return \Economic\Project_GetAllResponse
     */
    public function setProject_GetAllResult($Project_GetAllResult)
    {
      $this->Project_GetAllResult = $Project_GetAllResult;
      return $this;
    }

}
