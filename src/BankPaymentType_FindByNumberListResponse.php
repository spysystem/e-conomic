<?php

namespace Economic;

class BankPaymentType_FindByNumberListResponse
{

    /**
     * @var ArrayOfBankPaymentTypeHandle $BankPaymentType_FindByNumberListResult
     */
    protected $BankPaymentType_FindByNumberListResult = null;

    /**
     * @param ArrayOfBankPaymentTypeHandle $BankPaymentType_FindByNumberListResult
     */
    public function __construct($BankPaymentType_FindByNumberListResult)
    {
      $this->BankPaymentType_FindByNumberListResult = $BankPaymentType_FindByNumberListResult;
    }

    /**
     * @return ArrayOfBankPaymentTypeHandle
     */
    public function getBankPaymentType_FindByNumberListResult()
    {
      return $this->BankPaymentType_FindByNumberListResult;
    }

    /**
     * @param ArrayOfBankPaymentTypeHandle $BankPaymentType_FindByNumberListResult
     * @return \Economic\BankPaymentType_FindByNumberListResponse
     */
    public function setBankPaymentType_FindByNumberListResult($BankPaymentType_FindByNumberListResult)
    {
      $this->BankPaymentType_FindByNumberListResult = $BankPaymentType_FindByNumberListResult;
      return $this;
    }

}
