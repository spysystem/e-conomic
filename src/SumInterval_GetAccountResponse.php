<?php

namespace Economic;

class SumInterval_GetAccountResponse
{

    /**
     * @var AccountHandle $SumInterval_GetAccountResult
     */
    protected $SumInterval_GetAccountResult = null;

    /**
     * @param AccountHandle $SumInterval_GetAccountResult
     */
    public function __construct($SumInterval_GetAccountResult)
    {
      $this->SumInterval_GetAccountResult = $SumInterval_GetAccountResult;
    }

    /**
     * @return AccountHandle
     */
    public function getSumInterval_GetAccountResult()
    {
      return $this->SumInterval_GetAccountResult;
    }

    /**
     * @param AccountHandle $SumInterval_GetAccountResult
     * @return \Economic\SumInterval_GetAccountResponse
     */
    public function setSumInterval_GetAccountResult($SumInterval_GetAccountResult)
    {
      $this->SumInterval_GetAccountResult = $SumInterval_GetAccountResult;
      return $this;
    }

}
