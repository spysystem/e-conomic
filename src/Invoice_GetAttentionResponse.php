<?php

namespace Economic;

class Invoice_GetAttentionResponse
{

    /**
     * @var DebtorContactHandle $Invoice_GetAttentionResult
     */
    protected $Invoice_GetAttentionResult = null;

    /**
     * @param DebtorContactHandle $Invoice_GetAttentionResult
     */
    public function __construct($Invoice_GetAttentionResult)
    {
      $this->Invoice_GetAttentionResult = $Invoice_GetAttentionResult;
    }

    /**
     * @return DebtorContactHandle
     */
    public function getInvoice_GetAttentionResult()
    {
      return $this->Invoice_GetAttentionResult;
    }

    /**
     * @param DebtorContactHandle $Invoice_GetAttentionResult
     * @return \Economic\Invoice_GetAttentionResponse
     */
    public function setInvoice_GetAttentionResult($Invoice_GetAttentionResult)
    {
      $this->Invoice_GetAttentionResult = $Invoice_GetAttentionResult;
      return $this;
    }

}
