<?php

namespace Economic;

class InvoiceLine_GetDistributionKeyResponse
{

    /**
     * @var DistributionKeyHandle $InvoiceLine_GetDistributionKeyResult
     */
    protected $InvoiceLine_GetDistributionKeyResult = null;

    /**
     * @param DistributionKeyHandle $InvoiceLine_GetDistributionKeyResult
     */
    public function __construct($InvoiceLine_GetDistributionKeyResult)
    {
      $this->InvoiceLine_GetDistributionKeyResult = $InvoiceLine_GetDistributionKeyResult;
    }

    /**
     * @return DistributionKeyHandle
     */
    public function getInvoiceLine_GetDistributionKeyResult()
    {
      return $this->InvoiceLine_GetDistributionKeyResult;
    }

    /**
     * @param DistributionKeyHandle $InvoiceLine_GetDistributionKeyResult
     * @return \Economic\InvoiceLine_GetDistributionKeyResponse
     */
    public function setInvoiceLine_GetDistributionKeyResult($InvoiceLine_GetDistributionKeyResult)
    {
      $this->InvoiceLine_GetDistributionKeyResult = $InvoiceLine_GetDistributionKeyResult;
      return $this;
    }

}
