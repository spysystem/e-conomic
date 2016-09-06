<?php

namespace Economic;

class Invoice_FindByOurReference
{

    /**
     * @var EmployeeHandle $ourReferenceHandle
     */
    protected $ourReferenceHandle = null;

    /**
     * @param EmployeeHandle $ourReferenceHandle
     */
    public function __construct($ourReferenceHandle)
    {
      $this->ourReferenceHandle = $ourReferenceHandle;
    }

    /**
     * @return EmployeeHandle
     */
    public function getOurReferenceHandle()
    {
      return $this->ourReferenceHandle;
    }

    /**
     * @param EmployeeHandle $ourReferenceHandle
     * @return \Economic\Invoice_FindByOurReference
     */
    public function setOurReferenceHandle($ourReferenceHandle)
    {
      $this->ourReferenceHandle = $ourReferenceHandle;
      return $this;
    }

}
