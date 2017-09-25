<?php

/* settings/mta.html */
class __TwigTemplate_af8189744e3a4f244373aee6efd66a727e0b46ea4c0d7fd37465a616c356994e extends Twig_Template
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
        $context["intervals"] = array(0 => 1, 1 => 2, 2 => 5, 3 => 10, 4 => 15, 5 => 30);
        // line 2
        $context["default_frequency"] = array("website" => array("emails" => 25, "interval" => 5), "smtp" => array("emails" => 100, "interval" => 5));
        // line 12
        echo "
<!-- mta: group -->
<input
  type=\"hidden\"
  id=\"mta_group\"
  name=\"mta_group\"
  value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()), "html", null, true);
        echo "\"
/>
<input
  type=\"hidden\"
  id=\"mailpoet_smtp_provider\"
  name=\"mailpoet_smtp_provider\"
  value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "smtp_provider", array()), "html", null, true);
        echo "\"
/>
<!-- mta: method -->
<input
  type=\"hidden\"
  id=\"mta_method\"
  name=\"mta[method]\"
  value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "method", array()), "html", null, true);
        echo "\"
/>

<!-- mta: sending frequency -->
<input
  type=\"hidden\"
  id=\"mta_frequency_emails\"
  name=\"mta[frequency][emails]\"
  value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "frequency", array()), "emails", array()), "html", null, true);
        echo "\"
/>
<input
  type=\"hidden\"
  id=\"mta_frequency_interval\"
  name=\"mta[frequency][interval]\"
  value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "frequency", array()), "interval", array()), "html", null, true);
        echo "\"
/>

<!-- mta: mailpoet sending service key -->
<input
  type=\"hidden\"
  id=\"mailpoet_api_key\"
  name=\"mta[mailpoet_api_key]\"
  value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "mailpoet_api_key", array()), "html", null, true);
        echo "\"
/>

<!-- smtp: available sending methods -->
<ul class=\"mailpoet_sending_methods\">
  <li
    data-group=\"mailpoet\"
    ";
        // line 60
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "mailpoet")) {
            echo "class=\"mailpoet_active\"";
        }
        // line 61
        echo "  >
    <div class=\"mailpoet_sending_method_description\">
      <h3>
        ";
        // line 64
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("MailPoet Sending Service");
        echo "
      </h3>

      <p
        class=\"mailpoet_description";
        // line 68
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) != "mailpoet")) {
            echo " mailpoet_hidden";
        }
        echo "\"
        id=\"mailpoet_sending_method_active_text\"
      >
        <strong>";
        // line 71
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("You're now sending with MailPoet!");
        echo "</strong>
        <br />
        ";
        // line 73
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Great, you're all set up. Your emails will now be sent quickly and reliably!");
        echo "
      </p>

      <div
        class=\"mailpoet_description";
        // line 77
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "mailpoet")) {
            echo " mailpoet_hidden";
        }
        echo "\"
        id=\"mailpoet_sending_method_inactive_text\"
      >
        <strong>";
        // line 80
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Solve all of your sending problems!");
        echo "</strong>

        <ul class=\"sending-method-benefits mailpoet_success\">
          <li class=\"mailpoet_success_item\">";
        // line 83
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Reach the inbox, not the spam box.");
        echo "
          <li class=\"mailpoet_success_item\">";
        // line 84
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Super fast: send up to 50,000 emails per hour.");
        echo "
          <li class=\"mailpoet_success_item\">";
        // line 85
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("All emails are signed with SPF & DKIM.");
        echo "
          <li class=\"mailpoet_success_item\">";
        // line 86
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Automatically remove invalid and bounced addresses (bounce handling) to keep your lists clean.");
        echo "
          <li class=\"mailpoet_success_item\">";
        // line 87
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Configuration is dead-simple: simply enter a key to activate the sending service.");
        echo "
          <li class=\"mailpoet_success_item\"><strong>";
        // line 88
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Coming soon:");
        echo "</strong> ";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("MailPoet will send your WordPress site and account emails, too!");
        echo "
          <li class=\"mailpoet_success_item\"><strong>";
        // line 89
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Plus:");
        echo "</strong> ";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("get the Premium features for free.");
        echo "
        </li>
        </ul>
        <a
          href=\"";
        // line 93
        echo admin_url("admin.php?page=mailpoet-premium");
        echo "\"
          class=\"button button-primary\"
          target=\"_blank\"
        >";
        // line 96
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Find out more about our monthly plans");
        echo "</a>

        <a href=\"https://www.mailpoet.com/free-plan/\" class=\"button button-primary sending-free-plan-button\" target=\"_blank\">
          <strong>";
        // line 99
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("new!");
        echo "</strong> ";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Try it for free (for up to 2,000 subscribers)");
        echo "
        </a>
      </div>
    </div>
    <div class=\"mailpoet_status\">
      <span>";
        // line 104
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Activated");
        echo "</span>

      <div class=\"mailpoet_actions\">
        <button
          type=\"button\"
          class=\"mailpoet_sending_service_activate button-secondary\"
        ";
        // line 110
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "mailpoet") ||  !(isset($context["mss_key_valid"]) ? $context["mss_key_valid"] : null))) {
            echo " disabled=\"disabled\"";
        }
        // line 111
        echo "        >";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Activate");
        echo "</button>
      </div>
    </div>

  </li>
  <li
    data-group=\"other\"
    ";
        // line 118
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "smtp") || ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "website"))) {
            echo "class=\"mailpoet_active\"";
        }
        // line 119
        echo "  >
    <div class=\"mailpoet_sending_method_description\">
      <h3>";
        // line 121
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Other");
        echo "</h3>
      <div class=\"mailpoet_description\">
        <strong>";
        // line 123
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Send emails via your host (not recommended!) or via a third-party sender.");
        echo "</strong>
        <ul class=\"sending-method-benefits mailpoet_error\">
          <li class=\"mailpoet_error_item\">";
        // line 125
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Unless you're a pro, you’ll probably end up in spam.");
        echo "
          <li class=\"mailpoet_error_item\">";
        // line 126
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Sending speed is limited by your host and/or your third-party (with a 2,000 per hour maximum).");
        echo "
          <li class=\"mailpoet_error_item\">";
        // line 127
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Manual configuration of SPF and DKIM required.");
        echo "
          <li class=\"mailpoet_error_item\">";
        // line 128
        echo MailPoet\Util\Helpers::replaceLinkTags($this->env->getExtension('MailPoet\Twig\I18n')->translate("Bounce handling is available, but only with an extra [link]add-on[/link]."), "https://wordpress.org/plugins/bounce-handler-mailpoet/", array("target" => "_blank"));
        // line 132
        echo "
          <li class=\"mailpoet_error_item\">";
        // line 133
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("You’ll need a separate plugin to send your WordPress site emails (optional).");
        echo "
        </ul>
      </div>
    </div>
    <div class=\"mailpoet_status\">
      <span>";
        // line 138
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Activated");
        echo "</span>
      <div class=\"mailpoet_actions\">
        <a
          class=\"button-secondary\"
          href=\"#mta/other\">";
        // line 142
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Configure");
        echo "</a>
      </div>
    </div>
  </li>
