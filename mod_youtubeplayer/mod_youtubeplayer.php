<?php
defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;

$videoid = $params->get('videoid', 'dQw4w9WgXcQ');
$width   = $params->get('width', '560');
$height  = $params->get('height', '315');

require ModuleHelper::getLayoutPath('mod_youtubeplayer');
