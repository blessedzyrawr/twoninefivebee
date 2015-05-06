<?php

/* /Applications/XAMPP/xamppfiles/htdocs/politi.co/plugins/husaymedia/pulitico/components/politician/default.htm */
class __TwigTemplate_9f2c61e8fb4fa060e7a59b0c277b2e8c7d0b4e9db83192892f8229c2555e6e3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "   <div class=\"page-header wow animated fadeInDown\" data-wow-duration=\"0.5s\">
\t\t\t\t<div class=\"q-container\">
\t\t\t\t\t<div class=\"q-row\">
\t\t\t\t\t\t<div class=\"q-col-1-1\">
\t\t\t\t\t\t\t<nav id=\"breadcrumbs\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 7
        echo $this->env->getExtension('System')->appFilter("/politician-directory");
        echo "\">Politician Directory</a></li>
\t\t\t\t\t\t\t\t\t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["politician"]) ? $context["politician"] : null), "crumbs", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
            // line 9
            echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 10
            echo $this->env->getExtension('System')->appFilter("politician-directory");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["crumb"], "slug", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["crumb"], "id", array()), "html", null, true);
            echo "\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["crumb"], "name", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t<h1 class=\"section-headline\"><span>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["politician"]) ? $context["politician"] : null), "positions", array()), 0, array(), "array"), "title", array()), "name", array()), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["politician"]) ? $context["politician"] : null), "getFullName", array()), "html", null, true);
        echo "</h1>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>


   <div class=\"page-body\">
\t\t\t\t<div class=\"q-container\">
\t\t\t\t\t<div class=\"q-row\">
\t\t\t\t\t\t<div class=\"content q-col-1-1\">

       <div class=\"q-row\">
\t\t\t\t\t\t\t\t<div class=\"q-col-1-5\">

\t\t\t\t\t\t\t\t\t<h5>Approval Rating</h5>
\t\t\t\t\t\t\t\t\t<div id=\"rating_wrapper\">
\t\t\t\t\t\t\t\t\t";
        // line 36
        if (($this->getAttribute((isset($context["politician"]) ? $context["politician"] : null), "getRating", array()) != 0)) {
            // line 37
            echo "\t\t\t\t\t\t\t\t\t\t<p class=\"large-text rating ";
            if (($this->getAttribute((isset($context["politician"]) ? $context["politician"] : null), "getRating", array()) < 0)) {
                echo "negative-rating";
            }
            echo "\"><i class=\"fa fa-thumbs-down\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["politician"]) ? $context["politician"] : null), "getRating", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 39
            echo "\t\t\t\t\t\t\t\t\t\t<p>Be the first to rate!</p>
\t\t\t\t\t\t\t\t\t";
        }
        // line 41
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"invisible\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"recalculate\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-request=\"onRecalculateRating\"
               data-request-update=\"'";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::recalculate_rating': '#rating_wrapper'\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t />
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"q-col-4-5\">
\t\t\t\t\t\t\t\t\t<h5>Biography</h5>
\t\t\t\t\t\t\t\t\t<div class=\"q-row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"q-col-4-5\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 54
        if (($this->getAttribute((isset($context["politician"]) ? $context["politician"] : null), "biography", array()) != "")) {
            // line 55
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            echo $this->getAttribute((isset($context["politician"]) ? $context["politician"] : null), "biography", array());
            echo "
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 57
            echo "\t\t\t\t\t\t\t\t\t\t\t<p>This politician has no biography yet.</p>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 59
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"q-col-1-5\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 61
        if (($this->getAttribute($this->getAttribute((isset($context["politician"]) ? $context["politician"] : null), "profile_images", array()), "count", array()) > 0)) {
            // line 62
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"simple-slider\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 63
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["politician"]) ? $context["politician"] : null), "profile_images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 64
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"simple-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-src=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "filename", array()), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "path", array()), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "description", array()), "html", null, true);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 73
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-src=\"";
            // line 74
            echo $this->env->getExtension('CMS')->themeFilter("assets/images/candidate-fancy.png");
            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
            // line 75
            echo $this->env->getExtension('CMS')->themeFilter("assets/images/candidate-fancy.png");
            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"placeholder\" />
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 78
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
        // line 84
        if (($this->getAttribute($this->getAttribute((isset($context["politician"]) ? $context["politician"] : null), "getUserTestimonial", array()), "count", array()) > 0)) {
            // line 85
            echo "       <h2>Testimonials</h2>
       <div id=\"demo-tabs-hor\" class=\"tabs-hor\">
\t\t\t\t\t\t\t\t<ul class=\"resp-tabs-list\">
\t\t\t\t\t\t\t\t\t<li id=\"positive_toggle\">Positive</li>
\t\t\t\t\t\t\t\t\t<li id=\"negative_toggle\">Negative</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"resp-tabs-container\">
\t\t\t\t\t\t\t\t\t<div id=\"positive_testi_container\">
          ";
            // line 93
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["politician"]) ? $context["politician"] : null), "getPositiveTestimonials", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
                // line 94
                echo "            <div class=\"q-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"q-col-1-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["testimonial"], "user", array()), "name", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["testimonial"], "user", array()), "surname", array()), "html", null, true);
                echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-src=\"";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["testimonial"], "user", array()), "avatar", array()), "filename", array()), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["testimonial"], "user", array()), "avatar", array()), "path", array()), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["testimonial"], "user", array()), "avatar", array()), "description", array()), "html", null, true);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"q-col-2-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>";
                // line 103
                echo $this->getAttribute($context["testimonial"], "comment", array());
                echo "</blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "         </div>

