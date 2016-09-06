<?php

namespace Economic;

class Project_FindByNumberListResponse
{

    /**
     * @var ArrayOfProjectHandle $Project_FindByNumberListResult
     */
    protected $Project_FindByNumberListResult = null;

    /**
     * @param ArrayOfProjectHandle $Project_FindByNumberListResult
     */
    public function __construct($Project_FindByNumberListResult)
    {
      $this->Project_FindByNumberListResult = $Project_FindByNumberListResult;
    }

    /**
     * @return ArrayOfProjectHandle
     */
    public function getProject_FindByNumberListResult()
    {
      return $this->Project_FindByNumberListResult;
    }

    /**
     * @param ArrayOfProjectHandle $Project_FindByNumberListResult
     * @return \Economic\Project_FindByNumberListResponse
     */
    public function setProject_FindByNumberListResult($Project_FindByNumberListResult)
    {
      $this->Project_FindByNumberListResult = $Project_FindByNumberListResult;
      return $this;
    }

}
