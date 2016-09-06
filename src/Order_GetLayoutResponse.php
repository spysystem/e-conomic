<?php

namespace Economic;

class Order_GetLayoutResponse
{

    /**
     * @var TemplateCollectionHandle $Order_GetLayoutResult
     */
    protected $Order_GetLayoutResult = null;

    /**
     * @param TemplateCollectionHandle $Order_GetLayoutResult
     */
    public function __construct($Order_GetLayoutResult)
    {
      $this->Order_GetLayoutResult = $Order_GetLayoutResult;
    }

    /**
     * @return TemplateCollectionHandle
     */
    public function getOrder_GetLayoutResult()
    {
      return $this->Order_GetLayoutResult;
    }

    /**
     * @param TemplateCollectionHandle $Order_GetLayoutResult
     * @return \Economic\Order_GetLayoutResponse
     */
    public function setOrder_GetLayoutResult($Order_GetLayoutResult)
    {
      $this->Order_GetLayoutResult = $Order_GetLayoutResult;
      return $this;
    }

}
