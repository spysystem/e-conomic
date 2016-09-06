<?php

namespace Economic;

class BankPaymentType_GetDataArray
{

    /**
     * @var ArrayOfBankPaymentTypeHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfBankPaymentTypeHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfBankPaymentTypeHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfBankPaymentTypeHandle $entityHandles
     * @return \Economic\BankPaymentType_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
