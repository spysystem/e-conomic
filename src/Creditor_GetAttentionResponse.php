<?php

namespace Economic;

class Creditor_GetAttentionResponse
{

    /**
     * @var CreditorContactHandle $Creditor_GetAttentionResult
     */
    protected $Creditor_GetAttentionResult = null;

    /**
     * @param CreditorContactHandle $Creditor_GetAttentionResult
     */
    public function __construct($Creditor_GetAttentionResult)
    {
      $this->Creditor_GetAttentionResult = $Creditor_GetAttentionResult;
    }

    /**
     * @return CreditorContactHandle
     */
    public function getCreditor_GetAttentionResult()
    {
      return $this->Creditor_GetAttentionResult;
    }

    /**
     * @param CreditorContactHandle $Creditor_GetAttentionResult
     * @return \Economic\Creditor_GetAttentionResponse
     */
    public function setCreditor_GetAttentionResult($Creditor_GetAttentionResult)
    {
      $this->Creditor_GetAttentionResult = $Creditor_GetAttentionResult;
      return $this;
    }

}
