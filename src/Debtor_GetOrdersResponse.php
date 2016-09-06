<?php

namespace Economic;

class Debtor_GetOrdersResponse
{

    /**
     * @var ArrayOfOrderHandle $Debtor_GetOrdersResult
     */
    protected $Debtor_GetOrdersResult = null;

    /**
     * @param ArrayOfOrderHandle $Debtor_GetOrdersResult
     */
    public function __construct($Debtor_GetOrdersResult)
    {
      $this->Debtor_GetOrdersResult = $Debtor_GetOrdersResult;
    }

    /**
     * @return ArrayOfOrderHandle
     */
    public function getDebtor_GetOrdersResult()
    {
      return $this->Debtor_GetOrdersResult;
    }

    /**
     * @param ArrayOfOrderHandle $Debtor_GetOrdersResult
     * @return \Economic\Debtor_GetOrdersResponse
     */
    public function setDebtor_GetOrdersResult($Debtor_GetOrdersResult)
    {
      $this->Debtor_GetOrdersResult = $Debtor_GetOrdersResult;
      return $this;
    }

}
