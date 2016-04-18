<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

return array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:lj_apartment/Resources/Private/Language/locallang_db.xlf:tx_ljapartment_domain_model_apartment',
		'label' => 'title',
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
		'searchFields' => 'title,sub_title,size,capacity,description,bodytext,price1,price2,price3,floor_plan,images,',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('lj_apartment') . 'Resources/Public/Icons/tx_ljapartment_domain_model_apartment.gif'
	),

	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, sub_title, size, capacity, floor_plan, description, bodytext, price1, price2, price3, floor_plan, images',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, title, sub_title, size, capacity, floor_plan, description;;;richtext:rte_transform[mode=ts_links], bodytext;;;richtext:rte_transform[mode=ts_links], price1, price2, price3, price4,  image, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
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
				'foreign_table' => 'tx_ljapartment_domain_model_apartment',
				'foreign_table_where' => 'AND tx_ljapartment_domain_model_apartment.pid=###CURRENT_PID### AND tx_ljapartment_domain_model_apartment.sys_language_uid IN (-1,0)',
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

		'title' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lj_apartment/Resources/Private/Language/locallang_db.xlf:tx_ljapartment_domain_model_apartment.title',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'sub_title' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lj_apartment/Resources/Private/Language/locallang_db.xlf:tx_ljapartment_domain_model_apartment.sub_title',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'size' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lj_apartment/Resources/Private/Language/locallang_db.xlf:tx_ljapartment_domain_model_apartment.size',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'capacity' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lj_apartment/Resources/Private/Language/locallang_db.xlf:tx_ljapartment_domain_model_apartment.capacity',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'description' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lj_apartment/Resources/Private/Language/locallang_db.xlf:tx_ljapartment_domain_model_apartment.description',
			'config' => array(
				'type' => 'text',
				'cols' => '80',
				'rows' => '15',
				'wizards' => array(
					'RTE' => array(
						'notNewRecords' => 1,
						'RTEonly' => 1,
						'type' => 'script',
						'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext.W.RTE',
						'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_rte.gif',
						'module' => array(
							'name' => 'wizard_rte'
						)
					),
					'table' => array(
						'notNewRecords' => 1,
						'enableByTypeConfig' => 1,
						'type' => 'script',
						'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext.W.table',
						'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_table.gif',
						'module' => array(
							'name' => 'wizard_table'
						),
						'params' => array(
							'xmlOutput' => 0
						)
					)
				),
				'softref' => 'typolink_tag,images,email[subst],url',
				'search' => array(
					'andWhere' => 'CType=\'text\' OR CType=\'textpic\''
				)
			)
		),
		'bodytext' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lj_apartment/Resources/Private/Language/locallang_db.xlf:tx_ljapartment_domain_model_apartment.bodytext',
			'config' => array(
				'type' => 'text',
				'cols' => '80',
				'rows' => '15',
				'wizards' => array(
					'RTE' => array(
						'notNewRecords' => 1,
						'RTEonly' => 1,
						'type' => 'script',
						'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext.W.RTE',
						'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_rte.gif',
						'module' => array(
							'name' => 'wizard_rte'
						)
					),
					'table' => array(
						'notNewRecords' => 1,
						'enableByTypeConfig' => 1,
						'type' => 'script',
						'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext.W.table',
						'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_table.gif',
						'module' => array(
							'name' => 'wizard_table'
						),
						'params' => array(
							'xmlOutput' => 0
						)
					)
				),
				'softref' => 'typolink_tag,images,email[subst],url',
				'search' => array(
					'andWhere' => 'CType=\'text\' OR CType=\'textpic\''
				)
			)
		),
		'price1' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lj_apartment/Resources/Private/Language/locallang_db.xlf:tx_ljapartment_domain_model_apartment.price1',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'price2' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lj_apartment/Resources/Private/Language/locallang_db.xlf:tx_ljapartment_domain_model_apartment.price2',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'price3' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lj_apartment/Resources/Private/Language/locallang_db.xlf:tx_ljapartment_domain_model_apartment.price3',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'price4' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lj_apartment/Resources/Private/Language/locallang_db.xlf:tx_ljapartment_domain_model_apartment.price4',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),

		'floor_plan' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lj_apartment/Resources/Private/Language/locallang_db.xlf:tx_ljapartment_domain_model_apartment.floor_plan',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'floorPlan',
				array('maxitems' => 1),
				$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
		),
		'image' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.images',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig('image', array(
				'appearance' => array(
					'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
				),
				// custom configuration for displaying fields in the overlay/reference table
				// to use the imageoverlayPalette instead of the basicoverlayPalette
				'foreign_types' => array(
					'0' => array(
						'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
					),
					\TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => array(
						'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
					),
					\TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => array(
						'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
					),
					\TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => array(
						'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.audioOverlayPalette;audioOverlayPalette,
							--palette--;;filePalette'
					),
					\TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => array(
						'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.videoOverlayPalette;videoOverlayPalette,
							--palette--;;filePalette'
					),
					\TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => array(
						'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
					)
				)
			), $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'])
		),
	)
);