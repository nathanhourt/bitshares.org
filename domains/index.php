<?php $section_title = "Domains"; include '../header.php'; ?>
<section data-type="background" class="bitsharesx-header">
  <section class="inner-lg-billboard">
      <div class="container">
        <div class="row" style="min-height:80px">
        </div>
        <div class="row">
          <center>
            <h2 style="color:white; font-size:6em">Domain Names</h2>
          </center>
        </div>
      </div>
  </section>
</section>

<div id="white" class="bitsharesx">
  <div class="container">
    <div class="row">
<article class="markdown-body entry-content" itemprop="mainContentOfPage"><h3>
<a name="user-content-what-is-p2p" class="anchor" href="#what-is-p2p"><span class="octicon octicon-link"></span></a>What is .p2p?</h3>

<p>.p2p is a new TLD which uses blockchain technology in place of traditional DNS. It is similar to Namecoin and the .bit project.</p>

<h3>
<a name="user-content-what-are-the-advantages-of-p2p-over-traditional-dns" class="anchor" href="#what-are-the-advantages-of-p2p-over-traditional-dns"><span class="octicon octicon-link"></span></a>What are the advantages of .p2p over traditional DNS?</h3>

<p>Traditional DNS leaves its users vulnerable to man-in-the-middle attacks and domain name seizure. In addition, domain name registrars have become bloated and inefficient, extracting fees for services that take milliseconds of CPU time.</p>

<h3>
<a name="user-content-how-does-p2p-prevent-mitm-attacks" class="anchor" href="#how-does-p2p-prevent-mitm-attacks"><span class="octicon octicon-link"></span></a>How does .p2p prevent MITM attacks?</h3>

<p>The owner of a domain name can put their SSL key directly into a secure public ledger, rather than relying on trusted certificate authorities to sign off on keys. There are no entities that can be coerced to put a compromised certificate in the record except fo the owner of the corresponding private keys.</p>

<h3>
<a name="user-content-how-does-p2p-prevent-domain-seizures" class="anchor" href="#how-does-p2p-prevent-domain-seizures"><span class="octicon octicon-link"></span></a>How does .p2p prevent domain seizures?</h3>

<p>Just like bitcoin, domainshares operates in a completely decentralized fashion outside of any individual jurisdiction. There are no entities who can be coerced to change the value of the record except for the owner of the corresponding private keys.</p>

<h3>
<a name="user-content-how-does-p2p-disincentivise-squatting" class="anchor" href="#how-does-p2p-disincentivise-squatting"><span class="octicon octicon-link"></span></a>How does .p2p disincentivise squatting?</h3>

<p>The combination of price discovery via an auction and opportunity cost of purchasing a domain (lost dividends from equivalent value of DNS) makes it <em>more profitable</em> to hold DNS than to hold domains speculatively. This is the only source of revenue for the network, aside from standard per-byte transaction fees. Renewing domains is essentially free.</p>

<h3>
<a name="user-content-how-is-namecoin-and-bit-different-from-p2p" class="anchor" href="#how-is-namecoin-and-bit-different-from-p2p"><span class="octicon octicon-link"></span></a>How is Namecoin and .bit different from .p2p?</h3>

<p>The critical difference is in the design of the relationship of the crypto-equity ("namecoins" or NMC for Namecoin, "domainshares" or .P2P for .p2p) to the functionality of the network. We use the Distributed Autonomous Company metaphor to help describe how these two network reward their "shareholder" when it is able to provide value. This provides an incentive for engineers all around the globe to independently cooperate on maintaining the network with a narrowly defined goal and incentive mechanic.</p>

<ul>
<li>Namecoin issues new coins to miners as a reward for performing merged mining with the Bitcoin network. The namecoin supply is being inflated at nearly 30% per year for the next 40,000 blocks, then over 10% for the next four years. .p2p uses TAPOS+?? for significantly cheaper security, while domainshares only ever shrink in supply, when fees are destroyed as implicit dividends.</li>
<li>Namecoin attempts to service multiple namespaces at once, including non-TLD key-value records. Domainshares is highly specialized for servicing the .p2p TLD namespace. We believe this gives is more freedom to optimize around unforseen constraints in the future. The use case is the same as Namecoin's "d/" namespace.</li>
<li>Namecoin's name registration price is fixed at any given time and is independent of the name itself and implicit dividends are only paid when transaction fees are destroyed. Domainshares utilizes an auction-like mechanic to incentivize price discovery for names, making sure the final owner pays what it is actually worth. At least half of the final price will have gone to the network as dividends.</li>
</ul><h3>
<a name="user-content-how-do-i-view-p2p-websites" class="anchor" href="#how-do-i-view-p2p-websites"><span class="octicon octicon-link"></span></a>How do I view .p2p websites?</h3>

<p>You can view pages on the .p2p namespace without any installation or configuration by using a centralized proxy like dotp2p.io
To use .p2p like a normal TLD, you need to configure your browser to point to a DNSchain node, or install a browser extension like okTurtles.</p>

<h3>
<a name="user-content-why-only-one-tld" class="anchor" href="#why-only-one-tld"><span class="octicon octicon-link"></span></a>Why only one TLD?</h3>

<blockquote>
<p>if you look at what distinct TLDs actually do in real life, it's to establish different <em>rulesets</em> for how the namespace is managed. The fact that it can be used to avoid name collisions is a <em>secondary effect</em> and an artifact of how traditional DNS is structured. AAPL.com and AAPL.org aren't just avoiding a collision - AAPL.org is utilizing the fact that it won't get sued on the .org namespace, while it would on the .com namespace. Sure you can make it so that two TLDs use the same ruleset and are on the same blockchain, but then the only thing that it accomplishes is to make an aesthetic difference between typing "yoursite-org / yoursite-com" and "yoursite.org / yoursite.com". One blockchain is one namespace, no matter how you slice it or mask it.</p>

<p>So the idea is, future DNS derivatives who want to have different rulesets for their namespace, or who want to prove me wrong and show how people are just willing to avoid collisions (would you register "yourname.dac" if "yourname.p2p" is registered and popular? maybe) can launch a DNS derivative a la BTS X.</p>

<p>So .key might have a ruleset that fits the supply/demand characteristic of having a namespace for public keys better than domainshares.</p>

<p>.intr could be the first namespace to support a full character set.</p>

<p>There might be another blockchain that handles migrating .com, .org, etc onto a blockchain.</p>
</blockquote>

<h3>
<a name="user-content-do-domain-names-expire" class="anchor" href="#do-domain-names-expire"><span class="octicon octicon-link"></span></a>Do domain names expire?</h3>

<p>After one year of inactivity, names are reclaimed by the network. To renew a domain, you just have to do any standard transaction, like sending it to yourself, at least once per year.</p>

<h3>
<a name="user-content-i-want-to-make-my-own-blockchain-tld-with-its-own-rules-how-do-i-get-started" class="anchor" href="#i-want-to-make-my-own-blockchain-tld-with-its-own-rules-how-do-i-get-started"><span class="octicon octicon-link"></span></a>I want to make my own blockchain TLD, with its own rules! How do I get started?</h3>

<p>Email me! <a href="mailto:nikolai@bitshares.org">nikolai@bitshares.org</a></p></article>
    </div>
    <hr/>
    <div class="row">
    </div>
  </div>
</div>
<?php include '../footer.php'; ?>
