<?php

namespace Economic;

class TermOfPayment_GetDescriptionResponse
{

    /**
     * @var string $TermOfPayment_GetDescriptionResult
     */
    protected $TermOfPayment_GetDescriptionResult = null;

    /**
     * @param string $TermOfPayment_GetDescriptionResult
     */
    public function __construct($TermOfPayment_GetDescriptionResult)
    {
      $this->TermOfPayment_GetDescriptionResult = $TermOfPayment_GetDescriptionResult;
    }

    /**
     * @return string
     */
    public function getTermOfPayment_GetDescriptionResult()
    {
      return $this->TermOfPayment_GetDescriptionResult;
    }

    /**
     * @param string $TermOfPayment_GetDescriptionResult
     * @return \Economic\TermOfPayment_GetDescriptionResponse
     */
    public function setTermOfPayment_GetDescriptionResult($TermOfPayment_GetDescriptionResult)
    {
      $this->TermOfPayment_GetDescriptionResult = $TermOfPayment_GetDescriptionResult;
      return $this;
    }

}
