<?php $section_title = "Domains"; include '../header.php'; ?>
<script>
$(document).ready(function () { // document ready
  
   var stickyTop = $('.sticky').offset().top; // returns number
  
   $(window).scroll(function(){ // scroll event 
  
     var windowTop = $(window).scrollTop(); // returns number
  
     if (stickyTop < windowTop + 40) {
       $('.sticky').css({ position: 'fixed', top: 0, width: '100%', background: '#FFF'});
      	$('.nav-subpage  a').css({ color: '#1A485C' });
      	$('.nav-subpage').addClass( 'nav-shadow' );
  		$('.ico-top').addClass( 'show' );
  		 $('.navbar-fixed-top').css({ display: 'block' });
  		
     }
     else {
       $('.sticky').css({ position:'static' , background: 'none' , width: '100%' , });
       $('.navbar-fixed-top').css({ display: 'block' });
       $('.ico-top').removeClass( 'show' );
     }
  
   });
   
   
  
 });
</script>

<script>


</script>
<header>
<a name="totop"></a>
<section data-type="background" class="dns-header header">
  <section class="inner-lg-billboard">
      <div class="container">
        <div class="row">
        <center>
        
        <h2><img class="ico-header" src="../assets/img/domains/ico/ico-dns0.svg"> dns.p2p</h2>
        
        </center>        
        </div>
      </div>
     
  </section>







</section>
</header>
<section class="nav-subpage sticky">
<div class="container ">
<div class="inner-page row centered">
<a class="ico-top hide" href="#totop"><i class="glyphicon glyphicon-chevron-up"></i></a>

<ul>
<li><a href="#Resources">Resources</a></li>
<li><a href="#vsnmc">vs Old DNS</a></li>
<li><a href="#vsnmc">vs Namecoin</a></li>
</ul>

</div>
</div>
</section>
<div id="white" class="dns">
 
<section id="intro">

  <div class="container ">

   <div class="inner-page row">
    <section id="grey" class="dns-resources">
    <a name="Resources"></a> 
      <div class="container centered">
      <h3>RESOURCES</h3>
       <hr>
       <div class="inner-page row dns-resources">
 
           <a href="/faq#dns-faq"><span style="display: block;">
             <div class="col-md-3 centered ico-feature dns-ico-faq">
                 <div class="index-sub-title col-1 ico-title">
                 <h2>FAQ</h2>
                 </div>
             </div></span></a>
           
           <a href="https://github.com/nmushegian/bitshares_toolkit" target="_blank"><span style="display: block;">
             <div class="col-md-3 centered ico-feature dns-ico-source">
                 <div class="index-sub-title col-1 ico-title">
                 <h2>Source</h2>
                 </div>
             </div></span></a>
           
           <a href="https://github.com/nmushegian/dns/wiki" target="_blank"><span style="display: block;">
             <div class="col-md-3 centered ico-feature dns-ico-wiki">
                 <div class="index-sub-title col-1 ico-title">
                 <h2>Wiki</h2>
                 </div>
             </div></span></a>
             
             
            <a href="https://bitsharestalk.org/index.php?board=50.0" target="_blank"><span style="display: block;">
              <div class="col-md-3 centered ico-feature dns-ico-forum">
                  <div class="index-sub-title col-1 ico-title">
                  <h2>Forum</h2>
                  </div>
              </div></span></a>
         
           </div>
	    </div>
 
    </section>
 

		  <p>
		  <div class="panel-group" id="bitdns-vs-trd">
		 
		             
		          <div class="panel panel-default">
		            <div class="panel-heading">
		              <h4 class="panel-title ">
		                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
		                  BitShares DNS<span style="padding:0 36px;"> vs. </span>Traditional DNS
		                </a>
		              </h4>
		            </div>
		            <div id="collapse1" class="panel-collapse collapse in">
		              <div class="panel-body ">
		              <div class="inner-page row dns-row">
		              <div class="col-lg-2 centered">
		              
		                    <img class="centered good" width="148" src="../assets/img/domains/infogfx/icon-ds-good.svg"></img>
		                    </div>
		                    <div class="col-lg-2 centered">
		                    <img class="centered bad" width="148" src="../assets/img/domains/infogfx/icon-ds-bad.svg"></img>
		                   
		                    </div>
		                    <div class="col-lg-8">
		                    
		                     <h4>No more seizures</h4>
		                     <p>
		                         With traditional DNS, the domain registrars are normal companies which operate within a single jurisdiction and can be compelled to take back control at any time. With .p2p, nobody can seize or update your DNS record unless you share your private keys.

		                     </p>
		                    </div>
		              
		                  </div>
		                  <div class="inner-page row dns-row">
		                    <div class="col-lg-2 centered">
		                   <img class="centered good" width="148" src="../assets/img/domains/infogfx/icon-mitm-good.svg"></img>
		                    </div>
		                    <div class="col-lg-2 centered">
		                    <img class="centered bad" width="148" src="../assets/img/domains/infogfx/icon-mitm-bad.svg"></img>
		                    </div>
		                    <div class="col-lg-8">
		                    <h4>No more spying</h4>
		                    <p>
		
		Man-in-the-middle attacks are when an adversary is able to compromise your key exchange channel and listen on your communications while making it appear as if the connection is secure. This type of attack is possible against HTTPS because the existing TLS infrastructure requires a trusted certificate authority to assert that a key belongs to a particular party. This is how the internet is currently structured because these components were designed prior to the invention of blockchain-based solutions given to us by the invention of Bitcoin. 
