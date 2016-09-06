<?php

namespace Economic;

class BankPaymentType_GetDataArrayResponse
{

    /**
     * @var ArrayOfBankPaymentTypeData $BankPaymentType_GetDataArrayResult
     */
    protected $BankPaymentType_GetDataArrayResult = null;

    /**
     * @param ArrayOfBankPaymentTypeData $BankPaymentType_GetDataArrayResult
     */
    public function __construct($BankPaymentType_GetDataArrayResult)
    {
      $this->BankPaymentType_GetDataArrayResult = $BankPaymentType_GetDataArrayResult;
    }

    /**
     * @return ArrayOfBankPaymentTypeData
     */
    public function getBankPaymentType_GetDataArrayResult()
    {
      return $this->BankPaymentType_GetDataArrayResult;
    }

    /**
     * @param ArrayOfBankPaymentTypeData $BankPaymentType_GetDataArrayResult
     * @return \Economic\BankPaymentType_GetDataArrayResponse
     */
    public function setBankPaymentType_GetDataArrayResult($BankPaymentType_GetDataArrayResult)
    {
      $this->BankPaymentType_GetDataArrayResult = $BankPaymentType_GetDataArrayResult;
      return $this;
    }

}
