<?php

/*
 * This file is part of HasOffers PHP Client.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\HasOffers\Api\YeahMobi;

use DraperStudio\HasOffers\Base;

/**
 * Class ServiceProvider.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Stats extends Base
{
    /**
     * API Endpoint Type.
     *
     * @var string
     */
    protected $endpointType = 'YeahMobi';

    /**
     * API Endpoint Name.
     *
     * @var string
     */
    protected $endpointName = 'Stats';
    /**
     * Returns stats for a specified date range.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getStatsReport($parameters = [])
    {
        return $this->get('stats/stats', $parameters);
    }

    /**
     * Returns stats for a specified date range.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getConversionReport($parameters = [])
    {
        return $this->get('stats/lead_report', $parameters);
    }
}
