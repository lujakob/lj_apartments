<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Apartmentlist',
	'Zimmer Liste'
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Pricelist',
	'Preisliste'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'LJ Zimmer');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ljapartment_domain_model_apartment');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ljapartment_domain_model_config');

$TCA['tt_content']['types']['list']['subtypes_excludelist']['ljapartment_apartmentlist'] = 'layout,select_key';
$TCA['tt_content']['types']['list']['subtypes_addlist']['ljapartment_apartmentlist'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('ljapartment_apartmentlist', 'FILE:EXT:'.$_EXTKEY.'/Configuration/FlexForms/ApartmentList.xml');


$TCA['tt_content']['types']['list']['subtypes_excludelist']['ljapartment_pricelist'] = 'layout,select_key';
$TCA['tt_content']['types']['list']['subtypes_addlist']['ljapartment_pricelist'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('ljapartment_pricelist', 'FILE:EXT:'.$_EXTKEY.'/Configuration/FlexForms/ApartmentList.xml');


