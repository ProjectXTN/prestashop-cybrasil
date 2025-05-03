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

/* __string_template__5444ea622ce73e38bc414c9d99b9fbcf */
class __TwigTemplate_3552c825dbe60f5d737df55dfa876e34 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

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
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__5444ea622ce73e38bc414c9d99b9fbcf"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__5444ea622ce73e38bc414c9d99b9fbcf"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"br\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Notificações dos módulos • CYBRASIL</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModulesNotifications';
    var iso_user = 'br';
    var lang_is_rtl = '0';
    var full_language_code = 'pt-br';
    var full_cldr_language_code = 'pt-BR';
    var country_iso_code = 'BR';
    var _PS_VERSION_ = '8.1.7';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your store.';
    var order_number_msg = 'Número do pedido: ';
    var total_msg = 'Total: ';
    var from_msg = 'De: ';
    var see_order_msg = 'Ver este pedido';
    var new_customer_msg = 'A new customer registered on your store.';
    var customer_name_msg = 'Nome do cliente: ';
    var new_msg = 'A new message was posted on your store.';
    var see_msg = 'Leia esta mensagem';
    var token = 'b56341f6376b705b5008384449373bf2';
    var currentIndex = 'index.php?controller=AdminModulesNotifications';
    var employee_token = '6a0783997014f5d9d713d6603f61e6a9';
    var choose_language_translate = 'Escolher idioma:';
    var default_language = '1';
    var admin_modules_link = '/admin405z76zapfotqq1xd0t/index.php/improve/modules/manage?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0';
    var admin_notification_get_link = '/admin405z76zapfotqq1xd0t/index.php/common/notifications?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0';
    var admin_notification_push_link = adminNotificationPushLink = '/admin405z76zapfotqq1xd0t/index.php/common/notifications/ack?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0';
    var tab_modules_list = '';
    var update_s";
        // line 42
        echo "uccess_msg = 'Atualizado com sucesso';
    var search_product_msg = 'Procure um produto';
  </script>



<link
      rel=\"preload\"
      href=\"/admin405z76zapfotqq1xd0t/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/admin405z76zapfotqq1xd0t/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin405z76zapfotqq1xd0t/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin405z76zapfotqq1xd0t/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ybc_widget/css/admin.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ybc_themeconfig/css/admin.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin405z76zapfotqq1xd0t\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin405z76zapfotqq1xd0t\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\";
