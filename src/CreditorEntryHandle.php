<?php

namespace Economic;

class CreditorEntryHandle
{

    /**
     * @var int $SerialNumber
     */
    protected $SerialNumber = null;

    /**
     * @param int $SerialNumber
     */
    public function __construct($SerialNumber)
    {
      $this->SerialNumber = $SerialNumber;
    }

    /**
     * @return int
     */
    public function getSerialNumber()
    {
      return $this->SerialNumber;
    }

    /**
     * @param int $SerialNumber
     * @return \Economic\CreditorEntryHandle
     */
    public function setSerialNumber($SerialNumber)
    {
      $this->SerialNumber = $SerialNumber;
      return $this;
    }

}
