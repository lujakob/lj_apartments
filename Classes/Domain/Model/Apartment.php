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
class Apartment extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * title
	 *
	 * @var string
	 */
	protected $title = '';

	/**
	 * subTitle
	 *
	 * @var string
	 */
	protected $subTitle = '';

	/**
	 * size
	 *
	 * @var string
	 */
	protected $size = '';

	/**
	 * capacity
	 *
	 * @var string
	 */
	protected $capacity = '';

	/**
	 * description
	 *
	 * @var string
	 */
	protected $description = '';

	/**
	 * bodytext
	 *
	 * @var string
	 */
	protected $bodytext = '';

	/**
	 * price1
	 *
	 * @var string
	 */
	protected $price1 = '';

	/**
	 * price2
	 *
	 * @var string
	 */
	protected $price2 = '';

	/**
	 * price3
	 *
	 * @var string
	 */
	protected $price3 = '';

	/**
	 * price4
	 *
	 * @var string
	 */
	protected $price4 = '';

	/**
	 * floorPlan
	 *
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $floorPlan = NULL;

	/**
	 * image
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
	 */
	protected $image = NULL;

	/**
	 * Returns the title
	 *
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Returns the subTitle
	 *
	 * @return string $subTitle
	 */
	public function getSubTitle() {
		return $this->subTitle;
	}

	/**
	 * Sets the subTitle
	 *
	 * @param string $subTitle
	 * @return void
	 */
	public function setSubTitle($subTitle) {
		$this->subTitle = $subTitle;
	}

	/**
	 * Returns the size
	 *
	 * @return string $size
	 */
	public function getSize() {
		return $this->size;
	}

	/**
	 * Sets the size
	 *
	 * @param string $size
	 * @return void
	 */
	public function setSize($size) {
		$this->size = $size;
	}

	/**
	 * Returns the capacity
	 *
	 * @return string $capacity
	 */
	public function getCapacity() {
		return $this->capacity;
	}

	/**
	 * Sets the capacity
	 *
	 * @param string $capacity
	 * @return void
	 */
	public function setCapacity($capacity) {
		$this->capacity = $capacity;
	}

	/**
	 * Returns the description
	 *
	 * @return string $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets the description
	 *
	 * @param string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Returns the bodytext
	 *
	 * @return string $bodytext
	 */
	public function getBodytext() {
		return $this->bodytext;
	}

	/**
	 * Sets the bodytext
	 *
	 * @param string $bodytext
	 * @return void
	 */
	public function setBodytext($bodytext) {
		$this->bodytext = $bodytext;
	}

	/**
	 * Returns the price1
	 *
	 * @return string $price1
	 */
	public function getPrice1() {
		return $this->price1;
	}

	/**
	 * Sets the price1
	 *
	 * @param string $price1
	 * @return void
	 */
	public function setPrice1($price1) {
		$this->price1 = $price1;
	}

	/**
	 * Returns the price2
	 *
	 * @return string $price2
	 */
	public function getPrice2() {
		return $this->price2;
	}

	/**
	 * Sets the price2
	 *
	 * @param string $price2
	 * @return void
	 */
	public function setPrice2($price2) {
		$this->price2 = $price2;
	}

	/**
	 * Returns the price3
	 *
	 * @return string $price3
	 */
	public function getPrice3() {
		return $this->price3;
	}

	/**
	 * Sets the price3
	 *
	 * @param string $price3
	 * @return void
	 */
	public function setPrice3($price3) {
		$this->price3 = $price3;
	}

	/**
	 * Returns the price4
	 *
	 * @return string $price4
	 */
	public function getPrice4() {
		return $this->price4;
	}

	/**
	 * Sets the price4
	 *
	 * @param string $price4
	 * @return void
	 */
	public function setPrice4($price4) {
		$this->price4 = $price4;
	}

	/**
	 * Returns the floorPlan
	 *
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $floorPlan
	 */
	public function getFloorPlan() {
		return $this->floorPlan;
	}

	/**
	 * Sets the floorPlan
	 *
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $floorPlan
	 * @return void
	 */
	public function setFloorPlan(\TYPO3\CMS\Extbase\Domain\Model\FileReference $floorPlan) {
		$this->floorPlan = $floorPlan;
	}

	/**
	 * Returns the image
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $image
	 */
	public function getImage() {
		return $this->image;
	}


}