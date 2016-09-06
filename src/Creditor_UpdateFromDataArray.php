<?php

namespace Economic;

class Creditor_UpdateFromDataArray
{

    /**
     * @var ArrayOfCreditorData $dataArray
     */
    protected $dataArray = null;

    /**
     * @param ArrayOfCreditorData $dataArray
     */
    public function __construct($dataArray)
    {
      $this->dataArray = $dataArray;
    }

    /**
     * @return ArrayOfCreditorData
     */
    public function getDataArray()
    {
      return $this->dataArray;
    }

    /**
     * @param ArrayOfCreditorData $dataArray
     * @return \Economic\Creditor_UpdateFromDataArray
     */
    public function setDataArray($dataArray)
    {
      $this->dataArray = $dataArray;
      return $this;
    }

}
