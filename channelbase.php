<?php require($_SERVER['DOCUMENT_ROOT'] . "/static/important/config.inc.php"); ?>

<?php
require 'static/important/config.inc.php';

  $query = "SELECT * FROM users WHERE username = ?";
$stmt = $mysqli->prepare($query);
$stmt->bind_param("s", $_GET['username']);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $_user = $result->fetch_assoc();

    $_user['subscribers'] = $_user['subscribers'];
    $_user['videos'] = $_user['videos'];
    $_user['videos_watched'] = $_user['videos_watched'];
    $_user['registeredon'] = $_user['registeredon'];
    $_user['profile'] = $_user['profile'];
    $_user['aboutme'] = $_user['aboutme'];
    $_user['featured_vid'] = $_user['featured_vid'];
    $_user['recent_vid'] = $_user['recent_vid'];
    $_user['channel_color'] = $_user['channel_color'];
    $_user['channel_bg'] = $_user['channel_bg'];
    $_user['brandingpic'] = $_user['brandingpic'];
    $_user['brandingurl'] = $_user['brandingurl'];
    $_user['email'] = $_user['email'];
}
?>




<link rel="stylesheet" type="text/css" href="/st/css/base_all-vfl66248.css">
<?php require($_SERVER['DOCUMENT_ROOT'] . "/static/mod/header.php"); ?>
<!-- saved from url=(0074)https://web.archive.org/web/20100818174042/http://www.youtube.com/user#p/a -->
<html lang="en" dir="ltr" xmlns:og="http://opengraphprotocol.org/schema/" style="--wm-toolbar-height: 1px;"><!-- machid: sWkFSZzctYUFHdmd4dHBoY1pheTZFbEVkM0t0eVNyZVVfZ1RvcjdiRDhQTmZQbmEwQ0FDUkpR --><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script src="/YouTube - YujiTanaka19920818&#39;s Channel_files/athena.js.download" type="text/javascript"></script>
<script type="text/javascript">window.addEventListener('DOMContentLoaded',function(){var v=archive_analytics.values;v.service='wb';v.server_name='wwwb-app226.us.archive.org';v.server_ms=850;archive_analytics.send_pageview({});});</script>
<script type="text/javascript" src="/YouTube - YujiTanaka19920818&#39;s Channel_files/bundle-playback.js.download" charset="utf-8"></script>
<script type="text/javascript" src="/YouTube - YujiTanaka19920818&#39;s Channel_files/wombat.js.download" charset="utf-8"></script>
<script type="text/javascript">
    __wm.init("https://web.archive.org/web");
  __wm.wombat("http://www.youtube.com/user","20100818174042","https://web.archive.org/","web","https://web-static.archive.org/_static/",
        "1282153242");
</script>
<link rel="stylesheet" type="text/css" href="/YouTube - YujiTanaka19920818&#39;s Channel_files/banner-styles.css">
<link rel="stylesheet" type="text/css" href="/YouTube - YujiTanaka19920818&#39;s Channel_files/iconochive.css">
<!-- Start Wayback Rewrite JS Include -->
<script type="text/javascript" src="/YouTube - YujiTanaka19920818&#39;s Channel_files/jwplayer.js.download" charset="utf-8"></script>
<script type="text/javascript" src="/YouTube - YujiTanaka19920818&#39;s Channel_files/bundle-video.js.download" charset="utf-8"></script>
<script type="text/javascript">
_wmVideos_.init({ prefix:"/web" });
</script>
<style id="wm-inject-css">
tp-yt-iron-overlay-backdrop { display: none !important; }
ytd-consent-bump-v2-lightbox { display: none !important; }
</style>
<!-- End Wayback Rewrite JS Include -->

    

    <title>
    YouTube
        - YujiTanaka19920818's Channel
  </title>

        <link id="www-core-css" rel="stylesheet" href="/YouTube - YujiTanaka19920818&#39;s Channel_files/www-core-vfl183184.css">


      <link rel="stylesheet" href="/YouTube - YujiTanaka19920818&#39;s Channel_files/www-the-rest-vfl181573.css">

        <link rel="stylesheet" href="/YouTube - YujiTanaka19920818&#39;s Channel_files/www-channel_new-vfl182559.css">

  <style type="text/css" id="channel-theme-css" name="channel-theme-css">
    #channel-body, .channel-bg-color  { background-color: #CCCCCC }
