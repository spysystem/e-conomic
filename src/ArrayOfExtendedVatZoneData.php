<?php

namespace Economic;

class ArrayOfExtendedVatZoneData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ExtendedVatZoneData[] $ExtendedVatZoneData
     */
    protected $ExtendedVatZoneData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ExtendedVatZoneData[]
     */
    public function getExtendedVatZoneData()
    {
      return $this->ExtendedVatZoneData;
    }

    /**
     * @param ExtendedVatZoneData[] $ExtendedVatZoneData
     * @return \Economic\ArrayOfExtendedVatZoneData
     */
    public function setExtendedVatZoneData(array $ExtendedVatZoneData = null)
    {
      $this->ExtendedVatZoneData = $ExtendedVatZoneData;
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
      return isset($this->ExtendedVatZoneData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ExtendedVatZoneData
     */
    public function offsetGet($offset)
    {
      return $this->ExtendedVatZoneData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ExtendedVatZoneData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ExtendedVatZoneData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ExtendedVatZoneData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ExtendedVatZoneData Return the current element
     */
    public function current()
    {
      return current($this->ExtendedVatZoneData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ExtendedVatZoneData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ExtendedVatZoneData);
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
      reset($this->ExtendedVatZoneData);
    }

    /**
     * Countable implementation
     *
     * @return ExtendedVatZoneData Return count of elements
     */
    public function count()
    {
      return count($this->ExtendedVatZoneData);
    }

}
