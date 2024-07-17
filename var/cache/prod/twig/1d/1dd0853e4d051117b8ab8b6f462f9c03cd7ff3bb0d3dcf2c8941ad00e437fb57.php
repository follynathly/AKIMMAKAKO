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

/* __string_template__e12160a0909319c7121fe2e7363f943eb2ade218d1a01d4a08806dc03e2e309e */
class __TwigTemplate_ca81a6e8ef9064a10818f2f408ece601ef5cf68f8a9c2725e937d9cf42e6b31d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop/img/app_icon.png\" />

<title>Gestionnaire de modules • AKIMMAKAKO</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModulesManage';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'TG';
    var _PS_VERSION_ = '1.7.8.11';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = 'caa73e3bbf999cde4a1a6f213f22fe3b';
    var token_admin_orders = tokenAdminOrders = '0c7642c373f5356d967497eecba60a0c';
    var token_admin_customers = '4da4bd26a2ebf02ebc3089d4e1efd88d';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '5533a217c9cc6d4f625e3ab701a4101f';
    var currentIndex = 'index.php?controller=AdminModulesManage';
    var employee_token = '7e42a1eda7bc7770e7a91691baf157bd';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/prestashop/admin892cnoj1o/index.php/improve/modules/catalog/recommended?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk';
    var admin_notification_get_link = '/prestashop";
        // line 42
        echo "/admin892cnoj1o/index.php/common/notifications?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk';
    var admin_notification_push_link = adminNotificationPushLink = '/prestashop/admin892cnoj1o/index.php/common/notifications/ack?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk';
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var errorLogin = 'PrestaShop n\\'a pas pu se connecter à Addons. Veuillez vérifier vos identifiants et votre connexion Internet.';
    var search_product_msg = 'Rechercher un produit';
  </script>

      <link href=\"/prestashop/admin892cnoj1o/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/admin892cnoj1o/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_mbo/views/css/catalog.css?v=3.1.3\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_mbo/views/css/module-catalog.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/prestashop\\/admin892cnoj1o\\/\";
var baseDir = \"\\/prestashop\\/\";
var changeFormLanguageUrl = \"\\/prestashop\\/admin892cnoj1o\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\";
var currency ";
        // line 65
        echo "= {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/prestashop/admin892cnoj1o/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/admin.js?v=1.7.8.11\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin892cnoj1o/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/tools.js?v=1.7.8.11\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin892cnoj1o/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_mbo/views/js/recommended-modules.js?v=3.1.3\"></";
        // line 83
        echo "script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/growl/jquery.growl.js?v=3.1.3\"></script>
