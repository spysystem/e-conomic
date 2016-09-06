<?php

namespace Economic;

class Project_SetMileage
{

    /**
     * @var ProjectHandle $projectHandle
     */
    protected $projectHandle = null;

    /**
     * @var float $value
     */
    protected $value = null;

    /**
     * @param ProjectHandle $projectHandle
     * @param float $value
     */
    public function __construct($projectHandle, $value)
    {
      $this->projectHandle = $projectHandle;
      $this->value = $value;
    }

    /**
     * @return ProjectHandle
     */
    public function getProjectHandle()
    {
      return $this->projectHandle;
    }

    /**
     * @param ProjectHandle $projectHandle
     * @return \Economic\Project_SetMileage
     */
    public function setProjectHandle($projectHandle)
    {
      $this->projectHandle = $projectHandle;
      return $this;
    }

    /**
     * @return float
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param float $value
     * @return \Economic\Project_SetMileage
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
