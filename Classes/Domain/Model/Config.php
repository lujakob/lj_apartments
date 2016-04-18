<?php
namespace LuJa\LjApartment\Domain\Model;


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
 * Apartment
 */
class Config extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * season1
	 *
	 * @var string
	 */
	protected $season1 = '';

	/**
	 * season2
	 *
	 * @var string
	 */
	protected $season2 = '';

	/**
	 * season3
	 *
	 * @var string
	 */
	protected $season3 = '';

	/**
	 * season4
	 *
	 * @var string
	 */
	protected $season4 = '';

	/**
	 * range1
	 *
	 * @var string
	 */
	protected $range1 = '';

	/**
	 * range2
	 *
	 * @var string
	 */
	protected $range2 = '';

	/**
	 * range3
	 *
	 * @var string
	 */
	protected $range3 = '';

	/**
	 * range4
	 *
	 * @var string
	 */
	protected $range4 = '';

	/**
	 * Returns the season1
	 *
	 * @return string $season1
	 */
	public function getSeason1() {
		return $this->season1;
	}

	/**
	 * Returns the season2
	 *
	 * @return string $season2
	 */
	public function getSeason2() {
		return $this->season2;
	}

	/**
	 * Returns the season3
	 *
	 * @return string $season3
	 */
	public function getSeason3() {
		return $this->season3;
	}

	/**
	 * Returns the season4
	 *
	 * @return string $season4
	 */
	public function getSeason4() {
		return $this->season4;
	}

	/**
	 * Returns the range1
	 *
	 * @return string $range1
	 */
	public function getRange1() {
		return $this->range1;
	}

	/**
	 * Returns the range2
	 *
	 * @return string $range2
	 */
	public function getRange2() {
		return $this->range2;
	}

	/**
	 * Returns the range3
	 *
	 * @return string $range3
	 */
	public function getRange3() {
		return $this->range3;
	}

	/**
	 * Returns the range4
	 *
	 * @return string $range4
	 */
	public function getRange4() {
		return $this->range4;
	}

}