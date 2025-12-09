
@extends('layout.master')

@section('head')
<meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>

    <link rel="icon" type="image/png" href="altair/assets/img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="altair/assets/img/favicon-32x32.png" sizes="32x32">

    <title>Altair Admin v2.7.0</title>

    <!-- additional styles for plugins -->
    <!-- htmleditor (codeMirror) -->
    <link rel="stylesheet" href="altair/bower_components/codemirror/lib/codemirror.css">
    
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

@section('header')
    @include('layout.header')
@endsection

@section('sidebar_main')
    @include('layout.sidebar_main')
@endsection

@section('content')
<div id="top_bar">
        <div class="md-top-bar">
            <div class="uk-width-large-8-10 uk-container-center">
                <ul class="top_bar_nav" id="snippets_grid_filter">
                    <li class="uk-active" data-uk-filter="">
                        <a href="#">All</a>
                    </li>
                    <li data-uk-filter="snippets-lang-php">
                        <a href="#">PHP</a>
                    </li>
                    <li data-uk-filter="snippets-lang-css">
                        <a href="#">CSS</a>
                    </li>
                    <li data-uk-filter="snippets-lang-javascript">
                        <a href="#">jQuery</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div id="page_content">
        <div id="page_content_inner">

            <div class="uk-width-large-8-10 uk-container-center">
                <div id="snippets">
                    <div class="uk-grid uk-grid-small uk-grid-width-1 uk-grid-width-medium-1-2 uk-grid-width-large-1-2 uk-grid-width-xlarge-1-3 hierarchical_show" data-uk-grid="{ gutter: 16, controls: '#snippets_grid_filter' }">
                        <div data-uk-filter="snippets-lang-javascript">
                            <div class="md-card md-card-hover md-card-overlay" data-snippet-title="Smooth scrolling to top of page">
                                <div class="md-card-content">
<pre class="line-numbers"><code class="language-javascript">$("a[href='#top']").click(function() {
  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
});</code></pre>
                                </div>
                                <div class="md-card-overlay-content">
                                    <div class="uk-clearfix md-card-overlay-header">
                                        <i class="md-icon md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                                        <h4>Smooth scrolling to top of page</h4>
                                    </div>
                                    <div class="md-card-overlay-content-inner">
                                        <p class="uk-margin-bottom truncate-text" style="height: 88px">
                                            Veniam expedita nostrum sequi et quam molestias incidunt illo natus esse omnis perspiciatis nihil reiciendis quo doloremque suscipit unde voluptatem ad cum nemo eos in ut praesentium ut quos nihil minima non voluptatem pariatur rerum.                                        </p>
                                        <p><span class="uk-badge uk-badge-success">javascript</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-uk-filter="snippets-lang-php">
                            <div class="md-card md-card-hover md-card-overlay" data-snippet-title="Get Image Information">
                                <div class="md-card-content">
<pre class="line-numbers"><code class="language-php">function getImageinfo($file, $query) {
  if (!realpath($file)) {
    $file = $_SERVER[&quot;DOCUMENT_ROOT&quot;].$file;
  }
  $image = getimagesize($file);
  return $image[$query];
}</code></pre>
                                </div>
                                <div class="md-card-overlay-content">
                                    <div class="uk-clearfix md-card-overlay-header">
                                        <i class="md-icon md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                                        <h4>Get Image Information</h4>
                                    </div>
                                    <div class="md-card-overlay-content-inner">
                                        <p class="uk-margin-bottom truncate-text" style="height: 88px">
                                            Tempora nesciunt iusto deserunt impedit nihil ex et fugit iusto est autem aspernatur rerum occaecati fugit hic omnis quo eos voluptatem sed molestias magnam ut.                                        </p>
                                        <p><span class="uk-badge uk-badge-primary">php</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-uk-filter="snippets-lang-javascript">
                            <div class="md-card md-card-hover md-card-overlay" data-snippet-title="Equal height columns">
                                <div class="md-card-content">
<pre class="line-numbers"><code class="language-javascript">var maxheight = 0;
$("div.col").each(function(){
  if($(this).height() > maxheight) { maxheight = $(this).height(); }
});

