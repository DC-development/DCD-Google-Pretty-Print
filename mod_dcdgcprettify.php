<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_dcdgcprettify
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

require_once dirname(__FILE__) . '/helper.php';

ModDCDGCPrettify::getPrettify();

require JModuleHelper::getLayoutPath('mod_dcdgcprettify' , 'default');
