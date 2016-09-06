<?php

namespace Economic;

class Project_GetIsClosedResponse
{

    /**
     * @var boolean $Project_GetIsClosedResult
     */
    protected $Project_GetIsClosedResult = null;

    /**
     * @param boolean $Project_GetIsClosedResult
     */
    public function __construct($Project_GetIsClosedResult)
    {
      $this->Project_GetIsClosedResult = $Project_GetIsClosedResult;
    }

    /**
     * @return boolean
     */
    public function getProject_GetIsClosedResult()
    {
      return $this->Project_GetIsClosedResult;
    }

    /**
     * @param boolean $Project_GetIsClosedResult
     * @return \Economic\Project_GetIsClosedResponse
     */
    public function setProject_GetIsClosedResult($Project_GetIsClosedResult)
    {
      $this->Project_GetIsClosedResult = $Project_GetIsClosedResult;
      return $this;
    }

}
