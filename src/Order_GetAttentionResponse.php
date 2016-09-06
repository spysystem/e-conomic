<?php

namespace Economic;

class Order_GetAttentionResponse
{

    /**
     * @var DebtorContactHandle $Order_GetAttentionResult
     */
    protected $Order_GetAttentionResult = null;

    /**
     * @param DebtorContactHandle $Order_GetAttentionResult
     */
    public function __construct($Order_GetAttentionResult)
    {
      $this->Order_GetAttentionResult = $Order_GetAttentionResult;
    }

    /**
     * @return DebtorContactHandle
     */
    public function getOrder_GetAttentionResult()
    {
      return $this->Order_GetAttentionResult;
    }

    /**
     * @param DebtorContactHandle $Order_GetAttentionResult
     * @return \Economic\Order_GetAttentionResponse
     */
    public function setOrder_GetAttentionResult($Order_GetAttentionResult)
    {
      $this->Order_GetAttentionResult = $Order_GetAttentionResult;
      return $this;
    }

}
