<?php

namespace Economic;

class MileageEntry_GetProjectResponse
{

    /**
     * @var ProjectHandle $MileageEntry_GetProjectResult
     */
    protected $MileageEntry_GetProjectResult = null;

    /**
     * @param ProjectHandle $MileageEntry_GetProjectResult
     */
    public function __construct($MileageEntry_GetProjectResult)
    {
      $this->MileageEntry_GetProjectResult = $MileageEntry_GetProjectResult;
    }

    /**
     * @return ProjectHandle
     */
    public function getMileageEntry_GetProjectResult()
    {
      return $this->MileageEntry_GetProjectResult;
    }

    /**
     * @param ProjectHandle $MileageEntry_GetProjectResult
     * @return \Economic\MileageEntry_GetProjectResponse
     */
    public function setMileageEntry_GetProjectResult($MileageEntry_GetProjectResult)
    {
      $this->MileageEntry_GetProjectResult = $MileageEntry_GetProjectResult;
      return $this;
    }

}
