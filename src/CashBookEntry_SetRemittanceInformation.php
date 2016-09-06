<?php

namespace Economic;

class CashBookEntry_SetRemittanceInformation
{

    /**
     * @var CashBookEntryHandle $cashBookEntryHandle
     */
    protected $cashBookEntryHandle = null;

    /**
     * @var BankPaymentTypeHandle $bankPaymentTypeHandle
     */
    protected $bankPaymentTypeHandle = null;

    /**
     * @var string $bankPaymentCreditorId
     */
    protected $bankPaymentCreditorId = null;

    /**
     * @var string $bankPaymentCreditorInvoiceId
     */
    protected $bankPaymentCreditorInvoiceId = null;

    /**
     * @param CashBookEntryHandle $cashBookEntryHandle
     * @param BankPaymentTypeHandle $bankPaymentTypeHandle
     * @param string $bankPaymentCreditorId
     * @param string $bankPaymentCreditorInvoiceId
     */
    public function __construct($cashBookEntryHandle, $bankPaymentTypeHandle, $bankPaymentCreditorId, $bankPaymentCreditorInvoiceId)
    {
      $this->cashBookEntryHandle = $cashBookEntryHandle;
      $this->bankPaymentTypeHandle = $bankPaymentTypeHandle;
      $this->bankPaymentCreditorId = $bankPaymentCreditorId;
      $this->bankPaymentCreditorInvoiceId = $bankPaymentCreditorInvoiceId;
    }

    /**
     * @return CashBookEntryHandle
     */
    public function getCashBookEntryHandle()
    {
      return $this->cashBookEntryHandle;
    }

    /**
     * @param CashBookEntryHandle $cashBookEntryHandle
     * @return \Economic\CashBookEntry_SetRemittanceInformation
     */
    public function setCashBookEntryHandle($cashBookEntryHandle)
    {
      $this->cashBookEntryHandle = $cashBookEntryHandle;
      return $this;
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
     * @return \Economic\CashBookEntry_SetRemittanceInformation
     */
    public function setBankPaymentTypeHandle($bankPaymentTypeHandle)
    {
      $this->bankPaymentTypeHandle = $bankPaymentTypeHandle;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankPaymentCreditorId()
    {
      return $this->bankPaymentCreditorId;
    }

    /**
     * @param string $bankPaymentCreditorId
     * @return \Economic\CashBookEntry_SetRemittanceInformation
     */
    public function setBankPaymentCreditorId($bankPaymentCreditorId)
    {
      $this->bankPaymentCreditorId = $bankPaymentCreditorId;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankPaymentCreditorInvoiceId()
    {
      return $this->bankPaymentCreditorInvoiceId;
    }

    /**
     * @param string $bankPaymentCreditorInvoiceId
     * @return \Economic\CashBookEntry_SetRemittanceInformation
     */
    public function setBankPaymentCreditorInvoiceId($bankPaymentCreditorInvoiceId)
    {
      $this->bankPaymentCreditorInvoiceId = $bankPaymentCreditorInvoiceId;
      return $this;
    }

}
