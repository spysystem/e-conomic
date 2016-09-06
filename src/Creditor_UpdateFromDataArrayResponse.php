<?php

namespace Economic;

class Creditor_UpdateFromDataArrayResponse
{

    /**
     * @var ArrayOfCreditorHandle $Creditor_UpdateFromDataArrayResult
     */
    protected $Creditor_UpdateFromDataArrayResult = null;

    /**
     * @param ArrayOfCreditorHandle $Creditor_UpdateFromDataArrayResult
     */
    public function __construct($Creditor_UpdateFromDataArrayResult)
    {
      $this->Creditor_UpdateFromDataArrayResult = $Creditor_UpdateFromDataArrayResult;
    }

    /**
     * @return ArrayOfCreditorHandle
     */
    public function getCreditor_UpdateFromDataArrayResult()
    {
      return $this->Creditor_UpdateFromDataArrayResult;
    }

    /**
     * @param ArrayOfCreditorHandle $Creditor_UpdateFromDataArrayResult
     * @return \Economic\Creditor_UpdateFromDataArrayResponse
     */
    public function setCreditor_UpdateFromDataArrayResult($Creditor_UpdateFromDataArrayResult)
    {
      $this->Creditor_UpdateFromDataArrayResult = $Creditor_UpdateFromDataArrayResult;
      return $this;
    }

}
