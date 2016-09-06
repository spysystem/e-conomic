<?php

namespace Economic;

class AccountingPeriodHandle
{

    /**
     * @var int $Period
     */
    protected $Period = null;

    /**
     * @param int $Period
     */
    public function __construct($Period)
    {
      $this->Period = $Period;
    }

    /**
     * @return int
     */
    public function getPeriod()
    {
      return $this->Period;
    }

    /**
     * @param int $Period
     * @return \Economic\AccountingPeriodHandle
     */
    public function setPeriod($Period)
    {
      $this->Period = $Period;
      return $this;
    }

}