</ul>

<p class=\"mailpoet_sending_methods_help help\">
  ";
        // line 149
        echo MailPoet\Util\Helpers::replaceLinkTags($this->env->getExtension('MailPoet\Twig\I18n')->translate("Need help to pick? [link]Check out the comparison table of sending methods[/link]."), "http://beta.docs.mailpoet.com/article/181-comparison-table-of-sending-methods", array("target" => "_blank"));
        // line 152
        echo "
</p>

<div id=\"mailpoet_sending_method_setup\">

  <!-- Sending Method: Other -->
  <div class=\"mailpoet_sending_method\" data-group=\"other\" style=\"display:none;\">
    <table class=\"form-table\">
      <tr>
        <th scope=\"row\">
          <label for=\"mailpoet_smtp_method\">
            ";
        // line 163
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Method");
        echo "
          </label>
        </th>
        <td>
          <!-- smtp provider -->
          <select
            id=\"mailpoet_smtp_method\"
            name=\"smtp_provider\"
          >
            <option data-interval=\"5\" data-emails=\"25\" value=\"server\">
              ";
        // line 173
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your web host / web server");
        echo "
            </option>
            <option data-interval=\"5\" data-emails=\"100\" value=\"manual\"
              ";
        // line 177
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "smtp")) {
            // line 179
            echo "              selected=\"selected\"
              ";
        }
        // line 181
        echo "            >
              ";
        // line 182
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("SMTP");
        echo "
            </option>
            <!-- providers -->
            <optgroup label=\"";
        // line 185
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Select your provider");
        echo "\">
              ";
        // line 186
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["hosts"]) ? $context["hosts"] : null), "smtp", array()));
        foreach ($context['_seq'] as $context["host_key"] => $context["host"]) {
            // line 187
            echo "              <option
                value=\"";
            // line 188
            echo twig_escape_filter($this->env, $context["host_key"], "html", null, true);
            echo "\"
                data-emails=\"";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute($context["host"], "emails", array()), "html", null, true);
            echo "\"
                data-interval=\"";
            // line 190
            echo twig_escape_filter($this->env, $this->getAttribute($context["host"], "interval", array()), "html", null, true);
            echo "\"
                data-fields=\"";
            // line 191
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($context["host"], "fields", array()), ","), "html", null, true);
            echo "\"
              ";
            // line 192
            if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "smtp_provider", array()) == $context["host_key"])) {
                // line 193
                echo "              selected=\"selected\"
              ";
            }
            // line 195
            echo "              >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["host"], "name", array()), "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['host_key'], $context['host'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        echo "            </optgroup>
          </select>
        </td>
      </tr>
      <tr id=\"mailpoet_sending_method_host\"
        ";
        // line 203
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "smtp")) {
            // line 205
            echo "        style=\"display:none;\"
        ";
        }
        // line 207
        echo "      >
        <th scope=\"row\">
          <label for=\"mailpoet_web_host\">
            ";
        // line 210
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your web host");
        echo "
          </label>
        </th>
        <td>
          <p>
            <!-- sending frequency -->
            <select
              id=\"mailpoet_web_host\"
              name=\"web_host\"
            >

              <!-- web hosts -->
              <option
                value=\"manual\"
                data-emails=\"25\"
                data-interval=\"5\"
                label=\"";
        // line 226
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Not listed (default)");
        echo "\"
              >
              ";
        // line 228
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["hosts"]) ? $context["hosts"] : null), "web", array()));
        foreach ($context['_seq'] as $context["host_key"] => $context["host"]) {
            // line 229
            echo "              <option
                value=\"";
            // line 230
            echo twig_escape_filter($this->env, $context["host_key"], "html", null, true);
            echo "\"
                data-emails=\"";
            // line 231
            echo twig_escape_filter($this->env, $this->getAttribute($context["host"], "emails", array()), "html", null, true);
            echo "\"
                data-interval=\"";
            // line 232
            echo twig_escape_filter($this->env, $this->getAttribute($context["host"], "interval", array()), "html", null, true);
            echo "\"
              ";
            // line 233
            if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "web_host", array()) == $context["host_key"])) {
                // line 234
                echo "              selected=\"selected\"
              ";
            }
            // line 236
            echo "              >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["host"], "name", array()), "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['host_key'], $context['host'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 238
        echo "            </select>
          </p>

        </td>
      </tr>
      <tr>
        <th scope=\"row\">
          <label for=\"mailpoet_web_host\">
            ";
        // line 246
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Sending frequency");
        echo "
          </label>
        </th>
        <td>
          <p>
            <!-- sending frequency -->
            <select
              id=\"mailpoet_sending_frequency\"
              name=\"mailpoet_sending_frequency\"
            >
              <option value=\"auto\">
                ";
        // line 257
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Recommended");
        echo "
              </option>
              <option value=\"manual\"
                ";
        // line 261
        if ( !($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mailpoet_sending_frequency", array()) == "auto")) {
            // line 263
            echo "                selected=\"selected\"
                ";
        }
        // line 265
        echo "              >
                ";
        // line 266
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("I'll set my own frequency");
        echo "
              </option>
            </select>
            <span id=\"mailpoet_recommended_daily_emails\"></span>
          </p>
          <div id=\"mailpoet_sending_frequency_manual\"
            ";
        // line 273
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mailpoet_sending_frequency", array()) == "auto")) {
            // line 275
            echo "              style=\"display: none\"
            ";
        }
        // line 277
        echo "          >
            <p>
              <input
                id=\"other_frequency_emails\"
                type=\"number\"
                min=\"1\"
                max=\"1000\"
              ";
        // line 284
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "frequency", array()), "emails", array())) {
            // line 285
            echo "                value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "frequency", array()), "emails", array()), "html", null, true);
            echo "\"
              ";
        } else {
            // line 287
            echo "                value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["default_frequency"]) ? $context["default_frequency"] : null), "website", array()), "emails", array()), "html", null, true);
            echo "\"
              ";
        }
        // line 289
        echo "              />
              ";
        // line 290
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("emails");
        echo "
              <select id=\"other_frequency_interval\">
                ";
        // line 292
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["intervals"]) ? $context["intervals"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["interval"]) {
            // line 293
            echo "                <option
                  value=\"";
            // line 294
            echo twig_escape_filter($this->env, $context["interval"], "html", null, true);
            echo "\"
                ";
            // line 296
            if (( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "frequency", array()), "interval", array()) && (            // line 297
$context["interval"] == $this->getAttribute($this->getAttribute((isset($context["default_frequency"]) ? $context["default_frequency"] : null), "website", array()), "interval", array())))) {
                // line 299
                echo "                selected=\"selected\"
                ";
            }
            // line 301
            echo "                ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "frequency", array()), "interval", array()) == $context["interval"])) {
                // line 302
                echo "                selected=\"selected\"
                ";
            }
            // line 304
            echo "                >
                ";
            // line 305
            echo $this->env->getExtension('MailPoet\Twig\Functions')->getSendingFrequency($context["interval"]);
            echo "
                ";
            // line 306
            if (($context["interval"] == $this->getAttribute($this->getAttribute((isset($context["default_frequency"]) ? $context["default_frequency"] : null), "website", array()), "interval", array()))) {
                // line 307
                echo "                (";
                echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("recommended");
                echo ")
                ";
            }
            // line 309
            echo "                </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interval'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 311
        echo "              </select>
              <span id=\"mailpoet_other_daily_emails\"></span>
            </p>
            <br />
            <p>
              ";
        // line 316
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("<strong>Warning!</strong> You may break the terms of your web host or provider by sending more than the recommended emails per day. Contact your host if you want to send more.");
        echo "
            </p>
          </div>
        </td>
      </tr>
      <tr class=\"mailpoet_smtp_field\" data-field=\"host\"
        ";
        // line 323
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) != "smtp") || ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "smtp_provider", array()) != "manual"))) {
            // line 325
            echo "        style=\"display:none;\"
        ";
        }
        // line 327
        echo "      >
        <th scope=\"row\">
          <label for=\"settings[mta_host]\">
            ";
        // line 330
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("SMTP Hostname");
        echo "
          </label>
          <p class=\"description\">
            ";
        // line 333
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("e.g.: smtp.mydomain.com");
        echo "
          </p>
        </th>
        <td>
          <input
            type=\"text\"
            class=\"regular-text\"
            id=\"settings[mta_host]\"
            name=\"mta[host]\"
            value=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "host", array()), "html", null, true);
        echo "\" />
        </td>
      </tr>
      <!-- smtp: port -->
      <tr class=\"mailpoet_smtp_field\" data-field=\"port\"
        ";
        // line 348
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) != "smtp") || ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "smtp_provider", array()) != "manual"))) {
            // line 350
            echo "        style=\"display:none;\"
        ";
        }
        // line 352
        echo "      >
        <th scope=\"row\">
          <label for=\"settings[mta_port]\">
            ";
        // line 355
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("SMTP Port");
        echo "
          </label>
        </th>
        <td>
          <input
            type=\"number\"
            max=\"65535\"
            min=\"1\"
            maxlength=\"5\"
            style=\"width:5em;\"
            id=\"settings[mta_port]\"
            name=\"mta[port]\"
            value=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "port", array()), "html", null, true);
        echo "\"
          />
        </td>
      </tr>

      <!-- smtp: amazon region -->
      <tr class=\"mailpoet_aws_field\" data-field=\"region\"
        ";
        // line 375
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) != "smtp") || ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "smtp_provider", array()) != "AmazonSES"))) {
            // line 377
            echo "        style=\"display:none;\"
        ";
        }
        // line 379
        echo "      >
        <th scope=\"row\">
          <label for=\"settings[mta_region]\">
            ";
        // line 382
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Region");
        echo "
          </label>
        </th>
        <td>
          <select
            id=\"settings[mta_region]\"
            name=\"mta[region]\"
            value=\"";
        // line 389
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "smtp")) {
            // line 390
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "region", array()), "html", null, true);
        }
        // line 391
        echo "\"
          >
            ";
        // line 393
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["hosts"]) ? $context["hosts"] : null), "smtp", array()), "AmazonSES", array()), "regions", array()));
        foreach ($context['_seq'] as $context["region"] => $context["server"]) {
            // line 394
            echo "            <option
              value=\"";
            // line 395
            echo twig_escape_filter($this->env, $context["server"], "html", null, true);
            echo "\"
            ";
            // line 396
            if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "region", array()) == $context["server"])) {
                // line 397
                echo "            selected=\"selected\"
            ";
            }
            // line 399
            echo "            >
            ";
            // line 400
            echo twig_escape_filter($this->env, $context["region"], "html", null, true);
            echo "
            </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['region'], $context['server'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 403
        echo "          </select>
        </td>
      </tr>

      <!-- smtp: amazon access_key -->
      <tr class=\"mailpoet_aws_field\" data-field=\"access_key\"
        ";
        // line 410
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) != "smtp") || ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "smtp_provider", array()) != "AmazonSES"))) {
            // line 412
            echo "        style=\"display:none;\"
        ";
        }
        // line 414
        echo "      >
        <th scope=\"row\">
          <label for=\"settings[mta_access_key]\">
            ";
        // line 417
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Access Key");
        echo "
          </label>
        </th>
        <td>
          <input
            type=\"text\"
            class=\"regular-text\"
            id=\"settings[mta_access_key]\"

            name=\"mta[access_key]\"
            value=\"";
        // line 427
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "smtp")) {
            // line 428
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "access_key", array()), "html", null, true);
        }
        // line 429
        echo "\"
          />
        </td>
      </tr>

      <!-- smtp: amazon secret_key -->
      <tr class=\"mailpoet_aws_field\" data-field=\"secret_key\"
        ";
        // line 437
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) != "smtp") || ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "smtp_provider", array()) != "AmazonSES"))) {
            // line 439
            echo "        style=\"display:none;\"
        ";
        }
        // line 441
        echo "      >
        <th scope=\"row\">
          <label for=\"settings[mta_secret_key]\">
            ";
        // line 444
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Secret Key");
        echo "
          </label>
        </th>
        <td>
          <input
            type=\"text\"
            class=\"regular-text\"
            id=\"settings[mta_secret_key]\"

            name=\"mta[secret_key]\"
            value=\"";
        // line 454
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "smtp")) {
            // line 455
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "secret_key", array()), "html", null, true);
        }
        // line 456
        echo "\"
          />
        </td>
      </tr>

      <!-- smtp: api key -->
      <tr class=\"mailpoet_sendgrid_field\" data-field=\"api_key\"
        ";
        // line 464
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) != "smtp") || ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "smtp_provider", array()) != "SendGrid"))) {
            // line 466
            echo "        style=\"display:none;\"
        ";
        }
        // line 468
        echo "      >
        <th scope=\"row\">
          <label for=\"settings[mta_api_key]\">
            ";
        // line 471
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("API Key");
        echo "
          </label>
        </th>
        <td>
          <input
            type=\"text\"
            class=\"regular-text\"
            id=\"settings[mta_api_key]\"
            name=\"mta[api_key]\"
            value=\"";
        // line 480
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "api_key", array()), "html", null, true);
        echo "\"
          />
        </td>
      </tr>

      <!-- smtp: login -->
      <tr id=\"mta_login\" class=\"mailpoet_smtp_field\" data-field=\"login\"
        ";
        // line 488
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) != "smtp") || ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "smtp_provider", array()) != "manual"))) {
            // line 490
            echo "        style=\"display:none;\"
        ";
        }
        // line 492
        echo "      >
        <th scope=\"row\">
          <label for=\"settings[mta_login]\">
            ";
        // line 495
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Login");
        echo "
          </label>
        </th>
        <td>
          <input
            type=\"text\"
            class=\"regular-text\"
            id=\"settings[mta_login]\"
            name=\"mta[login]\"
            value=\"";
        // line 504
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "login", array()), "html", null, true);
        echo "\"
          />
        </td>
      </tr>
      <!-- smtp: password -->
      <tr id=\"mta_password\" class=\"mailpoet_smtp_field\" data-field=\"password\"
        ";
        // line 511
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) != "smtp") || ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "smtp_provider", array()) != "manual"))) {
            // line 513
            echo "        style=\"display:none;\"
        ";
        }
        // line 515
        echo "      >
        <th scope=\"row\">
          <label for=\"settings[mta_password]\">
            ";
        // line 518
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Password");
        echo "
          </label>
        </th>
        <td>
          <input
            type=\"password\"
            class=\"regular-text\"
            id=\"settings[mta_password]\"
            name=\"mta[password]\"
            value=\"";
        // line 527
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "password", array()), "html", null, true);
        echo "\"
          />
        </td>
      </tr>
      <!-- smtp: security protocol -->
      <tr class=\"mailpoet_smtp_field\" data-field=\"encryption\"
        ";
        // line 534
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) != "smtp") || ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "smtp_provider", array()) != "manual"))) {
            // line 536
            echo "        style=\"display:none;\"
        ";
        }
        // line 538
        echo "      >
        <th scope=\"row\">
          <label for=\"settings[mta_encryption]\">
            ";
        // line 541
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Secure Connection");
        echo "
          </label>
        </th>
        <td>
          <select id=\"settings[mta_encryption]\" name=\"mta[encryption]\">
            <option value=\"\">";
        // line 546
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No");
        echo "</option>
            <option
              value=\"ssl\"
            ";
        // line 549
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "encryption", array()) == "ssl")) {
            // line 550
            echo "            selected=\"selected\"
            ";
        }
        // line 552
        echo "            >SSL</option>
            <option
              value=\"tls\"
            ";
        // line 555
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "encryption", array()) == "tls")) {
            // line 556
            echo "            selected=\"selected\"
            ";
        }
        // line 558
        echo "            >TLS</option>
          </select>
        </td>
      </tr>
      <!-- smtp: authentication -->
      <tr class=\"mailpoet_smtp_field\" data-field=\"authentication\"
        ";
        // line 565
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) != "smtp") || ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "smtp_provider", array()) != "manual"))) {
            // line 567
            echo "        style=\"display:none;\"
        ";
        }
        // line 569
        echo "      >
        <th scope=\"row\">
          <label>
            ";
        // line 572
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Authentication");
        echo "
          </label>
          <p class=\"description\">
            ";
        // line 575
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Leave this option set to Yes. Only a tiny portion of SMTP services prefer Authentication to be turned off.");
        echo "
          </p>
        </th>
        <td>
          <label>
            <input
              type=\"radio\"
              value=\"1\"
              name=\"mta[authentication]\"
            ";
        // line 585
        if (( !$this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "authentication", array()) || ($this->getAttribute($this->getAttribute(        // line 586
(isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "authentication", array()) == "1"))) {
            // line 587
            echo "            checked=\"checked\"
            ";
        }
        // line 589
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yes");
        echo "
          </label>
          &nbsp;
          <label>
            <input
              type=\"radio\"
              value=\"-1\"
              name=\"mta[authentication]\"
            ";
        // line 597
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "authentication", array()) == "-1")) {
            // line 598
            echo "            checked=\"checked\"
            ";
        }
        // line 600
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No");
        echo "
          </label>
        </td>
      </tr>
      </tbody>
    </table>
  </div>

  <table class=\"form-table\">
    <tbody>
      <!-- SPF -->
      <tr id=\"mailpoet_mta_spf\">
        <th scope=\"row\">
          <label>
            ";
        // line 614
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("SPF Signature (Highly recommended!)");
        echo "
          </label>
          <p class=\"description\">
            ";
        // line 617
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This improves your delivery rate by verifying that you're allowed to send emails from your domain.");
        echo "
          </p>
        </th>
        <td>
          <p>
            ";
        // line 622
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("SPF is set up in your DNS. Read your host's support documentation for more information.");
        echo "
          </p>
        </td>
      </tr>
      <!-- test method -->
      <tr>
        <th scope=\"row\">
          <label for=\"mailpoet_mta_test_email\">
            ";
        // line 630
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Test the sending method");
        echo "
          </label>
        </th>
        <td>
          <p>
            <input
              type=\"text\"
              id=\"mailpoet_mta_test_email\"
              class=\"regular-text\"
              value=\"";
        // line 639
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current_user"]) ? $context["current_user"] : null), "user_email", array()), "html", null, true);
        echo "\"
            />
            <a
              id=\"mailpoet_mta_test\"
              class=\"button-secondary\"
            >";
        // line 644
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Send a test email");
        echo "</a>

            <span id=\"tooltip-test\"></span>
          </p>
        </td>
      </tr>
      <!-- activate or cancel -->
      <tr>
        <th scope=\"row\">
          <p>
            <a
              href=\"javascript:;\"
              class=\"mailpoet_mta_setup_save button button-primary\"
            >";
        // line 657
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Activate");
        echo "</a>
            &nbsp;
            <a
              href=\"javascript:;\"
              class=\"mailpoet_mta_setup_cancel\"
            >";
        // line 662
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("or Cancel");
        echo "</a>
          </p>
        </th>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>

