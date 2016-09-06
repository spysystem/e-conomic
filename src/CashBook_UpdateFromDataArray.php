<?php

namespace Economic;

class CashBook_UpdateFromDataArray
{

    /**
     * @var ArrayOfCashBookData $dataArray
     */
    protected $dataArray = null;

    /**
     * @param ArrayOfCashBookData $dataArray
     */
    public function __construct($dataArray)
    {
      $this->dataArray = $dataArray;
    }

    /**
     * @return ArrayOfCashBookData
     */
    public function getDataArray()
    {
      return $this->dataArray;
    }

    /**
     * @param ArrayOfCashBookData $dataArray
     * @return \Economic\CashBook_UpdateFromDataArray
     */
    public function setDataArray($dataArray)
    {
      $this->dataArray = $dataArray;
      return $this;
    }

}
