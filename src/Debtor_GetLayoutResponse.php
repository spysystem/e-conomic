<?php

namespace Economic;

class Debtor_GetLayoutResponse
{

    /**
     * @var TemplateCollectionHandle $Debtor_GetLayoutResult
     */
    protected $Debtor_GetLayoutResult = null;

    /**
     * @param TemplateCollectionHandle $Debtor_GetLayoutResult
     */
    public function __construct($Debtor_GetLayoutResult)
    {
      $this->Debtor_GetLayoutResult = $Debtor_GetLayoutResult;
    }

    /**
     * @return TemplateCollectionHandle
     */
    public function getDebtor_GetLayoutResult()
    {
      return $this->Debtor_GetLayoutResult;
    }

    /**
     * @param TemplateCollectionHandle $Debtor_GetLayoutResult
     * @return \Economic\Debtor_GetLayoutResponse
     */
    public function setDebtor_GetLayoutResult($Debtor_GetLayoutResult)
    {
      $this->Debtor_GetLayoutResult = $Debtor_GetLayoutResult;
      return $this;
    }

}
