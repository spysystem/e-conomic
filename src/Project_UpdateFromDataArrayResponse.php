<?php

namespace Economic;

class Project_UpdateFromDataArrayResponse
{

    /**
     * @var ArrayOfProjectHandle $Project_UpdateFromDataArrayResult
     */
    protected $Project_UpdateFromDataArrayResult = null;

    /**
     * @param ArrayOfProjectHandle $Project_UpdateFromDataArrayResult
     */
    public function __construct($Project_UpdateFromDataArrayResult)
    {
      $this->Project_UpdateFromDataArrayResult = $Project_UpdateFromDataArrayResult;
    }

    /**
     * @return ArrayOfProjectHandle
     */
    public function getProject_UpdateFromDataArrayResult()
    {
      return $this->Project_UpdateFromDataArrayResult;
    }

    /**
     * @param ArrayOfProjectHandle $Project_UpdateFromDataArrayResult
     * @return \Economic\Project_UpdateFromDataArrayResponse
     */
    public function setProject_UpdateFromDataArrayResult($Project_UpdateFromDataArrayResult)
    {
      $this->Project_UpdateFromDataArrayResult = $Project_UpdateFromDataArrayResult;
      return $this;
    }

}
