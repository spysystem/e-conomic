<?php

namespace Economic;

class Invoice_GetLayoutResponse
{

    /**
     * @var TemplateCollectionHandle $Invoice_GetLayoutResult
     */
    protected $Invoice_GetLayoutResult = null;

    /**
     * @param TemplateCollectionHandle $Invoice_GetLayoutResult
     */
    public function __construct($Invoice_GetLayoutResult)
    {
      $this->Invoice_GetLayoutResult = $Invoice_GetLayoutResult;
    }

    /**
     * @return TemplateCollectionHandle
     */
    public function getInvoice_GetLayoutResult()
    {
      return $this->Invoice_GetLayoutResult;
    }

    /**
     * @param TemplateCollectionHandle $Invoice_GetLayoutResult
     * @return \Economic\Invoice_GetLayoutResponse
     */
    public function setInvoice_GetLayoutResult($Invoice_GetLayoutResult)
    {
      $this->Invoice_GetLayoutResult = $Invoice_GetLayoutResult;
      return $this;
    }

}
