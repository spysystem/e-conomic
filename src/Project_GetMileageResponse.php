<?php

namespace Economic;

class Project_GetMileageResponse
{

    /**
     * @var float $Project_GetMileageResult
     */
    protected $Project_GetMileageResult = null;

    /**
     * @param float $Project_GetMileageResult
     */
    public function __construct($Project_GetMileageResult)
    {
      $this->Project_GetMileageResult = $Project_GetMileageResult;
    }

    /**
     * @return float
     */
    public function getProject_GetMileageResult()
    {
      return $this->Project_GetMileageResult;
    }

    /**
     * @param float $Project_GetMileageResult
     * @return \Economic\Project_GetMileageResponse
     */
    public function setProject_GetMileageResult($Project_GetMileageResult)
    {
      $this->Project_GetMileageResult = $Project_GetMileageResult;
      return $this;
    }

}
