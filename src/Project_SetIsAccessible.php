<?php

namespace Economic;

class Project_SetIsAccessible
{

    /**
     * @var ProjectHandle $projectHandle
     */
    protected $projectHandle = null;

    /**
     * @var boolean $value
     */
    protected $value = null;

    /**
     * @param ProjectHandle $projectHandle
     * @param boolean $value
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
     * @return \Economic\Project_SetIsAccessible
     */
    public function setProjectHandle($projectHandle)
    {
      $this->projectHandle = $projectHandle;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param boolean $value
     * @return \Economic\Project_SetIsAccessible
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
