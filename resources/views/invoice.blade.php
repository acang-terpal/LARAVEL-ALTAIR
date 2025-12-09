@extends('layout.master')

@section('head')
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no" />

    <link rel="icon" type="image/png" href="altair/assets/img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="altair/assets/img/favicon-32x32.png" sizes="32x32">

    <title>Altair Admin v2.7.0</title>


    <!-- uikit -->
    <link rel="stylesheet" href="altair/bower_components/uikit/css/uikit.almost-flat.min.css" media="all">

    <!-- flag icons -->
    <link rel="stylesheet" href="altair/assets/icons/flags/flags.min.css" media="all">

    <!-- style switcher -->
    <link rel="stylesheet" href="altair/assets/css/style_switcher.min.css" media="all">

    <!-- altair admin -->
    <link rel="stylesheet" href="altair/assets/css/main.min.css" media="all">

    <!-- themes -->
    <link rel="stylesheet" href="altair/assets/css/themes/themes_combined.min.css" media="all">

    <!-- matchMedia polyfill for testing media queries in JS -->
    <!--[if lte IE 9]>
                <script type="text/javascript" src="altair/bower_components/matchMedia/matchMedia.js"></script>
                <script type="text/javascript" src="altair/bower_components/matchMedia/matchMedia.addListener.js"></script>
                <link rel="stylesheet" href="altair/assets/css/ie.css" media="all">
            <![endif]-->
@endsection

@section("header")
    @include("layout.header")
@endsection

@section('sidebar_main')
    @include('layout.sidebar_main')
@endsection

