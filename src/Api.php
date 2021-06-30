<?php
/*
 * Copyright (C) 2021 Henrique Lima da Costa Pereira
 *
 * SPDX-License-Identifier: Apache-2.0
 */

namespace GeoIPSDK;

use GeoIPSDK\Api\City;
use GeoIPSDK\Api\Country;
use GeoIPSDK\Api\Region;

final class Api {

    /**
     * @var City $city;
     */
    protected $city;

    /**
     * @var Country $country;
     */
    protected $country;

    /**
     * @var Region $region;
     */
    protected $region;

    /**
     * @return Marketplace
     */

    /**
     * @param Seller $seller
     * @return $this
     */
    public function setCity(City $city) : Api
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @param Seller $seller
     * @return $this
     */
    public function setCountry(Country $country) : Api
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @param Seller $seller
     * @return $this
     */
    public function setRegion(Region $region) : Api
    {
        $this->region = $region;
        return $this;
    }

    public function getCity() : City 
    {
        return $this->city;
    }
    /**
     * @return Marketplace
     */
    public function getCountry() : Country 
    {
        return $this->country;
    }
    /**
     * @return Marketplace
     */
    public function getRegion() : Region 
    {
        return $this->region;
    }
}
