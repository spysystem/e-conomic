<?php

namespace Economic;

class ExtendedVatZone_GetNumber
{

    /**
     * @var ExtendedVatZoneHandle $extendedVatZoneHandle
     */
    protected $extendedVatZoneHandle = null;

    /**
     * @param ExtendedVatZoneHandle $extendedVatZoneHandle
     */
    public function __construct($extendedVatZoneHandle)
    {
      $this->extendedVatZoneHandle = $extendedVatZoneHandle;
    }

    /**
     * @return ExtendedVatZoneHandle
     */
    public function getExtendedVatZoneHandle()
    {
      return $this->extendedVatZoneHandle;
    }

    /**
     * @param ExtendedVatZoneHandle $extendedVatZoneHandle
     * @return \Economic\ExtendedVatZone_GetNumber
     */
    public function setExtendedVatZoneHandle($extendedVatZoneHandle)
    {
      $this->extendedVatZoneHandle = $extendedVatZoneHandle;
      return $this;
    }

}
