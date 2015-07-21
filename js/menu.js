

var main = function() {
 
 /* Push the body and the nav over by 285px over */
  
  $('.icon-menu').click(function() {
    
    $('.menu').animate({
       
   left: "0px"
     
   }, 200);

      
  $('body').animate({
        
  left: "285px"
    
    }, 200);
 
 });

  
/* Then push them back */
  
$('.icon-close').click(function() {
   
 $('.menu').animate({
    
  left: "-285px"
   
 }, 200);

    
$('body').animate({
    
  left: "0px"
  
  }, 200);
  
});

};

$(document).ready(main);

/*<!--script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

*/
