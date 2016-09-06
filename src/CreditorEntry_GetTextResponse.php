<?php

namespace Economic;

class CreditorEntry_GetTextResponse
{

    /**
     * @var string $CreditorEntry_GetTextResult
     */
    protected $CreditorEntry_GetTextResult = null;

    /**
     * @param string $CreditorEntry_GetTextResult
     */
    public function __construct($CreditorEntry_GetTextResult)
    {
      $this->CreditorEntry_GetTextResult = $CreditorEntry_GetTextResult;
    }

    /**
     * @return string
     */
    public function getCreditorEntry_GetTextResult()
    {
      return $this->CreditorEntry_GetTextResult;
    }

    /**
     * @param string $CreditorEntry_GetTextResult
     * @return \Economic\CreditorEntry_GetTextResponse
     */
    public function setCreditorEntry_GetTextResult($CreditorEntry_GetTextResult)
    {
      $this->CreditorEntry_GetTextResult = $CreditorEntry_GetTextResult;
      return $this;
    }

}
