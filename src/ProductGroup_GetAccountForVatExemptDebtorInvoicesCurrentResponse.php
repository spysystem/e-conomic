<?php

namespace Economic;

class ProductGroup_GetAccountForVatExemptDebtorInvoicesCurrentResponse
{

    /**
     * @var AccountHandle $ProductGroup_GetAccountForVatExemptDebtorInvoicesCurrentResult
     */
    protected $ProductGroup_GetAccountForVatExemptDebtorInvoicesCurrentResult = null;

    /**
     * @param AccountHandle $ProductGroup_GetAccountForVatExemptDebtorInvoicesCurrentResult
     */
    public function __construct($ProductGroup_GetAccountForVatExemptDebtorInvoicesCurrentResult)
    {
      $this->ProductGroup_GetAccountForVatExemptDebtorInvoicesCurrentResult = $ProductGroup_GetAccountForVatExemptDebtorInvoicesCurrentResult;
    }

    /**
     * @return AccountHandle
     */
    public function getProductGroup_GetAccountForVatExemptDebtorInvoicesCurrentResult()
    {
      return $this->ProductGroup_GetAccountForVatExemptDebtorInvoicesCurrentResult;
    }

    /**
     * @param AccountHandle $ProductGroup_GetAccountForVatExemptDebtorInvoicesCurrentResult
     * @return \Economic\ProductGroup_GetAccountForVatExemptDebtorInvoicesCurrentResponse
     */
    public function setProductGroup_GetAccountForVatExemptDebtorInvoicesCurrentResult($ProductGroup_GetAccountForVatExemptDebtorInvoicesCurrentResult)
    {
      $this->ProductGroup_GetAccountForVatExemptDebtorInvoicesCurrentResult = $ProductGroup_GetAccountForVatExemptDebtorInvoicesCurrentResult;
      return $this;
    }

}
