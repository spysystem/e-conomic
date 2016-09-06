<?php

namespace Economic;

class Creditor_GetNameResponse
{

    /**
     * @var string $Creditor_GetNameResult
     */
    protected $Creditor_GetNameResult = null;

    /**
     * @param string $Creditor_GetNameResult
     */
    public function __construct($Creditor_GetNameResult)
    {
      $this->Creditor_GetNameResult = $Creditor_GetNameResult;
    }

    /**
     * @return string
     */
    public function getCreditor_GetNameResult()
    {
      return $this->Creditor_GetNameResult;
    }

    /**
     * @param string $Creditor_GetNameResult
     * @return \Economic\Creditor_GetNameResponse
     */
    public function setCreditor_GetNameResult($Creditor_GetNameResult)
    {
      $this->Creditor_GetNameResult = $Creditor_GetNameResult;
      return $this;
    }

}
