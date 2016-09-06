<?php

namespace Economic;

class Order_GetProjectResponse
{

    /**
     * @var ProjectHandle $Order_GetProjectResult
     */
    protected $Order_GetProjectResult = null;

    /**
     * @param ProjectHandle $Order_GetProjectResult
     */
    public function __construct($Order_GetProjectResult)
    {
      $this->Order_GetProjectResult = $Order_GetProjectResult;
    }

    /**
     * @return ProjectHandle
     */
    public function getOrder_GetProjectResult()
    {
      return $this->Order_GetProjectResult;
    }

    /**
     * @param ProjectHandle $Order_GetProjectResult
     * @return \Economic\Order_GetProjectResponse
     */
    public function setOrder_GetProjectResult($Order_GetProjectResult)
    {
      $this->Order_GetProjectResult = $Order_GetProjectResult;
      return $this;
    }

}
