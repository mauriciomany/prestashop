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

/* __string_template__927228b799e9b334d56032942804609911b059d5436870c44818593c2ead4837 */
class __TwigTemplate_f5790154525e5eea41df6eeb7bfbe45a384144034e55d621f2ccf8ddc8a039e4 extends \Twig\Template
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
<html lang=\"pt\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/www/prestashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/www/prestashop/img/app_icon.png\" />

<title>Categorias • mcastro</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminCategories';
    var iso_user = 'pt';
    var lang_is_rtl = '0';
    var full_language_code = 'pt-pt';
    var full_cldr_language_code = 'pt-PT';
    var country_iso_code = 'BR';
    var _PS_VERSION_ = '1.7.6.3';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Foi feita uma nova encomenda na sua loja.';
    var order_number_msg = 'Número da encomenda: ';
    var total_msg = 'Total: ';
    var from_msg = 'De: ';
    var see_order_msg = 'Ver esta encomenda';
    var new_customer_msg = 'Um novo cliente registou-se na sua loja.';
    var customer_name_msg = 'Nome do cliente: ';
    var new_msg = 'Foi deixada uma nova mensagem na sua loja.';
    var see_msg = 'Ler esta mensagem';
    var token = '7175b150994e3880ec99e94fb45d1e4d';
    var token_admin_orders = 'f9f90ac25796d117f214f09a148ebbfc';
    var token_admin_customers = '578664e62d4c662bed27999f323a661c';
    var token_admin_customer_threads = '346a517fbbde80576807d8147648304d';
    var currentIndex = 'index.php?controller=AdminCategories';
    var employee_token = 'cd995c50ce491dea25e0c7fc883265de';
    var choose_language_translate = 'Escolher idioma';
    var default_language = '1';
    var admin_modules_link = '/www/prestashop/admin3766qjphn/index.php/improve/modules/catalog/recommended?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo';
    var admin_notification_get_link = '/www/prestashop/admin3766qjphn/index.php/common/notifications?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo';
    var admin_notification_push_link = '/www/prestashop/admin3766qjphn/index.php/common/notifications/ack?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo';
    var tab_modules_list = 'innovativemenu,productsbycategoryslider,slidercategory,apiway';
    var update_success_msg = 'Atualizado com sucesso';
    var errorLogin = 'O PrestaShop não conseguiu autenticar-se nos Addons. Por favor verifique as suas credenciais e se está ligado à internet.';
    var search_product_msg = 'Pesquisar um produto';
  </script>

      <link href=\"/www/prestashop/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/www/prestashop/admin3766qjphn/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/www/prestashop/modules/emarketing/views/css/menuTabIcon.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/www/prestashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/www/prestashop/admin3766qjphn/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/www/prestashop/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/www/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/www\\/prestashop\\/admin3766qjphn\\/\";
