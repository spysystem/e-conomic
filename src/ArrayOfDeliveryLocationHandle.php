<?php

namespace Economic;

class ArrayOfDeliveryLocationHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DeliveryLocationHandle[] $DeliveryLocationHandle
     */
    protected $DeliveryLocationHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DeliveryLocationHandle[]
     */
    public function getDeliveryLocationHandle()
    {
      return $this->DeliveryLocationHandle;
    }

    /**
     * @param DeliveryLocationHandle[] $DeliveryLocationHandle
     * @return \Economic\ArrayOfDeliveryLocationHandle
     */
    public function setDeliveryLocationHandle(array $DeliveryLocationHandle = null)
    {
      $this->DeliveryLocationHandle = $DeliveryLocationHandle;
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
      return isset($this->DeliveryLocationHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DeliveryLocationHandle
     */
    public function offsetGet($offset)
    {
      return $this->DeliveryLocationHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DeliveryLocationHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->DeliveryLocationHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->DeliveryLocationHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DeliveryLocationHandle Return the current element
     */
    public function current()
    {
      return current($this->DeliveryLocationHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DeliveryLocationHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DeliveryLocationHandle);
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
      reset($this->DeliveryLocationHandle);
    }

    /**
     * Countable implementation
     *
     * @return DeliveryLocationHandle Return count of elements
     */
    public function count()
    {
      return count($this->DeliveryLocationHandle);
    }

}