<script type=\"text/javascript\" src=\"https://assets.prestashop3.com/dst/mbo/v1/mbo-cdc.umd.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/welcome/public/module.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/prestashop/admin892cnoj1o/index.php/common/notifications?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 105
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr adminmodulesmanage\"
  data-base-url=\"/prestashop/admin892cnoj1o/index.php\"  data-token=\"DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/prestashop/admin892cnoj1o/index.php?controller=AdminDashboard&amp;token=943172a35b004949a4e5d38d07657607\"></a>
      <span id=\"shop_version\">1.7.8.11</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashop/admin892cnoj1o/index.php?controller=AdminOrders&amp;token=0c7642c373f5356d967497eecba60a0c\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashop/admin892cnoj1o/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=08dcaea43c93509f15543c3cb0e45b4a\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item quick-row-link active\"
         href=\"http://localhost/prestashop/admin892cnoj1o/index.php/improve/modules/manage?token=c9d6062e413c621e4618d94317f064cd\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashop/admin892cnoj1o/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=b0b11d0d33eb066390f36d49f5d3ca8f\"
                 data-item=\"Nou";
        // line 140
        echo "veau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashop/admin892cnoj1o/index.php/sell/catalog/products/new?token=c9d6062e413c621e4618d94317f064cd\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashop/admin892cnoj1o/index.php/sell/catalog/categories/new?token=c9d6062e413c621e4618d94317f064cd\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-remove-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-method=\"remove\"
        data-quicklink-id=\"5\"
        data-rand=\"15\"
        data-icon=\"icon-AdminModulesSf\"
        data-url=\"index.php/improve/modules/manage\"
        data-post-link=\"http://localhost/prestashop/admin892cnoj1o/index.php?controller=AdminQuickAccesses&token=60477c9de8e099d172121437bb7ebf28\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Modules - Liste\"
      >
        <i class=\"material-icons\">remove_circle_outline</i>
        Supprimer de l'accès rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashop/admin892cnoj1o/index.php?controller=AdminQuickAccesses&token=60477c9de8e099d172121437bb7ebf28\">
      <i class=\"material-icons\">settings</i>
      Gérez vos accès rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/prestashop/admin892cnoj1o/index.php?controller=AdminSearch&amp;token=e8b7b2c3df41e954837480368195a574\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
 ";
        // line 181
        echo "   <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" aria-label=\"Barre de recherche\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, référence, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"Nom\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-val";
        // line 195
        echo "ue=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

      
      
              <div class=\"component\" id=\"header-shop-list-container\">
            <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/prestashop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Voir ma boutique</span>
    </a>
  </div>
        </div>
                    <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
  ";
        // line 249
        echo "            role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos <strong><a href=\"http://localhost/prestashop/admin892cnoj1o/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=cc7d0f81b629023c92bfaed29ed8a988\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande s'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              On dirait que vos clients sont satisfaits :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"";
        // line 296
        echo "order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">

      <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/prestashop/img/pr/default.jpg\" /></span>
      <span class=\"employee_profile\">Ravi de vous revoir FOLLY</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop/admin892cnoj1o/index.php/configure/advanced/employees/1/edit?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\">
      <i class=\"material-icons\">edit</i>
      <span>Votre profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/ressources/documentation?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">book</i> Documentation</a>
    <a class=\"dropdown";
        // line 338
        echo "-item\" href=\"https://www.prestashop.com/fr/formation?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">school</i> Formation</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">person_pin_circle</i> Trouver un expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com/fr/?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">extension</i> PrestaShop Marketplace</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">help</i> Centre d'assistance</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/prestashop/admin892cnoj1o/index.php?controller=AdminLogin&amp;logout=1&amp;token=c1311ad886ed21f6dfeae6e00f9a5264\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop/admin892cnoj1o/index.php/configure/advanced/employees/toggle-navigation?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"t";
        // line 365
        echo "ab-AdminDashboard\">
              <a href=\"http://localhost/prestashop/admin892cnoj1o/index.php?controller=AdminDashboard&amp;token=943172a35b004949a4e5d38d07657607\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestashop/admin892cnoj1o/index.php/sell/orders/?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Commandes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/prestashop/admin892cnoj1o/index.php/sell/orders/?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> Commandes
                                </a>
                              </li>

              ";
        // line 403
        echo "                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/prestashop/admin892cnoj1o/index.php/sell/orders/invoices/?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop/admin892cnoj1o/index.php/sell/orders/credit-slips/?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop/admin892cnoj1o/index.php/sell/orders/delivery-slips/?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/prestashop/admin892cnoj1o/index.php?controller=AdminCarts&amp;token=cc7d0f81b629023c92bfaed29ed";
        // line 431
        echo "8a988\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop/admin892cnoj1o/index.php/sell/catalog/products?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestashop/admin892cnoj1o/index.php/sell/catalog/products?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prest";
        // line 464
        echo "ashop/admin892cnoj1o/index.php/sell/catalog/categories?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> Catégories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestashop/admin892cnoj1o/index.php/sell/catalog/monitoring/?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/prestashop/admin892cnoj1o/index.php?controller=AdminAttributesGroups&amp;token=254974e40bef5e98f0b0278bcd3295b1\" class=\"link\"> Attributs &amp; caractéristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashop/admin892cnoj1o/index.php/sell/catalog/brands/?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                                  
                              
                     ";
        // line 494
        echo "                                       
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestashop/admin892cnoj1o/index.php/sell/attachments/?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/prestashop/admin892cnoj1o/index.php?controller=AdminCartRules&amp;token=b0b11d0d33eb066390f36d49f5d3ca8f\" class=\"link\"> Réductions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop/admin892cnoj1o/index.php/sell/stocks/?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashop/admin892cnoj1o/index.php/sell/customers/?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\">
                   ";
        // line 524
        echo "   <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestashop/admin892cnoj1o/index.php/sell/customers/?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop/admin892cnoj1o/index.php/sell/addresses/?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> Adresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
 ";
        // line 556
        echo "                   <a href=\"http://localhost/prestashop/admin892cnoj1o/index.php?controller=AdminCustomerThreads&amp;token=5533a217c9cc6d4f625e3ab701a4101f\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      SAV
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/prestashop/admin892cnoj1o/index.php?controller=AdminCustomerThreads&amp;token=5533a217c9cc6d4f625e3ab701a4101f\" class=\"link\"> SAV
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestashop/admin892cnoj1o/index.php/sell/customer-service/order-messages/?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li ";
        // line 585
        echo "class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/prestashop/admin892cnoj1o/index.php?controller=AdminReturn&amp;token=1aab5ccb2ea71e079b74b91966b15f39\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/prestashop/admin892cnoj1o/index.php/modules/metrics/legacy/stats?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"142\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/prestashop/admin892cnoj1o/index.php/modules/metrics/legacy/stats?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> Statistiques
                                </a>
                              </li>

                                             ";
        // line 615
        echo "                                     
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"143\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/prestashop/admin892cnoj1o/index.php/modules/metrics?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashop/admin892cnoj1o/index.php/modules/addons/modules/catalog?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
 ";
        // line 651
        echo "                             
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/prestashop/admin892cnoj1o/index.php/modules/addons/modules/catalog?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop/admin892cnoj1o/index.php/improve/modules/manage?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/prestashop/admin892cnoj1o/index.php/modules/addons/themes/catalog?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    key";
        // line 679
        echo "board_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"139\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/prestashop/admin892cnoj1o/index.php/modules/addons/themes/catalog?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> Catalogue de thèmes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/prestashop/admin892cnoj1o/index.php/improve/design/themes/?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> Thème et logo
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestashop/admin892cnoj1o/index.php/improve/design/mail_theme/?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> Thème d&#039;e-mail
                                </a>
                              </li>

                                                                                  
                           ";
        // line 708
        echo "   
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop/admin892cnoj1o/index.php/improve/design/cms-pages/?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop/admin892cnoj1o/index.php/improve/design/modules/positions/?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/prestashop/admin892cnoj1o/index.php?controller=AdminImages&amp;token=0bae56cacc5df268741dc65d1b053860\" class=\"link\"> Images
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashop/admin892cnoj1o/index.php/modules/link-widget/list?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> Liste de liens
                                </a>
      ";
        // line 737
        echo "                        </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/prestashop/admin892cnoj1o/index.php?controller=AdminCarriers&amp;token=9fa6a2782f14b2f6e0c0054c8285b338\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livraison
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/prestashop/admin892cnoj1o/index.php?controller=AdminCarriers&amp;token=9fa6a2782f14b2f6e0c0054c8285b338\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestashop/admin892cnoj1o";
        // line 768
        echo "/index.php/improve/shipping/preferences/?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestashop/admin892cnoj1o/index.php/improve/payment/payment_methods?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Paiement
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/prestashop/admin892cnoj1o/index.php/improve/payment/payment_methods?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> Moyens de paiement
                                </a>
                              </li>

                                                                                  
                              
                                                            
                  ";
        // line 800
        echo "            <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestashop/admin892cnoj1o/index.php/improve/payment/preferences?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop/admin892cnoj1o/index.php/improve/international/localization/?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/prestashop/admin892cnoj1o/index.php/improve/international/localization/?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> Localisation
                                </a>
                              </li>

               ";
        // line 830
        echo "                                                                   
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/prestashop/admin892cnoj1o/index.php/improve/international/zones/?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop/admin892cnoj1o/index.php/improve/international/taxes/?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestashop/admin892cnoj1o/index.php/improve/international/translations/settings?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> Traductions
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"144\" id=\"subtab-Marketing\">
          ";
        // line 861
        echo "          <a href=\"http://localhost/prestashop/admin892cnoj1o/index.php?controller=AdminPsfacebookModule&amp;token=ea8152c20d031653f6d37df6be9f4479\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-144\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"145\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/prestashop/admin892cnoj1o/index.php?controller=AdminPsfacebookModule&amp;token=ea8152c20d031653f6d37df6be9f4479\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"147\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/prestashop/admin892cnoj1o/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=9cf992497f4dd129f28d47b4acf9fc4e\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          ";
        // line 890
        echo "
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/prestashop/admin892cnoj1o/index.php/configure/shop/preferences/preferences?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/prestashop/admin892cnoj1o/index.php/configure/shop/preferences/preferences?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> Paramètres généraux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-subme";
        // line 925
        echo "nu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashop/admin892cnoj1o/index.php/configure/shop/order-preferences/?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashop/admin892cnoj1o/index.php/configure/shop/product-preferences/?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop/admin892cnoj1o/index.php/configure/shop/customer-preferences/?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop/admin892cnoj1o/index.php/configure/shop/contacts/?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> Contact
                                </a>
                              </li>

                                                           ";
        // line 954
        echo "                       
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestashop/admin892cnoj1o/index.php/configure/shop/seo-urls/?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/prestashop/admin892cnoj1o/index.php?controller=AdminSearchConf&amp;token=46a8e2e83b23e79ad1917efe5f763b7a\" class=\"link\"> Rechercher
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashop/admin892cnoj1o/index.php/configure/advanced/system-information/?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Paramètres avancés
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                       ";
        // line 984
        echo "                     </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/prestashop/admin892cnoj1o/index.php/configure/advanced/system-information/?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashop/admin892cnoj1o/index.php/configure/advanced/performance/?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/prestashop/admin892cnoj1o/index.php/configure/advanced/administration/?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <l";
        // line 1014
        echo "i class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop/admin892cnoj1o/index.php/configure/advanced/emails/?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop/admin892cnoj1o/index.php/configure/advanced/import/?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestashop/admin892cnoj1o/index.php/configure/advanced/employees/?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> Équipe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestashop/admin892cnoj1o/index.php/configure/advanced/sql-requests/?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                          ";
        // line 1043
        echo "                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop/admin892cnoj1o/index.php/configure/advanced/logs/?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop/admin892cnoj1o/index.php/configure/advanced/webservice-keys/?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"120\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/prestashop/admin892cnoj1o/index.php/configure/advanced/feature-flags/?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" class=\"link\"> Fonctionnalités expérimentales
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  <div class=\"onboarding-navbar bootstrap\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      Lancez votre ";
        // line 1076
        echo "boutique !
    </div>
    <div class=\"col-md-4 text-right text-md-right\">0%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:0%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Reprendre</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Quitter le tutoriel</a>
  </div>
