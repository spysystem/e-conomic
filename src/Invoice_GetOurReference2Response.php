<?php

namespace Economic;

class Invoice_GetOurReference2Response
{

    /**
     * @var EmployeeHandle $Invoice_GetOurReference2Result
     */
    protected $Invoice_GetOurReference2Result = null;

    /**
     * @param EmployeeHandle $Invoice_GetOurReference2Result
     */
    public function __construct($Invoice_GetOurReference2Result)
    {
      $this->Invoice_GetOurReference2Result = $Invoice_GetOurReference2Result;
    }

    /**
     * @return EmployeeHandle
     */
    public function getInvoice_GetOurReference2Result()
    {
      return $this->Invoice_GetOurReference2Result;
    }

    /**
     * @param EmployeeHandle $Invoice_GetOurReference2Result
     * @return \Economic\Invoice_GetOurReference2Response
     */
    public function setInvoice_GetOurReference2Result($Invoice_GetOurReference2Result)
    {
      $this->Invoice_GetOurReference2Result = $Invoice_GetOurReference2Result;
      return $this;
    }

}
