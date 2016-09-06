<?php

namespace Economic;

class Project_GetOpenSubProjects
{

    /**
     * @var ProjectHandle $mainProjectHandle
     */
    protected $mainProjectHandle = null;

    /**
     * @param ProjectHandle $mainProjectHandle
     */
    public function __construct($mainProjectHandle)
    {
      $this->mainProjectHandle = $mainProjectHandle;
    }

    /**
     * @return ProjectHandle
     */
    public function getMainProjectHandle()
    {
      return $this->mainProjectHandle;
    }

    /**
     * @param ProjectHandle $mainProjectHandle
     * @return \Economic\Project_GetOpenSubProjects
     */
    public function setMainProjectHandle($mainProjectHandle)
    {
      $this->mainProjectHandle = $mainProjectHandle;
      return $this;
    }

}
