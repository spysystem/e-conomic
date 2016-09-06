<?php

namespace Economic;

class DistributionKey_UpdateFromDataArray
{

    /**
     * @var ArrayOfDistributionKeyData $dataArray
     */
    protected $dataArray = null;

    /**
     * @param ArrayOfDistributionKeyData $dataArray
     */
    public function __construct($dataArray)
    {
      $this->dataArray = $dataArray;
    }

    /**
     * @return ArrayOfDistributionKeyData
     */
    public function getDataArray()
    {
      return $this->dataArray;
    }

    /**
     * @param ArrayOfDistributionKeyData $dataArray
     * @return \Economic\DistributionKey_UpdateFromDataArray
     */
    public function setDataArray($dataArray)
    {
      $this->dataArray = $dataArray;
      return $this;
    }

}
