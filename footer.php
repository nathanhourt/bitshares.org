
	<! ========== FOOTER ========================================================================================================
	=============================================================================================================================>
	
	<script ype="text/javascript">
	
	equalheight = function(container){
	
	var currentTallest = 0,
	     currentRowStart = 0,
	     rowDivs = new Array(),
	     $el,
	     topPosition = 0;
	 $(container).each(function() {
	
	   $el = $(this);
	   $($el).height('auto')
	   topPostion = $el.position().top;
	
	   if (currentRowStart != topPostion) {
	     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
	       rowDivs[currentDiv].height(currentTallest);
	     }
	     rowDivs.length = 0; // empty the array
	     currentRowStart = topPostion;
	     currentTallest = $el.height();
	     rowDivs.push($el);
	   } else {
	     rowDivs.push($el);
	     currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
	  }
	   for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
	     rowDivs[currentDiv].height(currentTallest);
	   }
	 });
	}
	
	$(window).load(function() {
	  equalheight('.extra-nav .container article' && '.dns-infogfx');
	});
	
	
	$(window).resize(function(){
	  equalheight('.extra-nav .container article' && '.dns-infogfx');
	});
	
	
	</script>
	
	

<a name="footer"></a>
<section class="extra-nav">
    <div class="container">
      <article class="f-col-25">
        <h3>About</h3>
        <ul>
          <li><a href="/vision">Vision</a></li>
          <li><a href="/faq">FAQ's</a></li>
          <li><a href="/videos">Videos</a></li>
          <li><a href="/blog">Blog</a></li>
          <li><a href="/press">Press</a></li>
        </ul>
      </article>
      <article class="f-col-25">
        <h3>Industries</h3>
        <ul>
          <li><a href="/banking">Banking</a></li>
          <li><a href="/charity">Charity</a></li>
          <li><a href="/contracts">Contracts</a></li>
          <li><a href="/domains">Domain Names</a></li>
          <li><a href="/exchange">Exchanges</a></li>
          <li><a href="/gaming">Gaming</a></li>
          <li><a href="/identity">Identity</a></li>
          <li><a href="/insurance">Insurance</a></li>
          <li><a href="/lending">Lending</a></li>
          <li><a href="/money">Money</a></li>
          <li><a href="/music">Music</a></li>
          <li><a href="/voting">Voting</a></li>
        </ul>
      </article>
      <article class="f-col-25">
        <h3>Resources</h3>
        <ul>
          <li><a href="/documentation/">Documentation</a></li>
          <li><a href="http://github.com/BitShares">Source Code</a></li>
          <li><a href="/downloads">Downloads</a></li>
          <li><a href="http://jenkins.bitshares.org">Nightly Build</a></li>
          <li><a href="http://genesis.bitshares.org">Genesis Blocks</a></li>
          <li><a href="http://agsexplorer.com">AGS Explorer</a></li>
          <li><a href="/keyhotee">Keyhotee</a></li>
        </ul>
     
      </article>
      <article class="f-col-25">
        <h3>Community</h3>
        <ul>
          <li><a href="http://bitsharestalk.org" target="_blank">Forum</a></li>
          <li><a href="/team">Team</a></li>
          <li><a href="/partners">Partners</a></li>
          <li><a href="http://facebook.com/officialbitshares" target="_blank" >Facebook</a></li>
          <li><a href="http://www.twitter.com/_bitshares" target="_blank" >Twitter</a></li>
          <li><a href="https://plus.google.com/107773134084388749048/posts" target="_blank" >Google Plus</a></li>
          <li><a href="http://www.youtube.com/user/bitshares" >YouTube</a></li>
          <li><a href="mailto:info@bitshares.com" >Contact Us</a></li>
        </ul>
     
      </article>
      <div class="clear"></div>
    </div>
  </section>


	<!-- OWL Image Slider
	================================================== -->
	
	<script src="assets/js/owl.carousel.js"></script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/retina.js"></script>
    <script src="../assets/js/invictus.js"></script>
    <script>
    $(document).ready(function() {
     
    $("#news-slider").owlCarousel({
    
    
      
     items: 4,
     loop: true,
     margin: 12,
     lazyLoad: true,
     merge: false, 
     video: true,
     autoplay:true,
     autoplayTimeout:3000,
     autoplayHoverPause:true,
     
  responsive:{
     678:{
       mergeFit:true
     },
     1000:{
       mergeFit:false
     }
   }
 });
   	
   });
    
    </script>
	<script>
		$(window).scroll(function() {
			$('.si').each(function(){
			var imagePos = $(this).offset().top;

			var topOfWindow = $(window).scrollTop();
				if (imagePos < topOfWindow+400) {
					$(this).addClass("slideUp");
				}
			});
		});
	</script>
    <script>
	    $('#myTab a').click(function (e) {
		  e.preventDefault()
		  $(this).tab('show')
		})
	</script>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
       (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
         m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
           })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49934532-1', 'bitshares.org');
    ga('send', 'pageview');

    </script>
  </body>
</html>
