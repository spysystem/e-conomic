<?php

namespace Economic;

class ProjectGroup_GetAllResponse
{

    /**
     * @var ArrayOfProjectGroupHandle $ProjectGroup_GetAllResult
     */
    protected $ProjectGroup_GetAllResult = null;

    /**
     * @param ArrayOfProjectGroupHandle $ProjectGroup_GetAllResult
     */
    public function __construct($ProjectGroup_GetAllResult)
    {
      $this->ProjectGroup_GetAllResult = $ProjectGroup_GetAllResult;
    }

    /**
     * @return ArrayOfProjectGroupHandle
     */
    public function getProjectGroup_GetAllResult()
    {
      return $this->ProjectGroup_GetAllResult;
    }

    /**
     * @param ArrayOfProjectGroupHandle $ProjectGroup_GetAllResult
     * @return \Economic\ProjectGroup_GetAllResponse
     */
    public function setProjectGroup_GetAllResult($ProjectGroup_GetAllResult)
    {
      $this->ProjectGroup_GetAllResult = $ProjectGroup_GetAllResult;
      return $this;
    }

}
