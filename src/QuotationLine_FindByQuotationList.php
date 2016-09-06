<?php

namespace Economic;

class QuotationLine_FindByQuotationList
{

    /**
     * @var ArrayOfQuotationHandle $quotationHandles
     */
    protected $quotationHandles = null;

    /**
     * @param ArrayOfQuotationHandle $quotationHandles
     */
    public function __construct($quotationHandles)
    {
      $this->quotationHandles = $quotationHandles;
    }

    /**
     * @return ArrayOfQuotationHandle
     */
    public function getQuotationHandles()
    {
      return $this->quotationHandles;
    }

    /**
     * @param ArrayOfQuotationHandle $quotationHandles
     * @return \Economic\QuotationLine_FindByQuotationList
     */
    public function setQuotationHandles($quotationHandles)
    {
      $this->quotationHandles = $quotationHandles;
      return $this;
    }

}
