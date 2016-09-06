<?php

namespace Economic;

class Project_GetDataArrayResponse
{

    /**
     * @var ArrayOfProjectData $Project_GetDataArrayResult
     */
    protected $Project_GetDataArrayResult = null;

    /**
     * @param ArrayOfProjectData $Project_GetDataArrayResult
     */
    public function __construct($Project_GetDataArrayResult)
    {
      $this->Project_GetDataArrayResult = $Project_GetDataArrayResult;
    }

    /**
     * @return ArrayOfProjectData
     */
    public function getProject_GetDataArrayResult()
    {
      return $this->Project_GetDataArrayResult;
    }

    /**
     * @param ArrayOfProjectData $Project_GetDataArrayResult
     * @return \Economic\Project_GetDataArrayResponse
     */
    public function setProject_GetDataArrayResult($Project_GetDataArrayResult)
    {
      $this->Project_GetDataArrayResult = $Project_GetDataArrayResult;
      return $this;
    }

}
