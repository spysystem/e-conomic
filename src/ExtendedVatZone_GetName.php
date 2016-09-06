<?php

namespace Economic;

class ExtendedVatZone_GetName
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
     * @return \Economic\ExtendedVatZone_GetName
     */
    public function setExtendedVatZoneHandle($extendedVatZoneHandle)
    {
      $this->extendedVatZoneHandle = $extendedVatZoneHandle;
      return $this;
    }

}