</div>

</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Gestionnaire de modules </li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/prestashop/admin892cnoj1o/index.php/improve/modules/manage?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" aria-current=\"page\">Modules</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Gestionnaire de modules          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title=\"Installer un module\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">cloud_upload</i>                  Installer un module
                </a>
                                                                        <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-addons_connect\"
                  href=\"#\"                  title=\"Se connecter à la marketplace Addons\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"             ";
        // line 1129
        echo "   >
                  <i class=\"material-icons\">vpn_key</i>                  Se connecter à la marketplace Addons
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/prestashop/admin892cnoj1o/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Ffr%252Fdoc%252FAdminModules%253Fversion%253D1.7.8.11%2526country%253Dfr/Aide?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <li class=\"nav-item\">
                    <a href=\"/prestashop/admin892cnoj1o/index.php/improve/modules/manage?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" id=\"subtab-AdminModulesManage\" class=\"nav-link tab active current\" data-submenu=\"45\">
                      Modules
                      <span class=\"notification-container\">
                        <span cl";
        // line 1157
        echo "ass=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop/admin892cnoj1o/index.php/modules/addons/modules/uninstalled?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" id=\"subtab-AdminPsMboUninstalledModules\" class=\"nav-link tab \" data-submenu=\"140\">
                      Modules non installés
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop/admin892cnoj1o/index.php/improve/modules/alerts?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" id=\"subtab-AdminModulesNotifications\" class=\"nav-link tab \" data-submenu=\"46\">
                      Alertes
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop/admin892cnoj1o/index.php/improve/modules/updates?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\" id=\"subtab-AdminModulesUpdates\" class=\"nav-link tab \" data-submenu=\"47\">
                      Mises à jour
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                    ";
        // line 1185
        echo "                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item  pointer\"              id=\"page-header-desc-floating-configuration-add_module\"
              href=\"#\"              title=\"Installer un module\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Installer un module
              <i class=\"material-icons\">cloud_upload</i>            </a>
                                        <a
              class=\"btn btn-floating-item  pointer\"              id=\"page-header-desc-floating-configuration-addons_connect\"
              href=\"#\"              title=\"Se connecter à la marketplace Addons\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Se connecter à la marketplace Addons
              <i class=";
        // line 1206
        echo "\"material-icons\">vpn_key</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Aide\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/prestashop/admin892cnoj1o/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Ffr%252Fdoc%252FAdminModules%253Fversion%253D1.7.8.11%2526country%253Dfr/Aide?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\"
            >
              Aide
            </a>
                        </div>
    </div>
  </div>
  <script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Recommended modules',
        'description': \"Voici une sélection de modules,<\\strong> compatibles avec votre boutique <\\/strong>, pour vous aider à atteindre vos objectifs.\",
        'Close': 'Fermer',
      },
      recommendedModulesUrl: '/prestashop/admin892cnoj1o/index.php/modules/addons/modules/recommended?tabClassName=AdminModulesManage&_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 0,
      shouldUseLegacyTheme: 0,
    });
  }
