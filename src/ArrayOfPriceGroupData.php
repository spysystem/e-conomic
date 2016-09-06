<?php

namespace Economic;

class ArrayOfPriceGroupData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PriceGroupData[] $PriceGroupData
     */
    protected $PriceGroupData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PriceGroupData[]
     */
    public function getPriceGroupData()
    {
      return $this->PriceGroupData;
    }

    /**
     * @param PriceGroupData[] $PriceGroupData
     * @return \Economic\ArrayOfPriceGroupData
     */
    public function setPriceGroupData(array $PriceGroupData = null)
    {
      $this->PriceGroupData = $PriceGroupData;
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
      return isset($this->PriceGroupData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PriceGroupData
     */
    public function offsetGet($offset)
    {
      return $this->PriceGroupData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PriceGroupData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->PriceGroupData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->PriceGroupData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PriceGroupData Return the current element
     */
    public function current()
    {
      return current($this->PriceGroupData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PriceGroupData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PriceGroupData);
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
      reset($this->PriceGroupData);
    }

    /**
     * Countable implementation
     *
     * @return PriceGroupData Return count of elements
     */
    public function count()
    {
      return count($this->PriceGroupData);
    }

}
