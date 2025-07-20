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

/* front/inscription.html.twig */
class __TwigTemplate_d4f23ef487abe247403070ef6f78d768 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Connexion";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "    <div class=\"page_connexion_covoiturages\" id=\"connexion_covoiturages\">
        <div class=\"container\">
            <div class=\"col-md-12 fond_inscription_covoiturages\">
                <p class=\"text-center\">Création de compte</p><br><br>
                <div class=\"row\">
                    <div class=\"col-md-12 formulaire_inscription\">
                        <form method=\"POST\" action=\"?page=front/inscription\">
                            <div class=\"form-group\">
                                <label for=\"exampleInputPseudo\">Pseudo</label>
                                <input type=\"text\" class=\"form-control\" id=\"exampleInputPseudo\" name=\"pseudo\" required>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"exampleInputEmail\">Email</label>
                                <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail\" name=\"email\" required>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"exampleInputPassword\">Mot de passe</label>
                                <input type=\"password\" class=\"form-control\" id=\"inscriptionInputPassword\" name=\"password\" required><br>
                                <small class=\"password-help form-text text-muted d-none\">
                                    Le mot de passe doit contenir au moins 8 caractères, une majuscule, une minuscule, un chiffre et un caractère spécial.
                                </small>
                            </div>
                            <div class=\"text-center\">
                                <button type=\"submit\" class=\"bouton_connexion\">Rejoindre l'aventure</button>
                            </div>
                            <br>
                            <div class=\"text-center\">
                                <a href=\"?page=front/connexion\">Se connecter</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/inscription.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  70 => 7,  63 => 6,  52 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "front/inscription.html.twig", "/var/www/html/template/html/front/inscription.html.twig");
    }
}