$("div.col").height(maxheight);</code></pre>
                                </div>
                                <div class="md-card-overlay-content">
                                    <div class="uk-clearfix md-card-overlay-header">
                                        <i class="md-icon md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                                        <h4>Equal height columns</h4>
                                    </div>
                                    <div class="md-card-overlay-content-inner">
                                        <p class="uk-margin-bottom truncate-text" style="height: 88px">
                                            Autem eveniet ut cum accusantium nulla voluptatem expedita dolores eveniet deserunt eos eveniet qui laudantium repellendus fugiat excepturi dolores veniam.                                        </p>
                                        <p><span class="uk-badge uk-badge-success">javascript</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-uk-filter="snippets-lang-css">
                            <div class="md-card md-card-hover md-card-overlay" data-snippet-title="Border radius">
                                <div class="md-card-content">
<pre class="line-numbers"><code class="language-css">.border-radius {
  -webkit-border-radius: 4px;
  border-radius: 4px;
}</code></pre>
                                </div>
                                <div class="md-card-overlay-content">
                                    <div class="uk-clearfix md-card-overlay-header">
                                        <i class="md-icon md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                                        <h4>Border radius</h4>
                                    </div>
                                    <div class="md-card-overlay-content-inner">
                                        <p class="uk-margin-bottom truncate-text" style="height: 88px">
                                            Provident ipsa suscipit maxime molestias voluptas praesentium laudantium voluptas dicta in voluptatem dolor eveniet sed sed est velit assumenda vero deleniti et et voluptatem sed consequatur non et id facere omnis sit impedit aut.                                        </p>
                                        <p><span class="uk-badge uk-badge-danger">css</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-uk-filter="snippets-lang-javascript">
                            <div class="md-card md-card-hover md-card-overlay" data-snippet-title="Check if an image is loaded">
                                <div class="md-card-content">
<pre class="line-numbers"><code class="language-javascript">var imgsrc = 'img/image1.png';
$('<img/>').load(function () {
    alert('image loaded');
}).error(function () {
    alert('error loading image');
}).attr('src', imgsrc);</code></pre>
                                </div>
                                <div class="md-card-overlay-content">
                                    <div class="uk-clearfix md-card-overlay-header">
                                        <i class="md-icon md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                                        <h4>Check if an image is loaded</h4>
                                    </div>
                                    <div class="md-card-overlay-content-inner">
                                        <p class="uk-margin-bottom truncate-text" style="height: 88px">
                                            Rerum molestiae minima dolores ut ratione architecto sed impedit iure omnis omnis quod mollitia consectetur harum doloribus occaecati voluptatem.                                        </p>
                                        <p><span class="uk-badge uk-badge-success">javascript</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-uk-filter="snippets-lang-javascript">
                            <div class="md-card md-card-hover md-card-overlay" data-snippet-title="Broken Image Handling">
                                <div class="md-card-content">
<pre class="line-numbers"><code class="language-javascript">// Replace source
$('img').error(function(){
  $(this).attr('src', 'missing.png');
});

// Or, hide them
$("img").error(function(){
  $(this).hide();
});</code></pre>
                                </div>
                                <div class="md-card-overlay-content">
                                    <div class="uk-clearfix md-card-overlay-header">
                                        <i class="md-icon md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                                        <h4>Broken Image Handling</h4>
                                    </div>
                                    <div class="md-card-overlay-content-inner">
                                        <p class="uk-margin-bottom truncate-text" style="height: 88px">
                                            Accusantium asperiores aut reprehenderit unde qui hic rerum exercitationem corrupti nihil dolor sunt nesciunt quibusdam porro possimus aut ab dolor quae error quam amet.                                        </p>
                                        <p><span class="uk-badge uk-badge-success">javascript</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-uk-filter="snippets-lang-php">
                            <div class="md-card md-card-hover md-card-overlay" data-snippet-title="Applying Even/Odd Classes">
                                <div class="md-card-content">
<pre class="line-numbers"><code class="language-php">&lt;?php for($i=0;$i&lt;10;$i++) { ?&gt;
  &lt;div class=&quot;class_&lt;?php if($i%2){ echo &quot;odd&quot;; } else { echo &quot;even&quot;; } ?&gt;&quot;&gt;123&lt;/div&gt;
&lt;?php }; ?&gt;</code></pre>
                                </div>
                                <div class="md-card-overlay-content">
                                    <div class="uk-clearfix md-card-overlay-header">
                                        <i class="md-icon md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                                        <h4>Applying Even/Odd Classes</h4>
                                    </div>
                                    <div class="md-card-overlay-content-inner">
                                        <p class="uk-margin-bottom truncate-text" style="height: 88px">
                                            Eaque mollitia corporis consequuntur quo dolor tempora et error dolore ut iste consequatur ipsa ut rem expedita aliquid explicabo voluptatem recusandae ullam qui ab sunt qui veritatis modi iste reprehenderit quibusdam esse odio.                                        </p>
                                        <p><span class="uk-badge uk-badge-primary">php</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-uk-filter="snippets-lang-css">
                            <div class="md-card md-card-hover md-card-overlay" data-snippet-title="Border Box">
                                <div class="md-card-content">
