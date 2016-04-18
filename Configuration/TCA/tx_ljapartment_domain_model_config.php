<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

return array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:lj_apartment/Resources/Private/Language/locallang_db.xlf:tx_ljapartment_domain_model_config',
		'label' => 'season1',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'sortby' => 'sorting',

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'season1, season2, season3, season4, range1, range2, range3, range4',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('lj_apartment') . 'Resources/Public/Icons/tx_ljapartment_domain_model_config.gif'
	),

	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, season1, range1, season2, range2, season3, range3, season4, range4'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(

		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_ljapartment_domain_model_config',
				'foreign_table_where' => 'AND tx_ljapartment_domain_model_config.pid=###CURRENT_PID### AND tx_ljapartment_domain_model_config.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),

		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),

		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),

		'season1' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lj_apartment/Resources/Private/Language/locallang_db.xlf:tx_ljapartment_domain_model_config.season1',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'season2' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lj_apartment/Resources/Private/Language/locallang_db.xlf:tx_ljapartment_domain_model_config.season2',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'season3' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lj_apartment/Resources/Private/Language/locallang_db.xlf:tx_ljapartment_domain_model_config.season3',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'season4' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lj_apartment/Resources/Private/Language/locallang_db.xlf:tx_ljapartment_domain_model_config.season4',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'range1' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lj_apartment/Resources/Private/Language/locallang_db.xlf:tx_ljapartment_domain_model_config.range1',
			'config' => array(
				'type' => 'text',
				'cols' => '40',
				'rows' => '15',
			),
		),
		'range2' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lj_apartment/Resources/Private/Language/locallang_db.xlf:tx_ljapartment_domain_model_config.range2',
			'config' => array(
				'type' => 'text',
				'cols' => '40',
				'rows' => '15',
			),
		),
		'range3' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lj_apartment/Resources/Private/Language/locallang_db.xlf:tx_ljapartment_domain_model_config.range3',
			'config' => array(
				'type' => 'text',
				'cols' => '40',
				'rows' => '15',
			),
		),
		'range4' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lj_apartment/Resources/Private/Language/locallang_db.xlf:tx_ljapartment_domain_model_config.range4',
			'config' => array(
				'type' => 'text',
				'cols' => '40',
				'rows' => '15',
			),
		),

	)
);