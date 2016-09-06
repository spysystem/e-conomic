<?php

namespace Economic;

class Creditor_GetEntriesByVoucherNoResponse
{

    /**
     * @var ArrayOfCreditorEntryHandle $Creditor_GetEntriesByVoucherNoResult
     */
    protected $Creditor_GetEntriesByVoucherNoResult = null;

    /**
     * @param ArrayOfCreditorEntryHandle $Creditor_GetEntriesByVoucherNoResult
     */
    public function __construct($Creditor_GetEntriesByVoucherNoResult)
    {
      $this->Creditor_GetEntriesByVoucherNoResult = $Creditor_GetEntriesByVoucherNoResult;
    }

    /**
     * @return ArrayOfCreditorEntryHandle
     */
    public function getCreditor_GetEntriesByVoucherNoResult()
    {
      return $this->Creditor_GetEntriesByVoucherNoResult;
    }

    /**
     * @param ArrayOfCreditorEntryHandle $Creditor_GetEntriesByVoucherNoResult
     * @return \Economic\Creditor_GetEntriesByVoucherNoResponse
     */
    public function setCreditor_GetEntriesByVoucherNoResult($Creditor_GetEntriesByVoucherNoResult)
    {
      $this->Creditor_GetEntriesByVoucherNoResult = $Creditor_GetEntriesByVoucherNoResult;
      return $this;
    }

}
