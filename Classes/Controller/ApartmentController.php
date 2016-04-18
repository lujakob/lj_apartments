<?php
namespace LuJa\LjApartment\Controller;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015 Lukas Jakob
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * ApartmentController
 */
class ApartmentController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * apartmentRepository
	 *
	 * @var \LuJa\LjApartment\Domain\Repository\ApartmentRepository
	 * @inject
	 */
	protected $apartmentRepository = NULL;

	/**
	 * configRepository
	 *
	 * @var \LuJa\LjApartment\Domain\Repository\ConfigRepository
	 * @inject
	 */
	protected $configRepository = NULL;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$apartments = $this->apartmentRepository->findAllByUids($this->settings['apartments']);
		$config = $this->configRepository->findAll()->getFirst();

		$this->view->assign('apartments', $apartments);
		$this->view->assign('config', $config);
	}

	/**
	 * action list
	 *
	 * @return void
	 */
	public function priceListAction() {
		$apartments = $this->apartmentRepository->findAllByUids($this->settings['apartments']);
		$config = $this->configRepository->findAll()->getFirst();

		$this->view->assign('apartments', $apartments);
		$this->view->assign('config', $config);
	}

	/**
	 * @return string
	 */
	public function renderApartmentItemsForForm(){
//		$this->apartmentRepository->setDefaultOrderings(array('sorting' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING));
//		$apartments = $this->apartmentRepository->findAll();

		$apartments = $GLOBALS['TYPO3_DB']->exec_SELECTgetRows('uid, title, sub_title', 'tx_ljapartment_domain_model_apartment', 'hidden = 0 AND deleted = 0', '', 'sorting ASC');
		$content = '<select name="formhandler[apartment]"><option value="allgemein">allgemein</option>';

		foreach($apartments as $apartment) {
			$content .= '<option value="' . $apartment['title'] . ' ' . $apartment['sub_title'] . '">' . $apartment['title'] . ' ' . $apartment['sub_title'] . '</option>';
		}
		$content .= '</select>';

		return $content;
	}

}