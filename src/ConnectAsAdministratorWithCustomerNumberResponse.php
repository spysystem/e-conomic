<?php

namespace Economic;

class ConnectAsAdministratorWithCustomerNumberResponse
{

    /**
     * @var string $ConnectAsAdministratorWithCustomerNumberResult
     */
    protected $ConnectAsAdministratorWithCustomerNumberResult = null;

    /**
     * @param string $ConnectAsAdministratorWithCustomerNumberResult
     */
    public function __construct($ConnectAsAdministratorWithCustomerNumberResult)
    {
      $this->ConnectAsAdministratorWithCustomerNumberResult = $ConnectAsAdministratorWithCustomerNumberResult;
    }

    /**
     * @return string
     */
    public function getConnectAsAdministratorWithCustomerNumberResult()
    {
      return $this->ConnectAsAdministratorWithCustomerNumberResult;
    }

    /**
     * @param string $ConnectAsAdministratorWithCustomerNumberResult
     * @return \Economic\ConnectAsAdministratorWithCustomerNumberResponse
     */
    public function setConnectAsAdministratorWithCustomerNumberResult($ConnectAsAdministratorWithCustomerNumberResult)
    {
      $this->ConnectAsAdministratorWithCustomerNumberResult = $ConnectAsAdministratorWithCustomerNumberResult;
      return $this;
    }

}
