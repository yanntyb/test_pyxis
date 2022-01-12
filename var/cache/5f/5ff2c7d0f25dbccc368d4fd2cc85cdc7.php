<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* maquette1.html.twig */
class __TwigTemplate_4203039e89967580207628482abbbe9e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "maquette1.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Maquette 1";
    }

    // line 3
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<link rel=\"stylesheet\" href=\"/build/css/maquette1.css\">";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <header>
        <img src=\"/build/images/logo.jpg\" alt=\"logo\">
    </header>
    <div id=\"container-1\">
        <div id=\"info\">
            <img src=\"/build/images/birthday.png\" alt=\"\">
            <div>
                <span>UN EVENEMENT A ORGANISER ?</span>
                <h1>Nos professionnels s'occupent de tous</h1>
            </div>
        </div>
        <div id=\"container-formulaire\">
            <h3>Organiser un évènement</h3>
            <div id=\"formulaire\">
                <form action=\"/maquette2\" method=\"post\">
                    <div>
                        <input name=\"name\" type=\"text\" placeholder=\"Nom & Prénom\" required>
                    </div>
                    <div>
                        <input name=\"email\" type=\"email\" placeholder=\"Adresse email\" required>
                    </div>
                    <div>
                        <textarea notre name=\"message\" id=\"\" cols=\"30\" rows=\"5\" placeholder=\"Message\" required></textarea>
                    </div>
                    <div>
                        <input type=\"submit\" value=\"Organiser\">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id=\"container-2\">
        <div class=\"item\" id=\"first\">
            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>
            <div id=\"sub-item-cont\">
                <div id=\"sub-item\">
                    <div id=\"first-sub\">In arcus</div>
                    <div id=\"sec-sub\">Cursus euismod</div>
                </div>
            </div>
        </div>
        <div class=\"item\">
            <div>
                <img src=\"/build/images/calendar.png\" alt=\"\">
            </div>

            <div>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eos exercitationem incidunt nisi omnis, quaerat reiciendis sint. Aliquid atque culpa maxime minus modi numquam, officiis quas reprehenderit. Architecto corporis, nobis.
            </div>
            <div class=\"more\">
                En savoir +
            </div>
        </div>
        <div class=\"item\">
            <div>
                <img src=\"/build/images/balloon.png\" alt=\"\">
            </div>

            <div>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eos exercitationem incidunt nisi omnis, quaerat reiciendis sint. Aliquid atque culpa maxime minus modi numquam, officiis quas reprehenderit. Architecto corporis, nobis.
            </div>
            <div class=\"more\">
                En savoir +
            </div>
        </div>
        <div class=\"item\">
            <div>
                <img src=\"/build/images/karaoke.png\" alt=\"\">
            </div>

            <div>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eos exercitationem incidunt nisi omnis, quaerat reiciendis sint. Aliquid atque culpa maxime minus modi numquam, officiis quas reprehenderit. Architecto corporis, nobis.
            </div>
            <div class=\"more\">
                En savoir +
            </div>
        </div>
    </div>
    <div id=\"container-3\">
        <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium, animi.</h2>
        <h3>tempor incidunt ut labore et dolore aliqua.</h3>
    </div>
    <div id=\"container-4\">
        <img src=\"/build/images/slider-1.jpg\">
        <img src=\"/build/images/slider-2.jpg\">
        <img src=\"/build/images/slider-3.jpg\">
        <img src=\"/build/images/slider-4.jpg\">
        <img src=\"/build/images/slider-5.jpg\">
        <img src=\"/build/images/slider-6.jpg\">
    </div>
    <div id=\"container-5\">
        <div id=\"title\">
            <div>
                <h2>Lorem ipsum dolor sit amet.</h2>
                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, ab adipisci autem commodi cupiditate delectus dicta ex, facere hic ipsum laboriosam magni, modi nobis non provident temporibus voluptatibus. Deserunt, esse!</h3>

            </div>
        </div>
        <div id=\"content\">
            <div class=\"item\">
                <h2>Lorem</h2>
                <h1>nunc</h1>
                <ul>
                    <li>- ullamcorper a</li>
                    <li>- ullamcorper a</li>
                    <li>- ullamcorper a</li>
                    <li>- ullamcorper a</li>
                </ul>
                <div class=\"link\">
                    <a href=\"#\">SED</a>
                </div>
            </div>
            <div class=\"item expand\">
                <h2>Lorem</h2>
                <h1>nunc</h1>
                <ul>
                    <li>- ullamcorper a</li>
                    <li>- ullamcorper a</li>
                    <li>- ullamcorper a</li>
                    <li>- ullamcorper a</li>
                    <li>- ullamcorper a</li>
                    <li>- ullamcorper a</li>
                </ul>
                <div class=\"link\">
                    <a href=\"#\">SED</a>
                </div>
            </div>
            <div class=\"item\">
                <h2>Lorem</h2>
                <h1>nunc</h1>
                <ul>
                    <li>- ullamcorper a</li>
                    <li>- ullamcorper a</li>
                    <li>- ullamcorper a</li>
                    <li>- ullamcorper a</li>
                </ul>
                <div class=\"link\">
                    <a href=\"#\">SED</a>
                </div>
            </div>
        </div>
    </div>
    <div id=\"container-6\">
        <div>
            <h1>Lorem ipsum dolor sit amet.</h1>
            <div id=\"form\">
                <form action=\"#\">
                    <div id=\"input\">
                        <img src=\"/build/images/email.png\" alt=\"\">
                        <input type=\"email\" placeholder=\"Adresse email\">
                    </div>
                    <div id=\"submit\">
                        <a href=\"#\">Souscrire</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <div>
            <h1>Compagnie</h1>
            <p>Est ante porta non ultrices dui ipsum suspendisse magma sit</p>
        </div>
        <div>
            <h1>Compagnie</h1>
            <p>Est ante porta non ultrices dui ipsum suspendisse magma sit</p>
        </div>
        <div>
            <h1>Compagnie</h1>
            <p>Est ante porta non ultrices dui ipsum suspendisse magma sit</p>
        </div>
        <div>
            <h1>Compagnie</h1>
            <p>Est ante porta non ultrices dui ipsum suspendisse magma sit</p>
        </div>
    </footer>
