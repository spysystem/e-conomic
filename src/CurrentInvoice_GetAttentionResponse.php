<?php

namespace Economic;

class CurrentInvoice_GetAttentionResponse
{

    /**
     * @var DebtorContactHandle $CurrentInvoice_GetAttentionResult
     */
    protected $CurrentInvoice_GetAttentionResult = null;

    /**
     * @param DebtorContactHandle $CurrentInvoice_GetAttentionResult
     */
    public function __construct($CurrentInvoice_GetAttentionResult)
    {
      $this->CurrentInvoice_GetAttentionResult = $CurrentInvoice_GetAttentionResult;
    }

    /**
     * @return DebtorContactHandle
     */
    public function getCurrentInvoice_GetAttentionResult()
    {
      return $this->CurrentInvoice_GetAttentionResult;
    }

    /**
     * @param DebtorContactHandle $CurrentInvoice_GetAttentionResult
     * @return \Economic\CurrentInvoice_GetAttentionResponse
     */
    public function setCurrentInvoice_GetAttentionResult($CurrentInvoice_GetAttentionResult)
    {
      $this->CurrentInvoice_GetAttentionResult = $CurrentInvoice_GetAttentionResult;
      return $this;
    }

}
