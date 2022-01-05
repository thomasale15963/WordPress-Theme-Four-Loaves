<!-- Disregards the static/blog option and is always displayed -->

<!-- Load Header -->
<?php
get_header()
?>

<!-- Landing Page Start -->
<div class="landing-page-container" id="landing-page">
    <section class="landing-page-left-section">
        <div class="landing-page-left-section-content-container">

            <h1 class="landing-page-left-section-headline">
                Four Loaves
            </h1>

            <h1>
                <?php
                echo wp_get_attachment_url(( get_theme_mod( "landing-page-header-image-setting" ) ));
                ?>
            </h1>


            <p class="landing-page-left-section-slogan">

                <!-- get the setting value and check if empty -->
                <?php 
                 $site_slogan = get_theme_mod("landing-page-slogan-setting");

                 if($site_slogan != ""){
                     echo $site_slogan;
                 }else{
                     echo "From Farm to Fork";
                 }
                ?>
            </p>

            <!-- Display the CTA conditionally -->
            <?php
           
           if(get_theme_mod("landing-page-cta-display-setting") ==='Yes'){?>
            <button class="landing-page-left-section-button">
                Make A Reservation
            </button>
            <?php } ?>

        </div>
    </section>
    <section class="landing-page-right-section"></section>
</div>
<!-- Landing Page End -->

<!-- About Page Start -->
<div class="about-page-container" id="about-page">
    <!-- Left Section -->
    <div class="about-page-left-section">
        <h1 class="about-page-left-section-title">ABOUT US</h1>
        <h1 class="about-page-left-section-headline">
            We Deliver Fresh And Delectable Food From The Farm
        </h1>
        <p class="about-page-left-section-text-top">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae
            odio laboriosam illum ad eveniet voluptatum expedita reiciendis nam
            necessitatibus, earum commodi consectetur distinctio labore quam
            possimus rerum officiis dignissimos. Facere tenetur consequatur
            doloremque fugiat. Dignissimos consequatur ipsa perferendis
            perspiciatis dolore, voluptatum quaerat.
        </p>
        <p class="about-page-left-section-text">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil, dolor
            neque tempore explicabo enim reprehenderit pariatur accusantium
            repudiandae, vitae omnis eaque quisquam, numquam tempora excepturi.
            Minus.
        </p>
        <div class="about-page-left-section-image-container">
            <img class="about-page-left-section-image"
                src="<?php echo wp_get_attachment_url( get_theme_mod("landing-page-header-image-setting") )?>">


            <div class="about-page-left-section-image"></div>
            <div class="about-page-left-section-image"></div>
        </div>
    </div>
    <!-- Right Section -->
    <a class="about-page-right-section" target="_blank" href="https://youtube.com">
        <!-- Play Icon -->
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
            <g>
                <path
                    d="M256,48C141.1,48,48,141.1,48,256c0,114.9,93.1,208,208,208c114.9,0,208-93.1,208-208C464,141.1,370.9,48,256,48z
		 M339.8,259.9l-137.2,83c-2.9,1.8-6.7-0.4-6.7-3.9V173c0-3.5,3.7-5.7,6.7-3.9l137.2,83C342.7,253.8,342.7,258.2,339.8,259.9z">
                </path>
            </g>
        </svg>
    </a>
</div>
<!-- About Page End -->

<!-- Chefs Section Start -->
<div class="chef-section-container">
    <div class="chef-section-title">OUR CHEFS</div>
    <div class="chef-section-headline">We offer the best meals for you</div>
    <div class="chef-section-chefs-container">
        <!-- Chef One -->
        <div class="chef-section-chef chef-top">
            <div class="chef-section-chef-image-container">
                <div class="chef-section-image"></div>
                <div class="chef-section-frame"></div>
            </div>
            <div class="chef-section-chef-name">John Doe</div>
            <div class="chef-section-chef-title">Head Chef</div>
        </div>

        <!-- Chef Two -->
        <div class="chef-section-chef">
            <div class="chef-section-chef-image-container">
                <div class="chef-section-image"></div>
                <div class="chef-section-frame"></div>
            </div>
            <div class="chef-section-chef-name">Jack Doe</div>
            <div class="chef-section-chef-title">Assistant Chef</div>
        </div>

        <!-- Chef three -->
        <div class="chef-section-chef">
            <div class="chef-section-chef-image-container">
                <div class="chef-section-image"></div>
                <div class="chef-section-frame"></div>
            </div>
            <div class="chef-section-chef-name">Nukuma Doe</div>
            <div class="chef-section-chef-title">Pastry Chef</div>
        </div>
    </div>
