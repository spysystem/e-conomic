<?php

namespace Economic;

class Order_CreateFromDataArray
{

    /**
     * @var ArrayOfOrderData $dataArray
     */
    protected $dataArray = null;

    /**
     * @param ArrayOfOrderData $dataArray
     */
    public function __construct($dataArray)
    {
      $this->dataArray = $dataArray;
    }

    /**
     * @return ArrayOfOrderData
     */
    public function getDataArray()
    {
      return $this->dataArray;
    }

    /**
     * @param ArrayOfOrderData $dataArray
     * @return \Economic\Order_CreateFromDataArray
     */
    public function setDataArray($dataArray)
    {
      $this->dataArray = $dataArray;
      return $this;
    }

}
