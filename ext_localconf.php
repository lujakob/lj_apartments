<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'LuJa.' . $_EXTKEY,
	'Apartmentlist',
	array(
		'Apartment' => 'list',
		
	),
	// non-cacheable actions
	array(
		'Apartment' => '',
		
	)
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'LuJa.' . $_EXTKEY,
	'Pricelist',
	array(
		'Apartment' => 'priceList',

	),
	// non-cacheable actions
	array(
		'Apartment' => '',

	)
);