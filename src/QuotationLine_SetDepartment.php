<?php

namespace Economic;

class QuotationLine_SetDepartment
{

    /**
     * @var QuotationLineHandle $quotationLineHandle
     */
    protected $quotationLineHandle = null;

    /**
     * @var DepartmentHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param QuotationLineHandle $quotationLineHandle
     * @param DepartmentHandle $valueHandle
     */
    public function __construct($quotationLineHandle, $valueHandle)
    {
      $this->quotationLineHandle = $quotationLineHandle;
      $this->valueHandle = $valueHandle;
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
     * @return \Economic\QuotationLine_SetDepartment
     */
    public function setQuotationLineHandle($quotationLineHandle)
    {
      $this->quotationLineHandle = $quotationLineHandle;
      return $this;
    }

    /**
     * @return DepartmentHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param DepartmentHandle $valueHandle
     * @return \Economic\QuotationLine_SetDepartment
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
