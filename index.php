<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bitshares earn 5% or more on anything">
    <meta name="author" content="BitShares">
    <link rel="shortcut icon" href="/assets/img/favicon.ico">

        <title>bitshares</title>
        <script type="text/javascript" src="/assets/js/flipcounter.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="/assets/css/css.css" rel="stylesheet">
    <link href="/assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/assets/css/main.css" rel="stylesheet">
    <link href="/assets/css/colors/color-3498db.css" rel="stylesheet">
    <link href="/assets/css/animations.css" rel="stylesheet">
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/css/invictus.css" rel="stylesheet">
    <link href="/assets/css/counter.css" rel="stylesheet">


    <!-- JavaScripts needed at the beginning
    ================================================== -->

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="/assets/js/hover.zoom.js"></script>
    <script src="/assets/js/hover.zoom.conf.js"></script>

    ga('create', 'UA-46805398-1', 'invictus.io');
    ga('send', 'pageview');

    </script>
  </head>

<body>

<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
    <div class="logo"><a href="/index.php"><span class="primary">bit</span><span class="secondary">shares</span>.org</a></div>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <ul>
      </ul>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#footer">About</a></li>
        <li><a href="/blog/">Blog</a></li>
        <li><a href="/index.php#getinvolved">Community</a></li>
        <li><a href="/index.php#industries">Industries</a></li>
        <li><a href="#footer">Resources</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>

	<! ========== HEADERWRAP ====================================================================================================
	=============================================================================================================================>
    <div id="headerwrap" class="index-page">
      <div class="container">
      <div class="row">
        <div class="col-md-12">
        <center>
               <h1 class="slideUp">Reimagine Everything.</h1>
               
                 <a id="player_button" href="javascript:hideme()" class="fancybox-media ico play-btn hideme"></a>
                 <div id="video_player" class="video_player" style="margin-top:-10px;opacity:1">
                     <iframe id="player_iframe" src="//player.vimeo.com/video/89948761" width="100" height="100" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                 </div>
              </center>
          </div>
      </div><!-- /row -->
      </div><!-- /container -->
    

   </div>
  <script type="text/javascript">
     var horizony=0;
     var target_horizon=0;
     var video_opacity = 0;
     $('#headerwrap').css('background-position', '-250px '+horizony+'px');
     $('.hideme').each( function(i){
          $(this).animate({'opacity':'1'},100);
     }); 
     var hideme = function()
     {
        target_horizon = 600;

        document.getElementById('player_iframe').height="450px";
        document.getElementById('player_iframe').width=  "800px";
        $('video_player').each( function(i){
            $(this).animate({'opacity':'1'},500);
        }); 
        $('#player_button').each( function(i){
            $(this).animate({'opacity':'0'},500);
        }); 

       // document.getElementById("player_iframe").contentWindow.postMessage( JSON.stringify({ method : 'play' }), "*" );
        
       $('#headerwrap').css('background-position', 'center '+horizony+'px');
       $('#video_player').css('opacity', video_opacity);
     }
     window.setInterval(function(){
                           $('#headerwrap').css('background-position', 'center '+horizony+'px');
                           $('#video_player').css('opacity', video_opacity);

                           if( horizony > 0 )
                           {
                              if( video_opacity < 1 )
                              {
                                 video_opacity += .005;
                              }
                           }
                           else
                           {
                              if( video_opacity > 0 ) video_opacity -= .05;
                           }
                           if( horizony < target_horizon )
                           {
                              horizony=(horizony+1)%1100;//1100 is width of background image in px
                           }
                           else if( horizony > target_horizon )
                           {
                              horizony=(horizony-1)%1100;//1100 is width of background image in px
                           }
                        },30);

  </script>



  <div class="lightblue-bg">
			<div class="container">
				<div class="inner-page row">
      		<div class="col-md-4 centered">
              <h1><b>D</b>ECENTRALIZED</h4>
              <p>
              Bitshares decentralizes power among millions of shareholders who
              work together to effortlessly secure the system and prevent anyone
              from exercising arbitrary power over the company. <br/>
              <a href="">Learn more...</a>
              </p>
          </div>
      		<div class="col-md-4 centered">
              <h1><b>A</b>UTONOMOUS</h4>
              <p>
              Each company has a business plan encoded in <a href="http://github.com/BitShares">open source software</a> 
              that executes automatically in an entirely transparent and 
              trustworthy manner.
              <br/>
              <a href="">Learn more...</a>
              </p>
          </div>
      		<div class="col-md-4 centered">
              <h1><b>C</b>OMPANIES</h4>
              <p>
              Every bitshares company produces profit by providing a service for
              which it can charge transaction fees.  The profit earned from operation
              is distributed to the shareholders as <a href="/faq/index.php#dividends">dividends</a>.
              <br/>
              <a href="">Learn more...</a>
              </p>
          </div>
        </div>
  </div>
  
  
  <!-- ========== FEATURED ICONS ================================================================================================
  ============================================================================================================================= -->
  
  
 <div style="display: none;">
    <script type="text/javascript">
      <!--//--><![CDATA[//><!--
        var images = new Array()
        function preload() {
          for (i = 0; i < preload.arguments.length; i++) {
            images[i] = new Image()
            images[i].src = preload.arguments[i]
          }
        }
        preload(
          "/assets/img/ico/ico-banking.svg",
          "/assets/img/ico/ico-banking-h.svg",
          "/assets/img/ico/ico-domain.svg",
          "/assets/img/ico/ico-domain-h.svg",
          "/assets/img/ico/ico-stock.svg",
          "/assets/img/ico/ico-stock-h.svg",
          "/assets/img/ico/ico-money.svg",
          "/assets/img/ico/ico-money-h.svg",
          "/assets/img/ico/ico-music.svg",
          "/assets/img/ico/ico-music-h.svg",
          "/assets/img/ico/ico-charity.svg",
          "/assets/img/ico/ico-charity-h.svg",
          "/assets/img/ico/ico-contracts.svg",
          "/assets/img/ico/ico-contracts-h.svg",
          "/assets/img/ico/ico-insurance.svg",
          "/assets/img/ico/ico-insurance-h.svg",
          "/assets/img/ico/ico-voting.svg",
          "/assets/img/ico/ico-voting-h.svg",
          "/assets/img/ico/ico-gaming.svg",
          "/assets/img/ico/ico-gaming-h.svg",
          "/assets/img/ico/ico-lending.svg",
          "/assets/img/ico/ico-lending-h.svg",
          "/assets/img/ico/ico-identity.svg",
          "/assets/img/ico/ico-identity-h.svg",
          ""
        )
      //--><!]]>
    </script>
  </div>
  
	<div id="grey">
			<div class="inner-page row" ><p></p>
      <center> <h1 class="top">Unlimited Opportunities</h1> </center>
      </div>

    </div>
  </div>
