<?php

namespace Economic;

class Quotation_UpdateFromDataArrayResponse
{

    /**
     * @var ArrayOfQuotationHandle $Quotation_UpdateFromDataArrayResult
     */
    protected $Quotation_UpdateFromDataArrayResult = null;

    /**
     * @param ArrayOfQuotationHandle $Quotation_UpdateFromDataArrayResult
     */
    public function __construct($Quotation_UpdateFromDataArrayResult)
    {
      $this->Quotation_UpdateFromDataArrayResult = $Quotation_UpdateFromDataArrayResult;
    }

    /**
     * @return ArrayOfQuotationHandle
     */
    public function getQuotation_UpdateFromDataArrayResult()
    {
      return $this->Quotation_UpdateFromDataArrayResult;
    }

    /**
     * @param ArrayOfQuotationHandle $Quotation_UpdateFromDataArrayResult
     * @return \Economic\Quotation_UpdateFromDataArrayResponse
     */
    public function setQuotation_UpdateFromDataArrayResult($Quotation_UpdateFromDataArrayResult)
    {
      $this->Quotation_UpdateFromDataArrayResult = $Quotation_UpdateFromDataArrayResult;
      return $this;
    }

}
