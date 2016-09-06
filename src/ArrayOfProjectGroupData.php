<?php

namespace Economic;

class ArrayOfProjectGroupData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProjectGroupData[] $ProjectGroupData
     */
    protected $ProjectGroupData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProjectGroupData[]
     */
    public function getProjectGroupData()
    {
      return $this->ProjectGroupData;
    }

    /**
     * @param ProjectGroupData[] $ProjectGroupData
     * @return \Economic\ArrayOfProjectGroupData
     */
    public function setProjectGroupData(array $ProjectGroupData = null)
    {
      $this->ProjectGroupData = $ProjectGroupData;
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
      return isset($this->ProjectGroupData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProjectGroupData
     */
    public function offsetGet($offset)
    {
      return $this->ProjectGroupData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProjectGroupData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ProjectGroupData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ProjectGroupData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProjectGroupData Return the current element
     */
    public function current()
    {
      return current($this->ProjectGroupData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProjectGroupData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProjectGroupData);
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
      reset($this->ProjectGroupData);
    }

    /**
     * Countable implementation
     *
     * @return ProjectGroupData Return count of elements
     */
    public function count()
    {
      return count($this->ProjectGroupData);
    }

}
