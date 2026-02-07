<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Rector;

use PhpParser\Node;
use PhpParser\Node\Expr\FuncCall;
use PhpParser\Node\Name\FullyQualified;
use Rector\Rector\AbstractRector;
use Symplify\RuleDocGenerator\ValueObject\CodeSample\CodeSample;
use Symplify\RuleDocGenerator\ValueObject\RuleDefinition;

final class MigrateToNamespacedHelpersRector extends AbstractRector
{
    private const string HELPERS_NAMESPACE = 'Innobrain\\OpenImmo\\Helpers';

    /** @var array<string, true> */
    private array $helperFunctions = [];

    public function __construct()
    {
        $this->helperFunctions = $this->discoverHelperFunctions();
    }

    public function getRuleDefinition(): RuleDefinition
    {
        return new RuleDefinition(
            'Migrate global OpenImmo helper function calls to namespaced imports',
            [
                new CodeSample(
                    <<<'CODE_SAMPLE'
                    $provider = getProvider($openImmo);
                    CODE_SAMPLE,
                    <<<'CODE_SAMPLE'
                    use function Innobrain\OpenImmo\Helpers\getProvider;

                    $provider = getProvider($openImmo);
                    CODE_SAMPLE,
                ),
            ]
        );
    }

    /**
     * @return array<class-string<Node>>
     */
    public function getNodeTypes(): array
    {
        return [FuncCall::class];
    }

    /**
     * @param  FuncCall  $node
     */
    public function refactor(Node $node): ?Node
    {
        $functionName = $this->getName($node);

        if ($functionName === null || ! isset($this->helperFunctions[$functionName])) {
            return null;
        }

        $node->name = new FullyQualified(self::HELPERS_NAMESPACE.'\\'.$functionName);

        return $node;
    }

    /**
     * @return array<string, true>
     */
    private function discoverHelperFunctions(): array
    {
        // Look for helpers.php relative to the package root
        $candidates = [
            __DIR__.'/../helpers.php',           // when used from package root (src/Rector/)
            __DIR__.'/../../src/helpers.php',     // when used from vendor/innobrain/laravel-openimmo/src/Rector/
        ];

        $helpersFile = null;
        foreach ($candidates as $candidate) {
            if (file_exists($candidate)) {
                $helpersFile = $candidate;
                break;
            }
        }

        if ($helpersFile === null) {
            return [];
        }

        $tokens = token_get_all(file_get_contents($helpersFile));
        $functions = [];

        for ($i = 0, $count = count($tokens); $i < $count; $i++) {
            if (! is_array($tokens[$i])) {
                continue;
            }

            if (
                $tokens[$i][0] === T_FUNCTION
                && isset($tokens[$i + 2])
                && is_array($tokens[$i + 2])
                && $tokens[$i + 2][0] === T_STRING
            ) {
                $functions[$tokens[$i + 2][1]] = true;
            }
        }

        return $functions;
    }
}
