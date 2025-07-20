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

/* admin/publier_trajet.html.twig */
class __TwigTemplate_28d7068aa971b2fbf25a51b04480ddda extends Template
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
        yield "Publier un trajet";
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
        yield "    <div class=\"page_profil_admin\" id=\"profil_admin\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <p id=\"date_container\">Publier un trajet</p>
                </div>
            </div>
            <div class=\"col-md-12\">
                <div class=\"fond_offre_covoiturages\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <p class=\"titre_fiche_conducteur\">Saisir un voyage</p>
                        </div>
                    </div>
                    <br>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <p>Adresse de départ :</p>
                                <div class=\"input input_recherche_filtre\">
                                    <input type=\"text\" class=\"form-control\" id=\"inputGroupSuccess7\" aria-describedby=\"inputGroupSuccess1Status\" placeholder=\"\">
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <p>Adresse d'arrivée :</p>
                                <div class=\"input input_recherche_filtre\">
                                    <input type=\"text\" class=\"form-control\" id=\"inputGroupSuccess8\" aria-describedby=\"inputGroupSuccess1Status\" placeholder=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <p>Prix : (-2 crédits)</p>
                                <div class=\"input input_recherche_filtre\">
                                    <input type=\"text\" class=\"form-control\" id=\"inputGroupSuccess9\" aria-describedby=\"inputGroupSuccess1Status\" placeholder=\"\">
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <p>Sélection d'un véhicule :</p>
                                <div class=\"input input_recherche_filtre\">
                                    <input type=\"text\" class=\"form-control\" id=\"inputGroupSuccess10\" aria-describedby=\"inputGroupSuccess1Status\" placeholder=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class=\"row\">
                        <div class=\"col-md-offset-4 col-md-4\">
                            <button class=\"bouton_participer\" type=\"submit\">ENREGISTRER</button>
                        </div>
                    </div>
                    <br>
                    <br>
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
        return "admin/publier_trajet.html.twig";
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
        return new Source("", "admin/publier_trajet.html.twig", "/var/www/html/template/html/admin/publier_trajet.html.twig");
    }
}
