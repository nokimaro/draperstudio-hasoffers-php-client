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
class Report extends Base
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
    protected $endpointName = 'Report';
    /**
     * Get Affiliate Commission Report for the calling Affiliate.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getAffiliateCommissions($parameters = [])
    {
        return $this->get('getAffiliateCommissions', $parameters);
    }

    /**
     * Returns a list of all active Affiliates referred by the calling Affiliate.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getAffiliateReferrals($parameters = [])
    {
        return $this->get('getAffiliateReferrals', $parameters);
    }

    /**
     * Get Conversions Report.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getConversions($parameters = [])
    {
        return $this->get('getConversions', $parameters);
    }

    /**
     * Get Stats Report.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getStats($parameters = [])
    {
        return $this->get('getStats', $parameters);
    }
}
