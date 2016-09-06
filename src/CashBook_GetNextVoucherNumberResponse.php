<?php

namespace Economic;

class CashBook_GetNextVoucherNumberResponse
{

    /**
     * @var int $CashBook_GetNextVoucherNumberResult
     */
    protected $CashBook_GetNextVoucherNumberResult = null;

    /**
     * @param int $CashBook_GetNextVoucherNumberResult
     */
    public function __construct($CashBook_GetNextVoucherNumberResult)
    {
      $this->CashBook_GetNextVoucherNumberResult = $CashBook_GetNextVoucherNumberResult;
    }

    /**
     * @return int
     */
    public function getCashBook_GetNextVoucherNumberResult()
    {
      return $this->CashBook_GetNextVoucherNumberResult;
    }

    /**
     * @param int $CashBook_GetNextVoucherNumberResult
     * @return \Economic\CashBook_GetNextVoucherNumberResponse
     */
    public function setCashBook_GetNextVoucherNumberResult($CashBook_GetNextVoucherNumberResult)
    {
      $this->CashBook_GetNextVoucherNumberResult = $CashBook_GetNextVoucherNumberResult;
      return $this;
    }

}
