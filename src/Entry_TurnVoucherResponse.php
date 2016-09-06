<?php

namespace Economic;

class Entry_TurnVoucherResponse
{

    /**
     * @var ArrayOfCashBookEntryHandle $Entry_TurnVoucherResult
     */
    protected $Entry_TurnVoucherResult = null;

    /**
     * @param ArrayOfCashBookEntryHandle $Entry_TurnVoucherResult
     */
    public function __construct($Entry_TurnVoucherResult)
    {
      $this->Entry_TurnVoucherResult = $Entry_TurnVoucherResult;
    }

    /**
     * @return ArrayOfCashBookEntryHandle
     */
    public function getEntry_TurnVoucherResult()
    {
      return $this->Entry_TurnVoucherResult;
    }

    /**
     * @param ArrayOfCashBookEntryHandle $Entry_TurnVoucherResult
     * @return \Economic\Entry_TurnVoucherResponse
     */
    public function setEntry_TurnVoucherResult($Entry_TurnVoucherResult)
    {
      $this->Entry_TurnVoucherResult = $Entry_TurnVoucherResult;
      return $this;
    }

}
