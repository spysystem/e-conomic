<?php

namespace Economic;

class CreditorGroup_GetNameResponse
{

    /**
     * @var string $CreditorGroup_GetNameResult
     */
    protected $CreditorGroup_GetNameResult = null;

    /**
     * @param string $CreditorGroup_GetNameResult
     */
    public function __construct($CreditorGroup_GetNameResult)
    {
      $this->CreditorGroup_GetNameResult = $CreditorGroup_GetNameResult;
    }

    /**
     * @return string
     */
    public function getCreditorGroup_GetNameResult()
    {
      return $this->CreditorGroup_GetNameResult;
    }

    /**
     * @param string $CreditorGroup_GetNameResult
     * @return \Economic\CreditorGroup_GetNameResponse
     */
    public function setCreditorGroup_GetNameResult($CreditorGroup_GetNameResult)
    {
      $this->CreditorGroup_GetNameResult = $CreditorGroup_GetNameResult;
      return $this;
    }

}
