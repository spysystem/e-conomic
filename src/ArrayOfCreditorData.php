<?php

namespace Economic;

class ArrayOfCreditorData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CreditorData[] $CreditorData
     */
    protected $CreditorData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CreditorData[]
     */
    public function getCreditorData()
    {
      return $this->CreditorData;
    }

    /**
     * @param CreditorData[] $CreditorData
     * @return \Economic\ArrayOfCreditorData
     */
    public function setCreditorData(array $CreditorData = null)
    {
      $this->CreditorData = $CreditorData;
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
      return isset($this->CreditorData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CreditorData
     */
    public function offsetGet($offset)
    {
      return $this->CreditorData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CreditorData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->CreditorData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->CreditorData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CreditorData Return the current element
     */
    public function current()
    {
      return current($this->CreditorData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CreditorData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CreditorData);
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
      reset($this->CreditorData);
    }

    /**
     * Countable implementation
     *
     * @return CreditorData Return count of elements
     */
    public function count()
    {
      return count($this->CreditorData);
    }

}
