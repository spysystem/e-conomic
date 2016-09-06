<?php

namespace Economic;

class Project_SetProjectGroup
{

    /**
     * @var ProjectHandle $projectHandle
     */
    protected $projectHandle = null;

    /**
     * @var ProjectGroupHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param ProjectHandle $projectHandle
     * @param ProjectGroupHandle $valueHandle
     */
    public function __construct($projectHandle, $valueHandle)
    {
      $this->projectHandle = $projectHandle;
      $this->valueHandle = $valueHandle;
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
     * @return \Economic\Project_SetProjectGroup
     */
    public function setProjectHandle($projectHandle)
    {
      $this->projectHandle = $projectHandle;
      return $this;
    }

    /**
     * @return ProjectGroupHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param ProjectGroupHandle $valueHandle
     * @return \Economic\Project_SetProjectGroup
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
