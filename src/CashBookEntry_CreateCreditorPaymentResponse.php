<?php

namespace Economic;

class CashBookEntry_CreateCreditorPaymentResponse
{

    /**
     * @var CashBookEntryHandle $CashBookEntry_CreateCreditorPaymentResult
     */
    protected $CashBookEntry_CreateCreditorPaymentResult = null;

    /**
     * @param CashBookEntryHandle $CashBookEntry_CreateCreditorPaymentResult
     */
    public function __construct($CashBookEntry_CreateCreditorPaymentResult)
    {
      $this->CashBookEntry_CreateCreditorPaymentResult = $CashBookEntry_CreateCreditorPaymentResult;
    }

    /**
     * @return CashBookEntryHandle
     */
    public function getCashBookEntry_CreateCreditorPaymentResult()
    {
      return $this->CashBookEntry_CreateCreditorPaymentResult;
    }

    /**
     * @param CashBookEntryHandle $CashBookEntry_CreateCreditorPaymentResult
     * @return \Economic\CashBookEntry_CreateCreditorPaymentResponse
     */
    public function setCashBookEntry_CreateCreditorPaymentResult($CashBookEntry_CreateCreditorPaymentResult)
    {
      $this->CashBookEntry_CreateCreditorPaymentResult = $CashBookEntry_CreateCreditorPaymentResult;
      return $this;
    }

}