<pre class="line-numbers"><code class="language-css">.border-box {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}</code></pre>
                                </div>
                                <div class="md-card-overlay-content">
                                    <div class="uk-clearfix md-card-overlay-header">
                                        <i class="md-icon md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                                        <h4>Border Box</h4>
                                    </div>
                                    <div class="md-card-overlay-content-inner">
                                        <p class="uk-margin-bottom truncate-text" style="height: 88px">
                                            Commodi occaecati et et est modi nobis fugit quas et est beatae voluptatem qui qui vel exercitationem voluptatibus sit aliquid eum repudiandae velit et accusamus non maxime non enim itaque quis repellat aut expedita.                                        </p>
                                        <p><span class="uk-badge uk-badge-danger">css</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-uk-filter="snippets-lang-css">
                            <div class="md-card md-card-hover md-card-overlay" data-snippet-title="Rotate -90deg">
                                <div class="md-card-content">
<pre class="line-numbers"><code class="language-css">.rotate90_ccw {
  -moz-transform: rotate(-90deg);
  -webkit-transform: rotate(-90deg);
  -o-transform: rotate(-90deg);
  -ms-transform: rotate(-90deg);
  transform: rotate(-90deg);
}</code></pre>
                                </div>
                                <div class="md-card-overlay-content">
                                    <div class="uk-clearfix md-card-overlay-header">
                                        <i class="md-icon md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                                        <h4>Rotate -90deg</h4>
                                    </div>
                                    <div class="md-card-overlay-content-inner">
                                        <p class="uk-margin-bottom truncate-text" style="height: 88px">
                                            Eius expedita possimus deserunt facilis omnis ut libero molestiae itaque nihil eos ipsa esse excepturi nihil veniam officia quia nemo nobis ut eos est est eaque sit consequuntur fuga reprehenderit laborum unde id sint.                                        </p>
                                        <p><span class="uk-badge uk-badge-danger">css</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-uk-filter="snippets-lang-php">
                            <div class="md-card md-card-hover md-card-overlay" data-snippet-title="Anti-SQL Injection Function">
                                <div class="md-card-content">
<pre class="line-numbers"><code class="language-php">function cleanuserinput($dirty){
  if (get_magic_quotes_gpc()) {
    $clean = mysql_real_escape_string(stripslashes($dirty));	 
  }else{
    $clean = mysql_real_escape_string($dirty);	
  } 
  return $clean;
}</code></pre>
                                </div>
                                <div class="md-card-overlay-content">
                                    <div class="uk-clearfix md-card-overlay-header">
                                        <i class="md-icon md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                                        <h4>Anti-SQL Injection Function</h4>
                                    </div>
                                    <div class="md-card-overlay-content-inner">
                                        <p class="uk-margin-bottom truncate-text" style="height: 88px">
                                            Dolores at consequatur sed laborum quo deleniti odio commodi sed sed harum fugiat vitae repellendus tempore odio omnis maiores nemo nesciunt rem.                                        </p>
                                        <p><span class="uk-badge uk-badge-primary">php</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-uk-filter="snippets-lang-javascript">
                            <div class="md-card md-card-hover md-card-overlay" data-snippet-title="Serialize Form to JSON">
                                <div class="md-card-content">