<div id="grey">
    <div class="container">
      <div class="inner-page row" style="min-height:10px">
      </div>
      <div class="inner-page row">
      
      <a href="/banking/"><span style="display: block;">
        <div class="col-md-3 centered ico-banking ico-feature">
            <div class="index-sub-title col-1 ico-title">
            <h2>Banking</h2>
            </div>
        </div></span></a>
           <a href="/domains/"><span style="display: block;">
        <div class="col-md-3 centered ico-domain ico-feature">
            <div class="index-sub-title col-1 ico-title">
            <h2>Domain Names</h2>
            </div>
        </div></span></a>
          <a href="/exchange/"><span style="display: block;">
        <div class="col-md-3 centered ico-stock ico-feature">
            <div class="index-sub-title col-1 ico-title">
            <h2>Stock Exchanges</h2>
            </div>
        </div></span></a>
          <a href="/money/"><span style="display: block;">
        <div class="col-md-3 centered ico-money ico-feature">
            <div class="index-sub-title col-1 ico-title">
            <h2>Money</h2>
            </div>
        </div></span></a>
      </div>
      <div class="inner-page row">
      <a href="/music/"><span style="display: block;">
        <div class="col-md-3 centered ico-music ico-feature">
            <div class="index-sub-title col-1 ico-title">
            <h2>Music</h2>
            </div>
        </div></span></a>
          <a href="/charity/"><span style="display: block;">
        <div class="col-md-3 centered ico-charity ico-feature">
            <div class="index-sub-title col-1 ico-title">
            <h2>Charity</h2>
            </div>
        </div></span></a>
          <a href="/smart-contracts/"><span style="display: block;">
        <div class="col-md-3 centered ico-contracts ico-feature">
            <div class="index-sub-title col-1 ico-title">
            <h2>Smart Contracts</h2>
            </div>
        </div></span></a>
          <a href="/insurance/"><span style="display: block;">
        <div class="col-md-3 centered ico-insurance ico-feature">
            <div class="index-sub-title col-1 ico-title">
            <h2>Insurance</h2>
            </div>
        </div></span></a>
      </div>

      <div class="inner-page row">
      <a href="/voting/"><span style="display: block;">
        <div class="col-md-3 centered ico-voting ico-feature">
            <div class="index-sub-title col-1 ico-title">
            <h2>Voting</h2>
            </div>
        </div></span></a>
          <a href="/gaming/"><span style="display: block;">
        <div class="col-md-3 centered ico-gaming ico-feature">
            <div class="index-sub-title col-1 ico-title">
            <h2>Gaming</h2>
            </div>
        </div></span></a>
          <a href="/lending/"><span style="display: block;">
        <div class="col-md-3 centered ico-lending ico-feature">
            <div class="index-sub-title col-1 ico-title">
            <h2>Lending</h2>
            </div>
        </div></span></a>
          <a href="/identity/"><span style="display: block;">
        <div class="col-md-3 centered ico-identity ico-feature">
            <div class="index-sub-title col-1 ico-title">
            <h2>Identity</h2>
            </div>
        </div></span></a>
      </div>
    </div>
  </div>
	<section id="grey">
		<div class="container">
			<div class="inner-page row"style="min-height:30px">
      </div>
			<div class="inner-page row"style="min-height:30px">
      <center><h1>Get Your Share</h1></center>
      </div>
			<div class="inner-page row"style="min-height:30px">
    		<div class="col-md-2 centered">
        </div>
    		<div class="col-md-4 centered">
            <div style="min-height:20px"> </div>
            <div class="index-sub-title col-1">
             <img src="/assets/img/pts-sm-logo.png"/> 
            <h4>Trade the industry</h4>
            </div>
            <p>
            Bitshares PTS is a clone of <a href="">Bitcoin</a> that comes with the social
            contract that gives the shareholders 10% or more of every <span style="color:#9ce936;">bit</span><span style="color:#009df6;">shares</span> decentralized autonomous company.<br/>
            <a href="/bitshares/ags-pts.php">learn more...</a>
            </p>
        </div>
    		<div class="col-md-4 centered">
            <div style="min-height:20px"> </div>
            <div class="index-sub-title col-1">
               <img src="/assets/img/ags-sm-logo.png"/> 
            <h4>Give to the industry</h4>
            </div>
            <p>
            Give your PTS or BTC to a community trust that is committed to building
            new decentralized autonomous companies and promoting the industry.  
             <br/>
            <a href="/bitshares/ags-pts.php">learn more...</a>
            </p>
        </div>
       </div>
    </div>
  </section>
	<div id="grey">
		<div class="container">
        <a name="getinvolved"></a>
			<div class="inner-page row"style="min-height:30px">
      </div>
			<div class="inner-page row"style="min-height:30px">
      <center><h1>Get Involved</h1></center>
      </div>
			<div class="inner-page row"style="min-height:30px">
    		<div class="col-md-4 centered">
            <div style="min-height:20px"> </div>
            <div class="index-sub-title col-1">
            <h1>FORUM</h1>
            <h4>Join the discussion</h4>
            </div>
          <p>A dozen languages, 50 countries, and thousands of people from around the world make up the core of our community. Collaborate with your peers as you explore the endless possibilities of <span style="color:#9ce936;">bit</span><span style="color:#009df6;">shares</span>.   <br/><a href="http://bitsharestalk.org">Join today!</a></p>
            </p>
        </div>
    		<div class="col-md-4 centered">
            <div style="min-height:20px"> </div>
            <div class="index-sub-title col-1">
            <h1>PARTNERS</h1>
            <h4>Build the Industry</h4>
            </div>
            <p> There are many companies and organizations that are supporting the <span style="color:#9ce936;">bit</span><span style="color:#009df6;">shares</span> ecosystem with their services. <br/><a href="/partners">Become a Partner!</a></p>
            </p>
        </div>
    		<div class="col-md-4 centered">
            <div style="min-height:20px"> </div>
            <div class="index-sub-title col-1">
            <h1>TEAM</h1>
            <h4>Build the Industry</h4>
            </div>
            <p> Our constantly growing team of independent individuals is actively working to make the world a better place by contributing their lives, fortunes and sacred honor to the cause. <br/><a href="/team">Meet the Team!</a></p>
            </p>
        </div>
       </div>
    </div>
			<div class="inner-page row social">
    		<div class="col-md-5 centered"> </div>
    		<div class="col-md-4 centered">
           <table><tr><td>
             <ul>
                    <a href="http://facebook.com/officialbitshares" target="_blank" class="ico facebook"></a>
                    <a href="http://www.twitter.com/_bitshares" target="_blank" class="ico twitter"></a>
                    <a href="https://plus.google.com/107773134084388749048/posts" target="_blank" class="ico google"></a>
                    <a href="http://www.youtube.com/user/bitshares" class="ico youtube"></a>
                    <a href="mailto:info@bitshares.com" class="ico mail"></a>
             </ul>
          <td></tr></table>
        </div>
      </div>
			<div class="inner-page row">&nbsp;</div>
  </div>
  
