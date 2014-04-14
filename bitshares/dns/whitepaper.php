<div class="article">

                <h3>
        <a name="intro" class="anchor" href="#intro">BitShares DNS and .p2p</a></h3>

        <p>Traditional DNS is a perfditional DNS is an example of centralization due to pre-blockchain architecture - there has been a need to come to consensus about the state of a namespace, and the solution was to set up a hierarchy of organizations to establish truth.</p>
        <p>
        This project joins several attempts to use <a href="http://en.wikipedia.org/wiki/Byzantine_fault_tolerance#Practical_Byzantine_fault_tolerance">byzantine solutions</a> for namespace resolution (most notably Namecoin with .bit domain and identity namespaces). Our design focuses servicing just one top-level domain (.p2p) with an emphasis on utilizing the DAC (Decentralized Autonomous Company) concept for long-term sustainability.
        </p>


        <h3>
            <a name="motivation" class="anchor" href="#motivation">Motivation &amp; Comparison to traditional DNS</a></h3>

        <p>
        There are several weaknesses in the design of traditional DNS schemes that have become apparant as the public's trust in traditional centralized name resolution solutions begins to erode. Namecoin was the first attempt at putting a namespace on a blockchain and promoting its use for TLD resolution, among other things. This project is another approach at decentralizing the domain name system, with an emphasis on long-term scalability and self-sustainability (profitability as a DAC). 
        </p>

        <p>Man-in-the-middle attacks are when an adversary is able to compromise your key exchange channel and listen on your communications even when they appear to be encrypted. This type of attack is possible against https because the existing domain name infrastructure requires a trusted certificate authority to assert that a key belongs to a particular party. This is how traditional DNS is structured because it was designed prior to the invention of byzantine solutions given to us by the invention of Bitcoin. With .p2p, the owner of a domain name can upload their own public key onto the blockchain, and it can be trusted to be authentic without having a trusted authority sign off on it.
        </p>

        <blockquote cite="https://www.schneier.com/blog/archives/2013/09/new_nsa_leak_sh.html"> However, in some cases GCHQ and the NSA appear to have taken a more aggressive and controversial route -- on at least one occasion bypassing the need to approach Google directly by performing a man-in-the-middle attack to impersonate Google security certificates. One document published by Fantastico, apparently taken from an NSA presentation that also contains some GCHQ slides, describes “how the attack was done” to apparently snoop on SSL traffic. The document illustrates with a diagram how one of the agencies appears to have hacked into a target’s Internet router and covertly redirected targeted Google traffic using a fake security certificate so it could intercept the information in unencrypted format.


            https://www.schneier.com/blog/archives/2013/09/new_nsa_leak_sh.html
        </blockquote>


            <p>
        Traditional domain name registrars are FBBM (flesh, blood, brick, and mortar) companies which operate inside one jurisdiction. This is why it is possible for the government of China to take down example.cn but not example.com. The .p2p network is managed autonomously by a distributed network of computers, with no individual having the ability to alter the state of the database without controlling the private keys to the domain they own.

        Finally, traditional domain registrars have all the problems that come with having a de-facto monopoly on an industry: Enormous margins and bloated operating costs.
        </p>





        <h3>
        <a name="namecoin-comparison" class="anchor" href="#namecoin-comparison">Comparison to Namecoin</a></h3>

        <p>
        .p2p is our competitor to Namecoin's .bit project. ".p2p" refers to the blockchain, the cryptoequity (can be disambiguated by writing ".P2P"), and the TLD. Sometimes .p2p's "coin" is called a domainshare.
        </p>

        <ul>
            <li> Namecoin issues new coins to miners as a reward for performing merged mining with the Bitcoin network. The namecoin supply is being inflated at XX% per year. Domainshares only ever shrink in supply, when fees are destroyed as implicit dividends. </li>
            <li> Namecoin attempts to service multiple namespaces at once. Domainshares is highly specialized for servicing the .p2p TLD namespace. The use case is the same as Namecoin's "d/" namespace, which is used for the .bit TLD. </li>
            <li>Namecoin's name registration price is fixed at any given time and is independent of the name itself. Domainshares utilizes an auction-like mechanic to incentivize price discovery for names, making sure the final owner pays what it is actually worth. The majority of the final cost will have gone to the network as dividends by the time the auction is over, with a small fraction having gone to bidders as a reward for price discovery. </li>
        </ul>




</div> <!-- article -->>
