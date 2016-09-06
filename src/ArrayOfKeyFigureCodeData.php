<?php

namespace Economic;

class ArrayOfKeyFigureCodeData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var KeyFigureCodeData[] $KeyFigureCodeData
     */
    protected $KeyFigureCodeData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeyFigureCodeData[]
     */
    public function getKeyFigureCodeData()
    {
      return $this->KeyFigureCodeData;
    }

    /**
     * @param KeyFigureCodeData[] $KeyFigureCodeData
     * @return \Economic\ArrayOfKeyFigureCodeData
     */
    public function setKeyFigureCodeData(array $KeyFigureCodeData = null)
    {
      $this->KeyFigureCodeData = $KeyFigureCodeData;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->KeyFigureCodeData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KeyFigureCodeData
     */
    public function offsetGet($offset)
    {
      return $this->KeyFigureCodeData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KeyFigureCodeData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->KeyFigureCodeData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->KeyFigureCodeData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return KeyFigureCodeData Return the current element
     */
    public function current()
    {
      return current($this->KeyFigureCodeData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->KeyFigureCodeData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->KeyFigureCodeData);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->KeyFigureCodeData);
    }

    /**
     * Countable implementation
     *
     * @return KeyFigureCodeData Return count of elements
     */
    public function count()
    {
      return count($this->KeyFigureCodeData);
    }

}
