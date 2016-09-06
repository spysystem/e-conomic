<?php

namespace Economic;

class Creditor_FindByNumberListResponse
{

    /**
     * @var ArrayOfCreditorHandle $Creditor_FindByNumberListResult
     */
    protected $Creditor_FindByNumberListResult = null;

    /**
     * @param ArrayOfCreditorHandle $Creditor_FindByNumberListResult
     */
    public function __construct($Creditor_FindByNumberListResult)
    {
      $this->Creditor_FindByNumberListResult = $Creditor_FindByNumberListResult;
    }

    /**
     * @return ArrayOfCreditorHandle
     */
    public function getCreditor_FindByNumberListResult()
    {
      return $this->Creditor_FindByNumberListResult;
    }

    /**
     * @param ArrayOfCreditorHandle $Creditor_FindByNumberListResult
     * @return \Economic\Creditor_FindByNumberListResponse
     */
    public function setCreditor_FindByNumberListResult($Creditor_FindByNumberListResult)
    {
      $this->Creditor_FindByNumberListResult = $Creditor_FindByNumberListResult;
      return $this;
    }

}
