<section>
    <div class="containers">
        <div class="left-container">
            <img class="bg-container-left" src="wwwroot/img/layout/figures.png" alt="figuresbg" />
            <img class="headline" src="wwwroot/img/vivi.jpg" alt="vivi" />
        </div>
        <div class="right-container">
            <h1 class="title-text rc-content arrows">Contact</h1>
            <h2 class="sub-text rc-content">Send me a message!</h2>
            <a class="sub-button rc-content" href="#scroller">Message me!</a>
        </div>
    </div>

    <div class="decodecodeco">
        <svg viewBox="0 0 1440 334" fill="none" preserveAspectRatio="xMidYMax meet">
            <path d="M0.164124 95.9236L1440.16 0.42357L1440.16 18.4236L0.164175 152.424L0.164124 95.9236Z" fill="#B398DD" />
            <path d="M-0.407532 152.019L1439.59 18L1439.59 42.0191L-0.407563 215.519L-0.407532 152.019Z" fill="#9265CE" />
            <path d="M0.234023 213.5L1440.23 40L1440.23 77.5L0.234045 275.577L0.234023 213.5Z" fill="#6E2DBD" />
        </svg>
    </div>

    <div id="scroller" class="contact-content the-big-one">
        <div class="bo-title">
            <h2 class="bo-title-text">Contact</h2>
            <svg class="bo-title-deco" viewBox="0 0 524 41" fill="none" preserveAspectRatio="xMidYMax meet">
                <path d="M0 33.8698L509.425 0.722997L516.748 12.7449L257.5 28.5L16.3832 40.7311L0 33.8698Z" fill="#B398DD" />
                <path d="M18.2338 21.6178L519.136 12.7129L523.498 23.6948L6.00322 33.7163L18.2338 21.6178Z" fill="#9265CE" />
                <path d="M2.58081 12.6486L520.506 23.9166L516.783 33.167L7.51012 21.3168L2.58081 12.6486Z" fill="#6E2DBD" />
            </svg>
        </div>
        <div class="contact-form">
            <div class="contact-left">
                <h3 class="contact-title">Send me a message!</h3>
                <form action="contact.php" method="post">
                    <div class="contact-small">
                        <p class="arrows">name</p>
                        <input name="name" id="contact-name" type="text">
                    </div>
                    <div class="contact-small">
                        <p class="arrows">email</p>
                        <input name="email" id="contact-email" type="email">
                    </div>
                    <div class="contact-small">
                        <p class="arrows">subject</p>
                        <input name="subject" id="contact-subject" type="text">
                    </div>
                    <div class="contact-big">
                        <p class="arrows">message</p>
                        <input name="message" id="contact-message" type="text">
                    </div>
                    <div class="contact-confirm">
                        <input name="send-message" value="Send Message" type="submit">
                    </div>
                </form>
            </div>
            <div class="contact-right">
                <h3 class="contact-title">Or contact me directly!</h3>
            </div>
        </div>
    </div>
</section>