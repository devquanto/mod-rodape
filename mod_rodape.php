<?php

/**
 * @package     Joomla.Site
 * @subpackage  mod_rodape
 *
 * @copyright   (C) 2005 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;

require ModuleHelper::getLayoutPath(
    'mod_rodape',
    $params->get('layout', 'default')
);
