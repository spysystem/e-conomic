<?php

namespace Economic;

class CurrentInvoiceLine_GetInventoryLocationResponse
{

    /**
     * @var InventoryLocationHandle $CurrentInvoiceLine_GetInventoryLocationResult
     */
    protected $CurrentInvoiceLine_GetInventoryLocationResult = null;

    /**
     * @param InventoryLocationHandle $CurrentInvoiceLine_GetInventoryLocationResult
     */
    public function __construct($CurrentInvoiceLine_GetInventoryLocationResult)
    {
      $this->CurrentInvoiceLine_GetInventoryLocationResult = $CurrentInvoiceLine_GetInventoryLocationResult;
    }

    /**
     * @return InventoryLocationHandle
     */
    public function getCurrentInvoiceLine_GetInventoryLocationResult()
    {
      return $this->CurrentInvoiceLine_GetInventoryLocationResult;
    }

    /**
     * @param InventoryLocationHandle $CurrentInvoiceLine_GetInventoryLocationResult
     * @return \Economic\CurrentInvoiceLine_GetInventoryLocationResponse
     */
    public function setCurrentInvoiceLine_GetInventoryLocationResult($CurrentInvoiceLine_GetInventoryLocationResult)
    {
      $this->CurrentInvoiceLine_GetInventoryLocationResult = $CurrentInvoiceLine_GetInventoryLocationResult;
      return $this;
    }

}
