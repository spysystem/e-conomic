<?php

namespace Economic;

class Project_CreateFromDataArrayResponse
{

    /**
     * @var ArrayOfProjectHandle $Project_CreateFromDataArrayResult
     */
    protected $Project_CreateFromDataArrayResult = null;

    /**
     * @param ArrayOfProjectHandle $Project_CreateFromDataArrayResult
     */
    public function __construct($Project_CreateFromDataArrayResult)
    {
      $this->Project_CreateFromDataArrayResult = $Project_CreateFromDataArrayResult;
    }

    /**
     * @return ArrayOfProjectHandle
     */
    public function getProject_CreateFromDataArrayResult()
    {
      return $this->Project_CreateFromDataArrayResult;
    }

    /**
     * @param ArrayOfProjectHandle $Project_CreateFromDataArrayResult
     * @return \Economic\Project_CreateFromDataArrayResponse
     */
    public function setProject_CreateFromDataArrayResult($Project_CreateFromDataArrayResult)
    {
      $this->Project_CreateFromDataArrayResult = $Project_CreateFromDataArrayResult;
      return $this;
    }

}
