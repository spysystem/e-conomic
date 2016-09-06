<?php

namespace Economic;

class CashBook_GetDataResponse
{

    /**
     * @var CashBookData $CashBook_GetDataResult
     */
    protected $CashBook_GetDataResult = null;

    /**
     * @param CashBookData $CashBook_GetDataResult
     */
    public function __construct($CashBook_GetDataResult)
    {
      $this->CashBook_GetDataResult = $CashBook_GetDataResult;
    }

    /**
     * @return CashBookData
     */
    public function getCashBook_GetDataResult()
    {
      return $this->CashBook_GetDataResult;
    }

    /**
     * @param CashBookData $CashBook_GetDataResult
     * @return \Economic\CashBook_GetDataResponse
     */
    public function setCashBook_GetDataResult($CashBook_GetDataResult)
    {
      $this->CashBook_GetDataResult = $CashBook_GetDataResult;
      return $this;
    }

}
