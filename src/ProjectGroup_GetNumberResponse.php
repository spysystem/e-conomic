<?php

namespace Economic;

class ProjectGroup_GetNumberResponse
{

    /**
     * @var int $ProjectGroup_GetNumberResult
     */
    protected $ProjectGroup_GetNumberResult = null;

    /**
     * @param int $ProjectGroup_GetNumberResult
     */
    public function __construct($ProjectGroup_GetNumberResult)
    {
      $this->ProjectGroup_GetNumberResult = $ProjectGroup_GetNumberResult;
    }

    /**
     * @return int
     */
    public function getProjectGroup_GetNumberResult()
    {
      return $this->ProjectGroup_GetNumberResult;
    }

    /**
     * @param int $ProjectGroup_GetNumberResult
     * @return \Economic\ProjectGroup_GetNumberResponse
     */
    public function setProjectGroup_GetNumberResult($ProjectGroup_GetNumberResult)
    {
      $this->ProjectGroup_GetNumberResult = $ProjectGroup_GetNumberResult;
      return $this;
    }

}
