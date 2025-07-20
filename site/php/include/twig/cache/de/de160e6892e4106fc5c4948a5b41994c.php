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

/* front/accueil.html.twig */
class __TwigTemplate_7ebcfb19675bc0c37474d7d0ca39a89f extends Template
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
        yield "Accueil";
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
        yield "    <div class=\"page_accueil\" id=\"accueil\">
        <div class=\"couverture_accueil\">
            <img class= \"img_couverture\" src=\"/images/front/route-foret.jpg\">
            <div class=\"overlay\"></div>
            <h2 class=\"titre_couverture\">BIENVENUE SUR NOTRE PLATEFORME DE COVOITURAGE,<br> RECHERCHEZ VOTRE PROCHAIN ITINÉRAIRE</h2>
            <form id=\"rechercheForm\" class=\"barre_recherche\" action=\"eco_ride_front.php\" method=\"get\" method=\"GET\">
                <table>
                    <tr class=\"style_barre_recherche\">
                        <input type=\"hidden\" name=\"page\" value=\"front/acces_covoiturages\">
                        <td><input type=\"text\" name=\"depart\" id=\"villeDepart\" placeholder=\"Départ\" required></td>
                        <td><input type=\"text\" name=\"arrivee\" id=\"villeArrivee\" placeholder=\"Arrivée\" required></td>
                        <td><input type=\"date\" name=\"date\" id=\"dateVoyage\" required></td>
                        <td><button class=\"bouton_ecoride\" type=\"submit\">RECHERCHER</button></td>
                    </tr>
                </table>
            </form>
        </div>

        <div class=\"container\">
            <div class=\"contenu_accueil\">
                <div class=\"row\">
                    <div class=\"col-md-6 text_accueil\">
                        <h2>EcoRide : Covoiturage écologique et économique</h2>
                        <br>
                        <p>EcoRide est une startup française qui révolutionne les déplacements en proposant une plateforme de covoiturage écologique et économique.<br><br>Notre mission : réduire l’impact environnemental des trajets en encourageant le partage de voitures et en privilégiant les véhicules électriques.<br><br>Avec EcoRide, voyagez malin, respectez la planète et économisez.<br> Rejoignez notre communauté engagée et contribuez à un avenir plus vert.<br><br>EcoRide, la route responsable.</p>
                    </div>
                    <div class=\"col-md-3 img_accueil\">
                        <img src=\"/images/front/voiture-electrique.png\"><br><br>
                        <img src=\"/images/front/route-campagne-carre.png\">
                    </div>
                    <div class=\"col-md-3 img_accueil\">
                        <img src=\"/images/front/route_voiture.png\"><br><br>
                        <img src=\"/images/front/electrique.png\">
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
        return "front/accueil.html.twig";
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
        return new Source("", "front/accueil.html.twig", "/var/www/html/template/html/front/accueil.html.twig");
    }
}
