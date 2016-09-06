<?php

namespace Economic;

class CurrentInvoiceLine_GetDistributionKeyResponse
{

    /**
     * @var DistributionKeyHandle $CurrentInvoiceLine_GetDistributionKeyResult
     */
    protected $CurrentInvoiceLine_GetDistributionKeyResult = null;

    /**
     * @param DistributionKeyHandle $CurrentInvoiceLine_GetDistributionKeyResult
     */
    public function __construct($CurrentInvoiceLine_GetDistributionKeyResult)
    {
      $this->CurrentInvoiceLine_GetDistributionKeyResult = $CurrentInvoiceLine_GetDistributionKeyResult;
    }

    /**
     * @return DistributionKeyHandle
     */
    public function getCurrentInvoiceLine_GetDistributionKeyResult()
    {
      return $this->CurrentInvoiceLine_GetDistributionKeyResult;
    }

    /**
     * @param DistributionKeyHandle $CurrentInvoiceLine_GetDistributionKeyResult
     * @return \Economic\CurrentInvoiceLine_GetDistributionKeyResponse
     */
    public function setCurrentInvoiceLine_GetDistributionKeyResult($CurrentInvoiceLine_GetDistributionKeyResult)
    {
      $this->CurrentInvoiceLine_GetDistributionKeyResult = $CurrentInvoiceLine_GetDistributionKeyResult;
      return $this;
    }

}
