<?php

namespace Economic;

class Entry_CopyVoucherResponse
{

    /**
     * @var ArrayOfCashBookEntryHandle $Entry_CopyVoucherResult
     */
    protected $Entry_CopyVoucherResult = null;

    /**
     * @param ArrayOfCashBookEntryHandle $Entry_CopyVoucherResult
     */
    public function __construct($Entry_CopyVoucherResult)
    {
      $this->Entry_CopyVoucherResult = $Entry_CopyVoucherResult;
    }

    /**
     * @return ArrayOfCashBookEntryHandle
     */
    public function getEntry_CopyVoucherResult()
    {
      return $this->Entry_CopyVoucherResult;
    }

    /**
     * @param ArrayOfCashBookEntryHandle $Entry_CopyVoucherResult
     * @return \Economic\Entry_CopyVoucherResponse
     */
    public function setEntry_CopyVoucherResult($Entry_CopyVoucherResult)
    {
      $this->Entry_CopyVoucherResult = $Entry_CopyVoucherResult;
      return $this;
    }

}
