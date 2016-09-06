<?php

namespace Economic;

class Project_GetDescriptionResponse
{

    /**
     * @var string $Project_GetDescriptionResult
     */
    protected $Project_GetDescriptionResult = null;

    /**
     * @param string $Project_GetDescriptionResult
     */
    public function __construct($Project_GetDescriptionResult)
    {
      $this->Project_GetDescriptionResult = $Project_GetDescriptionResult;
    }

    /**
     * @return string
     */
    public function getProject_GetDescriptionResult()
    {
      return $this->Project_GetDescriptionResult;
    }

    /**
     * @param string $Project_GetDescriptionResult
     * @return \Economic\Project_GetDescriptionResponse
     */
    public function setProject_GetDescriptionResult($Project_GetDescriptionResult)
    {
      $this->Project_GetDescriptionResult = $Project_GetDescriptionResult;
      return $this;
    }

}
