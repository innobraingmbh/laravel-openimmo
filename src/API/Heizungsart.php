<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Heizungsart
 * Welche Heizungsarten sind vorhanden, Optionen kombinierbar
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("heizungsart") 
 */
class Heizungsart {

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("ETAGE") 
	 * @var boolean
	 */
	protected $etage;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("FERN") 
	 * @var boolean
	 */
	protected $fern;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("FUSSBODEN") 
	 * @var boolean
	 */
	protected $fussboden;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("OFEN") 
	 * @var boolean
	 */
	protected $ofen;

	/**
	 * @Inline 
	 * @Type("string") 
	 * @var string
	 */
	protected $value;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("ZENTRAL") 
	 * @var boolean
	 */
	protected $zentral;

	/**
	 * @param boolean $ofen Shortcut setter for ofen
	 * @param boolean $etage Shortcut setter for etage
	 * @param boolean $zentral Shortcut setter for zentral
	 * @param boolean $fern Shortcut setter for fern
	 * @param boolean $fussboden Shortcut setter for fussboden
	 * @param string $value the actual value
	 */
	public function __construct(bool $ofen = null, bool $etage = null, bool $zentral = null, bool $fern = null, bool $fussboden = null, string $value = null) {
		$this->ofen = $ofen;
		$this->etage = $etage;
		$this->zentral = $zentral;
		$this->fern = $fern;
		$this->fussboden = $fussboden;
		$this->value = $value;
	}

	/**
	 * @return boolean
	 */
	public function getEtage(): ?bool {
		return $this->etage;
	}

	/**
	 * @return boolean
	 */
	public function getFern(): ?bool {
		return $this->fern;
	}

	/**
	 * @return boolean
	 */
	public function getFussboden(): ?bool {
		return $this->fussboden;
	}

	/**
	 * @return boolean
	 */
	public function getOfen(): ?bool {
		return $this->ofen;
	}

	/**
	 * @return string
	 */
	public function getValue(): ?string {
		return $this->value;
	}

	/**
	 * @return boolean
	 */
	public function getZentral(): ?bool {
		return $this->zentral;
	}

	/**
	 * @param boolean $etage Setter for etage
	 * @return Heizungsart
	 */
	public function setEtage(?bool $etage) {
		$this->etage = $etage;
		return $this;
	}

	/**
	 * @param boolean $fern Setter for fern
	 * @return Heizungsart
	 */
	public function setFern(?bool $fern) {
		$this->fern = $fern;
		return $this;
	}

	/**
	 * @param boolean $fussboden Setter for fussboden
	 * @return Heizungsart
	 */
	public function setFussboden(?bool $fussboden) {
		$this->fussboden = $fussboden;
		return $this;
	}

	/**
	 * @param boolean $ofen Setter for ofen
	 * @return Heizungsart
	 */
	public function setOfen(?bool $ofen) {
		$this->ofen = $ofen;
		return $this;
	}

	/**
	 * @param string $value Setter for value
	 * @return Heizungsart
	 */
	public function setValue(?string $value) {
		$this->value = $value;
		return $this;
	}

	/**
	 * @param boolean $zentral Setter for zentral
	 * @return Heizungsart
	 */
	public function setZentral(?bool $zentral) {
		$this->zentral = $zentral;
		return $this;
	}
}
