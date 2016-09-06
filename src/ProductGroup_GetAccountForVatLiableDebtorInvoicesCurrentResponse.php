<?php

namespace Economic;

class ProductGroup_GetAccountForVatLiableDebtorInvoicesCurrentResponse
{

    /**
     * @var AccountHandle $ProductGroup_GetAccountForVatLiableDebtorInvoicesCurrentResult
     */
    protected $ProductGroup_GetAccountForVatLiableDebtorInvoicesCurrentResult = null;

    /**
     * @param AccountHandle $ProductGroup_GetAccountForVatLiableDebtorInvoicesCurrentResult
     */
    public function __construct($ProductGroup_GetAccountForVatLiableDebtorInvoicesCurrentResult)
    {
      $this->ProductGroup_GetAccountForVatLiableDebtorInvoicesCurrentResult = $ProductGroup_GetAccountForVatLiableDebtorInvoicesCurrentResult;
    }

    /**
     * @return AccountHandle
     */
    public function getProductGroup_GetAccountForVatLiableDebtorInvoicesCurrentResult()
    {
      return $this->ProductGroup_GetAccountForVatLiableDebtorInvoicesCurrentResult;
    }

    /**
     * @param AccountHandle $ProductGroup_GetAccountForVatLiableDebtorInvoicesCurrentResult
     * @return \Economic\ProductGroup_GetAccountForVatLiableDebtorInvoicesCurrentResponse
     */
    public function setProductGroup_GetAccountForVatLiableDebtorInvoicesCurrentResult($ProductGroup_GetAccountForVatLiableDebtorInvoicesCurrentResult)
    {
      $this->ProductGroup_GetAccountForVatLiableDebtorInvoicesCurrentResult = $ProductGroup_GetAccountForVatLiableDebtorInvoicesCurrentResult;
      return $this;
    }

}
