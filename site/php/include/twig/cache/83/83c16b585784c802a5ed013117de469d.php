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

/* front/contact.html.twig */
class __TwigTemplate_a80d450e4248fec4a9f7be2871381dc1 extends Template
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
        yield "Contact";
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
        yield "    <div class=\"page_contact\" id=\"contact\">
        <div class=\"couverture_accueil\">
            <img class=\"img_couverture_contact\" src=\"/images/front/route-campagne.jpg\">
            <div class=\"overlay\"></div>
            <h2 class=\"titre_couverture\">CONTACT</h2>
        </div>
        <div class=\"fond_covoiturages\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-5\">
                        <h3>Contactez-nous</h3><br>
                        <p>Vous avez une question, une suggestion ou simplement envie d'en savoir plus sur EcoRide ? Notre équipe est à votre écoute !</p><br>
                        <p>EcoRide, c’est bien plus qu’un service de covoiturage : c’est une communauté engagée pour une mobilité plus responsable. Ensemble, réduisons notre impact environnemental et construisons un avenir plus vert.</p><br>
                        <p><strong>Téléphone</strong> : +33 1 23 45 67 89</p><br>
                        <p><strong>Adresse</strong> : 42 rue des Énergies Nouvelles, 75000 Paris, France</p><br>
                        <hr class=\"separation_offre_covoiturages\">
                        <div class=\"row\">
                            <div class=\"col-md-2\">
                                <span class=\"fa-brands fa-facebook fa-2x\"></span>
                            </div>
                            <div class=\"col-md-2\">
                                <span class=\"fa-brands fa-x-twitter fa-2x\"></span>
                            </div>
                            <div class=\"col-md-2\">
                                <span class=\"fa-brands fa-instagram fa-2x\"></span>
                            </div>
                            <div class=\"col-md-2 offset-4\">
                                <span class=\"fa-brands fa-youtube fa-2x\"></span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-offset-2 col-md-5 fond_contact\">
                        <p class=\"text-center\">Formulaire de contact</p><br><br>
                        <div class=\"row\">
                            <div class=\"col-md-12 formulaire_inscription\">
                                <form>
                                    <div class=\"form-group\">
                                        <label for=\"exampleInputNom\">Nom</label>
                                        <input type=\"text\" class=\"form-control\" id=\"exampleInputNom\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"exampleInputPrenom\">Prénom</label>
                                        <input type=\"text\" class=\"form-control\" id=\"exampleInputPrenom\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"exampleInputEmail\">Email</label>
                                        <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"exampleInputEmail\">Message</label>
                                        <textarea type=\"text\" class=\"form-control\" id=\"exampleInputMessage\"></textarea>
                                    </div>
                                    <div class=\"text-center\">
                                        <button type=\"submit\" class=\"bouton_connexion btn btn-default\">Envoyer</button>
                                    </div>
                                </form>
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
        return "front/contact.html.twig";
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
        return new Source("", "front/contact.html.twig", "/var/www/html/template/html/front/contact.html.twig");
    }
}
