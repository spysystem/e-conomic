<?php

namespace Economic;

class DeliveryLocation_UpdateFromDataArray
{

    /**
     * @var ArrayOfDeliveryLocationData $dataArray
     */
    protected $dataArray = null;

    /**
     * @param ArrayOfDeliveryLocationData $dataArray
     */
    public function __construct($dataArray)
    {
      $this->dataArray = $dataArray;
    }

    /**
     * @return ArrayOfDeliveryLocationData
     */
    public function getDataArray()
    {
      return $this->dataArray;
    }

    /**
     * @param ArrayOfDeliveryLocationData $dataArray
     * @return \Economic\DeliveryLocation_UpdateFromDataArray
     */
    public function setDataArray($dataArray)
    {
      $this->dataArray = $dataArray;
      return $this;
    }

}
