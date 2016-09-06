<?php

namespace Economic;

class DebtorContact_GetIsToReceiveEmailCopyOfOrderResponse
{

    /**
     * @var boolean $DebtorContact_GetIsToReceiveEmailCopyOfOrderResult
     */
    protected $DebtorContact_GetIsToReceiveEmailCopyOfOrderResult = null;

    /**
     * @param boolean $DebtorContact_GetIsToReceiveEmailCopyOfOrderResult
     */
    public function __construct($DebtorContact_GetIsToReceiveEmailCopyOfOrderResult)
    {
      $this->DebtorContact_GetIsToReceiveEmailCopyOfOrderResult = $DebtorContact_GetIsToReceiveEmailCopyOfOrderResult;
    }

    /**
     * @return boolean
     */
    public function getDebtorContact_GetIsToReceiveEmailCopyOfOrderResult()
    {
      return $this->DebtorContact_GetIsToReceiveEmailCopyOfOrderResult;
    }

    /**
     * @param boolean $DebtorContact_GetIsToReceiveEmailCopyOfOrderResult
     * @return \Economic\DebtorContact_GetIsToReceiveEmailCopyOfOrderResponse
     */
    public function setDebtorContact_GetIsToReceiveEmailCopyOfOrderResult($DebtorContact_GetIsToReceiveEmailCopyOfOrderResult)
    {
      $this->DebtorContact_GetIsToReceiveEmailCopyOfOrderResult = $DebtorContact_GetIsToReceiveEmailCopyOfOrderResult;
      return $this;
    }

}
