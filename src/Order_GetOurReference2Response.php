<?php

namespace Economic;

class Order_GetOurReference2Response
{

    /**
     * @var EmployeeHandle $Order_GetOurReference2Result
     */
    protected $Order_GetOurReference2Result = null;

    /**
     * @param EmployeeHandle $Order_GetOurReference2Result
     */
    public function __construct($Order_GetOurReference2Result)
    {
      $this->Order_GetOurReference2Result = $Order_GetOurReference2Result;
    }

    /**
     * @return EmployeeHandle
     */
    public function getOrder_GetOurReference2Result()
    {
      return $this->Order_GetOurReference2Result;
    }

    /**
     * @param EmployeeHandle $Order_GetOurReference2Result
     * @return \Economic\Order_GetOurReference2Response
     */
    public function setOrder_GetOurReference2Result($Order_GetOurReference2Result)
    {
      $this->Order_GetOurReference2Result = $Order_GetOurReference2Result;
      return $this;
    }

}
