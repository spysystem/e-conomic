<?php

namespace Economic;

class ArrayOfCreditorGroupData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CreditorGroupData[] $CreditorGroupData
     */
    protected $CreditorGroupData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CreditorGroupData[]
     */
    public function getCreditorGroupData()
    {
      return $this->CreditorGroupData;
    }

    /**
     * @param CreditorGroupData[] $CreditorGroupData
     * @return \Economic\ArrayOfCreditorGroupData
     */
    public function setCreditorGroupData(array $CreditorGroupData = null)
    {
      $this->CreditorGroupData = $CreditorGroupData;
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
      return isset($this->CreditorGroupData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CreditorGroupData
     */
    public function offsetGet($offset)
    {
      return $this->CreditorGroupData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CreditorGroupData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->CreditorGroupData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->CreditorGroupData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CreditorGroupData Return the current element
     */
    public function current()
    {
      return current($this->CreditorGroupData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CreditorGroupData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CreditorGroupData);
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
      reset($this->CreditorGroupData);
    }

    /**
     * Countable implementation
     *
     * @return CreditorGroupData Return count of elements
     */
    public function count()
    {
      return count($this->CreditorGroupData);
    }

}
