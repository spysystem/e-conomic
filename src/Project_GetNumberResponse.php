<?php

namespace Economic;

class Project_GetNumberResponse
{

    /**
     * @var int $Project_GetNumberResult
     */
    protected $Project_GetNumberResult = null;

    /**
     * @param int $Project_GetNumberResult
     */
    public function __construct($Project_GetNumberResult)
    {
      $this->Project_GetNumberResult = $Project_GetNumberResult;
    }

    /**
     * @return int
     */
    public function getProject_GetNumberResult()
    {
      return $this->Project_GetNumberResult;
    }

    /**
     * @param int $Project_GetNumberResult
     * @return \Economic\Project_GetNumberResponse
     */
    public function setProject_GetNumberResult($Project_GetNumberResult)
    {
      $this->Project_GetNumberResult = $Project_GetNumberResult;
      return $this;
    }

}
