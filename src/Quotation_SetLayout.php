<?php

namespace Economic;

class Quotation_SetLayout
{

    /**
     * @var QuotationHandle $quotationHandle
     */
    protected $quotationHandle = null;

    /**
     * @var TemplateCollectionHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param QuotationHandle $quotationHandle
     * @param TemplateCollectionHandle $valueHandle
     */
    public function __construct($quotationHandle, $valueHandle)
    {
      $this->quotationHandle = $quotationHandle;
      $this->valueHandle = $valueHandle;
    }

    /**
     * @return QuotationHandle
     */
    public function getQuotationHandle()
    {
      return $this->quotationHandle;
    }

    /**
     * @param QuotationHandle $quotationHandle
     * @return \Economic\Quotation_SetLayout
     */
    public function setQuotationHandle($quotationHandle)
    {
      $this->quotationHandle = $quotationHandle;
      return $this;
    }

    /**
     * @return TemplateCollectionHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param TemplateCollectionHandle $valueHandle
     * @return \Economic\Quotation_SetLayout
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
