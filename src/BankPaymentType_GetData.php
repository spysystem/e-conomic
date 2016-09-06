<?php

namespace Economic;

class BankPaymentType_GetData
{

    /**
     * @var BankPaymentTypeHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param BankPaymentTypeHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return BankPaymentTypeHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param BankPaymentTypeHandle $entityHandle
     * @return \Economic\BankPaymentType_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
