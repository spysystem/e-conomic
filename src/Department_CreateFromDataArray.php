<?php

namespace Economic;

class Department_CreateFromDataArray
{

    /**
     * @var ArrayOfDepartmentData $dataArray
     */
    protected $dataArray = null;

    /**
     * @param ArrayOfDepartmentData $dataArray
     */
    public function __construct($dataArray)
    {
      $this->dataArray = $dataArray;
    }

    /**
     * @return ArrayOfDepartmentData
     */
    public function getDataArray()
    {
      return $this->dataArray;
    }

    /**
     * @param ArrayOfDepartmentData $dataArray
     * @return \Economic\Department_CreateFromDataArray
     */
    public function setDataArray($dataArray)
    {
      $this->dataArray = $dataArray;
      return $this;
    }

}
