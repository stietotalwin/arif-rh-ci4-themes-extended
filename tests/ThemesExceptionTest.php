<?php

namespace StieTotalWin\ThemesTest;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use StieTotalWin\Themes\Exceptions\ThemesException;

final class ThemesExceptionTest extends TestCase
{
    public static function factories(): array
    {
        return [
            'missing template' => ['forMissingTemplateView', 'layout'],
            'unregistered plugin' => ['forPluginNotRegistered', 'charts'],
            'missing plugin file' => ['forPluginNotFound', 'charts.js'],
        ];
    }

    #[DataProvider('factories')]
    public function testFactoriesAcceptNullAndNamedValues(string $factory, string $value): void
    {
        self::assertInstanceOf(ThemesException::class, ThemesException::$factory());
        self::assertStringContainsString($value, ThemesException::$factory($value)->getMessage());
    }
}
