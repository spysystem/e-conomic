<?php

namespace Economic;

class SumInterval_CreateFromDataArrayResponse
{

    /**
     * @var ArrayOfSumIntervalHandle $SumInterval_CreateFromDataArrayResult
     */
    protected $SumInterval_CreateFromDataArrayResult = null;

    /**
     * @param ArrayOfSumIntervalHandle $SumInterval_CreateFromDataArrayResult
     */
    public function __construct($SumInterval_CreateFromDataArrayResult)
    {
      $this->SumInterval_CreateFromDataArrayResult = $SumInterval_CreateFromDataArrayResult;
    }

    /**
     * @return ArrayOfSumIntervalHandle
     */
    public function getSumInterval_CreateFromDataArrayResult()
    {
      return $this->SumInterval_CreateFromDataArrayResult;
    }

    /**
     * @param ArrayOfSumIntervalHandle $SumInterval_CreateFromDataArrayResult
     * @return \Economic\SumInterval_CreateFromDataArrayResponse
     */
    public function setSumInterval_CreateFromDataArrayResult($SumInterval_CreateFromDataArrayResult)
    {
      $this->SumInterval_CreateFromDataArrayResult = $SumInterval_CreateFromDataArrayResult;
      return $this;
    }

}
