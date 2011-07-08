<!doctype html>
<html lang="en" class="no-js">
<head>
    <title>
    {% if page.title %}{{ page.title }} &mdash; more from johnsonpage.org
    {% else %}jmore from johnsonpage.org
    {% endif %}
    
    </title>
    <meta charset="utf-8" />
    <meta name="author" content="{{ site.author }}" />
    <script>
    (function(B,C){B[C]=B[C].replace(/\bno-js\b/,'js');if(!/*@cc_on!@*/0)return;var e = "abbr article aside audio canvas command datalist details figure figcaption footer header hgroup mark meter nav output progress section summary time video".split(' '),i=e.length;while(i--){document.createElement(e[i])}})(document.documentElement,'className');
    </script>

    <link rel="stylesheet" href="/css/blueprint/screen.css?{{ site.time | date:"%Y%m%d%H%M%S" }}" type="text/css" media="screen, projection">
    <link rel="stylesheet" href="/css/blueprint/print.css?{{ site.time | date:"%Y%m%d%H%M%S" }}" type="text/css" media="print">  
    <!--[if lt IE 8]><link rel="stylesheet" href="/css/blueprint/ie.css?{{ site.time | date:"%Y%m%d%H%M%S" }}" type="text/css" media="screen, projection"><![endif]-->
    <link rel="stylesheet" href="/css/more.css?{{ site.time | date:"%Y%m%d%H%M%S" }}" />
    {% if site.local != true %}
    <script>
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-12101695-1']);
    _gaq.push(['_trackPageview']);

    (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
    </script>
    {% endif %}

    {% if page.more_css %}
    <style>
    {{ page.more_css }}
    </style>
    {% endif %}
</head>
<body>
<div class="container">
    <header>
        <h1>{{ page.title }}</h1>
        <div class="back">
        Back to <a href="{{ site.url }}">johnsonpage.org</a> 
        </div>
    </header>
    <div id="content">
    {{ content }}
    </div>
</div>
<script src="/js/jquery-1.4.2.min.js?{{ site.time | date:"%Y%m%d%H%M%S" }}"></script>
{% if page.more_javascript %}
<script type="text/javascript">
{{ page.more_javascript }}
</script>
{% endif %}
</body>
</html>