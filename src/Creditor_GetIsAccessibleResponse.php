<?php

namespace Economic;

class Creditor_GetIsAccessibleResponse
{

    /**
     * @var boolean $Creditor_GetIsAccessibleResult
     */
    protected $Creditor_GetIsAccessibleResult = null;

    /**
     * @param boolean $Creditor_GetIsAccessibleResult
     */
    public function __construct($Creditor_GetIsAccessibleResult)
    {
      $this->Creditor_GetIsAccessibleResult = $Creditor_GetIsAccessibleResult;
    }

    /**
     * @return boolean
     */
    public function getCreditor_GetIsAccessibleResult()
    {
      return $this->Creditor_GetIsAccessibleResult;
    }

    /**
     * @param boolean $Creditor_GetIsAccessibleResult
     * @return \Economic\Creditor_GetIsAccessibleResponse
     */
    public function setCreditor_GetIsAccessibleResult($Creditor_GetIsAccessibleResult)
    {
      $this->Creditor_GetIsAccessibleResult = $Creditor_GetIsAccessibleResult;
      return $this;
    }

}
