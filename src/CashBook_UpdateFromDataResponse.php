<?php

namespace Economic;

class CashBook_UpdateFromDataResponse
{

    /**
     * @var CashBookHandle $CashBook_UpdateFromDataResult
     */
    protected $CashBook_UpdateFromDataResult = null;

    /**
     * @param CashBookHandle $CashBook_UpdateFromDataResult
     */
    public function __construct($CashBook_UpdateFromDataResult)
    {
      $this->CashBook_UpdateFromDataResult = $CashBook_UpdateFromDataResult;
    }

    /**
     * @return CashBookHandle
     */
    public function getCashBook_UpdateFromDataResult()
    {
      return $this->CashBook_UpdateFromDataResult;
    }

    /**
     * @param CashBookHandle $CashBook_UpdateFromDataResult
     * @return \Economic\CashBook_UpdateFromDataResponse
     */
    public function setCashBook_UpdateFromDataResult($CashBook_UpdateFromDataResult)
    {
      $this->CashBook_UpdateFromDataResult = $CashBook_UpdateFromDataResult;
      return $this;
    }

}
