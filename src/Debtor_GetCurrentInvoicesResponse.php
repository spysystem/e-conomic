<?php

namespace Economic;

class Debtor_GetCurrentInvoicesResponse
{

    /**
     * @var ArrayOfCurrentInvoiceHandle $Debtor_GetCurrentInvoicesResult
     */
    protected $Debtor_GetCurrentInvoicesResult = null;

    /**
     * @param ArrayOfCurrentInvoiceHandle $Debtor_GetCurrentInvoicesResult
     */
    public function __construct($Debtor_GetCurrentInvoicesResult)
    {
      $this->Debtor_GetCurrentInvoicesResult = $Debtor_GetCurrentInvoicesResult;
    }

    /**
     * @return ArrayOfCurrentInvoiceHandle
     */
    public function getDebtor_GetCurrentInvoicesResult()
    {
      return $this->Debtor_GetCurrentInvoicesResult;
    }

    /**
     * @param ArrayOfCurrentInvoiceHandle $Debtor_GetCurrentInvoicesResult
     * @return \Economic\Debtor_GetCurrentInvoicesResponse
     */
    public function setDebtor_GetCurrentInvoicesResult($Debtor_GetCurrentInvoicesResult)
    {
      $this->Debtor_GetCurrentInvoicesResult = $Debtor_GetCurrentInvoicesResult;
      return $this;
    }

}
