<?php

/**
 * @package     Joomla.Site
 * @subpackage  mod_rodape
 *
 * @copyright   (C) 2009 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace DevQuanto\Module\Rodape\Site\Helper;

// phpcs:disable PSR1.Files.SideEffects
\defined('_JEXEC') or die;
// phpcs:enable PSR1.Files.SideEffects

class RodapeHelper
{
    public static function getCurrentYear(): string
    {
        return date('Y');
    }
}
