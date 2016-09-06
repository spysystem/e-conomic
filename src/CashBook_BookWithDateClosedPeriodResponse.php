<?php

namespace Economic;

class CashBook_BookWithDateClosedPeriodResponse
{

    /**
     * @var CashBookHandle $CashBook_BookWithDateClosedPeriodResult
     */
    protected $CashBook_BookWithDateClosedPeriodResult = null;

    /**
     * @param CashBookHandle $CashBook_BookWithDateClosedPeriodResult
     */
    public function __construct($CashBook_BookWithDateClosedPeriodResult)
    {
      $this->CashBook_BookWithDateClosedPeriodResult = $CashBook_BookWithDateClosedPeriodResult;
    }

    /**
     * @return CashBookHandle
     */
    public function getCashBook_BookWithDateClosedPeriodResult()
    {
      return $this->CashBook_BookWithDateClosedPeriodResult;
    }

    /**
     * @param CashBookHandle $CashBook_BookWithDateClosedPeriodResult
     * @return \Economic\CashBook_BookWithDateClosedPeriodResponse
     */
    public function setCashBook_BookWithDateClosedPeriodResult($CashBook_BookWithDateClosedPeriodResult)
    {
      $this->CashBook_BookWithDateClosedPeriodResult = $CashBook_BookWithDateClosedPeriodResult;
      return $this;
    }

}
