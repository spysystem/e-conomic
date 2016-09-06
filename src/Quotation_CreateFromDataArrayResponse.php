<?php

namespace Economic;

class Quotation_CreateFromDataArrayResponse
{

    /**
     * @var ArrayOfQuotationHandle $Quotation_CreateFromDataArrayResult
     */
    protected $Quotation_CreateFromDataArrayResult = null;

    /**
     * @param ArrayOfQuotationHandle $Quotation_CreateFromDataArrayResult
     */
    public function __construct($Quotation_CreateFromDataArrayResult)
    {
      $this->Quotation_CreateFromDataArrayResult = $Quotation_CreateFromDataArrayResult;
    }

    /**
     * @return ArrayOfQuotationHandle
     */
    public function getQuotation_CreateFromDataArrayResult()
    {
      return $this->Quotation_CreateFromDataArrayResult;
    }

    /**
     * @param ArrayOfQuotationHandle $Quotation_CreateFromDataArrayResult
     * @return \Economic\Quotation_CreateFromDataArrayResponse
     */
    public function setQuotation_CreateFromDataArrayResult($Quotation_CreateFromDataArrayResult)
    {
      $this->Quotation_CreateFromDataArrayResult = $Quotation_CreateFromDataArrayResult;
      return $this;
    }

}