var currency = {\"iso_code\":\"BRL\",\"sign\":\"R\$\",\"name\":\"Real brasileiro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"BRL\",\"currencySymbol\":\"R\$\",\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4\\u00a0#,##0.00\",\"negativePattern\":\"-\\u00a4\\u00a0#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"Na";
        // line 69
        echo "N\"],\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin405z76zapfotqq1xd0t/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.1.7\"></script>
<script type=\"text/javascript\" src=\"/admin405z76zapfotqq1xd0t/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.1.7\"></script>
<script type=\"text/javascript\" src=\"/admin405z76zapfotqq1xd0t/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin405z76zapfotqq1xd0t/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/admin405z76zapfotqq1xd0t/index.php/common/notifications?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MES";
        // line 97
        echo "SAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 104
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-br adminmodulesnotifications developer-mode\"
  data-base-url=\"/admin405z76zapfotqq1xd0t/index.php\"  data-token=\"gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminDashboard&amp;token=40d8724199eaa17d8f7be1f2266d4c13\"></a>
      <span id=\"shop_version\">8.1.7</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acesso Rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=628381a310333b65e5e0ee757d805af6\"
                 data-item=\"Avaliação do catálogo\"
      >Avaliação do catálogo</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php/improve/modules/manage?token=67ecdab13f067dd7b50e0296132b2727\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php/sell/catalog/categories/new?token=67ecdab13f067dd7b50e0296132b2727\"
                 data-item=\"Nova categoria\"
      >Nova categoria</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=1600a64936a";
        // line 138
        echo "9ee9d263627a63329587f\"
                 data-item=\"Novo vale desconto\"
      >Novo vale desconto</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php/sell/orders?token=67ecdab13f067dd7b50e0296132b2727\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php/sell/catalog/products-v2/create?token=67ecdab13f067dd7b50e0296132b2727\"
                 data-item=\"Produto novo\"
      >Produto novo</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"26\"
        data-icon=\"icon-AdminModulesSf\"
        data-method=\"add\"
        data-url=\"index.php/improve/modules/alerts?-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\"
        data-post-link=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminQuickAccesses&token=1bb8bca828265281fc132c43559114d6\"
        data-prompt-text=\"Por favor, dê um nome para este atalho:\"
        data-link=\"Alertas - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Adicionar a página atual ao Acesso Rápido
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminQuickAccesses&token=1bb8bca828265281fc132c43559114d6\">
      <i class=\"material-icons\">settings</i>
      Gerenciar seus Acessos Rápidos
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin405z76zapfotqq1xd0t/index.php?controller=AdminSearch&amp;token=194a19e";
        // line 177
        echo "35b6330ea710b6c9a1645d4bd\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Pesquisar (por ex.: referência do produto, nome do cliente…)\" aria-label=\"Barra de pesquisa\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        em todo lugar
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"em todo lugar\" href=\"#\" data-value=\"0\" data-placeholder=\"O que está procurando?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> em todo lugar</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nome do produto, referência, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes Nome\" href=\"#\" data-value=\"2\" data-placeholder=\"Nome\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes Nome</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por endereço ip\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por endereço IP</a>
        <a class=\"dropdown-item\" data-item=\"Pedidos\" href=\"#\" data-value=\"3\" data-placeholder=\"ID do pedido\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Pedidos</a>
        <a class=\"dropdown-item\" data-item=\"Faturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Número da fatura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Faturas</a>
        <a class=\"dropdown-item\" data-item=\"Carrinhos de Compras\" href=\"#\" data";
        // line 194
        echo "-value=\"5\" data-placeholder=\"ID do Carrinho\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carrinhos de Compras</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nome do módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">PESQUISAR</span><i class=\"material-icons\">search</i></button>
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
            <button class=\"component-search-cancel d-none\">Cancelar</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Acesso Rápido</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=628381a310333b65e5e0ee757d805af6\"
             data-item=\"Avaliação do catálogo\"
    >Avaliação do catálogo</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php/improve/modules/manage?token=67ecdab13f067dd7b50e0296132b2727\"
             data-item=\"Módulos instalados\"
    >Módulos instalados</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php/sell/catalog/categories/new?token=67ecdab13f067dd7b50e0296132b2727\"
             data-item=\"Nova categoria\"
    >Nova categoria</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=1600a64936a9ee9d263627a63329587f\"
             data-item=\"Novo vale desconto\"
    >Novo vale desconto</a>
      <a class=\"drop";
        // line 230
        echo "down-item quick-row-link\"
       href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php/sell/orders?token=67ecdab13f067dd7b50e0296132b2727\"
             data-item=\"Pedidos\"
    >Pedidos</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php/sell/catalog/products-v2/create?token=67ecdab13f067dd7b50e0296132b2727\"
             data-item=\"Produto novo\"
    >Produto novo</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"160\"
      data-icon=\"icon-AdminModulesSf\"
      data-method=\"add\"
      data-url=\"index.php/improve/modules/alerts?-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\"
      data-post-link=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminQuickAccesses&token=1bb8bca828265281fc132c43559114d6\"
      data-prompt-text=\"Por favor, dê um nome para este atalho:\"
      data-link=\"Alertas - Lista\"
    >
      <i class=\"material-icons\">add_circle</i>
      Adicionar a página atual ao Acesso Rápido
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminQuickAccesses&token=1bb8bca828265281fc132c43559114d6\">
    <i class=\"material-icons\">settings</i>
    Gerenciar seus Acessos Rápidos
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>Your store is in debug mode.</strong></p><p class=&quot;text-left&quot;>Todos os erros PHP e mensagens são exibidos. Quando não necessitar mais, &lt;strong&gt;desative&lt;/strong&gt; este modo.</p>\"
   ";
        // line 270
        echo "          href=\"/admin405z76zapfotqq1xd0t/index.php/configure/advanced/performance/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Modo de depuração</span>
          </a>
        </div>
      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://116.203.138.177/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
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
              Pedidos<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clientes<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav";
        // line 320
        echo "-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Mensagens<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Nenhum novo pedido por enquanto :(<br>
              Você verificou seus <strong><a href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=cc15b1c2022a72d8dacb841931786063\">carrinhos abandonadas</a></strong>?<br> Seu próximo pedido pode estar escondido aí!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Nenhum novo cliente por enquanto :(<br>
              Você esteve ativo nas redes sociais nos últimos dias?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Sem nova mensagem por enquanto.<br>
              Parece que todos os clientes estão felizes :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total";
        // line 366
        echo "_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrado <strong>_date_add_</strong>
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
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://116.203.138.177/img/pr/default.jpg\" alt=\"Pedro\" /></span>
        <span class=\"employee_profile\">Bem vindo de volta Pedro</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin405z76zapfotqq1xd0t/index.php/configure/advanced/employees/1/edit?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\">
      <i class=\"material-icons\">edit</i>
      <span>Seu perfil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminLogin&amp;logout=1&amp;token=9d3ee85c59916566d0ffb3c66b217ed1\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sair</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d";
        // line 418
        echo "-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin405z76zapfotqq1xd0t/index.php/configure/advanced/employees/toggle-navigation?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminDashboard&amp;token=40d8724199eaa17d8f7be1f2266d4c13\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.7</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminDashboard&amp;token=40d8724199eaa17d8f7be1f2266d4c13\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Painel</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vender</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin405z76zapfotqq1xd0t/index.php/sell/orders/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Pedidos
                      </span>
                                                    <i class=\"material-icons sub-";
        // line 460
        echo "tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/sell/orders/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/sell/orders/invoices/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Faturas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/sell/orders/credit-slips/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Comprovantes de créditos
                                </a>
                              </li>

                                                                                  
                              
                            ";
        // line 491
        echo "                                
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/sell/orders/delivery-slips/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Comprovantes de entregas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminCarts&amp;token=cc15b1c2022a72d8dacb841931786063\" class=\"link\"> Carrinho de compras
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin405z76zapfotqq1xd0t/index.php/sell/catalog/products?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catálogo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=";
        // line 521
        echo "\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/sell/catalog/products?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Produtos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/sell/catalog/categories?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Categorias
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/sell/catalog/monitoring/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Monitoramento
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminAttributesG";
        // line 550
        echo "roups&amp;token=098505d43a7806e9f62bb9821510e0c0\" class=\"link\"> Atributos e Características
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/sell/catalog/brands/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Marcas e Fornecedores
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/sell/attachments/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Arquivos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminCartRules&amp;token=1600a64936a9ee9d263627a63329587f\" class=\"link\"> Descontos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li clas";
        // line 581
        echo "s=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/sell/stocks/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Estoque
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin405z76zapfotqq1xd0t/index.php/sell/customers/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clientes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/sell/customers/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Clientes
                                </a>
                              </li>

                                                                                  
                        ";
        // line 612
        echo "      
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/sell/addresses/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Endereços
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminCustomerThreads&amp;token=0f9bfd88b56741131d1a0686a2f7ae7c\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Atendimento ao Cliente
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminCustomerThreads&amp;token=0f9bfd88b56";
        // line 640
        echo "741131d1a0686a2f7ae7c\" class=\"link\"> Atendimento ao Cliente
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/sell/customer-service/order-messages/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Mensagens de pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminReturn&amp;token=7d70286fe871ca61f956bb361b51bdf0\" class=\"link\"> Devoluções de Mercadorias
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminStats&amp;token=628381a310333b65e5e0ee757d805af6\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Estatísticas
                      </span>
                                                    <i clas";
        // line 672
        echo "s=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Melhorar</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin405z76zapfotqq1xd0t/index.php/improve/modules/manage?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Módulos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/improve/modules/manage?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-";
        // line 706
        echo "0\" class=\"link\"> Gerenciador de Módulos
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin405z76zapfotqq1xd0t/index.php/improve/design/themes/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"127\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/improve/design/themes/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Tema e Logotipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" ";
        // line 738
        echo "data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/improve/design/mail_theme/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Tema de E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/improve/design/cms-pages/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Páginas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/improve/design/modules/positions/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Posições
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminImages&amp;token=6a947580bc7d630e138ee3cb78cb9042\" class=\"link\"> Configurações de Imagem
                                </a>
                              </li>

                                                           ";
        // line 767
        echo "                       
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/modules/link-widget/list?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Lista de Links
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminCarriers&amp;token=0119aa985746b9b732498201c0c0c1b0\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Frete
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminCarriers&amp;token=0119aa985746b9b732498201c0c";
        // line 796
        echo "0c1b0\" class=\"link\"> Transportadoras
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/improve/shipping/preferences/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Preferências
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin405z76zapfotqq1xd0t/index.php/improve/payment/payment_methods?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Pagamento
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
         ";
        // line 829
        echo "                       <a href=\"/admin405z76zapfotqq1xd0t/index.php/improve/payment/payment_methods?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Métodos de Pagamento
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/improve/payment/preferences?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Preferências
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin405z76zapfotqq1xd0t/index.php/improve/international/localization/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Internacional
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
 ";
        // line 860
        echo "                                                           
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/improve/international/localization/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Localização
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/improve/international/zones/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Localizações
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/improve/international/taxes/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Taxas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/improve/international/translations/settings?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Traduções
        ";
        // line 887
        echo "                        </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin405z76zapfotqq1xd0t/index.php/configure/shop/preferences/preferences?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Parâmetros da Loja
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/configure/shop/preferences/preferences?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Geral
                                </a>
                              </li>

                              ";
        // line 925
        echo "                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/configure/shop/order-preferences/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Configurações de Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/configure/shop/product-preferences/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Configurações de Produtos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/configure/shop/customer-preferences/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Definições do cliente
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin405";
        // line 953
        echo "z76zapfotqq1xd0t/index.php/configure/shop/contacts/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Contato
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/configure/shop/seo-urls/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Tráfego e SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminSearchConf&amp;token=61d0af411789d5fb1e7b0c40e500e688\" class=\"link\"> Busca
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin405z76zapfotqq1xd0t/index.php/configure/advanced/system-information/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Parâmetros Avan";
        // line 983
        echo "çados
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/configure/advanced/system-information/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Informação
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/configure/advanced/performance/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Desempenho
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/configure/advanced/administration/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Administração
                               ";
        // line 1011
        echo " </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/configure/advanced/emails/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/configure/advanced/import/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Importar
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/configure/advanced/employees/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Equipe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/config";
        // line 1042
        echo "ure/advanced/sql-requests/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Banco de Dados
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/configure/advanced/logs/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/configure/advanced/webservice-keys/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> WebService
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/configure/advanced/feature-flags/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Funcionalidades Novas &amp; Experimentais
                                </a>
                              </li>

                    ";
        // line 1070
        echo "                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/configure/advanced/security/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Gerenciador de Módulos</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin405z76zapfotqq1xd0t/index.php/improve/modules/alerts?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" aria-current=\"page\">Alertas</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Notificações dos módulos          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title=\"Enviar um módulo\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                                  >
                  <i class=\"material-icons\">cloud_upload</i>                  Enviar um módulo
                </a>
                                      
   ";
        // line 1121
        echo "         
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ajuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin405z76zapfotqq1xd0t/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fbr%252Fdoc%252FAdminModules%253Fversion%253D8.1.7%2526country%253Dbr/Ajuda?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\"
                   id=\"product_form_open_help\"
                >
                  Ajuda
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <li class=\"nav-item\">
                    <a href=\"/admin405z76zapfotqq1xd0t/index.php/improve/modules/manage?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" id=\"subtab-AdminModulesManage\" class=\"nav-link tab \" data-submenu=\"40\">
                      Módulos
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin405z76zapfotqq1xd";
        // line 1150
        echo "0t/index.php/improve/modules/alerts?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" id=\"subtab-AdminModulesNotifications\" class=\"nav-link tab active current\" data-submenu=\"41\">
                      Alertas
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin405z76zapfotqq1xd0t/index.php/improve/modules/updates?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" id=\"subtab-AdminModulesUpdates\" class=\"nav-link tab \" data-submenu=\"42\">
                      Atualizações
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          </ul>
    </div>
  
  <div class=\"btn-floating\">
    <";
        // line 1169
        echo "button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add_module\"
              href=\"#\"              title=\"Enviar um módulo\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Enviar um módulo
              <i class=\"material-icons\">cloud_upload</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Ajuda\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin405z76zapfotqq1xd0t/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fbr%252Fdoc%252FAdminModules%253Fversion%253D8.1.7%2526country%253Dbr/Ajuda?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\"
            >
              Ajuda
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1207
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh não!</h1>
  <p class=\"mt-3\">
    A versão móvel desta página não está disponível ainda.
  </p>
  <p class=\"mt-2\">
    Por favor use um computador desktop para acessar esta página, até que seja adaptada para o móvel.
  </p>
  <p class=\"mt-2\">
    Obrigado.
  </p>
  <a href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminDashboard&amp;token=40d8724199eaa17d8f7be1f2266d4c13\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Voltar
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1241
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 104
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1207
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1241
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__5444ea622ce73e38bc414c9d99b9fbcf";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1494 => 1241,  1425 => 1207,  1390 => 104,  1375 => 1241,  1335 => 1207,  1295 => 1169,  1274 => 1150,  1243 => 1121,  1190 => 1070,  1160 => 1042,  1127 => 1011,  1097 => 983,  1065 => 953,  1035 => 925,  995 => 887,  966 => 860,  933 => 829,  898 => 796,  867 => 767,  836 => 738,  802 => 706,  766 => 672,  732 => 640,  702 => 612,  669 => 581,  636 => 550,  605 => 521,  573 => 491,  540 => 460,  496 => 418,  442 => 366,  394 => 320,  342 => 270,  300 => 230,  262 => 194,  243 => 177,  202 => 138,  163 => 104,  154 => 97,  124 => 69,  95 => 42,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ '<!DOCTYPE html>
<html lang=\"br\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Notificações dos módulos • CYBRASIL</title>

  <script type=\"text/javascript\">
    var help_class_name = \\'AdminModulesNotifications\\';
    var iso_user = \\'br\\';
    var lang_is_rtl = \\'0\\';
    var full_language_code = \\'pt-br\\';
    var full_cldr_language_code = \\'pt-BR\\';
    var country_iso_code = \\'BR\\';
    var _PS_VERSION_ = \\'8.1.7\\';
    var roundMode = 2;
    var youEditFieldFor = \\'\\';
        var new_order_msg = \\'A new order has been placed on your store.\\';
    var order_number_msg = \\'Número do pedido: \\';
    var total_msg = \\'Total: \\';
    var from_msg = \\'De: \\';
    var see_order_msg = \\'Ver este pedido\\';
    var new_customer_msg = \\'A new customer registered on your store.\\';
    var customer_name_msg = \\'Nome do cliente: \\';
    var new_msg = \\'A new message was posted on your store.\\';
    var see_msg = \\'Leia esta mensagem\\';
    var token = \\'b56341f6376b705b5008384449373bf2\\';
    var currentIndex = \\'index.php?controller=AdminModulesNotifications\\';
    var employee_token = \\'6a0783997014f5d9d713d6603f61e6a9\\';
    var choose_language_translate = \\'Escolher idioma:\\';
    var default_language = \\'1\\';
    var admin_modules_link = \\'/admin405z76zapfotqq1xd0t/index.php/improve/modules/manage?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\\';
    var admin_notification_get_link = \\'/admin405z76zapfotqq1xd0t/index.php/common/notifications?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\\';
    var admin_notification_push_link = adminNotificationPushLink = \\'/admin405z76zapfotqq1xd0t/index.php/common/notifications/ack?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\\';
    var tab_modules_list = \\'\\';
    var update_s' | raw }}{{ 'uccess_msg = \\'Atualizado com sucesso\\';
    var search_product_msg = \\'Procure um produto\\';
  </script>



<link
      rel=\"preload\"
      href=\"/admin405z76zapfotqq1xd0t/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/admin405z76zapfotqq1xd0t/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin405z76zapfotqq1xd0t/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin405z76zapfotqq1xd0t/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ybc_widget/css/admin.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ybc_themeconfig/css/admin.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\\\/admin405z76zapfotqq1xd0t\\\\/\";
var baseDir = \"\\\\/\";
var changeFormLanguageUrl = \"\\\\/admin405z76zapfotqq1xd0t\\\\/index.php\\\\/configure\\\\/advanced\\\\/employees\\\\/change-form-language?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\";
var currency = {\"iso_code\":\"BRL\",\"sign\":\"R\$\",\"name\":\"Real brasileiro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"currencyCode\":\"BRL\",\"currencySymbol\":\"R\$\",\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"\\\\u00a4\\\\u00a0#,##0.00\",\"negativePattern\":\"-\\\\u00a4\\\\u00a0#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"Na' | raw }}{{ 'N\"],\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin405z76zapfotqq1xd0t/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.1.7\"></script>
<script type=\"text/javascript\" src=\"/admin405z76zapfotqq1xd0t/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.1.7\"></script>
<script type=\"text/javascript\" src=\"/admin405z76zapfotqq1xd0t/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin405z76zapfotqq1xd0t/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: \\'#DF0067\\',
      textColor: \\'#FFFFFF\\',
      notificationGetUrl: \\'/admin405z76zapfotqq1xd0t/index.php/common/notifications?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\\',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MES' | raw }}{{ 'SAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


' | raw }}{% block stylesheets %}{% endblock %}{% block extra_stylesheets %}{% endblock %}</head>{{ '

<body
  class=\"lang-br adminmodulesnotifications developer-mode\"
  data-base-url=\"/admin405z76zapfotqq1xd0t/index.php\"  data-token=\"gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminDashboard&amp;token=40d8724199eaa17d8f7be1f2266d4c13\"></a>
      <span id=\"shop_version\">8.1.7</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acesso Rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=628381a310333b65e5e0ee757d805af6\"
                 data-item=\"Avaliação do catálogo\"
      >Avaliação do catálogo</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php/improve/modules/manage?token=67ecdab13f067dd7b50e0296132b2727\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php/sell/catalog/categories/new?token=67ecdab13f067dd7b50e0296132b2727\"
                 data-item=\"Nova categoria\"
      >Nova categoria</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=1600a64936a' | raw }}{{ '9ee9d263627a63329587f\"
                 data-item=\"Novo vale desconto\"
      >Novo vale desconto</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php/sell/orders?token=67ecdab13f067dd7b50e0296132b2727\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php/sell/catalog/products-v2/create?token=67ecdab13f067dd7b50e0296132b2727\"
                 data-item=\"Produto novo\"
      >Produto novo</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"26\"
        data-icon=\"icon-AdminModulesSf\"
        data-method=\"add\"
        data-url=\"index.php/improve/modules/alerts?-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\"
        data-post-link=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminQuickAccesses&token=1bb8bca828265281fc132c43559114d6\"
        data-prompt-text=\"Por favor, dê um nome para este atalho:\"
        data-link=\"Alertas - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Adicionar a página atual ao Acesso Rápido
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminQuickAccesses&token=1bb8bca828265281fc132c43559114d6\">
      <i class=\"material-icons\">settings</i>
      Gerenciar seus Acessos Rápidos
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin405z76zapfotqq1xd0t/index.php?controller=AdminSearch&amp;token=194a19e' | raw }}{{ '35b6330ea710b6c9a1645d4bd\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Pesquisar (por ex.: referência do produto, nome do cliente…)\" aria-label=\"Barra de pesquisa\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        em todo lugar
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"em todo lugar\" href=\"#\" data-value=\"0\" data-placeholder=\"O que está procurando?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> em todo lugar</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nome do produto, referência, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes Nome\" href=\"#\" data-value=\"2\" data-placeholder=\"Nome\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes Nome</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por endereço ip\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por endereço IP</a>
        <a class=\"dropdown-item\" data-item=\"Pedidos\" href=\"#\" data-value=\"3\" data-placeholder=\"ID do pedido\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Pedidos</a>
        <a class=\"dropdown-item\" data-item=\"Faturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Número da fatura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Faturas</a>
        <a class=\"dropdown-item\" data-item=\"Carrinhos de Compras\" href=\"#\" data' | raw }}{{ '-value=\"5\" data-placeholder=\"ID do Carrinho\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carrinhos de Compras</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nome do módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">PESQUISAR</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$(\\'#bo_query\\').one(\\'click\\', function() {
    \$(this).closest(\\'form\\').removeClass(\\'collapsed\\');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancelar</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Acesso Rápido</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=628381a310333b65e5e0ee757d805af6\"
             data-item=\"Avaliação do catálogo\"
    >Avaliação do catálogo</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php/improve/modules/manage?token=67ecdab13f067dd7b50e0296132b2727\"
             data-item=\"Módulos instalados\"
    >Módulos instalados</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php/sell/catalog/categories/new?token=67ecdab13f067dd7b50e0296132b2727\"
             data-item=\"Nova categoria\"
    >Nova categoria</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=1600a64936a9ee9d263627a63329587f\"
             data-item=\"Novo vale desconto\"
    >Novo vale desconto</a>
      <a class=\"drop' | raw }}{{ 'down-item quick-row-link\"
       href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php/sell/orders?token=67ecdab13f067dd7b50e0296132b2727\"
             data-item=\"Pedidos\"
    >Pedidos</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php/sell/catalog/products-v2/create?token=67ecdab13f067dd7b50e0296132b2727\"
             data-item=\"Produto novo\"
    >Produto novo</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"160\"
      data-icon=\"icon-AdminModulesSf\"
      data-method=\"add\"
      data-url=\"index.php/improve/modules/alerts?-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\"
      data-post-link=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminQuickAccesses&token=1bb8bca828265281fc132c43559114d6\"
      data-prompt-text=\"Por favor, dê um nome para este atalho:\"
      data-link=\"Alertas - Lista\"
    >
      <i class=\"material-icons\">add_circle</i>
      Adicionar a página atual ao Acesso Rápido
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminQuickAccesses&token=1bb8bca828265281fc132c43559114d6\">
    <i class=\"material-icons\">settings</i>
    Gerenciar seus Acessos Rápidos
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>Your store is in debug mode.</strong></p><p class=&quot;text-left&quot;>Todos os erros PHP e mensagens são exibidos. Quando não necessitar mais, &lt;strong&gt;desative&lt;/strong&gt; este modo.</p>\"
   ' | raw }}{{ '          href=\"/admin405z76zapfotqq1xd0t/index.php/configure/advanced/performance/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Modo de depuração</span>
          </a>
        </div>
      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://116.203.138.177/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
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
              Pedidos<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clientes<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav' | raw }}{{ '-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Mensagens<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Nenhum novo pedido por enquanto :(<br>
              Você verificou seus <strong><a href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=cc15b1c2022a72d8dacb841931786063\">carrinhos abandonadas</a></strong>?<br> Seu próximo pedido pode estar escondido aí!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Nenhum novo cliente por enquanto :(<br>
              Você esteve ativo nas redes sociais nos últimos dias?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Sem nova mensagem por enquanto.<br>
              Parece que todos os clientes estão felizes :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href=\\'order_url\\'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total' | raw }}{{ '_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href=\\'customer_url\\'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrado <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href=\\'message_url\\'>
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
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://116.203.138.177/img/pr/default.jpg\" alt=\"Pedro\" /></span>
        <span class=\"employee_profile\">Bem vindo de volta Pedro</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin405z76zapfotqq1xd0t/index.php/configure/advanced/employees/1/edit?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\">
      <i class=\"material-icons\">edit</i>
      <span>Seu perfil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminLogin&amp;logout=1&amp;token=9d3ee85c59916566d0ffb3c66b217ed1\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sair</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d' | raw }}{{ '-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin405z76zapfotqq1xd0t/index.php/configure/advanced/employees/toggle-navigation?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminDashboard&amp;token=40d8724199eaa17d8f7be1f2266d4c13\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.7</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminDashboard&amp;token=40d8724199eaa17d8f7be1f2266d4c13\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Painel</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vender</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin405z76zapfotqq1xd0t/index.php/sell/orders/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Pedidos
                      </span>
                                                    <i class=\"material-icons sub-' | raw }}{{ 'tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/sell/orders/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/sell/orders/invoices/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Faturas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/sell/orders/credit-slips/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Comprovantes de créditos
                                </a>
                              </li>

                                                                                  
                              
                            ' | raw }}{{ '                                
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/sell/orders/delivery-slips/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Comprovantes de entregas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminCarts&amp;token=cc15b1c2022a72d8dacb841931786063\" class=\"link\"> Carrinho de compras
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin405z76zapfotqq1xd0t/index.php/sell/catalog/products?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catálogo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=' | raw }}{{ '\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/sell/catalog/products?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Produtos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/sell/catalog/categories?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Categorias
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/sell/catalog/monitoring/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Monitoramento
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminAttributesG' | raw }}{{ 'roups&amp;token=098505d43a7806e9f62bb9821510e0c0\" class=\"link\"> Atributos e Características
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/sell/catalog/brands/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Marcas e Fornecedores
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/sell/attachments/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Arquivos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminCartRules&amp;token=1600a64936a9ee9d263627a63329587f\" class=\"link\"> Descontos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li clas' | raw }}{{ 's=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/sell/stocks/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Estoque
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin405z76zapfotqq1xd0t/index.php/sell/customers/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clientes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/sell/customers/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Clientes
                                </a>
                              </li>

                                                                                  
                        ' | raw }}{{ '      
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/sell/addresses/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Endereços
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminCustomerThreads&amp;token=0f9bfd88b56741131d1a0686a2f7ae7c\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Atendimento ao Cliente
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminCustomerThreads&amp;token=0f9bfd88b56' | raw }}{{ '741131d1a0686a2f7ae7c\" class=\"link\"> Atendimento ao Cliente
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/sell/customer-service/order-messages/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Mensagens de pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminReturn&amp;token=7d70286fe871ca61f956bb361b51bdf0\" class=\"link\"> Devoluções de Mercadorias
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminStats&amp;token=628381a310333b65e5e0ee757d805af6\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Estatísticas
                      </span>
                                                    <i clas' | raw }}{{ 's=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Melhorar</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin405z76zapfotqq1xd0t/index.php/improve/modules/manage?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Módulos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/improve/modules/manage?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-' | raw }}{{ '0\" class=\"link\"> Gerenciador de Módulos
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin405z76zapfotqq1xd0t/index.php/improve/design/themes/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"127\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/improve/design/themes/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Tema e Logotipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" ' | raw }}{{ 'data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/improve/design/mail_theme/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Tema de E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/improve/design/cms-pages/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Páginas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/improve/design/modules/positions/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Posições
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminImages&amp;token=6a947580bc7d630e138ee3cb78cb9042\" class=\"link\"> Configurações de Imagem
                                </a>
                              </li>

                                                           ' | raw }}{{ '                       
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/modules/link-widget/list?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Lista de Links
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminCarriers&amp;token=0119aa985746b9b732498201c0c0c1b0\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Frete
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminCarriers&amp;token=0119aa985746b9b732498201c0c' | raw }}{{ '0c1b0\" class=\"link\"> Transportadoras
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/improve/shipping/preferences/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Preferências
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin405z76zapfotqq1xd0t/index.php/improve/payment/payment_methods?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Pagamento
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
         ' | raw }}{{ '                       <a href=\"/admin405z76zapfotqq1xd0t/index.php/improve/payment/payment_methods?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Métodos de Pagamento
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/improve/payment/preferences?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Preferências
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin405z76zapfotqq1xd0t/index.php/improve/international/localization/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Internacional
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
 ' | raw }}{{ '                                                           
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/improve/international/localization/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Localização
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/improve/international/zones/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Localizações
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/improve/international/taxes/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Taxas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/improve/international/translations/settings?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Traduções
        ' | raw }}{{ '                        </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin405z76zapfotqq1xd0t/index.php/configure/shop/preferences/preferences?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Parâmetros da Loja
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/configure/shop/preferences/preferences?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Geral
                                </a>
                              </li>

                              ' | raw }}{{ '                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/configure/shop/order-preferences/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Configurações de Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/configure/shop/product-preferences/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Configurações de Produtos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/configure/shop/customer-preferences/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Definições do cliente
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin405' | raw }}{{ 'z76zapfotqq1xd0t/index.php/configure/shop/contacts/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Contato
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/configure/shop/seo-urls/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Tráfego e SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminSearchConf&amp;token=61d0af411789d5fb1e7b0c40e500e688\" class=\"link\"> Busca
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin405z76zapfotqq1xd0t/index.php/configure/advanced/system-information/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Parâmetros Avan' | raw }}{{ 'çados
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/configure/advanced/system-information/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Informação
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/configure/advanced/performance/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Desempenho
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/configure/advanced/administration/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Administração
                               ' | raw }}{{ ' </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/configure/advanced/emails/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/configure/advanced/import/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Importar
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/configure/advanced/employees/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Equipe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/config' | raw }}{{ 'ure/advanced/sql-requests/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Banco de Dados
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/configure/advanced/logs/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/configure/advanced/webservice-keys/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> WebService
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/configure/advanced/feature-flags/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Funcionalidades Novas &amp; Experimentais
                                </a>
                              </li>

                    ' | raw }}{{ '                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/admin405z76zapfotqq1xd0t/index.php/configure/advanced/security/?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Gerenciador de Módulos</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin405z76zapfotqq1xd0t/index.php/improve/modules/alerts?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" aria-current=\"page\">Alertas</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Notificações dos módulos          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title=\"Enviar um módulo\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                                  >
                  <i class=\"material-icons\">cloud_upload</i>                  Enviar um módulo
                </a>
                                      
   ' | raw }}{{ '         
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ajuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin405z76zapfotqq1xd0t/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fbr%252Fdoc%252FAdminModules%253Fversion%253D8.1.7%2526country%253Dbr/Ajuda?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\"
                   id=\"product_form_open_help\"
                >
                  Ajuda
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <li class=\"nav-item\">
                    <a href=\"/admin405z76zapfotqq1xd0t/index.php/improve/modules/manage?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" id=\"subtab-AdminModulesManage\" class=\"nav-link tab \" data-submenu=\"40\">
                      Módulos
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin405z76zapfotqq1xd' | raw }}{{ '0t/index.php/improve/modules/alerts?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" id=\"subtab-AdminModulesNotifications\" class=\"nav-link tab active current\" data-submenu=\"41\">
                      Alertas
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin405z76zapfotqq1xd0t/index.php/improve/modules/updates?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\" id=\"subtab-AdminModulesUpdates\" class=\"nav-link tab \" data-submenu=\"42\">
                      Atualizações
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          </ul>
    </div>
  
  <div class=\"btn-floating\">
    <' | raw }}{{ 'button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add_module\"
              href=\"#\"              title=\"Enviar um módulo\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Enviar um módulo
              <i class=\"material-icons\">cloud_upload</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Ajuda\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin405z76zapfotqq1xd0t/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fbr%252Fdoc%252FAdminModules%253Fversion%253D8.1.7%2526country%253Dbr/Ajuda?_token=gr4gcbm-D2hUhr4nDLzGqyy8HA_l4or_VbVHJjG0r-0\"
            >
              Ajuda
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ' | raw }}{% block content_header %}{% endblock %}{% block content %}{% endblock %}{% block content_footer %}{% endblock %}{% block sidebar_right %}{% endblock %}{{ '

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh não!</h1>
  <p class=\"mt-3\">
    A versão móvel desta página não está disponível ainda.
  </p>
  <p class=\"mt-2\">
    Por favor use um computador desktop para acessar esta página, até que seja adaptada para o móvel.
  </p>
  <p class=\"mt-2\">
    Obrigado.
  </p>
  <a href=\"http://116.203.138.177/admin405z76zapfotqq1xd0t/index.php?controller=AdminDashboard&amp;token=40d8724199eaa17d8f7be1f2266d4c13\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Voltar
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
' | raw }}{% block javascripts %}{% endblock %}{% block extra_javascripts %}{% endblock %}{% block translate_javascripts %}{% endblock %}</body>{{ '
</html>' | raw }}", "__string_template__5444ea622ce73e38bc414c9d99b9fbcf", "");
    }
}
