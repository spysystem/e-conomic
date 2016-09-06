<?php

namespace Economic;

class CashBookEntry_CreateFromDataArray
{

    /**
     * @var ArrayOfCashBookEntryData $dataArray
     */
    protected $dataArray = null;

    /**
     * @param ArrayOfCashBookEntryData $dataArray
     */
    public function __construct($dataArray)
    {
      $this->dataArray = $dataArray;
    }

    /**
     * @return ArrayOfCashBookEntryData
     */
    public function getDataArray()
    {
      return $this->dataArray;
    }

    /**
     * @param ArrayOfCashBookEntryData $dataArray
     * @return \Economic\CashBookEntry_CreateFromDataArray
     */
    public function setDataArray($dataArray)
    {
      $this->dataArray = $dataArray;
      return $this;
    }

}
