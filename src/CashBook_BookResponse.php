<?php

namespace Economic;

class CashBook_BookResponse
{

    /**
     * @var CashBookHandle $CashBook_BookResult
     */
    protected $CashBook_BookResult = null;

    /**
     * @param CashBookHandle $CashBook_BookResult
     */
    public function __construct($CashBook_BookResult)
    {
      $this->CashBook_BookResult = $CashBook_BookResult;
    }

    /**
     * @return CashBookHandle
     */
    public function getCashBook_BookResult()
    {
      return $this->CashBook_BookResult;
    }

    /**
     * @param CashBookHandle $CashBook_BookResult
     * @return \Economic\CashBook_BookResponse
     */
    public function setCashBook_BookResult($CashBook_BookResult)
    {
      $this->CashBook_BookResult = $CashBook_BookResult;
      return $this;
    }

}
