<?php

namespace Economic;

class Entry_GetTextResponse
{

    /**
     * @var string $Entry_GetTextResult
     */
    protected $Entry_GetTextResult = null;

    /**
     * @param string $Entry_GetTextResult
     */
    public function __construct($Entry_GetTextResult)
    {
      $this->Entry_GetTextResult = $Entry_GetTextResult;
    }

    /**
     * @return string
     */
    public function getEntry_GetTextResult()
    {
      return $this->Entry_GetTextResult;
    }

    /**
     * @param string $Entry_GetTextResult
     * @return \Economic\Entry_GetTextResponse
     */
    public function setEntry_GetTextResult($Entry_GetTextResult)
    {
      $this->Entry_GetTextResult = $Entry_GetTextResult;
      return $this;
    }

}
