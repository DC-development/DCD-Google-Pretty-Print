<?php

/**
 * DC-GCPRETTIFY Default Template
 * 
 * @package    DCDevelopment.Joomla3.Modules
 * @subpackage Modules
 * @license    GNU/GPL, see LICENSE.php
 * @link       http://www.dc-development.de
 * mod_dcdgcprettify is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */

defined('_JEXEC') or die;

JHtml::_('jquery.framework');

$document = JFactory::getDocument();
$document->addStyleSheet("./modules/mod_dcdgcprettify/css/force-linenums.css");
$document->addScript("./modules/mod_dcdgcprettify/google-code-prettify/run_prettify.js?skin=".$params->get('theme'));

?>
