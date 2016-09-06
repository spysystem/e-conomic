<?php

namespace Economic;

class TermOfPayment_GetDataArray
{

    /**
     * @var ArrayOfTermOfPaymentHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfTermOfPaymentHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfTermOfPaymentHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfTermOfPaymentHandle $entityHandles
     * @return \Economic\TermOfPayment_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
