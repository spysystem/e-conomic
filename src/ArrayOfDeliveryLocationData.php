<?php

namespace Economic;

class ArrayOfDeliveryLocationData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DeliveryLocationData[] $DeliveryLocationData
     */
    protected $DeliveryLocationData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DeliveryLocationData[]
     */
    public function getDeliveryLocationData()
    {
      return $this->DeliveryLocationData;
    }

    /**
     * @param DeliveryLocationData[] $DeliveryLocationData
     * @return \Economic\ArrayOfDeliveryLocationData
     */
    public function setDeliveryLocationData(array $DeliveryLocationData = null)
    {
      $this->DeliveryLocationData = $DeliveryLocationData;
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
      return isset($this->DeliveryLocationData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DeliveryLocationData
     */
    public function offsetGet($offset)
    {
      return $this->DeliveryLocationData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DeliveryLocationData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->DeliveryLocationData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->DeliveryLocationData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DeliveryLocationData Return the current element
     */
    public function current()
    {
      return current($this->DeliveryLocationData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DeliveryLocationData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DeliveryLocationData);
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
      reset($this->DeliveryLocationData);
    }

    /**
     * Countable implementation
     *
     * @return DeliveryLocationData Return count of elements
     */
    public function count()
    {
      return count($this->DeliveryLocationData);
    }

}
