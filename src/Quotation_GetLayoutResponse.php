<?php

namespace Economic;

class Quotation_GetLayoutResponse
{

    /**
     * @var TemplateCollectionHandle $Quotation_GetLayoutResult
     */
    protected $Quotation_GetLayoutResult = null;

    /**
     * @param TemplateCollectionHandle $Quotation_GetLayoutResult
     */
    public function __construct($Quotation_GetLayoutResult)
    {
      $this->Quotation_GetLayoutResult = $Quotation_GetLayoutResult;
    }

    /**
     * @return TemplateCollectionHandle
     */
    public function getQuotation_GetLayoutResult()
    {
      return $this->Quotation_GetLayoutResult;
    }

    /**
     * @param TemplateCollectionHandle $Quotation_GetLayoutResult
     * @return \Economic\Quotation_GetLayoutResponse
     */
    public function setQuotation_GetLayoutResult($Quotation_GetLayoutResult)
    {
      $this->Quotation_GetLayoutResult = $Quotation_GetLayoutResult;
      return $this;
    }

}
