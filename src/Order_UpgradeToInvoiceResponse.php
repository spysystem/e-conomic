<?php

namespace Economic;

class Order_UpgradeToInvoiceResponse
{

    /**
     * @var CurrentInvoiceHandle $Order_UpgradeToInvoiceResult
     */
    protected $Order_UpgradeToInvoiceResult = null;

    /**
     * @param CurrentInvoiceHandle $Order_UpgradeToInvoiceResult
     */
    public function __construct($Order_UpgradeToInvoiceResult)
    {
      $this->Order_UpgradeToInvoiceResult = $Order_UpgradeToInvoiceResult;
    }

    /**
     * @return CurrentInvoiceHandle
     */
    public function getOrder_UpgradeToInvoiceResult()
    {
      return $this->Order_UpgradeToInvoiceResult;
    }

    /**
     * @param CurrentInvoiceHandle $Order_UpgradeToInvoiceResult
     * @return \Economic\Order_UpgradeToInvoiceResponse
     */
    public function setOrder_UpgradeToInvoiceResult($Order_UpgradeToInvoiceResult)
    {
      $this->Order_UpgradeToInvoiceResult = $Order_UpgradeToInvoiceResult;
      return $this;
    }

}
