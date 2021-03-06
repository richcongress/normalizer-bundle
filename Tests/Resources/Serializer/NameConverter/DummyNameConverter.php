<?php declare(strict_types=1);

namespace RichCongress\NormalizerExtensionBundle\Tests\Resources\Serializer\NameConverter;

use Symfony\Component\Serializer\NameConverter\AdvancedNameConverterInterface;

/**
 * Class DummyNameConverter
 *
 * @package   RichCongress\NormalizerExtensionBundle\Tests\Resources\Serializer\NameConverter
 * @author    Nicolas Guilloux <nguilloux@richcongress.com>
 * @copyright 2014 - 2020 RichCongress (https://www.richcongress.com)
 */
class DummyNameConverter implements AdvancedNameConverterInterface
{
    /**
     * @inheritDoc
     */
    public function normalize($propertyName, string $class = null, string $format = null, array $context = [])
    {
        return $propertyName . '_' . ($class ?? 'empty');
    }

    /**
     * @inheritDoc
     */
    public function denormalize($propertyName, string $class = null, string $format = null, array $context = [])
    {
        return $propertyName . '_' . ($class ?? 'empty');
    }
}
