<?php

namespace Economic;

class CreditorGroup_GetNumberResponse
{

    /**
     * @var int $CreditorGroup_GetNumberResult
     */
    protected $CreditorGroup_GetNumberResult = null;

    /**
     * @param int $CreditorGroup_GetNumberResult
     */
    public function __construct($CreditorGroup_GetNumberResult)
    {
      $this->CreditorGroup_GetNumberResult = $CreditorGroup_GetNumberResult;
    }

    /**
     * @return int
     */
    public function getCreditorGroup_GetNumberResult()
    {
      return $this->CreditorGroup_GetNumberResult;
    }

    /**
     * @param int $CreditorGroup_GetNumberResult
     * @return \Economic\CreditorGroup_GetNumberResponse
     */
    public function setCreditorGroup_GetNumberResult($CreditorGroup_GetNumberResult)
    {
      $this->CreditorGroup_GetNumberResult = $CreditorGroup_GetNumberResult;
      return $this;
    }

}
