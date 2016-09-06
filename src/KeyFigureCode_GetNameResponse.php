<?php

namespace Economic;

class KeyFigureCode_GetNameResponse
{

    /**
     * @var string $KeyFigureCode_GetNameResult
     */
    protected $KeyFigureCode_GetNameResult = null;

    /**
     * @param string $KeyFigureCode_GetNameResult
     */
    public function __construct($KeyFigureCode_GetNameResult)
    {
      $this->KeyFigureCode_GetNameResult = $KeyFigureCode_GetNameResult;
    }

    /**
     * @return string
     */
    public function getKeyFigureCode_GetNameResult()
    {
      return $this->KeyFigureCode_GetNameResult;
    }

    /**
     * @param string $KeyFigureCode_GetNameResult
     * @return \Economic\KeyFigureCode_GetNameResponse
     */
    public function setKeyFigureCode_GetNameResult($KeyFigureCode_GetNameResult)
    {
      $this->KeyFigureCode_GetNameResult = $KeyFigureCode_GetNameResult;
      return $this;
    }

}
