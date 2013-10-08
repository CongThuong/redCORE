<?php
/**
 * @package     Redcore
 * @subpackage  Layouts
 *
 * @copyright   Copyright (C) 2012 - 2013 redCOMPONENT.com. All rights reserved.
 * @license     GNU General Public License version 2 or later, see LICENSE.
 */

defined('JPATH_REDCORE') or die;

$data = (object) $displayData;

$options = !empty($data->field->ajaxchildOptions) ? $data->field->ajaxchildOptions : array();

// We won't load anything if it's not going to work
if (!empty($options['ajaxUrl']))
{
	$options['formSelector'] = isset($options['formSelector']) ? $options['formSelector'] : '#adminForm';

	JHtml::_('rjquery.childlist', $options['formSelector'], $options);
}

// Render the standard select
echo RLayoutHelper::render('fields.rlist', $data);