</div>
<!-- Chefs Section End -->

<!-- Menu Section Start - Basic -->
<div class="basic-menu-container" id="menu-page">
    <div class="basic-menu-title">OUR MENUS</div>
    <div class="basic-menu-section">
        <!-- Menu Item 1-->
        <div class="basic-menu-item">
            <div class="basic-menu-description-container">
                <div class="basic-menu-left-content">
                    <div class="basic-menu-left-content-name">American Breakfast</div>
                    <div class="basic-menu-left-content-contents">
                        TOMATO / EGGS / SAUSAGE
                    </div>
                </div>
                <div class="basic-menu-right-price">$25</div>
            </div>
        </div>

        <!-- Menu Item 2-->
        <div class="basic-menu-item">
            <div class="basic-menu-description-container">
                <div class="basic-menu-left-content">
                    <div class="basic-menu-left-content-name">Self-Made Salad</div>
                    <div class="basic-menu-left-content-contents">
                        GREEN / FRUIT / VEGETABLES
                    </div>
                </div>
                <div class="basic-menu-right-price">$18</div>
            </div>
        </div>

        <!-- Menu Item 3 -->
        <div class="basic-menu-item">
            <div class="basic-menu-description-container">
                <div class="basic-menu-left-content">
                    <div class="basic-menu-left-content-name">Classic Pasta</div>
                    <div class="basic-menu-left-content-contents">
                        PASTA / EGGS / CHEESE
                    </div>
                </div>
                <div class="basic-menu-right-price">$34</div>
            </div>
        </div>

        <!-- Menu Item 4 -->
        <div class="basic-menu-item">
            <div class="basic-menu-description-container">
                <div class="basic-menu-left-content">
                    <div class="basic-menu-left-content-name">Deli Burger</div>
                    <div class="basic-menu-left-content-contents">
                        BEEF / FRIED POTATO
                    </div>
                </div>
                <div class="basic-menu-right-price">$46</div>
            </div>
        </div>

        <!-- Menu Item 5 -->
        <div class="basic-menu-item">
            <div class="basic-menu-description-container">
                <div class="basic-menu-left-content">
                    <div class="basic-menu-left-content-name">Rice Soup</div>
                    <div class="basic-menu-left-content-contents">
                        GREEN / CHICKEN
                    </div>
                </div>
                <div class="basic-menu-right-price">$28</div>
            </div>
        </div>
        <!-- Menu Item 6 -->
        <div class="basic-menu-item">
            <div class="basic-menu-description-container">
                <div class="basic-menu-left-content">
                    <div class="basic-menu-left-content-name">American Breakfast</div>
                    <div class="basic-menu-left-content-contents">
                        Tomato / Eggs / Sausage
                    </div>
                </div>
                <div class="basic-menu-right-price">$25</div>
            </div>
        </div>

        <!-- Menu Item 7 -->
        <div class="basic-menu-item">
            <div class="basic-menu-description-container">
                <div class="basic-menu-left-content">
                    <div class="basic-menu-left-content-name">American Breakfast</div>
                    <div class="basic-menu-left-content-contents">
                        Tomato / Eggs / Sausage
                    </div>
                </div>
                <div class="basic-menu-right-price">$25</div>
            </div>
        </div>
        <!-- Menu Item 8 -->
        <div class="basic-menu-item">
            <div class="basic-menu-description-container">
                <div class="basic-menu-left-content">
                    <div class="basic-menu-left-content-name">American Breakfast</div>
                    <div class="basic-menu-left-content-contents">
                        Tomato / Eggs / Sausage
                    </div>
                </div>
                <div class="basic-menu-right-price">$25</div>
            </div>
        </div>
        <!-- Menu Item 9 -->
        <div class="basic-menu-item">
            <div class="basic-menu-description-container">
                <div class="basic-menu-left-content">
                    <div class="basic-menu-left-content-name">American Breakfast</div>
                    <div class="basic-menu-left-content-contents">
                        Tomato / Eggs / Sausage
                    </div>
                </div>
                <div class="basic-menu-right-price">$25</div>
            </div>
        </div>
    </div>
