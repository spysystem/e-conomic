<?php

namespace Economic;

class Quotation_UpdateFromDataArray
{

    /**
     * @var ArrayOfQuotationData $dataArray
     */
    protected $dataArray = null;

    /**
     * @param ArrayOfQuotationData $dataArray
     */
    public function __construct($dataArray)
    {
      $this->dataArray = $dataArray;
    }

    /**
     * @return ArrayOfQuotationData
     */
    public function getDataArray()
    {
      return $this->dataArray;
    }

    /**
     * @param ArrayOfQuotationData $dataArray
     * @return \Economic\Quotation_UpdateFromDataArray
     */
    public function setDataArray($dataArray)
    {
      $this->dataArray = $dataArray;
      return $this;
    }

}
