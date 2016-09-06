<?php

namespace Economic;

class CurrentInvoice_GetLayoutResponse
{

    /**
     * @var TemplateCollectionHandle $CurrentInvoice_GetLayoutResult
     */
    protected $CurrentInvoice_GetLayoutResult = null;

    /**
     * @param TemplateCollectionHandle $CurrentInvoice_GetLayoutResult
     */
    public function __construct($CurrentInvoice_GetLayoutResult)
    {
      $this->CurrentInvoice_GetLayoutResult = $CurrentInvoice_GetLayoutResult;
    }

    /**
     * @return TemplateCollectionHandle
     */
    public function getCurrentInvoice_GetLayoutResult()
    {
      return $this->CurrentInvoice_GetLayoutResult;
    }

    /**
     * @param TemplateCollectionHandle $CurrentInvoice_GetLayoutResult
     * @return \Economic\CurrentInvoice_GetLayoutResponse
     */
    public function setCurrentInvoice_GetLayoutResult($CurrentInvoice_GetLayoutResult)
    {
      $this->CurrentInvoice_GetLayoutResult = $CurrentInvoice_GetLayoutResult;
      return $this;
    }

}
