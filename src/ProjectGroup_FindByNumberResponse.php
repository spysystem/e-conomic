<?php

namespace Economic;

class ProjectGroup_FindByNumberResponse
{

    /**
     * @var ProjectGroupHandle $ProjectGroup_FindByNumberResult
     */
    protected $ProjectGroup_FindByNumberResult = null;

    /**
     * @param ProjectGroupHandle $ProjectGroup_FindByNumberResult
     */
    public function __construct($ProjectGroup_FindByNumberResult)
    {
      $this->ProjectGroup_FindByNumberResult = $ProjectGroup_FindByNumberResult;
    }

    /**
     * @return ProjectGroupHandle
     */
    public function getProjectGroup_FindByNumberResult()
    {
      return $this->ProjectGroup_FindByNumberResult;
    }

    /**
     * @param ProjectGroupHandle $ProjectGroup_FindByNumberResult
     * @return \Economic\ProjectGroup_FindByNumberResponse
     */
    public function setProjectGroup_FindByNumberResult($ProjectGroup_FindByNumberResult)
    {
      $this->ProjectGroup_FindByNumberResult = $ProjectGroup_FindByNumberResult;
      return $this;
    }

}
