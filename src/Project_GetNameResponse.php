<?php

namespace Economic;

class Project_GetNameResponse
{

    /**
     * @var string $Project_GetNameResult
     */
    protected $Project_GetNameResult = null;

    /**
     * @param string $Project_GetNameResult
     */
    public function __construct($Project_GetNameResult)
    {
      $this->Project_GetNameResult = $Project_GetNameResult;
    }

    /**
     * @return string
     */
    public function getProject_GetNameResult()
    {
      return $this->Project_GetNameResult;
    }

    /**
     * @param string $Project_GetNameResult
     * @return \Economic\Project_GetNameResponse
     */
    public function setProject_GetNameResult($Project_GetNameResult)
    {
      $this->Project_GetNameResult = $Project_GetNameResult;
      return $this;
    }

}
