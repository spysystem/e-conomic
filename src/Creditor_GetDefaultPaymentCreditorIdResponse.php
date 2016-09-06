<?php

namespace Economic;

class Creditor_GetDefaultPaymentCreditorIdResponse
{

    /**
     * @var string $Creditor_GetDefaultPaymentCreditorIdResult
     */
    protected $Creditor_GetDefaultPaymentCreditorIdResult = null;

    /**
     * @param string $Creditor_GetDefaultPaymentCreditorIdResult
     */
    public function __construct($Creditor_GetDefaultPaymentCreditorIdResult)
    {
      $this->Creditor_GetDefaultPaymentCreditorIdResult = $Creditor_GetDefaultPaymentCreditorIdResult;
    }

    /**
     * @return string
     */
    public function getCreditor_GetDefaultPaymentCreditorIdResult()
    {
      return $this->Creditor_GetDefaultPaymentCreditorIdResult;
    }

    /**
     * @param string $Creditor_GetDefaultPaymentCreditorIdResult
     * @return \Economic\Creditor_GetDefaultPaymentCreditorIdResponse
     */
    public function setCreditor_GetDefaultPaymentCreditorIdResult($Creditor_GetDefaultPaymentCreditorIdResult)
    {
      $this->Creditor_GetDefaultPaymentCreditorIdResult = $Creditor_GetDefaultPaymentCreditorIdResult;
      return $this;
    }

}
