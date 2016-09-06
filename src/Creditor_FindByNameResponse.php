<?php

namespace Economic;

class Creditor_FindByNameResponse
{

    /**
     * @var ArrayOfCreditorHandle $Creditor_FindByNameResult
     */
    protected $Creditor_FindByNameResult = null;

    /**
     * @param ArrayOfCreditorHandle $Creditor_FindByNameResult
     */
    public function __construct($Creditor_FindByNameResult)
    {
      $this->Creditor_FindByNameResult = $Creditor_FindByNameResult;
    }

    /**
     * @return ArrayOfCreditorHandle
     */
    public function getCreditor_FindByNameResult()
    {
      return $this->Creditor_FindByNameResult;
    }

    /**
     * @param ArrayOfCreditorHandle $Creditor_FindByNameResult
     * @return \Economic\Creditor_FindByNameResponse
     */
    public function setCreditor_FindByNameResult($Creditor_FindByNameResult)
    {
      $this->Creditor_FindByNameResult = $Creditor_FindByNameResult;
      return $this;
    }

}