@section('content')
    <div id="page_content">
        <div id="page_content_inner">

            <div class="uk-width-medium-8-10 uk-container-center reset-print">
                <div class="uk-grid uk-grid-collapse" data-uk-grid-margin>
                    <div class="uk-width-large-7-10">
                        <div class="md-card md-card-single main-print" id="invoice">
                            <div id="invoice_preview"></div>
                            <div id="invoice_form"></div>
                        </div>
                    </div>
                    <div class="uk-width-large-3-10 hidden-print uk-visible-large">
                        <div class="md-list-outside-wrapper">
                            <ul class="md-list md-list-outside invoices_list" id="invoices_list">

                                <li class="heading_list">June 2016</li>


                                <li>
                                    <a href="#" class="md-list-content" data-invoice-id="2">
                                        <span class="md-list-heading uk-text-truncate">Invoice 23/2015 <span
                                                class="uk-text-small uk-text-muted">(27 Jun)</span></span>
                                        <span class="uk-text-small uk-text-muted">Flatley-Berge</span>
                                    </a>
                                </li>


                                <li>
                                    <a href="#" class="md-list-content" data-invoice-id="3">
                                        <span class="uk-badge uk-badge-primary">Header/Footer</span>
                                        <span class="md-list-heading uk-text-truncate">Invoice 151/2015 <span
                                                class="uk-text-small uk-text-muted">(26 Jun)</span></span>
                                        <span class="uk-text-small uk-text-muted">Larkin-Bernhard</span>
                                    </a>
                                </li>


                                <li>
                                    <a href="#" class="md-list-content" data-invoice-id="4">
                                        <span class="uk-badge uk-badge-danger">Overdue</span>
                                        <span class="md-list-heading uk-text-truncate">Invoice 89/2015 <span
                                                class="uk-text-small uk-text-muted">(25 Jun)</span></span>
                                        <span class="uk-text-small uk-text-muted">Stark, Maggio and Weimann</span>
                                    </a>
                                </li>


                                <li>
                                    <a href="#" class="md-list-content" data-invoice-id="5">
                                        <span class="md-list-heading uk-text-truncate">Invoice 62/2015 <span
                                                class="uk-text-small uk-text-muted">(24 Jun)</span></span>
                                        <span class="uk-text-small uk-text-muted">Douglas-Lakin</span>
                                    </a>
                                </li>


                                <li>
                                    <a href="#" class="md-list-content" data-invoice-id="6">
                                        <span class="md-list-heading uk-text-truncate">Invoice 84/2015 <span
                                                class="uk-text-small uk-text-muted">(23 Jun)</span></span>
                                        <span class="uk-text-small uk-text-muted">D'Amore and Sons</span>
                                    </a>
                                </li>


                                <li>
                                    <a href="#" class="md-list-content" data-invoice-id="7">
                                        <span class="uk-badge uk-badge-primary">Header/Footer</span>
                                        <span class="md-list-heading uk-text-truncate">Invoice 21/2015 <span
                                                class="uk-text-small uk-text-muted">(22 Jun)</span></span>
                                        <span class="uk-text-small uk-text-muted">Mertz and Sons</span>
                                    </a>
                                </li>


                                <li class="heading_list">Oldest</li>

                                <li>
                                    <a href="#" class="md-list-content" data-invoice-id="9">
                                        <span class="md-list-heading uk-text-truncate">Invoice 34/2015 <span
                                                class="uk-text-small uk-text-muted">(13 Mar)</span></span>
                                        <span class="uk-text-small uk-text-muted">Corwin Group</span>
                                    </a>
                                </li>


                                <li>
                                    <a href="#" class="md-list-content" data-invoice-id="10">
                                        <span class="md-list-heading uk-text-truncate">Invoice 37/2015 <span
                                                class="uk-text-small uk-text-muted">(29 Apr)</span></span>
                                        <span class="uk-text-small uk-text-muted">Hyatt Group</span>
                                    </a>
                                </li>


                                <li>
                                    <a href="#" class="md-list-content" data-invoice-id="11">
                                        <span class="md-list-heading uk-text-truncate">Invoice 28/2015 <span
                                                class="uk-text-small uk-text-muted">(9 May)</span></span>
                                        <span class="uk-text-small uk-text-muted">Herman-Kohler</span>
                                    </a>
                                </li>


                                <li>
                                    <a href="#" class="md-list-content" data-invoice-id="12">
                                        <span class="uk-badge uk-badge-danger">Overdue</span>
                                        <span class="md-list-heading uk-text-truncate">Invoice 172/2015 <span
                                                class="uk-text-small uk-text-muted">(20 Mar)</span></span>
                                        <span class="uk-text-small uk-text-muted">Fay, Yost and Morar</span>
                                    </a>
                                </li>


                                <li>
                                    <a href="#" class="md-list-content" data-invoice-id="13">
                                        <span class="md-list-heading uk-text-truncate">Invoice 107/2015 <span
                                                class="uk-text-small uk-text-muted">(24 Apr)</span></span>
                                        <span class="uk-text-small uk-text-muted">Brakus, Bayer and Barton</span>
                                    </a>
                                </li>


                                <li>
                                    <a href="#" class="md-list-content" data-invoice-id="14">
                                        <span class="md-list-heading uk-text-truncate">Invoice 197/2015 <span
                                                class="uk-text-small uk-text-muted">(23 May)</span></span>
                                        <span class="uk-text-small uk-text-muted">Schulist, Rolfson and Jaskolski</span>
                                    </a>
                                </li>


                                <li>
                                    <a href="#" class="md-list-content" data-invoice-id="15">
                                        <span class="uk-badge uk-badge-danger">Overdue</span>
                                        <span class="md-list-heading uk-text-truncate">Invoice 79/2015 <span
                                                class="uk-text-small uk-text-muted">(1 Mar)</span></span>
                                        <span class="uk-text-small uk-text-muted">Bashirian, Stamm and Moore</span>
                                    </a>
                                </li>


                                <li>
                                    <a href="#" class="md-list-content" data-invoice-id="16">
                                        <span class="md-list-heading uk-text-truncate">Invoice 102/2015 <span
                                                class="uk-text-small uk-text-muted">(1 May)</span></span>
                                        <span class="uk-text-small uk-text-muted">Wyman and Sons</span>
                                    </a>
                                </li>


                                <li>
                                    <a href="#" class="md-list-content" data-invoice-id="17">
                                        <span class="md-list-heading uk-text-truncate">Invoice 164/2015 <span
                                                class="uk-text-small uk-text-muted">(17 Feb)</span></span>
                                        <span class="uk-text-small uk-text-muted">Terry-Kovacek</span>
                                    </a>
                                </li>


                                <li>
                                    <a href="#" class="md-list-content" data-invoice-id="18">
                                        <span class="md-list-heading uk-text-truncate">Invoice 185/2015 <span
                                                class="uk-text-small uk-text-muted">(14 Apr)</span></span>
                                        <span class="uk-text-small uk-text-muted">Bruen Group</span>
                                    </a>
                                </li>


                                <li>
                                    <a href="#" class="md-list-content" data-invoice-id="19">
                                        <span class="md-list-heading uk-text-truncate">Invoice 83/2015 <span
                                                class="uk-text-small uk-text-muted">(22 Apr)</span></span>
                                        <span class="uk-text-small uk-text-muted">Block, Ernser and Greenholt</span>
                                    </a>
                                </li>


                                <li>
                                    <a href="#" class="md-list-content" data-invoice-id="20">
                                        <span class="md-list-heading uk-text-truncate">Invoice 72/2015 <span
                                                class="uk-text-small uk-text-muted">(17 Apr)</span></span>
                                        <span class="uk-text-small uk-text-muted">O'Hara Ltd</span>
                                    </a>
                                </li>


                                <li>
                                    <a href="#" class="md-list-content" data-invoice-id="21">
                                        <span class="md-list-heading uk-text-truncate">Invoice 195/2015 <span
                                                class="uk-text-small uk-text-muted">(12 Mar)</span></span>
                                        <span class="uk-text-small uk-text-muted">Beier, Corwin and Fadel</span>
                                    </a>
                                </li>


                                <li>
                                    <a href="#" class="md-list-content" data-invoice-id="22">
                                        <span class="md-list-heading uk-text-truncate">Invoice 47/2015 <span
                                                class="uk-text-small uk-text-muted">(22 Feb)</span></span>
                                        <span class="uk-text-small uk-text-muted">Effertz-Schoen</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('sidebar_secondary')
    @include('layout.sidebar_secondary')
