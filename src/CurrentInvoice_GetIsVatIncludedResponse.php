<?php

namespace Economic;

class CurrentInvoice_GetIsVatIncludedResponse
{

    /**
     * @var boolean $CurrentInvoice_GetIsVatIncludedResult
     */
    protected $CurrentInvoice_GetIsVatIncludedResult = null;

    /**
     * @param boolean $CurrentInvoice_GetIsVatIncludedResult
     */
    public function __construct($CurrentInvoice_GetIsVatIncludedResult)
    {
      $this->CurrentInvoice_GetIsVatIncludedResult = $CurrentInvoice_GetIsVatIncludedResult;
    }

    /**
     * @return boolean
     */
    public function getCurrentInvoice_GetIsVatIncludedResult()
    {
      return $this->CurrentInvoice_GetIsVatIncludedResult;
    }

    /**
     * @param boolean $CurrentInvoice_GetIsVatIncludedResult
     * @return \Economic\CurrentInvoice_GetIsVatIncludedResponse
     */
    public function setCurrentInvoice_GetIsVatIncludedResult($CurrentInvoice_GetIsVatIncludedResult)
    {
      $this->CurrentInvoice_GetIsVatIncludedResult = $CurrentInvoice_GetIsVatIncludedResult;
      return $this;
    }

}
