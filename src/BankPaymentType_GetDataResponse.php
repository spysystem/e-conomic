<?php

namespace Economic;

class BankPaymentType_GetDataResponse
{

    /**
     * @var BankPaymentTypeData $BankPaymentType_GetDataResult
     */
    protected $BankPaymentType_GetDataResult = null;

    /**
     * @param BankPaymentTypeData $BankPaymentType_GetDataResult
     */
    public function __construct($BankPaymentType_GetDataResult)
    {
      $this->BankPaymentType_GetDataResult = $BankPaymentType_GetDataResult;
    }

    /**
     * @return BankPaymentTypeData
     */
    public function getBankPaymentType_GetDataResult()
    {
      return $this->BankPaymentType_GetDataResult;
    }

    /**
     * @param BankPaymentTypeData $BankPaymentType_GetDataResult
     * @return \Economic\BankPaymentType_GetDataResponse
     */
    public function setBankPaymentType_GetDataResult($BankPaymentType_GetDataResult)
    {
      $this->BankPaymentType_GetDataResult = $BankPaymentType_GetDataResult;
      return $this;
    }

}
