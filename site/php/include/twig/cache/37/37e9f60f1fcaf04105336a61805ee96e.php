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

/* front/details_covoiturages.html.twig */
class __TwigTemplate_c565d00998aabf4cb7937662c173ddd7 extends Template
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
        yield "Détails covoiturages";
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
        yield "    <div class=\"page_details_covoiturages\" id=\"details_covoiturages\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <p id=\"date_container\">Vendredi 28 février</p>
                </div>
            </div>
            <div class=\"col-md-8\">
                <div class=\"fond_offre_covoiturages\">
                    <div class=\"row duree_covoiturages_details\">
                        <div class=\"col-md-1\">
                            <p id=\"heure_depart\">12:55</p>
                        </div>
                        <div class=\"col-md-1 duree_trajet_details\">
                            <span class=\"trajet_circle fa-regular fa-circle\"></span>
                            <div class=\"longueur_trajet_details\"></div>
                        </div>
                        <div class=\"col-md-10\">
                            <p id=\"heure_arrivee\">Paris</p>
                        </div>
                    </div>
                    <div class=\"row duree_covoiturages_details\">
                        <div class=\"col-md-1\">
                            <p id=\"heure_depart\">15:25</p>
                        </div>
                        <div class=\"col-md-1 duree_trajet_details\">
                            <span class=\"trajet_circle fa-regular fa-circle\">
                        </div>
                        <div class=\"col-md-10\">
                            <p id=\"heure_arrivee\">Lyon</p>
                        </div>
                    </div>
                </div>
                <div class=\"fond_offre_covoiturages\">
                    <div class=\"row\">
                        <div class=\"col-md-1\">
                            <img src=\"/images/front/user.png\">
                        </div>
                        <div class=\"col-md-11\">
                            <p>Prénom</p>
                            <div>
                                <span class=\"fa-regular fa-star fa-lg\"></span>
                                <span class=\"fa-regular fa-star fa-lg\"></span>
                                <span class=\"fa-regular fa-star fa-lg\"></span>
                                <span class=\"fa-regular fa-star fa-lg\"></span>
                                <span class=\"fa-regular fa-star fa-lg avis_covoiturages\"><p>- 15 avis</p></span>
                            </div>
                        </div>
                    </div>
                    <hr class=\"separation_offre_covoiturages_details\">
                    <div class=\"row\">
                        <div class=\"col-md-11\">
                            <p class=\"titre_fiche_conducteur\">Dernier avis</p>
                        </div>
                        <div class=\"col-md-1\">
                            <button class=\"bouton_avis\" type=\"submit\"><span class=\"fa-solid fa-chevron-right\"></span></button>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-1\">
                            <img src=\"/images/front/user.png\">
                        </div>
                        <div class=\"col-md-11\">
                            <p>Prénom</p><br>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <span class=\"fa-regular fa-star fa-lg\"></span>
                            <span class=\"fa-regular fa-star fa-lg\"></span>
                            <span class=\"fa-regular fa-star fa-lg\"></span>
                            <span class=\"fa-regular fa-star fa-lg\"></span>
                            <span class=\"fa-regular fa-star fa-lg\"></span>
                        </div>
                    </div>
                    <br>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <p>Super voyage...</p>
                        </div>
                    </div>
                    <hr class=\"separation_offre_covoiturages_details\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <p class=\"titre_fiche_conducteur\">Véhicule</p>
                        </div>
                    </div>
                    <br>
                    <div class=\"row\">
                        <div class=\"col-md-1\">
                            <img class=\"image_cadre_resume_voiture\" src=\"/images/front/voiture.png\">
                        </div>
                        <div class=\"col-md-11\">
                            <p>NOM DU VEHICULE</p>
                        </div>
                    </div>
                    <hr class=\"separation_offre_covoiturages_details\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <p class=\"titre_fiche_conducteur\">Préférence du conducteur</p>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <p>Texte sur les préférences du conducteur</p>
                        </div>
                    </div>
                    <br>
                    <div class=\"row\">
                        <div class=\"col-md-1\">
                            <img src=\"/images/front/Animaux.png\">
                        </div>
                        <div class=\"col-md-10\">
                            <p>J'accepte les animaux</p>
                        </div>
                    </div>
                    <br>
                    <div class=\"row\">
                        <div class=\"col-md-1\">
                            <img src=\"/images/front/Fumeur.png\">
                        </div>
                        <div class=\"col-md-10\">
                            <p>Pas de fumeur</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 fond_offre_covoiturages\">
                <h4>Vendredi 28 février</h4>
                <div class=\"row duree_covoiturages_details\">
                    <div class=\"col-md-3\">
                        <p id=\"heure_depart\">12:55</p>
                    </div>
                    <div class=\"col-md-1 duree_trajet_details\">
                        <span class=\"trajet_circle fa-regular fa-circle\"></span>
                        <div class=\"longueur_trajet_details\"></div>
                    </div>
                    <div class=\"col-md-8\">
                        <p id=\"heure_arrivee\">Paris</p>
                    </div>
                </div>
                <div class=\"row duree_covoiturages_details\">
                    <div class=\"col-md-3\">
                        <p id=\"heure_depart\">15:25</p>
                    </div>
                    <div class=\"col-md-1 duree_trajet_details\">
                        <span class=\"trajet_circle fa-regular fa-circle\">
                    </div>
                    <div class=\"col-md-8\">
                        <p id=\"heure_arrivee\">Lyon</p>
                    </div>
                </div>
                <hr class=\"separation_offre_covoiturages_details\">
                <div class=\"row\">
                    <div class=\"col-md-2\">
                        <img class=\"image_cadre_resume_voiture\" src=\"/images/front/voiture.png\">
                    </div>
                    <div class=\"col-md-1\">
                        <img class=\"image_cadre_resume\" src=\"/images/front/user.png\">
                    </div>
                    <div class=\"col-md-2\">
                        <p>Prénom</p>
                    </div>
                    <div class=\"col-md-6 text-right\">
                        <span class=\"fa-regular fa-star\"></span>
                        <span class=\"fa-regular fa-star\"></span>
                        <span class=\"fa-regular fa-star\"></span>
                        <span class=\"fa-regular fa-star\"></span>
                        <span class=\"fa-regular fa-star\"></span>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 fond_offre_covoiturages_prix\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <p>1 passager</p>
                    </div>
                    <div class=\"col-md-6\">
                        <p class=\"text-right\" id=\"prix_element\">43,99€</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"row\">
                    <div class=\"col-md-12 no_padding\">
                        <button class=\"bouton_participer\" type=\"submit\"><span class=\"\">PARTICIPER</span></button>
                    </div>
                </div>
                <br>
                <div class=\"row\">
                    <div class=\"col-md-12 no_padding\">
                        <button class=\"bouton_retour\" type=\"submit\"><span class=\"\">RETOUR À L’ITINÉRAIRE</span></button>
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
        return "front/details_covoiturages.html.twig";
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
        return new Source("", "front/details_covoiturages.html.twig", "/var/www/html/template/html/front/details_covoiturages.html.twig");
    }
}
