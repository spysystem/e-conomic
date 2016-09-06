<?php

namespace Economic;

class BankPaymentType_FindByNameResponse
{

    /**
     * @var ArrayOfBankPaymentTypeHandle $BankPaymentType_FindByNameResult
     */
    protected $BankPaymentType_FindByNameResult = null;

    /**
     * @param ArrayOfBankPaymentTypeHandle $BankPaymentType_FindByNameResult
     */
    public function __construct($BankPaymentType_FindByNameResult)
    {
      $this->BankPaymentType_FindByNameResult = $BankPaymentType_FindByNameResult;
    }

    /**
     * @return ArrayOfBankPaymentTypeHandle
     */
    public function getBankPaymentType_FindByNameResult()
    {
      return $this->BankPaymentType_FindByNameResult;
    }

    /**
     * @param ArrayOfBankPaymentTypeHandle $BankPaymentType_FindByNameResult
     * @return \Economic\BankPaymentType_FindByNameResponse
     */
    public function setBankPaymentType_FindByNameResult($BankPaymentType_FindByNameResult)
    {
      $this->BankPaymentType_FindByNameResult = $BankPaymentType_FindByNameResult;
      return $this;
    }

}
