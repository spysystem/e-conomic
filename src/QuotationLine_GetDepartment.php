<?php

namespace Economic;

class QuotationLine_GetDepartment
{

    /**
     * @var QuotationLineHandle $quotationLineHandle
     */
    protected $quotationLineHandle = null;

    /**
     * @param QuotationLineHandle $quotationLineHandle
     */
    public function __construct($quotationLineHandle)
    {
      $this->quotationLineHandle = $quotationLineHandle;
    }

    /**
     * @return QuotationLineHandle
     */
    public function getQuotationLineHandle()
    {
      return $this->quotationLineHandle;
    }

    /**
     * @param QuotationLineHandle $quotationLineHandle
     * @return \Economic\QuotationLine_GetDepartment
     */
    public function setQuotationLineHandle($quotationLineHandle)
    {
      $this->quotationLineHandle = $quotationLineHandle;
      return $this;
    }

}
