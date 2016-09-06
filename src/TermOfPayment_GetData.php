<?php

namespace Economic;

class TermOfPayment_GetData
{

    /**
     * @var TermOfPaymentHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param TermOfPaymentHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return TermOfPaymentHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param TermOfPaymentHandle $entityHandle
     * @return \Economic\TermOfPayment_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
