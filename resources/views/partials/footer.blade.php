<footer class="footer style-2">
  <div class="container">
    <div class="footer__main">
      <div class="row">
        <div class="col-xl-4 col-md-6">
          <div class="info">
            <a href="index.html" class="logo">
              <img src="assets/images/logo/log-footer.png" alt="ApexCrypto Logo" />
            </a>
            <h6>Let's talk! 🤙</h6>
            <ul class="list">
              <li><p>+12 345 678 9101</p></li>
              <li><p>admin@apexcryptofinanceltd.com</p></li>
              <li>
                <p>
                  Cecilia Chapman 711-2880 Nulla St. Mankato Mississippi 96522
                </p>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-xl-4 col-md-6">
          <div class="widget">
            <div class="widget-link">
              <h6 class="title">PRODUCTS</h6>
              <ul>
                <li><a href="spot.html">Spot</a></li>
                <li><a href="#">Inverse Perpetual</a></li>
                <li><a href="#">USDT Perpetual</a></li>
                <li><a href="exchange.html">Exchange</a></li>
                <li><a href="#">Launchpad</a></li>
                <li><a href="#">Crypto Pay</a></li>
              </ul>
            </div>
            <div class="widget-link s2">
              <h6 class="title">SERVICES</h6>
              <ul>
                <li><a href="buy-crypto-select.html">Buy Crypto</a></li>
                <li><a href="markets.html">Markets</a></li>
                <li><a href="#">Trading Fee</a></li>
                <li><a href="#">Affiliate Program</a></li>
                <li><a href="#">Referral Program</a></li>
                <li><a href="#">API</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-xl-4 col-md-12">
          <div class="footer-contact">
            <h5>Newsletter</h5>
            <p>
              Subscribe to our newsletter to get updates and insights on digital finance and blockchain innovation.
            </p>
            <form action="#" method="POST">
              @csrf
              <input
                type="email"
                placeholder="Enter your email"
                required=""
              />
              <button type="submit" class="btn-action">Submit</button>
            </form>
            <ul class="list-social">
              <li><a href="#"><span class="icon-facebook-f"></span></a></li>
              <li><a href="#"><span class="icon-instagram"></span></a></li>
              <li><a href="#"><span class="icon-youtube"></span></a></li>
              <li><a href="#"><span class="icon-twitter"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer Bottom -->
  <div class="container-fluid">
    <div class="footer__bottom">
      <p>
        © <span id="year"></span> ApexCrypto Finance LTD. All rights reserved. 
        <a href="/terms">Terms of Service</a> | 
        <a href="/privacy">Privacy Policy</a>
      </p>

      <div class="legal-disclaimer mt-3">
        <p>
          <strong>Disclaimer:</strong> ApexCrypto Finance LTD (“ApexCrypto”) is a digital asset platform offering
          crypto-backed lending services. We are not a licensed bank or investment adviser, and our services do not
          constitute financial advice or investment solicitation. Digital assets are highly volatile and may lose
          value. Borrowing against cryptocurrency involves risk, including potential loss of collateral due to
          liquidation. Please consider your financial situation and risk tolerance before using our services.
          <br><br>
          ApexCrypto operates in accordance with applicable laws within authorized jurisdictions. By accessing or
          using this site, you agree to our <a href="/terms">Terms of Service</a>, 
          <a href="/privacy">Privacy Policy</a>, and <a href="/risk-disclosure">Risk Disclosure Statement</a>.
          Trademarks and logos are property of their respective owners.
        </p>
      </div>
    </div>
  </div>

  <script>
    document.getElementById("year").textContent = new Date().getFullYear();
  </script>
</footer>
