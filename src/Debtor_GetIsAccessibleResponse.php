<?php

namespace Economic;

class Debtor_GetIsAccessibleResponse
{

    /**
     * @var boolean $Debtor_GetIsAccessibleResult
     */
    protected $Debtor_GetIsAccessibleResult = null;

    /**
     * @param boolean $Debtor_GetIsAccessibleResult
     */
    public function __construct($Debtor_GetIsAccessibleResult)
    {
      $this->Debtor_GetIsAccessibleResult = $Debtor_GetIsAccessibleResult;
    }

    /**
     * @return boolean
     */
    public function getDebtor_GetIsAccessibleResult()
    {
      return $this->Debtor_GetIsAccessibleResult;
    }

    /**
     * @param boolean $Debtor_GetIsAccessibleResult
     * @return \Economic\Debtor_GetIsAccessibleResponse
     */
    public function setDebtor_GetIsAccessibleResult($Debtor_GetIsAccessibleResult)
    {
      $this->Debtor_GetIsAccessibleResult = $Debtor_GetIsAccessibleResult;
      return $this;
    }

}
