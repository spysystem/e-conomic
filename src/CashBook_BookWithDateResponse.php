<?php

namespace Economic;

class CashBook_BookWithDateResponse
{

    /**
     * @var CashBookHandle $CashBook_BookWithDateResult
     */
    protected $CashBook_BookWithDateResult = null;

    /**
     * @param CashBookHandle $CashBook_BookWithDateResult
     */
    public function __construct($CashBook_BookWithDateResult)
    {
      $this->CashBook_BookWithDateResult = $CashBook_BookWithDateResult;
    }

    /**
     * @return CashBookHandle
     */
    public function getCashBook_BookWithDateResult()
    {
      return $this->CashBook_BookWithDateResult;
    }

    /**
     * @param CashBookHandle $CashBook_BookWithDateResult
     * @return \Economic\CashBook_BookWithDateResponse
     */
    public function setCashBook_BookWithDateResult($CashBook_BookWithDateResult)
    {
      $this->CashBook_BookWithDateResult = $CashBook_BookWithDateResult;
      return $this;
    }

}
