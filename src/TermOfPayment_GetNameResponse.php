<?php

namespace Economic;

class TermOfPayment_GetNameResponse
{

    /**
     * @var string $TermOfPayment_GetNameResult
     */
    protected $TermOfPayment_GetNameResult = null;

    /**
     * @param string $TermOfPayment_GetNameResult
     */
    public function __construct($TermOfPayment_GetNameResult)
    {
      $this->TermOfPayment_GetNameResult = $TermOfPayment_GetNameResult;
    }

    /**
     * @return string
     */
    public function getTermOfPayment_GetNameResult()
    {
      return $this->TermOfPayment_GetNameResult;
    }

    /**
     * @param string $TermOfPayment_GetNameResult
     * @return \Economic\TermOfPayment_GetNameResponse
     */
    public function setTermOfPayment_GetNameResult($TermOfPayment_GetNameResult)
    {
      $this->TermOfPayment_GetNameResult = $TermOfPayment_GetNameResult;
      return $this;
    }

}
