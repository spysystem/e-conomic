<?php

namespace Economic;

class ArrayOfCreditorContactData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CreditorContactData[] $CreditorContactData
     */
    protected $CreditorContactData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CreditorContactData[]
     */
    public function getCreditorContactData()
    {
      return $this->CreditorContactData;
    }

    /**
     * @param CreditorContactData[] $CreditorContactData
     * @return \Economic\ArrayOfCreditorContactData
     */
    public function setCreditorContactData(array $CreditorContactData = null)
    {
      $this->CreditorContactData = $CreditorContactData;
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
      return isset($this->CreditorContactData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CreditorContactData
     */
    public function offsetGet($offset)
    {
      return $this->CreditorContactData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CreditorContactData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->CreditorContactData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->CreditorContactData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CreditorContactData Return the current element
     */
    public function current()
    {
      return current($this->CreditorContactData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CreditorContactData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CreditorContactData);
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
      reset($this->CreditorContactData);
    }

    /**
     * Countable implementation
     *
     * @return CreditorContactData Return count of elements
     */
    public function count()
    {
      return count($this->CreditorContactData);
    }

}
