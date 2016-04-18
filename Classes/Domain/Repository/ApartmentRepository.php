<?php
namespace LuJa\LjApartment\Domain\Repository;


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
 * The repository for Apartments
 */
class ApartmentRepository extends \TYPO3\CMS\Extbase\Persistence\Repository {

	/**
	 * Returns all objects of this repository.
	 *
	 * @return QueryResultInterface|array
	 * @api
	 */
	public function findAllForViewHelper() {
		$query = $this->createQuery();
		$query->getQuerySettings()->setRespectStoragePage(FALSE);

		return $query->execute();
	}

	/**
	 * find all gallery items by uids
	 *
	 * @param string $uids		comma separated list of uids
	 * @return array|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface
	 */
	public function findAllByUids($uids = '') {

		$uidArray = explode(",", $uids);

		$query = $this->createQuery();
		$query->getQuerySettings()->setRespectStoragePage(FALSE);
//
//		$constraints = array();
//		foreach ($uidArray as $key => $value) {
//			$constraints[] =  $query->equals('uid', $value);
//		}
//		return $query->matching(
//			$query->logicalOr(
//				$constraints
//			)
//		)->execute();



		$result = Array();
		foreach($uidArray as $uid) {
			$result[] = $this->findByUid($uid);
		}
		return $result;
	}
}