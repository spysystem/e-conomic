<?php

namespace Economic;

class CashBook_GetDataArrayResponse
{

    /**
     * @var ArrayOfCashBookData $CashBook_GetDataArrayResult
     */
    protected $CashBook_GetDataArrayResult = null;

    /**
     * @param ArrayOfCashBookData $CashBook_GetDataArrayResult
     */
    public function __construct($CashBook_GetDataArrayResult)
    {
      $this->CashBook_GetDataArrayResult = $CashBook_GetDataArrayResult;
    }

    /**
     * @return ArrayOfCashBookData
     */
    public function getCashBook_GetDataArrayResult()
    {
      return $this->CashBook_GetDataArrayResult;
    }

    /**
     * @param ArrayOfCashBookData $CashBook_GetDataArrayResult
     * @return \Economic\CashBook_GetDataArrayResponse
     */
    public function setCashBook_GetDataArrayResult($CashBook_GetDataArrayResult)
    {
      $this->CashBook_GetDataArrayResult = $CashBook_GetDataArrayResult;
      return $this;
    }

}
