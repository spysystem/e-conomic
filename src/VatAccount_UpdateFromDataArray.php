<?php

namespace Economic;

class VatAccount_UpdateFromDataArray
{

    /**
     * @var ArrayOfVatAccountData $dataArray
     */
    protected $dataArray = null;

    /**
     * @param ArrayOfVatAccountData $dataArray
     */
    public function __construct($dataArray)
    {
      $this->dataArray = $dataArray;
    }

    /**
     * @return ArrayOfVatAccountData
     */
    public function getDataArray()
    {
      return $this->dataArray;
    }

    /**
     * @param ArrayOfVatAccountData $dataArray
     * @return \Economic\VatAccount_UpdateFromDataArray
     */
    public function setDataArray($dataArray)
    {
      $this->dataArray = $dataArray;
      return $this;
    }

}
