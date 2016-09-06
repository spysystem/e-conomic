<?php

namespace Economic;

class CashBook_GetAllResponse
{

    /**
     * @var ArrayOfCashBookHandle $CashBook_GetAllResult
     */
    protected $CashBook_GetAllResult = null;

    /**
     * @param ArrayOfCashBookHandle $CashBook_GetAllResult
     */
    public function __construct($CashBook_GetAllResult)
    {
      $this->CashBook_GetAllResult = $CashBook_GetAllResult;
    }

    /**
     * @return ArrayOfCashBookHandle
     */
    public function getCashBook_GetAllResult()
    {
      return $this->CashBook_GetAllResult;
    }

    /**
     * @param ArrayOfCashBookHandle $CashBook_GetAllResult
     * @return \Economic\CashBook_GetAllResponse
     */
    public function setCashBook_GetAllResult($CashBook_GetAllResult)
    {
      $this->CashBook_GetAllResult = $CashBook_GetAllResult;
      return $this;
    }

}
