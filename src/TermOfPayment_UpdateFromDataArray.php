<?php

namespace Economic;

class TermOfPayment_UpdateFromDataArray
{

    /**
     * @var ArrayOfTermOfPaymentData $dataArray
     */
    protected $dataArray = null;

    /**
     * @param ArrayOfTermOfPaymentData $dataArray
     */
    public function __construct($dataArray)
    {
      $this->dataArray = $dataArray;
    }

    /**
     * @return ArrayOfTermOfPaymentData
     */
    public function getDataArray()
    {
      return $this->dataArray;
    }

    /**
     * @param ArrayOfTermOfPaymentData $dataArray
     * @return \Economic\TermOfPayment_UpdateFromDataArray
     */
    public function setDataArray($dataArray)
    {
      $this->dataArray = $dataArray;
      return $this;
    }

}
