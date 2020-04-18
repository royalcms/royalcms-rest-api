<?php


namespace Royalcms\Component\RestApi\Controllers;


use RC_Hook;
use Royalcms\Component\RestApi\GeneralSiteData;
use Royalcms\Component\RestApi\RESTResponse;

class IndexController
{


    /**
     * Retrieves the site index.
     *
     * This endpoint describes the capabilities of the site.
     *
     * @since 4.4.0
     *
     * @param array $request {
     *     Request.
     *
     *     @type string $context Context.
     * }
     * @return RESTResponse The API root index data.
     */
    public function get_index( $request )
    {
        // General site data.
//        $available = array(
//            'name'            => get_option( 'blogname' ),
//            'description'     => get_option( 'blogdescription' ),
//            'url'             => get_option( 'siteurl' ),
//            'home'            => home_url(),
//            'gmt_offset'      => get_option( 'gmt_offset' ),
//            'timezone_string' => get_option( 'timezone_string' ),
//            'namespaces'      => array_keys( $this->namespaces ),
//            'authentication'  => array(),
//            'routes'          => $this->get_data_for_routes( $this->get_routes(), $request['context'] ),
//        );

        $available = (new GeneralSiteData())->setName('')
                ->setDescription('')
                ->setUrl('')
                ->setHome('')
                ->setHome('')
                ->setGmtOffset('')
                ->setTimezoneString('')
                ->setNamespaces('')
                ->setAuthentication('')
                ->setRoutes('')
                ->toArray();


        $response = new RESTResponse( $available );

        $response->add_link( 'help', 'http://v2.wp-api.org/' );

        /**
         * Filters the API root index data.
         *
         * This contains the data describing the API. This includes information
         * about supported authentication schemes, supported namespaces, routes
         * available on the API, and a small amount of data about the site.
         *
         * @since 4.4.0
         *
         * @param RESTResponse $response Response data.
         */
        return RC_Hook::apply_filters( 'rest_index', $response );
    }

}