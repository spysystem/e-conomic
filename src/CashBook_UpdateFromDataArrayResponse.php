<?php

namespace Economic;

class CashBook_UpdateFromDataArrayResponse
{

    /**
     * @var ArrayOfCashBookHandle $CashBook_UpdateFromDataArrayResult
     */
    protected $CashBook_UpdateFromDataArrayResult = null;

    /**
     * @param ArrayOfCashBookHandle $CashBook_UpdateFromDataArrayResult
     */
    public function __construct($CashBook_UpdateFromDataArrayResult)
    {
      $this->CashBook_UpdateFromDataArrayResult = $CashBook_UpdateFromDataArrayResult;
    }

    /**
     * @return ArrayOfCashBookHandle
     */
    public function getCashBook_UpdateFromDataArrayResult()
    {
      return $this->CashBook_UpdateFromDataArrayResult;
    }

    /**
     * @param ArrayOfCashBookHandle $CashBook_UpdateFromDataArrayResult
     * @return \Economic\CashBook_UpdateFromDataArrayResponse
     */
    public function setCashBook_UpdateFromDataArrayResult($CashBook_UpdateFromDataArrayResult)
    {
      $this->CashBook_UpdateFromDataArrayResult = $CashBook_UpdateFromDataArrayResult;
      return $this;
    }

}
