<?php

namespace Economic;

class SumInterval_CreateResponse
{

    /**
     * @var SumIntervalHandle $SumInterval_CreateResult
     */
    protected $SumInterval_CreateResult = null;

    /**
     * @param SumIntervalHandle $SumInterval_CreateResult
     */
    public function __construct($SumInterval_CreateResult)
    {
      $this->SumInterval_CreateResult = $SumInterval_CreateResult;
    }

    /**
     * @return SumIntervalHandle
     */
    public function getSumInterval_CreateResult()
    {
      return $this->SumInterval_CreateResult;
    }

    /**
     * @param SumIntervalHandle $SumInterval_CreateResult
     * @return \Economic\SumInterval_CreateResponse
     */
    public function setSumInterval_CreateResult($SumInterval_CreateResult)
    {
      $this->SumInterval_CreateResult = $SumInterval_CreateResult;
      return $this;
    }

}
