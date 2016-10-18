<?php

/*
 * This file is part of HasOffers PHP Client.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\HasOffers\Api\Brand\Custom;

use DraperStudio\HasOffers\Base;

/**
 * Class ServiceProvider.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class MenuLink extends Base
{
    /**
     * API Endpoint Type.
     *
     * @var string
     */
    protected $endpointType = 'Brand';

    /**
     * API Endpoint Name.
     *
     * @var string
     */
    protected $endpointName = 'CustomMenuLink';
    /**
     * Find all custom menu links.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function find($parameters = [])
    {
        return $this->get('find', $parameters);
    }

    /**
     * Finds all active menu links.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findActive($parameters = [])
    {
        return $this->get('findActive', $parameters);
    }
}
