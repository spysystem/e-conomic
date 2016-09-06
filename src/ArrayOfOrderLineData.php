<?php

namespace Economic;

class ArrayOfOrderLineData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var OrderLineData[] $OrderLineData
     */
    protected $OrderLineData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OrderLineData[]
     */
    public function getOrderLineData()
    {
      return $this->OrderLineData;
    }

    /**
     * @param OrderLineData[] $OrderLineData
     * @return \Economic\ArrayOfOrderLineData
     */
    public function setOrderLineData(array $OrderLineData = null)
    {
      $this->OrderLineData = $OrderLineData;
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
      return isset($this->OrderLineData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return OrderLineData
     */
    public function offsetGet($offset)
    {
      return $this->OrderLineData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param OrderLineData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->OrderLineData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->OrderLineData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return OrderLineData Return the current element
     */
    public function current()
    {
      return current($this->OrderLineData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->OrderLineData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->OrderLineData);
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
      reset($this->OrderLineData);
    }

    /**
     * Countable implementation
     *
     * @return OrderLineData Return count of elements
     */
    public function count()
    {
      return count($this->OrderLineData);
    }

}
