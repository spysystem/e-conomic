<?php

namespace Economic;

class Employee_GetProjectsOnCurrentUserResponse
{

    /**
     * @var ArrayOfProjectData $Employee_GetProjectsOnCurrentUserResult
     */
    protected $Employee_GetProjectsOnCurrentUserResult = null;

    /**
     * @param ArrayOfProjectData $Employee_GetProjectsOnCurrentUserResult
     */
    public function __construct($Employee_GetProjectsOnCurrentUserResult)
    {
      $this->Employee_GetProjectsOnCurrentUserResult = $Employee_GetProjectsOnCurrentUserResult;
    }

    /**
     * @return ArrayOfProjectData
     */
    public function getEmployee_GetProjectsOnCurrentUserResult()
    {
      return $this->Employee_GetProjectsOnCurrentUserResult;
    }

    /**
     * @param ArrayOfProjectData $Employee_GetProjectsOnCurrentUserResult
     * @return \Economic\Employee_GetProjectsOnCurrentUserResponse
     */
    public function setEmployee_GetProjectsOnCurrentUserResult($Employee_GetProjectsOnCurrentUserResult)
    {
      $this->Employee_GetProjectsOnCurrentUserResult = $Employee_GetProjectsOnCurrentUserResult;
      return $this;
    }

}
