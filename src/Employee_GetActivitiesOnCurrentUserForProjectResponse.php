<?php

namespace Economic;

class Employee_GetActivitiesOnCurrentUserForProjectResponse
{

    /**
     * @var ArrayOfActivityData $Employee_GetActivitiesOnCurrentUserForProjectResult
     */
    protected $Employee_GetActivitiesOnCurrentUserForProjectResult = null;

    /**
     * @param ArrayOfActivityData $Employee_GetActivitiesOnCurrentUserForProjectResult
     */
    public function __construct($Employee_GetActivitiesOnCurrentUserForProjectResult)
    {
      $this->Employee_GetActivitiesOnCurrentUserForProjectResult = $Employee_GetActivitiesOnCurrentUserForProjectResult;
    }

    /**
     * @return ArrayOfActivityData
     */
    public function getEmployee_GetActivitiesOnCurrentUserForProjectResult()
    {
      return $this->Employee_GetActivitiesOnCurrentUserForProjectResult;
    }

    /**
     * @param ArrayOfActivityData $Employee_GetActivitiesOnCurrentUserForProjectResult
     * @return \Economic\Employee_GetActivitiesOnCurrentUserForProjectResponse
     */
    public function setEmployee_GetActivitiesOnCurrentUserForProjectResult($Employee_GetActivitiesOnCurrentUserForProjectResult)
    {
      $this->Employee_GetActivitiesOnCurrentUserForProjectResult = $Employee_GetActivitiesOnCurrentUserForProjectResult;
      return $this;
    }

}
