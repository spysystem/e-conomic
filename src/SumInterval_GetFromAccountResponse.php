<?php

namespace Economic;

class SumInterval_GetFromAccountResponse
{

    /**
     * @var int $SumInterval_GetFromAccountResult
     */
    protected $SumInterval_GetFromAccountResult = null;

    /**
     * @param int $SumInterval_GetFromAccountResult
     */
    public function __construct($SumInterval_GetFromAccountResult)
    {
      $this->SumInterval_GetFromAccountResult = $SumInterval_GetFromAccountResult;
    }

    /**
     * @return int
     */
    public function getSumInterval_GetFromAccountResult()
    {
      return $this->SumInterval_GetFromAccountResult;
    }

    /**
     * @param int $SumInterval_GetFromAccountResult
     * @return \Economic\SumInterval_GetFromAccountResponse
     */
    public function setSumInterval_GetFromAccountResult($SumInterval_GetFromAccountResult)
    {
      $this->SumInterval_GetFromAccountResult = $SumInterval_GetFromAccountResult;
      return $this;
    }

}
