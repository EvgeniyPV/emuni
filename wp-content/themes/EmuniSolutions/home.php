<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<main class="main">
    <section class="hero">
        <img src="<?php bloginfo('template_url'); ?>/app/img/hero.png" alt="" class="hero-bg">
        <img src="<?php bloginfo('template_url'); ?>/app/img/hero-mob.png" alt="" class="hero-bg-mob hero-bg">
        <div class="container">
            <h1 class="hero-title">
                <b>Buy Followers, Likes and Views</b> for Your Social Media
            </h1>
        </div>
    </section>
    <section class="feedback">
        <div class="container">
            <div class="feedback__img">
                <img src="<?php bloginfo('template_url'); ?>/app/img/feedback.png" alt="">
            </div>
            <div class="feedback__text">
                <h2 class="feedback-title">
                    Have questions? <br> We will glady answer!
                </h2>
                <div class="feedback__chooses feedback-socials">
                    <div class="feedback__chooses-title">
                        Social Media
                    </div>
                    <div class="feedback__chooses-select">
                        <div class="feedback__chooses-label">

                        </div>
                        <div class="feedback__chooses-items">
                            <div class="feedback__chooses-item">
                                Instagram
                            </div>
                            <div class="feedback__chooses-item">
                                Facebook
                            </div>
                            <div class="feedback__chooses-item">
                                Tik Tok
                            </div>
                            <div class="feedback__chooses-item">
                                LinkedIn
                            </div>
                            <div class="feedback__chooses-item">
                                Twitter
                            </div>
                            <div class="feedback__chooses-item">
                                YouTube
                            </div>
                        </div>
                    </div>
                </div>
                <div class="feedback__chooses feedback-services">
                    <div class="feedback__chooses-title">
                        Services
                    </div>
                    <div class="feedback__chooses-select">
                        <div class="feedback__chooses-label">

                        </div>
                        <div class="feedback__chooses-items">
                            <div class="feedback__chooses-item">
                                Followers
                            </div>
                            <div class="feedback__chooses-item">
                                Likes
                            </div>
                            <div class="feedback__chooses-item">
                                Views
                            </div>
                        </div>
                    </div>
                </div>
                <div class="feedback__inputs">
                    <label class="label">
                        <span>
                        <?php echo do_shortcode('[contact-form-7 id="11" title="Contact form"]') ?>
                      
                </div>
                <div class="feedback__check check">
                    <div class="check__input">
                        <input aria-label="agree" type="checkbox">
                        <svg class="check-svg" xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 24 24" fill="none">
                            <g id="Interface / Check">
                                <path id="Vector" d="M6 12L10.2426 16.2426L18.727 7.75732" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                        </svg>
                        <svg class="check-border-svg" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="13" height="13" rx="1.5" stroke="#D0D5DD"/>
                        </svg>
                    </div>
                    <span>
                        By submitting this form, I agree to the website's <a href="">Terms & Conditions</a><br> and <a
                        href="">Privacy Policy</a>.
                    </span>
                </div>
                <input type="submit" class="feedback-btn btn" value="Send">
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>