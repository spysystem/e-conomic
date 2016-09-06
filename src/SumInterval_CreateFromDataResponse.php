<?php

namespace Economic;

class SumInterval_CreateFromDataResponse
{

    /**
     * @var SumIntervalHandle $SumInterval_CreateFromDataResult
     */
    protected $SumInterval_CreateFromDataResult = null;

    /**
     * @param SumIntervalHandle $SumInterval_CreateFromDataResult
     */
    public function __construct($SumInterval_CreateFromDataResult)
    {
      $this->SumInterval_CreateFromDataResult = $SumInterval_CreateFromDataResult;
    }

    /**
     * @return SumIntervalHandle
     */
    public function getSumInterval_CreateFromDataResult()
    {
      return $this->SumInterval_CreateFromDataResult;
    }

    /**
     * @param SumIntervalHandle $SumInterval_CreateFromDataResult
     * @return \Economic\SumInterval_CreateFromDataResponse
     */
    public function setSumInterval_CreateFromDataResult($SumInterval_CreateFromDataResult)
    {
      $this->SumInterval_CreateFromDataResult = $SumInterval_CreateFromDataResult;
      return $this;
    }

}
