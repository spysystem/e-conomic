<?php

namespace Economic;

class Invoice_GetProjectResponse
{

    /**
     * @var ProjectHandle $Invoice_GetProjectResult
     */
    protected $Invoice_GetProjectResult = null;

    /**
     * @param ProjectHandle $Invoice_GetProjectResult
     */
    public function __construct($Invoice_GetProjectResult)
    {
      $this->Invoice_GetProjectResult = $Invoice_GetProjectResult;
    }

    /**
     * @return ProjectHandle
     */
    public function getInvoice_GetProjectResult()
    {
      return $this->Invoice_GetProjectResult;
    }

    /**
     * @param ProjectHandle $Invoice_GetProjectResult
     * @return \Economic\Invoice_GetProjectResponse
     */
    public function setInvoice_GetProjectResult($Invoice_GetProjectResult)
    {
      $this->Invoice_GetProjectResult = $Invoice_GetProjectResult;
      return $this;
    }

}
