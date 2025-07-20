<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* hello.html.twig */
class __TwigTemplate_edd7e41071dc360b26e2d88c9cc8e21b extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

    <!-- CSS personnalisé -->
    <link rel=\"stylesheet\" href=\"/front_css/front.css\">

    <!-- Google Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">

    <!-- Font Awesome -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\" rel=\"stylesheet\">

    <!-- Bootstrap 3 CSS -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css\"
          integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\"
          crossorigin=\"anonymous\">
</head>
<body>

<!-- Barre de menu -->
<div class=\"barre_menu\">
    <nav class=\"container menu navigation_menu\">
        <a class=\"bouton_accueil\" href=\"?page=accueil\">ACCUEIL</a>
        <a class=\"bouton_acces_covoiturages\" href=\"?page=acces_covoiturages\">ACCÈS COVOITURAGES</a>
        <img class=\"logo_ecoride\" src=\"/images/front/Logo - EcoRide.png\">
        <a class=\"bouton_contact\" href=\"?page=contact\">CONTACT</a>

        <!-- Dropdown -->
        <div class=\"dropdown userMenu_dropdown\">
            <button class=\"btn btn-default dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\"
                    data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <i class=\"fa fa-user fa-xl\"></i> <i class=\"fa fa-chevron-down\"></i>
            </button>
            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                <li><a href=\"?page=connexion\">Connexion</a></li>
                <li><a href=\"?page=inscription\">Inscription</a></li>
            </ul>
        </div>
    </nav>
</div>

<!-- Contenu principal -->
<div>
    ";
        // line 50
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 51
        yield "</div>

<!-- Footer -->
<footer>
    <div class=\"barre_footer\">
        <div class=\"container footer\">
            <img class=\"logo_ecoride_footer\" src=\"/images/front/Logo - EcoRide.png\">
            <p>Pour nous contacter : <a href=\"#\">Cliquez ici</a></p>
            <p><a href=\"#\">Mentions légales</a></p>
        </div>
    </div>
</footer>

<!-- Scripts JS à la fin -->
<script src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js\"></script>

</body>
</html>
";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 50
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "hello.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  134 => 50,  124 => 6,  100 => 51,  98 => 50,  51 => 6,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "hello.html.twig", "/var/www/html/template/html/front/hello.html.twig");
    }
}
