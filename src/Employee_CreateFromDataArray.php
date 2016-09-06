<?php

namespace Economic;

class Employee_CreateFromDataArray
{

    /**
     * @var ArrayOfEmployeeData $dataArray
     */
    protected $dataArray = null;

    /**
     * @param ArrayOfEmployeeData $dataArray
     */
    public function __construct($dataArray)
    {
      $this->dataArray = $dataArray;
    }

    /**
     * @return ArrayOfEmployeeData
     */
    public function getDataArray()
    {
      return $this->dataArray;
    }

    /**
     * @param ArrayOfEmployeeData $dataArray
     * @return \Economic\Employee_CreateFromDataArray
     */
    public function setDataArray($dataArray)
    {
      $this->dataArray = $dataArray;
      return $this;
    }

}
