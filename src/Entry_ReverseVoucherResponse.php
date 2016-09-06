<?php

namespace Economic;

class Entry_ReverseVoucherResponse
{

    /**
     * @var ArrayOfCashBookEntryHandle $Entry_ReverseVoucherResult
     */
    protected $Entry_ReverseVoucherResult = null;

    /**
     * @param ArrayOfCashBookEntryHandle $Entry_ReverseVoucherResult
     */
    public function __construct($Entry_ReverseVoucherResult)
    {
      $this->Entry_ReverseVoucherResult = $Entry_ReverseVoucherResult;
    }

    /**
     * @return ArrayOfCashBookEntryHandle
     */
    public function getEntry_ReverseVoucherResult()
    {
      return $this->Entry_ReverseVoucherResult;
    }

    /**
     * @param ArrayOfCashBookEntryHandle $Entry_ReverseVoucherResult
     * @return \Economic\Entry_ReverseVoucherResponse
     */
    public function setEntry_ReverseVoucherResult($Entry_ReverseVoucherResult)
    {
      $this->Entry_ReverseVoucherResult = $Entry_ReverseVoucherResult;
      return $this;
    }

}
