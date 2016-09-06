<?php

namespace Economic;

class DebtorGroup_GetLayoutResponse
{

    /**
     * @var TemplateCollectionHandle $DebtorGroup_GetLayoutResult
     */
    protected $DebtorGroup_GetLayoutResult = null;

    /**
     * @param TemplateCollectionHandle $DebtorGroup_GetLayoutResult
     */
    public function __construct($DebtorGroup_GetLayoutResult)
    {
      $this->DebtorGroup_GetLayoutResult = $DebtorGroup_GetLayoutResult;
    }

    /**
     * @return TemplateCollectionHandle
     */
    public function getDebtorGroup_GetLayoutResult()
    {
      return $this->DebtorGroup_GetLayoutResult;
    }

    /**
     * @param TemplateCollectionHandle $DebtorGroup_GetLayoutResult
     * @return \Economic\DebtorGroup_GetLayoutResponse
     */
    public function setDebtorGroup_GetLayoutResult($DebtorGroup_GetLayoutResult)
    {
      $this->DebtorGroup_GetLayoutResult = $DebtorGroup_GetLayoutResult;
      return $this;
    }

}
