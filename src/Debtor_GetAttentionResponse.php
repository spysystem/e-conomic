<?php

namespace Economic;

class Debtor_GetAttentionResponse
{

    /**
     * @var DebtorContactHandle $Debtor_GetAttentionResult
     */
    protected $Debtor_GetAttentionResult = null;

    /**
     * @param DebtorContactHandle $Debtor_GetAttentionResult
     */
    public function __construct($Debtor_GetAttentionResult)
    {
      $this->Debtor_GetAttentionResult = $Debtor_GetAttentionResult;
    }

    /**
     * @return DebtorContactHandle
     */
    public function getDebtor_GetAttentionResult()
    {
      return $this->Debtor_GetAttentionResult;
    }

    /**
     * @param DebtorContactHandle $Debtor_GetAttentionResult
     * @return \Economic\Debtor_GetAttentionResponse
     */
    public function setDebtor_GetAttentionResult($Debtor_GetAttentionResult)
    {
      $this->Debtor_GetAttentionResult = $Debtor_GetAttentionResult;
      return $this;
    }

}
