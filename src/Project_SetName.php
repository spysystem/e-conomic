<?php

namespace Economic;

class Project_SetName
{

    /**
     * @var ProjectHandle $projectHandle
     */
    protected $projectHandle = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param ProjectHandle $projectHandle
     * @param string $value
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
     * @return \Economic\Project_SetName
     */
    public function setProjectHandle($projectHandle)
    {
      $this->projectHandle = $projectHandle;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \Economic\Project_SetName
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
