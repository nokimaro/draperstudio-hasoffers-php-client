<?php

/*
 * This file is part of HasOffers PHP Client.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\HasOffers\Api\Affiliate;

use DraperStudio\HasOffers\Base;

/**
 * Class ServiceProvider.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class RingRevenue extends Base
{
    /**
     * API Endpoint Type.
     *
     * @var string
     */
    protected $endpointType = 'Affiliate';

    /**
     * API Endpoint Name.
     *
     * @var string
     */
    protected $endpointName = 'RingRevenue';
    /**
     * Returns an Affiliate login url for an Offer that utilizes RingRevenue.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function createAffiliateLoginUrl($parameters = [])
    {
        return $this->get('createAffiliateLoginUrl', $parameters);
    }
}
