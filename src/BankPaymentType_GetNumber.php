<?php

namespace Economic;

class BankPaymentType_GetNumber
{

    /**
     * @var BankPaymentTypeHandle $bankPaymentTypeHandle
     */
    protected $bankPaymentTypeHandle = null;

    /**
     * @param BankPaymentTypeHandle $bankPaymentTypeHandle
     */
    public function __construct($bankPaymentTypeHandle)
    {
      $this->bankPaymentTypeHandle = $bankPaymentTypeHandle;
    }

    /**
     * @return BankPaymentTypeHandle
     */
    public function getBankPaymentTypeHandle()
    {
      return $this->bankPaymentTypeHandle;
    }

    /**
     * @param BankPaymentTypeHandle $bankPaymentTypeHandle
     * @return \Economic\BankPaymentType_GetNumber
     */
    public function setBankPaymentTypeHandle($bankPaymentTypeHandle)
    {
      $this->bankPaymentTypeHandle = $bankPaymentTypeHandle;
      return $this;
    }

}
