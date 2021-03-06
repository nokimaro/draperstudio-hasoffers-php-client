<?php

/*
 * This file is part of HasOffers PHP Client.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\HasOffers\Api\Affiliate\Offer;

use DraperStudio\HasOffers\Base;

/**
 * Class ServiceProvider.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Targeting extends Base
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
    protected $endpointName = 'OfferTargeting';
    /**
     * Returns all TargetRuleOffers (with TargetRule attached) for the specified Offer.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getRuleTargetingForOffer($parameters = [])
    {
        return $this->get('getRuleTargetingForOffer', $parameters);
    }
}
