<?php

namespace Economic;

class BankPaymentType_GetAllResponse
{

    /**
     * @var ArrayOfBankPaymentTypeHandle $BankPaymentType_GetAllResult
     */
    protected $BankPaymentType_GetAllResult = null;

    /**
     * @param ArrayOfBankPaymentTypeHandle $BankPaymentType_GetAllResult
     */
    public function __construct($BankPaymentType_GetAllResult)
    {
      $this->BankPaymentType_GetAllResult = $BankPaymentType_GetAllResult;
    }

    /**
     * @return ArrayOfBankPaymentTypeHandle
     */
    public function getBankPaymentType_GetAllResult()
    {
      return $this->BankPaymentType_GetAllResult;
    }

    /**
     * @param ArrayOfBankPaymentTypeHandle $BankPaymentType_GetAllResult
     * @return \Economic\BankPaymentType_GetAllResponse
     */
    public function setBankPaymentType_GetAllResult($BankPaymentType_GetAllResult)
    {
      $this->BankPaymentType_GetAllResult = $BankPaymentType_GetAllResult;
      return $this;
    }

}
