<footer>
    <div id="footer-top">
        <div class="col">
            <div class="task-line">
                <ul>
                    <li>
                        <h3>DC COMICS</h3>
                    </li>
                    <li>
                        <a href="#">
                            Characters
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Comics
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Movies
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            TV
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Games
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Videos
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            News
                        </a>
                    </li>
                </ul>
            </div>
            <div class="task-line">
                <ul>
                    <li>
                        <h3>DC</h3>
                    </li>
                    <li>
                        <a href="#">
                            Terms Of Use
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Privacy policy (New)
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Ad Choices
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Advertising
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Jobs
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Subscriptions
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Talent Workshops
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            CPSC Certificates
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Ratings
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Shop Help
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Contact Us
                        </a>
                    </li>
                </ul>
            </div>
            <div class="task-line">
                <ul>
                    <li>
                        <h3>SITES</h3>
                    </li>
                    <li>
                        <a href="#">
                            DC
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            MAD Magazine
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            DC Kids
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            DC Universe
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            DC Power Visa
                        </a>
                    </li>
                </ul>
            </div>
            <div class="task-line">
                <ul>
                    <li>
                        <h3>SHOP</h3>
                    </li>
                    <li>
                        <a href="#">
                            Shop DC
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Shop DC Collectibles
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <img src="{{ asset('images/dc-logo-bg.png') }}" alt="dc_logo_bg_img">
    </div>

    <div id="footer-bottom">
        <a id="sign-up" href="#">
            <span>SIGN-UP NOW!</span>
        </a>

        <ul>
            <li>
                <a href="#">
                    <h4>FOLLOW US</h4>
                </a>
            </li>
            <li v-for="(social, i) in listSocial" :key="i">
                <a :href="social.url">
                    <img :src="social.img" :alt="social.alt">
                </a>
            </li>
        </ul>
    </div>
</footer>