<script type=\"text/javascript\">
  jQuery(function(\$) {
    var tooltip = '";
        // line 673
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, MailPoet\Util\Helpers::replaceLinkTags($this->env->getExtension('MailPoet\Twig\I18n')->translate("Didn't receive the test email? Read our [link]quick guide[/link] to sending issues."), "http://beta.docs.mailpoet.com/article/146-my-newsletters-are-not-being-received", array("target" => "_blank")), "js"), "html", null, true);
        // line 675
        echo "'

    MailPoet.helpTooltip.show(document.getElementById(\"tooltip-test\"), {
      tooltipId: \"tooltip-settings-test\",
      tooltip: tooltip,
    });

    var sending_frequency_template =
      Handlebars.compile(\$('#mailpoet_sending_frequency_template').html());

    // om dom loaded
    \$(function() {
      // constrain number type inputs
      \$('input[type=\"number\"]').on('keyup', function() {
        var currentValue = \$(this).val();
        if(!currentValue) return;

        var minValue = \$(this).attr('min');
        var maxValue = \$(this).attr('max');
        \$(this).val(Math.min(Math.max(minValue, currentValue), maxValue));
      });

      // testing sending method
      \$('#mailpoet_mta_test').on('click', function() {
        // get test email and include it in data
        var recipient = \$('#mailpoet_mta_test_email').val();

        var settings = jQuery('#mailpoet_settings_form').serializeObject();
        var mailer = settings.mta;

        mailer.method = getMethodFromGroup(\$('#mta_group').val());

        // check that we have a from address
        if(settings.sender.address.length === 0) {
          // validation
          return MailPoet.Notice.error(
            '";
        // line 711
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("The email could not be sent. Make sure the option \"Email notifications\" has a FROM email address in the Basics tab."), "js"), "html", null, true);
        echo "',
            { scroll: true, static: true }
          );
        }

        MailPoet.Modal.loading(true);
        MailPoet.Ajax.post({
          api_version: window.mailpoet_api_version,
          endpoint: 'mailer',
          action: 'send',
          data: {
            mailer: mailer,
            newsletter: {
              subject: \"";
        // line 724
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This is a Sending Method Test");
        echo "\",
              body: {
                html: \"<p>";
        // line 726
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yup, it works! You can start blasting away emails to the moon.");
        echo "</p>\",
                text: \"";
        // line 727
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yup, it works! You can start blasting away emails to the moon.");
        echo "\"
              }
            },
            subscriber: recipient
          }
        }).always(function() {
          MailPoet.Modal.loading(false);
        }).done(function(response) {
          MailPoet.Notice.success(
            \"";
        // line 736
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("The email has been sent! Check your inbox."), "js"), "html", null, true);
        echo "\",
            { scroll: true }
          );
          trackTestEmailSent(true);
        }).fail(function(response) {
          if (response.errors.length > 0) {
            MailPoet.Notice.error(
              response.errors.map(function(error) { return _.escape(error.message); }),
              { scroll: true }
            );
          }
          trackTestEmailSent(false);
        });
      });

      // sending frequency update based on selected provider
      \$('#mailpoet_web_host').on('change keyup', renderHostSendingFrequency);

      // update manual sending frequency when values are changed
      \$('#other_frequency_emails').on('change keyup', function() {
        updateSendingFrequency('other');
      });
      \$('#other_frequency_interval').on('change keyup', function() {
        updateSendingFrequency('other');
      });

      // save configuration of a sending method
      \$('.mailpoet_sending_service_activate').on('click', function() {
        \$('#mta_group').val('mailpoet');
        saveSendingMethodConfiguration('mailpoet');
      });
      \$('.mailpoet_mta_setup_save').on('click', function() {
        \$('#mailpoet_smtp_method').trigger(\"change\");
        \$('#other_frequency_emails').trigger(\"change\");
        // get selected method
        var group = \$('.mailpoet_sending_method:visible').data('group');
        saveSendingMethodConfiguration(group);
      });
      \$('#mailpoet_smtp_method').on('change keyup', renderHostsSelect);
      \$('#mailpoet_sending_frequency').on('change keyup', sendingFrequencyMethodUpdated);

      ";
        // line 777
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) != "mailpoet")) {
            // line 778
            echo "        \$('#mailpoet_smtp_method').trigger(\"change\");
        \$('#other_frequency_emails').trigger(\"change\");
      ";
        }
        // line 781
        echo "
      function saveSendingMethodConfiguration(group) {

        // set sending method
        if(group === undefined) {
          MailPoet.Notice.error(
            \"";
        // line 787
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("You have selected an invalid sending method."), "js"), "html", null, true);
        echo "\"
          );
        } else {
          // set new sending method active
          setSendingMethodGroup(group);

          // enforce signup confirmation depending on selected group
          setSignupConfirmation(group);

          // back to selection of sending methods
          MailPoet.Router.navigate('mta', { trigger: true });

          // save settings
          \$('.mailpoet_settings_submit > input').trigger('click');
        }
      }

      function setSignupConfirmation(group) {
        if (group === 'mailpoet') {
          // force signup confirmation (select \"Yes\")
          \$('.mailpoet_signup_confirmation[value=\"1\"]').attr('checked', true);
          \$('.mailpoet_signup_confirmation[value=\"\"]').attr('checked', false);

          // hide radio inputs
          \$('#mailpoet_signup_confirmation_input').hide();

          // show mailpoet specific notice
          \$('#mailpoet_signup_confirmation_notice').show();

          // show signup confirmation options
          \$('#mailpoet_signup_options').show();
        } else {
          // show radio inputs
          \$('#mailpoet_signup_confirmation_input').show();

          // hide mailpoet specific notice
          \$('#mailpoet_signup_confirmation_notice').hide();
        }
      }

      function setSendingMethodGroup(group) {
        // deactivate other sending methods
        \$('.mailpoet_sending_methods .mailpoet_active')
          .removeClass('mailpoet_active');

        // set active sending method
        \$('.mailpoet_sending_methods li[data-group=\"'+group+'\"]')
          .addClass('mailpoet_active');

        var method = getMethodFromGroup(\$('#mta_group').val());

        \$('#mta_method').val(method);

        // set MailPoet method description
        \$('#mailpoet_sending_method_active_text')
          .toggleClass('mailpoet_hidden', group !== 'mailpoet');
        \$('#mailpoet_sending_method_inactive_text')
          .toggleClass('mailpoet_hidden', group === 'mailpoet');

        // Hide server error notices
        \$('.mailpoet_notice_server').hide();

        updateMSSActivationUI();
      }

      function getMethodFromGroup(group) {
        var group = group || 'website';
        switch(group) {
          case 'mailpoet':
            return 'MailPoet';
          break;
          case 'website':
            return 'PHPMail';
          break;
          case 'smtp':
            var method = \$('#mailpoet_smtp_provider').val();
            if(method === 'manual') {
              return 'SMTP';
            }
            return method;
          break;
        }
      }

      // cancel configuration of a sending method
      \$('.mailpoet_mta_setup_cancel').on('click', function() {
        // back to selection of sending methods
        MailPoet.Router.navigate('mta', { trigger: true });
      });

      // render sending frequency form
      \$('#mailpoet_smtp_provider').trigger('change');
      \$('#mailpoet_web_host').trigger('change');

      function trackTestEmailSent(success) {
        MailPoet.trackEvent(
          'User has sent a test email from Settings',
          {
            'Sending was successful': !!success,
            'Sending method type': mailer.method,
            'MailPoet Free version': window.mailpoet_version
          }
        );
      }

      \$('.mailpoet_sending_methods_help a').on('click', function() {
        MailPoet.trackEvent(
          'User has clicked to view the sending comparison table',
          {'MailPoet Free version': window.mailpoet_version}
        );
      });
    });

    function setProviderForm() {
      // check provider
      var provider = \$(this).find('option:selected').first();
      var fields = provider.data('fields');

      if(fields === undefined) {
        fields = [
          'host',
          'port',
          'login',
          'password',
          'authentication',
          'encryption'
        ];
      } else {
        fields = fields.split(',');
      }

      \$('.mailpoet_smtp_field').hide();

      fields.map(function(field) {
        \$('.mailpoet_smtp_field[data-field=\"'+field+'\"]').show();
      });

      // update sending frequency
      renderSMTPSendingFrequency(provider);
    }

    function renderSMTPSendingFrequency() {
      // set sending frequency
      var emails = \$('#smtp_frequency_emails').val();
      var interval = \$('#smtp_frequency_interval').val();
      setSendingFrequency({
        output: '#mailpoet_smtp_daily_emails',
        only_daily: true,
        emails: emails,
        interval: interval
      });
      \$('#mta_frequency_emails').val(emails);
      \$('#mta_frequency_interval').val(interval);
    }

    function sendingFrequencyMethodUpdated() {
      var method = \$(this).find('option:selected').first();
      var sendingMethod = \$('#mailpoet_smtp_method').find('option:selected').first().val();
      if(method.val() === \"manual\") {
        \$('#mailpoet_sending_frequency_manual').show();
        \$('#mailpoet_recommended_daily_emails').hide();
        \$('#other_frequency_emails').trigger(\"change\");
      } else {
        \$('#mailpoet_sending_frequency_manual').hide();
        if(sendingMethod !== \"server\") {
          \$('#mailpoet_recommended_daily_emails').show();
        }
        \$('#mailpoet_smtp_method').trigger(\"change\");
      }
    }

    function renderHostsSelect() {
      var method = \$(this).find('option:selected').first();
      var val = method.val();

      if(val === \"server\") {
        \$('#mailpoet_sending_method_host').show();
        \$('#mta_group').val('website');
      } else {
        \$('#mailpoet_sending_method_host').hide();
      }
      if(val === \"manual\") {
        \$('.mailpoet_smtp_field').show();
        \$('#mta_group').val('smtp');
        \$('#mailpoet_smtp_provider').val('manual');
      } else {
        \$('.mailpoet_smtp_field').hide();
      }
      if(val === \"AmazonSES\") {
        \$('.mailpoet_aws_field').show();
        \$('#mta_group').val('smtp');
        \$('#mailpoet_smtp_provider').val('AmazonSES');
      } else {
        \$('.mailpoet_aws_field').hide();
      }
      if(val === \"SendGrid\") {
        \$('.mailpoet_sendgrid_field').show();
        \$('#mta_group').val('smtp');
        \$('#mailpoet_smtp_provider').val('SendGrid');
      } else {
        \$('.mailpoet_sendgrid_field').hide();
      }
      var emails = method.data('emails');
      var interval = method.data('interval');
      if(val === \"server\") {
        emails = \$('#mailpoet_web_host').find('option:selected').first().data('emails');
        interval = \$('#mailpoet_web_host').find('option:selected').first().data('interval');
      }
      const frequencyMethod = \$('#mailpoet_sending_frequency').find('option:selected').first().val();
      if(frequencyMethod === \"manual\") {
        \$('#mailpoet_recommended_daily_emails').hide();
        emails = \$('#other_frequency_emails').val();
        interval = \$('#other_frequency_interval').val();
      } else {
        \$('#mailpoet_recommended_daily_emails').show();
      }
      setSendingFrequency({
        output: '#mailpoet_recommended_daily_emails',
        only_daily: false,
        emails: emails,
        interval: interval
      });
      \$('#mta_frequency_emails').val(emails);
      \$('#mta_frequency_interval').val(interval);
    }

    function renderHostSendingFrequency() {

      var host = \$(this).find('option:selected').first();
      var frequencyType = \$(\"#mailpoet_sending_frequency\").find('option:selected').first().val();

      var emails =
        host.data('emails') || ";
        // line 1019
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["default_frequency"]) ? $context["default_frequency"] : null), "website", array()), "emails", array()), "html", null, true);
        echo ";
      var interval =
        host.data('interval') || ";
        // line 1021
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["default_frequency"]) ? $context["default_frequency"] : null), "website", array()), "interval", array()), "html", null, true);
        echo ";
      var fields =
        host.data('fields') || '';

      if (frequencyType === \"manual\") {
        return;
      } else {
        setSendingFrequency({
          output: '#mailpoet_recommended_daily_emails',
          only_daily: false,
          emails: emails,
          interval: interval
        });
      }

      \$('#mta_frequency_emails').val(emails);
      \$('#mta_frequency_interval').val(interval);
    }

    function updateSendingFrequency(method) {
      // get emails
      var options = {
        only_daily: true,
        emails: \$('#'+method+'_frequency_emails').val(),
        interval: \$('#'+method+'_frequency_interval').val()
      };

      var MINUTES_PER_DAY = 1440;
      var SECONDS_PER_DAY = 86400;

      options.daily_emails = ~~(
        (MINUTES_PER_DAY / options.interval) * options.emails
      );

      options.emails_per_second = (~~(
        ((options.daily_emails) / 86400) * 10)
      ) / 10;


      // format daily emails number according to locale
      options.daily_emails = options.daily_emails.toLocaleString();

      \$('#mailpoet_'+method+'_daily_emails').html(
        sending_frequency_template(options)
      );

      // update actual sending frequency values
      \$('#mta_frequency_emails').val(options.emails);
      \$('#mta_frequency_interval').val(options.interval);
    }

    function setSendingFrequency(options) {
      options.daily_emails = ~~((1440 / options.interval) * options.emails);

      // format daily emails number according to locale
      options.daily_emails = options.daily_emails.toLocaleString();

      \$(options.output).html(
        sending_frequency_template(options)
      );
    }

    Handlebars.registerHelper('format_time', function(value, block) {
      var label = null;
      var labels = {
        minute: \"";
        // line 1086
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("every minute");
        echo "\",
        minutes: \"";
        // line 1087
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("every %1\$d minutes");
        echo "\",
        hour: \"";
        // line 1088
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("every hour");
        echo "\",
        hours: \"";
        // line 1089
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("every %1\$d hours");
        echo "\"
      };

      // cast time as int
      value = ~~(value);

      // format time depending on the value
      if(value >= 60) {
        // we're dealing with hours
        if(value === 60) {
          label = labels.hour;
        } else {
          label = labels.hours;
        }
        value /= 60;
      } else {
        // we're dealing with minutes
        if(value === 1) {
          label = labels.minute;
        } else {
          label = labels.minutes;
        }
      }

      if(label !== null) {
        return label.replace('%1\$d', value);
      } else {
        return value;
      }
    });
  });

  // enable/disable MSS method activate button and notice
  function updateMSSActivationUI() {
    var \$ = jQuery;
    var group = \$('.mailpoet_sending_methods .mailpoet_active').data('group');
    var key_valid = !\$('.mailpoet_mss_key_valid').hasClass('mailpoet_hidden');
    var activation_possible = group !== 'mailpoet' && key_valid;
    \$('.mailpoet_sending_service_activate').prop('disabled', !activation_possible);
    \$('.mailpoet_mss_activate_notice').toggle(activation_possible);
  }
