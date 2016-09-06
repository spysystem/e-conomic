<?php

namespace Economic;

class Project_FindByNameResponse
{

    /**
     * @var ArrayOfProjectHandle $Project_FindByNameResult
     */
    protected $Project_FindByNameResult = null;

    /**
     * @param ArrayOfProjectHandle $Project_FindByNameResult
     */
    public function __construct($Project_FindByNameResult)
    {
      $this->Project_FindByNameResult = $Project_FindByNameResult;
    }

    /**
     * @return ArrayOfProjectHandle
     */
    public function getProject_FindByNameResult()
    {
      return $this->Project_FindByNameResult;
    }

    /**
     * @param ArrayOfProjectHandle $Project_FindByNameResult
     * @return \Economic\Project_FindByNameResponse
     */
    public function setProject_FindByNameResult($Project_FindByNameResult)
    {
      $this->Project_FindByNameResult = $Project_FindByNameResult;
      return $this;
    }

}
