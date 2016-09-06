<?php

namespace Economic;

class Currency_GetCodeResponse
{

    /**
     * @var string $Currency_GetCodeResult
     */
    protected $Currency_GetCodeResult = null;

    /**
     * @param string $Currency_GetCodeResult
     */
    public function __construct($Currency_GetCodeResult)
    {
      $this->Currency_GetCodeResult = $Currency_GetCodeResult;
    }

    /**
     * @return string
     */
    public function getCurrency_GetCodeResult()
    {
      return $this->Currency_GetCodeResult;
    }

    /**
     * @param string $Currency_GetCodeResult
     * @return \Economic\Currency_GetCodeResponse
     */
    public function setCurrency_GetCodeResult($Currency_GetCodeResult)
    {
      $this->Currency_GetCodeResult = $Currency_GetCodeResult;
      return $this;
    }

}
