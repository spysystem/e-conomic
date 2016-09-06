<?php

namespace Economic;

class SumInterval_SetToAccount
{

    /**
     * @var SumIntervalHandle $sumIntervalHandle
     */
    protected $sumIntervalHandle = null;

    /**
     * @var int $value
     */
    protected $value = null;

    /**
     * @param SumIntervalHandle $sumIntervalHandle
     * @param int $value
     */
    public function __construct($sumIntervalHandle, $value)
    {
      $this->sumIntervalHandle = $sumIntervalHandle;
      $this->value = $value;
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
     * @return \Economic\SumInterval_SetToAccount
     */
    public function setSumIntervalHandle($sumIntervalHandle)
    {
      $this->sumIntervalHandle = $sumIntervalHandle;
      return $this;
    }

    /**
     * @return int
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param int $value
     * @return \Economic\SumInterval_SetToAccount
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
