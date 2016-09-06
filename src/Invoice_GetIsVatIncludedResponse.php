<?php

namespace Economic;

class Invoice_GetIsVatIncludedResponse
{

    /**
     * @var boolean $Invoice_GetIsVatIncludedResult
     */
    protected $Invoice_GetIsVatIncludedResult = null;

    /**
     * @param boolean $Invoice_GetIsVatIncludedResult
     */
    public function __construct($Invoice_GetIsVatIncludedResult)
    {
      $this->Invoice_GetIsVatIncludedResult = $Invoice_GetIsVatIncludedResult;
    }

    /**
     * @return boolean
     */
    public function getInvoice_GetIsVatIncludedResult()
    {
      return $this->Invoice_GetIsVatIncludedResult;
    }

    /**
     * @param boolean $Invoice_GetIsVatIncludedResult
     * @return \Economic\Invoice_GetIsVatIncludedResponse
     */
    public function setInvoice_GetIsVatIncludedResult($Invoice_GetIsVatIncludedResult)
    {
      $this->Invoice_GetIsVatIncludedResult = $Invoice_GetIsVatIncludedResult;
      return $this;
    }

}
