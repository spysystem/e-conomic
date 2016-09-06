<?php

namespace Economic;

class ArrayOfOrderData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var OrderData[] $OrderData
     */
    protected $OrderData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OrderData[]
     */
    public function getOrderData()
    {
      return $this->OrderData;
    }

    /**
     * @param OrderData[] $OrderData
     * @return \Economic\ArrayOfOrderData
     */
    public function setOrderData(array $OrderData = null)
    {
      $this->OrderData = $OrderData;
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
      return isset($this->OrderData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return OrderData
     */
    public function offsetGet($offset)
    {
      return $this->OrderData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param OrderData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->OrderData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->OrderData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return OrderData Return the current element
     */
    public function current()
    {
      return current($this->OrderData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->OrderData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->OrderData);
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
      reset($this->OrderData);
    }

    /**
     * Countable implementation
     *
     * @return OrderData Return count of elements
     */
    public function count()
    {
      return count($this->OrderData);
    }

}
