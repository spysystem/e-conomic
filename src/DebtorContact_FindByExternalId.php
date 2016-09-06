<?php

namespace Economic;

class DebtorContact_FindByExternalId
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
     * @return \Economic\DebtorContact_FindByExternalId
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
