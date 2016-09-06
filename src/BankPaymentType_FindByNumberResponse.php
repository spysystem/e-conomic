<?php

namespace Economic;

class BankPaymentType_FindByNumberResponse
{

    /**
     * @var BankPaymentTypeHandle $BankPaymentType_FindByNumberResult
     */
    protected $BankPaymentType_FindByNumberResult = null;

    /**
     * @param BankPaymentTypeHandle $BankPaymentType_FindByNumberResult
     */
    public function __construct($BankPaymentType_FindByNumberResult)
    {
      $this->BankPaymentType_FindByNumberResult = $BankPaymentType_FindByNumberResult;
    }

    /**
     * @return BankPaymentTypeHandle
     */
    public function getBankPaymentType_FindByNumberResult()
    {
      return $this->BankPaymentType_FindByNumberResult;
    }

    /**
     * @param BankPaymentTypeHandle $BankPaymentType_FindByNumberResult
     * @return \Economic\BankPaymentType_FindByNumberResponse
     */
    public function setBankPaymentType_FindByNumberResult($BankPaymentType_FindByNumberResult)
    {
      $this->BankPaymentType_FindByNumberResult = $BankPaymentType_FindByNumberResult;
      return $this;
    }

}
