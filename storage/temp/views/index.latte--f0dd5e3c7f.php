<?php

use Latte\Runtime as LR;

/** source: home/index.latte */
final class Templatef0dd5e3c7f extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>';
		echo LR\Filters::escapeHtmlText($name) /* line 10 */;
		echo '</h2>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam veniam officia laboriosam, adipisci magni iusto nulla quas dolores rerum laudantium fugiat architecto voluptatem eveniet. Quidem asperiores natus molestiae adipisci ut!
    </p>
';
		$this->createTemplate('../partials/footer.latte', $this->params, 'include')->renderToContentType('html') /* line 14 */;
		echo '</body>
</html>';
	}
}
