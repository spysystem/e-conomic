<?php

namespace Economic;

class ProjectGroup_FindByNameResponse
{

    /**
     * @var ArrayOfProjectGroupHandle $ProjectGroup_FindByNameResult
     */
    protected $ProjectGroup_FindByNameResult = null;

    /**
     * @param ArrayOfProjectGroupHandle $ProjectGroup_FindByNameResult
     */
    public function __construct($ProjectGroup_FindByNameResult)
    {
      $this->ProjectGroup_FindByNameResult = $ProjectGroup_FindByNameResult;
    }

    /**
     * @return ArrayOfProjectGroupHandle
     */
    public function getProjectGroup_FindByNameResult()
    {
      return $this->ProjectGroup_FindByNameResult;
    }

    /**
     * @param ArrayOfProjectGroupHandle $ProjectGroup_FindByNameResult
     * @return \Economic\ProjectGroup_FindByNameResponse
     */
    public function setProjectGroup_FindByNameResult($ProjectGroup_FindByNameResult)
    {
      $this->ProjectGroup_FindByNameResult = $ProjectGroup_FindByNameResult;
      return $this;
    }

}
