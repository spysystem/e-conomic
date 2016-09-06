<?php

namespace Economic;

class MileageEntry_CreateFromDataArray
{

    /**
     * @var ArrayOfMileageEntryData $dataArray
     */
    protected $dataArray = null;

    /**
     * @param ArrayOfMileageEntryData $dataArray
     */
    public function __construct($dataArray)
    {
      $this->dataArray = $dataArray;
    }

    /**
     * @return ArrayOfMileageEntryData
     */
    public function getDataArray()
    {
      return $this->dataArray;
    }

    /**
     * @param ArrayOfMileageEntryData $dataArray
     * @return \Economic\MileageEntry_CreateFromDataArray
     */
    public function setDataArray($dataArray)
    {
      $this->dataArray = $dataArray;
      return $this;
    }

}