#channel-body { background-repeat: no-repeat }
.playnav-item .selector, .outer-box-bg-color, .outer-box { background-color: #999999 }.panel-tab-indicator-arrow, .outer-box-bg-as-border { border-color: #999999; }#playnav-chevron { border-left-color: #999999 }
.outer-box-color, .outer-box-bg-color, .outer-box {color: #000000;}.panel-tab-selected a { color: #000000 !important; }.outer-box-color-as-border-color { border-color: #000000; }
.outer-box-link-color, .outer-box-bg-color a, .outer-box a {color: #0000cc;}.outer-box-link-as-border-color { border-color: #0000cc }
#channel-body { font-family: arial }
.title-text, .title-text-color, a.title-text-color, .title-text-color a { color: #000000 !important; }
a.view-button-selected, a.view-button:hover, #playnav-navbar a.navbar-tab-selected, #playnav-navbar a.navbar-tab:hover { background-color: #000000; }title-text-as-border-color { border-color: #000000; }a.view-button-selected .tri, a.view-button:hover .tri { border-left-color: #000000; }
.outer-box .inner-box a, .outer-box .inner-box-colors a, .outer-box .inner-box-bg-color a, .outer-box .inner-box-link-color  { color: #0000cc }.channel-cmd { border-bottom-color: #0000cc }.link-as-border-color, #channel-body .video-thumb { border-color: #0000cc }.view-button .tri { border-top-color: #0000cc; border-bottom-color: #0000cc; }.view-button .a, .view-button .tri { background-color: #0000cc; }
a.inner-box-color-as-link, .inner-box-colors .playnav-show .show-facets .show-mini-description, .inner-box-color, .inner-box { color: #333333; }.box-outline-color { border-color: #333333; }
a.view-button-selected .a, .view-button:hover .a, .inner-box-bg-color, .inner-box-colors, .inner-box { background-color: #eeeeff }.inner-box-bg-as-border-color, .inner-box-bg-color-as-border-color { border-color: #eeeeff }.panel-tab-selected .panel-tab-indicator-arrow { border-bottom-color: #eeeeff !important }.view-button .tri { border-left-color: #eeeeff }a.view-button-selected .tri, .view-button:hover .tri { border-top-color: #eeeeff; border-bottom-color: #eeeeff; background-color: #eeeeff }#playnav-navbar a.navbar-tab-selected, #playnav-navbar a.navbar-tab:hover { color: #eeeeff !important; }
.transparent-link-as-bg-color { background-color: rgba(0,0,204,0.25) }
.transparent-link-as-bg-color { filter: progid:DXImageTransform.Microsoft.Gradient(startColorstr=#400000cc, endColorstr=#400000cc); -ms-filter: "progid:DXImageTransform.Microsoft.Gradient(startColorstr=#400000cc, endColorstr=#400000cc)"; }


#page #masthead-container {
      border-bottom: 3px solid #999999;
    }

#promos, #footer, #copyright {
      display: none;
    }
  </style>

  <link rel="alternate" media="handheld" href="https://web.archive.org/web/20100818174042/http://m.youtube.com/profile?desktop_uri=%2Fuser&amp;gl=IT">

    <link rel="alternate" type="application/rss+xml" title="RSS" href="https://web.archive.org/web/20100818174042/http://gdata.youtube.com/feeds/base/users/YujiTanaka19920818/uploads?alt=rss&amp;v=2&amp;orderby=published&amp;client=ytapi-youtube-profile">

  


    
  <link rel="search" type="application/opensearchdescription+xml" href="https://web.archive.org/web/20100818174042/http://www.youtube.com/opensearch?locale=en_US" title="YouTube Video Search">
  <link rel="icon" href="https://web.archive.org/web/20100818174042im_/http://s.ytimg.com/yt/favicon-vfl147246.ico" type="image/x-icon">
  <link rel="shortcut icon" href="https://web.archive.org/web/20100818174042im_/http://s.ytimg.com/yt/favicon-vfl147246.ico" type="image/x-icon">
    <link rel="canonical" href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user/YujiTanaka19920818">
    <link rel="alternate" media="handheld" href="https://web.archive.org/web/20100818174042/http://m.youtube.com/profile?desktop_uri=%2Fuser&amp;gl=IT">
    <meta name="title" content="">

    <meta name="description" content="Share your videos with friends, family, and the world">

    <meta name="keywords" content="video, sharing, camera phone, video phone, free, upload">

    <link rel="image_src" href="/YouTube - YujiTanaka19920818&#39;s Channel_files/no_videos_140-vfl121286.png">
  <meta property="og:image" content="https://web.archive.org/web/20100818174042im_/http://s.ytimg.com/yt/img/no_videos_140-vfl121286.png">


          <script id="www-core-js" src="./YouTube - YujiTanaka19920818&#39;s Channel_files/www-core-vfl183033.js.download"></script>


  <!-- begin postpage section -->
  <script>
    
    yt.setConfig({
      'XSRF_TOKEN': 'repST_NRM2pv05S-YTGP9CYxvMB8MTI4MjIzOTY0Mg==',
      'XSRF_FIELD_NAME': 'session_token'
    });
    yt.pubsub.subscribe('init', yt.www.xsrf.populateSessionToken);


    yt.setConfig('XSRF_QL_PAIR', 'session_token=ziESc2Y_7hi2fEfij8orvnOOmeV8MA==');



    yt.setConfig('LOGGED_IN', true);
  </script>

        <script src="/YouTube - YujiTanaka19920818&#39;s Channel_files/channel_legacy_all-vfl183852.js.download"></script><script type="text/javascript" src="/YouTube - YujiTanaka19920818&#39;s Channel_files/content.I.js.download"></script><script type="text/javascript">var _____WB$wombat$assign$function_____ = function(name) {return (self._wb_wombat && self._wb_wombat.local_init && self._wb_wombat.local_init(name)) || self[name]; };
if (!self.__WB_pmw) { self.__WB_pmw = function(obj) { this.__WB_source = obj; return this; } }
{
let window = _____WB$wombat$assign$function_____("window");
let globalThis = _____WB$wombat$assign$function_____("globalThis");
let self = _____WB$wombat$assign$function_____("self");
let document = _____WB$wombat$assign$function_____("document");
let location = _____WB$wombat$assign$function_____("location");
let top = _____WB$wombat$assign$function_____("top");
let parent = _____WB$wombat$assign$function_____("parent");
let frames = _____WB$wombat$assign$function_____("frames");
let opener = _____WB$wombat$assign$function_____("opener");
{
if (_gel('playnav-curvideo-description').offsetHeight > 28) {
      _gel('playnav-curvideo-description-more-holder').style.display = 'block';
    }
  ;
window.script_executed=true;

}}</script></head><body class="date-20100818 en_US is-english watch5-active" dir="ltr"><form id="historyStorageForm" method="GET" style="position:absolute;top:-10000px;"><textarea id="historyStorageField" name="historyStorageField" style="position:absolute;top:-10000px;" left="-1000px"></textarea></form>

    <script src="/YouTube - YujiTanaka19920818&#39;s Channel_files/www-channel-vfl181975.js.download"></script>

  <script type="text/javascript" src="/YouTube - YujiTanaka19920818&#39;s Channel_files/jsapi"></script>
  <script type="text/javascript" src="/YouTube - YujiTanaka19920818&#39;s Channel_files/show_companion_ad.js.download"></script>

  <script type="text/javascript">
    window.channel_new_ui = true;
        yt.setMsg({
    'SUCCESS': "Changes saved.",
    'PROGRESS': "In progress",
    'ERROR': "Sorry, an error occurred."
  });

  yt.setMsg({
    'BAD_RESPONSE': "Bad response from server.",
    'UNABLE_TO_CONTACT_SERVER': "Oops! Unable to contact server."
  });

      yt.setMsg({
    'ERROR_WHILE_PROCESSING': "Error while processing your request.",
    'UNKNOWN_ERROR': "An error occured while performing this operation.",
    'POSTING_COMMENT': "Adding comment...",
    'CONFIRM_NAVIGATE_AWAY': "Are you sure you wish to continue?",
    'CONFIRM_UNSAVED_CHANGES': "You have unsaved changes. If you continue, your changes will not be saved.",
    'FLAG_DEFAULT': "Select a Reason",
    'SRSLY_GTFO': "This will remove the selected user.  Are you sure you wish to continue?",
    'THEME_LIMIT': "You have reached your channel customization limit.",
    'CONFIRM_UNSAVED_CHANGES_ARRANGER': "You have unsaved changes. Are you sure you wish to continue?"
  });

    yt.setConfig('request_uri', '\/user');
    yt.setConfig('http_referer', 'https:\/\/web.archive.org\/web\/20100818174042\/http:\/\/www.youtube.com\/user\/');
    window.session_info = 'session_token=repST_NRM2pv05S-YTGP9CYxvMB8MTI4MjIzOTY0Mg==';

    window.ajax_session_info = 'session_token=m1GwtvZs-g1rtzGTYIz8n5_1HR98MA==';

    window.username = "YujiTanaka19920818";
    var max_playlists = 3;
    window.isLoggedIn =  true ;

    window.History.initialize();
    window.History.addListener(playnav.handleLocationHashUpdate);

  </script>

    <script>
  function share(playlist_encrypted_id)
  {
    var fs = window.open( "/share?p=" + playlist_encrypted_id,
            "Share", "toolbar=no,width=546,height=485,status=no,resizable=yes,fullscreen=no,scrollbars=no");
    fs.focus();
  }
  </script>


  <script type="text/javascript">
    

yt.setMsg({
  'UNBLOCK_USER': "Are you sure you want to unblock this user?",
  'BLOCK_USER': "Are you sure you want to block this user?"
});
yt.setConfig('BLOCK_USER_XSRF', 'session_token=AmUd6uPapq0j-MkrRme2kXAVe1N8MA==');



    function share_profile() {
      var fs = window.open( "/share?u=YujiTanaka19920818", "Share", "toolbar=no,width=546,height=485,status=no,resizable=yes,fullscreen=no,scrollbars=no");
      fs.focus();
    };
      window.current_theme_obj = {"background_image": "", "display_name": "Grey", "background_color": "#CCCCCC", "background_repeat": "no-repeat", "wrapper_color": "#999999", "builtin": true, "wrapper_text_color": "#000000", "palettes": {"default": {"title_text_color": "#000000", "link_color": "#0000cc", "body_text_color": "#333333", "box_background_color": "#eeeeff", "display_name": "Default", "box_opacity": 255}}, "wrapper_link_color": "#0000cc", "font": "arial", "wrapper_opacity": 255};
      window.current_theme_name = "default";
    yt.pubsub.subscribe('init', function() {window.scripts_are_loaded = true;});
  </script>

  <script type="text/javascript">
    window.setLastChannel3d = function() {
      if (window.channel3d != null) {
        showAndSet3DModeControl(window.channel3d);
        _gel("movie_player").set3DMode(window.channel3d);
      }
    }
    window.showAndSet3DModeControl = function(value) {
      window.channel3d = value;
      _gel("threed-view-style").value = value;
    };
    window.threedViewStyleChange = function() {
      window.channel3d = _gel("threed-view-style").value
      _gel("movie_player").set3DMode(window.channel3d);
    }
  </script>


    


<!-- BEGIN WAYBACK TOOLBAR INSERT -->
<script>__wm.rw(0);</script>
<div id="wm-ipp-base" lang="en" style="display: block; direction: ltr; height: 1px;"><template shadowrootmode="closed"><div id="wm-ipp" style="position:fixed;left:0;top:0;right:0;" class="">
<div id="donato" style="position:relative;width:100%;">
  <div id="donato-base">
    <iframe id="donato-if" src="https://archive.org/includes/donate.php?as_page=1&amp;platform=wb&amp;referer=https%3A//web.archive.org/web/20100818174042/http%3A//www.youtube.com/user" scrolling="no" frameborder="0" style="width:100%; height:100%">
    </iframe>
  </div>
</div><div id="wm-ipp-inside" style="display: none;">
  <div id="wm-toolbar" style="position:relative;display:flex;flex-flow:row nowrap;justify-content:space-between;">
    <div id="wm-logo" style="/*width:110px;*/padding-top:12px;">
      <a href="https://web.archive.org/web/" title="Wayback Machine home page"><img src="https://web-static.archive.org/_static/images/toolbar/wayback-toolbar-logo-200.png" srcset="https://web-static.archive.org/_static/images/toolbar/wayback-toolbar-logo-100.png, https://web-static.archive.org/_static/images/toolbar/wayback-toolbar-logo-150.png 1.5x, https://web-static.archive.org/_static/images/toolbar/wayback-toolbar-logo-200.png 2x" alt="Wayback Machine" style="width:100px" border="0"></a>
    </div>
    <div class="c" style="display:flex;flex-flow:column nowrap;justify-content:space-between;flex:1;">
      <form class="u" style="display:flex;flex-direction:row;flex-wrap:nowrap;" target="_top" method="get" action="https://web.archive.org/web/submit" name="wmtb" id="wmtb"><input type="text" name="url" id="wmtbURL" value="http://www.youtube.com/user" onfocus="this.focus();this.select();" style="flex:1;" autocomplete="off"><input type="hidden" name="type" value="replay"><input type="hidden" name="date" value="20100818174042"><input type="submit" value="Go">
      </form>
      <div style="display:flex;flex-flow:row nowrap;align-items:flex-end;">
                <div class="s" id="wm-nav-captures" style="flex:1;"><a class="t" href="https://web.archive.org/web/*/http://www.youtube.com/user" title="See a list of every capture for this URL">66,247 captures</a><div class="r" title="Timespan for captures of this URL">25 Jun 2006 - 23 Jan 2025</div></div>
        <div class="k">
          <a href="https://web.archive.org/web/20250401000000/http://www.youtube.com/user" id="wm-graph-anchor">
            <div id="wm-ipp-sparkline" title="Explore captures for this URL" style="position: relative">
              <canvas id="wm-sparkline-canvas" width="750" height="27" border="0"></canvas>
            <div class="yt" style="display: none; width: 25px; height: 27px; left: 725px;"></div><div class="mt" style="display: none; width: 2px; height: 27px; left: 732px;"></div></div>
          </a>
        </div>
      </div>
    </div>
    <div class="n">
      <table>
        <tbody>
          <!-- NEXT/PREV MONTH NAV AND MONTH INDICATOR -->
          <tr class="m">
            <td class="b" nowrap="nowrap"><a href="https://web.archive.org/web/20100715014501/http://www.youtube.com:80/user/" title="15 Jul 2010"><strong>Jul</strong></a></td>
            <td class="c" id="displayMonthEl" title="You are here: 17:40:42 Aug 18, 2010">Aug</td>
            <td class="f" nowrap="nowrap"><a href="https://web.archive.org/web/20101001053033/http://www.youtube.com:80/user" title="01 Oct 2010"><strong>Oct</strong></a></td>
          </tr>
          <!-- NEXT/PREV CAPTURE NAV AND DAY OF MONTH INDICATOR -->
          <tr class="d">
            <td class="b" nowrap="nowrap"><a href="https://web.archive.org/web/20100817080811/http://www.youtube.com//user//" title="08:08:11 Aug 17, 2010"><img src="https://web-static.archive.org/_static/images/toolbar/wm_tb_prv_on.png" alt="Previous capture" width="14" height="16" border="0"></a></td>
            <td class="c" id="displayDayEl" style="width:34px;font-size:22px;white-space:nowrap;" title="You are here: 17:40:42 Aug 18, 2010">18</td>
            <td class="f" nowrap="nowrap"><a href="https://web.archive.org/web/20100823103634/http://www.youtube.com/user/" title="10:36:34 Aug 23, 2010"><img src="https://web-static.archive.org/_static/images/toolbar/wm_tb_nxt_on.png" alt="Next capture" width="14" height="16" border="0"></a></td>
          </tr>
          <!-- NEXT/PREV YEAR NAV AND YEAR INDICATOR -->
          <tr class="y">
            <td class="b" nowrap="nowrap"><a href="https://web.archive.org/web/20090806101411/http://www.youtube.com/user/" title="06 Aug 2009"><strong>2009</strong></a></td>
            <td class="c" id="displayYearEl" title="You are here: 17:40:42 Aug 18, 2010">2010</td>
            <td class="f" nowrap="nowrap"><a href="https://web.archive.org/web/20110826174147/http://www.youtube.com/user/" title="26 Aug 2011"><strong>2011</strong></a></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="r" style="display:flex;flex-flow:column nowrap;align-items:flex-end;justify-content:space-between;">
      <div id="wm-btns" style="text-align:right;height:23px;">
                <span class="xxs">
          <div id="wm-save-snapshot-success">success</div>
          <div id="wm-save-snapshot-fail">fail</div>
          <a id="wm-save-snapshot-open" href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user#" title="Share via My Web Archive" style="display: none;">
            <span class="iconochive-web"></span>
          </a>
          <a href="https://archive.org/account/login.php" title="Sign In" id="wm-sign-in" style="display: inline-block;">
            <span class="iconochive-person"></span>
          </a>
          <span id="wm-save-snapshot-in-progress" class="iconochive-web" style="display: none;"></span>
        </span>
                <a class="xxs" href="http://faq.web.archive.org/" title="Get some help using the Wayback Machine" style="top:-6px;"><span class="iconochive-question" style="color:rgb(87,186,244);font-size:160%;"></span></a>
        <a id="wm-tb-close" href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user#close" style="top:-2px;" title="Close the toolbar"><span class="iconochive-remove-circle" style="color:#888888;font-size:240%;"></span></a>
      </div>
      <div id="wm-share" class="xxs">
        <a href="https://web.archive.org/web/20100818174042/http://web.archive.org/screenshot/http://www.youtube.com/user" id="wm-screenshot" title="screenshot" style="visibility: hidden;">
          <span class="wm-icon-screen-shot"></span>
        </a>
        <a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user#" id="wm-video" title="video">
          <span class="iconochive-movies"></span>
        </a>
        <a id="wm-share-facebook" href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user#" data-url="https://web.archive.org/web/20100818174042/http://www.youtube.com/user" title="Share on Facebook" style="margin-right:5px;" target="_blank"><span class="iconochive-facebook" style="color:#3b5998;font-size:160%;"></span></a>
        <a id="wm-share-twitter" href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user#" data-url="https://web.archive.org/web/20100818174042/http://www.youtube.com/user" title="Share on Twitter" style="margin-right:5px;" target="_blank"><span class="iconochive-twitter" style="color:#1dcaff;font-size:160%;"></span></a>
      </div>
      <div style="padding-right:2px;text-align:right;white-space:nowrap;">
        <a id="wm-expand" class="wm-btn wm-closed" href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user#expand"><span id="wm-expand-icon" class="iconochive-down-solid"></span> <span class="xxs" style="font-size:80%;">About this capture</span></a>
      </div>
    </div>
  </div>
    <div id="wm-capinfo" style="border-top:1px solid #777;display:none; overflow: hidden">
        <div id="wm-capinfo-notice" source="api"></div>
                <div id="wm-capinfo-collected-by">
    <div style="background-color:#666;color:#fff;font-weight:bold;text-align:center">COLLECTED BY</div>
    <div style="padding:3px;position:relative" id="wm-collected-by-content">
      <div style="display:inline-block;vertical-align:top;width:49%;">
      <span class="c-logo" style="background-image:url(https://archive.org/services/img/web_el_2010)"></span>
    <div>Collection: <a style="color:#33f;" href="https://archive.org/details/web_el_2010" target="_new"><span class="wm-title">web_el_2010</span></a></div>
    <div style="max-height:75px;overflow:hidden;position:relative;">
    <div style="position:absolute;top:0;left:0;width:100%;height:75px;background:linear-gradient(to bottom,rgba(255,255,255,0) 0%,rgba(255,255,255,0) 90%,rgba(255,255,255,255) 100%);"></div>
    This data is currently not publicly accessible.
  </div>
        </div>
    </div>
    </div>
    <div id="wm-capinfo-timestamps">
    <div style="background-color:#666;color:#fff;font-weight:bold;text-align:center" title="Timestamps for the elements of this page">TIMESTAMPS</div>
    <div>
      <div id="wm-capresources" style="margin:0 5px 5px 5px;max-height:250px;overflow-y:scroll !important"></div>
      <div id="wm-capresources-loading" style="text-align:left;margin:0 20px 5px 5px;display:none"><img src="https://web-static.archive.org/_static/images/loading.gif" alt="loading"></div>
    </div>
    </div>
  </div></div></div><link rel="stylesheet" type="text/css" href="/YouTube - YujiTanaka19920818&#39;s Channel_files/banner-styles.css"><link rel="stylesheet" type="text/css" href="/YouTube - YujiTanaka19920818&#39;s Channel_files/iconochive.css"><div class="wb-autocomplete-suggestions " style="left: 0px; top: 1568px; width: 0px;"></div></template>
</div><div id="wm-ipp-print">The Wayback Machine - https://web.archive.org/web/20100818174042/http://www.youtube.com/user</div>
<script type="text/javascript">//<![CDATA[
__wm.bt(750,27,25,2,"web","http://www.youtube.com/user","20100818174042",1996,"https://web-static.archive.org/_static/",["https://web-static.archive.org/_static/css/banner-styles.css?v=p7PEIJWi","https://web-static.archive.org/_static/css/iconochive.css?v=3PDvdIFv"], false);
  __wm.rw(1);
//]]></script>
<!-- END WAYBACK TOOLBAR INSERT -->
 
  <!--[if IE]><div id="ie"><![endif]-->
  <!-- begin prepage section -->
  <form name="logoutForm" method="post" action="https://web.archive.org/web/20100818174042/http://www.youtube.com/">
    <input type="hidden" name="action_logout" value="1">
  <input name="session_token" type="hidden" value="repST_NRM2pv05S-YTGP9CYxvMB8MTI4MjIzOTY0Mg=="></form>
  <!-- end prepage section -->
  <div id="page" class="">
      <div id="masthead-container">
      

  </div>
  
  </div>
    <!-- Logged-in state -->
   <?php
            if(isset($_SESSION['siteusername']) && $_SESSION['siteusername'] == $_user['username'])
                require($_SERVER['DOCUMENT_ROOT'] . "/static/module/channel_customization.php");
            ?>

  <div id="channel-body" class="jsloaded">
  <div id="channel-base-div">

    <div class="inner-box" id="global-messages" style="display:None">
    </div>

        <div id="user_playlist_navigator" class="outer-box yt-rounded player-as3">
      <div id="playnav-channel-header" class="inner-box-bg-color">
      <div id="playnav-navbar-toggle" class="playnav-arrange">
              <a title="Switch to Grid View" href="javascript:;" onmousedown="playnav.selectView(&#39;grid&#39;);" id="gridview-icon" class="view-button">
    <div class="contents">
      <div class="a yt xl"></div>
      <div class="a yt xc"></div>
      <div class="a yt xr"></div>
      <div class="a yc xl"></div>
      <div class="a yc xc"></div>
      <div class="a yc xr"></div>
      <div class="a yb xl"></div>
      <div class="a yb xc"></div>
      <div class="a yb xr"></div>
    </div>
  </a>

    <a title="Switch to Player View" href="javascript:;" onmousedown="playnav.selectView(&#39;play&#39;);" id="playview-icon" class="view-button view-button-selected">
    <div class="contents">
      <div class="a box"></div>
      <div class="a tri"></div>
      <div class="a yt"></div>
      <div class="a yc"></div>
      <div class="a yb"></div>
    </div>
  </a>
  <div id="playnav-navbar-toggle-spacer">&nbsp;</div>
                    <div class="updown_arrows "><img id="user_playlist_navigator-up-arrow" src="/YouTube - YujiTanaka19920818&#39;s Channel_files/pixel-vfl73.gif" class="module-up-arrow disabled" onclick="move_up(&#39;user_playlist_navigator&#39;)"><img id="user_playlist_navigator-down-arrow" src="/YouTube - YujiTanaka19920818&#39;s Channel_files/pixel-vfl73.gif" class="module-down-arrow disabled" onclick="move_down(&#39;user_playlist_navigator&#39;)"></div>

            <div id="playnav-arrange-links">
                <a id="arrange-link-uploads" class="channel-cmd hide-link" href="javascript:;" onmousedown="playnav.toggleArranger(&#39;uploads&#39;)">Arrange Uploads</a>

                <a id="arrange-link-favorites" class="channel-cmd hide-link" href="javascript:;" onmousedown="playnav.toggleArranger(&#39;favorites&#39;)">Arrange Favorites</a>

                <a id="arrange-link-playlists" class="channel-cmd hide-link" href="javascript:;" onmousedown="playnav.toggleArranger(&#39;playlists&#39;)">Arrange Playlists</a>
            </div>
      </div>

    <div id="playnav-title-bar">
      <div id="playnav-channel-name" class="outer-box-bg-color">
        <div class="channel-thumb-holder outer-box-color-as-border-color">
            <div class="user-thumb-semismall"><div>

    <img id="" src="/YouTube - YujiTanaka19920818&#39;s Channel_files/no_videos_140-vfl121286.png" alt="">

  </div></div>

        </div>

        <div style="float:left;padding:0.4em;">
            <div class="channel-title outer-box-color" style="display:none" id="channel_title"></div>

<div class="channel-title outer-box-color" style="padding:9px 0 0 0" id="channel_base_title">
<?php echo htmlspecialchars(substr($_users['username'], 0, 16)); ?>
          </div>

        </div>

        <div style="float:left;padding-top:10px;_display:inline" id="subscribe-buttons">
              <div id="subscribe_user_playlist_navigator" class="subscribe-div ">
      <button type="button" class=" yt-uix-button yt-uix-button-urgent" onclick="alert(&quot;You cannot subscribe to yourself!&quot;);return false;;return false;"><span class="yt-uix-button-content">Subscribe</span></button>
    </div>

        </div>
      </div>
      <div id="playnav-chevron">&nbsp;</div>
    </div>

      <div id="playnav-navbar"><table><tbody><tr>
              <td>
  <a class="navbar-tab inner-box-link-color navbar-tab-selected" id="playnav-navbar-tab-all" href="javascript:;" onmousedown="playnav.selectTab(&#39;all&#39;);yt.analytics.trackEvent(&#39;menu&#39;, &#39;all&#39;);">All</a>
  </td>

              <td>
  <a class="navbar-tab inner-box-link-color" id="playnav-navbar-tab-uploads" href="javascript:;" onmousedown="playnav.selectTab(&#39;uploads&#39;);yt.analytics.trackEvent(&#39;menu&#39;, &#39;uploads&#39;);">Uploads</a>
  </td>

              <td>
  <a class="navbar-tab inner-box-link-color" id="playnav-navbar-tab-favorites" href="javascript:;" onmousedown="playnav.selectTab(&#39;favorites&#39;);yt.analytics.trackEvent(&#39;menu&#39;, &#39;favorites&#39;);">Favorites</a>
  </td>


      </tr></tbody></table></div>

    <div class="cb"></div>
  </div>

  <div id="subscribeMessage" class="hid">&nbsp;</div>

    <div id="user_playlist_navigator-messages" style="color:#333;display:none"></div>
        <script type="text/javascript">

    yt.setConfig({
      'SWF_SET_WMODE': true,
      'SWF_AD_EURL': 'https://web.archive.org/web/20100818174042/http://www.youtube.com/user/YujiTanaka19920818'
    });

    playnav.setVideoId('IP6ddOHk5gQ');
      window.defaultPlaylistName = 'all';
  </script>

      <div id="playnav-body">
          <div id="playnav-player" class="playnav-player-container" style="visibility: visible; left: 0px;">
    <div>
          <iframe style="border: 0px; overflow: hidden;" src="/player/videoplayer" height="388" width="639"></iframe>
    </div>
  </div>

    <script type="text/javascript">
    var featuredVideoMetadata = {"swf_args": {"el": "profilepage", "showinfo": "0", "allow_embed": "1", "keywords": "usa%2Cwhiteflame%2C%E3%81%86%E3%81%95%2C%E7%99%BD%E9%9B%AA%2Csirayuki%2Cshirayuki%2Cvocaloid%2Cnico%2Cdouga%2Cpresents%2Cfeat.%2C%E5%B7%A1%E9%9F%B3%E3%83%AB%E3%82%AB", "fexp": "902904%2C904711", "allow_ratings": "1", "user_gender": "m", "track_embed": "0", "ps": "as3", "fmt_list": "35%2F854x480%2F9%2F0%2F115%2C34%2F640x360%2F9%2F0%2F115%2C5%2F320x240%2F7%2F0%2F0", "author": "umbrellaguns", "muted": "0", "lpbb": "http%3A%2F%2Fs.ytimg.com%2Fyt%2Fswf%2Flpbb-vfl54521.swf", "length_seconds": "276", "fmt_url_map": "35%7Chttp%3A%2F%2Fv18.lscache1.c.youtube.com%2Fvideoplayback%3Fip%3D0.0.0.0%26sparams%3Did%252Cexpire%252Cip%252Cipbits%252Citag%252Calgorithm%252Cburst%252Cfactor%252Coc%253AU0dXR1FSVF9FSkNNN19JTFhB%26fexp%3D902904%252C904711%26algorithm%3Dthrottle-factor%26itag%3D35%26ipbits%3D0%26burst%3D40%26sver%3D3%26expire%3D1282176000%26key%3Dyt1%26signature%3D563E344900D2FC7D257C9377CD0A4227DCAA1938.75B687A41C0D1E1CD1D7009E643F266939B537B2%26factor%3D1.25%26id%3D20fe9d74e1e4e604%2C34%7Chttp%3A%2F%2Fv2.lscache3.c.youtube.com%2Fvideoplayback%3Fip%3D0.0.0.0%26sparams%3Did%252Cexpire%252Cip%252Cipbits%252Citag%252Calgorithm%252Cburst%252Cfactor%252Coc%253AU0dXR1FSVF9FSkNNN19JTFhB%26fexp%3D902904%252C904711%26algorithm%3Dthrottle-factor%26itag%3D34%26ipbits%3D0%26burst%3D40%26sver%3D3%26expire%3D1282176000%26key%3Dyt1%26signature%3D54DC84CE0EF14CC336B6248CAB587FAB682FD5DE.2A30D04E0357D9A738F45D9A2F684CC1CE876717%26factor%3D1.25%26id%3D20fe9d74e1e4e604%2C5%7Chttp%3A%2F%2Fv19.lscache7.c.youtube.com%2Fvideoplayback%3Fip%3D0.0.0.0%26sparams%3Did%252Cexpire%252Cip%252Cipbits%252Citag%252Calgorithm%252Cburst%252Cfactor%252Coc%253AU0dXR1FSVF9FSkNNN19JTFhB%26fexp%3D902904%252C904711%26algorithm%3Dthrottle-factor%26itag%3D5%26ipbits%3D0%26burst%3D40%26sver%3D3%26expire%3D1282176000%26key%3Dyt1%26signature%3DB89C4DDDA009D013C3FE519743E2C1EC68CA4D19.9703344C72FFD7F7264F8922EC2D4CFF2C065442%26factor%3D1.25%26id%3D20fe9d74e1e4e604", "sourceid": "y", "user_age": "22", "rel": "0", "plid": "AASOHJCZX8zSttoq", "ftoken": "cDsGdHgL_byo69Q8MGBCu0vJT4x8MTI4MjIzOTY0Mw%3D%3D", "sdetail": "p%3A%2Fuser%2F", "status": "ok", "fs": "1", "watermark": "http%3A%2F%2Fs.ytimg.com%2Fyt%2Fswf%2Flogo-vfl107009.swf%2Chttp%3A%2F%2Fs.ytimg.com%2Fyt%2Fswf%2Fhdlogo-vfl101609.swf", "lpbf": "http%3A%2F%2Fs.ytimg.com%2Fyt%2Fswf%2Flpbf-vfl54521.swf", "timestamp": "1282153243", "has_cc": "False", "watch_ajax_token": "lPeOjb922Uh6HZ6kcLCZM8jVgsl8MTI4MjIzOTY0Mw%3D%3D", "fmt_map": "35%2F854x480%2F9%2F0%2F115%2C34%2F640x360%2F9%2F0%2F115%2C5%2F320x240%2F7%2F0%2F0", "hl": "en_US", "eurl": "https:\/\/web.archive.org\/web\/20100818174042\/http:\/\/www.youtube.com\/user\/YujiTanaka19920818", "iurl": "http%3A\/\/i2.ytimg.com\/vi\/IP6ddOHk5gQ\/hqdefault.jpg", "endscreen_module": "http%3A%2F%2Fs.ytimg.com%2Fyt%2Fswf%2Fendscreen-vfl183282.swf", "fmt_stream_map": "35%7Chttp%3A%2F%2Fv18.lscache1.c.youtube.com%2Fvideoplayback%3Fip%3D0.0.0.0%26sparams%3Did%252Cexpire%252Cip%252Cipbits%252Citag%252Calgorithm%252Cburst%252Cfactor%252Coc%253AU0dXR1FSVF9FSkNNN19JTFhB%26fexp%3D902904%252C904711%26algorithm%3Dthrottle-factor%26itag%3D35%26ipbits%3D0%26burst%3D40%26sver%3D3%26expire%3D1282176000%26key%3Dyt1%26signature%3D563E344900D2FC7D257C9377CD0A4227DCAA1938.75B687A41C0D1E1CD1D7009E643F266939B537B2%26factor%3D1.25%26id%3D20fe9d74e1e4e604%7C%7Ctc.v18.cache1.c.youtube.com%2C34%7Chttp%3A%2F%2Fv2.lscache3.c.youtube.com%2Fvideoplayback%3Fip%3D0.0.0.0%26sparams%3Did%252Cexpire%252Cip%252Cipbits%252Citag%252Calgorithm%252Cburst%252Cfactor%252Coc%253AU0dXR1FSVF9FSkNNN19JTFhB%26fexp%3D902904%252C904711%26algorithm%3Dthrottle-factor%26itag%3D34%26ipbits%3D0%26burst%3D40%26sver%3D3%26expire%3D1282176000%26key%3Dyt1%26signature%3D54DC84CE0EF14CC336B6248CAB587FAB682FD5DE.2A30D04E0357D9A738F45D9A2F684CC1CE876717%26factor%3D1.25%26id%3D20fe9d74e1e4e604%7C%7Ctc.v2.cache3.c.youtube.com%2C5%7Chttp%3A%2F%2Fv19.lscache7.c.youtube.com%2Fvideoplayback%3Fip%3D0.0.0.0%26sparams%3Did%252Cexpire%252Cip%252Cipbits%252Citag%252Calgorithm%252Cburst%252Cfactor%252Coc%253AU0dXR1FSVF9FSkNNN19JTFhB%26fexp%3D902904%252C904711%26algorithm%3Dthrottle-factor%26itag%3D5%26ipbits%3D0%26burst%3D40%26sver%3D3%26expire%3D1282176000%26key%3Dyt1%26signature%3DB89C4DDDA009D013C3FE519743E2C1EC68CA4D19.9703344C72FFD7F7264F8922EC2D4CFF2C065442%26factor%3D1.25%26id%3D20fe9d74e1e4e604%7C%7Ctc.v19.cache7.c.youtube.com", "ss": "1", "referrer": "http%3A%2F%2Fwww.youtube.com%2Fuser%2F", "avg_rating": "5.0", "video_id": "IP6ddOHk5gQ", "sk": "hx1bE8YBqyFikAcOyqrHFAMgyyFrjah9R", "token": "vjVQa1PpcFPw2TxaEL-0ixKvqNPhp-2ZQTL2tFc5RJY%3D", "thumbnail_url": "http%3A%2F%2Fi2.ytimg.com%2Fvi%2FIP6ddOHk5gQ%2Fdefault.jpg", "vq": "auto", "showsearch": "0", "autoplay": "0"}, "swf_url": "https:\/\/web.archive.org\/web\/20100818174042\/http:\/\/s.ytimg.com\/yt\/swf\/watch_as3-vfl183159.swf", "info_panel_html": "<div id=\"channel-like-action\">\n\t\t\t<div id=\"channel-like-buttons\">\n\t\t\t\t<button title=\"I like this\" type=\"button\" class=\"master-sprite yt-uix-button yt-uix-tooltip\" onclick=\";return false;\" id=\"watch-like\" data-button-action=\"playnav.like\"><img class=\"yt-uix-button-icon-watch-like\" src=\"http:\/\/s.ytimg.com\/yt\/img\/pixel-vfl73.gif\" alt=\"\"> <span class=\"yt-uix-button-content\">Like<\/span><\/button>\n\t\t\t\t&nbsp;\n\t\t\t\t<button title=\"I dislike this\" type=\"button\" class=\"master-sprite yt-uix-button yt-uix-tooltip\" onclick=\";return false;\" id=\"watch-unlike\" data-button-action=\"playnav.unlike\"><img class=\"yt-uix-button-icon-watch-unlike\" src=\"http:\/\/s.ytimg.com\/yt\/img\/pixel-vfl73.gif\" alt=\"\"> <\/button>\n\t\t\t<\/div>\n\t\t\t<form method=\"post\" action=\"\/watch_ajax\" name=\"likeForm\" class=\"hid\">\n\t\t\t\t<input type=\"hidden\" name=\"session_token\" value=\"HnE4F3hY3q5uKbji8L82ZazBZip8MA==\"\/>\n\t\t\t\t<input type=\"hidden\" name=\"action_like_video\" value=\"1\" \/>\n\t\t\t\t<input type=\"hidden\" name=\"video_id\" value=\"IP6ddOHk5gQ\" \/>\n\t\t\t<\/form>\n\t\t\t<form method=\"post\" action=\"\/watch_ajax\" name=\"unlikeForm\" class=\"hid\">\n\t\t\t\t<input type=\"hidden\" name=\"session_token\" value=\"HnE4F3hY3q5uKbji8L82ZazBZip8MA==\"\/>\n\t\t\t\t<input type=\"hidden\" name=\"action_dislike_video\" value=\"1\" \/>\n\t\t\t\t<input type=\"hidden\" name=\"video_id\" value=\"IP6ddOHk5gQ\" \/>\n\t\t\t<\/form>\n\t\t\t<div id=\"channel-like-close\" class=\"hid\">\n\t\t\t\t<div class=\"close\"><img src=\"http:\/\/s.ytimg.com\/yt\/img\/pixel-vfl73.gif\" class=\"master-sprite close-button\" onclick=\"playnav.hideLike();\"\/><\/div>\n\t\t\t<\/div>\n\t\t<\/div>\n\n\t<div id='playnav-curvideo-title' class='inner-box-link-color' dir=\"ltr\">\n\n\t\t<span style=\"cursor:pointer;margin-right:7px\"\t\t\t\tonclick=\"document.location.href='\/watch?v=IP6ddOHk5gQ'\"\t\t\t\tonmouseover=\"this.style.textDecoration='underline'\"\t\t\t\tonmouseout=\"this.style.textDecoration='none'\">\n\t\t\t\u3010\u6700\u9ad8\u97f3\u8ccd\u3011 Usa (\u3046\u3055) \uff0f \u767d\u96ea \uff5esirayuki\uff5e \u3010WhiteFlame\u3011\n\t\t<\/span>\n\t<\/div>\n\n\t<div id='playnav-curvideo-info-line'>\n\t\tFrom: <span id='playnav-curvideo-channel-name'><a href=\"\/user\/umbrellaguns\">umbrellaguns<\/a><\/span>&nbsp;|\n\t\t<span dir=\"ltr\">February 20, 2010<\/span>\n\t\t\t&nbsp;|\n\t\t\t\t<span id='playnav-curvideo-view-count'>3,615 views<\/span>\n\t<\/div>\n\n\t<div class=\"cb\"><\/div>\n\n\t\t<div id=\"channel-like-result\" class=\"hid\">\n\t\t\t<div id=\"watch-actions-area\" class=\"yt-rounded\">&nbsp;<\/div>\n\t\t<\/div>\n\t\t<div id=\"channel-like-loading\" class=\"hid\">Loading...<\/div>\n\t\t<div class=\"cb\"><\/div>\n\n\t<div id='playnav-curvideo-description-container'>\n\t\t<div id='playnav-curvideo-description' dir=\"ltr\">From WhiteFlame presents feat. \u5de1\u97f3\u30eb\u30ab album: <br \/>\u3010\u3046\u3055\/sm8242669\u3011<br \/><br \/>Visit <a href=\"http:\/\/whiteflame.jp\/\" target=\"_blank\" title=\"http:\/\/whiteflame.jp\/\" rel=\"nofollow\" dir=\"ltr\">http:\/\/whiteflame.jp\/<\/a> for more details.\n\t\t\t<div id=\"playnav-curvideo-description-more-holder\">\n\t\t\t\t<div id=\"playnav-curvideo-description-more\" class=\"inner-box-bg-color\">\n\t\t\t\t\t...&nbsp;<a class=\"channel-cmd\" href=\"javascript:;\" onclick=\"playnav.toggleFullVideoDescription(true)\">(more info)<\/a>&nbsp;&nbsp;\n\t\t\t\t<\/div>\n\t\t\t\t<div class=\"cb\"><\/div>\n\t\t\t<\/div>\n\t\t\t<span id=\"playnav-curvideo-description-less\">\n\t\t\t\t<a href=\"javascript:;\" class=\"channel-cmd\" onclick=\"playnav.toggleFullVideoDescription(false)\">(less info)<\/a>\n\t\t\t<\/span>\n\t\t<\/div>\n\t<\/div>\n\n\t<a href=\"\/watch?v=IP6ddOHk5gQ\" id=\"playnav-watch-link\" onclick=\"playnav.goToWatchPage()\">View comments, related videos, and more<\/a>\n\n\n\t<div id='playnav-curvideo-controls'>\n\t<\/div>\n\n\t<div class=\"cb\"><\/div>\n\n\t<script>\n\t\tif (_gel('playnav-curvideo-description').offsetHeight > 28) {\n\t\t\t_gel('playnav-curvideo-description-more-holder').style.display = 'block';\n\t\t}\n\t<\/script>"};
    playnav.setInitialView('play');
    playnav.setInitialTab('all');
    playnav.handleVideoMetadata("", featuredVideoMetadata, true);
  </script>


        <div id="playnav-playview" class="" style="display: block;">
            <div id="playnav-player-restricted" class="inner-box-colors" style="display: none;">
    <div id="playnav-inner-restricted">
      <div id="playnav-restricted-title-div"><h3 id="playnav-restricted-title"></h3></div>

      <div id="playnav-login-required" class="playnav-restricted-msg">
        <h3>
You must be <a class="playnav-restricted-link" href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user">logged in</a> to view this video.
        </h3>
      </div>
      <div id="playnav-controversy" class="playnav-restricted-msg">
        <h3>
The following content has been identified by the YouTube community as being potentially offensive or inappropriate. Viewer discretion is advised.
Please <a class="playnav-restricted-link" href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user">confirm</a> that you wish to view this video.
        </h3>
      </div>
      <div id="playnav-verify-age" class="playnav-restricted-msg">
        <h3>
This video or group may contain content that is inappropriate for some users, as flagged by YouTube's user community.
Please <a class="playnav-restricted-link" href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user">confirm</a> that you wish to view this video.
        </h3>
      </div>
      <div id="playnav-unavailable" class="playnav-restricted-msg">
        <h3>
This video is unavailable.
        </h3>
      </div>
      <div id="playnav-rental" class="playnav-restricted-msg">
<a class="playnav-restricted-link" href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user">This featured video is available for rental by clicking here.</a>
      </div>
      <div id="playnav-custom-error-message" class="playnav-restricted-msg">
      </div>
    </div>
  </div>

          <div id="playnav-left-panel" style="display: block;">
            <div class="playnav-player-container"></div>
            <div id="playnav-video-details">
                <div id="playnav-bottom-links">
    <div id="playnav-bottom-links-clip" class="playnav-bottom-links-clip">
      <table><tbody><tr>
          <td id="playnav-panel-tab-info" class="panel-tab-selected">


    <table class="panel-tabs">
      <tbody><tr>
        <td class="panel-tab-title-cell">
          <div class="playnav-panel-tab-icon" id="panel-icon-info" onmouseover="_addclass(_gel(&#39;playnav-panel-tab-info&#39;), &#39;panel-tab-hovered&#39;)" onmouseout="_removeclass(_gel(&#39;playnav-panel-tab-info&#39;), &#39;panel-tab-hovered&#39;)" onmousedown="playnav.selectPanel(&#39;info&#39;)"></div>
          <div class="playnav-bottom-link" id="info-bottom-link">
            <a href="javascript:;" onmouseover="_addclass(_gel(&#39;playnav-panel-tab-info&#39;), &#39;panel-tab-hovered&#39;)" onmouseout="_removeclass(_gel(&#39;playnav-panel-tab-info&#39;), &#39;panel-tab-hovered&#39;)" onmousedown="playnav.selectPanel(&#39;info&#39;)">Info</a>
          </div>
          <div class="spacer">&nbsp;</div>
        </td>
      </tr>
      <tr>
        <td class="panel-tab-indicator-cell inner-box-opacity">
          <div class="panel-tab-indicator-arrow"></div>
        </td>
      </tr>
    </tbody></table>
  </td>



          <td id="playnav-panel-tab-favorite">


    <table class="panel-tabs">
      <tbody><tr>
        <td class="panel-tab-title-cell">
          <div class="playnav-panel-tab-icon" id="panel-icon-favorite" onmouseover="_addclass(_gel(&#39;playnav-panel-tab-favorite&#39;), &#39;panel-tab-hovered&#39;)" onmouseout="_removeclass(_gel(&#39;playnav-panel-tab-favorite&#39;), &#39;panel-tab-hovered&#39;)" onmousedown="playnav.selectPanel(&#39;favorite&#39;)"></div>
          <div class="playnav-bottom-link" id="favorite-bottom-link">
            <a href="javascript:;" onmouseover="_addclass(_gel(&#39;playnav-panel-tab-favorite&#39;), &#39;panel-tab-hovered&#39;)" onmouseout="_removeclass(_gel(&#39;playnav-panel-tab-favorite&#39;), &#39;panel-tab-hovered&#39;)" onmousedown="playnav.selectPanel(&#39;favorite&#39;)">Favorite</a>
          </div>
          <div class="spacer">&nbsp;</div>
        </td>
      </tr>
      <tr>
        <td class="panel-tab-indicator-cell inner-box-opacity">
          <div class="panel-tab-indicator-arrow"></div>
        </td>
      </tr>
    </tbody></table>
  </td>

          <td id="playnav-panel-tab-share">


    <table class="panel-tabs">
      <tbody><tr>
        <td class="panel-tab-title-cell">
          <div class="playnav-panel-tab-icon" id="panel-icon-share" onmouseover="_addclass(_gel(&#39;playnav-panel-tab-share&#39;), &#39;panel-tab-hovered&#39;)" onmouseout="_removeclass(_gel(&#39;playnav-panel-tab-share&#39;), &#39;panel-tab-hovered&#39;)" onmousedown="playnav.selectPanel(&#39;share&#39;)"></div>
          <div class="playnav-bottom-link" id="share-bottom-link">
            <a href="javascript:;" onmouseover="_addclass(_gel(&#39;playnav-panel-tab-share&#39;), &#39;panel-tab-hovered&#39;)" onmouseout="_removeclass(_gel(&#39;playnav-panel-tab-share&#39;), &#39;panel-tab-hovered&#39;)" onmousedown="playnav.selectPanel(&#39;share&#39;)">Share</a>
          </div>
          <div class="spacer">&nbsp;</div>
        </td>
      </tr>
      <tr>
        <td class="panel-tab-indicator-cell inner-box-opacity">
          <div class="panel-tab-indicator-arrow"></div>
        </td>
      </tr>
    </tbody></table>
  </td>

          <td id="playnav-panel-tab-playlists">


    <table class="panel-tabs">
      <tbody><tr>
        <td class="panel-tab-title-cell">
          <div class="playnav-panel-tab-icon" id="panel-icon-playlists" onmouseover="_addclass(_gel(&#39;playnav-panel-tab-playlists&#39;), &#39;panel-tab-hovered&#39;)" onmouseout="_removeclass(_gel(&#39;playnav-panel-tab-playlists&#39;), &#39;panel-tab-hovered&#39;)" onmousedown="playnav.selectPanel(&#39;playlists&#39;)"></div>
          <div class="playnav-bottom-link" id="playlists-bottom-link">
            <a href="javascript:;" onmouseover="_addclass(_gel(&#39;playnav-panel-tab-playlists&#39;), &#39;panel-tab-hovered&#39;)" onmouseout="_removeclass(_gel(&#39;playnav-panel-tab-playlists&#39;), &#39;panel-tab-hovered&#39;)" onmousedown="playnav.selectPanel(&#39;playlists&#39;)">Playlists</a>
          </div>
          <div class="spacer">&nbsp;</div>
        </td>
      </tr>
      <tr>
        <td class="panel-tab-indicator-cell inner-box-opacity">
          <div class="panel-tab-indicator-arrow"></div>
        </td>
      </tr>
    </tbody></table>
  </td>

          <td id="playnav-panel-tab-flag">


    <table class="panel-tabs">
      <tbody><tr>
        <td class="panel-tab-title-cell">
          <div class="playnav-panel-tab-icon" id="panel-icon-flag" onmouseover="_addclass(_gel(&#39;playnav-panel-tab-flag&#39;), &#39;panel-tab-hovered&#39;)" onmouseout="_removeclass(_gel(&#39;playnav-panel-tab-flag&#39;), &#39;panel-tab-hovered&#39;)" onmousedown="playnav.selectPanel(&#39;flag&#39;)"></div>
          <div class="playnav-bottom-link" id="flag-bottom-link">
            <a href="javascript:;" onmouseover="_addclass(_gel(&#39;playnav-panel-tab-flag&#39;), &#39;panel-tab-hovered&#39;)" onmouseout="_removeclass(_gel(&#39;playnav-panel-tab-flag&#39;), &#39;panel-tab-hovered&#39;)" onmousedown="playnav.selectPanel(&#39;flag&#39;)">Flag</a>
          </div>
          <div class="spacer">&nbsp;</div>
        </td>
      </tr>
      <tr>
        <td class="panel-tab-indicator-cell inner-box-opacity">
          <div class="panel-tab-indicator-arrow"></div>
        </td>
      </tr>
    </tbody></table>
  </td>

      </tr></tbody></table>
    </div>

    <div class="cb"></div>

    <div class="playnav-video-panel inner-box-colors border-box-sizing">
      <div id="playnav-video-panel-inner" class="playnav-video-panel-inner border-box-sizing" style="overflow: auto;">

        <div id="playnav-panel-info" class="scrollable" style="display: block;"><div id="channel-like-action">
      <div id="channel-like-buttons">
        <button title="I like this" type="button" class="master-sprite yt-uix-button yt-uix-tooltip" onclick=";return false;" id="watch-like" data-button-action="playnav.like"><img class="yt-uix-button-icon-watch-like" src="/YouTube - YujiTanaka19920818&#39;s Channel_files/pixel-vfl73.gif" alt=""> <span class="yt-uix-button-content">Like</span></button>
        &nbsp;
        <button title="I dislike this" type="button" class="master-sprite yt-uix-button yt-uix-tooltip" onclick=";return false;" id="watch-unlike" data-button-action="playnav.unlike"><img class="yt-uix-button-icon-watch-unlike" src="/YouTube - YujiTanaka19920818&#39;s Channel_files/pixel-vfl73.gif" alt=""> </button>
      </div>
      <form method="post" action="https://web.archive.org/web/20100818174042mp_/http://www.youtube.com/watch_ajax" name="likeForm" class="hid">
        <input type="hidden" name="session_token" value="HnE4F3hY3q5uKbji8L82ZazBZip8MA==">
        <input type="hidden" name="action_like_video" value="1">
        <input type="hidden" name="video_id" value="IP6ddOHk5gQ">
      </form>
      <form method="post" action="https://web.archive.org/web/20100818174042mp_/http://www.youtube.com/watch_ajax" name="unlikeForm" class="hid">
        <input type="hidden" name="session_token" value="HnE4F3hY3q5uKbji8L82ZazBZip8MA==">
        <input type="hidden" name="action_dislike_video" value="1">
        <input type="hidden" name="video_id" value="IP6ddOHk5gQ">
      </form>
      <div id="channel-like-close" class="hid">
        <div class="close"><img src="/YouTube - YujiTanaka19920818&#39;s Channel_files/pixel-vfl73.gif" class="master-sprite close-button" onclick="playnav.hideLike();"></div>
      </div>
    </div>

  <div id="playnav-curvideo-title" class="inner-box-link-color" dir="ltr">

    <span style="cursor:pointer;margin-right:7px" onclick="document.location.href=&#39;/watch?v=IP6ddOHk5gQ&#39;" onmouseover="this.style.textDecoration=&#39;underline&#39;" onmouseout="this.style.textDecoration=&#39;none&#39;">
      【最高音賍】 Usa (うさ) ／ 白雪 ～sirayuki～ 【WhiteFlame】
    </span>
  </div>

  <div id="playnav-curvideo-info-line">
    From: <span id="playnav-curvideo-channel-name"><a href="https://web.archive.org/web/20100818174042mp_/http://www.youtube.com/user/umbrellaguns">umbrellaguns</a></span>&nbsp;|
    <span dir="ltr">February 20, 2010</span>
      &nbsp;|
        <span id="playnav-curvideo-view-count">3,615 views</span>
  </div>

  <div class="cb"></div>

    <div id="channel-like-result" class="hid">
      <div id="watch-actions-area" class="yt-rounded">&nbsp;</div>
    </div>
    <div id="channel-like-loading" class="hid">Loading...</div>
    <div class="cb"></div>

  <div id="playnav-curvideo-description-container">
    <div id="playnav-curvideo-description" dir="ltr">From WhiteFlame presents feat. 巡音ルカ album: <br>【うさ/sm8242669】<br><br>Visit <a href="https://web.archive.org/web/20100818174042mp_/http://whiteflame.jp/" target="_blank" title="http://whiteflame.jp/" rel="nofollow" dir="ltr">http://whiteflame.jp/</a> for more details.
      <div id="playnav-curvideo-description-more-holder" style="display: block;">
        <div id="playnav-curvideo-description-more" class="inner-box-bg-color">
          ...&nbsp;<a class="channel-cmd" href="javascript:;" onclick="playnav.toggleFullVideoDescription(true)">(more info)</a>&nbsp;&nbsp;
        </div>
        <div class="cb"></div>
      </div>
      <span id="playnav-curvideo-description-less">
        <a href="javascript:;" class="channel-cmd" onclick="playnav.toggleFullVideoDescription(false)">(less info)</a>
      </span>
    </div>
  </div>

  <a href="https://web.archive.org/web/20100818174042mp_/http://www.youtube.com/watch?v=IP6ddOHk5gQ" id="playnav-watch-link" onclick="playnav.goToWatchPage()">View comments, related videos, and more</a>


  <div id="playnav-curvideo-controls">
  </div>

  <div class="cb"></div>

  <script>
    if (_gel('playnav-curvideo-description').offsetHeight > 28) {
      _gel('playnav-curvideo-description-more-holder').style.display = 'block';
    }
  </script></div>

          <div id="playnav-panel-comments" class="hid"></div>

        <div id="playnav-panel-favorite" class="hid"></div>
        <div id="playnav-panel-share" class="hid scrollable"></div>
        <div id="playnav-panel-playlists" class="hid"></div>
        <div id="playnav-panel-flag" class="hid scrollable"></div>
      </div>
    </div>
  </div>

            </div>
          </div>
            <div id="playnav-play-panel">
    <div id="watch-longform-ad" style="display:none;">
      <div id="watch-longform-text">
Advertisement
      </div>

      <div id="watch-longform-ad-placeholder"><img src="/YouTube - YujiTanaka19920818&#39;s Channel_files/pixel-vfl73.gif" height="60" width="300"></div>
      <div id="instream_google_companion_ad_div" style="visibility:hidden; overflow:hidden; width:300px; height:80px;"></div>
    </div>

    <div id="watch-channel-brand-div" style="display:none">
      <div id="ad300x250" class="alignC"></div>
      <div id="google_companion_ad_div" class="alignC" style="visibility:hidden;"></div>
      <div class="alignC grayText inner-box-colors" style="font-size: 10px; padding-top: 3px;">
Advertisement
      </div>
    </div>
    <div id="playnav-play-content" style="height: 595px;">
        <div class="playnav-playlist-holder" id="playnav-play-playlist-all-holder" style="display: block;">
                  
  <div id="playnav-play-all-scrollbox" class="scrollbox-wrapper inner-box-colors">

    <div class="scrollbox-content playnav-playlist-all">
      
      <div class="scrollbox-body" style="height: 585px; zoom: 1;">
        <div class="outer-scrollbox" onscroll="playnav.updateScrollbox(&#39;playnav-play-all-scrollbox&#39;);">
          <div id="playnav-play-all-items" class="inner-scrollbox">
              
    <input type="hidden" id="playnav-playlist-uploads-count" value="0">
      <div class="playnav-playlist-header">
      <a href="javascript:;" style="text-decoration:none" onclick="playnav.selectTab(&#39;uploads&#39;)" class="title title-text-color">
      <span id="playnav-playlist-favorites-all-title" class="title">Favorites</span>
        (38)
      </a>

    
  </div>

    
      



  <div id="playnav-video-play-favorites-all-0-IP6ddOHk5gQ" class="playnav-item playnav-video">
    <div style="display:none" class="encryptedVideoId">IP6ddOHk5gQ</div>

    <div id="playnav-video-play-favorites-all-0-IP6ddOHk5gQ-selector" class="selector"></div>
    <div class="content">
      <div class="playnav-video-thumb">
          
  
  
  
    
  
  
    
  
  
  
  
    
    
  
  


<a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/watch?v=IP6ddOHk5gQ" class="video-thumb ux-thumb-94" id="video-thumb-IP6ddOHk5gQ-8353213"><span class="img"><img src="/YouTube - YujiTanaka19920818&#39;s Channel_files/default.jpg" onclick="playnav.playVideo(&#39;favorites-all&#39;,&#39;0&#39;,&#39;IP6ddOHk5gQ&#39;);return false;" title="【最高音賍】 Usa (うさ) ／ 白雪 ～sirayuki～ 【WhiteFlame】"></span>    
<span class="video-time">4:36</span></a>

      </div>
      <div class="playnav-video-info">
        <a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/watch?v=IP6ddOHk5gQ" class="playnav-item-title ellipsis" onclick="playnav.playVideo(&#39;favorites-all&#39;,&#39;0&#39;,&#39;IP6ddOHk5gQ&#39;);return false;" id="playnav-video-title-play-favorites-all-0-IP6ddOHk5gQ"><span dir="ltr">【最高音賍】 Usa (うさ) ／ 白雪 ～sirayuki～ 【WhiteFlame】</span></a>

        <div class="metadata">






            <span class="playnav-video-username" dir="ltr"><a title="Play video" href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user/umbrellaguns">umbrellaguns</a></span>
              <span dir="ltr"> -  3,615 views</span>



        </div>

        <div style="display:none" id="playnav-video-play-favorites-all-0">IP6ddOHk5gQ</div>
      </div>
    </div>
  </div>

      



  <div id="playnav-video-play-favorites-all-1-Mv9qOOhvFBg" class="playnav-item playnav-video">
    <div style="display:none" class="encryptedVideoId">Mv9qOOhvFBg</div>

    <div id="playnav-video-play-favorites-all-1-Mv9qOOhvFBg-selector" class="selector"></div>
    <div class="content">
      <div class="playnav-video-thumb">
          
  
  
  
    
  
  
    
  
  
  
  
    
    
  
  


<a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/watch?v=Mv9qOOhvFBg" class="video-thumb ux-thumb-94" id="video-thumb-Mv9qOOhvFBg-4614317"><span class="img"><img src="/YouTube - YujiTanaka19920818&#39;s Channel_files/default(1).jpg" onclick="playnav.playVideo(&#39;favorites-all&#39;,&#39;1&#39;,&#39;Mv9qOOhvFBg&#39;);return false;" title="【名探偵コナン】高校生工藤新一【MAD】"></span>    
<span class="video-time">4:54</span></a>

      </div>
      <div class="playnav-video-info">
        <a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/watch?v=Mv9qOOhvFBg" class="playnav-item-title ellipsis" onclick="playnav.playVideo(&#39;favorites-all&#39;,&#39;1&#39;,&#39;Mv9qOOhvFBg&#39;);return false;" id="playnav-video-title-play-favorites-all-1-Mv9qOOhvFBg"><span dir="ltr">【名探偵コナン】高校生工藤新一【MAD】</span></a>

        <div class="metadata">






            <span class="playnav-video-username" dir="ltr"><a title="Play video" href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user/floatsack1412">floatsack...</a></span>
              <span dir="ltr"> -  39,109 views</span>



        </div>

        <div style="display:none" id="playnav-video-play-favorites-all-1">Mv9qOOhvFBg</div>
      </div>
    </div>
  </div>

      



  <div id="playnav-video-play-favorites-all-2-s_DLy58g9ss" class="playnav-item playnav-video">
    <div style="display:none" class="encryptedVideoId">s_DLy58g9ss</div>

    <div id="playnav-video-play-favorites-all-2-s_DLy58g9ss-selector" class="selector"></div>
    <div class="content">
      <div class="playnav-video-thumb">
          
  
  
  
    
  
  
    
  
  
  
  
    
    
  
  


<a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/watch?v=s_DLy58g9ss" class="video-thumb ux-thumb-94" id="video-thumb-s_DLy58g9ss-9462860"><span class="img"><img src="/YouTube - YujiTanaka19920818&#39;s Channel_files/default(2).jpg" onclick="playnav.playVideo(&#39;favorites-all&#39;,&#39;2&#39;,&#39;s_DLy58g9ss&#39;);return false;" title="【名探偵コナン】真実ノムコウ【トラウMAD】"></span>    
<span class="video-time">4:21</span></a>

      </div>
      <div class="playnav-video-info">
        <a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/watch?v=s_DLy58g9ss" class="playnav-item-title ellipsis" onclick="playnav.playVideo(&#39;favorites-all&#39;,&#39;2&#39;,&#39;s_DLy58g9ss&#39;);return false;" id="playnav-video-title-play-favorites-all-2-s_DLy58g9ss"><span dir="ltr">Video</span></a>

        <div class="metadata">






            <span class="playnav-video-username" dir="ltr"><a title="Play video" href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user/floatsack1412">floatsack...</a></span>
              <span dir="ltr"> -  7,955 views</span>



        </div>

        <div style="display:none" id="playnav-video-play-favorites-all-2">s_DLy58g9ss</div>
      </div>
    </div>
  </div>

  <div class="cb"></div>

    <div class="playnav-play-column-all">
        <div class="playnav-more"><a class="channel-cmd" href="javascript:;" onclick="playnav.selectTab(&#39;favorites&#39;);">see all</a></div>

            <div class="arranger-link" id="arranger-link-favorites">
    <a class="channel-cmd" href="javascript:;" onmousedown="playnav.toggleArranger(&#39;favorites&#39;)">arrange</a>
  </div>


    </div>
    <div class="spacer">&nbsp;</div>

      <div class="scrollbox-separator">
    <div class="outer-box-bg-as-border"></div>
  </div>


    <input type="hidden" id="playnav-playlist-favorites-count" value="38">
      <div class="playnav-playlist-header">
      <a href="javascript:;" style="text-decoration:none" onclick="playnav.selectTab(&#39;favorites&#39;)" class="title title-text-color">
      <span id="playnav-playlist-favorites-all-title" class="title">Favorites</span>
        (38)
      </a>

    
  </div>

    
      



  <div id="playnav-video-play-favorites-all-0-IP6ddOHk5gQ" class="playnav-item playnav-video">
    <div style="display:none" class="encryptedVideoId">IP6ddOHk5gQ</div>

    <div id="playnav-video-play-favorites-all-0-IP6ddOHk5gQ-selector" class="selector"></div>
    <div class="content">
      <div class="playnav-video-thumb">
          
  
  
  
    
  
  
    
  
  
  
  
    
    
  
  


<a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/watch?v=IP6ddOHk5gQ" class="video-thumb ux-thumb-94" id="video-thumb-IP6ddOHk5gQ-8353213"><span class="img"><img src="/YouTube - YujiTanaka19920818&#39;s Channel_files/default.jpg" onclick="playnav.playVideo(&#39;favorites-all&#39;,&#39;0&#39;,&#39;IP6ddOHk5gQ&#39;);return false;" title="【最高音賍】 Usa (うさ) ／ 白雪 ～sirayuki～ 【WhiteFlame】"></span>    
<span class="video-time">4:36</span></a>

      </div>
      <div class="playnav-video-info">
        <a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/watch?v=IP6ddOHk5gQ" class="playnav-item-title ellipsis" onclick="playnav.playVideo(&#39;favorites-all&#39;,&#39;0&#39;,&#39;IP6ddOHk5gQ&#39;);return false;" id="playnav-video-title-play-favorites-all-0-IP6ddOHk5gQ"><span dir="ltr">【最高音賍】 Usa (うさ) ／ 白雪 ～sirayuki～ 【WhiteFlame】</span></a>

        <div class="metadata">






            <span class="playnav-video-username" dir="ltr"><a title="Play video" href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user/umbrellaguns">umbrellaguns</a></span>
              <span dir="ltr"> -  3,615 views</span>



        </div>

        <div style="display:none" id="playnav-video-play-favorites-all-0">IP6ddOHk5gQ</div>
      </div>
    </div>
  </div>

      



  <div id="playnav-video-play-favorites-all-1-Mv9qOOhvFBg" class="playnav-item playnav-video">
    <div style="display:none" class="encryptedVideoId">Mv9qOOhvFBg</div>

    <div id="playnav-video-play-favorites-all-1-Mv9qOOhvFBg-selector" class="selector"></div>
    <div class="content">
      <div class="playnav-video-thumb">
          
  
  
  
    
  
  
    
  
  
  
  
    
    
  
  


<a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/watch?v=Mv9qOOhvFBg" class="video-thumb ux-thumb-94" id="video-thumb-Mv9qOOhvFBg-4614317"><span class="img"><img src="/YouTube - YujiTanaka19920818&#39;s Channel_files/default(1).jpg" onclick="playnav.playVideo(&#39;favorites-all&#39;,&#39;1&#39;,&#39;Mv9qOOhvFBg&#39;);return false;" title="【名探偵コナン】高校生工藤新一【MAD】"></span>    
<span class="video-time">4:54</span></a>

      </div>
      <div class="playnav-video-info">
        <a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/watch?v=Mv9qOOhvFBg" class="playnav-item-title ellipsis" onclick="playnav.playVideo(&#39;favorites-all&#39;,&#39;1&#39;,&#39;Mv9qOOhvFBg&#39;);return false;" id="playnav-video-title-play-favorites-all-1-Mv9qOOhvFBg"><span dir="ltr">【名探偵コナン】高校生工藤新一【MAD】</span></a>

        <div class="metadata">






            <span class="playnav-video-username" dir="ltr"><a title="Play video" href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user/floatsack1412">floatsack...</a></span>
              <span dir="ltr"> -  39,109 views</span>



        </div>

        <div style="display:none" id="playnav-video-play-favorites-all-1">Mv9qOOhvFBg</div>
      </div>
    </div>
  </div>

      



  <div id="playnav-video-play-favorites-all-2-s_DLy58g9ss" class="playnav-item playnav-video">
    <div style="display:none" class="encryptedVideoId">s_DLy58g9ss</div>

    <div id="playnav-video-play-favorites-all-2-s_DLy58g9ss-selector" class="selector"></div>
    <div class="content">
      <div class="playnav-video-thumb">
          
  
  
  
    
  
  
    
  
  
  
  
    
    
  
  


<a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/watch?v=s_DLy58g9ss" class="video-thumb ux-thumb-94" id="video-thumb-s_DLy58g9ss-9462860"><span class="img"><img src="/YouTube - YujiTanaka19920818&#39;s Channel_files/default(2).jpg" onclick="playnav.playVideo(&#39;favorites-all&#39;,&#39;2&#39;,&#39;s_DLy58g9ss&#39;);return false;" title="【名探偵コナン】真実ノムコウ【トラウMAD】"></span>    
<span class="video-time">4:21</span></a>

      </div>
      <div class="playnav-video-info">
        <a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/watch?v=s_DLy58g9ss" class="playnav-item-title ellipsis" onclick="playnav.playVideo(&#39;favorites-all&#39;,&#39;2&#39;,&#39;s_DLy58g9ss&#39;);return false;" id="playnav-video-title-play-favorites-all-2-s_DLy58g9ss"><span dir="ltr">【名探偵コナン】真実ノムコウ【トラウMAD】</span></a>

        <div class="metadata">






            <span class="playnav-video-username" dir="ltr"><a title="Play video" href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user/floatsack1412">floatsack...</a></span>
              <span dir="ltr"> -  7,955 views</span>



        </div>

        <div style="display:none" id="playnav-video-play-favorites-all-2">s_DLy58g9ss</div>
      </div>
    </div>
  </div>

  <div class="cb"></div>

    <div class="playnav-play-column-all">
        <div class="playnav-more"><a class="channel-cmd" href="javascript:;" onclick="playnav.selectTab(&#39;favorites&#39;);">see all</a></div>

            <div class="arranger-link" id="arranger-link-favorites">
    <a class="channel-cmd" href="javascript:;" onmousedown="playnav.toggleArranger(&#39;favorites&#39;)">arrange</a>
  </div>


    </div>
    <div class="spacer">&nbsp;</div>

      <div class="scrollbox-separator">
    <div class="outer-box-bg-as-border"></div>
  </div>



          </div>
        </div>
      </div>
    </div>
  </div>



        </div>
    </div>
  </div>
  <div id="playnav-play-loading" class="loading">
      <div class="cover outer-box-bg-color"></div>
  <div class="image-holder">
    <div class="image-holder-middle">
      <div class="image-holder-inner">
        <img src="/YouTube - YujiTanaka19920818&#39;s Channel_files/icn_loading_animated-vfl24663.gif">
      </div>
    </div>
  </div>

  </div>

        </div>
        <div id="playnav-gridview" class="" style="display: none;">
            <div id="playnav-grid-panel">
    <div id="playnav-grid-content">
    </div>
  </div>
  <div id="playnav-grid-loading" class="loading">
      <div class="cover outer-box-bg-color"></div>
  <div class="image-holder">
    <div class="image-holder-middle">
      <div class="image-holder-inner">
        <img src="/YouTube - YujiTanaka19920818&#39;s Channel_files/icn_loading_animated-vfl24663.gif">
      </div>
    </div>
  </div>

  </div>

        </div>
      </div>
      <script type="text/javascript">
    yt.pubsub.subscribe('init', function() { playnav.initDom(); });
  </script>

  </div>
  <div style="display: none">
      <div id="playnav-spinny-graphic">
    <img src="/YouTube - YujiTanaka19920818&#39;s Channel_files/icn_loading_animated-vfl24663.gif" style="text-align:center; padding:30px 280px">
  </div>
  <div id="playnav-centered-spinny-graphic">
    <table><tbody><tr><td style="vertical-align:top; text-align: center">
      <img src="./YouTube - YujiTanaka19920818&#39;s Channel_files/icn_loading_animated-vfl24663.gif" style="text-align:center; padding:30px 300px">
    </td></tr></tbody></table>
  </div>

  </div>
  <div style="display: none" id="playnav-debug-log">---</div>


      <div class="outer-box" id="main-channel-content" style="z-index: 0">
      <div class="left-column" id="main-channel-left">
            <div class="inner-box">
    <div style="float:left;padding:0 4px 4px 0" class="link-as-border-color">
        <div class="user-thumb-xlarge link-as-border-color"><div>
<a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user/YujiTanaka19920818">
    <img id="" src="./YouTube - YujiTanaka19920818&#39;s Channel_files/no_videos_140-vfl121286.png" alt="YujiTanaka19920818">
</a>
  </div></div>

    </div>
    <div style="float:left;width:170px">
      <div class="box-title title-text-color" title="YujiTanaka19920818" style="float:none;padding-left:4px;margin-top:-2px;width:170px;overflow:hidden;font-size:100%">
        YujiTanaka19920818
      </div>
        <div class="opacity70" style="padding-left: 8px;width:170px">
Your channel viewers will see links here, including "subscribe" and "add as friend".
        </div>
    </div>
    <div id="position-edit-subscription-in-channel">
    </div>
    <div class="cb"></div>
  </div>

  <div class="inner-box" id="user_profile">
        <form name="edit_form_user_profile" id="edit_form_user_profile">

    <div style="float:left;" class="box-title title-text-color">
Profile
    </div>

    <div style="float:right;;_display:inline;white-space:nowrap">
        <div style="float:right;padding:0 4px;position:relative">
          <a class="channel-cmd" href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user#" onclick="toggle_edit_mode(&#39;user_profile&#39;);return false" id="user_profile_edit_link">edit</a>
          <img src="./YouTube - YujiTanaka19920818&#39;s Channel_files/pixel-vfl73.gif" class="edit-widget" style="left:3px">
        </div>
    </div>
    <div class="cb"></div>

  <div id="user_profile-body">
      <div class="edit_info">
        <div class="edit_top_box">
          

            <div class="user_profile_save_cancel" style="position:relative">
    <button type="button" class=" yt-uix-button yt-uix-button-primary" onclick="save_profile_box();return false;;return false;"><span class="yt-uix-button-content">Save Changes</span></button>
or
    <a href="javascript:cancel_edit_mode(&#39;user_profile&#39;);">cancel</a>
    <div class="save_overlay" style="padding:0.4em;padding-left:3em;width:60%">
      <img src="./YouTube - YujiTanaka19920818&#39;s Channel_files/icn_loading_animated-vfl24663.gif">
    </div>
  </div>

        </div>
      </div>

    <div id="user_profile-messages" style="color:#333;margin:1em;padding:1em;display:none"></div>

      <div class="edit_info spacer">&nbsp;</div>
  <div class="profile_info">
        <div class="edit_info">
    <div class="edit_profile_separator spacer">&nbsp;</div>
    <div class="spacer">&nbsp;</div>
    <div style="display:none"><input name="hidden_fields" id="hide_first_name" type="checkbox" value="first_name"></div>
    <div style="float:left"><input name="displayed_fields" id="show_first_name" type="checkbox" checked="" style="vertical-align:text-bottom" value="first_name" onclick="update_hidden_field(&#39;first_name&#39;)"></div>
    <div id="edit_info_first_name" style="float:left;padding-left:4px;width:240px">
    <div style="float:left;font-weight:bold">Name:</div>
    <div style="display:none;border:1px solid #f33;color:#c00" id="profile_errors_first_name"></div>
    <div style="float:right;text-align:right;">
          <div onclick="swap_with_input(&#39;first_name&#39;, true);" id="profile_temp_first_name" class="edit_value">&nbsp;</div>
          <input onblur="swap_with_input(&#39;first_name&#39;);" type="text" name="first_name" id="profile_edit_first_name" value="" class="edit_text" style="display:none" onkeypress="if (event.keyCode==13) {this.blur();return false;}">
    </div>
    </div>
    <div class="spacer">&nbsp;</div>
  </div>


    <div class="show_info outer-box-bg-as-border">
    <div class="profile-info-label">Channel Views:</div>
    <div class="profile-info-value" id="profile_show_viewed_count">0</div>
    <div class="cb"></div>
  </div>


        <div class="edit_info">
    <div class="edit_profile_separator spacer">&nbsp;</div>
    <div class="spacer">&nbsp;</div>
    <div style="display:none"><input name="hidden_fields" id="hide_total_video_views" type="checkbox" value="total_video_views"></div>
    <div style="float:left"><input name="displayed_fields" id="show_total_video_views" type="checkbox" checked="" style="vertical-align:text-bottom" value="total_video_views" onclick="update_hidden_field(&#39;total_video_views&#39;)"></div>
    <div id="edit_info_total_video_views" style="float:left;padding-left:4px;width:240px">
    <div style="float:left;font-weight:bold">Total Upload Views:</div>
    <div style="display:none;border:1px solid #f33;color:#c00" id="profile_errors_total_video_views"></div>
    <div style="float:right;text-align:right;">
        0
    </div>
    </div>
    <div class="spacer">&nbsp;</div>
  </div>

      <div class="show_info outer-box-bg-as-border">
    <div class="profile-info-label">Total Upload Views:</div>
    <div class="profile-info-value" id="profile_show_total_video_views">0</div>
    <div class="cb"></div>
  </div>




          <div class="edit_info">
    <div class="edit_profile_separator spacer">&nbsp;</div>
    <div class="spacer">&nbsp;</div>
    <div style="display:none"><input name="hidden_fields" id="hide_age" type="checkbox" value="age"></div>
    <div style="float:left"><input name="displayed_fields" id="show_age" type="checkbox" checked="" style="vertical-align:text-bottom" value="age" onclick="update_hidden_field(&#39;age&#39;)"></div>
    <div id="edit_info_age" style="float:left;padding-left:4px;width:240px">
    <div style="float:left;font-weight:bold">Age:</div>
    <div style="display:none;border:1px solid #f33;color:#c00" id="profile_errors_age"></div>
    <div style="float:right;text-align:right;">
        22
    </div>
    </div>
    <div class="spacer">&nbsp;</div>
  </div>

      <div class="show_info outer-box-bg-as-border">
    <div class="profile-info-label">Age:</div>
    <div class="profile-info-value" id="profile_show_age">22</div>
    <div class="cb"></div>
  </div>


    <div class="show_info outer-box-bg-as-border">
    <div class="profile-info-label">Joined:</div>
    <div class="profile-info-value" id="profile_show_member_since">February 25, 2009</div>
    <div class="cb"></div>
  </div>

        <div class="edit_info">
    <div class="edit_profile_separator spacer">&nbsp;</div>
    <div class="spacer">&nbsp;</div>
    <div style="display:none"><input name="hidden_fields" id="hide_last_login" type="checkbox" value="last_login"></div>
    <div style="float:left"><input name="displayed_fields" id="show_last_login" type="checkbox" checked="" style="vertical-align:text-bottom" value="last_login" onclick="update_hidden_field(&#39;last_login&#39;)"></div>
    <div id="edit_info_last_login" style="float:left;padding-left:4px;width:240px">
    <div style="float:left;font-weight:bold">Last Visit Date:</div>
    <div style="display:none;border:1px solid #f33;color:#c00" id="profile_errors_last_login"></div>
    <div style="float:right;text-align:right;">
        1 year ago
    </div>
    </div>
    <div class="spacer">&nbsp;</div>
  </div>

      <div class="show_info outer-box-bg-as-border">
    <div class="profile-info-label">Last Visit Date:</div>
    <div class="profile-info-value" id="profile_show_last_login">1 year ago</div>
    <div class="cb"></div>
  </div>


        <div class="edit_info">
    <div class="edit_profile_separator spacer">&nbsp;</div>
    <div class="spacer">&nbsp;</div>
    <div style="display:none"><input name="hidden_fields" id="hide_subscriber_count" type="checkbox" value="subscriber_count"></div>
    <div style="float:left"><input name="displayed_fields" id="show_subscriber_count" type="checkbox" checked="" style="vertical-align:text-bottom" value="subscriber_count" onclick="update_hidden_field(&#39;subscriber_count&#39;)"></div>
    <div id="edit_info_subscriber_count" style="float:left;padding-left:4px;width:240px">
    <div style="float:left;font-weight:bold">Subscribers:</div>
    <div style="display:none;border:1px solid #f33;color:#c00" id="profile_errors_subscriber_count"></div>
    <div style="float:right;text-align:right;">
        0
    </div>
    </div>
    <div class="spacer">&nbsp;</div>
  </div>

      <div class="show_info outer-box-bg-as-border">
    <div class="profile-info-label">Subscribers:</div>
    <div class="profile-info-value" id="profile_show_subscriber_count">0</div>
    <div class="cb"></div>
  </div>


        <div class="edit_info">
    <div class="edit_profile_separator spacer">&nbsp;</div>
    <div class="spacer">&nbsp;</div>
    <div style="display:none"><input name="hidden_fields" id="hide_url" type="checkbox" value="url"></div>
    <div style="float:left"><input name="displayed_fields" id="show_url" type="checkbox" checked="" style="vertical-align:text-bottom" value="url" onclick="update_hidden_field(&#39;url&#39;)"></div>
    <div id="edit_info_url" style="float:left;padding-left:4px;width:240px">
    <div style="float:left;font-weight:bold">Website:</div>
    <div style="display:none;border:1px solid #f33;color:#c00" id="profile_errors_url"></div>
    <div style="float:right;text-align:right;">
          <div onclick="swap_with_input(&#39;url&#39;, true);" id="profile_temp_url" class="edit_value">&nbsp;</div>
          <input onblur="swap_with_input(&#39;url&#39;);" type="text" name="url" id="profile_edit_url" value="" class="edit_text" style="display:none" onkeypress="if (event.keyCode==13) {this.blur();return false;}">
    </div>
    </div>
    <div class="spacer">&nbsp;</div>
  </div>


    <div class="edit_info">
      <div class="edit_profile_separator spacer">&nbsp;</div>
      <div class="spacer">&nbsp;</div>
      <div style="display:none"><input name="hidden_fields" id="hide_description" type="checkbox" value="description"></div>
      <div style="float:left"><input name="displayed_fields" id="show_description" type="checkbox" checked="" style="vertical-align:text-bottom" value="description" onclick="update_hidden_field(&#39;description&#39;)"></div>
      <div style="float:left" id="edit_info_description">
        <div><b>Channel Description:</b></div>
        <div onclick="swap_with_input(&#39;description&#39;, true, true);" id="profile_temp_description" class="edit_value" style="width:240px;float:none;">
&nbsp;
          
        </div>
        <textarea onkeypress="length_check(event, this, 5000)" onblur="swap_with_input(&#39;description&#39;);" type="text" name="description" id="profile_edit_description" class="edit_text" style="width:235px;height:4em; display:none" onkeyup="goog.i18n.bidi.setDirAttribute(event,this)"></textarea>
      </div>
      <div class="spacer">&nbsp;</div>
    </div>
    <div class="edit_info">
      <div class="edit_profile_separator spacer">&nbsp;</div>
      <div class="spacer">&nbsp;</div>
      <div style="display:none"><input name="hidden_fields" id="hide_profile" type="checkbox" value="profile"></div>
      <div style="float:left"><input name="displayed_fields" id="show_profile" type="checkbox" checked="" style="vertical-align:text-bottom" value="profile" onclick="update_hidden_field(&#39;profile&#39;)"></div>
      <div style="float:left" id="edit_info_profile">
        <div style="margin-right: 4px;"><b>About Me:</b></div>
        <div onclick="swap_with_input(&#39;profile&#39;, true, true);" id="profile_temp_profile" class="edit_value" style="width:240px;float:none;">
&nbsp;
          
        </div>
        <textarea onkeypress="length_check(event, this, 5000)" onblur="swap_with_input(&#39;profile&#39;);" type="text" name="profile" id="profile_edit_profile" class="edit_text" style="width:235px;height:4em; display:none" onkeyup="goog.i18n.bidi.setDirAttribute(event,this)"></textarea>
      </div>
      <div class="spacer">&nbsp;</div>
    </div>
        <div class="edit_info">
    <div class="edit_profile_separator spacer">&nbsp;</div>
    <div class="spacer">&nbsp;</div>
    <div style="display:none"><input name="hidden_fields" id="hide_hometown" type="checkbox" value="hometown"></div>
    <div style="float:left"><input name="displayed_fields" id="show_hometown" type="checkbox" checked="" style="vertical-align:text-bottom" value="hometown" onclick="update_hidden_field(&#39;hometown&#39;)"></div>
    <div id="edit_info_hometown" style="float:left;padding-left:4px;width:240px">
    <div style="float:left;font-weight:bold">Hometown:</div>
    <div style="display:none;border:1px solid #f33;color:#c00" id="profile_errors_hometown"></div>
    <div style="float:right;text-align:right;">
          <div onclick="swap_with_input(&#39;hometown&#39;, true);" id="profile_temp_hometown" class="edit_value">&nbsp;</div>
          <input onblur="swap_with_input(&#39;hometown&#39;);" type="text" name="hometown" id="profile_edit_hometown" value="" class="edit_text" style="display:none" onkeypress="if (event.keyCode==13) {this.blur();return false;}">
    </div>
    </div>
    <div class="spacer">&nbsp;</div>
  </div>


        <div class="edit_info">
    <div class="edit_profile_separator spacer">&nbsp;</div>
    <div class="spacer">&nbsp;</div>
    <div style="display:none"><input name="hidden_fields" id="hide_country" type="checkbox" value="country"></div>
    <div style="float:left"><input name="displayed_fields" id="show_country" type="checkbox" checked="" style="vertical-align:text-bottom" value="country" onclick="update_hidden_field(&#39;country&#39;)"></div>
    <div id="edit_info_country" style="float:left;padding-left:4px;width:240px">
    <div style="float:left;font-weight:bold">Country:</div>
    <div style="display:none;border:1px solid #f33;color:#c00" id="profile_errors_country"></div>
    <div style="float:right;text-align:right;">
          <select name="country" id="profile_edit_country" style="width:150px">
              <option value="AF">Afghanistan</option>
              <option value="AX">Aland Islands</option>
              <option value="AL">Albania</option>
              <option value="DZ">Algeria</option>
              <option value="AS">American Samoa</option>
              <option value="AD">Andorra</option>
              <option value="AO">Angola</option>
              <option value="AI">Anguilla</option>
              <option value="AQ">Antarctica</option>
              <option value="AG">Antigua and Barbuda</option>
              <option value="AR">Argentina</option>
              <option value="AM">Armenia</option>
              <option value="AW">Aruba</option>
              <option value="AU">Australia</option>
              <option value="AT">Austria</option>
              <option value="AZ">Azerbaijan</option>
              <option value="BS">Bahamas</option>
              <option value="BH">Bahrain</option>
              <option value="BD">Bangladesh</option>
              <option value="BB">Barbados</option>
              <option value="BY">Belarus</option>
              <option value="BE">Belgium</option>
              <option value="BZ">Belize</option>
              <option value="BJ">Benin</option>
              <option value="BM">Bermuda</option>
              <option value="BT">Bhutan</option>
              <option value="BO">Bolivia</option>
              <option value="BA">Bosnia and Herzegovina</option>
              <option value="BW">Botswana</option>
              <option value="BV">Bouvet Island</option>
              <option value="BR">Brazil</option>
              <option value="IO">British Indian Ocean Territory</option>
              <option value="VG">British Virgin Islands</option>
              <option value="BN">Brunei</option>
              <option value="BG">Bulgaria</option>
              <option value="BF">Burkina Faso</option>
              <option value="BI">Burundi</option>
              <option value="KH">Cambodia</option>
              <option value="CM">Cameroon</option>
              <option value="CA">Canada</option>
              <option value="CV">Cape Verde</option>
              <option value="KY">Cayman Islands</option>
              <option value="CF">Central African Republic</option>
              <option value="TD">Chad</option>
              <option value="CL">Chile</option>
              <option value="CN">China</option>
              <option value="CX">Christmas Island</option>
              <option value="CC">Cocos (Keeling) Islands</option>
              <option value="CO">Colombia</option>
              <option value="KM">Comoros</option>
              <option value="CG">Congo</option>
              <option value="CD">Congo - Democratic Republic of</option>
              <option value="CK">Cook Islands</option>
              <option value="CR">Costa Rica</option>
              <option value="CI">Cote d'Ivoire</option>
              <option value="HR">Croatia</option>
              <option value="CU">Cuba</option>
              <option value="CY">Cyprus</option>
              <option value="CZ">Czech Republic</option>
              <option value="DK">Denmark</option>
              <option value="DJ">Djibouti</option>
              <option value="DM">Dominica</option>
              <option value="DO">Dominican Republic</option>
              <option value="EC">Ecuador</option>
              <option value="EG">Egypt</option>
              <option value="SV">El Salvador</option>
              <option value="GQ">Equatorial Guinea</option>
              <option value="ER">Eritrea</option>
              <option value="EE">Estonia</option>
              <option value="ET">Ethiopia</option>
              <option value="FK">Falkland Islands (Islas Malvinas)</option>
              <option value="FO">Faroe Islands</option>
              <option value="FJ">Fiji</option>
              <option value="FI">Finland</option>
              <option value="FR">France</option>
              <option value="GF">French Guiana</option>
              <option value="PF">French Polynesia</option>
              <option value="TF">French Southern Territories</option>
              <option value="GA">Gabon</option>
              <option value="GM">Gambia</option>
              <option value="GE">Georgia</option>
              <option value="DE">Germany</option>
              <option value="GH">Ghana</option>
              <option value="GI">Gibraltar</option>
              <option value="GR">Greece</option>
              <option value="GL">Greenland</option>
              <option value="GD">Grenada</option>
              <option value="GP">Guadeloupe</option>
              <option value="GU">Guam</option>
              <option value="GT">Guatemala</option>
              <option value="GG">Guernsey</option>
              <option value="GN">Guinea</option>
              <option value="GW">Guinea-Bissau</option>
              <option value="GY">Guyana</option>
              <option value="HT">Haiti</option>
              <option value="HM">Heard Island and McDonald Islands</option>
              <option value="VA">Holy See (Vatican City State)</option>
              <option value="HN">Honduras</option>
              <option value="HK">Hong Kong</option>
              <option value="HU">Hungary</option>
              <option value="IS">Iceland</option>
              <option value="IN">India</option>
              <option value="ID">Indonesia</option>
              <option value="IR">Iran</option>
              <option value="IQ">Iraq</option>
              <option value="IE">Ireland</option>
              <option value="IM">Isle of Man</option>
              <option value="IL">Israel</option>
              <option value="IT">Italy</option>
              <option value="JM">Jamaica</option>
              <option value="JP" selected="">Japan</option>
              <option value="JE">Jersey</option>
              <option value="JO">Jordan</option>
              <option value="KZ">Kazakhstan</option>
              <option value="KE">Kenya</option>
              <option value="KI">Kiribati</option>
              <option value="KW">Kuwait</option>
              <option value="KG">Kyrgyzstan</option>
              <option value="LA">Laos</option>
              <option value="LV">Latvia</option>
              <option value="LB">Lebanon</option>
              <option value="LS">Lesotho</option>
              <option value="LR">Liberia</option>
              <option value="LY">Libya</option>
              <option value="LI">Liechtenstein</option>
              <option value="LT">Lithuania</option>
              <option value="LU">Luxembourg</option>
              <option value="MO">Macao</option>
              <option value="MK">Macedonia</option>
              <option value="MG">Madagascar</option>
              <option value="MW">Malawi</option>
              <option value="MY">Malaysia</option>
              <option value="MV">Maldives</option>
              <option value="ML">Mali</option>
              <option value="MT">Malta</option>
              <option value="MH">Marshall Islands</option>
              <option value="MQ">Martinique</option>
              <option value="MR">Mauritania</option>
              <option value="MU">Mauritius</option>
              <option value="YT">Mayotte</option>
              <option value="MX">Mexico</option>
              <option value="FM">Micronesia - Federated States of</option>
              <option value="MD">Moldova</option>
              <option value="MC">Monaco</option>
              <option value="MN">Mongolia</option>
              <option value="ME">Montenegro</option>
              <option value="MS">Montserrat</option>
              <option value="MA">Morocco</option>
              <option value="MZ">Mozambique</option>
              <option value="MM">Myanmar</option>
              <option value="NA">Namibia</option>
              <option value="NR">Nauru</option>
              <option value="NP">Nepal</option>
              <option value="NL">Netherlands</option>
              <option value="AN">Netherlands Antilles</option>
              <option value="NC">New Caledonia</option>
              <option value="NZ">New Zealand</option>
              <option value="NI">Nicaragua</option>
              <option value="NE">Niger</option>
              <option value="NG">Nigeria</option>
              <option value="NU">Niue</option>
              <option value="NF">Norfolk Island</option>
              <option value="MP">Northern Mariana Islands</option>
              <option value="KP">North Korea</option>
              <option value="NO">Norway</option>
              <option value="OM">Oman</option>
              <option value="PK">Pakistan</option>
              <option value="PW">Palau</option>
              <option value="PA">Panama</option>
              <option value="PG">Papua New Guinea</option>
              <option value="PY">Paraguay</option>
              <option value="PE">Peru</option>
              <option value="PH">Philippines</option>
              <option value="PN">Pitcairn</option>
              <option value="PL">Poland</option>
              <option value="PT">Portugal</option>
              <option value="PR">Puerto Rico</option>
              <option value="QA">Qatar</option>
              <option value="RE">Reunion</option>
              <option value="RO">Romania</option>
              <option value="RU">Russia</option>
              <option value="RW">Rwanda</option>
              <option value="SH">Saint Helena</option>
              <option value="KN">Saint Kitts and Nevis</option>
              <option value="LC">Saint Lucia</option>
              <option value="PM">Saint Pierre and Miquelon</option>
              <option value="VC">Saint Vincent and the Grenadines</option>
              <option value="WS">Samoa</option>
              <option value="SM">San Marino</option>
              <option value="ST">Sao Tome and Principe</option>
              <option value="SA">Saudi Arabia</option>
              <option value="SN">Senegal</option>
              <option value="RS">Serbia</option>
              <option value="SC">Seychelles</option>
              <option value="SL">Sierra Leone</option>
              <option value="SG">Singapore</option>
              <option value="SK">Slovakia</option>
              <option value="SI">Slovenia</option>
              <option value="SB">Solomon Islands</option>
              <option value="SO">Somalia</option>
              <option value="ZA">South Africa</option>
              <option value="GS">South Georgia and the South Sandwich Islands</option>
              <option value="KR">South Korea</option>
              <option value="ES">Spain</option>
              <option value="LK">Sri Lanka</option>
              <option value="SD">Sudan</option>
              <option value="SR">Suriname</option>
              <option value="SJ">Svalbard and Jan Mayen</option>
              <option value="SZ">Swaziland</option>
              <option value="SE">Sweden</option>
              <option value="CH">Switzerland</option>
              <option value="SY">Syria</option>
              <option value="TW">Taiwan</option>
              <option value="TJ">Tajikistan</option>
              <option value="TZ">Tanzania</option>
              <option value="TH">Thailand</option>
              <option value="TL">Timor-Leste</option>
              <option value="TG">Togo</option>
              <option value="TK">Tokelau</option>
              <option value="TO">Tonga</option>
              <option value="TT">Trinidad and Tobago</option>
              <option value="TN">Tunisia</option>
              <option value="TR">Turkey</option>
              <option value="TM">Turkmenistan</option>
              <option value="TC">Turks and Caicos Islands</option>
              <option value="TV">Tuvalu</option>
              <option value="UG">Uganda</option>
              <option value="UA">Ukraine</option>
              <option value="AE">United Arab Emirates</option>
              <option value="GB">United Kingdom</option>
              <option value="US">United States</option>
              <option value="UM">United States Minor Outlying Islands</option>
              <option value="VI">United States Virgin Islands</option>
              <option value="UY">Uruguay</option>
              <option value="UZ">Uzbekistan</option>
              <option value="VU">Vanuatu</option>
              <option value="VE">Venezuela</option>
              <option value="VN">Vietnam</option>
              <option value="WF">Wallis and Futuna</option>
              <option value="PS">West Bank</option>
              <option value="EH">Western Sahara</option>
              <option value="YE">Yemen</option>
              <option value="ZM">Zambia</option>
              <option value="ZW">Zimbabwe</option>
          </select>
    </div>
    </div>
    <div class="spacer">&nbsp;</div>
  </div>

      <div class="show_info outer-box-bg-as-border">
    <div class="profile-info-label">Country:</div>
    <div class="profile-info-value" id="profile_show_country">Japan</div>
    <div class="cb"></div>
  </div>


        <div class="edit_info">
    <div class="edit_profile_separator spacer">&nbsp;</div>
    <div class="spacer">&nbsp;</div>
    <div style="display:none"><input name="hidden_fields" id="hide_occupation" type="checkbox" value="occupation"></div>
    <div style="float:left"><input name="displayed_fields" id="show_occupation" type="checkbox" checked="" style="vertical-align:text-bottom" value="occupation" onclick="update_hidden_field(&#39;occupation&#39;)"></div>
    <div id="edit_info_occupation" style="float:left;padding-left:4px;width:240px">
    <div style="float:left;font-weight:bold">Occupation:</div>
    <div style="display:none;border:1px solid #f33;color:#c00" id="profile_errors_occupation"></div>
    <div style="float:right;text-align:right;">
          <div onclick="swap_with_input(&#39;occupation&#39;, true);" id="profile_temp_occupation" class="edit_value">&nbsp;</div>
          <input onblur="swap_with_input(&#39;occupation&#39;);" type="text" name="occupation" id="profile_edit_occupation" value="" class="edit_text" style="display:none" onkeypress="if (event.keyCode==13) {this.blur();return false;}">
    </div>
    </div>
    <div class="spacer">&nbsp;</div>
  </div>


        <div class="edit_info">
    <div class="edit_profile_separator spacer">&nbsp;</div>
    <div class="spacer">&nbsp;</div>
    <div style="display:none"><input name="hidden_fields" id="hide_companies" type="checkbox" value="companies"></div>
    <div style="float:left"><input name="displayed_fields" id="show_companies" type="checkbox" checked="" style="vertical-align:text-bottom" value="companies" onclick="update_hidden_field(&#39;companies&#39;)"></div>
    <div id="edit_info_companies" style="float:left;padding-left:4px;width:240px">
    <div style="float:left;font-weight:bold">Companies:</div>
    <div style="display:none;border:1px solid #f33;color:#c00" id="profile_errors_companies"></div>
    <div style="float:right;text-align:right;">
          <div onclick="swap_with_input(&#39;companies&#39;, true);" id="profile_temp_companies" class="edit_value">&nbsp;</div>
          <input onblur="swap_with_input(&#39;companies&#39;);" type="text" name="companies" id="profile_edit_companies" value="" class="edit_text" style="display:none" onkeypress="if (event.keyCode==13) {this.blur();return false;}">
    </div>
    </div>
    <div class="spacer">&nbsp;</div>
  </div>


        <div class="edit_info">
    <div class="edit_profile_separator spacer">&nbsp;</div>
    <div class="spacer">&nbsp;</div>
    <div style="display:none"><input name="hidden_fields" id="hide_schools" type="checkbox" value="schools"></div>
    <div style="float:left"><input name="displayed_fields" id="show_schools" type="checkbox" checked="" style="vertical-align:text-bottom" value="schools" onclick="update_hidden_field(&#39;schools&#39;)"></div>
    <div id="edit_info_schools" style="float:left;padding-left:4px;width:240px">
    <div style="float:left;font-weight:bold">Schools:</div>
    <div style="display:none;border:1px solid #f33;color:#c00" id="profile_errors_schools"></div>
    <div style="float:right;text-align:right;">
          <div onclick="swap_with_input(&#39;schools&#39;, true);" id="profile_temp_schools" class="edit_value">&nbsp;</div>
          <input onblur="swap_with_input(&#39;schools&#39;);" type="text" name="schools" id="profile_edit_schools" value="" class="edit_text" style="display:none" onkeypress="if (event.keyCode==13) {this.blur();return false;}">
    </div>
    </div>
    <div class="spacer">&nbsp;</div>
  </div>


        <div class="edit_info">
    <div class="edit_profile_separator spacer">&nbsp;</div>
    <div class="spacer">&nbsp;</div>
    <div style="display:none"><input name="hidden_fields" id="hide_hobbies" type="checkbox" value="hobbies"></div>
    <div style="float:left"><input name="displayed_fields" id="show_hobbies" type="checkbox" checked="" style="vertical-align:text-bottom" value="hobbies" onclick="update_hidden_field(&#39;hobbies&#39;)"></div>
    <div id="edit_info_hobbies" style="float:left;padding-left:4px;width:240px">
    <div style="float:left;font-weight:bold">Interests:</div>
    <div style="display:none;border:1px solid #f33;color:#c00" id="profile_errors_hobbies"></div>
    <div style="float:right;text-align:right;">
          <div onclick="swap_with_input(&#39;hobbies&#39;, true);" id="profile_temp_hobbies" class="edit_value">&nbsp;</div>
          <input onblur="swap_with_input(&#39;hobbies&#39;);" type="text" name="hobbies" id="profile_edit_hobbies" value="" class="edit_text" style="display:none" onkeypress="if (event.keyCode==13) {this.blur();return false;}">
    </div>
    </div>
    <div class="spacer">&nbsp;</div>
  </div>


        <div class="edit_info">
    <div class="edit_profile_separator spacer">&nbsp;</div>
    <div class="spacer">&nbsp;</div>
    <div style="display:none"><input name="hidden_fields" id="hide_movies" type="checkbox" value="movies"></div>
    <div style="float:left"><input name="displayed_fields" id="show_movies" type="checkbox" checked="" style="vertical-align:text-bottom" value="movies" onclick="update_hidden_field(&#39;movies&#39;)"></div>
    <div id="edit_info_movies" style="float:left;padding-left:4px;width:240px">
    <div style="float:left;font-weight:bold">Movies:</div>
    <div style="display:none;border:1px solid #f33;color:#c00" id="profile_errors_movies"></div>
    <div style="float:right;text-align:right;">
          <div onclick="swap_with_input(&#39;movies&#39;, true);" id="profile_temp_movies" class="edit_value">&nbsp;</div>
          <input onblur="swap_with_input(&#39;movies&#39;);" type="text" name="movies" id="profile_edit_movies" value="" class="edit_text" style="display:none" onkeypress="if (event.keyCode==13) {this.blur();return false;}">
    </div>
    </div>
    <div class="spacer">&nbsp;</div>
  </div>


        <div class="edit_info">
    <div class="edit_profile_separator spacer">&nbsp;</div>
    <div class="spacer">&nbsp;</div>
    <div style="display:none"><input name="hidden_fields" id="hide_music" type="checkbox" value="music"></div>
    <div style="float:left"><input name="displayed_fields" id="show_music" type="checkbox" checked="" style="vertical-align:text-bottom" value="music" onclick="update_hidden_field(&#39;music&#39;)"></div>
    <div id="edit_info_music" style="float:left;padding-left:4px;width:240px">
    <div style="float:left;font-weight:bold">Music:</div>
    <div style="display:none;border:1px solid #f33;color:#c00" id="profile_errors_music"></div>
    <div style="float:right;text-align:right;">
          <div onclick="swap_with_input(&#39;music&#39;, true);" id="profile_temp_music" class="edit_value">&nbsp;</div>
          <input onblur="swap_with_input(&#39;music&#39;);" type="text" name="music" id="profile_edit_music" value="" class="edit_text" style="display:none" onkeypress="if (event.keyCode==13) {this.blur();return false;}">
    </div>
    </div>
    <div class="spacer">&nbsp;</div>
  </div>


        <div class="edit_info">
    <div class="edit_profile_separator spacer">&nbsp;</div>
    <div class="spacer">&nbsp;</div>
    <div style="display:none"><input name="hidden_fields" id="hide_books" type="checkbox" value="books"></div>
    <div style="float:left"><input name="displayed_fields" id="show_books" type="checkbox" checked="" style="vertical-align:text-bottom" value="books" onclick="update_hidden_field(&#39;books&#39;)"></div>
    <div id="edit_info_books" style="float:left;padding-left:4px;width:240px">
    <div style="float:left;font-weight:bold">Books:</div>
    <div style="display:none;border:1px solid #f33;color:#c00" id="profile_errors_books"></div>
    <div style="float:right;text-align:right;">
          <div onclick="swap_with_input(&#39;books&#39;, true);" id="profile_temp_books" class="edit_value">&nbsp;</div>
          <input onblur="swap_with_input(&#39;books&#39;);" type="text" name="books" id="profile_edit_books" value="" class="edit_text" style="display:none" onkeypress="if (event.keyCode==13) {this.blur();return false;}">
    </div>
    </div>
    <div class="spacer">&nbsp;</div>
  </div>


  

    <div class="edit_info edit_top_box">
      <div class="edit_separator">&nbsp;</div>
        <div class="user_profile_save_cancel" style="position:relative">
    <button type="button" class=" yt-uix-button yt-uix-button-primary" onclick="save_profile_box();return false;;return false;"><span class="yt-uix-button-content">Save Changes</span></button>
or
    <a href="javascript:cancel_edit_mode(&#39;user_profile&#39;);">cancel</a>
    <div class="save_overlay" style="padding:0.4em;padding-left:3em;width:60%">
      <img src="./YouTube - YujiTanaka19920818&#39;s Channel_files/icn_loading_animated-vfl24663.gif">
    </div>
  </div>

    </div>
  </div>


  

  </div>

    </form>
  

  <div class="cb"></div>

  </div>

            <div class="inner-box" id="user_recent_activity">
    <form name="edit_form_user_recent_activity" id="edit_form_user_recent_activity">
    <div style="zoom:1">
    <div class="box-title title-text-color">
        Recent Activity &nbsp;
    </div>
    <div class="box-editor">
        <div class="updown_arrows "><img id="user_recent_activity-left-arrow" src="./YouTube - YujiTanaka19920818&#39;s Channel_files/pixel-vfl73.gif" class="module-left-arrow disabled" onclick="move_left(&#39;user_recent_activity&#39;)"><img id="user_recent_activity-up-arrow" src="./YouTube - YujiTanaka19920818&#39;s Channel_files/pixel-vfl73.gif" class="module-up-arrow disabled" onclick="move_up(&#39;user_recent_activity&#39;)"><img id="user_recent_activity-down-arrow" src="./YouTube - YujiTanaka19920818&#39;s Channel_files/pixel-vfl73.gif" class="module-down-arrow" onclick="move_down(&#39;user_recent_activity&#39;)"><img id="user_recent_activity-right-arrow" src="./YouTube - YujiTanaka19920818&#39;s Channel_files/pixel-vfl73.gif" class="module-right-arrow " onclick="move_right(&#39;user_recent_activity&#39;)"></div>

      <div style="float:right">
    <a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/account#sharing/activity">privacy</a>
      </div>
    </div>
    <div class="cb"></div>
    </div>

    <div class="edit_info">
        <div class="edit_top_box">
          

            <div class="user_recent_activity_save_cancel" style="position:relative">
    <button type="button" class=" yt-uix-button yt-uix-button-primary" onclick="save_box_settings(&#39;user_recent_activity&#39;);return false;;return false;"><span class="yt-uix-button-content">Save Changes</span></button>
or
    <a href="javascript:cancel_edit_mode(&#39;user_recent_activity&#39;);">cancel</a>
    <div class="save_overlay" style="padding:0.4em;padding-left:3em;width:60%">
      <img src="./YouTube - YujiTanaka19920818&#39;s Channel_files/icn_loading_animated-vfl24663.gif">
    </div>
  </div>

        </div>
    </div>
    </form>

  <div id="user_recent_activity-messages" style="color:#333;margin:1em;padding:1em;display:none"></div>

  <div id="user_recent_activity-body">
  <div id="feed_success" style="display: none;">
Successfully removed.
  </div>

  <div id="feed_success_custom" style="display: none;">
  </div>

  <div id="feed_error" style="display: none;">
Sorry, an error occurred.
  </div>

  <div id="feed_error_custom" style="display: none;">
  </div>

  <div id="feed_loading" style="display: none; text-align: center;">
    <img src="./YouTube - YujiTanaka19920818&#39;s Channel_files/icn_loading_animated-vfl24663.gif">
  </div>

  <div id="feed_table">


    <div id="feed_bulletin">
      <form name="post_bulletin">

    <table border="0" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td class="input_box_left">
          <span style="font-weight: bold; margin: 0px 3px;">YujiTanaka19920818</span>
        </td>
        <td class="input_box_right" width="100%">
          <input id="bulletin_input" type="text" onkeyup="goog.i18n.bidi.setDirAttribute(event,this)" value="..." onfocus="feed_bulletin_onfocus(&#39;bulletin_input&#39;, &#39;bulletin_default&#39;);" onblur="feed_bulletin_onblur(&#39;bulletin_input&#39;, &#39;bulletin_default&#39;);">
          <input id="bulletin_default" type="hidden" value="...">
        </td>
      </tr>
    </tbody></table>

    <table border="0" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td id="video_link_icon">
          <img src="./YouTube - YujiTanaka19920818&#39;s Channel_files/pixel-vfl73.gif" onclick="yt.style.toggle(&#39;bulletin_video_link&#39;); yt.style.toggle(&#39;other_post_button&#39;); yt.style.toggle(&#39;bulletin_video&#39;); yt.style.toggle(&#39;post_button&#39;); feed_bulletin_onblur(&#39;bulletin_video_input&#39;, &#39;bulletin_video_default&#39;, true);">
        </td>
        <td width="100%">
          <div id="bulletin_video_link" style="display: block;">
            <a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user#" style="font-size: 10px;" class="hLink" onclick="_hidediv(&#39;bulletin_video_link&#39;); _hidediv(&#39;post_button&#39;); _showdiv(&#39;bulletin_video&#39;); _showdiv(&#39;other_post_button&#39;); return false;">
Attach a video
            </a>
          </div>
          <div id="bulletin_video" class="input_box" style="display: none;">
            <input id="bulletin_video_input" type="text" onkeyup="goog.i18n.bidi.setDirAttribute(event,this)" maxlength="250" value="Paste a URL to a YouTube video." onfocus="feed_bulletin_onfocus(&#39;bulletin_video_input&#39;, &#39;bulletin_video_default&#39;);" onblur="feed_bulletin_onblur(&#39;bulletin_video_input&#39;, &#39;bulletin_video_default&#39;);">
          </div>
          <input id="bulletin_video_default" type="hidden" value="Paste a URL to a YouTube video.">
        </td>
        <td>
          <div id="post_button" style="display: block;">
            <input id="post_button_input" type="submit" value="post bulletin" onclick="return post_feed_bulletin(&#39;user_recent_activity&#39;, document.forms.post_bulletin)" disabled="">
          </div>
        </td>
      </tr>
    </tbody></table>

    <div id="other_post_button" style="display: none;">
      <input id="other_post_button_input" type="submit" value="post bulletin" onclick="return post_feed_bulletin(&#39;user_recent_activity&#39;, document.forms.post_bulletin)" disabled="">
    </div>


      </form>
    </div>

      <div class="text-field recent-activity-content outer-box-bg-as-border" style="_height:expression(this.scrollHeight&gt;349?&#39;350px&#39;:&#39;auto&#39;);">
        <table border="0" cellspacing="0" cellpadding="0" width="97%">
              <tbody><tr id="feed_divider_jNQXAC9IVRw">
    <td colspan="3" class="outer-box-bg-as-border divider">&nbsp;</td>    
  </tr>
  <tr id="feed_item_jNQXAC9IVRw" valign="top">
    <td class="feed_icon">
      <img class="master-sprite icon-F" src="./YouTube - YujiTanaka19920818&#39;s Channel_files/pixel-vfl73.gif">
    </td>
    <td>
      <div class="feed_title">

YujiTanaka19920818 favorited a video
                <span class="timestamp">(5 months ago)</span>
      </div>
      <div class="centerpiece">
        <div style="float:left; margin-right: 8px;"><a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/watch?v=IP6ddOHk5gQ" onmousedown="yt.analytics.urchinTracker(&#39;/Events/Channels/RecentActivity/Video&#39;);" rel="nofollow"><img style="width: 60px; height: 45px; border: 1px solid;" src="./YouTube - YujiTanaka19920818&#39;s Channel_files/default.jpg" class="link-as-border-color"></a></div>
          <div dir="ltr">
            <a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/watch?v=IP6ddOHk5gQ" onmousedown="yt.analytics.urchinTracker(&#39;/Events/Channels/RecentActivity/Video&#39;);" rel="nofollow">【最高音賍】 Usa (うさ) ／ 白雪 ～siray...</a>
          </div>
          <div dir="ltr">
                <span id="feed_item_jNQXAC9IVRw_collapsed">
From WhiteFlame presents feat. 巡音ルカ album: <br>【うさ/sm8242669】<br><br>Visit <a href="https://web.archive.org/web/20100818174042/http://whiteflame.jp/" target="_blank" title="http://whiteflame.jp/" rel="nofollow" dir="ltr">http://wh...</a>
      &nbsp;
      <a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user#" onclick="_hidediv(&#39;feed_item_jNQXAC9IVRw_collapsed&#39;); _showdiv(&#39;feed_item_jNQXAC9IVRw_expanded&#39;); return false;" style="font-size: 10px;" class="hLink">more</a>
    </span>
    <span id="feed_item_jNQXAC9IVRw_expanded" style="display:none">
From WhiteFlame presents feat. 巡音ルカ album: <br>【うさ/sm8242669】<br><br>Visit <a href="https://web.archive.org/web/20100818174042/http://whiteflame.jp/" target="_blank" title="http://whiteflame.jp/" rel="nofollow" dir="ltr">http://whiteflame...</a> for more details.
      &nbsp;
      <a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user#" onclick="_hidediv(&#39;feed_item_jNQXAC9IVRw_expanded&#39;); _showdiv(&#39;feed_item_jNQXAC9IVRw_collapsed&#39;); return false;" style="font-size: 10px;" class="hLink">less</a>
    </span>

          </div>
      </div>
    </td>
    <td class="feed_delete">
      &nbsp;
        <a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user#" onclick="return delete_feed_item(&#39;user_recent_activity&#39;, 0, &#39;F&#39;, &#39;IP6ddOHk5gQ&#39;, &#39;fS9Fu3g7Ylc&#39;);" style="text-decoration: none; color: #000;"><img src="./YouTube - YujiTanaka19920818&#39;s Channel_files/pixel-vfl73.gif"></a>

    </td>
  </tr>

              <tr id="feed_divider_j_S84EfePTc">
    <td colspan="3" class="outer-box-bg-as-border divider">&nbsp;</td>    
  </tr>
  <tr id="feed_item_j_S84EfePTc" valign="top">
    <td class="feed_icon">
      <img class="master-sprite icon-F" src="./YouTube - YujiTanaka19920818&#39;s Channel_files/pixel-vfl73.gif">
    </td>
    <td>
      <div class="feed_title">

YujiTanaka19920818 favorited a video
                <span class="timestamp">(6 months ago)</span>
      </div>
      <div class="centerpiece">
        <div style="float:left; margin-right: 8px;"><a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/watch?v=Mv9qOOhvFBg" onmousedown="yt.analytics.urchinTracker(&#39;/Events/Channels/RecentActivity/Video&#39;);" rel="nofollow"><img style="width: 60px; height: 45px; border: 1px solid;" src="./YouTube - YujiTanaka19920818&#39;s Channel_files/default(1).jpg" class="link-as-border-color"></a></div>
          <div dir="ltr">
            <a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/watch?v=Mv9qOOhvFBg" onmousedown="yt.analytics.urchinTracker(&#39;/Events/Channels/RecentActivity/Video&#39;);" rel="nofollow">【名探偵コナン】高校生工藤新一【MAD】</a>
          </div>
          <div dir="ltr">
                <span id="feed_item_j_S84EfePTc_collapsed">
名探偵な感じを払拭したMAD。ヒロインは<wbr>そう、あなたです！的な。
      &nbsp;
      <a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user#" onclick="_hidediv(&#39;feed_item_j_S84EfePTc_collapsed&#39;); _showdiv(&#39;feed_item_j_S84EfePTc_expanded&#39;); return false;" style="font-size: 10px;" class="hLink">more</a>
    </span>
    <span id="feed_item_j_S84EfePTc_expanded" style="display:none">
名探偵な感じを払拭したMAD。ヒロインは<wbr>そう、あなたです！的な。
      &nbsp;
      <a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user#" onclick="_hidediv(&#39;feed_item_j_S84EfePTc_expanded&#39;); _showdiv(&#39;feed_item_j_S84EfePTc_collapsed&#39;); return false;" style="font-size: 10px;" class="hLink">less</a>
    </span>

          </div>
      </div>
    </td>
    <td class="feed_delete">
      &nbsp;
        <a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user#" onclick="return delete_feed_item(&#39;user_recent_activity&#39;, 0, &#39;F&#39;, &#39;Mv9qOOhvFBg&#39;, &#39;4Q_8RWQ1GfE&#39;);" style="text-decoration: none; color: #000;"><img src="./YouTube - YujiTanaka19920818&#39;s Channel_files/pixel-vfl73.gif"></a>

    </td>
  </tr>

              <tr id="feed_divider_0Qj_byWfaX0">
    <td colspan="3" class="outer-box-bg-as-border divider">&nbsp;</td>    
  </tr>
  <tr id="feed_item_0Qj_byWfaX0" valign="top">
    <td class="feed_icon">
      <img class="master-sprite icon-F" src="./YouTube - YujiTanaka19920818&#39;s Channel_files/pixel-vfl73.gif">
    </td>
    <td>
      <div class="feed_title">

YujiTanaka19920818 favorited a video
                <span class="timestamp">(6 months ago)</span>
      </div>
      <div class="centerpiece">
        <div style="float:left; margin-right: 8px;"><a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/watch?v=s_DLy58g9ss" onmousedown="yt.analytics.urchinTracker(&#39;/Events/Channels/RecentActivity/Video&#39;);" rel="nofollow"><img style="width: 60px; height: 45px; border: 1px solid;" src="./YouTube - YujiTanaka19920818&#39;s Channel_files/default(2).jpg" class="link-as-border-color"></a></div>
          <div dir="ltr">
            <a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/watch?v=s_DLy58g9ss" onmousedown="yt.analytics.urchinTracker(&#39;/Events/Channels/RecentActivity/Video&#39;);" rel="nofollow">【名探偵コナン】真実ノムコウ【トラウMA<wbr>D】</a>
          </div>
          <div dir="ltr">
                <span id="feed_item_0Qj_byWfaX0_collapsed">
ニコニコにうｐしたもの。みんなのトラウマ<wbr>？を集めたMAD。
      &nbsp;
      <a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user#" onclick="_hidediv(&#39;feed_item_0Qj_byWfaX0_collapsed&#39;); _showdiv(&#39;feed_item_0Qj_byWfaX0_expanded&#39;); return false;" style="font-size: 10px;" class="hLink">more</a>
    </span>
    <span id="feed_item_0Qj_byWfaX0_expanded" style="display:none">
ニコニコにうｐしたもの。みんなのトラウマ<wbr>？を集めたMAD。
      &nbsp;
      <a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user#" onclick="_hidediv(&#39;feed_item_0Qj_byWfaX0_expanded&#39;); _showdiv(&#39;feed_item_0Qj_byWfaX0_collapsed&#39;); return false;" style="font-size: 10px;" class="hLink">less</a>
    </span>

          </div>
      </div>
    </td>
    <td class="feed_delete">
      &nbsp;
        <a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user#" onclick="return delete_feed_item(&#39;user_recent_activity&#39;, 0, &#39;F&#39;, &#39;s_DLy58g9ss&#39;, &#39;zo1aQ83ulSI&#39;);" style="text-decoration: none; color: #000;"><img src="./YouTube - YujiTanaka19920818&#39;s Channel_files/pixel-vfl73.gif"></a>

    </td>
  </tr>

              <tr id="feed_divider_aBfUFr9SBY0">
    <td colspan="3" class="outer-box-bg-as-border divider">&nbsp;</td>    
  </tr>
  <tr id="feed_item_aBfUFr9SBY0" valign="top">
    <td class="feed_icon">
      <img class="master-sprite icon-F" src="./YouTube - YujiTanaka19920818&#39;s Channel_files/pixel-vfl73.gif">
    </td>
    <td>
      <div class="feed_title">

YujiTanaka19920818 favorited a video
                <span class="timestamp">(6 months ago)</span>
      </div>
      <div class="centerpiece">
        <div style="float:left; margin-right: 8px;"><a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/watch?v=WvRNY9lSgCU" onmousedown="yt.analytics.urchinTracker(&#39;/Events/Channels/RecentActivity/Video&#39;);" rel="nofollow"><img style="width: 60px; height: 45px; border: 1px solid;" src="./YouTube - YujiTanaka19920818&#39;s Channel_files/default(3).jpg" class="link-as-border-color"></a></div>
          <div dir="ltr">
            <a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/watch?v=WvRNY9lSgCU" onmousedown="yt.analytics.urchinTracker(&#39;/Events/Channels/RecentActivity/Video&#39;);" rel="nofollow">【初音ミク】 ハッピネス happiness ＠ うさ</a>
          </div>
          <div dir="ltr">
            The song is called happiness sang by うさ (Usa) from nico chorus.

          </div>
      </div>
    </td>
    <td class="feed_delete">
      &nbsp;
        <a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user#" onclick="return delete_feed_item(&#39;user_recent_activity&#39;, 0, &#39;F&#39;, &#39;WvRNY9lSgCU&#39;, &#39;S-WJUfUP2mg&#39;);" style="text-decoration: none; color: #000;"><img src="./YouTube - YujiTanaka19920818&#39;s Channel_files/pixel-vfl73.gif"></a>

    </td>
  </tr>

              <tr id="feed_divider_XgM4c0oGu94">
    <td colspan="3" class="outer-box-bg-as-border divider">&nbsp;</td>    
  </tr>
  <tr id="feed_item_XgM4c0oGu94" valign="top">
    <td class="feed_icon">
      <img class="master-sprite icon-F" src="./YouTube - YujiTanaka19920818&#39;s Channel_files/pixel-vfl73.gif">
    </td>
    <td>
      <div class="feed_title">

YujiTanaka19920818 favorited a video
                <span class="timestamp">(7 months ago)</span>
      </div>
      <div class="centerpiece">
        <div style="float:left; margin-right: 8px;"><a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/watch?v=EnXIDFeJO2k" onmousedown="yt.analytics.urchinTracker(&#39;/Events/Channels/RecentActivity/Video&#39;);" rel="nofollow"><img style="width: 60px; height: 45px; border: 1px solid;" src="./YouTube - YujiTanaka19920818&#39;s Channel_files/default(4).jpg" class="link-as-border-color"></a></div>
          <div dir="ltr">
            <a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/watch?v=EnXIDFeJO2k" onmousedown="yt.analytics.urchinTracker(&#39;/Events/Channels/RecentActivity/Video&#39;);" rel="nofollow">ＢＬＥＡＣＨ　ＯＰ＋恋はスリルショックサスペンス</a>
          </div>
          <div dir="ltr">
                <span id="feed_item_XgM4c0oGu94_collapsed">
ＢＬＥＡＣＨのＯＰにコナンのＯＰの曲をあ<wbr>ててみた（仮）
      &nbsp;
      <a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user#" onclick="_hidediv(&#39;feed_item_XgM4c0oGu94_collapsed&#39;); _showdiv(&#39;feed_item_XgM4c0oGu94_expanded&#39;); return false;" style="font-size: 10px;" class="hLink">more</a>
    </span>
    <span id="feed_item_XgM4c0oGu94_expanded" style="display:none">
ＢＬＥＡＣＨのＯＰにコナンのＯＰの曲をあ<wbr>ててみた（仮）
      &nbsp;
      <a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user#" onclick="_hidediv(&#39;feed_item_XgM4c0oGu94_expanded&#39;); _showdiv(&#39;feed_item_XgM4c0oGu94_collapsed&#39;); return false;" style="font-size: 10px;" class="hLink">less</a>
    </span>

          </div>
      </div>
    </td>
    <td class="feed_delete">
      &nbsp;
        <a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user#" onclick="return delete_feed_item(&#39;user_recent_activity&#39;, 0, &#39;F&#39;, &#39;EnXIDFeJO2k&#39;, &#39;pxC9rvjypBQ&#39;);" style="text-decoration: none; color: #000;"><img src="./YouTube - YujiTanaka19920818&#39;s Channel_files/pixel-vfl73.gif"></a>

    </td>
  </tr>

        </tbody></table>
      </div>
  </div>

  </div>
  <div class="clear"></div>
</div>

            <div class="inner-box" id="user_subscriptions">
    <form name="edit_form_user_subscriptions" id="edit_form_user_subscriptions">
    <div style="zoom:1">
    <div class="box-title title-text-color">
Subscriptions
          (<a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/profile?user=YujiTanaka19920818&amp;view=subscriptions" class="headersSmall" name="channel-box-item-count">1</a>)
    </div>
    <div class="box-editor">
        <div class="updown_arrows "><img id="user_subscriptions-left-arrow" src="./YouTube - YujiTanaka19920818&#39;s Channel_files/pixel-vfl73.gif" class="module-left-arrow disabled" onclick="move_left(&#39;user_subscriptions&#39;)"><img id="user_subscriptions-up-arrow" src="./YouTube - YujiTanaka19920818&#39;s Channel_files/pixel-vfl73.gif" class="module-up-arrow" onclick="move_up(&#39;user_subscriptions&#39;)"><img id="user_subscriptions-down-arrow" src="./YouTube - YujiTanaka19920818&#39;s Channel_files/pixel-vfl73.gif" class="module-down-arrow disabled" onclick="move_down(&#39;user_subscriptions&#39;)"><img id="user_subscriptions-right-arrow" src="./YouTube - YujiTanaka19920818&#39;s Channel_files/pixel-vfl73.gif" class="module-right-arrow " onclick="move_right(&#39;user_subscriptions&#39;)"></div>
        <div class="edit-link">
          <a class="channel-cmd" href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user#" onclick="toggle_edit_mode(&#39;user_subscriptions&#39;);return false" id="user_subscriptions_edit_link">edit</a>
          <img src="./YouTube - YujiTanaka19920818&#39;s Channel_files/pixel-vfl73.gif" class="edit-widget">
        </div>
      <div style="float:right">
      </div>
    </div>
    <div class="cb"></div>
    </div>

    <div class="edit_info">
  <div class="edit_top_box">
    

    <div>
Number of rows to display:
      <select name="rows_to_show">
        <option value="1">1</option>
        <option value="2" selected="">2</option>
        <option value="3">3</option>
      </select>
    </div>
    <div class="edit_separator"></div>
      <div class="user_subscriptions_save_cancel" style="position:relative">
    <button type="button" class=" yt-uix-button yt-uix-button-primary" onclick="save_box_settings(&#39;user_subscriptions&#39;);return false;;return false;"><span class="yt-uix-button-content">Save Changes</span></button>
or
    <a href="javascript:cancel_edit_mode(&#39;user_subscriptions&#39;);">cancel</a>
    <div class="save_overlay" style="padding:0.4em;padding-left:3em;width:60%">
      <img src="./YouTube - YujiTanaka19920818&#39;s Channel_files/icn_loading_animated-vfl24663.gif">
    </div>
  </div>

  </div>
    </div>
    </form>

  <div id="user_subscriptions-messages" style="color:#333;margin:1em;padding:1em;display:none"></div>

  <div id="user_subscriptions-body">


  <div style="zoom:1;margin: 0 -12px">
      <div class="user-peep" style="width:33%;"><center>
          <div class="user-thumb-large link-as-border-color"><div>
<a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user/XxHolmes4869xX" onmousedown="yt.analytics.trackEvent(&#39;ChannelPage&#39;, &#39;subscriptions_image_link&#39;, &#39;YujiTanaka19920818 - XxHolmes4869xX&#39;)">
    <img id="" src="./YouTube - YujiTanaka19920818&#39;s Channel_files/no_videos_140-vfl121286.png" alt="XxHolmes4869xX">
</a>
  </div></div>

        <a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user/XxHolmes4869xX" onmousedown="yt.analytics.trackEvent(&#39;ChannelPage&#39;, &#39;subscriptions_text_link&#39;, &#39;YujiTanaka19920818 - XxHolmes4869xX&#39;)" title="XxHolmes4869xX">XxHolme...</a>

      </center></div>
  
    <div style="clear:both;font-height:1px"></div>
  </div>
  <div>
  </div>
  </div>
  <div class="clear"></div>
</div>

      </div>
      <div class="right-column" id="main-channel-right">
            <div class="inner-box" id="user_subscribers">
    <form name="edit_form_user_subscribers" id="edit_form_user_subscribers">
    <div style="zoom:1">
    <div class="box-title title-text-color">
Subscribers
    </div>
    <div class="box-editor">
        <div class="updown_arrows "><img id="user_subscribers-left-arrow" src="./YouTube - YujiTanaka19920818&#39;s Channel_files/pixel-vfl73.gif" class="module-left-arrow " onclick="move_left(&#39;user_subscribers&#39;)"><img id="user_subscribers-up-arrow" src="./YouTube - YujiTanaka19920818&#39;s Channel_files/pixel-vfl73.gif" class="module-up-arrow disabled" onclick="move_up(&#39;user_subscribers&#39;)"><img id="user_subscribers-down-arrow" src="./YouTube - YujiTanaka19920818&#39;s Channel_files/pixel-vfl73.gif" class="module-down-arrow" onclick="move_down(&#39;user_subscribers&#39;)"><img id="user_subscribers-right-arrow" src="./YouTube - YujiTanaka19920818&#39;s Channel_files/pixel-vfl73.gif" class="module-right-arrow disabled" onclick="move_right(&#39;user_subscribers&#39;)"></div>
        <div class="edit-link">
          <a class="channel-cmd" href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user#" onclick="toggle_edit_mode(&#39;user_subscribers&#39;);return false" id="user_subscribers_edit_link">edit</a>
          <img src="./YouTube - YujiTanaka19920818&#39;s Channel_files/pixel-vfl73.gif" class="edit-widget">
        </div>
      <div style="float:right">
      </div>
    </div>
    <div class="cb"></div>
    </div>

    <div class="edit_info">
  <div class="edit_top_box">
    

    <div>
Number of rows to display:
      <select name="rows_to_show">
        <option value="1">1</option>
        <option value="2" selected="">2</option>
        <option value="3">3</option>
      </select>
    </div>
    <div class="edit_separator"></div>
      <div class="user_subscribers_save_cancel" style="position:relative">
    <button type="button" class=" yt-uix-button yt-uix-button-primary" onclick="save_box_settings(&#39;user_subscribers&#39;);return false;;return false;"><span class="yt-uix-button-content">Save Changes</span></button>
or
    <a href="javascript:cancel_edit_mode(&#39;user_subscribers&#39;);">cancel</a>
    <div class="save_overlay" style="padding:0.4em;padding-left:3em;width:60%">
      <img src="./YouTube - YujiTanaka19920818&#39;s Channel_files/icn_loading_animated-vfl24663.gif">
    </div>
  </div>

  </div>
    </div>
    </form>

  <div id="user_subscribers-messages" style="color:#333;margin:1em;padding:1em;display:none"></div>

  <div id="user_subscribers-body">


  <div style="zoom:1;margin: 0 -12px">
  
    <div style="clear:both;font-height:1px"></div>
  </div>
  <div>
  </div>
  </div>
  <div class="clear"></div>
</div>

            <div class="inner-box" id="user_friends">
    <form name="edit_form_user_friends" id="edit_form_user_friends">
    <div style="zoom:1">
    <div class="box-title title-text-color">
Friends
    </div>
    <div class="box-editor">
        <div class="updown_arrows "><img id="user_friends-left-arrow" src="./YouTube - YujiTanaka19920818&#39;s Channel_files/pixel-vfl73.gif" class="module-left-arrow " onclick="move_left(&#39;user_friends&#39;)"><img id="user_friends-up-arrow" src="./YouTube - YujiTanaka19920818&#39;s Channel_files/pixel-vfl73.gif" class="module-up-arrow" onclick="move_up(&#39;user_friends&#39;)"><img id="user_friends-down-arrow" src="./YouTube - YujiTanaka19920818&#39;s Channel_files/pixel-vfl73.gif" class="module-down-arrow" onclick="move_down(&#39;user_friends&#39;)"><img id="user_friends-right-arrow" src="./YouTube - YujiTanaka19920818&#39;s Channel_files/pixel-vfl73.gif" class="module-right-arrow disabled" onclick="move_right(&#39;user_friends&#39;)"></div>
        <div class="edit-link">
          <a class="channel-cmd" href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user#" onclick="toggle_edit_mode(&#39;user_friends&#39;);return false" id="user_friends_edit_link">edit</a>
          <img src="./YouTube - YujiTanaka19920818&#39;s Channel_files/pixel-vfl73.gif" class="edit-widget">
        </div>
      <div style="float:right">
      </div>
    </div>
    <div class="cb"></div>
    </div>

    <div class="edit_info">
  <div class="edit_top_box">
    

    <div>
Number of rows to display:
      <select name="rows_to_show">
        <option value="1">1</option>
        <option value="2" selected="">2</option>
        <option value="3">3</option>
      </select>
    </div>
    <div class="edit_separator"></div>
      <div class="user_friends_save_cancel" style="position:relative">
    <button type="button" class=" yt-uix-button yt-uix-button-primary" onclick="save_box_settings(&#39;user_friends&#39;);return false;;return false;"><span class="yt-uix-button-content">Save Changes</span></button>
or
    <a href="javascript:cancel_edit_mode(&#39;user_friends&#39;);">cancel</a>
    <div class="save_overlay" style="padding:0.4em;padding-left:3em;width:60%">
      <img src="./YouTube - YujiTanaka19920818&#39;s Channel_files/icn_loading_animated-vfl24663.gif">
    </div>
  </div>

  </div>
    </div>
    </form>

  <div id="user_friends-messages" style="color:#333;margin:1em;padding:1em;display:none"></div>

  <div id="user_friends-body">


  <div style="zoom:1;margin: 0 -12px">
  
    <div style="clear:both;font-height:1px"></div>
  </div>
  <div>
  </div>
  </div>
  <div class="clear"></div>
</div>

            <div class="inner-box" id="user_comments">
    <form name="edit_form_user_comments" id="edit_form_user_comments">
    <div style="zoom:1">
    <div class="box-title title-text-color">
Channel Comments
    </div>
    <div class="box-editor">
        <div class="updown_arrows "><img id="user_comments-left-arrow" src="./YouTube - YujiTanaka19920818&#39;s Channel_files/pixel-vfl73.gif" class="module-left-arrow " onclick="move_left(&#39;user_comments&#39;)"><img id="user_comments-up-arrow" src="./YouTube - YujiTanaka19920818&#39;s Channel_files/pixel-vfl73.gif" class="module-up-arrow" onclick="move_up(&#39;user_comments&#39;)"><img id="user_comments-down-arrow" src="./YouTube - YujiTanaka19920818&#39;s Channel_files/pixel-vfl73.gif" class="module-down-arrow disabled" onclick="move_down(&#39;user_comments&#39;)"><img id="user_comments-right-arrow" src="./YouTube - YujiTanaka19920818&#39;s Channel_files/pixel-vfl73.gif" class="module-right-arrow disabled" onclick="move_right(&#39;user_comments&#39;)"></div>
        <div class="edit-link">
          <a class="channel-cmd" href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user#" onclick="toggle_edit_mode(&#39;user_comments&#39;);return false" id="user_comments_edit_link">edit</a>
          <img src="./YouTube - YujiTanaka19920818&#39;s Channel_files/pixel-vfl73.gif" class="edit-widget">
        </div>
      <div style="float:right">
      </div>
    </div>
    <div class="cb"></div>
    </div>

    <div class="edit_info">
  <div class="edit_top_box">
    

    <b>Who can comment:</b><br>
      <input type="hidden" name="profile_comment_moderation" id="profile_comment_moderation" value="False">
      <input type="hidden" name="profile_comment_friend_only" id="profile_comment_friend_only" value="False"> 
      <input name="profile_comment_perm" id="profile_comment_perm_a" type="radio" onclick="changeCommentPermissions(&#39;False&#39;, &#39;False&#39;)" checked="" value="everyone_auto">
      <label for="profile_comment_perm_a">Everyone can automatically comment.</label>
      <br>
      <input name="profile_comment_perm" id="profile_comment_perm_b" type="radio" onclick="changeCommentPermissions(&#39;True&#39;, &#39;True&#39;)" value="friend_auto_everyone_mod">
      <label for="profile_comment_perm_b">Friends can automatically comment, all others only with approval.</label>
      <br>
      <input name="profile_comment_perm" id="profile_comment_perm_c" type="radio" onclick="changeCommentPermissions(&#39;True&#39;, &#39;False&#39;)" value="friend_only">
      <label for="profile_comment_perm_c">Only friends can comment.</label>
      <br>
      <input name="profile_comment_perm" id="profile_comment_perm_d" type="radio" onclick="changeCommentPermissions(&#39;False&#39;, &#39;True&#39;)" value="everyone_mod">
      <label for="profile_comment_perm_d">Everyone can only comment with approval.</label>
    <div class="edit_separator"></div>
      <div class="user_comments_save_cancel" style="position:relative">
    <button type="button" class=" yt-uix-button yt-uix-button-primary" onclick="save_box_settings(&#39;user_comments&#39;);return false;;return false;"><span class="yt-uix-button-content">Save Changes</span></button>
or
    <a href="javascript:cancel_edit_mode(&#39;user_comments&#39;);">cancel</a>
    <div class="save_overlay" style="padding:0.4em;padding-left:3em;width:60%">
      <img src="./YouTube - YujiTanaka19920818&#39;s Channel_files/icn_loading_animated-vfl24663.gif">
    </div>
  </div>

  </div>
    </div>
    </form>

  <div id="user_comments-messages" style="color:#333;margin:1em;padding:1em;display:none"></div>

  <div id="user_comments-body">
  <div class="commentsTableFull text-field outer-box-bg-as-border" style="_width:610px">
  <table border="0" cellspacing="0" cellpadding="0" id="profile_comments_table">
  </table>
    <div class="alignC">There are no comments for this user.</div>
  </div>
    <div id="comment_entry_box"><a name="entry"></a>
    <div style="padding-bottom: 3px; font-size: 14px;font-weight: bold;">Add Comment</div>
    <form action="https://web.archive.org/web/20100818174042/http://www.youtube.com/user">
      <textarea name="comment_entry_box" id="comment_entry_box_text" cols="80" rows="3" style="width:98%"></textarea>
      <br>
      <input id="comment_entry_submit_button" type="button" value="Post Comment" onclick="add_comment(&#39;user_comments&#39;, _gel(&#39;comment_entry_box_text&#39;).value, &#39;False&#39;, 10);" style="margin-top:2px;">
    </form>
    </div>
    <div style="margin-top: 10px; font-size: 12px; text-align: center; display: none;" id="add_comment_link">
      <a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user#" onclick="javascript:get_page(&#39;user_comments&#39;, 0, 10, &#39;False&#39;);return false;">
Add Comment
      </a>
    </div>
  

  </div>
  <div class="clear"></div>
</div>

      </div>
      <div class="cb"></div>
      </div>



  </div>
</div>







<script type="text/javascript">
  window.boxes = {    "user_playlist_navigator" : {      'name' : "user_playlist_navigator",      'x_position' : 1,      'y_position' : -2,      'palette' : "default" },    "user_profile" : {      'name' : "user_profile",      'x_position' : 0,      'y_position' : 0,      'palette' : "default" },    "user_recent_activity" : {      'name' : "user_recent_activity",      'x_position' : 0,      'y_position' : 16,      'palette' : "default" },    "user_subscriptions" : {      'name' : "user_subscriptions",      'x_position' : 0,      'y_position' : 36,      'palette' : "default" },    "user_subscribers" : {      'name' : "user_subscribers",      'x_position' : 1,      'y_position' : 39,      'palette' : "default" },    "user_friends" : {      'name' : "user_friends",      'x_position' : 1,      'y_position' : 42,      'palette' : "default" },    "user_comments" : {      'name' : "user_comments",      'x_position' : 1,      'y_position' : 48,      'palette' : "default" },    "user_groups" : {      'name' : "user_groups",      'x_position' : 1,      'y_position' : 51,      'palette' : "default" }  };
  function fix_background_height() {
    var body = _gel('channel-body');
    var browser_height = window.innerHeight || document.documentElement.clientHeight;
    if (body.offsetHeight < browser_height) {
      body.style.height = (browser_height - _gel('masthead').offsetHeight) + 'px';
    }
  }
  yt.pubsub.subscribe('init', fix_background_height);
  window.onresize = fix_background_height;
    window.theme_map = {};
      theme_map["blue"] = {"background_image": "", "display_name": "Blue", "background_color": "#003366", "background_repeat": "no-repeat", "wrapper_color": "#0066CC", "builtin": true, "wrapper_text_color": "#ffffff", "palettes": {"default": {"title_text_color": "#ffffff", "link_color": "#99C2EB", "body_text_color": "#ffffff", "box_background_color": "#3D8BD8", "display_name": "Default", "box_opacity": 255}}, "wrapper_link_color": "#0000CC", "font": "arial", "wrapper_opacity": 255};
      theme_map["scary"] = {"background_image": "", "display_name": "Red", "background_color": "#660000", "background_repeat": "no-repeat", "wrapper_color": "#990000", "builtin": true, "wrapper_text_color": "#FFFFFF", "palettes": {"default": {"title_text_color": "#FFFFFF", "link_color": "#FF0000", "body_text_color": "#FFFFFF", "box_background_color": "#660000", "display_name": "Default", "box_opacity": 255}}, "wrapper_link_color": "#FF0000", "font": "arial", "wrapper_opacity": 255};
      theme_map["clean"] = {"background_image": "", "display_name": "Clean", "background_color": "#FFF", "background_repeat": "no-repeat", "wrapper_color": "#D6D6D6", "builtin": true, "wrapper_text_color": "#666", "palettes": {"default": {"title_text_color": "#666", "link_color": "#03C", "body_text_color": "#000", "box_background_color": "#FFF", "display_name": "Default", "box_opacity": 255}}, "wrapper_link_color": "#03C", "font": "Arial", "wrapper_opacity": 255};
      theme_map["fire"] = {"background_image": "", "display_name": "Fire", "background_color": "#660000", "background_repeat": "no-repeat", "wrapper_color": "#FF0000", "builtin": true, "wrapper_text_color": "#ffffff", "palettes": {"default": {"title_text_color": "#FFFF00", "link_color": "#FFDBA6", "body_text_color": "#ffffff", "box_background_color": "#FF9900", "display_name": "Default", "box_opacity": 255}}, "wrapper_link_color": "#FFFF00", "font": "arial", "wrapper_opacity": 255};
      theme_map["forest"] = {"background_image": "", "display_name": "Forest", "background_color": "#274E13", "background_repeat": "no-repeat", "wrapper_color": "#38761D", "builtin": true, "wrapper_text_color": "#ffffff", "palettes": {"default": {"title_text_color": "#274E13", "link_color": "#38761D", "body_text_color": "#274E13", "box_background_color": "#6AA84F", "display_name": "Default", "box_opacity": 255}}, "wrapper_link_color": "#FFFFFF", "font": "Arial", "wrapper_opacity": 255};
      theme_map["sunlight"] = {"background_image": "", "display_name": "Sunlight", "background_color": "#FFE599", "background_repeat": "no-repeat", "wrapper_color": "#E69138", "builtin": true, "wrapper_text_color": "#FFFFFF", "palettes": {"default": {"title_text_color": "#E69138", "link_color": "#E69138", "body_text_color": "#E69138", "box_background_color": "#FFD966", "display_name": "Default", "box_opacity": 255}}, "wrapper_link_color": "#FFD966", "font": "arial", "wrapper_opacity": 255};
      theme_map["default"] = {"background_image": "", "display_name": "Grey", "background_color": "#CCCCCC", "background_repeat": "no-repeat", "wrapper_color": "#999999", "builtin": true, "wrapper_text_color": "#000000", "palettes": {"default": {"title_text_color": "#000000", "link_color": "#0000cc", "body_text_color": "#333333", "box_background_color": "#eeeeff", "display_name": "Default", "box_opacity": 255}}, "wrapper_link_color": "#0000cc", "font": "arial", "wrapper_opacity": 255};
      theme_map["stealth"] = {"background_image": "", "display_name": "Stealth", "background_color": "#000000", "background_repeat": "no-repeat", "wrapper_color": "#444444", "builtin": true, "wrapper_text_color": "#000000", "palettes": {"default": {"title_text_color": "#000000", "link_color": "#444444", "body_text_color": "#444444", "box_background_color": "#666666", "display_name": "Default", "box_opacity": 255}}, "wrapper_link_color": "#CCCCCC", "font": "arial", "wrapper_opacity": 255};
      theme_map["8bit"] = {"background_image": "", "display_name": "8-bit", "background_color": "#666666", "background_repeat": "no-repeat", "wrapper_color": "#444444", "builtin": true, "wrapper_text_color": "#FFFFFF", "palettes": {"default": {"title_text_color": "#AAAAAA", "link_color": "#FF0000", "body_text_color": "#666666", "box_background_color": "#000000", "display_name": "Default", "box_opacity": 255}}, "wrapper_link_color": "#FF0000", "font": "Courier New", "wrapper_opacity": 255};
      theme_map["bugbelly"] = {"background_image": "", "display_name": "Bugbelly", "background_color": "#339900", "background_repeat": "no-repeat", "wrapper_color": "#00FF00", "builtin": true, "wrapper_text_color": "#ffffff", "palettes": {"default": {"title_text_color": "#00FF00", "link_color": "#00FF00", "body_text_color": "#38761D", "box_background_color": "#CCFF00", "display_name": "Default", "box_opacity": 255}}, "wrapper_link_color": "#FFD966", "font": "arial", "wrapper_opacity": 255};
      theme_map["princess"] = {"background_image": "", "display_name": "Princess", "background_color": "#ff99cc", "background_repeat": "no-repeat", "wrapper_color": "#aa66cc", "builtin": true, "wrapper_text_color": "#ffffff", "palettes": {"default": {"title_text_color": "#8a2c87", "link_color": "#351C75", "body_text_color": "#333366", "box_background_color": "#ffffff", "display_name": "Default", "box_opacity": 255}}, "wrapper_link_color": "#351C75", "font": "arial", "wrapper_opacity": 255};
      theme_map["berry"] = {"background_image": "", "display_name": "Berry", "background_color": "#4C1130", "background_repeat": "no-repeat", "wrapper_color": "#660099", "builtin": true, "wrapper_text_color": "#9900FF", "palettes": {"default": {"title_text_color": "#FF00FF", "link_color": "#FFCCCC", "body_text_color": "#FFFFFF", "box_background_color": "#9900FF", "display_name": "Default", "box_opacity": 255}}, "wrapper_link_color": "#B4A7D6", "font": "arial", "wrapper_opacity": 255};
    add_theme_selectors("default", ["default", "blue", "scary", "sunlight", "forest", "8bit", "princess", "fire", "stealth", "clean"]);
  function maybe_revert() {
    if (confirm("Are you sure you wish to continue?")) {
      _gel('revert_migration').submit();
    }
  }

</script>

<div class="cb">

    <div id="footer-container">
      
    </div>
    
  </div>
  <div> 

  </div>
      
  
  
  <script>
      yt.setMsg({
        'QUEUE_CLEAR': 'Are you sure you wish to continue?'
      });
        yt.pubsub.subscribe('init', yt.www.watch.quicklist.init);
  
    

    
  
  if (document.documentElement["getBoundingClientRect"]) {
    yt.events.listen(window, 'scroll', yt.www.thumbnailDelayLoad.loadImages);
    yt.events.listen(window, 'resize', yt.www.thumbnailDelayLoad.loadImages);
  }
  yt.www.thumbnailDelayLoad.loadImages();



    
    
      yt.setTimeout(function() {
        window.yt.www.suggest.install(document.searchForm,
            document.searchForm.search_query,
            'en','close',
            'Suggestions',
            'Web search',
            -1,
            null);
          }, 100);

    
  </script>
  
  <script id="legacy-user-datastore" style="behavior:url(&#39;/web/20100818174042im_/http://www.youtube.com/user#default#userdata&#39;)"></script>
  
  


  <!-- end postpage section -->
  <!--[if IE]></div><![endif]-->



<table id="completeTable" cellpadding="0" cellspacing="0" class="yt-suggest-table" style="visibility: hidden; left: 0px; top: -1px; width: 0px;"></table><iframe id="yt-suggest-iframe" allow="autoplay &#39;self&#39;; fullscreen &#39;self&#39;" style="left: 0px; top: -1px; width: 0px; height: 0px;" src="./YouTube - YujiTanaka19920818&#39;s Channel_files/saved_resource.html"></iframe></body></html>
