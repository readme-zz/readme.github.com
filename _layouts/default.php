<!doctype html>
<html lang="en" class="no-js">
<head>
    <title>
    {% if page.title %}{{ page.title }} &mdash; techstuff.ca
    {% else %}techstuff.ca &mdash; technology in plain language  
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
    <link rel="stylesheet" href="/css/style.css?{{ site.time | date:"%Y%m%d%H%M%S" }}" />
    <link rel="stylesheet" href="/css/pygment_trac.css?{{ site.time | date:"%Y%m%d%H%M%S" }}" />
    <link href="/atom.xml" rel="alternate" type="application/atom+xml" />

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
</head>
<body>
<div class="container">
    <div class="hell span-16">
        <header itemscope="itemscope" 
            itemtype="http://data-vocabulary.org/Person">
            <hgroup>
                <h1 itemprop="name"><a href="/"><span>Sandy</span> <span>McMurray</span></a></h1>
                <h2>
                    writes about <strong>technology in plain language</strong>
                </h2>
            </hgroup>
            <style>

            </style>
            <nav>
                <ul>
                    <li><a href="/about">About</a></li>
                    <li><a href="/colophon">Colophon</a></li>
                    <li><a href="/archive">Archive</a></li>
                </ul>
            </nav>
        </header>

        <div id="content">
        {{ content }}
        </div>
        <footer id="very-footer">
            <nav>
                <ul>
                    <li class="first"><a href="/atom.xml">Subscribe (Atom)</a></li>
                    <li>Follow me on <a href="http://twitter.com/techstuff">Twitter</a></li>
                    <li>Fork me on <a href="http://github.com/readme">Github</a></li>
                    <li>Powered by <a href="http://jekyllrb.com">Jekyll</a></li>
                    <li>design based on <a href="http://johnsonpage.org">Johnson Page</a></li>
                </ul>
            </nav>
        </footer>

        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>
</body>
</html>
