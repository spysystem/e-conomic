<?php

namespace Economic;

class Project_SetResponsible
{

    /**
     * @var ProjectHandle $projectHandle
     */
    protected $projectHandle = null;

    /**
     * @var EmployeeHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param ProjectHandle $projectHandle
     * @param EmployeeHandle $valueHandle
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
     * @return \Economic\Project_SetResponsible
     */
    public function setProjectHandle($projectHandle)
    {
      $this->projectHandle = $projectHandle;
      return $this;
    }

    /**
     * @return EmployeeHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param EmployeeHandle $valueHandle
     * @return \Economic\Project_SetResponsible
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
