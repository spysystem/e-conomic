<?php

namespace Economic;

class CashBook_GetNumberResponse
{

    /**
     * @var int $CashBook_GetNumberResult
     */
    protected $CashBook_GetNumberResult = null;

    /**
     * @param int $CashBook_GetNumberResult
     */
    public function __construct($CashBook_GetNumberResult)
    {
      $this->CashBook_GetNumberResult = $CashBook_GetNumberResult;
    }

    /**
     * @return int
     */
    public function getCashBook_GetNumberResult()
    {
      return $this->CashBook_GetNumberResult;
    }

    /**
     * @param int $CashBook_GetNumberResult
     * @return \Economic\CashBook_GetNumberResponse
     */
    public function setCashBook_GetNumberResult($CashBook_GetNumberResult)
    {
      $this->CashBook_GetNumberResult = $CashBook_GetNumberResult;
      return $this;
    }

}
