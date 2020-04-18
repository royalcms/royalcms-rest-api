<?php


namespace Royalcms\Component\RestApi;


class GeneralSiteData
{

    protected $name;

    protected $description;

    protected $url;

    protected $home;

    protected $gmt_offset;

    protected $timezone_string;

    protected $namespaces = [];

    protected $authentication = [];

    protected $routes = [];

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     *
     * @return GeneralSiteData
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     *
     * @return GeneralSiteData
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     *
     * @return GeneralSiteData
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getHome()
    {
        return $this->home;
    }

    /**
     * @param mixed $home
     *
     * @return GeneralSiteData
     */
    public function setHome($home)
    {
        $this->home = $home;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGmtOffset()
    {
        return $this->gmt_offset;
    }

    /**
     * @param mixed $gmt_offset
     *
     * @return GeneralSiteData
     */
    public function setGmtOffset($gmt_offset)
    {
        $this->gmt_offset = $gmt_offset;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTimezoneString()
    {
        return $this->timezone_string;
    }

    /**
     * @param mixed $timezone_string
     *
     * @return GeneralSiteData
     */
    public function setTimezoneString($timezone_string)
    {
        $this->timezone_string = $timezone_string;

        return $this;
    }

    /**
     * @return array
     */
    public function getNamespaces()
    {
        return $this->namespaces;
    }

    /**
     * @param array $namespaces
     *
     * @return GeneralSiteData
     */
    public function setNamespaces($namespaces)
    {
        $this->namespaces = $namespaces;

        return $this;
    }

    /**
     * @return array
     */
    public function getAuthentication()
    {
        return $this->authentication;
    }

    /**
     * @param array $authentication
     *
     * @return GeneralSiteData
     */
    public function setAuthentication($authentication)
    {
        $this->authentication = $authentication;

        return $this;
    }

    /**
     * @return array
     */
    public function getRoutes()
    {
        return $this->routes;
    }

    /**
     * @param array $routes
     *
     * @return GeneralSiteData
     */
    public function setRoutes($routes)
    {
        $this->routes = $routes;

        return $this;
    }

    public function toArray()
    {
        return [
            'name'            => $this->getName(),
            'description'     => $this->getDescription(),
            'url'             => $this->getUrl(),
            'home'            => $this->getHome(),
            'gmt_offset'      => $this->getGmtOffset(),
            'timezone_string' => $this->getTimezoneString(),
            'namespaces'      => $this->getNamespaces(),
            'authentication'  => $this->getAuthentication(),
            'routes'          => $this->getRoutes(),
        ];
    }
}