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

/* front/mentions_legales.html.twig */
class __TwigTemplate_6b0f22ebb10806bc449d312ffd25b7da extends Template
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
        yield "Mentions légales";
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
        yield "    <div class=\"page_mentions_legales\" id=\"mentions_legales\">
        <div class=\"couverture_accueil\">
            <img class=\"img_couverture_contact\" src=\"/images/front/route-campagne.jpg\">
            <div class=\"overlay\"></div>
            <h2 class=\"titre_couverture\">MENTIONS LÉGALES</h2>
        </div>
        <div class=\"fond_covoiturages\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <main>
                            <h1>Mentions légales</h1>

                            <section>
                                <h2>1. Éditeur du site</h2>
                                <p>Le site internet accessible à l’adresse <a href=\"https://www.ecoride.fr\" target=\"_blank\" rel=\"noopener noreferrer\">https://www.ecoride.fr</a> (ci-après « le Site ») est édité par :</p>
                                <p><strong>EcoRide</strong><br>
                                    Adresse : 42 rue des Énergies Nouvelles, 75000 Paris, France<br>
                                    Téléphone : <a href=\"tel:+33123456789\">+33 1 23 45 67 89</a><br>
                                    Email : <a href=\"mailto:contact@ecoride.fr\">contact@ecoride.fr</a> (à adapter si vous avez une adresse email dédiée)<br>
                                    Directeur de la publication : [Nom du responsable légal ou du directeur de publication]</p>

                                <p>EcoRide est une [forme juridique à compléter, par exemple : Société par Actions Simplifiée (SAS)]<br>
                                    au capital de [XXXX €]<br>
                                    Immatriculée au Registre du Commerce et des Sociétés de [ville] sous le numéro [SIREN/SIRET]<br>
                                    Numéro de TVA intracommunautaire : [le cas échéant]</p>
                            </section>

                            <section>
                                <h2>2. Hébergement du site</h2>
                                <p>Le site est hébergé par :</p>
                                <p>[Nom de l’hébergeur, par exemple : OVH SAS]<br>
                                    Adresse : [Adresse complète de l’hébergeur]<br>
                                    Téléphone : [Numéro de téléphone de l’hébergeur]<br>
                                    Site web : <a href=\"https://www.nomdelhebergeur.fr\" target=\"_blank\" rel=\"noopener noreferrer\">https://www.nomdelhebergeur.fr</a></p>
                            </section>

                            <section>
                                <h2>3. Propriété intellectuelle</h2>
                                <p>L’ensemble des éléments figurant sur le Site (textes, images, graphismes, logo, icônes, etc.) est la propriété exclusive d’EcoRide ou de ses partenaires et est protégé par les lois françaises et internationales relatives à la propriété intellectuelle.</p>
                                <p>Toute reproduction, représentation, modification, publication, transmission, altération, totale ou partielle du Site ou de son contenu, par quelque procédé que ce soit, et sur quelque support que ce soit, est interdite sans l’autorisation écrite préalable d’EcoRide.</p>
                            </section>

                            <section>
                                <h2>4. Données personnelles</h2>
                                <p>EcoRide s’engage à ce que la collecte et le traitement de vos données personnelles soient conformes à la réglementation en vigueur, notamment au Règlement Général sur la Protection des Données (RGPD – UE 2016/679).</p>
                                <p>Les informations personnelles collectées via le Site sont utilisées uniquement pour les finalités pour lesquelles elles ont été recueillies (création de compte, gestion des trajets, communication avec les utilisateurs, etc.).</p>
                                <p>Vous disposez d’un droit d’accès, de rectification, d’opposition, de limitation, d’effacement et de portabilité de vos données personnelles. Pour exercer ces droits, vous pouvez nous contacter à l’adresse suivante : <a href=\"mailto:dpo@ecoride.fr\">dpo@ecoride.fr</a> (ou toute autre adresse officielle de votre DPO / responsable des données).</p>
                                <p>Pour en savoir plus, consultez notre <a href=\"#\">Politique de confidentialité</a>.</p>
                            </section>

                            <section>
                                <h2>5. Responsabilité</h2>
                                <p>EcoRide met tout en œuvre pour offrir aux utilisateurs du Site des informations fiables. Toutefois, des erreurs ou omissions peuvent survenir. L'utilisateur devra donc s'assurer de l'exactitude des informations auprès d’EcoRide, et signaler toute modification du site qu'il jugerait utile.</p>
                                <p>EcoRide ne pourra en aucun cas être tenue responsable de l’utilisation faite de ces informations, ni de tout préjudice direct ou indirect pouvant en découler.</p>
                            </section>

                            <section>
                                <h2>6. Cookies</h2>
                                <p>Le Site utilise des cookies pour améliorer l'expérience utilisateur, mesurer l’audience et proposer des contenus adaptés. Vous pouvez à tout moment modifier vos préférences dans les paramètres de votre navigateur ou via notre bandeau de gestion des cookies.</p>
                            </section>

                            <section>
                                <h2>7. Droit applicable</h2>
                                <p>Le Site et ses mentions légales sont soumis au droit français. En cas de litige, et après tentative de résolution amiable, les tribunaux compétents seront ceux du ressort de la Cour d’appel de Paris, sauf dispositions légales contraires.</p>
                            </section>

                        </main>
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
        return "front/mentions_legales.html.twig";
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
        return new Source("", "front/mentions_legales.html.twig", "/var/www/html/template/html/front/mentions_legales.html.twig");
    }
}