</script>

<script>
\$(document).ready( function () {
  if (typeof window.mboCdc !== undefined && typeof window.mboCdc !== \"undefined\") {
    const targetDiv = \$('#main-div .content-div').first()

    const divModuleManagerMessage = document.createElement(\"div\");
    divModuleManagerMessage.setAttribute(\"id\", \"module-manager-message-cdc-container\");

    divModuleManagerMessage.classList.add('module-manager-message-wrapper');
    divModuleManagerMessage.classList.add('cdc-container');

    targetDiv.prepend(divModuleManagerMessage)
    const renderModulesManagerMessage = window.mboCdc.renderModulesManagerMessage

    const context = {\"currency\":\"EUR\",\"iso_lang\":\"fr\",\"iso_code\":\"tg\",\"shop_version\":\"1.7.8.1";
        // line 1249
        echo "1\",\"shop_url\":\"http:\\/\\/localhost\\/prestashop\\/\",\"shop_uuid\":\"63ca7a31-3d3d-4bf2-a0e9-73d800ffefce\",\"mbo_token\":\"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzaG9wX3VybCI6Imh0dHA6Ly9sb2NhbGhvc3QvcHJlc3Rhc2hvcC8iLCJzaG9wX3V1aWQiOiI2M2NhN2EzMS0zZDNkLTRiZjItYTBlOS03M2Q4MDBmZmVmY2UifQ.hj4AvuDtgHAIz7kOfrMje7tlFsbODGIOS6808iO9cMU\",\"mbo_version\":\"3.1.3\",\"mbo_reset_url\":\"\\/prestashop\\/admin892cnoj1o\\/index.php\\/improve\\/modules\\/manage\\/action\\/reset\\/ps_mbo?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\",\"user_id\":\"1\",\"admin_token\":\"DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\",\"refresh_url\":\"\\/prestashop\\/admin892cnoj1o\\/index.php\\/modules\\/mbo\\/me?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\",\"installed_modules\":[{\"id\":0,\"name\":\"blockreassurance\",\"status\":\"enabled__mobile_enabled\",\"version\":\"5.1.4\",\"config_url\":\"\\/prestashop\\/admin892cnoj1o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/blockreassurance?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\"},{\"id\":0,\"name\":\"blockwishlist\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.2\",\"config_url\":\"\\/prestashop\\/admin892cnoj1o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/blockwishlist?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\"},{\"id\":0,\"name\":\"contactform\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.4.1\",\"config_url\":\"\\/prestashop\\/admin892cnoj1o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/contactform?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\"},{\"id\":0,\"name\":\"dashactivity\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.0\",\"config_url\":null},{\"id\":0,\"name\":\"dashgoals\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":0,\"name\":\"dashproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.4\",\"config_url\":null},{\"id\":0,\"name\":\"dashtrends\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":0,\"name\":\"graphnvd3\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"gridh";
        echo "tml\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"gsitemap\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.3.0\",\"config_url\":\"\\/prestashop\\/admin892cnoj1o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/gsitemap?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\"},{\"id\":0,\"name\":\"pagesnotfound\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"productcomments\",\"status\":\"enabled__mobile_enabled\",\"version\":\"6.0.2\",\"config_url\":\"\\/prestashop\\/admin892cnoj1o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/productcomments?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\"},{\"id\":0,\"name\":\"psgdpr\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.4.3\",\"config_url\":\"\\/prestashop\\/admin892cnoj1o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/psgdpr?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\"},{\"id\":0,\"name\":\"psxmarketingwithgoogle\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.73.1\",\"config_url\":\"\\/prestashop\\/admin892cnoj1o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/psxmarketingwithgoogle?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\"},{\"id\":0,\"name\":\"ps_banner\",\"status\":\"enabled__mobile_disabled\",\"version\":\"2.1.2\",\"config_url\":\"\\/prestashop\\/admin892cnoj1o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_banner?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\"},{\"id\":0,\"name\":\"ps_buybuttonlite\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.1\",\"config_url\":\"\\/prestashop\\/admin892cnoj1o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_buybuttonlite?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\"},{\"id\":0,\"name\":\"ps_categorytree\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":\"\\/prestashop\\/admin892cnoj1o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_categorytree?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\"},{\"id\":0,\"name\":\"ps_checkpayment\",\"status\":\"enabled__mobile_en";
        echo "abled\",\"version\":\"2.1.0\",\"config_url\":\"\\/prestashop\\/admin892cnoj1o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_checkpayment?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\"},{\"id\":0,\"name\":\"ps_contactinfo\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.3.2\",\"config_url\":\"\\/prestashop\\/admin892cnoj1o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_contactinfo?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\"},{\"id\":0,\"name\":\"ps_crossselling\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":\"\\/prestashop\\/admin892cnoj1o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_crossselling?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\"},{\"id\":0,\"name\":\"ps_currencyselector\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":null},{\"id\":0,\"name\":\"ps_customeraccountlinks\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.2.0\",\"config_url\":null},{\"id\":0,\"name\":\"ps_customersignin\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.5\",\"config_url\":null},{\"id\":0,\"name\":\"ps_customtext\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.2.1\",\"config_url\":\"\\/prestashop\\/admin892cnoj1o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_customtext?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\"},{\"id\":0,\"name\":\"ps_dataprivacy\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":\"\\/prestashop\\/admin892cnoj1o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_dataprivacy?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\"},{\"id\":0,\"name\":\"ps_emailsubscription\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.7.1\",\"config_url\":\"\\/prestashop\\/admin892cnoj1o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_emailsubscription?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\"},{\"id\":0,\"name\":\"ps_facebook\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.37.0\",\"config_url\":\"\\/prestashop\\/admin892cnoj1o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_facebook?_toke";
        echo "n=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\"},{\"id\":0,\"name\":\"ps_facetedsearch\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.14.1\",\"config_url\":\"\\/prestashop\\/admin892cnoj1o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_facetedsearch?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\"},{\"id\":0,\"name\":\"ps_faviconnotificationbo\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":\"\\/prestashop\\/admin892cnoj1o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_faviconnotificationbo?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\"},{\"id\":0,\"name\":\"ps_featuredproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.5\",\"config_url\":\"\\/prestashop\\/admin892cnoj1o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_featuredproducts?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\"},{\"id\":0,\"name\":\"ps_imageslider\",\"status\":\"enabled__mobile_disabled\",\"version\":\"3.1.3\",\"config_url\":\"\\/prestashop\\/admin892cnoj1o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_imageslider?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\"},{\"id\":0,\"name\":\"ps_languageselector\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":0,\"name\":\"ps_linklist\",\"status\":\"enabled__mobile_enabled\",\"version\":\"5.0.5\",\"config_url\":\"\\/prestashop\\/admin892cnoj1o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_linklist?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\"},{\"id\":0,\"name\":\"ps_mainmenu\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.3.2\",\"config_url\":\"\\/prestashop\\/admin892cnoj1o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_mainmenu?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\"},{\"id\":0,\"name\":\"ps_mbo\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.1.3\",\"config_url\":null},{\"id\":0,\"name\":\"ps_metrics\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.0.5\",\"config_url\":\"\\/prestashop\\/admin892cnoj1o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_metrics?_token=DDny6k";
        echo "EjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\"},{\"id\":0,\"name\":\"ps_searchbar\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":0,\"name\":\"ps_sharebuttons\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.2\",\"config_url\":\"\\/prestashop\\/admin892cnoj1o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_sharebuttons?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\"},{\"id\":0,\"name\":\"ps_shoppingcart\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.0.0\",\"config_url\":\"\\/prestashop\\/admin892cnoj1o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_shoppingcart?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\"},{\"id\":0,\"name\":\"ps_socialfollow\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.3.0\",\"config_url\":\"\\/prestashop\\/admin892cnoj1o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_socialfollow?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\"},{\"id\":0,\"name\":\"ps_themecusto\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.2.3\",\"config_url\":null},{\"id\":0,\"name\":\"ps_wirepayment\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":\"\\/prestashop\\/admin892cnoj1o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_wirepayment?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\"},{\"id\":0,\"name\":\"statsbestcategories\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"statsbestcustomers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":0,\"name\":\"statsbestproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"statsbestsuppliers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":null},{\"id\":0,\"name\":\"statsbestvouchers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"statscarrier\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"statscatalog\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":";
        echo "null},{\"id\":0,\"name\":\"statscheckup\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"statsdata\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":\"\\/prestashop\\/admin892cnoj1o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/statsdata?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\"},{\"id\":0,\"name\":\"statsforecast\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":\"\\/prestashop\\/admin892cnoj1o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/statsforecast?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\"},{\"id\":0,\"name\":\"statsnewsletter\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"statspersonalinfos\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":0,\"name\":\"statsproduct\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":0,\"name\":\"statsregistrations\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"statssales\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.0\",\"config_url\":null},{\"id\":0,\"name\":\"statssearch\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":null},{\"id\":0,\"name\":\"statsstock\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"welcome\",\"status\":\"enabled__mobile_enabled\",\"version\":\"6.0.9\",\"config_url\":null}],\"accounts_user_id\":null,\"accounts_shop_id\":null,\"accounts_token\":\"\",\"accounts_component_loaded\":false,\"module_catalog_url\":\"\\/prestashop\\/admin892cnoj1o\\/index.php\\/modules\\/addons\\/modules\\/catalog?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\",\"theme_catalog_url\":\"\\/prestashop\\/admin892cnoj1o\\/index.php\\/modules\\/addons\\/themes\\/catalog?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\",\"php_version\":\"7.4.33\",\"shop_creation_date\":\"2024-07-08\",\"shop_business_sector_id\":null,\"shop_business_sector\":null,\"prestaShop_controller_class_name\":\"AdminModulesManage\"};

   ";
        // line 1251
        echo " renderModulesManagerMessage(context, '#module-manager-message-cdc-container')
  }
})
</script>

</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 9.0909090909091%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 45.454545454545%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 18.181818181818%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"width: 9.0909090909091%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 18.181818181818%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">5</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Continuer</button>
  <a class=\"onboarding-button-shut-down\">Passer le tutoriel</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(0, {\"groups\":[{\"name\":\"dashboard\",\"steps\":[{\"type\":\"popup\",\"text\":\"<div class=\\\"onboarding-welcome\\\">\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\n  <p class=\\\"welcome\\\">Bienvenue chez vous !<\\/p>\\n  <div class=\\\"content\\\">\\n    <p>Bonjour ! Je m'appelle Preston et je suis l\\u00e0 pour vous pr\\u00e9senter l'interface.<\\/p>\\n    <p>Vous d\\u00e9couvrirez les quelques \\u00e9tapes essentielle";
        // line 1300
        echo "s avant de lancer votre boutique :\\n    ajouter votre premier produit, personnaliser votre boutique, param\\u00e9trer vos transporteurs et modes de paiement...<\\/p>\\n  <\\/div>\\n  <div class=\\\"started\\\">\\n    <p>C'est parti !<\\/p>\\n  <\\/div>\\n  <div class=\\\"buttons\\\">\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">Plus tard<\\/button>\\n    <button class=\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\">D\\u00e9marrer<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"http:\\/\\/localhost\\/prestashop\\/admin892cnoj1o\\/index.php?controller=AdminDashboard&token=943172a35b004949a4e5d38d07657607\"}]},{\"name\":\"product\",\"title\":\"Cr\\u00e9ons votre premier produit\",\"subtitle\":{\"1\":\"Que souhaitez-vous en dire ? Pensez \\u00e0 ce que vos clients aimeraient savoir \\u00e0 propos de ce produit.\",\"2\":\"Ajoutez un contenu clair et attrayant. Pas d'inqui\\u00e9tude, vous pourrez toujours le modifier apr\\u00e8s !\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Donnez un nom accrocheur \\u00e0 votre produit.\",\"options\":[\"savepoint\"],\"page\":[\"\\/prestashop\\/admin892cnoj1o\\/index.php\\/sell\\/catalog\\/products\\/new?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\",\"index.php\\/sell\\/catalog\\/products\\/.+\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Renseignez les informations essentielles dans cet onglet. Les autres onglets vous permettront de g\\u00e9rer les options plus avanc\\u00e9es.\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Ajoutez une ou plusieurs images pour montrer votre produit sous son meilleur jour !\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Combien voulez-vous le vendre ?\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:firs";
        echo "t-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"Bravo ! Vous venez de cr\\u00e9er votre premier produit. Pas mal, non ?\",\"page\":\"index.php\\/sell\\/catalog\\/products\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"name\":\"theme\",\"title\":\"Donnez \\u00e0 votre boutique sa touche personnelle\",\"subtitle\":{\"1\":\"Qu'est-ce qui rend votre boutique si unique ? Comment voudriez-vous qu'elle soit ?\",\"2\":\"Personnalisez votre th\\u00e8me ou choisissez parmi les nombreux mod\\u00e8les de notre catalogue de th\\u00e8mes.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Commencez par ajouter votre propre logo ici !\",\"options\":[\"savepoint\"],\"page\":\"\\/prestashop\\/admin892cnoj1o\\/index.php\\/improve\\/design\\/themes\\/?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\",\"selector\":\"#form_shop_logos_header_logo, #form_header_logo\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Si vous cherchez quelque chose de vraiment unique, consultez notre catalogue de th\\u00e8mes.\",\"page\":\"\\/prestashop\\/admin892cnoj1o\\/index.php\\/improve\\/design\\/themes-catalog\\/?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"name\":\"payment\",\"title\":\"Soyez pr\\u00eat \\u00e0 recevoir des paiements\",\"subtitle\":{\"1\":\"Comment souhaitez-vous \\u00eatre pay\\u00e9 par vos clients ?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Ces moyens de paiement sont d\\u00e9j\\u00e0 disponibles sur votre boutique.\",\"options\":[\"savepoint\"],\"page\":\"\\/prestashop\\/admin892cnoj1o\\/index.php\\/improve\\/payment\\/payment_methods?_token=DDny6kEjpAgSSYYL3CBckfh_zx6Ep6dJ3jWNgsnxPuk\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted, .card:eq(0) .text-muted:eq(0)\",\"position\":\"right\"}]},{\"name\":\"shipping\",\"title\":\"Choisissez vos transporteurs\",\"subtitle\":{\"1\":\"Comment souhaitez-vous livrer vos produits ?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Voici";
        echo " les m\\u00e9thodes de livraisons disponibles sur votre boutique aujourd'hui.\",\"options\":[\"savepoint\"],\"page\":\"http:\\/\\/localhost\\/prestashop\\/admin892cnoj1o\\/index.php?controller=AdminCarriers&token=9fa6a2782f14b2f6e0c0054c8285b338\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"<div id=\\\"onboarding-welcome\\\" class=\\\"modal-body\\\">\\n    <div class=\\\"col-12\\\">\\n        <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\n        <h2 class=\\\"text-center text-md-center\\\">\\u00c0 vous de jouer !<\\/h2>\\n    <\\/div>\\n    <div class=\\\"col-12\\\">\\n        <p class=\\\"text-center text-md-center\\\">\\n          Vous avez vu l'essentiel, mais il y en a bien plus \\u00e0 d\\u00e9couvrir.<br \\/>\\n          Ces ressources vous aideront \\u00e0 aller plus loin :\\n        <\\/p>\\n        <div class=\\\"container-fluid\\\">\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6  justify-content-center text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS17\\/Getting+Started\\\" target=\\\"_blank\\\">\\n                <div class=\\\"starter-guide\\\"><\\/div>\\n                <span class=\\\"link\\\">Guide de d\\u00e9marrage<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\n                <div class=\\\"forum\\\"><\\/div>\\n                <span class=\\\"link\\\">Forum<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"training\\\"><\\/div>\\n                <span class=\\\"link\\\">Formation<\\/span>\\n ";
        echo "             <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"video-tutorial\\\"><\\/div>\\n                <span class=\\\"link\\\">Tutoriels Vid\\u00e9o<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n        <\\/div>\\n    <\\/div>\\n    <div class=\\\"modal-footer\\\">\\n        <div class=\\\"col-12\\\">\\n            <div class=\\\"text-center text-md-center\\\">\\n                <button class=\\\"btn btn-primary onboarding-button-next\\\">Je suis pr\\u00eat<\\/button>\\n            <\\/div>\\n        <\\/div>\\n    <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"http:\\/\\/localhost\\/prestashop\\/admin892cnoj1o\\/index.php?controller=AdminDashboard&token=943172a35b004949a4e5d38d07657607\"}]}]}, 1, \"http://localhost/prestashop/admin892cnoj1o/index.php?controller=AdminWelcome&token=916ee84afb20717dc5c069f806a41ea6\", baseAdminDir);

          onBoarding.addTemplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Vous êtes perdu ?</p>    <p>Pour continuer, cliquez ici :</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Continuer</button>    </div>    <p>Pour quitter le tutoriel de façon définitive, cliquez ici :</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Quitter le tutoriel de bienvenue</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Étape <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs on";
        // line 1304
        echo "boarding-button-next\">Suivant</button></div>');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", function(){
      if (\$(this).is('.with-spinner')) {
        if (!\$(this).is('.animated')) {
          \$(this).addClass('animated');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(\".onboarding-button-shut-down\", \"click\", function(){
      onBoarding.setShutDown(true);
    }).delegate(\".onboarding-button-resume\", \"click\", function(){
      onBoarding.setShutDown(false);
    }).delegate(\".onboarding-button-goto-current\", \"click\", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(\".onboarding-button-stop\", \"click\", function(){
      onBoarding.stop();
    });

  });

</script>


                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1340
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    En attendant que cette page soit adaptée au mobile, vous êtes invité à la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"http://localhost/prestashop/admin892cnoj1o/index.php?controller=AdminDashboard&amp;token=943172a35b004949a4e5d38d07657607\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=follynathalie1%40gmail.com&amp;firstname=FOLLY&amp;lastname=Nathalie&amp;website=http%3A%2F%2Flocalhost%2Fprestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/prestashop/admin892cnoj1o/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr";
        // line 1387
        echo " />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=follynathalie1%40gmail.com&amp;firstname=FOLLY&amp;lastname=Nathalie&amp;website=http%3A%2F%2Flocalhost%2Fprestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t";
        // line 1428
        echo "\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1448
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 105
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1340
    public function block_content_header($context, array $blocks = [])
    {
    }

    public function block_content($context, array $blocks = [])
    {
    }

    public function block_content_footer($context, array $blocks = [])
    {
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1448
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__e12160a0909319c7121fe2e7363f943eb2ade218d1a01d4a08806dc03e2e309e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1628 => 1448,  1611 => 1340,  1602 => 105,  1593 => 1448,  1571 => 1428,  1528 => 1387,  1475 => 1340,  1437 => 1304,  1428 => 1300,  1377 => 1251,  1368 => 1249,  1323 => 1206,  1300 => 1185,  1270 => 1157,  1240 => 1129,  1185 => 1076,  1150 => 1043,  1119 => 1014,  1087 => 984,  1055 => 954,  1024 => 925,  987 => 890,  956 => 861,  923 => 830,  891 => 800,  857 => 768,  824 => 737,  793 => 708,  762 => 679,  732 => 651,  694 => 615,  662 => 585,  631 => 556,  597 => 524,  565 => 494,  533 => 464,  498 => 431,  468 => 403,  428 => 365,  399 => 338,  355 => 296,  306 => 249,  250 => 195,  234 => 181,  191 => 140,  151 => 105,  127 => 83,  107 => 65,  82 => 42,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__e12160a0909319c7121fe2e7363f943eb2ade218d1a01d4a08806dc03e2e309e", "");
    }
}
