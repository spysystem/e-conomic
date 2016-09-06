<?php

namespace Economic;

class Unit_CreateFromDataArray
{

    /**
     * @var ArrayOfUnitData $dataArray
     */
    protected $dataArray = null;

    /**
     * @param ArrayOfUnitData $dataArray
     */
    public function __construct($dataArray)
    {
      $this->dataArray = $dataArray;
    }

    /**
     * @return ArrayOfUnitData
     */
    public function getDataArray()
    {
      return $this->dataArray;
    }

    /**
     * @param ArrayOfUnitData $dataArray
     * @return \Economic\Unit_CreateFromDataArray
     */
    public function setDataArray($dataArray)
    {
      $this->dataArray = $dataArray;
      return $this;
    }

}