var baseDir = \"\\/www\\/prestashop\\/\";
var changeFormLanguageUrl = \"\\/www\\/prestashop\\/admin3766qjphn\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\";
var currency = {\"iso_code\":\"BRL\",\"sign\":\"R\$\",\"name\":\"Real brasileiro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"BRL\",\"currencySymbol\":\"R\$\",\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/www/prestashop/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/www/prestashop/modules/welcome/public/module.js\"></script>
<script type=\"text/javascript\" src=\"/www/prestashop/admin3766qjphn/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/www/prestashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/www/prestashop/js/admin.js?v=1.7.6.3\"></script>
<script type=\"text/javascript\" src=\"/www/prestashop/admin3766qjphn/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/www/prestashop/js/tools.js?v=1.7.6.3\"></script>
<script type=\"text/javascript\" src=\"/www/prestashop/admin3766qjphn/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/www/prestashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/www/prestashop/admin3766qjphn/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/www/prestashop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/www/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>

  <script type=\"text/javascript\">
/*
 * Return total of notification per checkbox checked
 * @param  int nbNewCustomer
 * @param  int nbNewOrder
 * @param  int nbNewMessage
 * @return int result        Total of Notification
 */
function getNotification(nbNewCustomer, nbNewOrder, nbNewMessage) {
    let result = 0;
    //if radiobutton is checked
     result += nbNewOrder;      result += nbNewCustomer;      result += nbNewMessage; 
    return result;
}

function loadAjax(adminController) {
    \$.ajax({
        type: 'POST',
        dataType: 'JSON',
        url: adminController,
        data: {
            ajax: true,
            action: \"GetNotifications\",
        },

        success: function(data) {

            let nbNewCustomers = parseInt(data.customer.total);
            let nbNewOrders = parseInt(data.order.total);
            let nbNewCustomerMessages = parseInt(data.customer_message.total);

            let nbTotalNotification = getNotification(nbNewCustomers, nbNewOrders, nbNewCustomerMessages);

            favicon.badge(nbTotalNotification);
        },
        error: function(err) {
            console.log(err);
            console.log(adminController);
        },
    });
}

function updateNotifications(type) {
  \$.post(
    baseAdminDir + \"ajax.php\",
    {
      \"updateElementEmployee\": \"1\",
      \"updateElementEmployeeType\": type
    }
  );
}

\$(document).ready(function() {
    adminController = adminController.replace(/\\amp;/g, '');
    //set the configuration of the favicon
    window.favicon = new Favico({
        animation: 'popFade',
        bgColor: BgColor,
        textColor: TxtColor,
    });
    loadAjax(adminController)
    setInterval(function() {
        loadAjax(adminController);
    }, 60000); //refresh notification every 60 seconds

    //update favicon when you click on the customer tab into your backoffice
    \$(document).on('click', '#subtab-AdminCustomers', function (e) {
        updateNotifications('customer');
    });
    //update favicon when you click on the customer service tab into your backoffice
    \$(document).on('click', '#subtab-AdminCustomerThreads', function (e) {
        updateNotifications('customer_message');
    });
    //update favicon when you click on the order tab into your backoffice
    \$(document).on('click', '#subtab-AdminOrders', function (e) {
        updateNotifications('order');
    });
});
</script>

<script type=\"text/javascript\">
    let BgColor = \"#DF0067\";
    let TxtColor = \"#ffffff\";
    let CheckBoxOrder = \"1\";
    let CheckBoxCustomer = \"1\";
    let CheckBoxMessage = \"1\";
    let adminController = \"http://localhost/www/prestashop/admin3766qjphn/index.php?controller=AdminAjaxFaviconBO&amp;token=aaed002ccb3c66ea6355d8e9b73f735b\";
</script>

<script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/www\\/prestashop\\/admin3766qjphn\\/index.php?controller=AdminGamification&token=ae0ca0549df8b3a1bfea1b883e684555\";
            var current_id_tab = 11;
        </script>

";
        // line 177
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>

<body class=\"lang-pt admincategories\">

  <header id=\"header\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/www/prestashop/admin3766qjphn/index.php?controller=AdminDashboard&amp;token=8f9b1873820be42356bb09a8b4927170\"></a>
      <span id=\"shop_version\">1.7.6.3</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acesso Rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/www/prestashop/admin3766qjphn/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=6481bdb1be56c06c2b4f660cd4e4e44c\"
                 data-item=\"Avaliação do catálogo\"
      >Avaliação do catálogo</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/www/prestashop/admin3766qjphn/index.php?controller=AdminOrders&amp;token=f9f90ac25796d117f214f09a148ebbfc\"
                 data-item=\"Encomendas\"
      >Encomendas</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/www/prestashop/admin3766qjphn/index.php/improve/modules/manage?token=328fdff96c6f5e13edaa94451e89f236\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/www/prestashop/admin3766qjphn/index.php/sell/catalog/categories/new?token=328fdff96c6f5e13edaa94451e89f236\"
                 data-item=\"Nova Categoria\"
      >Nova Categoria</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/www/prestashop/admin3766qjphn/index.php/sell/catalog/products/new?token=328fdff96c6f5e13edaa94451e89f236\"
                 data-item=\"Novo produto\"
      >Novo produto</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/www/prestashop/admin3766qjphn/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=cd630eef9017797d2311745f9a3bd130\"
                 data-item=\"Novo Voucher\"
      >Novo Voucher</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"15\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/sell/catalog/categories?-ZlmxNYOa1CH6dOJCSWHlo\"
        data-post-link=\"http://localhost/www/prestashop/admin3766qjphn/index.php?controller=AdminQuickAccesses&token=07d3dfcf1ec48f64e005067963d348e0\"
        data-prompt-text=\"Atribua um nome a este atalho:\"
        data-link=\"Categorias - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Adicionar a página atual ao Acesso Rápido
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost/www/prestashop/admin3766qjphn/index.php?controller=AdminQuickAccesses&token=07d3dfcf1ec48f64e005067963d348e0\">
      <i class=\"material-icons\">settings</i>
      Gerir atalhos
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/www/prestashop/admin3766qjphn/index.php?controller=AdminSearch&amp;token=de62e23b1894f84fa6a34ed153445854\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Pesquisar (por ex.: referência do produto, nome do cliente…)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Em todo o lado
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Em todo o lado\" href=\"#\" data-value=\"0\" data-placeholder=\"O que procura?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Em todo o lado</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nome do produto, SKU, referência...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nome\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, nome...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nome</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por endereço IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por endereço IP</a>
        <a class=\"dropdown-item\" data-item=\"Encomendas\" href=\"#\" data-value=\"3\" data-placeholder=\"Nº da Encomenda\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Encomendas</a>
        <a class=\"dropdown-item\" data-item=\"Faturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Número da Fatura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Faturas</a>
        <a class=\"dropdown-item\" data-item=\"Carrinhos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID do Carrinho\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carrinhos</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nome do Módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
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
      </div>

      
      
      <div class=\"component\" id=\"header-shop-list-container\">
          <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/www/prestashop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Ver a loja
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
              Encomendas<span id=\"_nb_new_orders_\"></span>
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
                                    <li class=\"nav-item\">
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
              Nenhuma nova encomenda por enquanto :(<br>
              E que tal alguns descontos de estação?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Nenhum novo cliente por enquanto :(<br>
              Enviou algum e-mail sobre uma aquisição recentemente?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Sem nova mensagem por enquanto.<br>
              Ao que parece, todos os seus clientes estão satisfeitos :)
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
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registado <strong>_date_add_</strong>
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
      
      <span class=\"employee_avatar\"><img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/mcastro%40manytecnologia.com.br.jpg\" /></span>
      <span class=\"employee_profile\">Welcome back Mcastro</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/www/prestashop/admin3766qjphn/index.php/configure/advanced/employees/1/edit?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\">
      <i class=\"material-icons\">settings</i>
      O seu perfil
    </a>
    </div>
    
    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">book</i> Resources</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">school</i> Formação</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">person_pin_circle</i> Find an Expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">extension</i> PrestaShop Marketplace</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">help</i> Help Center</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/www/prestashop/admin3766qjphn/index.php?controller=AdminLogin&amp;logout=1&amp;token=bb953b5af49b6e25d92a041d2e3d4bf1\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Fechar sessão</span>
    </a>
  </div>
</div>
      </div>
    </nav>

      </header>

  <nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/www/prestashop/admin3766qjphn/index.php/configure/advanced/employees/toggle-navigation?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://localhost/www/prestashop/admin3766qjphn/index.php?controller=AdminDashboard&amp;token=8f9b1873820be42356bb09a8b4927170\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Painel de controlo</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Vender</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://localhost/www/prestashop/admin3766qjphn/index.php?controller=AdminOrders&amp;token=f9f90ac25796d117f214f09a148ebbfc\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Encomendas
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://localhost/www/prestashop/admin3766qjphn/index.php?controller=AdminOrders&amp;token=f9f90ac25796d117f214f09a148ebbfc\" class=\"link\"> Encomendas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/www/prestashop/admin3766qjphn/index.php/sell/orders/invoices/?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\" class=\"link\"> Faturas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://localhost/www/prestashop/admin3766qjphn/index.php?controller=AdminSlip&amp;token=ab4354a1b41f5a60b51a9d701db81622\" class=\"link\"> Notas de Crédito
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/www/prestashop/admin3766qjphn/index.php/sell/orders/delivery-slips/?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\" class=\"link\"> Notas de Entrega
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://localhost/www/prestashop/admin3766qjphn/index.php?controller=AdminCarts&amp;token=f0ec350ce9a0adb4ca0c7a2fb15f0e1d\" class=\"link\"> Carrinhos de Compras
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/www/prestashop/admin3766qjphn/index.php/sell/catalog/products?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Catálogo
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/www/prestashop/admin3766qjphn/index.php/sell/catalog/products?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\" class=\"link\"> Produtos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"/www/prestashop/admin3766qjphn/index.php/sell/catalog/categories?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\" class=\"link\"> Categorias
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://localhost/www/prestashop/admin3766qjphn/index.php?controller=AdminTracking&amp;token=9c7cbc4bb395f360b1cbca1dc2df624a\" class=\"link\"> Monitorização
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://localhost/www/prestashop/admin3766qjphn/index.php?controller=AdminAttributesGroups&amp;token=0b29880c3627e8664388e8242954f480\" class=\"link\"> Atributos e Características
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"/www/prestashop/admin3766qjphn/index.php/sell/catalog/brands/?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\" class=\"link\"> Marcas e Fornecedores
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://localhost/www/prestashop/admin3766qjphn/index.php?controller=AdminAttachments&amp;token=b44523539ced92f20411b058b500a7f6\" class=\"link\"> Ficheiros
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://localhost/www/prestashop/admin3766qjphn/index.php?controller=AdminCartRules&amp;token=cd630eef9017797d2311745f9a3bd130\" class=\"link\"> Descontos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/www/prestashop/admin3766qjphn/index.php/sell/stocks/?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"/www/prestashop/admin3766qjphn/index.php/sell/customers/?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Clientes
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"/www/prestashop/admin3766qjphn/index.php/sell/customers/?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\" class=\"link\"> Clientes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://localhost/www/prestashop/admin3766qjphn/index.php?controller=AdminAddresses&amp;token=c5f2175ce433610da7398992335743b7\" class=\"link\"> Endereços
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://localhost/www/prestashop/admin3766qjphn/index.php?controller=AdminCustomerThreads&amp;token=346a517fbbde80576807d8147648304d\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    Apoio ao Cliente
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://localhost/www/prestashop/admin3766qjphn/index.php?controller=AdminCustomerThreads&amp;token=346a517fbbde80576807d8147648304d\" class=\"link\"> Apoio ao Cliente
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://localhost/www/prestashop/admin3766qjphn/index.php?controller=AdminOrderMessage&amp;token=b9dc8baaaa9e274c2f3b798d21e675db\" class=\"link\"> Mensagens de Encomendas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://localhost/www/prestashop/admin3766qjphn/index.php?controller=AdminReturn&amp;token=87db8b47b712dfdb3c0c9ccb91aa2da3\" class=\"link\"> Mercadorias Devolvidas
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://localhost/www/prestashop/admin3766qjphn/index.php?controller=AdminStats&amp;token=6481bdb1be56c06c2b4f660cd4e4e44c\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Estatísticas
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Melhorar</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/www/prestashop/admin3766qjphn/index.php/improve/modules/manage?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Módulos
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/www/prestashop/admin3766qjphn/index.php/improve/modules/manage?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\" class=\"link\"> Module Manager
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"http://localhost/www/prestashop/admin3766qjphn/index.php?controller=AdminPsMboModule&amp;token=b33f1919b021f03d74028498e7b5433c\" class=\"link\"> Module Catalog
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                  <a href=\"/www/prestashop/admin3766qjphn/index.php/improve/design/themes/?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Design
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                              <a href=\"/www/prestashop/admin3766qjphn/index.php/improve/design/themes/?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\" class=\"link\"> Tema Gráfico e Logótipo
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"135\" id=\"subtab-AdminPsMboTheme\">
                              <a href=\"http://localhost/www/prestashop/admin3766qjphn/index.php?controller=AdminPsMboTheme&amp;token=d600f3f9b16a0fc5531d475e13ad9cb9\" class=\"link\"> Catálogo do Tema Gráfico
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                              <a href=\"/www/prestashop/admin3766qjphn/index.php/improve/design/mail_theme/?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\" class=\"link\"> Email Theme
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                              <a href=\"/www/prestashop/admin3766qjphn/index.php/improve/design/cms-pages/?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\" class=\"link\"> Páginas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/www/prestashop/admin3766qjphn/index.php/improve/design/modules/positions/?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\" class=\"link\"> Posições
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminImages\">
                              <a href=\"http://localhost/www/prestashop/admin3766qjphn/index.php?controller=AdminImages&amp;token=ee0ee5e89f60399973a20769b8c4c02c\" class=\"link\"> Definições de Imagem
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"/www/prestashop/admin3766qjphn/index.php/modules/link-widget/list?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://localhost/www/prestashop/admin3766qjphn/index.php?controller=AdminCarriers&amp;token=0f5bf40db3b1c27abba12260a6f03caf\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Envio
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://localhost/www/prestashop/admin3766qjphn/index.php?controller=AdminCarriers&amp;token=0f5bf40db3b1c27abba12260a6f03caf\" class=\"link\"> Transportadoras
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                              <a href=\"/www/prestashop/admin3766qjphn/index.php/improve/shipping/preferences?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\" class=\"link\"> Preferências
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/www/prestashop/admin3766qjphn/index.php/improve/payment/payment_methods?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Pagamento
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                              <a href=\"/www/prestashop/admin3766qjphn/index.php/improve/payment/payment_methods?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\" class=\"link\"> Métodos de Pagamento
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/www/prestashop/admin3766qjphn/index.php/improve/payment/preferences?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\" class=\"link\"> Preferências
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                  <a href=\"/www/prestashop/admin3766qjphn/index.php/improve/international/localization/?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    International
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/www/prestashop/admin3766qjphn/index.php/improve/international/localization/?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\" class=\"link\"> Localização
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://localhost/www/prestashop/admin3766qjphn/index.php?controller=AdminZones&amp;token=4c369ddb98264dde359acf91f5095b89\" class=\"link\"> Localizações
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"/www/prestashop/admin3766qjphn/index.php/improve/international/taxes/?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\" class=\"link\"> IVA
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                              <a href=\"/www/prestashop/admin3766qjphn/index.php/improve/international/translations/settings?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\" class=\"link\"> Traduções
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"131\" id=\"subtab-AdminEmarketing\">
                  <a href=\"http://localhost/www/prestashop/admin3766qjphn/index.php?controller=AdminEmarketing&amp;token=2754c2d267bec3490cfb677d8f307052\" class=\"link\">
                    <i class=\"material-icons mi-track_changes\">track_changes</i>
                    <span>
                    Advertising
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"80\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Configurar</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                  <a href=\"/www/prestashop/admin3766qjphn/index.php/configure/shop/preferences/preferences?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Parâmetros da Loja
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/www/prestashop/admin3766qjphn/index.php/configure/shop/preferences/preferences?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\" class=\"link\"> Geral
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/www/prestashop/admin3766qjphn/index.php/configure/shop/order-preferences/?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\" class=\"link\"> Definições da Encomenda
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/www/prestashop/admin3766qjphn/index.php/configure/shop/product-preferences/?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\" class=\"link\"> Produtos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/www/prestashop/admin3766qjphn/index.php/configure/shop/customer-preferences/?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\" class=\"link\"> Definições do cliente
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                              <a href=\"/www/prestashop/admin3766qjphn/index.php/configure/shop/contacts/?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\" class=\"link\"> Contacto
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/www/prestashop/admin3766qjphn/index.php/configure/shop/seo-urls/?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\" class=\"link\"> Tráfego e SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://localhost/www/prestashop/admin3766qjphn/index.php?controller=AdminSearchConf&amp;token=d9daa5debba21e4cf96dc9d599ab164c\" class=\"link\"> Pesquisar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminGamification\">
                              <a href=\"http://localhost/www/prestashop/admin3766qjphn/index.php?controller=AdminGamification&amp;token=ae0ca0549df8b3a1bfea1b883e684555\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/www/prestashop/admin3766qjphn/index.php/configure/advanced/system-information/?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Parâmetros Avançados
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                              <a href=\"/www/prestashop/admin3766qjphn/index.php/configure/advanced/system-information/?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\" class=\"link\"> Informação
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                              <a href=\"/www/prestashop/admin3766qjphn/index.php/configure/advanced/performance/?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\" class=\"link\"> Desempenho
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/www/prestashop/admin3766qjphn/index.php/configure/advanced/administration/?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\" class=\"link\"> Administração
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                              <a href=\"/www/prestashop/admin3766qjphn/index.php/configure/advanced/emails/?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\" class=\"link\"> Email
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"108\" id=\"subtab-AdminImport\">
                              <a href=\"/www/prestashop/admin3766qjphn/index.php/configure/advanced/import/?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\" class=\"link\"> Importar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"/www/prestashop/admin3766qjphn/index.php/configure/advanced/employees/?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\" class=\"link\"> Empregados
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"/www/prestashop/admin3766qjphn/index.php/configure/advanced/sql-requests/?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\" class=\"link\"> Base de dados
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                              <a href=\"/www/prestashop/admin3766qjphn/index.php/configure/advanced/logs/?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\" class=\"link\"> Registos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                              <a href=\"/www/prestashop/admin3766qjphn/index.php/configure/advanced/webservice-keys/?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>
  <div class=\"onboarding-navbar bootstrap\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      Lançar a loja!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">7%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:7.1428571428571%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Continuar</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Parar o Enbarque</a>
  </div>
</div>

</nav>

<div id=\"main-div\">
          
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Catálogo</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/www/prestashop/admin3766qjphn/index.php/sell/catalog/categories?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\" aria-current=\"page\">Categorias</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Categorias          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
             

<script>
    
    var isSymfonyContext = true;
    var admin_module_ajax_url_psmbo = 'http://localhost/www/prestashop/admin3766qjphn/index.php?controller=AdminPsMboModule&token=b33f1919b021f03d74028498e7b5433c';
    var controller = 'AdminCategories';
    
    if (isSymfonyContext === false) {
        
        \$(document).ready(function() {
            
            \$('.process-icon-modules-list').parent('a').prop('href', admin_module_ajax_url_psmbo);
            
            \$('.fancybox-quick-view').fancybox({
                type: 'ajax',
                autoDimensions: false,
                autoSize: false,
                width: 600,
                height: 'auto',
                helpers: {
                    overlay: {
                        locked: false
                    }
                }
            });
        });
    }
\t
\t\$(document).on('click', '#page-header-desc-configuration-modules-list', function(event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
\t
\t\$('.process-icon-modules-list').parent('a').unbind().bind('click', function (event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
    
    function openModalOrRedirect(isSymfonyContext) {
        if (isSymfonyContext === false) {
            \$('#modules_list_container').modal('show');
            openModulesList();
        } else {
            window.location.href = admin_module_ajax_url_psmbo;
        }
    }
\t
    function openModulesList() {
        \$.ajax({
            type: 'POST',
            url: admin_module_ajax_url_psmbo,
            data: {
                ajax : true,
                action : 'GetTabModulesList',
                controllerName: controller
            },
            success : function(data) {
                \$('#modules_list_container_tab_modal').html(data).slideDown();
                \$('#modules_list_loader').hide();
            },
        });
    }
\t
\t
</script>

                                                                                    <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/www/prestashop/admin3766qjphn/index.php/sell/catalog/categories/new?id_parent=2&amp;_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\"                  title=\"Adicionar categoria\"                >
                  <i class=\"material-icons\">add_circle_outline</i>                  Adicionar categoria
                </a>
                                                                  <a
                class=\"btn btn-outline-secondary \"
                id=\"page-header-desc-configuration-modules-list\"
                href=\"/www/prestashop/admin3766qjphn/index.php/improve/modules/catalog?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\"                title=\"Recommended Modules\"
                              >
                Recommended Modules
              </a>
            
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ajuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/www/prestashop/admin3766qjphn/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fpt%252Fdoc%252FAdminCategories%253Fversion%253D1.7.6.3%2526country%253Dpt/Ajuda?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\"
                   id=\"product_form_open_help\"
                >
                  Ajuda
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
    
</div>
      
      <div class=\"content-div  \">

        
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 7.1428571428571%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 35.714285714286%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">5</div>
      </div>
          <div class=\"group group-5\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">6</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Continuar</button>
  <a class=\"onboarding-button-shut-down\">Saltar este tutorial</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(1, {\"groups\":[{\"steps\":[{\"type\":\"popup\",\"text\":\"<div class=\\\"onboarding-welcome\\\">\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\n  <p class=\\\"welcome\\\">Seja bem-vindo \\u00e0 sua loja!<\\/p>\\n  <div class=\\\"content\\\">\\n    <p>Ol\\u00e1! O meu nome \\u00e9 Preston e eu estou aqui para ser o teu guia.<\\/p>\\n    <p>Vai descobrir alguns passos essenciais antes de poder lan\\u00e7ar a sua loja:\\n    Crie o seu primeiro produto, customize a sua loja, configure envios e pagamentos...<\\/p>\\n  <\\/div>\\n  <div class=\\\"started\\\">\\n    <p>Vamos come\\u00e7ar!<\\/p>\\n  <\\/div>\\n  <div class=\\\"buttons\\\">\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">Depois<\\/button>\\n    <button class=\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\">Come\\u00e7ar<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"http:\\/\\/localhost\\/www\\/prestashop\\/admin3766qjphn\\/index.php?controller=AdminDashboard&token=8f9b1873820be42356bb09a8b4927170\"}]},{\"title\":\"Vamos l\\u00e1 criar o teu primeiro produto\",\"subtitle\":{\"1\":\"O que gostaria de dizer sobre este produto? Pense no que os seus clientes v\\u00e3o querer saber.\",\"2\":\"Adicione informa\\u00e7\\u00e3o clara e atractiva. N\\u00e3o se preocupe: pode edit\\u00e1-la depois :)\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"D\\u00ea um nome atraente ao seu produto.\",\"options\":[\"savepoint\"],\"page\":[\"\\/www\\/prestashop\\/admin3766qjphn\\/index.php\\/sell\\/catalog\\/products\\/new?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\",\"shopindex.php\\/sell\\/catalog\\/products\\/.+\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Preencha os detalhes essenciais nesta tab. As outras tabs s\\u00e3o para informa\\u00e7\\u00e3o avan\\u00e7ada.\",\"page\":\"shopindex.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Adicione uma ou mais fotografias para tornar o seu produto mais tentador!\",\"page\":\"shopindex.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Por quanto \\u00e9 que o quer vender?\",\"page\":\"shopindex.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"Yey! Acabou de criar o seu primeiro produto. Tem bom aspecto, n\\u00e3o tem?\",\"page\":\"shopindex.php\\/sell\\/catalog\\/products\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"title\":\"D\\u00ea \\u00e0 sua loja a sua pr\\u00f3pria identidade\",\"subtitle\":{\"1\":\"Qual \\u00e9 o aspecto que quer que a sua loja tenha? O que \\u00e9 que a torna t\\u00e3o especial?\",\"2\":\"Customize o seu tema ou escolha o melhor design atrav\\u00e9s do nosso cat\\u00e1logo de temas.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Uma boa maneira de come\\u00e7ar \\u00e9 adicionar o seu logo aqui!\",\"options\":[\"savepoint\"],\"page\":\"\\/www\\/prestashop\\/admin3766qjphn\\/index.php\\/improve\\/design\\/themes\\/?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\",\"selector\":\"#form_shop_logos_header_logo\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Se quer algo realmente especial, d\\u00ea uma vista de olhos no cat\\u00e1logo de temas!\",\"page\":\"\\/www\\/prestashop\\/admin3766qjphn\\/index.php\\/improve\\/design\\/themes-catalog\\/?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"title\":\"Ponha a sua loja pronta para pagamentos\",\"subtitle\":{\"1\":\"Como \\u00e9 que quer que os seus clientes paguem?\",\"2\":\"Adapte a sua oferta ao seu mercado: adicione os m\\u00e9todos de pagamento mais populares para os seus clientes!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Estes m\\u00e9todos de pagamento j\\u00e1 est\\u00e3o dispon\\u00edveis para os seus clientes.\",\"options\":[\"savepoint\"],\"page\":\"\\/www\\/prestashop\\/admin3766qjphn\\/index.php\\/improve\\/payment\\/payment_methods?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted, .card:eq(0) .text-muted:eq(0)\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"E pode escolher adicionar outros m\\u00e9todos de pagamentos aqui!\",\"page\":\"\\/www\\/prestashop\\/admin3766qjphn\\/index.php\\/improve\\/payment\\/payment_methods?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\",\"selector\":\".panel:eq(1) table tr:eq(0) td:eq(1), .card:eq(1) .module-item-list div:eq(0) div:eq(1)\",\"position\":\"top\"}]},{\"title\":\"Escolha as op\\u00e7\\u00f5es de envio\",\"subtitle\":{\"1\":\"Como \\u00e9 que quer entregar os seus produtos?\",\"2\":\"Selecione as op\\u00e7\\u00f5es de envio que melhor satisfa\\u00e7am os seus clientes! Crie a sua pr\\u00f3pria transportadora ou adicione um m\\u00f3dulo pr\\u00e9-feito.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Aqui est\\u00e3o os m\\u00e9todos de envio dispon\\u00edveis na sua loja hoje.\",\"options\":[\"savepoint\"],\"page\":\"http:\\/\\/localhost\\/www\\/prestashop\\/admin3766qjphn\\/index.php?controller=AdminCarriers&token=0f5bf40db3b1c27abba12260a6f03caf\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Pode oferecer mais op\\u00e7\\u00f5es de envio ao configurar transportadoras adicionais\",\"page\":\"http:\\/\\/localhost\\/www\\/prestashop\\/admin3766qjphn\\/index.php?controller=AdminCarriers&token=0f5bf40db3b1c27abba12260a6f03caf\",\"selector\":\".modules_list_container_tab tr:eq(0) .text-muted\",\"position\":\"right\"}]},{\"title\":\"Melhore a sua loja com m\\u00f3dulos\",\"subtitle\":{\"1\":\"Adicione novas funcionalidades e altere as j\\u00e1 existentes atrav\\u00e9s de m\\u00f3dulos.\",\"2\":\"Alguns m\\u00f3dulos j\\u00e1 est\\u00e3o pr\\u00e9-instalados, outros m\\u00f3dulos podem ser gratuitos ou pagos - procure o que deseja selecionar e descubra o que est\\u00e1 dispon\\u00edvel!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Descubra a nossa sele\\u00e7\\u00e3o de m\\u00f3dulos na primeira tab. Controle os seus m\\u00f3dulos na segunda e esteja atento \\u00e0s notifica\\u00e7\\u00f5es dos mesmos na terceira.\",\"options\":[\"savepoint\"],\"page\":\"\\/www\\/prestashop\\/admin3766qjphn\\/index.php\\/improve\\/modules\\/catalog?_token=RzeT8Hi9lEKeFKOpA8ak2-ZlmxNYOa1CH6dOJCSWHlo\",\"selector\":\".page-head-tabs .tab:eq(0)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"<div id=\\\"onboarding-welcome\\\" class=\\\"modal-body\\\">\\n    <div class=\\\"col-12\\\">\\n        <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\n        <h2 class=\\\"text-center text-md-center\\\">\\u00c9 a tua vez!<\\/h2>\\n    <\\/div>\\n    <div class=\\\"col-12\\\">\\n        <p class=\\\"text-center text-md-center\\\">\\n          J\\u00e1 viste o essential mas h\\u00e1 muito mais a explorar.<br \\/>\\n          Alguns recursos para o ajudar a continuar:\\n        <\\/p>\\n        <div class=\\\"container-fluid\\\">\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6  justify-content-center text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS17\\/Getting+Started\\\" target=\\\"_blank\\\">\\n                <div class=\\\"starter-guide\\\"><\\/div>\\n                <span class=\\\"link\\\">Guia de In\\u00edcio R\\u00e1pido<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\n                <div class=\\\"forum\\\"><\\/div>\\n                <span class=\\\"link\\\">F\\u00f3rum<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"training\\\"><\\/div>\\n                <span class=\\\"link\\\">Forma\\u00e7\\u00e3o<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"video-tutorial\\\"><\\/div>\\n                <span class=\\\"link\\\">Tutorial em v\\u00eddeo<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n        <\\/div>\\n    <\\/div>\\n    <div class=\\\"modal-footer\\\">\\n        <div class=\\\"col-12\\\">\\n            <div class=\\\"text-center text-md-center\\\">\\n                <button class=\\\"btn btn-primary onboarding-button-next\\\">Estou pronto<\\/button>\\n            <\\/div>\\n        <\\/div>\\n    <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"shopindex.php\\/improve\\/modules\\/catalog\"}]}]}, 1, \"http://localhost/www/prestashop/admin3766qjphn/index.php?controller=AdminWelcome&token=af2d876abbb9b3943e70527de96a74f7\", baseAdminDir);

          onBoarding.addTemplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Olá! Estás perdido?</p>    <p>Para continuar, clique aqui:</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Continuar</button>    </div>    <p>Se quiser parar o tutorial definitivamente, carregue aqui:</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Terminar o tutorial de boas vindas</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Passo <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Próximo</button></div>');
    
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
        // line 1337
        $this->displayBlock('content_header', $context, $blocks);
        // line 1338
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1339
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1340
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1341
        echo "
             
<div class=\"modal fade\" id=\"modules_list_container\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h3 class=\"modal-title\">Módulos e Serviços Recomendados</h3>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div id=\"modules_list_container_tab_modal\" style=\"display:none;\"></div>
\t\t\t\t<div id=\"modules_list_loader\"><i class=\"icon-refresh icon-spin\"></i></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh, não!</h1>
  <p class=\"mt-3\">
    A versão móvel desta página ainda não está disponível.
  </p>
  <p class=\"mt-2\">
    Utilize um computador para obter acesso a esta página, até ser adaptada para um telemóvel.
  </p>
  <p class=\"mt-2\">
    Obrigado.
  </p>
  <a href=\"http://localhost/www/prestashop/admin3766qjphn/index.php?controller=AdminDashboard&amp;token=8f9b1873820be42356bb09a8b4927170\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Voltar
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
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-PT&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/pt/login?email=mcastro%40manytecnologia.com.br&amp;firstname=Mcastro&amp;lastname=Mcastro&amp;website=http%3A%2F%2Flocalhost%2Fwww%2Fprestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-PT&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/www/prestashop/admin3766qjphn/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Ligue a sua loja ao mercado PrestaShop para poder importar automaticamente todas as suas compras Addons.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Não tem uma conta criada?</h4>
\t\t\t\t\t\t<p class='text-justify'>Descubra as vantagens do PrestaShop Addons! Explore o «marketplace» oficial do PrestaShop e encontre mais de 3500 módulos inovadores e temas-gráficos que o ajudam a otimizar as taxas de conversão de visitas em vendas, aumentar o tráfego na loja, aumentar a fidelidade dos clientes e maximizar o seu nível de produtividade</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Ligue-se ao PrestaShop Addons</h4>
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
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/pt/forgot-your-password\">Esqueci-me da minha palavra-passe</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/pt/login?email=mcastro%40manytecnologia.com.br&amp;firstname=Mcastro&amp;lastname=Mcastro&amp;website=http%3A%2F%2Flocalhost%2Fwww%2Fprestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-PT&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCriar uma conta
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Entrar
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
        // line 1462
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 177
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1337
    public function block_content_header($context, array $blocks = [])
    {
    }

    // line 1338
    public function block_content($context, array $blocks = [])
    {
    }

    // line 1339
    public function block_content_footer($context, array $blocks = [])
    {
    }

    // line 1340
    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1462
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
        return "__string_template__927228b799e9b334d56032942804609911b059d5436870c44818593c2ead4837";
    }

    public function getDebugInfo()
    {
        return array (  1552 => 1462,  1547 => 1340,  1542 => 1339,  1537 => 1338,  1532 => 1337,  1523 => 177,  1515 => 1462,  1392 => 1341,  1389 => 1340,  1386 => 1339,  1383 => 1338,  1381 => 1337,  217 => 177,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__927228b799e9b334d56032942804609911b059d5436870c44818593c2ead4837", "");
    }
}
