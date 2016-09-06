<?php

namespace Economic;

class ProductPrice_CreateFromDataArray
{

    /**
     * @var ArrayOfProductPriceData $dataArray
     */
    protected $dataArray = null;

    /**
     * @param ArrayOfProductPriceData $dataArray
     */
    public function __construct($dataArray)
    {
      $this->dataArray = $dataArray;
    }

    /**
     * @return ArrayOfProductPriceData
     */
    public function getDataArray()
    {
      return $this->dataArray;
    }

    /**
     * @param ArrayOfProductPriceData $dataArray
     * @return \Economic\ProductPrice_CreateFromDataArray
     */
    public function setDataArray($dataArray)
    {
      $this->dataArray = $dataArray;
      return $this;
    }

}
