<?php

namespace Economic;

class Quotation_UpgradeToOrderResponse
{

    /**
     * @var OrderHandle $Quotation_UpgradeToOrderResult
     */
    protected $Quotation_UpgradeToOrderResult = null;

    /**
     * @param OrderHandle $Quotation_UpgradeToOrderResult
     */
    public function __construct($Quotation_UpgradeToOrderResult)
    {
      $this->Quotation_UpgradeToOrderResult = $Quotation_UpgradeToOrderResult;
    }

    /**
     * @return OrderHandle
     */
    public function getQuotation_UpgradeToOrderResult()
    {
      return $this->Quotation_UpgradeToOrderResult;
    }

    /**
     * @param OrderHandle $Quotation_UpgradeToOrderResult
     * @return \Economic\Quotation_UpgradeToOrderResponse
     */
    public function setQuotation_UpgradeToOrderResult($Quotation_UpgradeToOrderResult)
    {
      $this->Quotation_UpgradeToOrderResult = $Quotation_UpgradeToOrderResult;
      return $this;
    }

}
