<?php

namespace Economic;

class Entry_GetVoucherNumberResponse
{

    /**
     * @var int $Entry_GetVoucherNumberResult
     */
    protected $Entry_GetVoucherNumberResult = null;

    /**
     * @param int $Entry_GetVoucherNumberResult
     */
    public function __construct($Entry_GetVoucherNumberResult)
    {
      $this->Entry_GetVoucherNumberResult = $Entry_GetVoucherNumberResult;
    }

    /**
     * @return int
     */
    public function getEntry_GetVoucherNumberResult()
    {
      return $this->Entry_GetVoucherNumberResult;
    }

    /**
     * @param int $Entry_GetVoucherNumberResult
     * @return \Economic\Entry_GetVoucherNumberResponse
     */
    public function setEntry_GetVoucherNumberResult($Entry_GetVoucherNumberResult)
    {
      $this->Entry_GetVoucherNumberResult = $Entry_GetVoucherNumberResult;
      return $this;
    }

}
