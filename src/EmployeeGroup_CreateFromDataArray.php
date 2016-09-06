<?php

namespace Economic;

class EmployeeGroup_CreateFromDataArray
{

    /**
     * @var ArrayOfEmployeeGroupData $dataArray
     */
    protected $dataArray = null;

    /**
     * @param ArrayOfEmployeeGroupData $dataArray
     */
    public function __construct($dataArray)
    {
      $this->dataArray = $dataArray;
    }

    /**
     * @return ArrayOfEmployeeGroupData
     */
    public function getDataArray()
    {
      return $this->dataArray;
    }

    /**
     * @param ArrayOfEmployeeGroupData $dataArray
     * @return \Economic\EmployeeGroup_CreateFromDataArray
     */
    public function setDataArray($dataArray)
    {
      $this->dataArray = $dataArray;
      return $this;
    }

}
