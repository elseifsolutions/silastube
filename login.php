<?php require($_SERVER['DOCUMENT_ROOT'] . "/static/important/config.inc.php"); ?>
<?php
session_start();
require 'static/important/config.inc.php';

$loginMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT id, username, password FROM users WHERE username = :username");
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header("Location: /");
        exit();
    } else {
        $loginMessage = "Invalid username or password.";
    }
}
?>
<!DOCTYPE html>
<!-- saved from url=(0217)https://web.archive.org/web/20150416020929/https://accounts.google.com/ServiceLogin?passive=1209600&continue=https%3A%2F%2Faccounts.google.com%2FManageAccount&followup=https%3A%2F%2Faccounts.google.com%2FManageAccount -->
<html lang="en" style="--wm-toolbar-height: 1px;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script src="./Sign in - Google Accounts_files/athena.js.download" type="text/javascript"></script>
<script type="text/javascript">window.addEventListener('DOMContentLoaded',function(){var v=archive_analytics.values;v.service='wb';v.server_name='wwwb-app220.us.archive.org';v.server_ms=1517;archive_analytics.send_pageview({});});</script>
<script type="text/javascript" src="./Sign in - Google Accounts_files/bundle-playback.js.download" charset="utf-8"></script>
<script type="text/javascript" src="./Sign in - Google Accounts_files/wombat.js.download" charset="utf-8"></script>
<script>window.RufflePlayer=window.RufflePlayer||{};window.RufflePlayer.config={"autoplay":"on","unmuteOverlay":"hidden"};</script>
<script type="text/javascript" src="./Sign in - Google Accounts_files/ruffle.js.download"></script>
<script type="text/javascript">
    __wm.init("https://web.archive.org/web");
  __wm.wombat("https://accounts.google.com/ServiceLogin?passive=1209600&amp;continue=https%3A%2F%2Faccounts.google.com%2FManageAccount&amp;followup=https%3A%2F%2Faccounts.google.com%2FManageAccount","20150416020929","https://web.archive.org/","web","/_static/",
        "1429150169");
</script>
<link rel="stylesheet" type="text/css" href="./Sign in - Google Accounts_files/banner-styles.css">
<link rel="stylesheet" type="text/css" href="./Sign in - Google Accounts_files/iconochive.css">
<!-- End Wayback Rewrite JS Include -->

  
  <meta content="width=300, initial-scale=1" name="viewport">
  <meta name="google-site-verification" content="LrdTUW9psUAMbh4Ia074-BPEVmcpBxF6Gwf0MSgQXZs">
  <title>Sign in - Google Accounts</title>
  <style>
  @font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url(//web.archive.org/web/20150416020929im_/https://fonts.gstatic.com/s/opensans/v10/DXI1ORHCpsQm3Vp6mXoaTYnF5uFdDttMLvmWuJdhhgs.ttf) format('truetype');
}
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans'), local('OpenSans'), url(//web.archive.org/web/20150416020929im_/https://fonts.gstatic.com/s/opensans/v10/cJZKeOuBrn4kERxqtaUH3aCWcynf_cDxXwCLxiixG1c.ttf) format('truetype');
}
  </style>
  <style>
  h1, h2 {
  -webkit-animation-duration: 0.1s;
  -webkit-animation-name: fontfix;
  -webkit-animation-iteration-count: 1;
  -webkit-animation-timing-function: linear;
  -webkit-animation-delay: 0;
  }
  @-webkit-keyframes fontfix {
  from {
  opacity: 1;
  }
  to {
  opacity: 1;
  }
  }
  </style>