";
    }

    public function getTemplateName()
    {
        return "maquette1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 5,  62 => 4,  55 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}Maquette 1{% endblock %}
{% block css %}<link rel=\"stylesheet\" href=\"/build/css/maquette1.css\">{% endblock %}
{% block body %}
    <header>
        <img src=\"/build/images/logo.jpg\" alt=\"logo\">
    </header>
    <div id=\"container-1\">
        <div id=\"info\">
            <img src=\"/build/images/birthday.png\" alt=\"\">
            <div>
                <span>UN EVENEMENT A ORGANISER ?</span>
                <h1>Nos professionnels s'occupent de tous</h1>
            </div>
        </div>
        <div id=\"container-formulaire\">
            <h3>Organiser un évènement</h3>
            <div id=\"formulaire\">
                <form action=\"/maquette2\" method=\"post\">
                    <div>
                        <input name=\"name\" type=\"text\" placeholder=\"Nom & Prénom\" required>
                    </div>
                    <div>
                        <input name=\"email\" type=\"email\" placeholder=\"Adresse email\" required>
                    </div>
                    <div>
                        <textarea notre name=\"message\" id=\"\" cols=\"30\" rows=\"5\" placeholder=\"Message\" required></textarea>
                    </div>
                    <div>
                        <input type=\"submit\" value=\"Organiser\">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id=\"container-2\">
        <div class=\"item\" id=\"first\">
            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>
            <div id=\"sub-item-cont\">
                <div id=\"sub-item\">
                    <div id=\"first-sub\">In arcus</div>
                    <div id=\"sec-sub\">Cursus euismod</div>
                </div>
            </div>
        </div>
        <div class=\"item\">
            <div>
                <img src=\"/build/images/calendar.png\" alt=\"\">
            </div>

            <div>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eos exercitationem incidunt nisi omnis, quaerat reiciendis sint. Aliquid atque culpa maxime minus modi numquam, officiis quas reprehenderit. Architecto corporis, nobis.
            </div>
            <div class=\"more\">
                En savoir +
            </div>
        </div>
        <div class=\"item\">
            <div>
                <img src=\"/build/images/balloon.png\" alt=\"\">
            </div>

            <div>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eos exercitationem incidunt nisi omnis, quaerat reiciendis sint. Aliquid atque culpa maxime minus modi numquam, officiis quas reprehenderit. Architecto corporis, nobis.
            </div>
            <div class=\"more\">
                En savoir +
            </div>
        </div>
        <div class=\"item\">
            <div>
                <img src=\"/build/images/karaoke.png\" alt=\"\">
            </div>

            <div>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eos exercitationem incidunt nisi omnis, quaerat reiciendis sint. Aliquid atque culpa maxime minus modi numquam, officiis quas reprehenderit. Architecto corporis, nobis.
            </div>
            <div class=\"more\">
                En savoir +
            </div>
        </div>
    </div>
    <div id=\"container-3\">
        <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium, animi.</h2>
        <h3>tempor incidunt ut labore et dolore aliqua.</h3>
    </div>
    <div id=\"container-4\">
        <img src=\"/build/images/slider-1.jpg\">
        <img src=\"/build/images/slider-2.jpg\">
        <img src=\"/build/images/slider-3.jpg\">
        <img src=\"/build/images/slider-4.jpg\">
        <img src=\"/build/images/slider-5.jpg\">
        <img src=\"/build/images/slider-6.jpg\">
    </div>
    <div id=\"container-5\">
        <div id=\"title\">
            <div>
                <h2>Lorem ipsum dolor sit amet.</h2>
                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, ab adipisci autem commodi cupiditate delectus dicta ex, facere hic ipsum laboriosam magni, modi nobis non provident temporibus voluptatibus. Deserunt, esse!</h3>

            </div>
        </div>
        <div id=\"content\">
            <div class=\"item\">
                <h2>Lorem</h2>
                <h1>nunc</h1>
                <ul>
                    <li>- ullamcorper a</li>
                    <li>- ullamcorper a</li>
                    <li>- ullamcorper a</li>
                    <li>- ullamcorper a</li>
                </ul>
                <div class=\"link\">
                    <a href=\"#\">SED</a>
                </div>
            </div>
            <div class=\"item expand\">
                <h2>Lorem</h2>
                <h1>nunc</h1>
                <ul>
                    <li>- ullamcorper a</li>
                    <li>- ullamcorper a</li>
                    <li>- ullamcorper a</li>
                    <li>- ullamcorper a</li>
                    <li>- ullamcorper a</li>
                    <li>- ullamcorper a</li>
                </ul>
                <div class=\"link\">
                    <a href=\"#\">SED</a>
                </div>
            </div>
            <div class=\"item\">
                <h2>Lorem</h2>
                <h1>nunc</h1>
                <ul>
                    <li>- ullamcorper a</li>
                    <li>- ullamcorper a</li>
                    <li>- ullamcorper a</li>
                    <li>- ullamcorper a</li>
                </ul>
                <div class=\"link\">
                    <a href=\"#\">SED</a>
                </div>
            </div>
        </div>
    </div>
    <div id=\"container-6\">
        <div>
            <h1>Lorem ipsum dolor sit amet.</h1>
            <div id=\"form\">
                <form action=\"#\">
                    <div id=\"input\">
                        <img src=\"/build/images/email.png\" alt=\"\">
                        <input type=\"email\" placeholder=\"Adresse email\">
                    </div>
                    <div id=\"submit\">
                        <a href=\"#\">Souscrire</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <div>
            <h1>Compagnie</h1>
            <p>Est ante porta non ultrices dui ipsum suspendisse magma sit</p>
        </div>
        <div>
            <h1>Compagnie</h1>
            <p>Est ante porta non ultrices dui ipsum suspendisse magma sit</p>
        </div>
        <div>
            <h1>Compagnie</h1>
            <p>Est ante porta non ultrices dui ipsum suspendisse magma sit</p>
        </div>
        <div>
            <h1>Compagnie</h1>
            <p>Est ante porta non ultrices dui ipsum suspendisse magma sit</p>
        </div>
    </footer>
{% endblock %}", "maquette1.html.twig", "C:\\Users\\yannt\\Desktop\\+4\\stage\\test_pyxis\\templates\\maquette1.html.twig");
    }
}
