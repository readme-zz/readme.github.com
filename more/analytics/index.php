---
layout: more
title: Google Analytics Bookmarklets
more_css: > 
    #bookmarklets { display: none; }
    img {
        padding: 0.5em;
        background: #FFF;
        border: 1px solid #666;
    }
    li {
        padding-bottom: 1em;
    }
    li li {
        padding: 0;
    }
more_javascript: |
    $(function() {
        $('#analytics_id').keyup(function(event) {
            $('#bookmarklets').fadeIn();
            var id = $(this).val();
            window.setTimeout(function() {
                $('#bookmarklets a').attr('href', function(a, b) {
                    return b.replace(/var id='.*?';/, "var id='"+id+"';");
                });
            }, 1);
        });
    });
---
<p>
Follow these simple steps to create some handy Google Analytics bookmarklets!
</p>
<ol>
    <li>Open Google Analytics and click "View Report".
        <div><img src="view_report.png" /></div>
    </li>
    <li>Copy the ID from the URL in the address bar.
        <div><img src="id.png" /></div>
    </li>
    <li>Enter your ID here: <input id="analytics_id" type="text" /></li>
    <li id="bookmarklets">Drag these newly created bookmarklets into your toolbar:
        <ul>
            <li><a href="javascript:var id='';var d,p,tm,fm,fy;d=new Date();p=function(n){return ''+((n<10)?'0'+n:n);};fm=p(d.getMonth()+1);fy=p(d.getFullYear());fd=p(d.getDate());location.href='https://www.google.com/analytics/reporting/?id='+id+'&pdr='+fy+fm+fd+'-'+fy+fm+fd;">Today</a></li>
            <li><a href="javascript:var id='';var d,p,ty,tm,fm,fy,td,fd;d=new Date();t=new Date();t.setDate(t.getDate()-7);p=function(n){return ''+((n<10)?'0'+n:n);};ty=d.getFullYear();tm=p(d.getMonth()+1);fm=p(t.getMonth()+1);fy=t.getFullYear();fd=p(t.getDate());td=p(d.getDate());location.href='https://www.google.com/analytics/reporting/?id='+id+'&pdr='+fy+fm+fd+'-'+ty+tm+td;">Last Week</a></li>
            <li><a href="javascript:var id='';var d,p,ty,tm,fm,fy,td,fd;d=new Date();t=new Date();t.setMonth(t.getMonth()-1);p=function(n){return ''+((n<10)?'0'+n:n);};ty=d.getFullYear();tm=p(d.getMonth()+1);fm=p(t.getMonth()+1);fy=t.getFullYear();fd=p(t.getDate());td=p(d.getDate());location.href='https://www.google.com/analytics/reporting/?id='+id+'&pdr='+fy+fm+fd+'-'+ty+tm+td;">Last Month</a></li>
        </ul>
    </li>
</ol>