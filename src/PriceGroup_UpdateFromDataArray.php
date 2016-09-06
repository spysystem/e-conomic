<?php

namespace Economic;

class PriceGroup_UpdateFromDataArray
{

    /**
     * @var ArrayOfPriceGroupData $dataArray
     */
    protected $dataArray = null;

    /**
     * @param ArrayOfPriceGroupData $dataArray
     */
    public function __construct($dataArray)
    {
      $this->dataArray = $dataArray;
    }

    /**
     * @return ArrayOfPriceGroupData
     */
    public function getDataArray()
    {
      return $this->dataArray;
    }

    /**
     * @param ArrayOfPriceGroupData $dataArray
     * @return \Economic\PriceGroup_UpdateFromDataArray
     */
    public function setDataArray($dataArray)
    {
      $this->dataArray = $dataArray;
      return $this;
    }

}
