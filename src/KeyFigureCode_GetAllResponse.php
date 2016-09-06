<?php

namespace Economic;

class KeyFigureCode_GetAllResponse
{

    /**
     * @var ArrayOfKeyFigureCodeHandle $KeyFigureCode_GetAllResult
     */
    protected $KeyFigureCode_GetAllResult = null;

    /**
     * @param ArrayOfKeyFigureCodeHandle $KeyFigureCode_GetAllResult
     */
    public function __construct($KeyFigureCode_GetAllResult)
    {
      $this->KeyFigureCode_GetAllResult = $KeyFigureCode_GetAllResult;
    }

    /**
     * @return ArrayOfKeyFigureCodeHandle
     */
    public function getKeyFigureCode_GetAllResult()
    {
      return $this->KeyFigureCode_GetAllResult;
    }

    /**
     * @param ArrayOfKeyFigureCodeHandle $KeyFigureCode_GetAllResult
     * @return \Economic\KeyFigureCode_GetAllResponse
     */
    public function setKeyFigureCode_GetAllResult($KeyFigureCode_GetAllResult)
    {
      $this->KeyFigureCode_GetAllResult = $KeyFigureCode_GetAllResult;
      return $this;
    }

}
