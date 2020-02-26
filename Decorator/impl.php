<?php declare(strict_types=1);

namespace app\Decorator;
require_once "../vendor/autoload.php";


$dangerousComment = <<<HERE
Hello! Nice blog post!
Please visit my <a href='http://www.iwillhackyou.com'>homepage</a>.
<script src="http://www.iwillhackyou.com/script.js">
  performXSSAttack();
</script>
HERE;

$naiveInput = new TextInput();
echo "Website renders comments without filtering (unsafe):\n";
DisplayComment::display($naiveInput, $dangerousComment);
echo "\n\n\n";

$filteredInput = new PlainTextDecorator($naiveInput);
echo "Website renders comments after stripping all tags (safe):\n";
DisplayComment::display($filteredInput, $dangerousComment);
echo "\n\n\n";


$filteredInput = new DangerousTagsFilterDecorator($naiveInput);
echo "Website renders comments after stripping all tags (safe):\n";
DisplayComment::display($filteredInput, $dangerousComment);
echo "\n\n\n";
