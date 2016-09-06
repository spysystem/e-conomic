<?php

namespace Economic;

class AccountingYear_CreateFromDataArray
{

    /**
     * @var ArrayOfAccountingYearData $dataArray
     */
    protected $dataArray = null;

    /**
     * @param ArrayOfAccountingYearData $dataArray
     */
    public function __construct($dataArray)
    {
      $this->dataArray = $dataArray;
    }

    /**
     * @return ArrayOfAccountingYearData
     */
    public function getDataArray()
    {
      return $this->dataArray;
    }

    /**
     * @param ArrayOfAccountingYearData $dataArray
     * @return \Economic\AccountingYear_CreateFromDataArray
     */
    public function setDataArray($dataArray)
    {
      $this->dataArray = $dataArray;
      return $this;
    }

}
