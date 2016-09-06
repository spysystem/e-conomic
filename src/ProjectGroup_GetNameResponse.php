<?php

namespace Economic;

class ProjectGroup_GetNameResponse
{

    /**
     * @var string $ProjectGroup_GetNameResult
     */
    protected $ProjectGroup_GetNameResult = null;

    /**
     * @param string $ProjectGroup_GetNameResult
     */
    public function __construct($ProjectGroup_GetNameResult)
    {
      $this->ProjectGroup_GetNameResult = $ProjectGroup_GetNameResult;
    }

    /**
     * @return string
     */
    public function getProjectGroup_GetNameResult()
    {
      return $this->ProjectGroup_GetNameResult;
    }

    /**
     * @param string $ProjectGroup_GetNameResult
     * @return \Economic\ProjectGroup_GetNameResponse
     */
    public function setProjectGroup_GetNameResult($ProjectGroup_GetNameResult)
    {
      $this->ProjectGroup_GetNameResult = $ProjectGroup_GetNameResult;
      return $this;
    }

}