<pre class="line-numbers"><code class="language-javascript">$.fn.serializeObject = function() {
  var o = {};
  var a = this.serializeArray();
  $.each(a, function() {
    if (o[this.name]) {
      if (!o[this.name].push) {
        o[this.name] = [o[this.name]];
      }
        o[this.name].push(this.value || '');
      } else {
        o[this.name] = this.value || '';
      }
    });
    return o;
};</code></pre>
                                </div>
                                <div class="md-card-overlay-content">
                                    <div class="uk-clearfix md-card-overlay-header">
                                        <i class="md-icon md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                                        <h4>Serialize Form to JSON</h4>
                                    </div>
                                    <div class="md-card-overlay-content-inner">
                                        <p class="uk-margin-bottom truncate-text" style="height: 88px">
                                            In veritatis non ipsum incidunt praesentium beatae aliquam placeat voluptas et ipsa est est ut voluptas deleniti animi aut laboriosam sit aut sit blanditiis facere quam doloribus quisquam asperiores odit voluptatibus sint sed ut non reprehenderit tempora eos consectetur qui.                                        </p>
                                        <p><span class="uk-badge uk-badge-success">javascript</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-uk-filter="snippets-lang-php">
                            <div class="md-card md-card-hover md-card-overlay" data-snippet-title="SEO-friendly title for URL">
                                <div class="md-card-content">
<pre class="line-numbers"><code class="language-php">function make_seo_name($title) {
  return preg_replace('/[^a-z0-9_-]/i', '', strtolower(str_replace(' ', '-', trim($title))));
}</code></pre>
                                </div>
                                <div class="md-card-overlay-content">
                                    <div class="uk-clearfix md-card-overlay-header">
                                        <i class="md-icon md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                                        <h4>SEO-friendly title for URL</h4>
                                    </div>
                                    <div class="md-card-overlay-content-inner">
                                        <p class="uk-margin-bottom truncate-text" style="height: 88px">
                                            Esse error quae corporis voluptate laborum dolorem saepe distinctio dicta omnis labore fugiat et nulla est incidunt in quaerat quisquam placeat accusamus a quis repellendus qui id dolor dignissimos.                                        </p>
                                        <p><span class="uk-badge uk-badge-primary">php</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-uk-filter="snippets-lang-css">
                            <div class="md-card md-card-hover md-card-overlay" data-snippet-title="Retina Display Media Query">
                                <div class="md-card-content">
<pre class="line-numbers"><code class="language-css">@media
only screen and (-webkit-min-device-pixel-ratio: 2),
only screen and (   min--moz-device-pixel-ratio: 2),
only screen and (     -o-min-device-pixel-ratio: 2/1),
only screen and (        min-device-pixel-ratio: 2),
only screen and (                min-resolution: 192dpi),
only screen and (                min-resolution: 2dppx) { 
  /* Retina-specific stuff here */
}</code></pre>
                                </div>
                                <div class="md-card-overlay-content">
                                    <div class="uk-clearfix md-card-overlay-header">
                                        <i class="md-icon md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                                        <h4>Retina Display Media Query</h4>
                                    </div>
                                    <div class="md-card-overlay-content-inner">
                                        <p class="uk-margin-bottom truncate-text" style="height: 88px">
                                            In temporibus est quibusdam quis reprehenderit expedita eligendi sit neque tenetur non id tempore laborum est sapiente explicabo et quod dolores debitis.                                        </p>
                                        <p><span class="uk-badge uk-badge-danger">css</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-uk-filter="snippets-lang-javascript">
                            <div class="md-card md-card-hover md-card-overlay" data-snippet-title="Done Resizing Event">
                                <div class="md-card-content">
<pre class="line-numbers"><code class="language-javascript">var resizeTimer;
$(window).on('resize', function(e) {
  clearTimeout(resizeTimer);
  resizeTimer = setTimeout(function() {
    // Run code here, resizing has &quot;stopped&quot;
  }, 250);
});</code></pre>
                                </div>
                                <div class="md-card-overlay-content">
                                    <div class="uk-clearfix md-card-overlay-header">
                                        <i class="md-icon md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                                        <h4>Done Resizing Event</h4>
                                    </div>
                                    <div class="md-card-overlay-content-inner">
                                        <p class="uk-margin-bottom truncate-text" style="height: 88px">
                                            Sed aut nemo ea ut culpa nulla odit nihil doloremque voluptates veritatis quo facere vel magnam beatae nisi sunt fuga.                                        </p>
                                        <p><span class="uk-badge uk-badge-success">javascript</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-uk-filter="snippets-lang-css">
                            <div class="md-card md-card-hover md-card-overlay" data-snippet-title="A new micro clearfix hack">
                                <div class="md-card-content">
<pre class="line-numbers"><code class="language-css">.cf:before,
.cf:after {
    content: &quot; &quot;;
    display: table;
}

.cf:after {
    clear: both;
}

