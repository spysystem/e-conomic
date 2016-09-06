<?php

namespace Economic;

class Project_CreateFromDataArray
{

    /**
     * @var ArrayOfProjectData $dataArray
     */
    protected $dataArray = null;

    /**
     * @param ArrayOfProjectData $dataArray
     */
    public function __construct($dataArray)
    {
      $this->dataArray = $dataArray;
    }

    /**
     * @return ArrayOfProjectData
     */
    public function getDataArray()
    {
      return $this->dataArray;
    }

    /**
     * @param ArrayOfProjectData $dataArray
     * @return \Economic\Project_CreateFromDataArray
     */
    public function setDataArray($dataArray)
    {
      $this->dataArray = $dataArray;
      return $this;
    }

}
