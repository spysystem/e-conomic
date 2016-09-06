<?php

namespace Economic;

class CashBook_FindByNameListResponse
{

    /**
     * @var ArrayOfCashBookHandle $CashBook_FindByNameListResult
     */
    protected $CashBook_FindByNameListResult = null;

    /**
     * @param ArrayOfCashBookHandle $CashBook_FindByNameListResult
     */
    public function __construct($CashBook_FindByNameListResult)
    {
      $this->CashBook_FindByNameListResult = $CashBook_FindByNameListResult;
    }

    /**
     * @return ArrayOfCashBookHandle
     */
    public function getCashBook_FindByNameListResult()
    {
      return $this->CashBook_FindByNameListResult;
    }

    /**
     * @param ArrayOfCashBookHandle $CashBook_FindByNameListResult
     * @return \Economic\CashBook_FindByNameListResponse
     */
    public function setCashBook_FindByNameListResult($CashBook_FindByNameListResult)
    {
      $this->CashBook_FindByNameListResult = $CashBook_FindByNameListResult;
      return $this;
    }

}
