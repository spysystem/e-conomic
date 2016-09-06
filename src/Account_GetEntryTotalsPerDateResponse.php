<?php

namespace Economic;

class Account_GetEntryTotalsPerDateResponse
{

    /**
     * @var ArrayOfAccountSumTotal $Account_GetEntryTotalsPerDateResult
     */
    protected $Account_GetEntryTotalsPerDateResult = null;

    /**
     * @param ArrayOfAccountSumTotal $Account_GetEntryTotalsPerDateResult
     */
    public function __construct($Account_GetEntryTotalsPerDateResult)
    {
      $this->Account_GetEntryTotalsPerDateResult = $Account_GetEntryTotalsPerDateResult;
    }

    /**
     * @return ArrayOfAccountSumTotal
     */
    public function getAccount_GetEntryTotalsPerDateResult()
    {
      return $this->Account_GetEntryTotalsPerDateResult;
    }

    /**
     * @param ArrayOfAccountSumTotal $Account_GetEntryTotalsPerDateResult
     * @return \Economic\Account_GetEntryTotalsPerDateResponse
     */
    public function setAccount_GetEntryTotalsPerDateResult($Account_GetEntryTotalsPerDateResult)
    {
      $this->Account_GetEntryTotalsPerDateResult = $Account_GetEntryTotalsPerDateResult;
      return $this;
    }

}
