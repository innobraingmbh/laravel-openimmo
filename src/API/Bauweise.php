<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Bauweise
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("bauweise") 
 */
class Bauweise {

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("FERTIGTEILE") 
	 * @var boolean
	 */
	protected $fertigteile;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("HOLZ") 
	 * @var boolean
	 */
	protected $holz;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("MASSIV") 
	 * @var boolean
	 */
	protected $massiv;

	/**
	 * @Inline 
	 * @Type("string") 
	 * @var string
	 */
	protected $value;

	/**
	 * @param boolean $massiv Shortcut setter for massiv
	 * @param boolean $fertigteile Shortcut setter for fertigteile
	 * @param boolean $holz Shortcut setter for holz
	 * @param string $value the actual value
	 */
	public function __construct(bool $massiv = null, bool $fertigteile = null, bool $holz = null, string $value = null) {
		$this->massiv = $massiv;
		$this->fertigteile = $fertigteile;
		$this->holz = $holz;
		$this->value = $value;
	}

	/**
	 * @return boolean
	 */
	public function getFertigteile(): ?bool {
		return $this->fertigteile;
	}

	/**
	 * @return boolean
	 */
	public function getHolz(): ?bool {
		return $this->holz;
	}

	/**
	 * @return boolean
	 */
	public function getMassiv(): ?bool {
		return $this->massiv;
	}

	/**
	 * @return string
	 */
	public function getValue(): ?string {
		return $this->value;
	}

	/**
	 * @param boolean $fertigteile Setter for fertigteile
	 * @return Bauweise
	 */
	public function setFertigteile(?bool $fertigteile) {
		$this->fertigteile = $fertigteile;
		return $this;
	}

	/**
	 * @param boolean $holz Setter for holz
	 * @return Bauweise
	 */
	public function setHolz(?bool $holz) {
		$this->holz = $holz;
		return $this;
	}

	/**
	 * @param boolean $massiv Setter for massiv
	 * @return Bauweise
	 */
	public function setMassiv(?bool $massiv) {
		$this->massiv = $massiv;
		return $this;
	}

	/**
	 * @param string $value Setter for value
	 * @return Bauweise
	 */
	public function setValue(?string $value) {
		$this->value = $value;
		return $this;
	}
}
