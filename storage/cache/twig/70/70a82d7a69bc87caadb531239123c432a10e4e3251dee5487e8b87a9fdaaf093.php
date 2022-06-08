<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.twig */
class __TwigTemplate_dc7dbc94529546ff4d0ec23f5a71a9cbb11dbdb0cd7844765e5c70781e4b0381 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Document</title>
</head>
<body>
    <h2>";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "</h2>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam veniam officia laboriosam, adipisci magni iusto nulla quas dolores rerum laudantium fugiat architecto voluptatem eveniet. Quidem asperiores natus molestiae adipisci ut!
    </p>
    ";
        // line 14
        echo twig_include($this->env, $context, "partials/footer.twig");
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "home/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 14,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Document</title>
</head>
<body>
    <h2>{{ name }}</h2>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam veniam officia laboriosam, adipisci magni iusto nulla quas dolores rerum laudantium fugiat architecto voluptatem eveniet. Quidem asperiores natus molestiae adipisci ut!
    </p>
    {{ include('partials/footer.twig') }}
</body>
</html>", "home/index.twig", "E:\\codes-sources\\dimtrov.dev\\www\\dimtrov\\blitz\\app-skeleton\\app\\Views\\home\\index.twig");
    }
}
