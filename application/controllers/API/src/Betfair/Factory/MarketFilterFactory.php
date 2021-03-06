<?php
/**
 * This file is part of the Betfair library.
 *
 * (c) Daniele D'Angeli <dangeli88.daniele@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Betfair\Factory;

use Betfair\Model\MarketFilter;
use Betfair\Model\MarketFilterInterface;

class MarketFilterFactory implements MarketFilterFactoryInterface
{
    /**
     * @return MarketFilterInterface
     */
    public function create()
    {
        return new MarketFilter();
    }
}
