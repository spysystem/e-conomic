<?php

namespace Economic;

class Project_GetIsAccessibleResponse
{

    /**
     * @var boolean $Project_GetIsAccessibleResult
     */
    protected $Project_GetIsAccessibleResult = null;

    /**
     * @param boolean $Project_GetIsAccessibleResult
     */
    public function __construct($Project_GetIsAccessibleResult)
    {
      $this->Project_GetIsAccessibleResult = $Project_GetIsAccessibleResult;
    }

    /**
     * @return boolean
     */
    public function getProject_GetIsAccessibleResult()
    {
      return $this->Project_GetIsAccessibleResult;
    }

    /**
     * @param boolean $Project_GetIsAccessibleResult
     * @return \Economic\Project_GetIsAccessibleResponse
     */
    public function setProject_GetIsAccessibleResult($Project_GetIsAccessibleResult)
    {
      $this->Project_GetIsAccessibleResult = $Project_GetIsAccessibleResult;
      return $this;
    }

}
