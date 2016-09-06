<?php

namespace Economic;

class ReportCode_GetDataArray
{

    /**
     * @var ArrayOfReportCodeHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfReportCodeHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfReportCodeHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfReportCodeHandle $entityHandles
     * @return \Economic\ReportCode_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
