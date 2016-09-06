<?php

namespace Economic;

class Debtor_GetDeliveryLocationsResponse
{

    /**
     * @var ArrayOfDeliveryLocationHandle $Debtor_GetDeliveryLocationsResult
     */
    protected $Debtor_GetDeliveryLocationsResult = null;

    /**
     * @param ArrayOfDeliveryLocationHandle $Debtor_GetDeliveryLocationsResult
     */
    public function __construct($Debtor_GetDeliveryLocationsResult)
    {
      $this->Debtor_GetDeliveryLocationsResult = $Debtor_GetDeliveryLocationsResult;
    }

    /**
     * @return ArrayOfDeliveryLocationHandle
     */
    public function getDebtor_GetDeliveryLocationsResult()
    {
      return $this->Debtor_GetDeliveryLocationsResult;
    }

    /**
     * @param ArrayOfDeliveryLocationHandle $Debtor_GetDeliveryLocationsResult
     * @return \Economic\Debtor_GetDeliveryLocationsResponse
     */
    public function setDebtor_GetDeliveryLocationsResult($Debtor_GetDeliveryLocationsResult)
    {
      $this->Debtor_GetDeliveryLocationsResult = $Debtor_GetDeliveryLocationsResult;
      return $this;
    }

}
