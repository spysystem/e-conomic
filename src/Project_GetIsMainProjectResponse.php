<?php

namespace Economic;

class Project_GetIsMainProjectResponse
{

    /**
     * @var boolean $Project_GetIsMainProjectResult
     */
    protected $Project_GetIsMainProjectResult = null;

    /**
     * @param boolean $Project_GetIsMainProjectResult
     */
    public function __construct($Project_GetIsMainProjectResult)
    {
      $this->Project_GetIsMainProjectResult = $Project_GetIsMainProjectResult;
    }

    /**
     * @return boolean
     */
    public function getProject_GetIsMainProjectResult()
    {
      return $this->Project_GetIsMainProjectResult;
    }

    /**
     * @param boolean $Project_GetIsMainProjectResult
     * @return \Economic\Project_GetIsMainProjectResponse
     */
    public function setProject_GetIsMainProjectResult($Project_GetIsMainProjectResult)
    {
      $this->Project_GetIsMainProjectResult = $Project_GetIsMainProjectResult;
      return $this;
    }

}
