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
        
        <h2><img class="ico-header" src="../assets/img/domains/ico/ico-dns0.svg"> BitShares DNS</h2>
        
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
<li><a href="#Info">Info</a></li>
<li><a href="#Compare">Compare</a></li>
</ul>

</div>
</div>
</section>
<div id="white" class="dns">
<section id="intro">

  <div class="container ">

   <div class="inner-page row centered">
<h3 class="centered">Introducing .p2p</h3>
<hr>

<p>
.p2p is the first of a family of blockchain-based decentralized namespace services attempting to achieve scalability and sustainability by adopting the insights of the Decentralized Autonomous Company metaphor for cryptocurrencies and similar systems.
</p>

<p>
It is similar to Namecoin and it's use for the .bit TLD. <a href="#p2p-vs-nmc">Read more about NMC vs P2P</a>.
</p>
</div>
</div>

</section>

        
 
    <section id="grey" class="dns-resources">
    <a name="Resources"></a> 
      <div class="container centered">
      <h3 class="" style="margin-top: 64px;">RESOURCES</h3>
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
           
           <a href="https://github.com/nmushegian/dns/wiki/_pages" target="_blank"><span style="display: block;">
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
    
   	<section id="Info">
   	<a name="Info"></a>
	<div class="container " >
	<h3 class="centered" style="margin-top: 96px;">Information</h3>
	<hr>
		<div class="inner-page row dns-row" style="text-align-last:justify;"
		>
		<div class="col-lg-12">
		<h2>BitShares DNS, NameShares, and .p2p</h2>
		<hr>
		   <blockquote>We need to encode our values not just in writing, but in structure of the Internet. Edward Snowden</blockquote>
		<p>
		Traditional DNS is a perfect example of centralization due to pre-blockchain architecture. Coming to consensus about the state of a namespace required a hierarchy of organizations to play the role of defining the state of the system. There are several weaknesses in this design that have appeared on the public's radar as trust in traditional centralized solutions is eroding. Namecoin was the first attempt at putting a namespace on a blockchain and promoting its use for TLD resolution, among other things. This paper outlines another approach at decentralizing the DNS system, with an emphasis on long-term scalability and self-sustainability.
		</p>
		
		<h3>Motivation & Comparison to traditional DNS</h3> <a name="Compare"></a>
		<hr>
		<p>
		Man-in-the-middle attacks are when an adversary is able to compromise your key exchange channel and listen on your communications while making it appear as if the connection is secure. This type of attack is possible against HTTPS because the existing domain name infrastructure requires a trusted certificate authority to assert that a key belongs to a particular party. This is how traditional DNS is structured because it was designed prior to the invention of blockchain-based solutions given to us by the invention of Bitcoin. With .p2p, the owner of a domain name can upload their own public key onto the blockchain, and it can be trusted to be authentic without having a trusted authority sign off on it.
		</p>
		  <blockquote>However, in some cases GCHQ and the NSA appear to have taken a more aggressive and controversial route -- on at least one occasion bypassing the need to approach Google directly by performing a man-in-the-middle attack to impersonate Google security certificates. One document published by Fantastico, apparently taken from an NSA presentation that also contains some GCHQ slides, describes “how the attack was done” to apparently snoop on SSL traffic. The document illustrates with a diagram how one of the agencies appears to have hacked into a target’s Internet router and covertly redirected targeted Google traffic using a fake security certificate so it could intercept the information in unencrypted format. https://www.schneier.com/blog/archives/2013/09/new_nsa_leak_sh.html </blockquote>
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
		                         With traditional DNS, the registrars lease you your name and can take back your ownership at any time. With .p2p, nobody can update your DNS record unless you share your private keys.
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
		                        With blockchain technology, you don't need certificate authorities. Finally you can trust self-signed certificates to let your visitors connect securely without fear of spying.
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
		                    	With .p2p, renewals and other updates to your DNS record all cost a standard transaction fee. Stop getting milked for the right to manage your domain.
		                    </p>
		                    </div>
		                    </div>
		            </div>
		          </div>
		  </div>
		  </div></p>
		<p>
		Traditional domain name registrars are FBBM (flesh, blood, brick, and mortar) companies which operate inside one jurisdiction. This is why it is possible for the government of China to seize example.cn but not example.com. The .p2p network is managed autonomously by a distributed network of computers, with no individual having the ability to alter the state of the database without controlling the private keys to the domain they own.
		</p>
		<p>
		Finally, traditional domain registrars have all the problems that come with having a de-facto monopoly on an industry: Enormous margins and bloated operating costs.
		<p>
		
		<h3 id="p2p-vs-nmc">Comparison to Namecoin</h3>
		<hr>
		Namecoin was the first major effort to put a TLD (.bit, from namecoin's "d/" namespace) on a blockchain. .p2p is different from Namecoin in a few important ways:
		<p>
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
		            <div class="col-lg-2 centered">
		                  <img class="centered good" width="148" src="../assets/img/domains/infogfx/icon-dpos.svg"></img>
		                  </div>
		                  <div class="col-lg-2">
		                   <img class="centered bad" width="148" src="../assets/img/domains/infogfx/icon-pow.svg"></img>
		                  </div>
		                  <div class="col-lg-8">
		                  <h4>Efficient Security</h4>
		                  <p>
		                      The share supply is never diluted to pay for security and no power is ever spent for POW mining. DPOS gives control of the blockchain back to the stakeholders.
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
		                      Domain name <a href="#faq-squatting">squatting</a> is a social dillemma that is fixed by giving a mechanism to speculate on the value of the namespace (dividends from nameshares) without having to buy names en masse.
		                  </p>
		                  </div>
		          </div>
		        </div>
		</div>
		</div></div></p>
		
		<ul class="list-group">
		   <li class="list-group-item">Namecoin issues new coins to miners as a reward for performing merged mining with the Bitcoin network. The namecoin supply is being inflated at nearly 30% per year for several more months, then over 10% for the next several years. With .p2p, transaction fees (including name sale revenue) are paid as dividends existing shareholders.</li>
		    <li class="list-group-item">Namecoin attempts to service multiple namespaces at once. .p2p is highly specialized for servicing the .p2p TLD namespace. The use case is the same as Namecoin's "d/" namespace, which is used for the .bit TLD.</li>
		   <li class="list-group-item">Namecoin's name registration price is fixed at any given time and is independent of the name itself. .p2p utilizes an auction-like mechanic to incentivize price discovery for names. The majority of the final cost will have gone to the network as dividends by the time the auction is over, with a small fraction having gone to bidders as a reward for price discovery.</li>
		   <li class="list-group-item">As a result of the fact that domains are expensive and there are dividends on shares but not domains, there is a high opportunity cost to squatting and so we expect names to bounce around between speculators until someone who can make use of the name comes around to claim it.</li>
		</ul>
		</p>
		
		<h3>Architecture</h3>
		<hr>
		<p>
		The .p2p namespace should be accessed by configuring your browser to point to a .p2p-enabled DNS server.
		</p>
		The .p2p blockchain's unspent transaction output set is used to determine the state of the .p2p namespace. The blockchain is only concerned with resolving strings into JSON blobs, managing domainshare balances, and managing auctions.
		
		.p2p extends the basic transaction types in the default bitshares toolkit by adding a single new transaction output which contains key/value information. This output type is sufficient to implement the .p2p blockchain specification.
		<p>
		The extra fields in a DNS transaction output are:
		<br>
		<pre style="text-align: left;">
		
		name     a string
		value    any byte array - some json blob convention for browser to use to resolve IP addresses
		owner    address of owner, the recipient of most of the next bid OR the owner of the domain if the auction ends
		state    either `maybe_in_auction` or `def_not_in_auction`
		</pre>
		</p>
		<p>To avoid having to use deterministic transactions to set the auction flag, the auction state must be determined by the flag and by the number of block since the last transaction. In other words, when an auction ends, your ownership is locked in even if you do not explicitly claim it with a new transaction.</p>
		
		<p>A domain is defined to be "in auction" if BOTH the state is set to in_auction AND previous transaction output referencing this name is less than DNS_AUCTION_BLOCKS block old. That means it is not for sale if the not_for_sale flag is set or if the previous transaction output referencing this name is older than 3 days. The default wallet will not allow you to make a transaction with a domain you own without setting the flag to not_for_sale.</p>
		
		<p>A domain is defined to be "expired" if at least DNS_EXPIRE_BLOCKS have passed since its last record update, OR since the end of its auction if no record updates have been performed. Since there are no deterministic transactions, the block age must be checked every time a DNS lookup is made, since it is not sufficient to check the auction flag.</p>
		
		
		<h3>Auction</h3>
		<hr>
		
		<p>You can kick off an auction by sending a transaction with a domain claim output if that domain has never been bid on before, or is expired. The domain remains in auction until DNS_AUCTION_BLOCKS blocks have passed since the last bid on that domain. (Note: Because the auction "timer" is reset in this way, nobody gains from being able to make faster bids and so there is a rule that there can be at most one bid per name per block.)</p>
		
		<p>Every time someone makes a bid, the previous bidder is paid back his original bid plus a small fraction of the difference between the and the previous bid. This gives speculators an incentive to drive up the price and a way to profit without squatting the domain and reselling it. The rest of the difference is paid as a dividend to the network. If the person who won the domain was just a speculator who cannot make use of it, they have strong incentive to sell it back to the market at a small loss because of the opportunity cost of the lost dividends while the domain is held.</p>
		
		The end result is that a domain will keep re-appearing on the market while fluctuating around its "true" (market-perceived) price, until someone who actually wants to make use of that name buys it at the market price.
		
		</div>
		</div>
	</div>
	</section>
	
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

