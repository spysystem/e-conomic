<?php

namespace Economic;

class Company_UpdateFromDataArray
{

    /**
     * @var ArrayOfCompanyData $dataArray
     */
    protected $dataArray = null;

    /**
     * @param ArrayOfCompanyData $dataArray
     */
    public function __construct($dataArray)
    {
      $this->dataArray = $dataArray;
    }

    /**
     * @return ArrayOfCompanyData
     */
    public function getDataArray()
    {
      return $this->dataArray;
    }

    /**
     * @param ArrayOfCompanyData $dataArray
     * @return \Economic\Company_UpdateFromDataArray
     */
    public function setDataArray($dataArray)
    {
      $this->dataArray = $dataArray;
      return $this;
    }

}
