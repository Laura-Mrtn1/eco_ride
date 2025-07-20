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

/* admin/profil.html.twig */
class __TwigTemplate_4282abd78083556812ae1cfef4ea0ffd extends Template
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
        yield "Profil";
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
                    <p id=\"date_container\">À propos de vous</p>
                </div>
            </div>
            <div class=\"col-md-12\">
                <div class=\"fond_offre_covoiturages\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <p class=\"titre_fiche_conducteur\">Vous êtes</p>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <label class=\"switch-with-text\">
                                <label class=\"switch\">
                                    <input type=\"checkbox\" id=\"toggle\">
                                    <span class=\"slider\"></span>
                                </label>
                                <span class=\"toggle-text\">Chauffeur</span>
                            </label>
                        </div>
                        <div class=\"col-md-4\">
                            <label class=\"switch-with-text\">
                                <label class=\"switch\">
                                    <input type=\"checkbox\" id=\"toggle\">
                                    <span class=\"slider\"></span>
                                </label>
                                <span class=\"toggle-text\">Passager</span>
                            </label>
                        </div>
                        <div class=\"col-md-4\">
                            <label class=\"switch-with-text\">
                                <label class=\"switch\">
                                    <input type=\"checkbox\" id=\"toggle\">
                                    <span class=\"slider\"></span>
                                </label>
                                <span class=\"toggle-text\">Les deux</span>
                            </label>
                        </div>
                    </div>
                    <hr class=\"separation_offre_covoiturages_details\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <p class=\"titre_fiche_conducteur\">Informations spécifiques</p>
                        </div>
                    </div>
                    <br>
                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <div class=\"form-group\">
                                <p>Plaque d'immatriculation :</p>
                                <div class=\"input input_recherche_filtre\">
                                    <input type=\"text\" class=\"form-control\" id=\"inputGroupSuccess1\" aria-describedby=\"inputGroupSuccess1Status\" placeholder=\"\">
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"form-group\">
                                <p>Date de première immatriculation :</p>
                                <div class=\"input input_recherche_filtre\">
                                    <input type=\"text\" class=\"form-control\" id=\"inputGroupSuccess2\" aria-describedby=\"inputGroupSuccess1Status\" placeholder=\"\">
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"form-group\">
                                <p>Modèle du véhicule :</p>
                                <div class=\"input input_recherche_filtre\">
                                    <input type=\"text\" class=\"form-control\" id=\"inputGroupSuccess3\" aria-describedby=\"inputGroupSuccess1Status\" placeholder=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <div class=\"form-group\">
                                <p>Couleur du véhicule :</p>
                                <div class=\"input input_recherche_filtre\">
                                    <input type=\"text\" class=\"form-control\" id=\"inputGroupSuccess4\" aria-describedby=\"inputGroupSuccess1Status\" placeholder=\"\">
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"form-group\">
                                <p>Marque du véhicule :</p>
                                <div class=\"input input_recherche_filtre\">
                                    <input type=\"text\" class=\"form-control\" id=\"inputGroupSuccess5\" aria-describedby=\"inputGroupSuccess1Status\" placeholder=\"\">
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"form-group\">
                                <p>Nombre de place disponible : :</p>
                                <div class=\"input input_recherche_filtre\">
                                    <input type=\"text\" class=\"form-control\" id=\"inputGroupSuccess6\" aria-describedby=\"inputGroupSuccess1Status\" placeholder=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class=\"row\">
                        <div class=\"col-md-offset-4 col-md-4\">
                            <button class=\"bouton_participer\" type=\"submit\">ENREGISTRER</button>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <button class=\"bouton_participer\" type=\"submit\">+ AJOUTER UN VÉHICULE</button>
                        </div>
                    </div>
                    <hr class=\"separation_offre_covoiturages_details\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <p class=\"titre_fiche_conducteur\">Préférences</p>
                        </div>
                    </div>
                    <br>
                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <label class=\"switch-with-text\">
                                <span class=\"toggle-text\">Non fumeur</span>
                                <label class=\"switch\">
                                    <input type=\"checkbox\" id=\"toggle\">
                                    <span class=\"slider\"></span>
                                </label>
                                <span class=\"toggle-text\">Fumeur</span>
                            </label>
                        </div>
                        <div class=\"col-md-4\">
                            <label class=\"switch-with-text\">
                                <span class=\"toggle-text\">Pas d'animaux</span>
                                <label class=\"switch\">
                                    <input type=\"checkbox\" id=\"toggle\">
                                    <span class=\"slider\"></span>
                                </label>
                                <span class=\"toggle-text\">Animaux</span>
                            </label>
                        </div>
                    </div>
                    <br>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                <p>Autres préférences</p>
                                <textarea class=\"form-control\" rows=\"3\"></textarea>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class=\"row\">
                        <div class=\"col-md-offset-4 col-md-4\">
                            <button class=\"bouton_participer\" type=\"submit\">ENREGISTRER</button>
                        </div>
                    </div>
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
        return "admin/profil.html.twig";
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
        return new Source("", "admin/profil.html.twig", "/var/www/html/template/html/admin/profil.html.twig");
    }
}
