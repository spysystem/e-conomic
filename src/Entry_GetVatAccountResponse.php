<?php

namespace Economic;

class Entry_GetVatAccountResponse
{

    /**
     * @var VatAccountHandle $Entry_GetVatAccountResult
     */
    protected $Entry_GetVatAccountResult = null;

    /**
     * @param VatAccountHandle $Entry_GetVatAccountResult
     */
    public function __construct($Entry_GetVatAccountResult)
    {
      $this->Entry_GetVatAccountResult = $Entry_GetVatAccountResult;
    }

    /**
     * @return VatAccountHandle
     */
    public function getEntry_GetVatAccountResult()
    {
      return $this->Entry_GetVatAccountResult;
    }

    /**
     * @param VatAccountHandle $Entry_GetVatAccountResult
     * @return \Economic\Entry_GetVatAccountResponse
     */
    public function setEntry_GetVatAccountResult($Entry_GetVatAccountResult)
    {
      $this->Entry_GetVatAccountResult = $Entry_GetVatAccountResult;
      return $this;
    }

}
