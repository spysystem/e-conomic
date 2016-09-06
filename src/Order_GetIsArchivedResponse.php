<?php

namespace Economic;

class Order_GetIsArchivedResponse
{

    /**
     * @var boolean $Order_GetIsArchivedResult
     */
    protected $Order_GetIsArchivedResult = null;

    /**
     * @param boolean $Order_GetIsArchivedResult
     */
    public function __construct($Order_GetIsArchivedResult)
    {
      $this->Order_GetIsArchivedResult = $Order_GetIsArchivedResult;
    }

    /**
     * @return boolean
     */
    public function getOrder_GetIsArchivedResult()
    {
      return $this->Order_GetIsArchivedResult;
    }

    /**
     * @param boolean $Order_GetIsArchivedResult
     * @return \Economic\Order_GetIsArchivedResponse
     */
    public function setOrder_GetIsArchivedResult($Order_GetIsArchivedResult)
    {
      $this->Order_GetIsArchivedResult = $Order_GetIsArchivedResult;
      return $this;
    }

}
