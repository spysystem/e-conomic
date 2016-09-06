<?php

namespace Economic;

class QuotationLine_UpdateFromDataArray
{

    /**
     * @var ArrayOfQuotationLineData $dataArray
     */
    protected $dataArray = null;

    /**
     * @param ArrayOfQuotationLineData $dataArray
     */
    public function __construct($dataArray)
    {
      $this->dataArray = $dataArray;
    }

    /**
     * @return ArrayOfQuotationLineData
     */
    public function getDataArray()
    {
      return $this->dataArray;
    }

    /**
     * @param ArrayOfQuotationLineData $dataArray
     * @return \Economic\QuotationLine_UpdateFromDataArray
     */
    public function setDataArray($dataArray)
    {
      $this->dataArray = $dataArray;
      return $this;
    }

}
