<?php

namespace Economic;

class Debtor_GetInvoicesResponse
{

    /**
     * @var ArrayOfInvoiceHandle $Debtor_GetInvoicesResult
     */
    protected $Debtor_GetInvoicesResult = null;

    /**
     * @param ArrayOfInvoiceHandle $Debtor_GetInvoicesResult
     */
    public function __construct($Debtor_GetInvoicesResult)
    {
      $this->Debtor_GetInvoicesResult = $Debtor_GetInvoicesResult;
    }

    /**
     * @return ArrayOfInvoiceHandle
     */
    public function getDebtor_GetInvoicesResult()
    {
      return $this->Debtor_GetInvoicesResult;
    }

    /**
     * @param ArrayOfInvoiceHandle $Debtor_GetInvoicesResult
     * @return \Economic\Debtor_GetInvoicesResponse
     */
    public function setDebtor_GetInvoicesResult($Debtor_GetInvoicesResult)
    {
      $this->Debtor_GetInvoicesResult = $Debtor_GetInvoicesResult;
      return $this;
    }

}
