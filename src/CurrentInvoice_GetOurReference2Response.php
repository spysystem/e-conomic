<?php

namespace Economic;

class CurrentInvoice_GetOurReference2Response
{

    /**
     * @var EmployeeHandle $CurrentInvoice_GetOurReference2Result
     */
    protected $CurrentInvoice_GetOurReference2Result = null;

    /**
     * @param EmployeeHandle $CurrentInvoice_GetOurReference2Result
     */
    public function __construct($CurrentInvoice_GetOurReference2Result)
    {
      $this->CurrentInvoice_GetOurReference2Result = $CurrentInvoice_GetOurReference2Result;
    }

    /**
     * @return EmployeeHandle
     */
    public function getCurrentInvoice_GetOurReference2Result()
    {
      return $this->CurrentInvoice_GetOurReference2Result;
    }

    /**
     * @param EmployeeHandle $CurrentInvoice_GetOurReference2Result
     * @return \Economic\CurrentInvoice_GetOurReference2Response
     */
    public function setCurrentInvoice_GetOurReference2Result($CurrentInvoice_GetOurReference2Result)
    {
      $this->CurrentInvoice_GetOurReference2Result = $CurrentInvoice_GetOurReference2Result;
      return $this;
    }

}
