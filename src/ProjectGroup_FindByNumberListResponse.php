<?php

namespace Economic;

class ProjectGroup_FindByNumberListResponse
{

    /**
     * @var ArrayOfProjectGroupHandle $ProjectGroup_FindByNumberListResult
     */
    protected $ProjectGroup_FindByNumberListResult = null;

    /**
     * @param ArrayOfProjectGroupHandle $ProjectGroup_FindByNumberListResult
     */
    public function __construct($ProjectGroup_FindByNumberListResult)
    {
      $this->ProjectGroup_FindByNumberListResult = $ProjectGroup_FindByNumberListResult;
    }

    /**
     * @return ArrayOfProjectGroupHandle
     */
    public function getProjectGroup_FindByNumberListResult()
    {
      return $this->ProjectGroup_FindByNumberListResult;
    }

    /**
     * @param ArrayOfProjectGroupHandle $ProjectGroup_FindByNumberListResult
     * @return \Economic\ProjectGroup_FindByNumberListResponse
     */
    public function setProjectGroup_FindByNumberListResult($ProjectGroup_FindByNumberListResult)
    {
      $this->ProjectGroup_FindByNumberListResult = $ProjectGroup_FindByNumberListResult;
      return $this;
    }

}
