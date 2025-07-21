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

/* front/acces_covoiturages.html.twig */
class __TwigTemplate_6f9691fd43f8794dbc3b96fa0bb9dd0e extends Template
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
        yield "Accès covoiturages";
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
        yield "    <div class=\"page_acces_covoiturages\" id=\"acces_covoiturages\">
        <div class=\"couverture_accueil\">
            <img class= \"img_couverture_2\" src=\"/images/front/route-campagne.jpg\">
            <div class=\"overlay\"></div>
            <h2 class=\"titre_couverture\">PROGRAMMEZ VOTRE PROCHAIN ITINÉRAIRE</h2>
            <form class=\"barre_recherche\">
                <table>
                    <tr class=\"style_barre_recherche\">
                        <td><input type=\"text\" placeholder=\"Départ\"></td>
                        <td><input type=\"text\" placeholder=\"Arrivée\"></td>
                        <td><input type=\"date\"></td>
                        <td><button class=\"bouton_ecoride\" type=\"submit\">RECHERCHER</button></td>
                    </tr>
                </table>
            </form>
        </div>
        <div class=\"fond_covoiturages\">
            <div class=\"container\">
                <div class=\"contenu_acces_covoiturages\">
                    <div class=\"row\">
                        <div class=\"col-md-3 trier_covoiturages\">
                            <h4>Trier par :</h4>
                            <div class=\"radio\">
                                <label>
                                    <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\">
                                    &nbsp;Voiture éléctrique
                                </label>
                            </div>
                            <div class=\"radio\">
                                <label>
                                    <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"option2\">
                                    &nbsp;Prix du voyage
                            </div>
                            <div class=\"form-group\">
                                <div class=\"input-group input_recherche_filtre\">
                                    <input type=\"text\" class=\"form-control\" id=\"inputGroupSuccess1\" aria-describedby=\"inputGroupSuccess1Status\" placeholder=\"Prix max :\">
                                    <span class=\"input-group-addon input_symbole\">€</span>
                                </div>
                            </div>
                            <div class=\"radio\">
                                <label>
                                    <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios3\" value=\"option3\">
                                    &nbsp;Durée du voyage
                                </label>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"input-group input_recherche_filtre\">
                                    <input type=\"text\" class=\"form-control\" id=\"inputGroupSuccess2\" aria-describedby=\"inputGroupSuccess2Status\" placeholder=\"Durée max :\">
                                    <span class=\"input-group-addon input_symbole\"><i class=\"fa-regular fa-clock\"></i></span>
                                </div>
                            </div>
                            <div class=\"radio\">
                                <label>
                                    <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios4\" value=\"option4\">
                                    &nbsp;Note
                                </label>
                            </div>
                            <div>
                                <span class=\"fa-regular fa-star fa-xl\"></span>
                                <span class=\"fa-regular fa-star fa-xl\"></span>
                                <span class=\"fa-regular fa-star fa-xl\"></span>
                                <span class=\"fa-regular fa-star fa-xl\"></span>
                                <span class=\"fa-regular fa-star fa-xl\"></span>
                            </div>
                        </div>
                        <div class=\"col-md-offset-1 col-md-8\">
                            <div id=\"resultats\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.ORS_API_KEY = \"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["orsApiKey"] ?? null), "html", null, true);
        yield "\";
        window.covoiturages = ";
        // line 83
        yield json_encode(($context["trajets"] ?? null));
        yield ";
    </script>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/acces_covoiturages.html.twig";
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
        return array (  151 => 83,  147 => 82,  70 => 7,  63 => 6,  52 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "front/acces_covoiturages.html.twig", "/var/www/html/template/html/front/acces_covoiturages.html.twig");
    }
}
