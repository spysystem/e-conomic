<?php

namespace Economic;

class CashBook_GetNextVoucherNumber
{

    /**
     * @var CashBookHandle $cashBookHandle
     */
    protected $cashBookHandle = null;

    /**
     * @param CashBookHandle $cashBookHandle
     */
    public function __construct($cashBookHandle)
    {
      $this->cashBookHandle = $cashBookHandle;
    }

    /**
     * @return CashBookHandle
     */
    public function getCashBookHandle()
    {
      return $this->cashBookHandle;
    }

    /**
     * @param CashBookHandle $cashBookHandle
     * @return \Economic\CashBook_GetNextVoucherNumber
     */
    public function setCashBookHandle($cashBookHandle)
    {
      $this->cashBookHandle = $cashBookHandle;
      return $this;
    }

}
