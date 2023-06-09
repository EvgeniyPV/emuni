<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package emunisolutions
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no"/>
    <meta name="description" content="">
    <link rel="stylesheet" href="css/app.min.css">
    <title>Home</title>

    <?php wp_head(); ?>

</head>
<body>
<header class="header">
    <div class="container">
        <div class="header__burger">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.11111 18.6666H20.8889C21.5 18.6666 22 18.1666 22 17.5555C22 16.9444 21.5 16.4444 20.8889 16.4444H3.11111C2.5 16.4444 2 16.9444 2 17.5555C2 18.1666 2.5 18.6666 3.11111 18.6666ZM3.11111 13.1111H20.8889C21.5 13.1111 22 12.6111 22 12C22 11.3889 21.5 10.8889 20.8889 10.8889H3.11111C2.5 10.8889 2 11.3889 2 12C2 12.6111 2.5 13.1111 3.11111 13.1111ZM2 6.44442C2 7.05554 2.5 7.55554 3.11111 7.55554H20.8889C21.5 7.55554 22 7.05554 22 6.44442C22 5.83331 21.5 5.33331 20.8889 5.33331H3.11111C2.5 5.33331 2 5.83331 2 6.44442Z" fill="#3E2780"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 24 24" fill="none">
                <g id="Menu / Close_MD">
                    <path id="Vector" d="M18 18L12 12M12 12L6 6M12 12L18 6M12 12L6 18" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </g>
            </svg>
        </div>
        <a href="" class="header__logo">
            <img src="<?php bloginfo('template_url'); ?>/app/img/logo.svg" alt="">
        </a>
        <ul class="header__menu">
            <li>
                <a href="">
                    Store
                </a>
            </li>
            <li>
                <a href="">
                    About
                </a>
            </li>
            <li>
                <a href="">
                    Blog
                </a>
            </li>
            <li>
                <a href="">
                    Contacts
                </a>
            </li>
        </ul>
        <a href="" class="header__bag">
            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9983 3.1958C10.6104 3.1958 9.47988 4.32465 9.47988 5.71427H9.48155V6.81788H14.5185V5.71427C14.5185 4.32634 13.388 3.1958 11.9983 3.1958ZM14.5196 6.81789H16.2143V5.71427C16.2143 3.39095 14.3233 1.5 12 1.5C9.67671 1.5 7.78576 3.39095 7.78576 5.71427V6.81789H9.48098V10.4921C9.48098 10.9598 9.10076 11.34 8.63307 11.34C8.16538 11.34 7.78517 10.9598 7.78517 10.4921V6.81788H6.33331C5.45512 6.81788 4.71489 7.47231 4.60385 8.34208L2.75496 21.5317C2.75328 21.5367 2.75328 21.5417 2.75328 21.5468C2.69271 22.0414 2.84917 22.5394 3.17891 22.9129C3.50865 23.2863 3.98476 23.5 4.48273 23.5H19.5161C20.0141 23.5 20.4902 23.2863 20.8216 22.9129C21.1514 22.5394 21.3062 22.0414 21.2473 21.5468C21.2473 21.5441 21.2468 21.5413 21.2463 21.5386C21.246 21.5363 21.2456 21.534 21.2456 21.5317L19.3967 8.34208C19.2874 7.47231 18.5454 6.81788 17.6673 6.81788H16.2154V10.4921C16.2154 10.9598 15.8352 11.34 15.3675 11.34C14.8998 11.34 14.5196 10.9598 14.5196 10.4921V6.81789Z" fill="#1F1340"/>
            </svg>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9983 2.6958C10.6104 2.6958 9.47988 3.82465 9.47988 5.21427H9.48155V6.31788H14.5185V5.21427C14.5185 3.82634 13.388 2.6958 11.9983 2.6958ZM14.5196 6.31789H16.2143V5.21427C16.2143 2.89095 14.3233 1 12 1C9.67671 1 7.78576 2.89095 7.78576 5.21427V6.31789H9.48098V9.99212C9.48098 10.4598 9.10076 10.84 8.63307 10.84C8.16538 10.84 7.78517 10.4598 7.78517 9.99212V6.31788H6.33331C5.45512 6.31788 4.71489 6.97231 4.60385 7.84208L2.75496 21.0317C2.75328 21.0367 2.75328 21.0417 2.75328 21.0468C2.69271 21.5414 2.84917 22.0394 3.17891 22.4129C3.50865 22.7863 3.98476 23 4.48273 23H19.5161C20.0141 23 20.4902 22.7863 20.8216 22.4129C21.1514 22.0394 21.3062 21.5414 21.2473 21.0468C21.2473 21.0441 21.2468 21.0413 21.2463 21.0386C21.246 21.0363 21.2456 21.034 21.2456 21.0317L19.3967 7.84208C19.2874 6.97231 18.5454 6.31788 17.6673 6.31788H16.2154V9.99212C16.2154 10.4598 15.8352 10.84 15.3675 10.84C14.8998 10.84 14.5196 10.4598 14.5196 9.99212V6.31789Z" fill="url(#paint0_linear_1_581)"/>
                <defs>
                    <linearGradient id="paint0_linear_1_581" x1="11.9987" y1="23.0012" x2="11.9987" y2="1.00148" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#7C4DFF"/>
                        <stop offset="1" stop-color="#132E8D"/>
                    </linearGradient>
                </defs>
            </svg>
        </a>
    </div>
</header>