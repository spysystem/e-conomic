<?php

namespace Economic;

class Debtor_GetQuotationsResponse
{

    /**
     * @var ArrayOfQuotationHandle $Debtor_GetQuotationsResult
     */
    protected $Debtor_GetQuotationsResult = null;

    /**
     * @param ArrayOfQuotationHandle $Debtor_GetQuotationsResult
     */
    public function __construct($Debtor_GetQuotationsResult)
    {
      $this->Debtor_GetQuotationsResult = $Debtor_GetQuotationsResult;
    }

    /**
     * @return ArrayOfQuotationHandle
     */
    public function getDebtor_GetQuotationsResult()
    {
      return $this->Debtor_GetQuotationsResult;
    }

    /**
     * @param ArrayOfQuotationHandle $Debtor_GetQuotationsResult
     * @return \Economic\Debtor_GetQuotationsResponse
     */
    public function setDebtor_GetQuotationsResult($Debtor_GetQuotationsResult)
    {
      $this->Debtor_GetQuotationsResult = $Debtor_GetQuotationsResult;
      return $this;
    }

}