<!--
  <div class="index-content">
    <div class="container">
    	<div class="row mt">
    		<div class="col-md-4 centered">
          <div class="inner">
          <i class="fa fa-cog"></i>
    			<h3>Developers</h3>
       		<a class="btn btn-primary btn-lg" href="https://bitsharestalk.org/index.php?board=38.0">Build BitShares</a>
          </div>
    		</div>
    		<div class="col-md-4 centered">
        <div class="inner">
          <i class="fa fa-star"></i>
    			<h3>Angels</h3>
      		<a class="btn btn-primary btn-lg" href="bitshares-ags.php">Support BitShares</a>
          </div>
    		</div>
    		<div class="col-md-4 centered">
        <div class="inner">
          <i class="fa fa-bar-chart-o"></i>
    			<h3>Traders</h3>
          <a class="btn btn-primary btn-lg" href="bitshares-pts.php">Trade Now</a>
          </div>
    		</div>
-->

    	</div><!-- /row -->
      <!--
      <div class="inner-page row center-y"> 
		  <div class="col-md-5" style="text-align:right">
			<img src="assets/img/ybitcoin.png">
		  </div>
		  <div class="col-md-6">
			<ul id="pdf-profiles">
				<li><a href="assets/pdf/BitsharesProfile.pdf">BitShares Profile in the Next Issue of yBitcoin Magazine</a></li>
				<li><a href="assets/pdf/DanielLarimerProfile.pdf">Profile of Daniel Larimer in the Next Issue of yBitcoin Magazine</a></li>
			</ul>
		  </div>
      </div>
      -->
    </div><!-- /container -->
    </div><!-- end index-page -->

    

