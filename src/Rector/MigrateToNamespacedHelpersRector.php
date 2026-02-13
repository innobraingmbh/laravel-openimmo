<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Rector;

use PhpParser\Node;
use PhpParser\Node\Expr\FuncCall;
use PhpParser\Node\Name\FullyQualified;
use Rector\Rector\AbstractRector;
use RuntimeException;
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
        // helpers.php lives at src/helpers.php, this file lives at src/Rector/
        $helpersFile = __DIR__.'/../helpers.php';

        if (! file_exists($helpersFile)) {
            throw new RuntimeException(
                'MigrateToNamespacedHelpersRector: Could not find helpers.php at '.$helpersFile
            );
        }

        $tokens = token_get_all(file_get_contents($helpersFile));
        $functions = [];

        for ($i = 0, $count = count($tokens); $i < $count; $i++) {
            if (! is_array($tokens[$i])) {
                continue;
            }

            if ($tokens[$i][0] !== T_FUNCTION) {
                continue;
            }

            for ($j = $i + 1; $j < $count; $j++) {
                if (! is_array($tokens[$j])) {
                    break;
                }

                if ($tokens[$j][0] === T_STRING) {
                    $functions[$tokens[$j][1]] = true;

                    break;
                }
            }
        }

        return $functions;
    }
}