<style>
  html, body {
  font-family: Arial, sans-serif;
  background: #fff;
  margin: 0;
  padding: 0;
  border: 0;
  position: absolute;
  height: 100%;
  min-width: 100%;
  font-size: 13px;
  color: #404040;
  direction: ltr;
  -webkit-text-size-adjust: none;
  }
  button,
  input[type=button],
  input[type=submit] {
  font-family: Arial, sans-serif;
  font-size: 13px;
  }
  a,
  a:hover,
  a:visited {
  color: #427fed;
  cursor: pointer;
  text-decoration: none;
  }
  a:hover {
  text-decoration: underline;
  }
  h1 {
  font-size: 20px;
  color: #262626;
  margin: 0 0 15px;
  font-weight: normal;
  }
  h2 {
  font-size: 14px;
  color: #262626;
  margin: 0 0 15px;
  font-weight: bold;
  }
  input[type=email],
  input[type=number],
  input[type=password],
  input[type=tel],
  input[type=text],
  input[type=url] {
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  display: inline-block;
  height: 36px;
  padding: 0 8px;
  margin: 0;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -moz-border-radius: 1px;
  -webkit-border-radius: 1px;
  border-radius: 1px;
  font-size: 15px;
  color: #404040;
  }
  input[type=email]:hover,
  input[type=number]:hover,
  input[type=password]:hover,
  input[type=tel]:hover,
  input[type=text]:hover,
  input[type=url]:hover {
  border: 1px solid #b9b9b9;
  border-top: 1px solid #a0a0a0;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  }
  input[type=email]:focus,
  input[type=number]:focus,
  input[type=password]:focus,
  input[type=tel]:focus,
  input[type=text]:focus,
  input[type=url]:focus {
  outline: none;
  border: 1px solid #4d90fe;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  }
  input[type=checkbox],
  input[type=radio] {
  -webkit-appearance: none;
  display: inline-block;
  width: 13px;
  height: 13px;
  margin: 0;
  cursor: pointer;
  vertical-align: bottom;
  background: #fff;
  border: 1px solid #c6c6c6;
  -moz-border-radius: 1px;
  -webkit-border-radius: 1px;
  border-radius: 1px;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  position: relative;
  }
  input[type=checkbox]:active,
  input[type=radio]:active {
  background: #ebebeb;
  }
  input[type=checkbox]:hover {
  border-color: #c6c6c6;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  }
  input[type=radio] {
  -moz-border-radius: 1em;
  -webkit-border-radius: 1em;
  border-radius: 1em;
  width: 15px;
  height: 15px;
  }
  input[type=checkbox]:checked,
  input[type=radio]:checked {
  background: #fff;
  }
  input[type=radio]:checked::after {
  content: '';
  display: block;
  position: relative;
  top: 3px;
  left: 3px;
  width: 7px;
  height: 7px;
  background: #666;
  -moz-border-radius: 1em;
  -webkit-border-radius: 1em;
  border-radius: 1em;
  }
  input[type=checkbox]:checked::after {
  content: url(//web.archive.org/web/20150416020929im_/https://ssl.gstatic.com/ui/v1/menu/checkmark.png);
  display: block;
  position: absolute;
  top: -6px;
  left: -5px;
  }
  input[type=checkbox]:focus {
  outline: none;
  border-color: #4d90fe;
  }
  .stacked-label {
  display: block;
  font-weight: bold;
  margin: .5em 0;
  }
  .hidden-label {
  position: absolute !important;
  clip: rect(1px 1px 1px 1px); /* IE6, IE7 */
  clip: rect(1px, 1px, 1px, 1px);
  height: 0px;
  width: 0px;
  overflow: hidden;
  visibility: hidden;
  }
  input[type=checkbox].form-error,
  input[type=email].form-error,
  input[type=number].form-error,
  input[type=password].form-error,
  input[type=text].form-error,
  input[type=tel].form-error,
  input[type=url].form-error {
  border: 1px solid #dd4b39;
  }
  .error-msg {
  margin: .5em 0;
  display: block;
  color: #dd4b39;
  line-height: 17px;
  }
  .help-link {
  background: #dd4b39;
  padding: 0 5px;
  color: #fff;
  font-weight: bold;
  display: inline-block;
  -moz-border-radius: 1em;
  -webkit-border-radius: 1em;
  border-radius: 1em;
  text-decoration: none;
  position: relative;
  top: 0px;
  }
  .help-link:visited {
  color: #fff;
  }
  .help-link:hover {
  color: #fff;
  background: #c03523;
  text-decoration: none;
  }
  .help-link:active {
  opacity: 1;
  background: #ae2817;
  }
  .wrapper {
  position: relative;
  min-height: 100%;
  }
  .content {
  padding: 0 44px;
  }
  .main {
  padding-bottom: 100px;
  }
  /* For modern browsers */
  .clearfix:before,
  .clearfix:after {
  content: "";
  display: table;
  }
  .clearfix:after {
  clear: both;
  }
  /* For IE 6/7 (trigger hasLayout) */
  .clearfix {
  zoom:1;
  }
  .google-header-bar {
  height: 71px;
  border-bottom: 1px solid #e5e5e5;
  overflow: hidden;
  }
  .header .logo {
  margin: 17px 0 0;
  float: left;
  height: 38px;
  width: 200px;
  }
  .header .secondary-link {
  margin: 28px 0 0;
  float: right;
  }
  .header .secondary-link a {
  font-weight: normal;
  }
  .google-header-bar.centered {
  border: 0;
  height: 108px;
  }
  .google-header-bar.centered .header .logo {
  float: none;
  margin: 40px auto 30px;
  display: block;
  }
  .google-header-bar.centered .header .secondary-link {
  display: none
  }
  .google-footer-bar {
  position: absolute;
  bottom: 0;
  height: 35px;
  width: 100%;
  border-top: 1px solid #e5e5e5;
  overflow: hidden;
  }
  .footer {
  padding-top: 7px;
  font-size: .85em;
  white-space: nowrap;
  line-height: 0;
  }
  .footer ul {
  float: left;
  max-width: 80%;
  min-height: 16px;
  padding: 0;
  }
  .footer ul li {
  color: #737373;
  display: inline;
  padding: 0;
  padding-right: 1.5em;
  }
  .footer a {
  color: #737373;
  }
  .lang-chooser-wrap {
  float: right;
  display: inline;
  }
  .lang-chooser-wrap img {
  vertical-align: top;
  }
  .lang-chooser {
  font-size: 13px;
  height: 24px;
  line-height: 24px;
  }
  .lang-chooser option {
  font-size: 13px;
  line-height: 24px;
  }
  .hidden {
  height: 0px;
  width: 0px;
  overflow: hidden;
  visibility: hidden;
  display: none !important;
  }
  .banner {
  text-align: center;
  }
  .card {
  background-color: #f7f7f7;
  padding: 20px 25px 30px;
  margin: 0 auto 25px;
  width: 304px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  border-radius: 2px;
  -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  }
  .card > *:first-child {
  margin-top: 0;
  }
  .rc-button,
  .rc-button:visited {
  display: inline-block;
  min-width: 46px;
  text-align: center;
  color: #444;
  font-size: 14px;
  font-weight: 700;
  height: 36px;
  padding: 0 8px;
  line-height: 36px;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  -o-transition: all 0.218s;
  -moz-transition: all 0.218s;
  -webkit-transition: all 0.218s;
  transition: all 0.218s;
  border: 1px solid #dcdcdc;
  background-color: #f5f5f5;
  background-image: -webkit-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: -moz-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: -ms-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: -o-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: linear-gradient(top,#f5f5f5,#f1f1f1);
  -o-transition: none;
  -moz-user-select: none;
  -webkit-user-select: none;
  user-select: none;
  cursor: default;
  }
  .card .rc-button {
  width: 100%;
  padding: 0;
  }
  .rc-button.disabled,
  .rc-button[disabled] {
  opacity: .5;
  filter: alpha(opacity=50);
  cursor: default;
  pointer-events: none;
  }
  .rc-button:hover {
  border: 1px solid #c6c6c6;
  color: #333;
  text-decoration: none;
  -o-transition: all 0.0s;
  -moz-transition: all 0.0s;
  -webkit-transition: all 0.0s;
  transition: all 0.0s;
  background-color: #f8f8f8;
  background-image: -webkit-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: -moz-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: -ms-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: -o-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: linear-gradient(top,#f8f8f8,#f1f1f1);
  -moz-box-shadow: 0 1px 1px rgba(0,0,0,0.1);
  -webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.1);
  box-shadow: 0 1px 1px rgba(0,0,0,0.1);
  }
  .rc-button:active {
  background-color: #f6f6f6;
  background-image: -webkit-linear-gradient(top,#f6f6f6,#f1f1f1);
  background-image: -moz-linear-gradient(top,#f6f6f6,#f1f1f1);
  background-image: -ms-linear-gradient(top,#f6f6f6,#f1f1f1);
  background-image: -o-linear-gradient(top,#f6f6f6,#f1f1f1);
  background-image: linear-gradient(top,#f6f6f6,#f1f1f1);
  -moz-box-shadow: 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: 0 1px 2px rgba(0,0,0,0.1);
  }
  .rc-button-submit,
  .rc-button-submit:visited {
  border: 1px solid #3079ed;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1);
  background-color: #4d90fe;
  background-image: -webkit-linear-gradient(top,#4d90fe,#4787ed);
  background-image: -moz-linear-gradient(top,#4d90fe,#4787ed);
  background-image: -ms-linear-gradient(top,#4d90fe,#4787ed);
  background-image: -o-linear-gradient(top,#4d90fe,#4787ed);
  background-image: linear-gradient(top,#4d90fe,#4787ed);
  }
  .rc-button-submit:hover {
  border: 1px solid #2f5bb7;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #357ae8;
  background-image: -webkit-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -moz-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -ms-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -o-linear-gradient(top,#4d90fe,#357ae8);
  background-image: linear-gradient(top,#4d90fe,#357ae8);
  }
  .rc-button-submit:active {
  background-color: #357ae8;
  background-image: -webkit-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -moz-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -ms-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -o-linear-gradient(top,#4d90fe,#357ae8);
  background-image: linear-gradient(top,#4d90fe,#357ae8);
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  }
  .rc-button-red,
  .rc-button-red:visited {
  border: 1px solid transparent;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1);
  background-color: #d14836;
  background-image: -webkit-linear-gradient(top,#dd4b39,#d14836);
  background-image: -moz-linear-gradient(top,#dd4b39,#d14836);
  background-image: -ms-linear-gradient(top,#dd4b39,#d14836);
  background-image: -o-linear-gradient(top,#dd4b39,#d14836);
  background-image: linear-gradient(top,#dd4b39,#d14836);
  }
  .rc-button-red:hover {
  border: 1px solid #b0281a;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #c53727;
  background-image: -webkit-linear-gradient(top,#dd4b39,#c53727);
  background-image: -moz-linear-gradient(top,#dd4b39,#c53727);
  background-image: -ms-linear-gradient(top,#dd4b39,#c53727);
  background-image: -o-linear-gradient(top,#dd4b39,#c53727);
  background-image: linear-gradient(top,#dd4b39,#c53727);
  }
  .rc-button-red:active {
  border: 1px solid #992a1b;
  background-color: #b0281a;
  background-image: -webkit-linear-gradient(top,#dd4b39,#b0281a);
  background-image: -moz-linear-gradient(top,#dd4b39,#b0281a);
  background-image: -ms-linear-gradient(top,#dd4b39,#b0281a);
  background-image: -o-linear-gradient(top,#dd4b39,#b0281a);
  background-image: linear-gradient(top,#dd4b39,#b0281a);
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  }
  .secondary-actions {
  text-align: center;
  }
</style>
<style media="screen and (max-width: 800px), screen and (max-height: 800px)">
  .google-header-bar.centered {
  height: 83px;
  }
  .google-header-bar.centered .header .logo {
  margin: 25px auto 20px;
  }
  .card {
  margin-bottom: 20px;
  }
</style>
<style media="screen and (max-width: 580px)">
  html, body {
  font-size: 14px;
  }
  .google-header-bar.centered {
  height: 73px;
  }
  .google-header-bar.centered .header .logo {
  margin: 20px auto 15px;
  }
  .content {
  padding-left: 10px;
  padding-right: 10px;
  }
  .hidden-small {
  display: none;
  }
  .card {
  padding: 20px 15px 30px;
  width: 270px;
  }
  .footer ul li {
  padding-right: 1em;
  }
  .lang-chooser-wrap {
  display: none;
  }
</style>
<style>
  pre.debug {
  font-family: monospace;
  position: absolute;
  left: 0;
  margin: 0;
  padding: 1.5em;
  font-size: 13px;
  background: #f1f1f1;
  border-top: 1px solid #e5e5e5;
  direction: ltr;
  white-space: pre-wrap;
  width: 90%;
  overflow: hidden;
  }
</style>
<style>
  .banner h1 {
  font-family: 'Open Sans', arial;
  -webkit-font-smoothing: antialiased;
  color: #555;
  font-size: 42px;
  font-weight: 300;
  margin-top: 0;
  margin-bottom: 20px;
  }
  .banner h2 {
  font-family: 'Open Sans', arial;
  -webkit-font-smoothing: antialiased;
  color: #555;
  font-size: 18px;
  font-weight: 400;
  margin-bottom: 20px;
  }
  .signin-card {
  width: 274px;
  padding: 40px 40px;
  }
  .signin-card .profile-img {
  width: 96px;
  height: 96px;
  margin: 0 auto 10px;
  display: block;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  }
  .signin-card .profile-name {
  font-size: 16px;
  font-weight: bold;
  text-align: center;
  margin: 10px 0 0;
  min-height: 1em;
  }
  .signin-card .profile-email {
  font-size: 16px;
  text-align: center;
  margin: 10px 0 20px 0;
  min-height: 1em;
  }
  .signin-card input[type=email],
  .signin-card input[type=password],
  .signin-card input[type=text],
  .signin-card input[type=submit] {
  width: 100%;
  display: block;
  margin-bottom: 10px;
  z-index: 1;
  position: relative;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  }
  .signin-card #Email,
  .signin-card #Passwd,
  .signin-card .captcha {
  direction: ltr;
  height: 44px;
  font-size: 16px;
  }
  .signin-card #Email + .stacked-label {
  margin-top: 15px;
  }
  .signin-card #reauthEmail {
  display: block;
  margin-bottom: 10px;
  line-height: 36px;
  padding: 0 8px;
  font-size: 15px;
  color: #404040;
  line-height: 2;
  margin-bottom: 10px;
  font-size: 14px;
  text-align: center;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  }
  .one-google p {
  margin: 0 0 10px;
  color: #555;
  font-size: 14px;
  text-align: center;
  }
  .one-google p.create-account,
  .one-google p.switch-account {
  margin-bottom: 60px;
  }
  .one-google img {
  display: block;
  width: 210px;
  height: 17px;
  margin: 10px auto;
  }
</style>
<style media="screen and (max-width: 800px), screen and (max-height: 800px)">
  .banner h1 {
  font-size: 38px;
  margin-bottom: 15px;
  }
  .banner h2 {
  margin-bottom: 15px;
  }
  .one-google p.create-account,
  .one-google p.switch-account {
  margin-bottom: 30px;
  }
  .signin-card #Email {
  margin-bottom: 0;
  }
  .signin-card #Passwd {
  margin-top: -1px;
  }
  .signin-card #Email.form-error,
  .signin-card #Passwd.form-error {
  z-index: 2;
  }
  .signin-card #Email:hover,
  .signin-card #Email:focus,
  .signin-card #Passwd:hover,
  .signin-card #Passwd:focus {
  z-index: 3;
  }
</style>
<style media="screen and (max-width: 580px)">
  .banner h1 {
  font-size: 22px;
  margin-bottom: 15px;
  }
  .signin-card {
  width: 260px;
  padding: 20px 20px;
  margin: 0 auto 20px;
  }
  .signin-card .profile-img {
  width: 72px;
  height: 72px;
  -moz-border-radius: 72px;
  -webkit-border-radius: 72px;
  border-radius: 72px;
  }
</style>
<style>
  .jfk-tooltip {
  background-color: #fff;
  border: 1px solid;
  color: #737373;
  font-size: 12px;
  position: absolute;
  z-index: 800 !important;
  border-color: #bbb #bbb #a8a8a8;
  padding: 16px;
  width: 250px;
  }
 .jfk-tooltip h3 {
  color: #555;
  font-size: 12px;
  margin: 0 0 .5em;
  }
 .jfk-tooltip-content p:last-child {
  margin-bottom: 0;
  }
  .jfk-tooltip-arrow {
  position: absolute;
  }
  .jfk-tooltip-arrow .jfk-tooltip-arrowimplbefore,
  .jfk-tooltip-arrow .jfk-tooltip-arrowimplafter {
  display: block;
  height: 0;
  position: absolute;
  width: 0;
  }
  .jfk-tooltip-arrow .jfk-tooltip-arrowimplbefore {
  border: 9px solid;
  }
  .jfk-tooltip-arrow .jfk-tooltip-arrowimplafter {
  border: 8px solid;
  }
  .jfk-tooltip-arrowdown {
  bottom: 0;
  }
  .jfk-tooltip-arrowup {
  top: -9px;
  }
  .jfk-tooltip-arrowleft {
  left: -9px;
  top: 30px;
  }
  .jfk-tooltip-arrowright {
  right: 0;
  top: 30px;
  }
  .jfk-tooltip-arrowdown .jfk-tooltip-arrowimplbefore,.jfk-tooltip-arrowup .jfk-tooltip-arrowimplbefore {
  border-color: #bbb transparent;
  left: -9px;
  }
  .jfk-tooltip-arrowdown .jfk-tooltip-arrowimplbefore {
  border-color: #a8a8a8 transparent;
  }
  .jfk-tooltip-arrowdown .jfk-tooltip-arrowimplafter,.jfk-tooltip-arrowup .jfk-tooltip-arrowimplafter {
  border-color: #fff transparent;
  left: -8px;
  }
  .jfk-tooltip-arrowdown .jfk-tooltip-arrowimplbefore {
  border-bottom-width: 0;
  }
  .jfk-tooltip-arrowdown .jfk-tooltip-arrowimplafter {
  border-bottom-width: 0;
  }
  .jfk-tooltip-arrowup .jfk-tooltip-arrowimplbefore {
  border-top-width: 0;
  }
  .jfk-tooltip-arrowup .jfk-tooltip-arrowimplafter {
  border-top-width: 0;
  top: 1px;
  }
  .jfk-tooltip-arrowleft .jfk-tooltip-arrowimplbefore,
  .jfk-tooltip-arrowright .jfk-tooltip-arrowimplbefore {
  border-color: transparent #bbb;
  top: -9px;
  }
  .jfk-tooltip-arrowleft .jfk-tooltip-arrowimplafter,
  .jfk-tooltip-arrowright .jfk-tooltip-arrowimplafter {
  border-color:transparent #fff;
  top:-8px;
  }
  .jfk-tooltip-arrowleft .jfk-tooltip-arrowimplbefore {
  border-left-width: 0;
  }
  .jfk-tooltip-arrowleft .jfk-tooltip-arrowimplafter {
  border-left-width: 0;
  left: 1px;
  }
  .jfk-tooltip-arrowright .jfk-tooltip-arrowimplbefore {
  border-right-width: 0;
  }
  .jfk-tooltip-arrowright .jfk-tooltip-arrowimplafter {
  border-right-width: 0;
  }
  .jfk-tooltip-closebtn {
  background: url("//web.archive.org/web/20150416020929im_/https://ssl.gstatic.com/ui/v1/icons/common/x_8px.png") no-repeat;
  border: 1px solid transparent;
  height: 21px;
  opacity: .4;
  outline: 0;
  position: absolute;
  right: 2px;
  top: 2px;
  width: 21px;
  }
  .jfk-tooltip-closebtn:focus,
  .jfk-tooltip-closebtn:hover {
  opacity: .8;
  cursor: pointer;
  }
  .jfk-tooltip-closebtn:focus {
  border-color: #4d90fe;
  }
</style>
<style media="screen and (max-width: 580px)">
  .jfk-tooltip {
  display: none;
  }
</style>
<style>
  .need-help-reverse {
  float: right;
  }
  .remember .bubble-wrap {
  position: absolute;
  padding-top: 3px;
  -o-transition: opacity .218s ease-in .218s;
  -moz-transition: opacity .218s ease-in .218s;
  -webkit-transition: opacity .218s ease-in .218s;
  transition: opacity .218s ease-in .218s;
  left: -999em;
  opacity: 0;
  width: 314px;
  margin-left: -20px;
  }
  .remember:hover .bubble-wrap,
  .remember input:focus ~ .bubble-wrap,
  .remember .bubble-wrap:hover,
  .remember .bubble-wrap:focus {
  opacity: 1;
  left: inherit;
  }
  .bubble-pointer {
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  border-bottom: 10px solid #fff;
  width: 0;
  height: 0;
  margin-left: 17px;
  }
  .bubble {
  background-color: #fff;
  padding: 15px;
  margin-top: -1px;
  font-size: 11px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  border-radius: 2px;
  -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  }
  #stay-signed-in {
  float: left;
  }
  #stay-signed-in-tooltip {
  left: auto;
  margin-left: -20px;
  padding-top: 3px;
  position: absolute;
  top: 0;
  visibility: hidden;
  width: 314px;
  z-index: 1;
  }
  .dasher-tooltip {
  position: absolute;
  left: 50%;
  top: 380px;
  margin-left: 150px;
  }
  .dasher-tooltip .tooltip-pointer {
  margin-top: 15px;
  }
  .dasher-tooltip p {
  margin-top: 0;
  }
  .dasher-tooltip p span {
  display: block;
  }
</style>
<style media="screen and (max-width: 800px), screen and (max-height: 800px)">
  .dasher-tooltip {
  top: 340px;
  }
</style>
  </head>
  <body><!-- BEGIN WAYBACK TOOLBAR INSERT -->
<script>__wm.rw(0);</script>
<div id="wm-ipp-base" lang="en" style="display: block; direction: ltr; height: 1px;"><template shadowrootmode="closed"><div id="wm-ipp" style="position:fixed;left:0;top:0;right:0;" class="">
<div id="donato" style="position:relative;width:100%;">
  <div id="donato-base">
    <iframe id="donato-if" src="https://archive.org/includes/donate.php?as_page=1&amp;platform=wb&amp;referer=https%3A//web.archive.org/web/20150416020929/https%3A//accounts.google.com/ServiceLogin%3Fpassive%3D1209600%26continue%3Dhttps%253A%252F%252Faccounts.google.com%252FManageAccount%26followup%3Dhttps%253A%252F%252Faccounts.google.com%252FManageAccount" scrolling="no" frameborder="0" style="width:100%; height:100%">
    </iframe>
  </div>
</div><div id="wm-ipp-inside" style="display: none;">
  <div id="wm-toolbar" style="position:relative;display:flex;flex-flow:row nowrap;justify-content:space-between;">
    <div id="wm-logo" style="/*width:110px;*/padding-top:12px;">
      <a href="https://web.archive.org/web/" title="Wayback Machine home page"><img src="https://web.archive.org/_static/images/toolbar/wayback-toolbar-logo-200.png" srcset="/_static/images/toolbar/wayback-toolbar-logo-100.png, /_static/images/toolbar/wayback-toolbar-logo-150.png 1.5x, /_static/images/toolbar/wayback-toolbar-logo-200.png 2x" alt="Wayback Machine" style="width:100px" border="0"></a>
    </div>
    <div class="c" style="display:flex;flex-flow:column nowrap;justify-content:space-between;flex:1;">
      <form class="u" style="display:flex;flex-direction:row;flex-wrap:nowrap;" target="_top" method="get" action="https://web.archive.org/web/submit" name="wmtb" id="wmtb"><input type="text" name="url" id="wmtbURL" value="https://accounts.google.com/ServiceLogin?passive=1209600&amp;continue=https%3A%2F%2Faccounts.google.com%2FManageAccount&amp;followup=https%3A%2F%2Faccounts.google.com%2FManageAccount" onfocus="this.focus();this.select();" style="flex:1;" autocomplete="off"><input type="hidden" name="type" value="replay"><input type="hidden" name="date" value="20150416020929"><input type="submit" value="Go">
      </form>
      <div style="display:flex;flex-flow:row nowrap;align-items:flex-end;">
                <div class="s" id="wm-nav-captures" style="flex:1;"><a class="t" href="https://web.archive.org/web/*/https://accounts.google.com/ServiceLogin?passive=1209600&amp;continue=https%3A%2F%2Faccounts.google.com%2FManageAccount&amp;followup=https%3A%2F%2Faccounts.google.com%2FManageAccount" title="See a list of every capture for this URL">114,891 captures</a><div class="r" title="Timespan for captures of this URL">15 Sep 2011 - 16 Jan 2025</div></div>
        <div class="k">
          <a href="https://web.archive.org/web/20180801000000/https://accounts.google.com/ServiceLogin?passive=1209600&amp;continue=https%3A%2F%2Faccounts.google.com%2FManageAccount&amp;followup=https%3A%2F%2Faccounts.google.com%2FManageAccount" id="wm-graph-anchor">
            <div id="wm-ipp-sparkline" title="Explore captures for this URL" style="position: relative">
              <canvas id="wm-sparkline-canvas" width="750" height="27" border="0"></canvas>
            <div class="yt" style="display: none; width: 25px; height: 27px; left: 550px;"></div><div class="mt" style="display: none; width: 2px; height: 27px; left: 565px;"></div></div>
          </a>
        </div>
      </div>
    </div>
    <div class="n">
      <table>
        <tbody>
          <!-- NEXT/PREV MONTH NAV AND MONTH INDICATOR -->
          <tr class="m">
            <td class="b" nowrap="nowrap"><a href="https://web.archive.org/web/20150316011949/https://accounts.google.com/ServiceLogin?passive=1209600&amp;continue=https%3A%2F%2Faccounts.google.com%2FManageAccount&amp;followup=https%3A%2F%2Faccounts.google.com%2FManageAccount" title="16 Mar 2015"><strong>Mar</strong></a></td>
            <td class="c" id="displayMonthEl" title="You are here: 02:09:29 Apr 16, 2015">Apr</td>
            <td class="f" nowrap="nowrap"><a href="https://web.archive.org/web/20150518181959/https://accounts.google.com/ServiceLogin?passive=1209600&amp;continue=https%3A%2F%2Faccounts.google.com%2FManageAccount&amp;followup=https%3A%2F%2Faccounts.google.com%2FManageAccount" title="18 May 2015"><strong>May</strong></a></td>
          </tr>
          <!-- NEXT/PREV CAPTURE NAV AND DAY OF MONTH INDICATOR -->
          <tr class="d">
            <td class="b" nowrap="nowrap"><a href="https://web.archive.org/web/20150415010834/https://accounts.google.com/ServiceLogin?passive=1209600&amp;continue=https%3A%2F%2Faccounts.google.com%2FManageAccount&amp;followup=https%3A%2F%2Faccounts.google.com%2FManageAccount" title="01:08:34 Apr 15, 2015"><img src="https://web.archive.org/_static/images/toolbar/wm_tb_prv_on.png" alt="Previous capture" width="14" height="16" border="0"></a></td>
            <td class="c" id="displayDayEl" style="width:34px;font-size:22px;white-space:nowrap;" title="You are here: 02:09:29 Apr 16, 2015">16</td>
            <td class="f" nowrap="nowrap"><a href="https://web.archive.org/web/20150417023621/https://accounts.google.com/ServiceLogin?passive=1209600&amp;continue=https%3A%2F%2Faccounts.google.com%2FManageAccount&amp;followup=https%3A%2F%2Faccounts.google.com%2FManageAccount" title="02:36:21 Apr 17, 2015"><img src="https://web.archive.org/_static/images/toolbar/wm_tb_nxt_on.png" alt="Next capture" width="14" height="16" border="0"></a></td>
          </tr>
          <!-- NEXT/PREV YEAR NAV AND YEAR INDICATOR -->
          <tr class="y">
            <td class="b" nowrap="nowrap"><a href="https://web.archive.org/web/20140416020734/https://accounts.google.com/ServiceLogin?passive=1209600&amp;continue=https%3A%2F%2Faccounts.google.com%2FManageAccount&amp;followup=https%3A%2F%2Faccounts.google.com%2FManageAccount" title="16 Apr 2014"><strong>2014</strong></a></td>
            <td class="c" id="displayYearEl" title="You are here: 02:09:29 Apr 16, 2015">2015</td>
            <td class="f" nowrap="nowrap"><a href="https://web.archive.org/web/20160416023142/https://accounts.google.com/ServiceLogin?passive=1209600&amp;continue=https%3A%2F%2Faccounts.google.com%2FManageAccount&amp;followup=https%3A%2F%2Faccounts.google.com%2FManageAccount" title="16 Apr 2016"><strong>2016</strong></a></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="r" style="display:flex;flex-flow:column nowrap;align-items:flex-end;justify-content:space-between;">
      <div id="wm-btns" style="text-align:right;height:23px;">
                <span class="xxs">
          <div id="wm-save-snapshot-success">success</div>
          <div id="wm-save-snapshot-fail">fail</div>
          <a id="wm-save-snapshot-open" href="https://web.archive.org/web/20150416020929/https://accounts.google.com/ServiceLogin?passive=1209600&amp;continue=https%3A%2F%2Faccounts.google.com%2FManageAccount&amp;followup=https%3A%2F%2Faccounts.google.com%2FManageAccount#" title="Share via My Web Archive" style="display: none;">
            <span class="iconochive-web"></span>
          </a>
          <a href="https://archive.org/account/login.php" title="Sign In" id="wm-sign-in" style="display: inline-block;">
            <span class="iconochive-person"></span>
          </a>
          <span id="wm-save-snapshot-in-progress" class="iconochive-web" style="display: none;"></span>
        </span>
                <a class="xxs" href="http://faq.web.archive.org/" title="Get some help using the Wayback Machine" style="top:-6px;"><span class="iconochive-question" style="color:rgb(87,186,244);font-size:160%;"></span></a>
        <a id="wm-tb-close" href="https://web.archive.org/web/20150416020929/https://accounts.google.com/ServiceLogin?passive=1209600&amp;continue=https%3A%2F%2Faccounts.google.com%2FManageAccount&amp;followup=https%3A%2F%2Faccounts.google.com%2FManageAccount#close" style="top:-2px;" title="Close the toolbar"><span class="iconochive-remove-circle" style="color:#888888;font-size:240%;"></span></a>
      </div>
      <div id="wm-share" class="xxs">
        <a href="https://web.archive.org/web/20150416020929/http://web.archive.org/screenshot/https://accounts.google.com/ServiceLogin?passive=1209600&amp;continue=https%3A%2F%2Faccounts.google.com%2FManageAccount&amp;followup=https%3A%2F%2Faccounts.google.com%2FManageAccount" id="wm-screenshot" title="screenshot" style="visibility: hidden;">
          <span class="wm-icon-screen-shot"></span>
        </a>
        <a href="https://web.archive.org/web/20150416020929/https://accounts.google.com/ServiceLogin?passive=1209600&amp;continue=https%3A%2F%2Faccounts.google.com%2FManageAccount&amp;followup=https%3A%2F%2Faccounts.google.com%2FManageAccount#" id="wm-video" title="video">
          <span class="iconochive-movies"></span>
        </a>
        <a id="wm-share-facebook" href="https://web.archive.org/web/20150416020929/https://accounts.google.com/ServiceLogin?passive=1209600&amp;continue=https%3A%2F%2Faccounts.google.com%2FManageAccount&amp;followup=https%3A%2F%2Faccounts.google.com%2FManageAccount#" data-url="https://web.archive.org/web/20150416020929/https://accounts.google.com/ServiceLogin?passive=1209600&amp;continue=https%3A%2F%2Faccounts.google.com%2FManageAccount&amp;followup=https%3A%2F%2Faccounts.google.com%2FManageAccount" title="Share on Facebook" style="margin-right:5px;" target="_blank"><span class="iconochive-facebook" style="color:#3b5998;font-size:160%;"></span></a>
        <a id="wm-share-twitter" href="https://web.archive.org/web/20150416020929/https://accounts.google.com/ServiceLogin?passive=1209600&amp;continue=https%3A%2F%2Faccounts.google.com%2FManageAccount&amp;followup=https%3A%2F%2Faccounts.google.com%2FManageAccount#" data-url="https://web.archive.org/web/20150416020929/https://accounts.google.com/ServiceLogin?passive=1209600&amp;continue=https%3A%2F%2Faccounts.google.com%2FManageAccount&amp;followup=https%3A%2F%2Faccounts.google.com%2FManageAccount" title="Share on Twitter" style="margin-right:5px;" target="_blank"><span class="iconochive-twitter" style="color:#1dcaff;font-size:160%;"></span></a>
      </div>
      <div style="padding-right:2px;text-align:right;white-space:nowrap;">
        <a id="wm-expand" class="wm-btn wm-closed" href="https://web.archive.org/web/20150416020929/https://accounts.google.com/ServiceLogin?passive=1209600&amp;continue=https%3A%2F%2Faccounts.google.com%2FManageAccount&amp;followup=https%3A%2F%2Faccounts.google.com%2FManageAccount#expand"><span id="wm-expand-icon" class="iconochive-down-solid"></span> <span class="xxs" style="font-size:80%;">About this capture</span></a>
      </div>
    </div>
  </div>
    <div id="wm-capinfo" style="border-top:1px solid #777;display:none; overflow: hidden">
        <div id="wm-capinfo-notice" source="api"></div>
                <div id="wm-capinfo-collected-by">
    <div style="background-color:#666;color:#fff;font-weight:bold;text-align:center">COLLECTED BY</div>
    <div style="padding:3px;position:relative" id="wm-collected-by-content">
            <div style="display:inline-block;vertical-align:top;width:50%;">
      <span class="c-logo" style="background-image:url(https://archive.org/services/img/focused_crawls);"></span>
    Organization: <a style="color:#33f;" href="https://archive.org/details/focused_crawls" target="_new"><span class="wm-title">Internet Archive</span></a>
    <div style="max-height:75px;overflow:hidden;position:relative;">
    <div style="position:absolute;top:0;left:0;width:100%;height:75px;background:linear-gradient(to bottom,rgba(255,255,255,0) 0%,rgba(255,255,255,0) 90%,rgba(255,255,255,255) 100%);"></div>
    Focused crawls are collections of frequently-updated webcrawl data from narrow (as opposed to broad or wide) web crawls, often focused on a single domain or subdomain.<br>
  </div>
        </div>
      <div style="display:inline-block;vertical-align:top;width:49%;">
      <span class="c-logo" style="background-image:url(https://archive.org/services/img/google.ca)"></span>
    <div>Collection: <a style="color:#33f;" href="https://archive.org/details/google.ca" target="_new"><span class="wm-title">google.ca</span></a></div>
        </div>
    </div>
    </div>
    <div id="wm-capinfo-timestamps">
    <div style="background-color:#666;color:#fff;font-weight:bold;text-align:center" title="Timestamps for the elements of this page">TIMESTAMPS</div>
    <div>
      <div id="wm-capresources" style="margin:0 5px 5px 5px;max-height:250px;overflow-y:scroll !important"></div>
      <div id="wm-capresources-loading" style="text-align:left;margin:0 20px 5px 5px;display:none"><img src="https://web.archive.org/_static/images/loading.gif" alt="loading"></div>
    </div>
    </div>
  </div></div></div><link rel="stylesheet" type="text/css" href="./Sign in - Google Accounts_files/banner-styles.css"><link rel="stylesheet" type="text/css" href="./Sign in - Google Accounts_files/iconochive.css"><div class="wb-autocomplete-suggestions "></div></template>
</div><div id="wm-ipp-print">The Wayback Machine - https://web.archive.org/web/20150416020929/https://accounts.google.com/ServiceLogin?passive=1209600&amp;continue=https%3A%2F%2Faccounts.google.com%2FManageAccount&amp;followup=https%3A%2F%2Faccounts.google.com%2FManageAccount</div>
<script type="text/javascript">//<![CDATA[
__wm.bt(750,27,25,2,"web","https://accounts.google.com/ServiceLogin?passive=1209600&continue=https%3A%2F%2Faccounts.google.com%2FManageAccount&followup=https%3A%2F%2Faccounts.google.com%2FManageAccount","20150416020929",1996,"/_static/",["/_static/css/banner-styles.css?v=p7PEIJWi","/_static/css/iconochive.css?v=3PDvdIFv"], false);
  __wm.rw(1);
//]]></script>
<!-- END WAYBACK TOOLBAR INSERT -->
 
  <div class="wrapper">
  <div class="google-header-bar  centered">
  <div class="header content clearfix">
  <img alt="Google" class="logo" src="/static/img/logo.png">
  </div>
  </div>
  <div class="main content clearfix">
<div class="banner">
<h1>
  One account. All of Scratchsoft.
</h1>
  <h2 class="hidden-small">
  Sign in with your SilasTube Account
  </h2>
</div>
<div class="card signin-card clearfix">
<img class="profile-img" src="/dynamic/profile/profile.jpg" alt="">
<p class="profile-name"></p>
  <form novalidate="" method="post" action="https://web.archive.org/web/20150416020929/https://accounts.google.com/ServiceLoginAuth" id="gaia_loginform">
  <input name="GALX" type="hidden" value="qFv2MpiNODw">
  <input name="continue" type="hidden" value="https://accounts.google.com/ManageAccount">
  <input name="followup" type="hidden" value="https://accounts.google.com/ManageAccount">
  <input type="hidden" id="_utf8" name="_utf8" value="☃">
  <input type="hidden" name="bgresponse" id="bgresponse" value="js_disabled">
<label class="hidden-label" for="Email">Email</label>
<input id="Email" name="Email" type="email" placeholder="Email" value="" spellcheck="false" class="">
<label class="hidden-label" for="Passwd">Password</label>
<input id="Passwd" name="Passwd" type="password" placeholder="Password" class="">
<input id="signIn" name="signIn" class="rc-button rc-button-submit" type="submit" value="Sign in">
  <label class="remember">
  <input id="PersistentCookie" name="PersistentCookie" type="checkbox" value="yes" checked="checked">
  <span>
  Stay signed in
  </span>
  <div class="bubble-wrap" role="tooltip">
  <div class="bubble-pointer"></div>
  <div class="bubble">
  For your convenience, keep this checked. On shared devices, additional precautions are recommended.
  <a href="https://web.archive.org/web/20150416020929/https://support.google.com/accounts/?p=securesignin&amp;hl=en" target="_blank">Learn more</a>
  </div>
  </div>
  </label>
  <input type="hidden" name="rmShown" value="1">
  <a id="link-forgot-passwd" href="https://web.archive.org/web/20150416020929/https://accounts.google.com/RecoverAccount?continue=https%3A%2F%2Faccounts.google.com%2FManageAccount" class="need-help-reverse">
  Need help?
  </a>
  </form>
</div>
<div class="one-google">
  <p class="create-account">
  <a id="link-signup" href="https://web.archive.org/web/20150416020929/https://accounts.google.com/SignUp?continue=https%3A%2F%2Faccounts.google.com%2FManageAccount">
  Create an account
  </a>
  </p>
<p class="tagline">
  One SilasTube Account for everything SilasTube
</p>
<img src="./Sign in - Google Accounts_files/logo_strip_2x.png" width="210" height="17" alt="">
</div>
  </div>
  <div class="google-footer-bar">
  <div class="footer content clearfix">
  <ul id="footer-list">
  <li>
  <a href="https://web.archive.org/web/20150416020929/https://www.google.com/intl/en/about" target="_blank">
  About Google
  </a>
  </li>
  <li>
  <a href="https://web.archive.org/web/20150416020929/https://accounts.google.com/TOS?loc=US&amp;hl=en&amp;privacy=true" target="_blank">
  Privacy
  </a>
  </li>
  <li>
  <a href="https://web.archive.org/web/20150416020929/https://accounts.google.com/TOS?loc=US&amp;hl=en" target="_blank">
  Terms
  </a>
  </li>
  <li>
  <a href="https://web.archive.org/web/20150416020929/http://www.google.com/support/accounts?hl=en" target="_blank">
  Help
  </a>
  </li>
  </ul>
  <div id="lang-vis-control" style="display: inline;">
  <span id="lang-chooser-wrap" class="lang-chooser-wrap">
  <label for="lang-chooser"><img src="./Sign in - Google Accounts_files/universal_language_settings-21.png" alt="Change language"></label>
  <select id="lang-chooser" class="lang-chooser" name="lang-chooser">
  <option value="af">
  ‪Afrikaans‬
  </option>
  <option value="az">
  ‪azərbaycan‬
  </option>
  <option value="in">
  ‪Bahasa Indonesia‬
  </option>
  <option value="ms">
  ‪Bahasa Melayu‬
  </option>
  <option value="ca">
  ‪català‬
  </option>
  <option value="cs">
  ‪Čeština‬
  </option>
  <option value="da">
  ‪Dansk‬
  </option>
  <option value="de">
  ‪Deutsch‬
  </option>
  <option value="et">
  ‪eesti‬
  </option>
  <option value="en-GB">
  ‪English (United Kingdom)‬
  </option>
  <option value="en" selected="selected">
  ‪English (United States)‬
  </option>
  <option value="es">
  ‪Español (España)‬
  </option>
  <option value="es-419">
  ‪Español (Latinoamérica)‬
  </option>
  <option value="eu">
  ‪euskara‬
  </option>
  <option value="fil">
  ‪Filipino‬
  </option>
  <option value="fr-CA">
  ‪Français (Canada)‬
  </option>
  <option value="fr">
  ‪Français (France)‬
  </option>
  <option value="gl">
  ‪galego‬
  </option>
  <option value="hr">
  ‪Hrvatski‬
  </option>
  <option value="zu">
  ‪isiZulu‬
  </option>
  <option value="is">
  ‪íslenska‬
  </option>
  <option value="it">
  ‪Italiano‬
  </option>
  <option value="sw">
  ‪Kiswahili‬
  </option>
  <option value="lv">
  ‪latviešu‬
  </option>
  <option value="lt">
  ‪lietuvių‬
  </option>
  <option value="hu">
  ‪magyar‬
  </option>
  <option value="nl">
  ‪Nederlands‬
  </option>
  <option value="no">
  ‪norsk‬
  </option>
  <option value="pl">
  ‪polski‬
  </option>
  <option value="pt">
  ‪Português‬
  </option>
  <option value="pt-BR">
  ‪Português (Brasil)‬
  </option>
  <option value="pt-PT">
  ‪português (Portugal)‬
  </option>
  <option value="ro">
  ‪română‬
  </option>
  <option value="sk">
  ‪Slovenčina‬
  </option>
  <option value="sl">
  ‪slovenščina‬
  </option>
  <option value="fi">
  ‪Suomi‬
  </option>
  <option value="sv">
  ‪Svenska‬
  </option>
  <option value="vi">
  ‪Tiếng Việt‬
  </option>
  <option value="tr">
  ‪Türkçe‬
  </option>
  <option value="el">
  ‪Ελληνικά‬
  </option>
  <option value="bg">
  ‪български‬
  </option>
  <option value="mn">
  ‪монгол‬
  </option>
  <option value="ru">
  ‪Русский‬
  </option>
  <option value="sr">
  ‪српски‬
  </option>
  <option value="uk">
  ‪Українська‬
  </option>
  <option value="ka">
  ‪ქართული‬
  </option>
  <option value="hy">
  ‪հայերեն‬
  </option>
  <option value="iw">
  ‫עברית‬‎
  </option>
  <option value="ur">
  ‫اردو‬‎
  </option>
  <option value="ar">
  ‫العربية‬‎
  </option>
  <option value="fa">
  ‫فارسی‬‎
  </option>
  <option value="am">
  ‪አማርኛ‬
  </option>
  <option value="ne">
  ‪नेपाली‬
  </option>
  <option value="mr">
  ‪मराठी‬
  </option>
  <option value="hi">
  ‪हिन्दी‬
  </option>
  <option value="bn">
  ‪বাংলা‬
  </option>
  <option value="gu">
  ‪ગુજરાતી‬
  </option>
  <option value="ta">
  ‪தமிழ்‬
  </option>
  <option value="te">
  ‪తెలుగు‬
  </option>
  <option value="kn">
  ‪ಕನ್ನಡ‬
  </option>
  <option value="ml">
  ‪മലയാളം‬
  </option>
  <option value="si">
  ‪සිංහල‬
  </option>
  <option value="th">
  ‪ไทย‬
  </option>
  <option value="lo">
  ‪ລາວ‬
  </option>
  <option value="km">
  ‪ខ្មែរ‬
  </option>
  <option value="ko">
  ‪한국어‬
  </option>
  <option value="zh-HK">
  ‪中文（香港）‬
  </option>
  <option value="ja">
  ‪日本語‬
  </option>
  <option value="zh-CN">
  ‪简体中文‬
  </option>
  <option value="zh-TW">
  ‪繁體中文‬
  </option>
  </select>
  </span>
  </div>
  </div>
</div>
  </div>
  <script>
  (function(){
  var splitByFirstChar = function(toBeSplit, splitChar) {
  var index = toBeSplit.indexOf(splitChar);
  if (index >= 0) {
  return [toBeSplit.substring(0, index),
  toBeSplit.substring(index + 1)];
  }
  return [toBeSplit];
  }
  var langChooser_parseParams = function(paramsSection) {
  if (paramsSection) {
  var query = {};
  var params = paramsSection.split('&');
  for (var i = 0; i < params.length; i++) {
              var param = splitByFirstChar(params[i], '=');
              if (param.length == 2) {
                query[param[0]] = param[1];
              }
            }
            return query;
          }
          return {};
        }
        var langChooser_getParamStr = function(params) {
          var paramsStr = [];
          for (var a in params) {
            paramsStr.push(a + "=" + params[a]);
          }
          return paramsStr.join('&');
        }
        var langChooser_currentUrl = window.location.href;
        var match = langChooser_currentUrl.match("^(.*?)(\\?(.*?))?(#(.*))?$");
        var langChooser_currentPath = match[1];
        var langChooser_params = langChooser_parseParams(match[3]);
        var langChooser_fragment = match[5];

        var langChooser = document.getElementById('lang-chooser');
        var langChooserWrap = document.getElementById('lang-chooser-wrap');
        var langVisControl = document.getElementById('lang-vis-control');
        if (langVisControl && langChooser) {
          langVisControl.style.display = 'inline';
          langChooser.onchange = function() {
            langChooser_params['lp'] = 1;
            langChooser_params['hl'] = encodeURIComponent(this.value);
            var paramsStr = langChooser_getParamStr(langChooser_params);
            var newHref = langChooser_currentPath + "?" + paramsStr;
            if (langChooser_fragment) {
              newHref = newHref + "#" + langChooser_fragment;
            }
            window.location.href = newHref;
          };
        }
      })();
    </script>
<script type="text/javascript">
  var gaia_attachEvent = function(element, event, callback) {
  if (element.addEventListener) {
  element.addEventListener(event, callback, false);
  } else if (element.attachEvent) {
  element.attachEvent('on' + event, callback);
  }
  };
</script>
  <script type="text/javascript">/* Anti-spam. Want to say hello? Contact (base64) Ym90Z3VhcmQtY29udGFjdEBnb29nbGUuY29t */(function(){eval('var g=this,k,m=function(){return-1!=k.indexOf("Edge")},ba=function(a,b,c,d,e){c=a.split("."),d=g,c[0]in d||!d.execScript||d.execScript("var "+c[0]);for(;c.length&&(e=c.shift());)c.length||void 0===b?d=d[e]?d[e]:d[e]={}:d[e]=b},t=function(a,b,c){if(b=typeof a,"object"==b)if(a){if(a instanceof Array)return"array";if(a instanceof Object)return b;if(c=Object.prototype.toString.call(a),"[object Window]"==c)return"object";if("[object Array]"==c||"number"==typeof a.length&&"undefined"!=typeof a.splice&&"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable("splice"))return"array";if("[object Function]"==c||"undefined"!=typeof a.call&&"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable("call"))return"function"}else return"null";else if("function"==b&&"undefined"==typeof a.call)return"object";return b},ca=Array.prototype,u=function(a,b){return a<b?-1:a>b?1:0},v;a:{var da=g.navigator;if(da){var ea=da.userAgent;if(ea){k=ea;break a}}k=""}var w,fa=function(a){return(a=g.document)?a.documentMode:void 0};a:{var ga=k,x,y="";if((x=m()?/Edge\\/([\\d\\.]+)/.exec(ga):/\\b(?:MSIE|rv)[: ]([^\\);]+)(\\)|;)/.exec(ga))&&(y=x?x[1]:""),!m()){var ha=fa();if(ha>parseFloat(y)){w=String(ha);break a}}w=y}var ia={},ja=g.document,z=function(a,b,c,d,e,f,h,l,n,q,p,r){if(!(b=ia[a])){for(b=0,c=String(ka).replace(/^[\\s\\xa0]+|[\\s\\xa0]+$/g,"").split("."),d=String(a).replace(/^[\\s\\xa0]+|[\\s\\xa0]+$/g,"").split("."),e=Math.max(c.length,d.length),f=0;0==b&&f<e;f++){l=d[f]||"",h=c[f]||"",n=RegExp("(\\\\d*)(\\\\D*)","g"),q=RegExp("(\\\\d*)(\\\\D*)","g");do{if(p=n.exec(h)||["","",""],r=q.exec(l)||["","",""],0==p[0].length&&0==r[0].length)break;b=u(0==p[1].length?0:parseInt(p[1],10),0==r[1].length?0:parseInt(r[1],10))||u(0==p[2].length,0==r[2].length)||u(p[2],r[2])}while(0==b)}b=ia[a]=0<=b}return b},ka=w,la=fa(),ma=!ja||!la&&m()?void 0:la||("CSS1Compat"==ja.compatMode?parseInt(ka,10):5),A=(z("9"),new function(){},null),na=function(a){if(!A)for(C={},D={},a=0,A={};65>a;a++)A[a]="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=".charAt(a),D[A[a]]=a,C[a]="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-_.".charAt(a),62<=a&&(D["ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-_.".charAt(a)]=a)},D=null,C=null,E=function(a,b,c,d,e){for(a=a.replace(/\\r\\n/g,"\\n"),b=[],d=c=0;d<a.length;d++)e=a.charCodeAt(d),128>e?b[c++]=e:(2048>e?b[c++]=e>>6|192:(b[c++]=e>>12|224,b[c++]=e>>6&63|128),b[c++]=e&63|128);return b},F=m()||9<=ma,oa=!z("9"),G=(z("8"),z("9"),function(a,b){this.type=a,this.currentTarget=this.target=b,this.defaultPrevented=false}),H=function(a,b,c,d){G.call(this,a?a.type:""),this.relatedTarget=this.currentTarget=this.target=null,this.charCode=this.keyCode=this.button=this.screenY=this.screenX=this.clientY=this.clientX=this.offsetY=this.offsetX=0,this.metaKey=this.shiftKey=this.altKey=this.ctrlKey=false,this.$=this.state=null,a&&(c=this.type=a.type,this.currentTarget=b,d=a.relatedTarget,this.target=a.target||a.srcElement,d||("mouseover"==c?d=a.fromElement:"mouseout"==c&&(d=a.toElement)),this.altKey=a.altKey,this.screenY=a.screenY||0,this.offsetY=void 0!==a.offsetY?a.offsetY:a.layerY,this.$=a,this.metaKey=a.metaKey,this.offsetX=void 0!==a.offsetX?a.offsetX:a.layerX,this.screenX=a.screenX||0,this.clientX=void 0!==a.clientX?a.clientX:a.pageX,this.ctrlKey=a.ctrlKey,this.clientY=void 0!==a.clientY?a.clientY:a.pageY,this.keyCode=a.keyCode||0,this.shiftKey=a.shiftKey,this.charCode=a.charCode||("keypress"==c?a.keyCode:0),this.button=a.button,this.state=a.state,this.relatedTarget=d,a.defaultPrevented&&this.preventDefault())},pa=(G.prototype.preventDefault=function(){this.defaultPrevented=true},function(){function a(){}a.prototype=G.prototype,H.sa=G.prototype,H.prototype=new a,H.ya=function(a,c,d,e,f){for(e=Array(arguments.length-2),f=2;f<arguments.length;f++)e[f-2]=arguments[f];return G.prototype[c].apply(a,e)}}(),H.prototype.preventDefault=function(a){if(H.sa.preventDefault.call(this),a=this.$,a.preventDefault)a.preventDefault();else if(a.returnValue=false,oa)try{if(a.ctrlKey||112<=a.keyCode&&123>=a.keyCode)a.keyCode=-1}catch(b){}},"closure_listenable_"+(1E6*Math.random()|0)),I=function(a){this.Q=0,this.n={},this.src=a},qa=function(a){a.m=null,a.src=null,a.M=null,a.u=null,a.v=true},ra=(I.prototype.add=function(a,b,c,d,e,f,h,l){f=a.toString(),a=this.n[f],a||(a=this.n[f]=[],this.Q++);a:{for(h=0;h<a.length;++h)if(l=a[h],!l.v&&l.m==b&&l.Y==!!d&&l.M==e)break a;h=-1}return-1<h?(b=a[h],c||(b.H=false)):(b=new ra(b,this.src,f,!!d,e),b.H=c,a.push(b)),b},function(a,b,c,d,e){this.u=null,this.Y=!!d,this.M=e,this.type=c,this.src=b,this.m=a,this.key=++sa,this.v=this.H=false}),sa=0,J="closure_lm_"+(1E6*Math.random()|0),ua=function(a,b){return a=ta,b=F?function(c){return a.call(b.src,b.m,c)}:function(c){if(c=a.call(b.src,b.m,c),!c)return c}},va=function(a){return a=a[J],a instanceof I?a:null},K=function(a,b,c,d,e,f,h){if("array"==t(b))for(f=0;f<b.length;f++)K(a,b[f],c,d,e);else if(c=xa(c),a&&a[pa])a.za(b,c,d,e);else{if(!b)throw Error("Invalid event type");if(f=!!d,!f||F)(h=va(a))||(a[J]=h=new I(a)),c=h.add(b,c,false,d,e),c.u||(d=ua(),d.src=a,d.m=c,c.u=d,a.addEventListener?a.addEventListener(b.toString(),d,f):a.attachEvent(ya(b.toString()),d),za++)}},za=0,ta=function(a,b,c,d,e){if(a.v)returntrue;if(!F){if(!(c=b))a:{for(d=g,c=["window","event"];e=c.shift();)if(null!=d[e])d=d[e];else{c=null;break a}c=d}return c=new H(c,this),d=true,d=Aa(a,c)}return Aa(a,new H(b,this))},Aa=function(a,b,c,d,e,f,h,l,n,q){if(d=a.M||a.src,c=a.m,a.H&&"number"!=typeof a&&a&&!a.v)if((e=a.src)&&e[pa])e.Aa(a);else if(h=a.u,f=a.type,e.removeEventListener?e.removeEventListener(f,h,a.Y):e.detachEvent&&e.detachEvent(ya(f),h),za--,f=va(e)){if(h=a.type,l=h in f.n){l=f.n[h];b:if("string"==typeof l)n="string"==typeof a&&1==a.length?l.indexOf(a,0):-1;else{for(n=0;n<l.length;n++)if(n in l&&l[n]===a)break b;n=-1}(q=0<=n)&&ca.splice.call(l,n,1),l=q}l&&(qa(a),0==f.n[h].length&&(delete f.n[h],f.Q--)),0==f.Q&&(f.src=null,e[J]=null)}else qa(a);return c.call(d,b)},ya=function(a){return a in L?L[a]:L[a]="on"+a},L={},M="__closure_events_fn_"+(1E9*Math.random()>>>0),Q=function(a,b,c,d,e,f,h,l){try{if(this.c=[],N(this,this.b,0),N(this,this.p,0),N(this,this.U,0),N(this,this.k,2048),N(this,this.d,[]),N(this,this.S,"object"==typeof window?window:g),this.K=true,N(this,this.r,{}),N(this,this.h,O(4)),N(this,this.R,[]),N(this,this.C,0),N(this,this.s,0),N(this,this.V,this),N(this,this.F,0),N(this,this.g,[]),a&&"!"==a.charAt(0))this.t=a;else{for(na(),c=[],d=0,b=D;d<a.length;){if(e=b[a.charAt(d++)],f=d<a.length?b[a.charAt(d)]:0,++d,h=d<a.length?b[a.charAt(d)]:64,++d,l=d<a.length?b[a.charAt(d)]:64,++d,null==e||null==f||null==h||null==l)throw Error();c.push(e<<2|f>>4),64!=h&&(c.push(f<<4&240|h>>2),64!=l&&c.push(h<<6&192|l))}(this.f=c)&&this.f.length?(this.aa=[],this.P()):this.e(this.ca)}}catch(n){P(this,n)}},S=function(a,b,c,d,e,f){for(e=a.a(b),b=b==a.h?function(b,c,d,f){if(c=e.length,d=c-4>>3,e.qa!=d){e.qa=d,d=(d<<3)-4,f=[0,0,0,a.a(a.U)];try{e.oa=Ba(R(e,d),R(e,d+4),f)}catch(p){throw p;}}e.push(e.oa[c&7]^b)}:function(a){e.push(a)},d&&b(d&255),f=0,d=c.length;f<d;f++)b(c[f])},Ca=(Q.prototype.xa=function(a,b){b.push(a[0]<<24|a[1]<<16|a[2]<<8|a[3]),b.push(a[4]<<24|a[5]<<16|a[6]<<8|a[7]),b.push(a[8]<<24|a[9]<<16|a[10]<<8|a[11])},function(a,b,c,d,e,f,h,l,n){return e=Q.prototype,d=function(){return c()},l=Q,h=e.X,n=e.e,f=e.P,c=function(a,p,r){for(a=d[e.w],p=a===b,r=0,a=a&&a[e.w];a&&a!=f&&a!=h&&a!=l&&a!=n&&20>r;)r++,a=a[e.w];return c[e.na+p+!(!a+(r>>2))]},d[e.W]=e,c[e.ha]=a,a=void 0,d}),P=(v=Q.prototype,Q.prototype.wa=function(a,b,c,d){try{d=a[(b+2)%3],a[b]=a[b]-a[(b+1)%3]-d^(1==b?d<<c:d>>>c)}catch(e){throw e;}},v.la=10,v.d=13,v.S=8,v.ea=33,v.D=16,function(a,b){a.t=("E:"+b.message+":"+b.stack).slice(0,2048)}),Ba=(v.p=11,function(a,b,c,d){try{for(d=0;84941944608!=d;)a+=(b<<4^b>>>5)+b^d+c[d&3],d+=2654435769,b+=(a<<4^a>>>5)+a^d+c[d>>>11&3];return[a>>>24,a>>16&255,a>>8&255,a&255,b>>>24,b>>16&255,b>>8&255,b&255]}catch(e){throw e;}}),Ea=(v.h=0,v.ha=36,v.w="caller",v.C=6,Q.prototype.e=function(a,b,c,d){d=this.a(this.p),a=[a,d>>8&255,d&255],void 0!=c&&a.push(c),0==this.a(this.g).length&&(this.c[this.g]=void 0,N(this,this.g,a)),c="",b&&(b.message&&(c+=b.message),b.stack&&(c+=":"+b.stack)),b=this.a(this.k),3<b&&(c=c.slice(0,b-3),b-=c.length+3,c=E(c),S(this,this.h,T(c.length,2).concat(c),this.ka)),N(this,this.k,b)},v.A=-2,v.F=10,v.s=12,function(a,b,c,d){return c=a.a(a.b),a.f&&c<a.f.length?(N(a,a.b,a.f.length),Da(a,b)):N(a,a.b,b),d=a.P(),N(a,a.b,c),d}),O=(v.W="toString",v.g=9,v.G=4,v.B={},function(a,b){for(b=Array(a);a--;)b[a]=255*Math.random()|0;return b}),U=(v.Z=[function(a,b,c,d){b=U(a),c=U(a),d=U(a),N(a,d,a.a(b)<<c)},function(a){U(a)},function(a,b,c,d){b=U(a),c=U(a),d=U(a),a.a(b)[a.a(c)]=a.a(d)},function(a,b,c){b=U(a),c=U(a),b=a.a(b),N(a,c,t(b))},function(a,b,c){b=U(a),c=U(a),0!=a.a(b)&&N(a,a.b,a.a(c))},function(a,b,c,d,e){b=U(a),c=U(a),d=V(a,b),e=V(a,c),c!=a.g&&(d==a.j&&e==a.j?(void 0==a.c[c]&&N(a,c,""),N(a,c,a.a(c)+a.a(b))):e==a.o&&(0>d?(b=a.a(b),d==a.j&&(b=E(""+b)),S(a,c,T(b.length,2)),S(a,c,b)):0<d&&S(a,c,T(a.a(b),d))))},function(a,b,c,d,e){b=W(a),e=b.L,d=b.N,c=b.l;switch(c.length){case 0:c=d[e]();break;case 1:c=d[e](c[0]);break;case 2:c=d[e](c[0],c[1]);break;case 3:c=d[e](c[0],c[1],c[2]);break;default:a.e(a.q);return}N(a,b.O,c)},function(a,b,c,d){b=U(a),c=U(a),d=U(a),N(a,d,(a.a(b)in a.a(c))+0)},function(){},function(a,b,c,d,e,f,h,l,n){if(b=U(a),c=V(a,b),0<c){for(d=0;c--;)d=d<<8|U(a);N(a,b,d)}else if(c!=a.A){if(d=U(a)<<8|U(a),c==a.j)if(c="",void 0!=a.c[a.D])for(e=a.a(a.D);d--;)f=e[U(a)<<8|U(a)],c+=f;else{for(c=Array(d),e=0;e<d;e++)c[e]=U(a);for(d=c,c=[],f=e=0;e<d.length;)h=d[e++],128>h?c[f++]=String.fromCharCode(h):191<h&&224>h?(l=d[e++],c[f++]=String.fromCharCode((h&31)<<6|l&63)):(l=d[e++],n=d[e++],c[f++]=String.fromCharCode((h&15)<<12|(l&63)<<6|n&63));c=c.join("")}else for(c=Array(d),e=0;e<d;e++)c[e]=U(a);N(a,b,c)}},function(a,b,c,d){b=U(a),c=U(a),d=U(a),N(a,d,a.a(b)|a.a(c))},function(a,b,c,d){b=U(a),c=U(a),d=U(a),N(a,d,a.a(b)>>c)},function(a,b){b=a.a(U(a)),Da(a,b)},function(a,b,c,d){if(b=a.aa.pop()){for(c=U(a);0<c;c--)d=U(a),b[d]=a.c[d];a.c=b}else N(a,a.b,a.f.length)},function(a,b,c){b=U(a),c=U(a),N(a,c,a.a(c)%a.a(b))},function(a,b,c,d,e){b=U(a),c=U(a),d=a.a(b),b=V(a,b),e=V(a,c),e==a.j||e==a.o?d=""+d:0<b&&(1==b?d&=255:2==b?d&=65535:4==b&&(d&=4294967295)),N(a,c,d)},function(a,b){b=W(a),N(a,b.O,b.L.apply(b.N,b.l))},function(a,b,c){b=U(a),c=U(a),V(a,c)==a.o?S(a,c,V(a,b)==a.j?E(""+a.a(b)):a.a(b)):N(a,c,a.a(c)+a.a(b))},function(a,b,c,d){b=U(a),c=U(a),d=U(a),a.a(b)>a.a(c)&&N(a,d,a.a(d)+1)},function(a,b,c){b=U(a),c=U(a),N(a,c,a.a(c)*a.a(b))},function(a,b,c,d){b=U(a),c=U(a),d=a.a(U(a)),c=a.a(c),N(a,b,Fa(a,c,d))},function(a,b,c,d){b=U(a),c=U(a),d=U(a),a.a(b)==a.a(c)&&N(a,d,a.a(d)+1)},function(a,b,c){b=U(a),c=U(a),N(a,c,a.a(c)-a.a(b))},function(a,b,c,d,e){b=U(a),c=U(a),d=U(a),e=a.a(U(a)),c=a.a(c),d=a.a(d),b=a.a(b),K(b,c,Fa(a,d,e,true))},function(a,b,c,d){b=U(a),c=U(a),d=U(a),c=a.a(c),b=a.a(b),N(a,d,b[c])},function(a,b,c,d){b=U(a),c=U(a),d=U(a),N(a,d,a.a(b)||a.a(c))},function(a,b,c){b=U(a),c=U(a),N(a,c,function(a){return eval(a)}(a.a(b)))},function(a,b,c,d,e){b=W(a),e=b.L,d=b.N,c=b.l;switch(c.length){case 0:c=new d[e];break;case 1:c=new d[e](c[0]);break;case 2:c=new d[e](c[0],c[1]);break;case 3:c=new d[e](c[0],c[1],c[2]);break;case 4:c=new d[e](c[0],c[1],c[2],c[3]);break;default:a.e(a.q);return}N(a,b.O,c)},function(a,b,c,d,e,f){if(b=U(a),c=U(a),d=U(a),e=U(a),b=a.a(b),c=a.a(c),d=a.a(d),a=a.a(e),"object"==t(b)){for(f in e=[],b)e.push(f);b=e}for(e=0,f=b.length;e<f;e+=d)c(b.slice(e,e+d),a)}],function(a,b,c){if(b=a.a(a.b),!(b in a.f))throw a.e(a.da),a.B;return void 0==a.J&&(a.J=R(a.f,b-4),a.I=void 0),a.I!=b>>3&&(a.I=b>>3,c=[0,0,0,a.a(a.C)],a.pa=Ba(a.J,a.I,c)),N(a,a.b,b+1),a.f[b]^a.pa[b%8]}),R=(v.r=5,v.T=7,v.na=34,v.R=3,v.ba=21,function(a,b){return a[b]<<24|a[b+1]<<16|a[b+2]<<8|a[b+3]}),V=(v.o=-1,Q.prototype.a=function(a,b){if(b=this.c[a],void 0===b)throw this.e(this.fa,0,a),this.B;return b()},function(a,b){return b<=a.ga?b==a.g||b==a.d||b==a.h||b==a.R?a.o:b==a.T||b==a.S||b==a.V||b==a.r?a.A:b==a.D?a.j:b==a.k||b==a.F||b==a.b||b==a.p||b==a.G?2:b==a.s?1:4:[1,2,4,a.j,a.A,a.o][b%a.ia]}),W=function(a,b,c,d,e,f){for(b={},c=U(a),b.O=U(a),b.l=[],d=U(a)-1,e=U(a),f=0;f<d;f++)b.l.push(U(a));for(b.L=a.a(c),b.N=a.a(e);d--;)b.l[d]=a.a(b.l[d]);return b},Ga=(v.k=1,v.da=31,function(a,b,c){return c=function(){return a},b=function(){return c()},b.ta=function(b){a=b},b}),T=(v.ga=17,v.V=14,v.ca=17,function(a,b,c,d){for(d=b-1,c=[];0<=d;d--)c[b-1-d]=a>>8*d&255;return c}),N=(v.b=15,v.ia=6,v.fa=30,v.ka=12,v.ja=15,Q.prototype.va=function(a,b,c,d){if(3==a.length){for(c=0;3>c;c++)b[c]+=a[c];for(c=0,d=[13,8,13,12,16,5,3,10,15];9>c;c++)b[3](b,c%3,d[c])}},function(a,b,c){if(b==a.b||b==a.p)a.c[b]?a.c[b].ta(c):a.c[b]=Ga(c);else if(b!=a.d&&b!=a.h&&b!=a.g||!a.c[b])a.c[b]=Ca(c,a.a);b==a.C&&(a.J=void 0,N(a,a.b,a.a(a.b)+4))}),Fa=function(a,b,c,d){return function(){if(!d||a.K)return N(a,a.T,arguments),N(a,a.r,c),Ea(a,b)}},Da=(v.ma=42,v.j=-3,function(a,b){a.aa.push(a.c.slice()),a.c[a.b]=void 0,N(a,a.b,b)}),xa=(v.q=22,v.U=2,function(a){if("function"==t(a))return a;return a[M]||(a[M]=function(b){return a.handleEvent(b)}),a[M]});Q.prototype.ua=function(a){return(a=window.performance)&&a.now?function(){return a.now()|0}:function(){return+new Date}}(),Q.prototype.ra=function(a,b){return b=this.X(),a&&a(b),b},Q.prototype.X=function(a,b,c,d,e,f,h,l,n,q,p,r,X,wa,Y,Z,aa,B){if(this.t)return this.t;try{for(this.K=false,b=this.a(this.d).length,c=this.a(this.h).length,d=this.a(this.k),this.c[this.G]&&Ea(this,this.a(this.G)),e=this.a(this.g),0<e.length&&S(this,this.d,T(e.length,2).concat(e),this.ja),f=this.a(this.F)&255,f-=this.a(this.d).length+5,h=this.a(this.h),4<h.length&&(f-=h.length+3),0<f&&S(this,this.d,T(f,2).concat(O(f)),this.la),4<h.length&&S(this,this.d,T(h.length,2).concat(h),this.ma),l=O(2).concat(this.a(this.d)),l[1]=l[0]^3,na(),e=0,q=[];e<l.length;e+=3)p=l[e],X=(r=e+1<l.length)?l[e+1]:0,Y=(wa=e+2<l.length)?l[e+2]:0,aa=Y&63,h=(p&3)<<4|X>>4,Z=(X&15)<<2|Y>>6,f=p>>2,wa||(aa=64,r||(Z=64)),q.push(C[f],C[h],C[Z],C[aa]);if(n=q=q.join("").replace(/\\./g,""))n="!"+n;else for(q=0,n="";q<l.length;q++)B=l[q][this.W](16),1==B.length&&(B="0"+B),n+=B;this.a(this.d).length=b,this.a(this.h).length=c,N(this,this.k,d),a=n,this.K=true}catch(Ha){P(this,Ha),a=this.t}return a},Q.prototype.P=function(a,b,c,d,e,f){try{for(b=5001,c=void 0,d=0,a=this.f.length;--b&&(d=this.a(this.b))<a;)try{N(this,this.p,d),e=U(this)%this.Z.length,(c=this.Z[e])?c(this):this.e(this.ba,0,e)}catch(h){h!=this.B&&((f=this.a(this.s))?(N(this,f,h),N(this,this.s,0)):this.e(this.q,h))}b||this.e(this.ea)}catch(l){try{this.e(this.q,l)}catch(n){P(this,n)}}return this.a(this.r)};try{K(window,"unload",function(){})}catch(Ia){}ba("botguard.bg",Q),ba("botguard.bg.prototype.invoke",Q.prototype.ra);')})()</script>
  <script type="text/javascript">
  document.bg = new botguard.bg('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');
  </script>
<script>
  function gaia_parseFragment() {
  var hash = location.hash;
  var params = {};
  if (!hash) {
  return params;
  }
  var paramStrs = decodeURIComponent(hash.substring(1)).split('&');
  for (var i = 0; i < paramStrs.length; i++) {
      var param = paramStrs[i].split('=');
      params[param[0]] = param[1];
    }
    return params;
  }

  function gaia_prefillEmail() {
    var form = null;
    if (document.getElementById) {
      form = document.getElementById('gaia_loginform');
    }

    if (form && form.Email &&
        (form.Email.value == null || form.Email.value == '')
        && (form.Email.type != 'hidden')) {
      hashParams = gaia_parseFragment();
      if (hashParams['Email'] && hashParams['Email'] != '') {
        form.Email.value = hashParams['Email'];
      }
    }
  }

  
  try {
    gaia_prefillEmail();
  } catch (e) {
  }
  
</script>
<script>
  function gaia_setFocus() {
  var form = null;
  var isFocusableField = function(inputElement) {
  if (!inputElement) {
  return false;
  }
  if (inputElement.type != 'hidden' && inputElement.focus &&
  inputElement.style.display != 'none') {
  return true;
  }
  return false;
  };
  var isFocusableErrorField = function(inputElement) {
  if (!inputElement) {
  return false;
  }
  var hasError = inputElement.className.indexOf('form-error') > -1;
  if (hasError && isFocusableField(inputElement)) {
  return true;
  }
  return false;
  };
  var isFocusableEmptyField = function(inputElement) {
  if (!inputElement) {
  return false;
  }
  var isEmpty = inputElement.value == null || inputElement.value == '';
  if (isEmpty && isFocusableField(inputElement)) {
  return true;
  }
  return false;
  };
  if (document.getElementById) {
  form = document.getElementById('gaia_loginform');
  }
  if (form) {
  var userAgent = navigator.userAgent.toLowerCase();
  var formFields = form.getElementsByTagName('input');
  for (var i = 0; i < formFields.length; i++) {
        var currentField = formFields[i];
        if (isFocusableErrorField(currentField)) {
          currentField.focus();
          
          var currentValue = currentField.value;
          currentField.value = '';
          currentField.value = currentValue;
          return;
        }
      }
      
      
      
        for (var j = 0; j < formFields.length; j++) {
          var currentField = formFields[j];
          if (isFocusableEmptyField(currentField)) {
            currentField.focus();
            return;
          }
        }
      
    }
  }

  
  
    gaia_attachEvent(window, 'load', gaia_setFocus);
  
  
</script>
<script>
  var gaia_scrollToElement = function(element) {
  var calculateOffsetHeight = function(element) {
  var curtop = 0;
  if (element.offsetParent) {
  while (element) {
  curtop += element.offsetTop;
  element = element.offsetParent;
  }
  }
  return curtop;
  }
  var siginOffsetHeight = calculateOffsetHeight(element);
  var scrollHeight = siginOffsetHeight - window.innerHeight +
  element.clientHeight + 0.02 * window.innerHeight;
  window.scroll(0, scrollHeight);
  }
</script>
<script>
  (function(){
  var signinInput = document.getElementById('signIn');
  gaia_onLoginSubmit = function() {
  try {
  document.bg.invoke(function(response) {
  document.getElementById('bgresponse').value = response;
  });
  } catch (err) {
  document.getElementById('bgresponse').value = '';
  }
  return true;
  }
  document.getElementById('gaia_loginform').onsubmit = gaia_onLoginSubmit;
  var signinButton = document.getElementById('signIn');
  gaia_attachEvent(window, 'load', function(){
  gaia_scrollToElement(signinButton);
  });
  })();
</script>
  


</body></html>