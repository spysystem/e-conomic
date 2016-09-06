<?php

namespace Economic;

class MileageEntry_GetApprovedResponse
{

    /**
     * @var boolean $MileageEntry_GetApprovedResult
     */
    protected $MileageEntry_GetApprovedResult = null;

    /**
     * @param boolean $MileageEntry_GetApprovedResult
     */
    public function __construct($MileageEntry_GetApprovedResult)
    {
      $this->MileageEntry_GetApprovedResult = $MileageEntry_GetApprovedResult;
    }

    /**
     * @return boolean
     */
    public function getMileageEntry_GetApprovedResult()
    {
      return $this->MileageEntry_GetApprovedResult;
    }

    /**
     * @param boolean $MileageEntry_GetApprovedResult
     * @return \Economic\MileageEntry_GetApprovedResponse
     */
    public function setMileageEntry_GetApprovedResult($MileageEntry_GetApprovedResult)
    {
      $this->MileageEntry_GetApprovedResult = $MileageEntry_GetApprovedResult;
      return $this;
    }

}
