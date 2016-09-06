<?php

namespace Economic;

class SumInterval_GetToAccount
{

    /**
     * @var SumIntervalHandle $sumIntervalHandle
     */
    protected $sumIntervalHandle = null;

    /**
     * @param SumIntervalHandle $sumIntervalHandle
     */
    public function __construct($sumIntervalHandle)
    {
      $this->sumIntervalHandle = $sumIntervalHandle;
    }

    /**
     * @return SumIntervalHandle
     */
    public function getSumIntervalHandle()
    {
      return $this->sumIntervalHandle;
    }

    /**
     * @param SumIntervalHandle $sumIntervalHandle
     * @return \Economic\SumInterval_GetToAccount
     */
    public function setSumIntervalHandle($sumIntervalHandle)
    {
      $this->sumIntervalHandle = $sumIntervalHandle;
      return $this;
    }

}
