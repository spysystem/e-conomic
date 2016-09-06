<?php

namespace Economic;

class SumInterval_CreateFromDataArray
{

    /**
     * @var ArrayOfSumIntervalData $dataArray
     */
    protected $dataArray = null;

    /**
     * @param ArrayOfSumIntervalData $dataArray
     */
    public function __construct($dataArray)
    {
      $this->dataArray = $dataArray;
    }

    /**
     * @return ArrayOfSumIntervalData
     */
    public function getDataArray()
    {
      return $this->dataArray;
    }

    /**
     * @param ArrayOfSumIntervalData $dataArray
     * @return \Economic\SumInterval_CreateFromDataArray
     */
    public function setDataArray($dataArray)
    {
      $this->dataArray = $dataArray;
      return $this;
    }

}
