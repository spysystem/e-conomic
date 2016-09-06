<?php

namespace Economic;

class Debtor_CreateFromDataArray
{

    /**
     * @var ArrayOfDebtorData $dataArray
     */
    protected $dataArray = null;

    /**
     * @param ArrayOfDebtorData $dataArray
     */
    public function __construct($dataArray)
    {
      $this->dataArray = $dataArray;
    }

    /**
     * @return ArrayOfDebtorData
     */
    public function getDataArray()
    {
      return $this->dataArray;
    }

    /**
     * @param ArrayOfDebtorData $dataArray
     * @return \Economic\Debtor_CreateFromDataArray
     */
    public function setDataArray($dataArray)
    {
      $this->dataArray = $dataArray;
      return $this;
    }

}
