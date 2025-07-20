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

/* admin/trajet_programme.html.twig */
class __TwigTemplate_7ff2730ec9797a11ee0655cb18c85548 extends Template
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
        yield "Vos trajets";
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
                    <p id=\"date_container\">Vos trajets</p>
                </div>
            </div>
            <div class=\"col-md-12\">
                <div class=\"fond_offre_covoiturages\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <p class=\"titre_fiche_conducteur\">Trajets à venir</p>
                        </div>
                    </div>
                    <br>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <p class=\"titre_fiche_conducteur\">Chauffeur</p>
                        </div>
                    </div>
                    <div class=\"contenu_acces_covoiturages\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"fond_offre_covoiturages_trajet\">
                                    <div class=\"row\">
                                        <div class=\"col-md-4\">
                                            <p id=\"date_container\">28/02/2025</p>
                                        </div>
                                    </div>
                                    <div class=\"row duree_covoiturages_details\">
                                        <div class=\"col-md-3\">
                                            <p id=\"heure_depart\">Paris</p>
                                        </div>
                                        <div class=\"col-md-1 text-right\">
                                            <p id=\"heure_arrivee\">Lyon</p>
                                        </div>
                                        <div class=\"col-md-offset-5 col-md-3 bouton_participer\">
                                            <a href=\"?page=front/details_covoiturages\" class=\"bouton_ecoride\">DÉMARRER</a>
                                        </div>
                                    </div>
                                    <div class=\"row duree_covoiturages_details\">
                                        <div class=\"col-md-4 duree_trajet\">
                                            <span class=\"trajet_circle fa-regular fa-circle\"></span><hr class=\"longueur_trajet\"><span class=\"trajet_circle fa-regular fa-circle\"></span>
                                        </div>
                                    </div>
                                    <div class=\"row duree_covoiturages_details\">
                                        <div class=\"col-md-3\">
                                            <p id=\"heure_depart\">12:55</p>
                                        </div>
                                        <div class=\"col-md-1 text-right\">
                                            <p id=\"heure_arrivee\">15:56</p>
                                        </div>
                                        <div class=\"col-md-offset-5 col-md-3 bouton_participer\">
                                            <a href=\"?page=front/details_covoiturages\" class=\"bouton_participer\">ANNULER</a>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <p class=\"titre_fiche_conducteur\">Passager</p>
                        </div>
                    </div>
                    <div class=\"contenu_acces_covoiturages\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"fond_offre_covoiturages_trajet\">
                                    <div class=\"row\">
                                        <div class=\"col-md-4\">
                                            <p id=\"date_container\">28/02/2025</p>
                                        </div>
                                    </div>
                                    <div class=\"row duree_covoiturages_details\">
                                        <div class=\"col-md-3\">
                                            <p id=\"heure_depart\">Lyon</p>
                                        </div>
                                        <div class=\"col-md-1 text-right\">
                                            <p id=\"heure_arrivee\">Marseille</p>
                                        </div>
                                        <div class=\"col-md-offset-5 col-md-3 bouton_participer\">
                                            <a href=\"?page=front/details_covoiturages\" class=\"bouton_ecoride\">DÉMARRER</a>
                                        </div>
                                    </div>
                                    <div class=\"row duree_covoiturages_details\">
                                        <div class=\"col-md-4 duree_trajet\">
                                            <span class=\"trajet_circle fa-regular fa-circle\"></span><hr class=\"longueur_trajet\"><span class=\"trajet_circle fa-regular fa-circle\"></span>
                                        </div>
                                    </div>
                                    <div class=\"row duree_covoiturages_details\">
                                        <div class=\"col-md-3\">
                                            <p id=\"heure_depart\">10:35</p>
                                        </div>
                                        <div class=\"col-md-1 text-right\">
                                            <p id=\"heure_arrivee\">15:26</p>
                                        </div>
                                        <div class=\"col-md-offset-5 col-md-3 bouton_participer\">
                                            <a href=\"?page=front/details_covoiturages\" class=\"bouton_participer\">ANNULER</a>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
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
        return "admin/trajet_programme.html.twig";
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
        return new Source("", "admin/trajet_programme.html.twig", "/var/www/html/template/html/admin/trajet_programme.html.twig");
    }
}
