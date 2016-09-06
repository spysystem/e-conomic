<?php

namespace Economic;

class OrderLine_CreateFromDataArray
{

    /**
     * @var ArrayOfOrderLineData $dataArray
     */
    protected $dataArray = null;

    /**
     * @param ArrayOfOrderLineData $dataArray
     */
    public function __construct($dataArray)
    {
      $this->dataArray = $dataArray;
    }

    /**
     * @return ArrayOfOrderLineData
     */
    public function getDataArray()
    {
      return $this->dataArray;
    }

    /**
     * @param ArrayOfOrderLineData $dataArray
     * @return \Economic\OrderLine_CreateFromDataArray
     */
    public function setDataArray($dataArray)
    {
      $this->dataArray = $dataArray;
      return $this;
    }

}
