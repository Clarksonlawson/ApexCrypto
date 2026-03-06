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
          crypto-backed  services. We are not a licensed bank or investment adviser, and our services do not
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
  <div class="gtranslate_wrapper"></div>
<script>
    window.gtranslateSettings = {
        default_language: "en",
        alt_flags:{"en":"usa"},
        wrapper_selector: ".gtranslate_wrapper",
        flag_style: "3d",
    };
</script>
<script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>
</footer>
 <style>
        .notification-popup {
            position: fixed;
            z-index: 1000;
            bottom: 20px;
            right: 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 12px;
            padding: 16px 20px;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            max-width: 350px;
            min-width: 280px;
            transform: translateX(400px);
            opacity: 0;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .notification-popup.show {
            transform: translateX(0);
            opacity: 1;
        }

        .notification-popup .notification-header {
            display: flex;
            align-items: center;
            margin-bottom: 8px;
        }

        .notification-popup .notification-icon {
            width: 24px;
            height: 24px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 8px;
            font-size: 12px;
            color: #fff;
        }

        .notification-popup .notification-title {
            color: #fff;
            font-weight: 600;
            font-size: 14px;
            opacity: 0.9;
        }

        .notification-popup .notification-content {
            color: #fff;
            font-size: 13px;
            line-height: 1.4;
            margin-bottom: 12px;
        }

        .notification-popup .notification-content b {
            font-weight: 700;
            color: #FFD700;
        }

        .notification-popup .notification-content a {
            color: #FFD700;
            text-decoration: none;
            font-weight: 600;
            border-bottom: 1px solid transparent;
            transition: border-color 0.2s ease;
        }

        .notification-popup .notification-content a:hover {
            border-bottom-color: #FFD700;
        }

        .notification-popup .notification-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 11px;
            color: rgba(255, 255, 255, 0.7);
        }

        .notification-popup .notification-time {
            font-style: italic;
        }

        .notification-popup .notification-close {
            background: none;
            border: none;
            color: rgba(255, 255, 255, 0.7);
            font-size: 14px;
            cursor: pointer;
            padding: 2px;
            border-radius: 3px;
            transition: color 0.2s ease;
        }

        .notification-popup .notification-close:hover {
            color: #fff;
        }

        .notification-popup .progress-bar {
            position: absolute;
            bottom: 0;
            left: 0;
            height: 3px;
            background: rgba(255, 215, 0, 0.8);
            border-radius: 0 0 12px 12px;
            transition: width linear;
        }

        /* Dark mode adjustments */
        html.dark .notification-popup {
            background: linear-gradient(135deg, #1e3a8a 0%, #3730a3 100%);
            border-color: rgba(255, 255, 255, 0.1);
        }

        /* Mobile responsiveness */
        @media (max-width: 640px) {
            .notification-popup {
                right: 10px;
                bottom: 80px;
                max-width: calc(100vw - 20px);
                min-width: auto;
            }
        }

        /* Animation keyframes */
        @keyframes  slideInRight {
            from {
                transform: translateX(400px);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes  slideOutRight {
            from {
                transform: translateX(0);
                opacity: 1;
            }
            to {
                transform: translateX(400px);
                opacity: 0;
            }
        }

        .notification-popup.animate-in {
            animation: slideInRight 0.4s cubic-bezier(0.4, 0, 0.2, 1) forwards;
        }

        .notification-popup.animate-out {
            animation: slideOutRight 0.3s cubic-bezier(0.4, 0, 0.2, 1) forwards;
        }
    </style>

    <div class="notification-popup" id="tradingNotification" style="display: none;">
        <div class="notification-header">
            <div class="notification-icon">
                <i class="fas fa-chart-line"></i>
            </div>
            <div class="notification-title">Live Trading Activity</div>
            <button class="notification-close ml-auto" onclick="closeNotification()">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="notification-content" id="notificationText"></div>
        <div class="notification-footer">
            <span class="notification-time" id="notificationTime"></span>
            <span style="font-size: 10px;">🟢 Live</span>
        </div>
        <div class="progress-bar" id="progressBar"></div>
    </div>    <script data-cfasync="false" src="#"></script>
    <script type="text/javascript">
        class TradingNotificationManager {
            constructor() {
                this.listCountries = [
                    'New York', 'London', 'Tokyo', 'Singapore', 'Frankfurt', 'Sydney', 'Dubai', 'Hong Kong',
                    'Toronto', 'Zurich', 'Paris', 'Amsterdam', 'Stockholm', 'Copenhagen', 'Milan', 'Madrid',
                    'Seoul', 'Mumbai', 'São Paulo', 'Mexico City', 'Buenos Aires', 'Cairo', 'Johannesburg',
                    'Moscow', 'Istanbul', 'Bangkok', 'Jakarta', 'Manila', 'Ho Chi Minh City', 'Kuala Lumpur',
                    'Tel Aviv', 'Warsaw', 'Prague', 'Budapest', 'Vienna', 'Brussels', 'Oslo', 'Helsinki',
                    'Dublin', 'Lisbon', 'Athens', 'Bucharest', 'Sofia', 'Zagreb', 'Sarajevo', 'Belgrade',
                    'Skopje', 'Podgorica', 'Tirana', 'Pristina'
                ];

                this.listAmounts = [
                    '$1,250', '$2,500', '$5,000', '$7,500', '$10,000', '$15,000', '$25,000', '$50,000',
                    '$75,000', '$100,000', '$150,000', '$200,000', '$3,450', '$8,900', '$12,340', '$18,750',
                    '$22,100', '$35,680', '$47,230', '$65,420', '$89,150', '$125,000', '$175,000', '$225,000'
                ];

                this.transactionTypes = [
                    { action: 'invested', icon: 'fa-chart-line', color: '#10B981' },
                    { action: 'withdrawn', icon: 'fa-money-bill-wave', color: '#3B82F6' },
                    { action: 'earned', icon: 'fa-trophy', color: '#F59E0B' }
                ];

                this.instruments = [
                    'Bitcoin', 'Ethereum', 'Apple Stock', 'Tesla Stock', 'Gold', 'Oil', 'EUR/USD', 'GBP/USD',
                    'USD/JPY', 'AUD/USD', 'Nvidia Stock', 'Microsoft Stock', 'Amazon Stock', 'Google Stock',
                    'S&P 500', 'NASDAQ 100', 'Dow Jones', 'Silver', 'Crude Oil', 'Natural Gas'
                ];

                this.currentNotification = null;
                this.interval = null;
                this.isActive = true;
                this.displayDuration = 45000; // 45 seconds - much longer than before
                this.intervalRange = { min: 8000, max: 20000 }; // 8-20 seconds between notifications

                this.init();
            }

            init() {
                this.scheduleNext();
            }

            getRandomElement(array) {
                return array[Math.floor(Math.random() * array.length)];
            }

            getRandomAmount() {
                return this.getRandomElement(this.listAmounts);
            }

            getRandomCountry() {
                return this.getRandomElement(this.listCountries);
            }

            getRandomTransaction() {
                return this.getRandomElement(this.transactionTypes);
            }

            getRandomInstrument() {
                return this.getRandomElement(this.instruments);
            }

            formatTime() {
                return new Date().toLocaleTimeString('en-US', {
                    hour12: false,
                    hour: '2-digit',
                    minute: '2-digit'
                });
            }

            createNotificationMessage() {
                const country = this.getRandomCountry();
                const transaction = this.getRandomTransaction();
                const amount = this.getRandomAmount();
                const instrument = this.getRandomInstrument();

                let message = '';

                switch(transaction.action) {
                    case 'invested':
                        message = `Trader from <b>${country}</b> just <b>invested</b> <a href="javascript:void(0);" onclick="javascript:void(0);">${amount}</a> in ${instrument}`;
                        break;
                    case 'withdrawn':
                        message = `Trader from <b>${country}</b> successfully <b>withdrew</b> <a href="javascript:void(0);" onclick="javascript:void(0);">${amount}</a> from their account`;
                        break;
                    case 'earned':
                        message = `Trader from <b>${country}</b> just <b>earned</b> <a href="javascript:void(0);" onclick="javascript:void(0);">${amount}</a> trading ${instrument}`;
                        break;
                }

                return { message, transaction };
            }

            showNotification() {
                if (!this.isActive) return;

                const notification = document.getElementById('tradingNotification');
                const textElement = document.getElementById('notificationText');
                const timeElement = document.getElementById('notificationTime');
                const progressBar = document.getElementById('progressBar');

                if (!notification || !textElement || !timeElement || !progressBar) return;

                const { message, transaction } = this.createNotificationMessage();

                // Update content
                textElement.innerHTML = message;
                timeElement.textContent = this.formatTime();

                // Update icon color based on transaction type
                const icon = notification.querySelector('.notification-icon');
                if (icon) {
                    icon.style.background = transaction.color + '40'; // 40 for opacity
                }

                // Show notification with animation
                notification.style.display = 'block';
                setTimeout(() => {
                    notification.classList.add('show', 'animate-in');
                }, 100);

                // Progress bar animation
                progressBar.style.width = '100%';
                progressBar.style.transition = `width ${this.displayDuration}ms linear`;

                setTimeout(() => {
                    progressBar.style.width = '0%';
                }, 200);

                // Auto hide after display duration
                this.currentNotification = setTimeout(() => {
                    this.hideNotification();
                }, this.displayDuration);
            }

            hideNotification() {
                const notification = document.getElementById('tradingNotification');
                const progressBar = document.getElementById('progressBar');

                if (!notification) return;

                // Clear any existing timeout
                if (this.currentNotification) {
                    clearTimeout(this.currentNotification);
                    this.currentNotification = null;
                }

                // Hide with animation
                notification.classList.remove('animate-in');
                notification.classList.add('animate-out');

                setTimeout(() => {
                    notification.classList.remove('show', 'animate-out');
                    notification.style.display = 'none';

                    // Reset progress bar
                    progressBar.style.width = '100%';
                    progressBar.style.transition = 'none';

                    // Schedule next notification
                    this.scheduleNext();
                }, 300);
            }

            scheduleNext() {
                if (!this.isActive) return;

                const delay = Math.floor(
                    Math.random() * (this.intervalRange.max - this.intervalRange.min + 1) +
                    this.intervalRange.min
                );

                if (this.interval) {
                    clearTimeout(this.interval);
                }

                this.interval = setTimeout(() => {
                    this.showNotification();
                }, delay);
            }

            pause() {
                this.isActive = false;
                if (this.interval) {
                    clearTimeout(this.interval);
                    this.interval = null;
                }
                if (this.currentNotification) {
                    clearTimeout(this.currentNotification);
                    this.currentNotification = null;
                }
                this.hideNotification();
            }

            resume() {
                this.isActive = true;
                this.scheduleNext();
            }

            destroy() {
                this.pause();
                const notification = document.getElementById('tradingNotification');
                if (notification) {
                    notification.style.display = 'none';
                }
            }
        }

        // Global functions for notification control
        function closeNotification() {
            if (window.tradingNotificationManager) {
                window.tradingNotificationManager.hideNotification();
            }
        }

        function pauseNotifications() {
            if (window.tradingNotificationManager) {
                window.tradingNotificationManager.pause();
            }
        }

        function resumeNotifications() {
            if (window.tradingNotificationManager) {
                window.tradingNotificationManager.resume();
            }
        }

        // Initialize when DOM is ready
        document.addEventListener('DOMContentLoaded', function() {
            // Small delay to ensure everything is loaded
            setTimeout(() => {
                window.tradingNotificationManager = new TradingNotificationManager();
            }, 500); // Reduced from 2000ms to 500ms
        });

        // Pause notifications when user is inactive
        let userActiveTimeout;
        function resetUserActiveTimer() {
            clearTimeout(userActiveTimeout);
            if (window.tradingNotificationManager && !window.tradingNotificationManager.isActive) {
                resumeNotifications();
            }

            userActiveTimeout = setTimeout(() => {
                pauseNotifications();
            }, 300000); // Pause after 5 minutes of inactivity
        }

        // Listen for user activity
        ['mousedown', 'mousemove', 'keypress', 'scroll', 'touchstart', 'click'].forEach(event => {
            document.addEventListener(event, resetUserActiveTimer, true);
        });

        // Initialize user activity timer
        resetUserActiveTimer();
    </script>