<section>
    <div class="container news">
      <h2><span style="color:#9ce936;">bit</span><span style="color:#009df6;">shares</span> Press</h2>
      <ul class="hideme" style="opacity: 1;">
        <li><a  class="ico bloomberg" href="http://www.bloomberg.com/news/2014-03-28/bitcoin-2-0-shows-technology-evolving-beyond-use-as-money.html">Bloomberg</a></li>
        <li>
          <a href="http://www.economist.com/blogs/babbage/2014/01/computer-corporations" class="ico economist" target="_blank">The Economist</a>
        </li>
        <li>
          <a href="" class="ico yBitcoin" target="_blank">yBitcoin</a>
        </li>
        <li>
          <a href="http://www.businessweek.com/news/2014-02-07/bitcoin-rally-spawns-startups-offering-theft-protection-tech" class="ico business-week" target="_blank">Bloomberg BusinessWeek</a>
        </li>
        <div class="clear"></div>
      </ul>
      <ul class="hideme" style="opacity: 1;">
        <li>
          <a href="http://techcrunch.com/2014/02/15/kickstarter-coins-2/" class="ico tc" target="_blank">TC</a>
        </li>
        <li>
          <a href="http://bitcoinmagazine.com/7424/when-libertarians-and-bitcoiners-collide-crypto-currency-conference-recap/" class="ico bitcoin" target="_blank">Bitcoin Magazine</a>
        </li>
        <li>
          <a href="http://www.newscientist.com/article/mg22129553.700-bitcoin-how-its-core-technology-will-change-the-world.htm" class="ico newScientist" target="_blank">New Scientist</a>
        </li>
        <div class="clear"></div>
      </ul>
      <div class="clear"></div>
    </div>
    <center>
    <a href="http://www.roanoke.com/news/local/blacksburg/floyd-co-entrepreneur-cashes-in-on-virtual-currency-craze/article_d07256fc-a66f-11e3-b845-0017a43b2370.html">
    <img src="/assets/img/roanoke_times.png"/></a>
    <a href="http://www.coindesk.com/bitshares-p2p-trading-platform-to-offer-dividends-on-bitcoins/">&nbsp;&nbsp;<img src="http://www.coindesk.com/wp-content/themes/coindesk2/images/header-logo.png"</img></a>
    </center>
    <br/>
  </section>

	<a href="#" class="ico back-to-top"></a>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="assets/js/jquery.fancybox.js"></script>
	<script src="assets/js/jquery.fancybox-media.js"></script>
	<script src="assets/js/lean-slider.js"></script>
	<script type="text/javascript" src="assets/js/util.js"></script>
	<script type="text/javascript" src="assets/js/jquery.videobackground.js"></script>

<a name="footer"></a>
<section class="extra-nav">
    <div class="container">
      <article class="col-25">
        <h3>About</h3>
        <ul>
          <li><a href="/vision">Vision</a></li>
          <li><a href="/faq">FAQ's</a></li>
          <li><a href="/videos">Videos</a></li>
          <li><a href="/blog">Blog</a></li>
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
