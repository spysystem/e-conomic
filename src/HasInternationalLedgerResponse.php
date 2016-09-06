<?php

namespace Economic;

class HasInternationalLedgerResponse
{

    /**
     * @var boolean $HasInternationalLedgerResult
     */
    protected $HasInternationalLedgerResult = null;

    /**
     * @param boolean $HasInternationalLedgerResult
     */
    public function __construct($HasInternationalLedgerResult)
    {
      $this->HasInternationalLedgerResult = $HasInternationalLedgerResult;
    }

    /**
     * @return boolean
     */
    public function getHasInternationalLedgerResult()
    {
      return $this->HasInternationalLedgerResult;
    }

    /**
     * @param boolean $HasInternationalLedgerResult
     * @return \Economic\HasInternationalLedgerResponse
     */
    public function setHasInternationalLedgerResult($HasInternationalLedgerResult)
    {
      $this->HasInternationalLedgerResult = $HasInternationalLedgerResult;
      return $this;
    }

}
