<?php

namespace Economic;

class CurrentInvoice_GetProjectResponse
{

    /**
     * @var ProjectHandle $CurrentInvoice_GetProjectResult
     */
    protected $CurrentInvoice_GetProjectResult = null;

    /**
     * @param ProjectHandle $CurrentInvoice_GetProjectResult
     */
    public function __construct($CurrentInvoice_GetProjectResult)
    {
      $this->CurrentInvoice_GetProjectResult = $CurrentInvoice_GetProjectResult;
    }

    /**
     * @return ProjectHandle
     */
    public function getCurrentInvoice_GetProjectResult()
    {
      return $this->CurrentInvoice_GetProjectResult;
    }

    /**
     * @param ProjectHandle $CurrentInvoice_GetProjectResult
     * @return \Economic\CurrentInvoice_GetProjectResponse
     */
    public function setCurrentInvoice_GetProjectResult($CurrentInvoice_GetProjectResult)
    {
      $this->CurrentInvoice_GetProjectResult = $CurrentInvoice_GetProjectResult;
      return $this;
    }

}
