<?php

namespace Economic;

class BankPaymentType_GetNameResponse
{

    /**
     * @var string $BankPaymentType_GetNameResult
     */
    protected $BankPaymentType_GetNameResult = null;

    /**
     * @param string $BankPaymentType_GetNameResult
     */
    public function __construct($BankPaymentType_GetNameResult)
    {
      $this->BankPaymentType_GetNameResult = $BankPaymentType_GetNameResult;
    }

    /**
     * @return string
     */
    public function getBankPaymentType_GetNameResult()
    {
      return $this->BankPaymentType_GetNameResult;
    }

    /**
     * @param string $BankPaymentType_GetNameResult
     * @return \Economic\BankPaymentType_GetNameResponse
     */
    public function setBankPaymentType_GetNameResult($BankPaymentType_GetNameResult)
    {
      $this->BankPaymentType_GetNameResult = $BankPaymentType_GetNameResult;
      return $this;
    }

}
