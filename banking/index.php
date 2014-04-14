<?php $section_title = "Banking"; include '../header.php'; ?>
<section data-type="background" class="bitsharesx-header">
  <section class="inner-lg-billboard">
      <div class="container">
         <h1 class="ico">Banking</h1>
      </div>
  </section>
</section>

<div id="white" class="bitsharesx">
  <div class="container">
    <div class="row">
      <h3><i>Decentalized</i> Bank & Exchange</h3>
      <p>
      Bitshares X is a family of DACs that implement the business model of a bank
      and exchange.   Banks create money by issuing bank notes based upon deposits
      or collateral.  Bank notes can be denominated in anything, including gold, silver,
      dollars, shares of a company, or gallons of gasoline.  
      </p>
      <p>
      These days most banks don't print physical bank notes, instead they maintain a
      balance on their books for each depositor.  The bank then facilitates the 
      transfer of balances among their customers and keeps the deposits safe.
      </p>
      <p>
      There are many different DACs that are implementing this business model, each of
      which specializes in a different type of deposits.  Each DAC comes with a built
      in full-featured exchange that allows customers to trade different types of
      deposits such as gold/dollars. 
      </p>
    </div> <!-- row -->
    <hr/>
    <div class="row">
      <div class="col-lg-4 center">
        <h3>bitshares XT</h3>
        <p>
            This DAC is a test-network and a <a href="/faq/index.php#proto-DAC">proto-DAC</a> for
            all future bitshares X chains.  It features basic shares without enabling the
            built in exchange necessary to support <a href="/faq/index.php#bitasset">BitAssets</a>.
            <br/>
            <a href="/banking/xt">Learn More</a>
        </p>
      </div>
      <div class="col-lg-4 center">
        <h3>bitshares FX</h3>
        <p>
            This bank specializes in deposits of gold, bitcoin, and US dollars and will be 
            the first fully functional bank and exchange.
            <a href="/banking/fx">Learn More</a>
        </p>
      </div>
      <div class="col-lg-4 center">
        <h3>bitshares CX</h3>
        <p>
            This bank specializes in commodities trading and is scheduled to be released
            after bitshares FX has proven itself in the market.   
            <a href="/banking/cx">Learn More</a>
        </p>
      </div>

    </div>
     <div class="row">
        <div class="col-lg-8">
            <?php include 'overview.php'?>
            <?php include 'whitepaper.php'?>
        </div>
        <div class="col-lg-4" style="padding-left:40px">
            <?php include 'sidebar.php'?>
        </div>
     </div> <!-- row -->
  </div>
</div>
<?php include '../footer.php'; ?>
