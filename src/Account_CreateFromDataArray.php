<?php

namespace Economic;

class Account_CreateFromDataArray
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
     * @return \Economic\Account_CreateFromDataArray
     */
    public function setDataArray($dataArray)
    {
      $this->dataArray = $dataArray;
      return $this;
    }

}