</p>
<p>
With .p2p, the owner of a domain name can upload their own public key onto the blockchain, and it can be trusted to be authentic without having a trusted authority sign off on it.
		                    </p>
		                    </div>
		              
		                  </div>
		                  <div class="inner-page row dns-row">
		                    <div class="col-lg-2 centered">
		                    <img class="centered good" width="148" src="../assets/img/domains/infogfx/icon-bi-good.svg"></img>
		                    </div>
		                    <div class="col-lg-2 centered">
		                    <img class="centered bad" width="148" src="../assets/img/domains/infogfx/icon-bi-bad.svg"></img>
		                     		                    </div>
		                    <div class="col-lg-8">
		                    <h4>No more snake oil</h4>
		                    <p>
		Traditional domain registrars have all the problems that come with having a de-facto monopoly on an industry: Enormous margins and bloated operating costs.
		With .p2p, renewals and other updates to your DNS record all cost a standard transaction fee. Stop getting milked for the right to manage your domain.

		                    </p>
		                    </div>
		                    </div>
		            </div>
		          </div>
		  </div>
		  </div></p>

		<p>
		<div class="panel-group" id="bitdns-vs-trd">
		
		           
		        <div class="panel panel-default">
		          <div class="panel-heading">
		            <h4 class="panel-title">
		              <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
		               .P2P<span style="padding:0 36px;"> vs. </span> .BIT
		              </a>
		            </h4>
		          </div>
		          <div id="collapse2" class="panel-collapse collapse in">
		            <div class="panel-body ">
		            <div class="inner-page row dns-row">
		Namecoin was the first major effort to put a TLD (.bit, from namecoin's "d/" namespace) on a blockchain. .p2p is different from Namecoin in a few important ways:

<hr>
		            <div class="col-lg-2 centered">
		                  <img class="centered good" width="148" src="../assets/img/domains/infogfx/icon-dpos.svg"></img>
		                  </div>
		                  <div class="col-lg-2">
		                   <img class="centered bad" width="148" src="../assets/img/domains/infogfx/icon-pow.svg"></img>
		                  </div>
		                  <div class="col-lg-8">
		                  <h4>Efficient and Specialized</h4>
		                  <p>
Namecoin issues new coins to miners as a reward for performing merged mining with the Bitcoin network. The namecoin supply is being inflated by 10% per year for over 4 more years. With .p2p, the share supply is never diluted and shareholders are paid dividends from transaction fees and auctions. Network participants are incentivized to optimize around the needs of the .p2p top-level domain.
		                  </p>
		                  </div>
		            
		                </div>
		                <div class="inner-page row dns-row">
		                  <div class="col-lg-2 centered">
		                 <img class="centered good" width="148" src="../assets/img/domains/infogfx/icon-income-good.svg"></img>
		                  </div>
		                  <div class="col-lg-2">
		                   <img class="center bad" width="148" src="../assets/img/domains/infogfx/icon-income-bad.svg"></img>
		                  </div>
		                  <div class="col-lg-8">
		                  <h4>Price Fixing vs Price Discovery</h4>
		                  <p>
		                      By utilizing a mechanic similar to an auction, .p2p domains are sold for their perceived market price and the majority of the income from the sale go to nameshare holders as profit. 
		                  </p>
		                  </div>
		            
		                </div>
		                <div class="inner-page row dns-row">
		                  <div class="col-lg-2 centered">
		                  <img class="centered good" width="148" src="../assets/img/domains/infogfx/icon-sq-good.svg"></img>
		                  </div>
		                  <div class="col-lg-2 centered">
		                   <img class="centered bad" width="148" src="../assets/img/domains/infogfx/icon-sq-bad.svg"></img>
		                  </div>
		                  <div class="col-lg-8">
		                  <h4>Eliminate Squatters</h4>
		                  <p>
		                      Domain name squatting is a <a href="http://en.wikipedia.org/wiki/Social_dilemma#Game_Theory">social dillemma</a> that is fixed by giving a mechanism to speculate on the value of the namespace (dividends from nameshares from well-priced name sales) without having to buy names en masse.
		                  </p>
		                  </div>
		          </div>
		        </div>
		</div>
		</div></div></p>


</div>
</div>

</section>

  <div class="container ">
   <div class="inner-page row">
	<hr>
	<section>
	<blockquote><p>We need to encode our values not just in writing, but in the structure of the Internet.</p> Edward Snowden</blockquote>
	</section>
</div>
</div>



       
  	
     <div class="row" style="display: none;">
        <div class="col-lg-8">
            <?php include 'overview.php'?>
            <?php include 'whitepaper.php'?>
        </div>
        <div class="col-lg-4" style="padding-left:40px">
            <?php include 'sidebar.php'?>
        </div>
     </div> <!-- row -->
  </div>
</div></div>

<?php include '../footer.php'; ?>

