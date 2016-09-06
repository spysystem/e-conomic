<?php

namespace Economic;

class CashBook_FindByNumberResponse
{

    /**
     * @var CashBookHandle $CashBook_FindByNumberResult
     */
    protected $CashBook_FindByNumberResult = null;

    /**
     * @param CashBookHandle $CashBook_FindByNumberResult
     */
    public function __construct($CashBook_FindByNumberResult)
    {
      $this->CashBook_FindByNumberResult = $CashBook_FindByNumberResult;
    }

    /**
     * @return CashBookHandle
     */
    public function getCashBook_FindByNumberResult()
    {
      return $this->CashBook_FindByNumberResult;
    }

    /**
     * @param CashBookHandle $CashBook_FindByNumberResult
     * @return \Economic\CashBook_FindByNumberResponse
     */
    public function setCashBook_FindByNumberResult($CashBook_FindByNumberResult)
    {
      $this->CashBook_FindByNumberResult = $CashBook_FindByNumberResult;
      return $this;
    }

}
