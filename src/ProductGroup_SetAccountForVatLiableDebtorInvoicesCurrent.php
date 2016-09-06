<?php

namespace Economic;

class ProductGroup_SetAccountForVatLiableDebtorInvoicesCurrent
{

    /**
     * @var ProductGroupHandle $productGroupHandle
     */
    protected $productGroupHandle = null;

    /**
     * @var AccountHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param ProductGroupHandle $productGroupHandle
     * @param AccountHandle $valueHandle
     */
    public function __construct($productGroupHandle, $valueHandle)
    {
      $this->productGroupHandle = $productGroupHandle;
      $this->valueHandle = $valueHandle;
    }

    /**
     * @return ProductGroupHandle
     */
    public function getProductGroupHandle()
    {
      return $this->productGroupHandle;
    }

    /**
     * @param ProductGroupHandle $productGroupHandle
     * @return \Economic\ProductGroup_SetAccountForVatLiableDebtorInvoicesCurrent
     */
    public function setProductGroupHandle($productGroupHandle)
    {
      $this->productGroupHandle = $productGroupHandle;
      return $this;
    }

    /**
     * @return AccountHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param AccountHandle $valueHandle
     * @return \Economic\ProductGroup_SetAccountForVatLiableDebtorInvoicesCurrent
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
