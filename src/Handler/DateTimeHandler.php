<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Handler;

use DateTime;
use DOMText;
use Exception;
use JMS\Serializer\GraphNavigatorInterface;
use JMS\Serializer\Handler\SubscribingHandlerInterface;
use JMS\Serializer\XmlDeserializationVisitor;
use JMS\Serializer\XmlSerializationVisitor;
use SimpleXMLElement;

/**
 * Class DateTimeHandler
 *
 * @see https://github.com/schmittjoh/serializer/blob/master/doc/handlers.rst
 */
class DateTimeHandler implements SubscribingHandlerInterface
{
    public static function getSubscribingMethods(): array
    {
        return [
            [
                'direction' => GraphNavigatorInterface::DIRECTION_SERIALIZATION,
                'format' => 'xml',
                'type' => 'DateTime',
                'method' => 'serializeDateTimeToXml',
            ],
            [
                'direction' => GraphNavigatorInterface::DIRECTION_DESERIALIZATION,
                'format' => 'xml',
                'type' => 'DateTime',
                'method' => 'deserializeDateTimeToXml',
            ],
        ];
    }

    public function serializeDateTimeToXml(XmlSerializationVisitor $visitor, DateTime $date, array $type): DOMText
    {
        return new DOMText($date->format($type['params'][0]));
    }

    /**
     * @throws Exception
     */
    public function deserializeDateTimeToXml(XmlDeserializationVisitor $visitor, SimpleXMLElement $dateAsString): DateTime
    {
        return new DateTime((string) $dateAsString);
    }
}
