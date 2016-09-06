<?php

namespace Economic;

class CreditorEntry_GetRemainderResponse
{

    /**
     * @var float $CreditorEntry_GetRemainderResult
     */
    protected $CreditorEntry_GetRemainderResult = null;

    /**
     * @param float $CreditorEntry_GetRemainderResult
     */
    public function __construct($CreditorEntry_GetRemainderResult)
    {
      $this->CreditorEntry_GetRemainderResult = $CreditorEntry_GetRemainderResult;
    }

    /**
     * @return float
     */
    public function getCreditorEntry_GetRemainderResult()
    {
      return $this->CreditorEntry_GetRemainderResult;
    }

    /**
     * @param float $CreditorEntry_GetRemainderResult
     * @return \Economic\CreditorEntry_GetRemainderResponse
     */
    public function setCreditorEntry_GetRemainderResult($CreditorEntry_GetRemainderResult)
    {
      $this->CreditorEntry_GetRemainderResult = $CreditorEntry_GetRemainderResult;
      return $this;
    }

}