</script>

";
        // line 1132
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "mailpoet_sending_frequency_template", "settings/templates/sending_frequency.hbs");
        // line 1135
        echo "
";
    }

    public function getTemplateName()
    {
        return "settings/mta.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1619 => 1135,  1617 => 1132,  1571 => 1089,  1567 => 1088,  1563 => 1087,  1559 => 1086,  1491 => 1021,  1486 => 1019,  1251 => 787,  1243 => 781,  1238 => 778,  1236 => 777,  1192 => 736,  1180 => 727,  1176 => 726,  1171 => 724,  1155 => 711,  1117 => 675,  1115 => 673,  1101 => 662,  1093 => 657,  1077 => 644,  1069 => 639,  1057 => 630,  1046 => 622,  1038 => 617,  1032 => 614,  1014 => 600,  1010 => 598,  1008 => 597,  996 => 589,  992 => 587,  990 => 586,  989 => 585,  977 => 575,  971 => 572,  966 => 569,  962 => 567,  960 => 565,  952 => 558,  948 => 556,  946 => 555,  941 => 552,  937 => 550,  935 => 549,  929 => 546,  921 => 541,  916 => 538,  912 => 536,  910 => 534,  901 => 527,  889 => 518,  884 => 515,  880 => 513,  878 => 511,  869 => 504,  857 => 495,  852 => 492,  848 => 490,  846 => 488,  836 => 480,  824 => 471,  819 => 468,  815 => 466,  813 => 464,  804 => 456,  801 => 455,  799 => 454,  786 => 444,  781 => 441,  777 => 439,  775 => 437,  766 => 429,  763 => 428,  761 => 427,  748 => 417,  743 => 414,  739 => 412,  737 => 410,  729 => 403,  720 => 400,  717 => 399,  713 => 397,  711 => 396,  707 => 395,  704 => 394,  700 => 393,  696 => 391,  693 => 390,  691 => 389,  681 => 382,  676 => 379,  672 => 377,  670 => 375,  660 => 367,  645 => 355,  640 => 352,  636 => 350,  634 => 348,  626 => 342,  614 => 333,  608 => 330,  603 => 327,  599 => 325,  597 => 323,  588 => 316,  581 => 311,  574 => 309,  568 => 307,  566 => 306,  562 => 305,  559 => 304,  555 => 302,  552 => 301,  548 => 299,  546 => 297,  545 => 296,  541 => 294,  538 => 293,  534 => 292,  529 => 290,  526 => 289,  520 => 287,  514 => 285,  512 => 284,  503 => 277,  499 => 275,  497 => 273,  488 => 266,  485 => 265,  481 => 263,  479 => 261,  473 => 257,  459 => 246,  449 => 238,  440 => 236,  436 => 234,  434 => 233,  430 => 232,  426 => 231,  422 => 230,  419 => 229,  415 => 228,  410 => 226,  391 => 210,  386 => 207,  382 => 205,  380 => 203,  373 => 197,  364 => 195,  360 => 193,  358 => 192,  354 => 191,  350 => 190,  346 => 189,  342 => 188,  339 => 187,  335 => 186,  331 => 185,  325 => 182,  322 => 181,  318 => 179,  316 => 177,  310 => 173,  297 => 163,  284 => 152,  282 => 149,  272 => 142,  265 => 138,  257 => 133,  254 => 132,  252 => 128,  248 => 127,  244 => 126,  240 => 125,  235 => 123,  230 => 121,  226 => 119,  222 => 118,  211 => 111,  207 => 110,  198 => 104,  188 => 99,  182 => 96,  176 => 93,  167 => 89,  161 => 88,  157 => 87,  153 => 86,  149 => 85,  145 => 84,  141 => 83,  135 => 80,  127 => 77,  120 => 73,  115 => 71,  107 => 68,  100 => 64,  95 => 61,  91 => 60,  81 => 53,  70 => 45,  61 => 39,  50 => 31,  40 => 24,  31 => 18,  23 => 12,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "settings/mta.html", "/home/markomitranic/macola.rs/macola.rs/wp-content/plugins/mailpoet/views/settings/mta.html");
    }
}
