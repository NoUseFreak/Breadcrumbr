<?php
/**
 * This file is part of the Breadcrumbr package.
 *
 * (c) Dries De Peuter <dries@nousefreak.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Breadcrumbr\Trail;

use Breadcrumbr\Crumb\CrumbInterface;

/**
 * TrailInterface.
 *
 * @author Dries De Peuter <dries@nousefreak.be>
 */
interface TrailInterface extends \Iterator
{
    public function addCrumb(CrumbInterface $crumb);
    public function getCrumbs();
}
