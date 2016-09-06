<?php

namespace Economic;

class Entry_GetProjectResponse
{

    /**
     * @var ProjectHandle $Entry_GetProjectResult
     */
    protected $Entry_GetProjectResult = null;

    /**
     * @param ProjectHandle $Entry_GetProjectResult
     */
    public function __construct($Entry_GetProjectResult)
    {
      $this->Entry_GetProjectResult = $Entry_GetProjectResult;
    }

    /**
     * @return ProjectHandle
     */
    public function getEntry_GetProjectResult()
    {
      return $this->Entry_GetProjectResult;
    }

    /**
     * @param ProjectHandle $Entry_GetProjectResult
     * @return \Economic\Entry_GetProjectResponse
     */
    public function setEntry_GetProjectResult($Entry_GetProjectResult)
    {
      $this->Entry_GetProjectResult = $Entry_GetProjectResult;
      return $this;
    }

}
