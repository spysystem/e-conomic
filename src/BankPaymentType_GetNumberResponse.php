<?php

namespace Economic;

class BankPaymentType_GetNumberResponse
{

    /**
     * @var string $BankPaymentType_GetNumberResult
     */
    protected $BankPaymentType_GetNumberResult = null;

    /**
     * @param string $BankPaymentType_GetNumberResult
     */
    public function __construct($BankPaymentType_GetNumberResult)
    {
      $this->BankPaymentType_GetNumberResult = $BankPaymentType_GetNumberResult;
    }

    /**
     * @return string
     */
    public function getBankPaymentType_GetNumberResult()
    {
      return $this->BankPaymentType_GetNumberResult;
    }

    /**
     * @param string $BankPaymentType_GetNumberResult
     * @return \Economic\BankPaymentType_GetNumberResponse
     */
    public function setBankPaymentType_GetNumberResult($BankPaymentType_GetNumberResult)
    {
      $this->BankPaymentType_GetNumberResult = $BankPaymentType_GetNumberResult;
      return $this;
    }

}
