<?php

namespace Economic;

class Quotation_GetAttentionResponse
{

    /**
     * @var DebtorContactHandle $Quotation_GetAttentionResult
     */
    protected $Quotation_GetAttentionResult = null;

    /**
     * @param DebtorContactHandle $Quotation_GetAttentionResult
     */
    public function __construct($Quotation_GetAttentionResult)
    {
      $this->Quotation_GetAttentionResult = $Quotation_GetAttentionResult;
    }

    /**
     * @return DebtorContactHandle
     */
    public function getQuotation_GetAttentionResult()
    {
      return $this->Quotation_GetAttentionResult;
    }

    /**
     * @param DebtorContactHandle $Quotation_GetAttentionResult
     * @return \Economic\Quotation_GetAttentionResponse
     */
    public function setQuotation_GetAttentionResult($Quotation_GetAttentionResult)
    {
      $this->Quotation_GetAttentionResult = $Quotation_GetAttentionResult;
      return $this;
    }

}
