<?php

namespace Economic;

class DeliveryLocation_FindByExternalId
{

    /**
     * @var string $externalId
     */
    protected $externalId = null;

    /**
     * @param string $externalId
     */
    public function __construct($externalId)
    {
      $this->externalId = $externalId;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param string $externalId
     * @return \Economic\DeliveryLocation_FindByExternalId
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