\t\t\t\t\t\t\t\t\t<div id=\"negative_testi_container\">
\t\t\t\t\t\t\t\t\t\t";
            // line 110
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["politician"]) ? $context["politician"] : null), "getNegativeTestimonials", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
                // line 111
                echo "            <div class=\"q-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"q-col-1-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
                // line 113
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["testimonial"], "user", array()), "name", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["testimonial"], "user", array()), "surname", array()), "html", null, true);
                echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-src=\"";
                // line 115
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["testimonial"], "user", array()), "avatar", array()), "filename", array()), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
                // line 116
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["testimonial"], "user", array()), "avatar", array()), "path", array()), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"";
                // line 117
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["testimonial"], "user", array()), "avatar", array()), "description", array()), "html", null, true);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"q-col-2-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>";
                // line 120
                echo $this->getAttribute($context["testimonial"], "comment", array());
                echo "</blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 129
        echo "
\t\t\t\t\t\t\t<div class=\"q-row\" >
\t\t\t\t\t\t\t\t<div class=\"q-col-1-1\" id=\"my_testimonial\">
\t\t\t\t\t\t\t\t\t";
        // line 132
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 133
            echo "
\t\t\t\t\t\t\t\t\t\t";
            // line 134
            if (($this->getAttribute($this->getAttribute((isset($context["politician"]) ? $context["politician"] : null), "getUserTestimonial", array()), "count", array()) > 0)) {
                // line 135
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['testimonial'] = $this->getAttribute((isset($context["politician"]) ? $context["politician"] : null), "getUserTestimonial", array())                ;
                echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::edit_testimonial")                , $context['__cms_partial_params']                );
                unset($context['__cms_partial_params']);
                // line 136
                echo "\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 137
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::add_testimonial")                , $context['__cms_partial_params']                );
                unset($context['__cms_partial_params']);
                // line 138
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            // line 139
            echo "
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 141
            echo "\t\t\t\t\t\t\t\t\t\t<p>You must be <a href=\"";
            echo $this->env->getExtension('System')->appFilter("sign-up");
            echo "\">logged in</a> to add or edit ratings to our puliti.cos.<a href=\"";
            echo $this->env->getExtension('System')->appFilter("sign-up");
            echo "\">Click here to go to login or register</a></p>
\t\t\t\t\t\t\t\t\t";
        }
        // line 143
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>


      </div>
    </div>
   </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "/Applications/XAMPP/xamppfiles/htdocs/politi.co/plugins/husaymedia/pulitico/components/politician/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 143,  324 => 141,  320 => 139,  317 => 138,  312 => 137,  309 => 136,  303 => 135,  301 => 134,  298 => 133,  296 => 132,  291 => 129,  284 => 124,  274 => 120,  268 => 117,  264 => 116,  260 => 115,  253 => 113,  249 => 111,  245 => 110,  240 => 107,  230 => 103,  224 => 100,  220 => 99,  216 => 98,  209 => 96,  205 => 94,  201 => 93,  191 => 85,  189 => 84,  181 => 78,  175 => 75,  171 => 74,  168 => 73,  164 => 71,  155 => 68,  151 => 67,  147 => 66,  143 => 64,  139 => 63,  136 => 62,  134 => 61,  130 => 59,  126 => 57,  120 => 55,  118 => 54,  107 => 46,  100 => 41,  96 => 39,  86 => 37,  84 => 36,  60 => 17,  56 => 15,  46 => 11,  38 => 10,  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }
}
