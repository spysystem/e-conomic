<?php

namespace Economic;

class DebtorContact_GetIsToReceiveEmailCopyOfInvoiceResponse
{

    /**
     * @var boolean $DebtorContact_GetIsToReceiveEmailCopyOfInvoiceResult
     */
    protected $DebtorContact_GetIsToReceiveEmailCopyOfInvoiceResult = null;

    /**
     * @param boolean $DebtorContact_GetIsToReceiveEmailCopyOfInvoiceResult
     */
    public function __construct($DebtorContact_GetIsToReceiveEmailCopyOfInvoiceResult)
    {
      $this->DebtorContact_GetIsToReceiveEmailCopyOfInvoiceResult = $DebtorContact_GetIsToReceiveEmailCopyOfInvoiceResult;
    }

    /**
     * @return boolean
     */
    public function getDebtorContact_GetIsToReceiveEmailCopyOfInvoiceResult()
    {
      return $this->DebtorContact_GetIsToReceiveEmailCopyOfInvoiceResult;
    }

    /**
     * @param boolean $DebtorContact_GetIsToReceiveEmailCopyOfInvoiceResult
     * @return \Economic\DebtorContact_GetIsToReceiveEmailCopyOfInvoiceResponse
     */
    public function setDebtorContact_GetIsToReceiveEmailCopyOfInvoiceResult($DebtorContact_GetIsToReceiveEmailCopyOfInvoiceResult)
    {
      $this->DebtorContact_GetIsToReceiveEmailCopyOfInvoiceResult = $DebtorContact_GetIsToReceiveEmailCopyOfInvoiceResult;
      return $this;
    }

}
