<?php

namespace Economic;

class ArrayOfDistributionKeyHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DistributionKeyHandle[] $DistributionKeyHandle
     */
    protected $DistributionKeyHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DistributionKeyHandle[]
     */
    public function getDistributionKeyHandle()
    {
      return $this->DistributionKeyHandle;
    }

    /**
     * @param DistributionKeyHandle[] $DistributionKeyHandle
     * @return \Economic\ArrayOfDistributionKeyHandle
     */
    public function setDistributionKeyHandle(array $DistributionKeyHandle = null)
    {
      $this->DistributionKeyHandle = $DistributionKeyHandle;
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
      return isset($this->DistributionKeyHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DistributionKeyHandle
     */
    public function offsetGet($offset)
    {
      return $this->DistributionKeyHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DistributionKeyHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->DistributionKeyHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->DistributionKeyHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DistributionKeyHandle Return the current element
     */
    public function current()
    {
      return current($this->DistributionKeyHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DistributionKeyHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DistributionKeyHandle);
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
      reset($this->DistributionKeyHandle);
    }

    /**
     * Countable implementation
     *
     * @return DistributionKeyHandle Return count of elements
     */
    public function count()
    {
      return count($this->DistributionKeyHandle);
    }

}
