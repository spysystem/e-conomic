<?php

namespace Economic;

class Project_SetDebtor
{

    /**
     * @var ProjectHandle $projectHandle
     */
    protected $projectHandle = null;

    /**
     * @var DebtorHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param ProjectHandle $projectHandle
     * @param DebtorHandle $valueHandle
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
     * @return \Economic\Project_SetDebtor
     */
    public function setProjectHandle($projectHandle)
    {
      $this->projectHandle = $projectHandle;
      return $this;
    }

    /**
     * @return DebtorHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param DebtorHandle $valueHandle
     * @return \Economic\Project_SetDebtor
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
