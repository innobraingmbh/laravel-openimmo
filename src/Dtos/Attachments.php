<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Attachments
 *
 * @XmlRoot("anhaenge")
 */
class Attachments
{
    public function __construct(
        /**
         * @XmlList(inline = true, entry = "anhang")
         *
         * @Type("array<Innobrain\OpenImmo\Dtos\Attachment>")
         *
         * @SkipWhenEmpty
         *
         * @SerializedName("anhang")
         */
        protected array $attachment = [],
        /**
         * @XmlList(inline = true, entry = "user_defined_simplefield")
         *
         * @Type("array<Innobrain\OpenImmo\Dtos\UserDefinedSimplefield>")
         *
         * @SkipWhenEmpty
         *
         * @SerializedName("user_defined_simplefield")
         */
        protected array $userDefinedSimplefield = [],
        /**
         * @XmlList(inline = true, entry = "user_defined_anyfield")
         *
         * @Type("array<Innobrain\OpenImmo\Dtos\UserDefinedAnyfield>")
         *
         * @SkipWhenEmpty
         *
         * @SerializedName("user_defined_anyfield")
         */
        protected array $userDefinedAnyfield = [],
        /**
         * @XmlList(inline = true, entry = "user_defined_extend")
         *
         * @Type("array<Innobrain\OpenImmo\Dtos\UserDefinedExtend>")
         *
         * @SkipWhenEmpty
         *
         * @SerializedName("user_defined_extend")
         */
        protected array $userDefinedExtend = []
    ) {}

    /**
     * Returns array of array
     */
    public function getAttachment(): array
    {
        return $this->attachment ?? [];
    }

    public function setAttachment(array $attachment): Attachments
    {
        $this->attachment = $attachment;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedSimplefield(): array
    {
        return $this->userDefinedSimplefield ?? [];
    }

    public function setUserDefinedSimplefield(array $userDefinedSimplefield): Attachments
    {
        $this->userDefinedSimplefield = $userDefinedSimplefield;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedAnyfield(): array
    {
        return $this->userDefinedAnyfield ?? [];
    }

    public function setUserDefinedAnyfield(array $userDefinedAnyfield): Attachments
    {
        $this->userDefinedAnyfield = $userDefinedAnyfield;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedExtend(): array
    {
        return $this->userDefinedExtend ?? [];
    }

    public function setUserDefinedExtend(array $userDefinedExtend): Attachments
    {
        $this->userDefinedExtend = $userDefinedExtend;

        return $this;
    }
}
