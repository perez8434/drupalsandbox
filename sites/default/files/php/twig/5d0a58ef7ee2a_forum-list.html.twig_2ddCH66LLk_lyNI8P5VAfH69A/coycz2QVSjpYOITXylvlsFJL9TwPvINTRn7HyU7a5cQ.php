<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* core/modules/forum/templates/forum-list.html.twig */
class __TwigTemplate_bd77f3f04dffdbe8b9f46fce7b82fcea02d5e204c4841b648b01178f6a9708fd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 45, "if" => 47];
        $filters = ["t" => 38, "escape" => 54];
        $functions = ["range" => 53];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['t', 'escape'],
                ['range']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 35
        echo "<table>
  <thead>
    <tr>
      <th>";
        // line 38
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Forum"));
        echo "</th>
      <th>";
        // line 39
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Topics"));
        echo "</th>
      <th>";
        // line 40
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Posts"));
        echo "</th>
      <th>";
        // line 41
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Last post"));
        echo "</th>
    </tr>
  </thead>
  <tbody>
  ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["forums"] ?? null));
        foreach ($context['_seq'] as $context["child_id"] => $context["forum"]) {
            // line 46
            echo "    <tr>
      <td";
            // line 47
            if (($this->getAttribute($context["forum"], "is_container", []) == true)) {
                echo " colspan=\"4\"";
            }
            echo ">
        ";
            // line 53
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($context["forum"], "depth", [])));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                if (($this->getAttribute($context["forum"], "depth", []) > 0)) {
                    echo "<div class=\"indent\">";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "          <div title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["forum"], "icon_title", [])), "html", null, true);
            echo "\">
            <span class=\"visually-hidden\">";
            // line 55
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["forum"], "icon_title", [])), "html", null, true);
            echo "</span>
          </div>
          <div><a href=\"";
            // line 57
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["forum"], "link", [])), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["forum"], "label", [])), "html", null, true);
            echo "</a></div>
          ";
            // line 58
            if ($this->getAttribute($this->getAttribute($context["forum"], "description", []), "value", [])) {
                // line 59
                echo "            <div>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["forum"], "description", []), "value", [])), "html", null, true);
                echo "</div>
          ";
            }
            // line 61
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($context["forum"], "depth", [])));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                if (($this->getAttribute($context["forum"], "depth", []) > 0)) {
                    echo "</div>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "      </td>
      ";
            // line 63
            if (($this->getAttribute($context["forum"], "is_container", []) == false)) {
                // line 64
                echo "        <td>
          ";
                // line 65
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["forum"], "num_topics", [])), "html", null, true);
                echo "
          ";
                // line 66
                if (($this->getAttribute($context["forum"], "new_topics", []) == true)) {
                    // line 67
                    echo "            <br />
            <a href=\"";
                    // line 68
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["forum"], "new_url", [])), "html", null, true);
                    echo "\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["forum"], "new_text", [])), "html", null, true);
                    echo "</a>
          ";
                }
                // line 70
                echo "        </td>
        <td>";
                // line 71
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["forum"], "num_posts", [])), "html", null, true);
                echo "</td>
        <td>";
                // line 72
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["forum"], "last_reply", [])), "html", null, true);
                echo "</td>
      ";
            }
            // line 74
            echo "    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['child_id'], $context['forum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "  </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "core/modules/forum/templates/forum-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 76,  176 => 74,  171 => 72,  167 => 71,  164 => 70,  157 => 68,  154 => 67,  152 => 66,  148 => 65,  145 => 64,  143 => 63,  140 => 62,  128 => 61,  122 => 59,  120 => 58,  114 => 57,  109 => 55,  104 => 54,  92 => 53,  86 => 47,  83 => 46,  79 => 45,  72 => 41,  68 => 40,  64 => 39,  60 => 38,  55 => 35,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "core/modules/forum/templates/forum-list.html.twig", "C:\\xampp\\htdocs\\drupalsandbox\\core\\modules\\forum\\templates\\forum-list.html.twig");
    }
}
