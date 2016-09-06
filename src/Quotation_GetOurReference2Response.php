<?php

namespace Economic;

class Quotation_GetOurReference2Response
{

    /**
     * @var EmployeeHandle $Quotation_GetOurReference2Result
     */
    protected $Quotation_GetOurReference2Result = null;

    /**
     * @param EmployeeHandle $Quotation_GetOurReference2Result
     */
    public function __construct($Quotation_GetOurReference2Result)
    {
      $this->Quotation_GetOurReference2Result = $Quotation_GetOurReference2Result;
    }

    /**
     * @return EmployeeHandle
     */
    public function getQuotation_GetOurReference2Result()
    {
      return $this->Quotation_GetOurReference2Result;
    }

    /**
     * @param EmployeeHandle $Quotation_GetOurReference2Result
     * @return \Economic\Quotation_GetOurReference2Response
     */
    public function setQuotation_GetOurReference2Result($Quotation_GetOurReference2Result)
    {
      $this->Quotation_GetOurReference2Result = $Quotation_GetOurReference2Result;
      return $this;
    }

}
