<?php

namespace Economic;

class ProjectGroup_GetDataArrayResponse
{

    /**
     * @var ArrayOfProjectGroupData $ProjectGroup_GetDataArrayResult
     */
    protected $ProjectGroup_GetDataArrayResult = null;

    /**
     * @param ArrayOfProjectGroupData $ProjectGroup_GetDataArrayResult
     */
    public function __construct($ProjectGroup_GetDataArrayResult)
    {
      $this->ProjectGroup_GetDataArrayResult = $ProjectGroup_GetDataArrayResult;
    }

    /**
     * @return ArrayOfProjectGroupData
     */
    public function getProjectGroup_GetDataArrayResult()
    {
      return $this->ProjectGroup_GetDataArrayResult;
    }

    /**
     * @param ArrayOfProjectGroupData $ProjectGroup_GetDataArrayResult
     * @return \Economic\ProjectGroup_GetDataArrayResponse
     */
    public function setProjectGroup_GetDataArrayResult($ProjectGroup_GetDataArrayResult)
    {
      $this->ProjectGroup_GetDataArrayResult = $ProjectGroup_GetDataArrayResult;
      return $this;
    }

}
