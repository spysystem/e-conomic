<?php

namespace Economic;

class ProductGroup_UpdateFromDataArray
{

    /**
     * @var ArrayOfProductGroupData $dataArray
     */
    protected $dataArray = null;

    /**
     * @param ArrayOfProductGroupData $dataArray
     */
    public function __construct($dataArray)
    {
      $this->dataArray = $dataArray;
    }

    /**
     * @return ArrayOfProductGroupData
     */
    public function getDataArray()
    {
      return $this->dataArray;
    }

    /**
     * @param ArrayOfProductGroupData $dataArray
     * @return \Economic\ProductGroup_UpdateFromDataArray
     */
    public function setDataArray($dataArray)
    {
      $this->dataArray = $dataArray;
      return $this;
    }

}
