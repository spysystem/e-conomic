<?php

namespace Economic;

class Creditor_CreateFromDataArrayResponse
{

    /**
     * @var ArrayOfCreditorHandle $Creditor_CreateFromDataArrayResult
     */
    protected $Creditor_CreateFromDataArrayResult = null;

    /**
     * @param ArrayOfCreditorHandle $Creditor_CreateFromDataArrayResult
     */
    public function __construct($Creditor_CreateFromDataArrayResult)
    {
      $this->Creditor_CreateFromDataArrayResult = $Creditor_CreateFromDataArrayResult;
    }

    /**
     * @return ArrayOfCreditorHandle
     */
    public function getCreditor_CreateFromDataArrayResult()
    {
      return $this->Creditor_CreateFromDataArrayResult;
    }

    /**
     * @param ArrayOfCreditorHandle $Creditor_CreateFromDataArrayResult
     * @return \Economic\Creditor_CreateFromDataArrayResponse
     */
    public function setCreditor_CreateFromDataArrayResult($Creditor_CreateFromDataArrayResult)
    {
      $this->Creditor_CreateFromDataArrayResult = $Creditor_CreateFromDataArrayResult;
      return $this;
    }

}
