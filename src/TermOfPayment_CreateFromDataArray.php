<?php

namespace Economic;

class TermOfPayment_CreateFromDataArray
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
     * @return \Economic\TermOfPayment_CreateFromDataArray
     */
    public function setDataArray($dataArray)
    {
      $this->dataArray = $dataArray;
      return $this;
    }

}
