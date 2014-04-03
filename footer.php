	<! ========== CALL TO ACTION BAR ===============================================================================================
	=============================================================================================================================>


	<! ========== FOOTER ========================================================================================================
	=============================================================================================================================>
<a name="footer"></a>
<section class="extra-nav">
    <div class="container">
      <article class="col-25">
        <h3>About</h3>
        <ul>
          <li><a href="/vision">Vision</a></li>
          <li><a href="/faq">FAQ's</a></li>
          <li><a href="/videos">Videos</a></li>
          <li><a href="/blog" target="_blank">Blog</a></li>
          <li><a href="/newsletter">Newsletter</a></li>
          <li><a href="/press">Press</a></li>
        </ul>
      </article>
      <article class="col-25">
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
        <ul> </ul>
      </article>
      <article class="col-25">
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
        <ul> </ul>
      </article>
      <article class="col-25">
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
        <ul> </ul>
      </article>
      <div class="clear"></div>
    </div>
  </section>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/retina.js"></script>
    <script src="assets/js/invictus.js"></script>
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
  </body>
</html>
