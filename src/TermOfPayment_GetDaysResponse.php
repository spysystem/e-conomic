<?php

namespace Economic;

class TermOfPayment_GetDaysResponse
{

    /**
     * @var int $TermOfPayment_GetDaysResult
     */
    protected $TermOfPayment_GetDaysResult = null;

    /**
     * @param int $TermOfPayment_GetDaysResult
     */
    public function __construct($TermOfPayment_GetDaysResult)
    {
      $this->TermOfPayment_GetDaysResult = $TermOfPayment_GetDaysResult;
    }

    /**
     * @return int
     */
    public function getTermOfPayment_GetDaysResult()
    {
      return $this->TermOfPayment_GetDaysResult;
    }

    /**
     * @param int $TermOfPayment_GetDaysResult
     * @return \Economic\TermOfPayment_GetDaysResponse
     */
    public function setTermOfPayment_GetDaysResult($TermOfPayment_GetDaysResult)
    {
      $this->TermOfPayment_GetDaysResult = $TermOfPayment_GetDaysResult;
      return $this;
    }

}
