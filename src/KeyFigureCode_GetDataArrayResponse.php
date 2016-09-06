<?php

namespace Economic;

class KeyFigureCode_GetDataArrayResponse
{

    /**
     * @var ArrayOfKeyFigureCodeData $KeyFigureCode_GetDataArrayResult
     */
    protected $KeyFigureCode_GetDataArrayResult = null;

    /**
     * @param ArrayOfKeyFigureCodeData $KeyFigureCode_GetDataArrayResult
     */
    public function __construct($KeyFigureCode_GetDataArrayResult)
    {
      $this->KeyFigureCode_GetDataArrayResult = $KeyFigureCode_GetDataArrayResult;
    }

    /**
     * @return ArrayOfKeyFigureCodeData
     */
    public function getKeyFigureCode_GetDataArrayResult()
    {
      return $this->KeyFigureCode_GetDataArrayResult;
    }

    /**
     * @param ArrayOfKeyFigureCodeData $KeyFigureCode_GetDataArrayResult
     * @return \Economic\KeyFigureCode_GetDataArrayResponse
     */
    public function setKeyFigureCode_GetDataArrayResult($KeyFigureCode_GetDataArrayResult)
    {
      $this->KeyFigureCode_GetDataArrayResult = $KeyFigureCode_GetDataArrayResult;
      return $this;
    }

}
