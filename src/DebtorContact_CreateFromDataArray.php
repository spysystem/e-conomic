<?php

namespace Economic;

class DebtorContact_CreateFromDataArray
{

    /**
     * @var ArrayOfDebtorContactData $dataArray
     */
    protected $dataArray = null;

    /**
     * @param ArrayOfDebtorContactData $dataArray
     */
    public function __construct($dataArray)
    {
      $this->dataArray = $dataArray;
    }

    /**
     * @return ArrayOfDebtorContactData
     */
    public function getDataArray()
    {
      return $this->dataArray;
    }

    /**
     * @param ArrayOfDebtorContactData $dataArray
     * @return \Economic\DebtorContact_CreateFromDataArray
     */
    public function setDataArray($dataArray)
    {
      $this->dataArray = $dataArray;
      return $this;
    }

}
