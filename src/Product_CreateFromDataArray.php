<?php

namespace Economic;

class Product_CreateFromDataArray
{

    /**
     * @var ArrayOfProductData $dataArray
     */
    protected $dataArray = null;

    /**
     * @param ArrayOfProductData $dataArray
     */
    public function __construct($dataArray)
    {
      $this->dataArray = $dataArray;
    }

    /**
     * @return ArrayOfProductData
     */
    public function getDataArray()
    {
      return $this->dataArray;
    }

    /**
     * @param ArrayOfProductData $dataArray
     * @return \Economic\Product_CreateFromDataArray
     */
    public function setDataArray($dataArray)
    {
      $this->dataArray = $dataArray;
      return $this;
    }

}
