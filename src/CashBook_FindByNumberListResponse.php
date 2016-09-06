<?php

namespace Economic;

class CashBook_FindByNumberListResponse
{

    /**
     * @var ArrayOfCashBookHandle $CashBook_FindByNumberListResult
     */
    protected $CashBook_FindByNumberListResult = null;

    /**
     * @param ArrayOfCashBookHandle $CashBook_FindByNumberListResult
     */
    public function __construct($CashBook_FindByNumberListResult)
    {
      $this->CashBook_FindByNumberListResult = $CashBook_FindByNumberListResult;
    }

    /**
     * @return ArrayOfCashBookHandle
     */
    public function getCashBook_FindByNumberListResult()
    {
      return $this->CashBook_FindByNumberListResult;
    }

    /**
     * @param ArrayOfCashBookHandle $CashBook_FindByNumberListResult
     * @return \Economic\CashBook_FindByNumberListResponse
     */
    public function setCashBook_FindByNumberListResult($CashBook_FindByNumberListResult)
    {
      $this->CashBook_FindByNumberListResult = $CashBook_FindByNumberListResult;
      return $this;
    }

}
