<?php

namespace Economic;

class Activity_GetNumber
{

    /**
     * @var ActivityHandle $activityHandle
     */
    protected $activityHandle = null;

    /**
     * @param ActivityHandle $activityHandle
     */
    public function __construct($activityHandle)
    {
      $this->activityHandle = $activityHandle;
    }

    /**
     * @return ActivityHandle
     */
    public function getActivityHandle()
    {
      return $this->activityHandle;
    }

    /**
     * @param ActivityHandle $activityHandle
     * @return \Economic\Activity_GetNumber
     */
    public function setActivityHandle($activityHandle)
    {
      $this->activityHandle = $activityHandle;
      return $this;
    }

}
