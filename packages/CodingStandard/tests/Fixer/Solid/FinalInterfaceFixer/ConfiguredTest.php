<?php declare(strict_types=1);

namespace Symplify\CodingStandard\Tests\Fixer\Solid\FinalInterfaceFixer;

use Symplify\CodingStandard\Fixer\Solid\FinalInterfaceFixer;
use Symplify\EasyCodingStandardTester\Testing\AbstractCheckerTestCase;

final class ConfiguredTest extends AbstractCheckerTestCase
{
    public function test(): void
    {
        $this->doTestFiles([__DIR__ . '/Fixture/wrong3.php.inc']);
    }

    protected function getCheckerClass(): string
    {
        return FinalInterfaceFixer::class;
    }

    /**
     * @return mixed[]
     */
    protected function getCheckerConfiguration(): array
    {
        return [
            'only_interfaces' => ['SomeInterface'],
        ];
    }
}
