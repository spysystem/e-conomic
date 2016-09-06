<?php

namespace Economic;

class ProjectGroup_GetDataResponse
{

    /**
     * @var ProjectGroupData $ProjectGroup_GetDataResult
     */
    protected $ProjectGroup_GetDataResult = null;

    /**
     * @param ProjectGroupData $ProjectGroup_GetDataResult
     */
    public function __construct($ProjectGroup_GetDataResult)
    {
      $this->ProjectGroup_GetDataResult = $ProjectGroup_GetDataResult;
    }

    /**
     * @return ProjectGroupData
     */
    public function getProjectGroup_GetDataResult()
    {
      return $this->ProjectGroup_GetDataResult;
    }

    /**
     * @param ProjectGroupData $ProjectGroup_GetDataResult
     * @return \Economic\ProjectGroup_GetDataResponse
     */
    public function setProjectGroup_GetDataResult($ProjectGroup_GetDataResult)
    {
      $this->ProjectGroup_GetDataResult = $ProjectGroup_GetDataResult;
      return $this;
    }

}
