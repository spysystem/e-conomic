<?php

namespace Economic;

class Account_UpdateFromDataArray
{

    /**
     * @var ArrayOfAccountData $dataArray
     */
    protected $dataArray = null;

    /**
     * @param ArrayOfAccountData $dataArray
     */
    public function __construct($dataArray)
    {
      $this->dataArray = $dataArray;
    }

    /**
     * @return ArrayOfAccountData
     */
    public function getDataArray()
    {
      return $this->dataArray;
    }

    /**
     * @param ArrayOfAccountData $dataArray
     * @return \Economic\Account_UpdateFromDataArray
     */
    public function setDataArray($dataArray)
    {
      $this->dataArray = $dataArray;
      return $this;
    }

}