/**
 * For IE 6/7 only
 * Include this rule to trigger hasLayout and contain floats.
 */
.cf {
    *zoom: 1;
}</code></pre>
                                </div>
                                <div class="md-card-overlay-content">
                                    <div class="uk-clearfix md-card-overlay-header">
                                        <i class="md-icon md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                                        <h4>A new micro clearfix hack</h4>
                                    </div>
                                    <div class="md-card-overlay-content-inner">
                                        <p class="uk-margin-bottom truncate-text" style="height: 88px">
                                            Ut nihil hic est culpa id excepturi non eaque ab architecto ut fugit dignissimos repudiandae aut possimus quo vitae consequatur et minus animi adipisci voluptas consequuntur asperiores aliquid impedit velit ullam et.                                        </p>
                                        <p><span class="uk-badge uk-badge-danger">css</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-uk-filter="snippets-lang-css">
                            <div class="md-card md-card-hover md-card-overlay" data-snippet-title="Custom Text Selection">
                                <div class="md-card-content">
<pre class="line-numbers"><code class="language-css">::selection { background: #e2eae2; }
::-moz-selection { background: #e2eae2; }
::-webkit-selection { background: #e2eae2; }</code></pre>
                                </div>
                                <div class="md-card-overlay-content">
                                    <div class="uk-clearfix md-card-overlay-header">
                                        <i class="md-icon md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                                        <h4>Custom Text Selection</h4>
                                    </div>
                                    <div class="md-card-overlay-content-inner">
                                        <p class="uk-margin-bottom truncate-text" style="height: 88px">
                                            Et asperiores autem inventore veritatis nemo libero iure odit totam voluptatem molestiae quod dolorum accusamus sint dolorem aut officia deleniti voluptas et et ea et reiciendis hic mollitia tempore ullam consequatur a quasi expedita eveniet ex voluptas illo laborum molestiae.                                        </p>
                                        <p><span class="uk-badge uk-badge-danger">css</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="md-fab-wrapper">
        <a class="md-fab md-fab-accent" href="#snippet_new" data-uk-modal="{center:true,bgclose:false,modal:false}">
            <i class="material-icons">&#xE150;</i>
        </a>
    </div>

    <div class="uk-modal" id="snippet_new" >
        <div class="uk-modal-dialog">
            <div class="uk-modal-header">
                <h3 class="uk-modal-title">New Snippet</h3>
            </div>
            <form class="uk-form-stacked">
                <div class="uk-margin-medium-bottom">
                    <label for="snippet_title">Title</label>
                    <input type="text" class="md-input" id="snippet_title" name="snippet_title"/>
                </div>
                <div class="uk-margin-medium-bottom">
                    <label for="snippet_language" class="uk-form-label">Language</label>
                    <select class="uk-form-width-medium" name="snippet_language" id="snippet_language" data-md-selectize-inline>
                        <option value="javascript">Javascript</option>
                        <option value="php">PHP</option>
                        <option value="css">CSS</option>
                    </select>
                </div>
                <textarea id="snippet_content" name="snippet_content"></textarea>
                <span class="uk-form-help-block">Don't wrap your snippets in &lt;pre&gt;&lt;/pre&gt; or &lt;code&gt;&lt;/code&gt; tags.</span>
                <div class="uk-modal-footer uk-text-right">
                    <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button><button type="button" class="md-btn md-btn-flat md-btn-flat-primary" id="snippet_new_save">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('sidebar_secondary')
    @include('layout.sidebar_secondary')
@endsection

@section('script_bottom')
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
    <script src="altair/assets/js/common.min.js"></script>
    <!-- uikit functions -->
    <script src="altair/assets/js/uikit_custom.min.js"></script>
    <!-- altair common functions/helpers -->
    <script src="altair/assets/js/altair_admin_common.min.js"></script>

    <!-- page specific plugins -->
    <!-- htmleditor (codeMirror) -->
    <script src="altair/assets/js/uikit_htmleditor_custom.min.js"></script>

    <!--  snippets functions -->
    <script src="altair/assets/js/pages/page_snippets.min.js"></script>
    
    <script>
        $(function() {
            if(isHighDensity) {
                // enable hires images
                altair_helpers.retina_images();
            }
            if(Modernizr.touch) {
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
                            'altair/bower_components/kendo-ui/styles/kendo.materialblack.min.css'
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