</div>
<!-- Menu Section End - Basic -->

<!-- Menu Section Start - Animated -->

<!-- Menu Section End - Animated -->

<!-- Contact Page -->
<div class="contact-page-container" id="contact-page">
    <div class="contact-page-left-section">
        <div class="contact-page-left-section-title-main">CONTACT US</div>
        <div class="contact-page-left-section-headline">
            Make A Reservation Now To Avoid Waiting Time Later
        </div>
        <div class="contact-page-left-section-text">
            Donec pretium est orci, non vulputate arcu hendrerit a. Fusce a
            eleifend riqsie, namei sollicitudin urna diam, sed commodo purus porta
            ut.
        </div>

        <div class="contact-page-left-section-flex-container">
            <!-- Phone Number -->
            <div class="contact-page-left-section-info-container">
                <div class="contact-page-left-section-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 24 24">
                        <path
                            d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24c1.12.37 2.33.57 3.57.57c.55 0 1 .45 1 1V20c0 .55-.45 1-1 1c-9.39 0-17-7.61-17-17c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1c0 1.25.2 2.45.57 3.57c.11.35.03.74-.25 1.02l-2.2 2.2z"
                            fill="white"></path>
                    </svg>
                </div>
                <div class="contact-page-left-section-title">Phone Numbers</div>
                <div class="contact-page-left-section-content">+123 456 789</div>
                <div class="contact-page-left-section-content">+123 456 789</div>
            </div>

            <!-- Email -->
            <div class="contact-page-left-section-info-container">
                <div class="contact-page-left-section-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 24 24">
                        <path d="M22 4H2v16h20V4zm-2 4l-8 5l-8-5V6l8 5l8-5v2z" fill="white"></path>
                    </svg>
                </div>
                <div class="contact-page-left-section-title">Emails</div>
                <div class="contact-page-left-section-content">
                    emailme@gmail.com
                </div>
                <div class="contact-page-left-section-content">
                    emailme@gmail.com
                </div>
            </div>
        </div>
    </div>
    <div class="contact-page-right-section">
        <div class="contact-page-right-headline">Table Reservation</div>
        <form action="" class="contact-page-form">
            <div class="contact-form-input-line top-input-line">
                <input type="text" name="name-input" id="" placeholder="Your Name" />
                <input type="email" name="email-input" id="" placeholder="Your Email Address" />
            </div>

            <div class="contact-form-input-line">
                <input type="tel" name="" id="" placeholder="Your Phone Number" />
                <select name="" id="">
                    <option value="" disabled selected hidden>
                        Number Of Guests
                    </option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>

            <div class="contact-form-input-line">
                <input type="date" name="" id="" />
                <select name="" id="">
                    <option value="breakfast">Breakfast</option>
                    <option value="lunch">Breakfast</option>
                    <option value="dinner">Dinner</option>
                </select>
            </div>

            <div class="contact-form-input-line">
                <textarea name="message-input" id="" rows="10" placeholder="Message"></textarea>
            </div>

            <div class="contact-form-input-line">
                <button type="submit">Make A Reservation</button>
            </div>
        </form>
    </div>
</div>
<!-- Contact Page -->


<!-- Load Footer -->
<?php
get_footer()
?>