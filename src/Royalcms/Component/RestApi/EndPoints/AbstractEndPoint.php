<?php
namespace Royalcms\Component\RestApi\EndPoints;

abstract class AbstractEndPoint
{

    protected $callback;

    protected $methods;

    protected $args;

    /**
     * @return mixed
     */
    public function getCallback()
    {
        return $this->callback;
    }

    /**
     * @param mixed $callback
     *
     * @return \Royalcms\Component\RestApi\EndPoints\AbstractEndPoint
     */
    public function setCallback($callback)
    {
        $this->callback = $callback;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMethods()
    {
        return $this->methods;
    }

    /**
     * @param mixed $methods
     *
     * @return \Royalcms\Component\RestApi\EndPoints\AbstractEndPoint
     */
    public function setMethods($methods)
    {
        $this->methods = $methods;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getArgs()
    {
        return $this->args;
    }

    /**
     * @param mixed $args
     *
     * @return \Royalcms\Component\RestApi\EndPoints\AbstractEndPoint
     */
    public function setArgs($args)
    {
        $this->args = $args;
        return $this;
    }




}