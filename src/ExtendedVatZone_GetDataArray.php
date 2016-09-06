<?php

namespace Economic;

class ExtendedVatZone_GetDataArray
{

    /**
     * @var ArrayOfExtendedVatZoneHandle $extendedVatZoneHandles
     */
    protected $extendedVatZoneHandles = null;

    /**
     * @param ArrayOfExtendedVatZoneHandle $extendedVatZoneHandles
     */
    public function __construct($extendedVatZoneHandles)
    {
      $this->extendedVatZoneHandles = $extendedVatZoneHandles;
    }

    /**
     * @return ArrayOfExtendedVatZoneHandle
     */
    public function getExtendedVatZoneHandles()
    {
      return $this->extendedVatZoneHandles;
    }

    /**
     * @param ArrayOfExtendedVatZoneHandle $extendedVatZoneHandles
     * @return \Economic\ExtendedVatZone_GetDataArray
     */
    public function setExtendedVatZoneHandles($extendedVatZoneHandles)
    {
      $this->extendedVatZoneHandles = $extendedVatZoneHandles;
      return $this;
    }

}