@endsection

@section('script_bottom')
    @verbatim
        <script id="invoice_template" type="text/x-handlebars-template">
        <div class="md-card-toolbar{{#if invoice.header}} hidden-print{{/if}}">
            <div class="md-card-toolbar-actions hidden-print">
                <i class="md-icon material-icons" id="invoice_print">&#xE8ad;</i>
                <div class="md-card-dropdown" data-uk-dropdown="{pos:'bottom-right'}">
                    <i class="md-icon material-icons">&#xE5D4;</i>
                    <div class="uk-dropdown uk-dropdown-small">
                        <ul class="uk-nav">
                            <li><a href="#">Archive</a></li>
                            <li><a href="#" class="uk-text-danger">Remove</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <h3 class="md-card-toolbar-heading-text large" id="invoice_name">
                Invoice {{invoice.invoice_number}}
            </h3>
        </div>
        <div class="md-card-content invoice_content print_bg{{#if invoice.footer}} invoice_footer_active{{/if}}">
            {{#if invoice.header}}
                <div class="invoice_header md-bg-blue-grey-500">
                    <img src="assets/img/logo_light.png" alt="" height="30" width="140"/>
                    <img class="uk-float-right" src="assets/img/others/html5-css-javascript-logos.png" alt="" height="80" width="205"/>
                </div>
            {{/if}}
            <div class="uk-margin-medium-bottom">
                {{#if invoice.header}}
                <h3 class="heading_a uk-margin-bottom"> Invoice {{invoice.invoice_number}} </h3>
                {{/if}}
                <span class="uk-text-muted uk-text-small uk-text-italic">Date:</span> {{invoice.invoice_date}}
                <br/>
                <span class="uk-text-muted uk-text-small uk-text-italic">Due Date:</span> <span {{#if invoice.overdue}} class="uk-text-danger uk-text-bold"{{/if}}>{{invoice.invoice_due_date}}</span>
            </div>
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-small-3-5">
                    <div class="uk-margin-bottom">
                        <span class="uk-text-muted uk-text-small uk-text-italic">From:</span>
                        <address>
                            <p><strong>{{invoice.invoice_from_company}}</strong></p>
                            <p>{{invoice.invoice_from_address_1}}</p>
                            <p>{{invoice.invoice_from_address_2}}</p>
                        </address>
                    </div>
                    <div class="uk-margin-medium-bottom">
                        <span class="uk-text-muted uk-text-small uk-text-italic">To:</span>
                        <address>
                            <p><strong>{{invoice.invoice_to_company}}</strong></p>
                            <p>{{invoice.invoice_to_address_1}}</p>
                            <p>{{invoice.invoice_to_address_2}}</p>
                        </address>
                    </div>
                </div>
                <div class="uk-width-small-2-5">
                    <span class="uk-text-muted uk-text-small uk-text-italic">Total:</span>
                    <p class="heading_b {{#if invoice.overdue}}uk-text-danger{{else}}uk-text-success{{/if}}">{{invoice.invoice_total_value}}</p>
                    <p class="uk-text-small uk-text-muted uk-margin-top-remove">Incl. VAT -
                        {{invoice.invoice_vat_value}}</p>
                </div>
            </div>
            <div class="uk-grid uk-margin-large-bottom">
                <div class="uk-width-1-1">
                    <table class="uk-table">
                        <thead>
                            <tr class="uk-text-upper">
                                <th>Description</th>
                                <th>Rate</th>
                                <!-- <th class="uk-text-center">Hours</th> -->
                                <th class="uk-text-center">Vat</th>
                                <th class="uk-text-center">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                        {{#each invoice.invoice_services}}
                        <tr class="uk-table-middle">
                                <td>
                                    <span class="uk-text-large">{{ service_name }}</span><br/>
                                    <span class="uk-text-muted uk-text-small">{{ service_description }}</span>
                                </td>
                                <td>
                                    {{ service_rate }}
                                </td>
                                <!-- <td class="uk-text-center">
                                    {{ service_hours }}
                                </td> -->
                                <td class="uk-text-center">
                                    {{ service_vat }}
                                </td>
                                <td class="uk-text-center">
                                    {{ service_total }}
                                </td>
                            </tr>
                        {{/each}}
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <span class="uk-text-muted uk-text-small uk-text-italic">Payment to:</span>
                    <p class="uk-margin-top-remove">
                        {{{ invoice.invoice_payment_info }}}
                    </p>
                    <p class="uk-text-small">Please pay within {{ invoice.invoice_payment_due }} days</p>
                </div>
            </div>
            {{#if invoice.footer}}
            <div class="invoice_footer">
                Wiza-Gusikowski<span>&middot;</span>6432 Gislason Pike
East Jenifer, TN 41275-0307<br>
                </span>051-008-8698x21932<span>&middot;</span>o'reilly.henriette@yahoo.com            </div>
            {{/if}}
        </div>
    </script>

        <script id="invoice_form_template" type="text/x-handlebars-template">
        <form action="" class="uk-form-stacked">
            <div class="md-card-toolbar">
                <div class="md-card-toolbar-actions">
                    <i class="md-icon material-icons">&#xE161;</i>
                </div>
                <input name="invoice_number" id="invoice_number" class="md-card-toolbar-input" type="text" value="" placeholder="Invoice number" />
            </div>
            <div class="md-card-content large-padding">
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-medium-1-2">
                        <label class="uk-form-label" for="hobbies">Issue date:</label>
                        <div class="uk-input-group">
                            <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-calendar"></i></span>
                            <label for="invoice_dp">Select date</label>
                            <input class="md-input" type="text" id="invoice_dp" value="" data-uk-datepicker="{format:'DD.MM.YYYY'}">
                        </div>
                    </div>
                    <div class="uk-width-medium-1-2">
                        <label class="uk-form-label uk-margin-bottom" for="hobbies">Due date (days):</label>
                        <span class="icheck-inline">
                            <input type="radio" name="invoice_due_date" id="invoice_due_date_7" data-md-icheck />
                            <label for="invoice_due_date_7" class="inline-label">7</label>
                        </span>
                        <span class="icheck-inline">
                            <input type="radio" name="invoice_due_date" id="invoice_due_date_14" data-md-icheck />
                            <label for="invoice_due_date_14" class="inline-label">14</label>
                        </span>
                        <span class="icheck-inline">
                            <input type="radio" name="invoice_due_date" id="invoice_due_date_21" data-md-icheck />
                            <label for="invoice_due_date_21" class="inline-label">21</label>
                        </span>
                    </div>
                </div>
                <div class="uk-grid uk-grid-divider grid-block" data-uk-grid-margin>
                    <div class="uk-width-medium-1-2">
                        <label class="uk-form-label uk-margin-bottom" for="hobbies">From:</label>
                        <div class="uk-form-row">
                            <label for="invoice_from_company">Company Name</label>
                            <input type="text" class="md-input" id="invoice_from_company" name="invoice_from_company"/>
                        </div>
                        <div class="uk-form-row">
                            <label for="invoice_from_address_1">Address 1</label>
                            <input type="text" class="md-input" id="invoice_from_address_1" name="invoice_from_address_1" />
                        </div>
                        <div class="uk-form-row">
                            <label for="invoice_from_address_2">Address 2</label>
                            <input type="text" class="md-input" id="invoice_from_address_2" name="invoice_from_address_2" />
                        </div>
                    </div>
                    <div class="uk-width-medium-1-2">
                        <label class="uk-form-label uk-margin-bottom" for="hobbies">To:</label>
                        <div class="uk-form-row">
                            <label for="invoice_to_company">Company Name</label>
                            <input type="text" class="md-input" id="invoice_to_company" name="invoice_to_company"/>
                        </div>
                        <div class="uk-form-row">
                            <label for="invoice_to_address_1">Address 1</label>
                            <input type="text" class="md-input" id="invoice_to_address_1" name="invoice_to_address_1" />
                        </div>
                        <div class="uk-form-row">
                            <label for="invoice_to_address_2">Address 2</label>
                            <input type="text" class="md-input" id="invoice_to_address_2" name="invoice_to_address_2" />
                        </div>
                    </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-1-1">
                        <div id="form_invoice_services"></div>
                        <div class="uk-text-center uk-margin-medium-top uk-margin-bottom">
                            <a href="#" class="md-btn md-btn-flat md-btn-flat-primary" id="invoice_form_append_service_btn">Add new</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </script>
        <script id="invoice_form_template_services" type="text/x-handlebars-template">
        {{#ifCond invoice_service_id '!==' 1}}
        <hr class="md-hr"/>
        {{/ifCond}}
        <div class="uk-grid" data-uk-grid-margin data-service-number="{{invoice_service_id}}">
            <div class="uk-width-medium-1-10 uk-text-center">
                <p class="uk-text-large">{{invoice_service_id}}.</p>
            </div>
            <div class="uk-width-medium-9-10">
                <div class="uk-grid uk-grid-small" data-uk-grid-margin>
                    <div class="uk-width-medium-5-10">
                        <label for="inv_service_{{invoice_service_id}}">Service Name</label>
                        <input type="text" class="md-input" id="inv_service_{{invoice_service_id}}" name="inv_service_id_{{invoice_service_id}}" />
                    </div>
                    <div class="uk-width-medium-1-10">
                        <label for="inv_service_{{invoice_service_id}}_rate">Rate</label>
                        <input type="text" class="md-input" id="inv_service_{{invoice_service_id}}_rate" name="inv_service_{{invoice_service_id}}_rate" />
                    </div>
                    <div class="uk-width-medium-1-10">
                        <label for="inv_service_{{invoice_service_id}}_hours">Hours</label>
                        <input type="text" class="md-input" id="inv_service_{{invoice_service_id}}_hours" name="inv_service_{{invoice_service_id}}_hours" />
                    </div>
                    <div class="uk-width-medium-1-10">
                        <label for="inv_service_{{invoice_service_id}}_vat">VAT</label>
                        <input type="text" class="md-input" id="inv_service_{{invoice_service_id}}_vat" name="inv_service_{{invoice_service_id}}_vat" />
                    </div>
                    <div class="uk-width-medium-2-10">
                        <label for="inv_service_{{invoice_service_id}}_vat">Total</label>
                        <input type="text" class="md-input" id="inv_service_{{invoice_service_id}}_vat" name="inv_service_{{invoice_service_id}}_vat" readonly/>
                    </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-medium-1-1">
                        <label for="inv_service_{{invoice_service_id}}_desc">Description</label>
                        <textarea class="md-input" id="inv_service_{{invoice_service_id}}_desc" name="invoice_service_id_{{invoice_service_id}}_desc" cols="30" rows="2"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </script>
    @endverbatim

    <!-- google web fonts -->
    <script>
        WebFontConfig = {
            google: {
                families: [
                    'Source+Code+Pro:400,700:latin',
                    'Roboto:400,300,500,700,400italic:latin'
                ]
            }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>

    <!-- common functions -->
    <script src="altair/assets/js/common.js"></script>
    <!-- uikit functions -->
    <script src="altair/assets/js/uikit_custom.js"></script>
    <!-- altair common functions/helpers -->
    <script src="altair/assets/js/altair_admin_common.js"></script>

    <!-- page specific plugins -->
    <!-- handlebars.js -->
    <script src="altair/bower_components/handlebars/handlebars.js"></script>
    <script src="altair/assets/js/custom/handlebars_helpers.js"></script>

    <!--  invoices functions -->
    <script src="altair/assets/js/pages/page_invoices.js"></script>

    <script>
        $(function() {
            if (isHighDensity) {
                // enable hires images
                altair_helpers.retina_images();
            }
            if (Modernizr.touch) {
                // fastClick (touch devices)
                FastClick.attach(document.body);
            }
        });
        $window.load(function() {
            // ie fixes
            altair_helpers.ie_fix();
        });
    </script>
@endsection

@section('style_switcher')
    <div id="style_switcher">
        <div id="style_switcher_toggle"><i class="material-icons">&#xE8B8;</i></div>
        <div class="uk-margin-medium-bottom">
            <h4 class="heading_c uk-margin-bottom">Colors</h4>
            <ul class="switcher_app_themes" id="theme_switcher">
                <li class="app_style_default active_theme" data-app-theme="">
                    <span class="app_color_main"></span>
                    <span class="app_color_accent"></span>
                </li>
                <li class="switcher_theme_a" data-app-theme="app_theme_a">
                    <span class="app_color_main"></span>
                    <span class="app_color_accent"></span>
                </li>
                <li class="switcher_theme_b" data-app-theme="app_theme_b">
                    <span class="app_color_main"></span>
                    <span class="app_color_accent"></span>
                </li>
                <li class="switcher_theme_c" data-app-theme="app_theme_c">
                    <span class="app_color_main"></span>
                    <span class="app_color_accent"></span>
                </li>
                <li class="switcher_theme_d" data-app-theme="app_theme_d">
                    <span class="app_color_main"></span>
                    <span class="app_color_accent"></span>
                </li>
                <li class="switcher_theme_e" data-app-theme="app_theme_e">
                    <span class="app_color_main"></span>
                    <span class="app_color_accent"></span>
                </li>
                <li class="switcher_theme_f" data-app-theme="app_theme_f">
                    <span class="app_color_main"></span>
                    <span class="app_color_accent"></span>
                </li>
                <li class="switcher_theme_g" data-app-theme="app_theme_g">
                    <span class="app_color_main"></span>
                    <span class="app_color_accent"></span>
                </li>
                <li class="switcher_theme_h" data-app-theme="app_theme_h">
                    <span class="app_color_main"></span>
                    <span class="app_color_accent"></span>
                </li>
                <li class="switcher_theme_i" data-app-theme="app_theme_i">
                    <span class="app_color_main"></span>
                    <span class="app_color_accent"></span>
                </li>
                <li class="switcher_theme_dark" data-app-theme="app_theme_dark">
                    <span class="app_color_main"></span>
                    <span class="app_color_accent"></span>
                </li>
            </ul>
        </div>
        <div class="uk-visible-large uk-margin-medium-bottom">
            <h4 class="heading_c">Sidebar</h4>
            <p>
                <input type="checkbox" name="style_sidebar_mini" id="style_sidebar_mini" data-md-icheck />
                <label for="style_sidebar_mini" class="inline-label">Mini Sidebar</label>
            </p>
            <p>
                <input type="checkbox" name="style_sidebar_slim" id="style_sidebar_slim" data-md-icheck />
                <label for="style_sidebar_slim" class="inline-label">Slim Sidebar</label>
            </p>
        </div>
        <div class="uk-visible-large uk-margin-medium-bottom">
            <h4 class="heading_c">Layout</h4>
            <p>
                <input type="checkbox" name="style_layout_boxed" id="style_layout_boxed" data-md-icheck />
                <label for="style_layout_boxed" class="inline-label">Boxed layout</label>
            </p>
        </div>
        <div class="uk-visible-large">
            <h4 class="heading_c">Main menu accordion</h4>
            <p>
                <input type="checkbox" name="accordion_mode_main_menu" id="accordion_mode_main_menu" data-md-icheck />
                <label for="accordion_mode_main_menu" class="inline-label">Accordion mode</label>
            </p>
        </div>
    </div>

    <script>
        $(function() {
            var $switcher = $('#style_switcher'),
                $switcher_toggle = $('#style_switcher_toggle'),
                $theme_switcher = $('#theme_switcher'),
                $mini_sidebar_toggle = $('#style_sidebar_mini'),
                $slim_sidebar_toggle = $('#style_sidebar_slim'),
                $boxed_layout_toggle = $('#style_layout_boxed'),
                $accordion_mode_toggle = $('#accordion_mode_main_menu'),
                $html = $('html'),
                $body = $('body');


            $switcher_toggle.click(function(e) {
                e.preventDefault();
                $switcher.toggleClass('switcher_active');
            });

            $theme_switcher.children('li').click(function(e) {
                e.preventDefault();
                var $this = $(this),
                    this_theme = $this.attr('data-app-theme');

                $theme_switcher.children('li').removeClass('active_theme');
                $(this).addClass('active_theme');
                $html
                    .removeClass(
                        'app_theme_a app_theme_b app_theme_c app_theme_d app_theme_e app_theme_f app_theme_g app_theme_h app_theme_i app_theme_dark'
                    )
                    .addClass(this_theme);

                if (this_theme == '') {
                    localStorage.removeItem('altair_theme');
                } else {
                    localStorage.setItem("altair_theme", this_theme);
                    if (this_theme == 'app_theme_dark') {
                        $('#kendoCSS').attr('href',
                            'altair/altair/altair/bower_components/kendo-ui/styles/kendo.materialblack.min.css'
                        )
                    }
                }

            });

            // hide style switcher
            $document.on('click keyup', function(e) {
                if ($switcher.hasClass('switcher_active')) {
                    if (
                        (!$(e.target).closest($switcher).length) ||
                        (e.keyCode == 27)
                    ) {
                        $switcher.removeClass('switcher_active');
                    }
                }
            });

            // get theme from local storage
            if (localStorage.getItem("altair_theme") !== null) {
                $theme_switcher.children('li[data-app-theme=' + localStorage.getItem("altair_theme") + ']').click();
            }


            // toggle mini sidebar

            // change input's state to checked if mini sidebar is active
            if ((localStorage.getItem("altair_sidebar_mini") !== null && localStorage.getItem(
                    "altair_sidebar_mini") == '1') || $body.hasClass('sidebar_mini')) {
                $mini_sidebar_toggle.iCheck('check');
            }

            $mini_sidebar_toggle
                .on('ifChecked', function(event) {
                    $switcher.removeClass('switcher_active');
                    localStorage.setItem("altair_sidebar_mini", '1');
                    localStorage.removeItem('altair_sidebar_slim');
                    location.reload(true);
                })
                .on('ifUnchecked', function(event) {
                    $switcher.removeClass('switcher_active');
                    localStorage.removeItem('altair_sidebar_mini');
                    location.reload(true);
                });

            // toggle slim sidebar

            // change input's state to checked if mini sidebar is active
            if ((localStorage.getItem("altair_sidebar_slim") !== null && localStorage.getItem(
                    "altair_sidebar_slim") == '1') || $body.hasClass('sidebar_slim')) {
                $slim_sidebar_toggle.iCheck('check');
            }

            $slim_sidebar_toggle
                .on('ifChecked', function(event) {
                    $switcher.removeClass('switcher_active');
                    localStorage.setItem("altair_sidebar_slim", '1');
                    localStorage.removeItem('altair_sidebar_mini');
                    location.reload(true);
                })
                .on('ifUnchecked', function(event) {
                    $switcher.removeClass('switcher_active');
                    localStorage.removeItem('altair_sidebar_slim');
                    location.reload(true);
                });

            // toggle boxed layout

            if ((localStorage.getItem("altair_layout") !== null && localStorage.getItem("altair_layout") ==
                    'boxed') || $body.hasClass('boxed_layout')) {
                $boxed_layout_toggle.iCheck('check');
                $body.addClass('boxed_layout');
                $(window).resize();
            }

            $boxed_layout_toggle
                .on('ifChecked', function(event) {
                    $switcher.removeClass('switcher_active');
                    localStorage.setItem("altair_layout", 'boxed');
                    location.reload(true);
                })
                .on('ifUnchecked', function(event) {
                    $switcher.removeClass('switcher_active');
                    localStorage.removeItem('altair_layout');
                    location.reload(true);
                });

            // main menu accordion mode
            if ($sidebar_main.hasClass('accordion_mode')) {
                $accordion_mode_toggle.iCheck('check');
            }

            $accordion_mode_toggle
                .on('ifChecked', function() {
                    $sidebar_main.addClass('accordion_mode');
                })
                .on('ifUnchecked', function() {
                    $sidebar_main.removeClass('accordion_mode');
                });


        });
    </script>
@endsection
