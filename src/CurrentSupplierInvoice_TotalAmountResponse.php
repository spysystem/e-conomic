<?php

namespace Economic;

class CurrentSupplierInvoice_TotalAmountResponse
{

    /**
     * @var float $CurrentSupplierInvoice_TotalAmountResult
     */
    protected $CurrentSupplierInvoice_TotalAmountResult = null;

    /**
     * @param float $CurrentSupplierInvoice_TotalAmountResult
     */
    public function __construct($CurrentSupplierInvoice_TotalAmountResult)
    {
      $this->CurrentSupplierInvoice_TotalAmountResult = $CurrentSupplierInvoice_TotalAmountResult;
    }

    /**
     * @return float
     */
    public function getCurrentSupplierInvoice_TotalAmountResult()
    {
      return $this->CurrentSupplierInvoice_TotalAmountResult;
    }

    /**
     * @param float $CurrentSupplierInvoice_TotalAmountResult
     * @return \Economic\CurrentSupplierInvoice_TotalAmountResponse
     */
    public function setCurrentSupplierInvoice_TotalAmountResult($CurrentSupplierInvoice_TotalAmountResult)
    {
      $this->CurrentSupplierInvoice_TotalAmountResult = $CurrentSupplierInvoice_TotalAmountResult;
      return $this;
    }

}
