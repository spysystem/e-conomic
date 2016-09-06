<?php

namespace Economic;

class CurrentSupplierInvoice_GetIdResponse
{

    /**
     * @var int $CurrentSupplierInvoice_GetIdResult
     */
    protected $CurrentSupplierInvoice_GetIdResult = null;

    /**
     * @param int $CurrentSupplierInvoice_GetIdResult
     */
    public function __construct($CurrentSupplierInvoice_GetIdResult)
    {
      $this->CurrentSupplierInvoice_GetIdResult = $CurrentSupplierInvoice_GetIdResult;
    }

    /**
     * @return int
     */
    public function getCurrentSupplierInvoice_GetIdResult()
    {
      return $this->CurrentSupplierInvoice_GetIdResult;
    }

    /**
     * @param int $CurrentSupplierInvoice_GetIdResult
     * @return \Economic\CurrentSupplierInvoice_GetIdResponse
     */
    public function setCurrentSupplierInvoice_GetIdResult($CurrentSupplierInvoice_GetIdResult)
    {
      $this->CurrentSupplierInvoice_GetIdResult = $CurrentSupplierInvoice_GetIdResult;
      return $this;
    }

}
