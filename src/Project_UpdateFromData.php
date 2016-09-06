<?php

namespace Economic;

class Project_UpdateFromData
{

    /**
     * @var ProjectData $data
     */
    protected $data = null;

    /**
     * @param ProjectData $data
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * @return ProjectData
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param ProjectData $data
     * @return \Economic\Project_UpdateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
