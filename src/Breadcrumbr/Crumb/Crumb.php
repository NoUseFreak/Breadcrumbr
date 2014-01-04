<?php
/**
 * This file is part of the Breadcrumbr package.
 *
 * (c) Dries De Peuter <dries@nousefreak.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Breadcrumbr\Crumb;

/**
 * Crumb.
 *
 * @author Dries De Peuter <dries@nousefreak.be>
 */
class Crumb implements CrumbInterface
{
    /**
     * @var string
     */
    protected $label;

    /**
     * @param  string $label
     * @return CrumbInterface
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }
}
