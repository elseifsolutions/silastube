<?php require($_SERVER['DOCUMENT_ROOT'] . "/static/important/config.inc.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">


  <html lang="en">

<!-- machid: 640 -->
<head>


  
  <title>SilasTube - Popularize Yourself</title>

  <link rel="stylesheet" href="/st/css/base_all-vfl66248.css" type="text/css">
    <link rel="stylesheet" href="/css/2011.css" type="text/css">

  <link rel="search" type="application/opensearchdescription+xml" href="/opensearch?locale=en_US" title="SilasTube Video Search">
<style type="text/css">
#homepage-side-content { white-space: normal; }
#active_sharing_div { display: block; }
.sponsored-videos-block { margin-left: 18px; border: 0px #CCC solid; }
.vfacets { margin-bottom: 0; }
.spacer-sm { clear: left; height: 1px; }
.my-list-top { margin: 3px 0; }
.message-notification-wrapper { padding: 3px 5px; }
.highlightBox {
  text-align: center;
  margin-top: 3px;
  font-size: 14px;
}
.ad-block { padding-top: 10px; }
.homepage-sponsored-video { margin-bottom: 0; }

.side-announcement-box {
  padding: 8px 20px;
  text-align: center;
  font-size: 13px;
  font-weight: normal;
}

.side-announcement-box a {
  font-weight: bold;
  text-decoration: none;
}
.left-right-border-yellow {
  background-color: #FFFFE5;
  border-right: 1px solid #F5E082;
  border-left: 1px solid #F5E082;
}
.img-yellow-message-top-cap {
  background: transparent url(/img/iyt_iconset.png) repeat-x scroll 0 -61px;
}
.img-yellow-message-bottom-cap {
  background: transparent url(/img/iyt_iconset.png) repeat-x scroll 0px -65px;
}
.img-yellow-message-top-cap, .img-yellow-message-bottom-cap {
  height: 4px;
  width: 565px;
}
.img-yellow-top-right-corner {
  background: transparent url(/img/iyt_iconset.png) repeat-x scroll -561px -61px;
}
.img-yellow-bottom-right-corner {
  background: transparent url(/img/iyt_iconset.png) repeat-x scroll -561px -65px;
}
.img-yellow-top-right-corner, .img-yellow-bottom-right-corner {
  float: right;
  height: 4px;
  width: 4px;
}
.img-yellow-message-top-cap.img-side-cap, .img-yellow-message-bottom-cap.img-side-cap {
  font-size: 0px;
  width: 300px;
}
.img-chrome {
  background: transparent url(/img/iyt_iconset.png) repeat-x scroll -533px 0;
  height: 32px;
  width: 32px;
}
/* Side column pyv callout message box */
.pyv-callout-box {
  border: 1px solid #F5E082;
  padding: 5px;
}

.pyv-callout-message {
  padding: 10px 0;
  text-align: center;
  background-color: #fff8b0;
  font-weight: bold;
}
</style>




  <link rel="icon" href="http://sitetest1.meh.serv00.net/yt/favicon-vfl1123.ico" type="image/x-icon">
  <link rel="shortcut icon" href="http://sitetest1.meh.serv00.net/yt/favicon-vfl1123.ico" type="image/x-icon">


  <meta name="description" content="Share your videos with friends, family, and the world">
  <meta name="keywords" content="video, sharing, camera phone, video phone, free, upload">

  <link rel="alternate" type="application/rss+xml" title="SilasTube - [RSS]" href="/rssls">

  <link rel="alternate" media="handheld" href="http://m.silastube.com/index?desktop_uri=%2F&amp;">

  <script type="text/javascript">
      window.google={kHL:"en"};
  </script>

  <script type="text/javascript" src="/yt/js/base_all_with_bidi-vfl65789.js"></script>

  <script type="text/javascript">

      function _hbLink (a,b) { return false; }
      function urchinTracker (a) { }
      function urchinTrackerDefer(a) { }

    
  var gXSRF_token = '';
  var gXSRF_field_name = '';
  var gXSRF_ql_pair = '';
  var onLoadFunctionList = onLoadFunctionList || [];

    gXSRF_token = 'akDd03rF5nVNOfD69zD7nyQkVoh8MTIyODAzMjI5MQ==';
    gXSRF_field_name = 'session_token';
    onLoadFunctionList.push(function() { populate_session_token() });

    gXSRF_ql_pair = 'session_token=3LIN3LLLnPONvJxqzSgYRijL0uR8MA==';


    var gGoogleSuggest = true;
    var gPixelGif = 'you/img/pixel';

    var gIsResultsPage = false;

    var gGeoTooltipText =  'Move this marker to a new location then click Search to find videos recorded in that area.';
    var gGeoTooltipMoreText= 'Zoom in/out to change the radius for your search.';
    var gGeoTooltipButton = "<div class='alignC marT4'><button onclick='onGeoTooltipSearch(this);'>" + 'Search' + "</button></div>";
    var gGeoTooltipMore = "<a href='#' onclick='marker.openInfoWindowHtml(gGeoTooltipMore); return false;'>" + 'more' + "&raquo;</a>";
    var gGeoTooltip = "<div style='width: 200px; padding-right: 10px'>" + gGeoTooltipText + gGeoTooltipMore + gGeoTooltipButton + "</div>";
    var gGeoTooltipMore = "<div style='width: 200px; padding-right: 10px'>" + gGeoTooltipText + gGeoTooltipMoreText + gGeoTooltipButton + "</div>";
    var gGeoSelectedLocationText = 'Selected location';
  </script>





<script type="text/javascript">

function swapVideoList(linkObj)
{
  var linkId = linkObj.id;
  var queryData = '';
  var newDivId = '';
  var headlineObj = document.getElementById('hpVideoListHead');
  var moreLinkObj = document.getElementById('homepage-featured-more-top');
  var bottomMoreLinkObj = document.getElementById('homepage-featured-more-bottom');

  if (linkId == 'hpMostViewedLink') {
    queryData = 'videoListType=mostViewed';
    newDivId = 'hpMostViewed';
    headlineObj.innerHTML = "Most Viewed Videos";
    moreLinkObj.innerHTML = "<a href=\"/browse?s=mp\" onmousedown=\"urchinTracker('/Events/Home/SeeMore/MostViewed/Top');\">See More Most Viewed Videos</a>";
    bottomMoreLinkObj.innerHTML = "<a href=\"/browse?s=mp\" onmousedown=\"urchinTracker('/Events/Home/SeeMore/MostViewed/Bottom');\">See More Most Viewed Videos</a>";
  }
  else if (linkId == 'hpMostDiscussedLink') {
    queryData = 'videoListType=mostDiscussed';
    newDivId = 'hpMostDiscussed';
    headlineObj.innerHTML = "Most Discussed Videos";
    moreLinkObj.innerHTML = "<a href=\"/browse?s=md\" onmousedown=\"urchinTracker('/Events/Home/SeeMore/MostDiscussed/Top');\">See More Most Discussed Videos</a>";
    bottomMoreLinkObj.innerHTML = "<a href=\"/browse?s=md\" onmousedown=\"urchinTracker('/Events/Home/SeeMore/MostDiscussed/Bottom');\">See More Most Discussed Videos</a>";
  }
  else if (linkId == 'hpTopFavoritesLink') {
    queryData = 'videoListType=topFavorites';
    newDivId = 'hpTopFavorites';
    headlineObj.innerHTML = "Top Favorited";
    moreLinkObj.innerHTML = "<a href=\"/browse?s=mf\" onmousedown=\"urchinTracker('/Events/Home/SeeMore/TopFavorites/Top');\">See More Top Favorited</a>";
    bottomMoreLinkObj.innerHTML = "<a href=\"/browse?s=mf\" onmousedown=\"urchinTracker('/Events/Home/SeeMore/TopFavorites/Bottom');\">See More Top Favorited</a>";
  }
  else if (linkId == 'hpFeaturedLink') {
    newDivId = 'hpFeatured';
    headlineObj.innerHTML = "Featured Videos";
    moreLinkObj.innerHTML = "<a href=\"/browse?s=rf\" onmousedown=\"urchinTracker('/Events/Home/SeeMore/Featured/Top');\">See More Featured Videos</a>";
    bottomMoreLinkObj.innerHTML = "<a href=\"/browse?s=rf\" onmousedown=\"urchinTracker('/Events/Home/SeeMore/Featured/Bottom');\">See More Featured Videos</a>";
  }
  self.containerDiv = 'homepage-video-list'
  self.fillDiv = fillDiv
  self.linkId = linkId
  self.newDivId = newDivId
  addClass(_gel(newDivId + 'Link'), 'hilite');
  if (newDivId != 'hpMostViewed') {
    removeClass(_gel('hpMostViewedLink'), 'hilite');
  }
  if (newDivId != 'hpMostDiscussed') {
    removeClass(_gel('hpMostDiscussedLink'), 'hilite');
  }
  if (newDivId != 'hpTopFavorites') {
    removeClass(_gel('hpTopFavoritesLink'), 'hilite');
  }
  if (newDivId != 'hpFeatured') {
    removeClass(_gel('hpFeaturedLink'), 'hilite');
  }
  if (document.getElementById(newDivId))
  {
    document.getElementById(newDivId).style.display = 'block';
    if (newDivId != 'hpMostViewed' && document.getElementById('hpMostViewed')) document.getElementById('hpMostViewed').style.display = 'none';
    if (newDivId != 'hpMostDiscussed' && document.getElementById('hpMostDiscussed')) document.getElementById('hpMostDiscussed').style.display = 'none';
    if (newDivId != 'hpTopFavorites' && document.getElementById('hpTopFavorites')) document.getElementById('hpTopFavorites').style.display = 'none';
    if (newDivId != 'hpFeatured' && document.getElementById('hpFeatured')) document.getElementById('hpFeatured').style.display = 'none';
  }
  else if (queryData != '') {
    queryData += '&contentLocale=en_US';
    postUrlXMLResponse('/ajax_video_list',queryData,self.fillDiv);
  }

  urchinTracker('/Events/Home/Tabs/' + linkId);
}
function fillDiv(req)
{
  if (document.getElementById('hpMostViewed')) document.getElementById('hpMostViewed').style.display = 'none';
  if (document.getElementById('hpMostDiscussed')) document.getElementById('hpMostDiscussed').style.display = 'none';
  if (document.getElementById('hpTopFavorites')) document.getElementById('hpTopFavorites').style.display = 'none';
  if (document.getElementById('hpFeatured')) document.getElementById('hpFeatured').style.display = 'none';
  var newContent = getNodeValue(req.responseXML, "html_content");
  var newdiv = document.createElement('div');
  newdiv.setAttribute("id",self.newDivId);
  newdiv.innerHTML = newContent;
  var container = document.getElementById(self.containerDiv);
  container.appendChild(newdiv);
}

function hide_active_sharing() {
  hideDiv("active_sharing_div");
}



</script>

</head>


<body onload="performOnLoadFunctions();" class="en_US is-english" onunload="performOnUnloadFunctions();">
 


<div id="baseDiv" class="date-20081128 video-info">
<?php require($_SERVER['DOCUMENT_ROOT'] . "/static/mod/header.php"); ?>
<!-- saved from url=(0063)https://web.archive.org/web/20091114041433/youtube.com/partners -->
<html lang="en" style="--wm-toolbar-height: 1px;"><!-- machid: WkFSZzctYUFHdmdYbndzeE5iMlNXNDl3YnhNZFFqZUd4WnNoYU0xaC15Y1ZUdUZNVThxQk9R --><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script src="/static/js/athena.js.download" type="text/javascript"></script>
<script type="text/javascript">window.addEventListener('DOMContentLoaded',function(){var v=archive_analytics.values;v.service='wb';v.server_name='wwwb-app212.us.archive.org';v.server_ms=856;archive_analytics.send_pageview({});});</script>
<script type="text/javascript" src="/static/js/bundle-playback.js.download" charset="utf-8"></script>
<script type="text/javascript" src="/static/js/wombat.js.download" charset="utf-8"></script>
<script type="text/javascript">
    __wm.init("https://web.archive.org/web");
  __wm.wombat("http://www.youtube.com/partners","20091114041433","https://web.archive.org/","web","https://web-static.archive.org/_static/",
        "1258172073");
</script>
<link rel="stylesheet" type="text/css" href="/yt/css/banner-styles.css">
<link rel="stylesheet" type="text/css" href="/yt/css/iconochive.css">
<!-- Start Wayback Rewrite JS Include -->
<script type="text/javascript" src="/static/js/jwplayer.js.download" charset="utf-8"></script>
<script type="text/javascript" src="/static/js/bundle-video.js.download" charset="utf-8"></script>
<script type="text/javascript">
_wmVideos_.init({ prefix:"/web" });
</script>
<!-- End Wayback Rewrite JS Include -->

  
   

        <link id="www-core-css" rel="stylesheet" href="/yt/css/www-core-vfl132161.css">


      <link rel="stylesheet" href="/yt/css/www-the-rest-vfl129770.css">

  




      <link rel="stylesheet" href="/yt/css/www-static-vfl130085.css">

<style type="text/css">
  p { margin: 1em 0; }
  table { width: 100%; }
  td { vertical-align: top; padding: 0.5em; }
  .ypp-box { padding: 5px; background: #fff5e0; border: 1px solid #fff5e0; border-radius: 3px; -moz-border-radius: 3px; -webkit-border-radius: 3px; }
  #ypp-header { color: #f33; font-size: 35px; margin-bottom: 10px; }
  #ypp-header em { font-weight: normal; }
  #ypp-checklist td { padding: 5px; }
  .heading { color: #333333; font-size: 18px; font-weight: bold; }
  p.heading { margin-bottom: 0.5em; }
  .subheading { color: #333333; font-size:14px; }
  .redhead { color: #ff3333; font-size: 18px; font-weight: bold; }
  .largetext { color: #333333; font-size: 16px; }
  .text { color: #333333; font-size: 13px; }
  .box { background: #fff5e0; }
  input.applybutton {
    font-size: 20px;
    font-weight: bold;
    color: #994800;
    background-color: #fee151;
    border-style: solid;
    border-color: #ecc101;
    border-width: 1px;
  }
  span.help-link {
    font-size: 10px;
    color: #666;
    text-decoration: none;
  }
  .alertHeader {
    font-size: 14px;
    font-weight: bold;
    text-align: center;
    padding-bottom: 10px;
  }
</style>


  


    
  <link rel="search" type="application/opensearchdescription+xml" href="https://web.archive.org/web/20091114041433/http://youtube.com/opensearch?locale=en_US" title="YouTube Video Search">
  <link rel="icon" href="https://web.archive.org/web/20091114041433im_/http://s.ytimg.com/yt/favicon-vfl122048.ico" type="image/x-icon">
  <link rel="shortcut icon" href="https://web.archive.org/web/20091114041433im_/http://s.ytimg.com/yt/favicon-vfl122048.ico" type="image/x-icon">
  
    <meta name="description" content="Share your videos with friends, family, and the world">

    <meta name="keywords" content="video, sharing, camera phone, video phone, free, upload">


          <script id="www-core-js" src="./YouTube - Partner Program_files/www-core-vfl132157.js.download"></script>


  <script>
    
    yt.setConfig({
      'XSRF_TOKEN': 'hmRBUmMIof68kr0DTXuCGV9ha4V8MTI1ODI1ODQ3Mw==',
      'XSRF_FIELD_NAME': 'session_token'
    });
    yt.pubsub.subscribe('init', yt.www.xsrf.populateSessionToken);


    yt.setConfig('XSRF_QL_PAIR', 'session_token=M5YsmkJHEBhLbiaqM4eehLhUSet8MA==');



    yt.setConfig('LOGGED_IN', false);
  </script>

  <script>
  </script>
    


<style></style></head>
<body class="date-20091113 en_US is-english"><!-- BEGIN WAYBACK TOOLBAR INSERT -->
<script>__wm.rw(0);</script>
<div id="wm-ipp-base" lang="en" style="display: block; direction: ltr; height: 1px;"><template shadowrootmode="closed"><div id="wm-ipp" style="position:fixed;left:0;top:0;right:0;" class="">
<div id="wm-ipp-inside" style="display: none;">
  <div id="wm-toolbar" style="position:relative;display:flex;flex-flow:row nowrap;justify-content:space-between;">
    <div id="wm-logo" style="/*width:110px;*/padding-top:12px;">
      <a href="https://web.archive.org/web/" title="Wayback Machine home page"><img src="https://web-static.archive.org/_static/images/toolbar/wayback-toolbar-logo-200.png" srcset="https://web-static.archive.org/_static/images/toolbar/wayback-toolbar-logo-100.png, https://web-static.archive.org/_static/images/toolbar/wayback-toolbar-logo-150.png 1.5x, https://web-static.archive.org/_static/images/toolbar/wayback-toolbar-logo-200.png 2x" alt="Wayback Machine" style="width:100px" border="0"></a>
    </div>
    <div class="c" style="display:flex;flex-flow:column nowrap;justify-content:space-between;flex:1;">
      <form class="u" style="display:flex;flex-direction:row;flex-wrap:nowrap;" target="_top" method="get" action="https://web.archive.org/web/submit" name="wmtb" id="wmtb"><input type="text" name="url" id="wmtbURL" value="http://youtube.com/partners" onfocus="this.focus();this.select();" style="flex:1;" autocomplete="off"><input type="hidden" name="type" value="replay"><input type="hidden" name="date" value="20091114041433"><input type="submit" value="Go">
      </form>
      <div style="display:flex;flex-flow:row nowrap;align-items:flex-end;">
                <div class="s" id="wm-nav-captures" style="flex:1;"><a class="t" href="https://web.archive.org/web/*/http://youtube.com/partners" title="See a list of every capture for this URL">880 captures</a><div class="r" title="Timespan for captures of this URL">11 Dec 2007 - 12 Jan 2025</div></div>
        <div class="k">
          <a href="https://web.archive.org/web/20221201000000/http://youtube.com/partners" id="wm-graph-anchor">
            <div id="wm-ipp-sparkline" title="Explore captures for this URL" style="position: relative">
              <canvas id="wm-sparkline-canvas" width="750" height="27" border="0"></canvas>
            <div class="yt" style="display: none; width: 25px; height: 27px; left: 650px;"></div><div class="mt" style="display: none; width: 2px; height: 27px; left: 673px;"></div></div>
          </a>
        </div>
      </div>
    </div>
    <div class="n">
      <table>
        <tbody>
          <!-- NEXT/PREV MONTH NAV AND MONTH INDICATOR -->
          <tr class="m">
            <td class="b" nowrap="nowrap"><a href="https://web.archive.org/web/20090926232055/http://www.youtube.com/partners" title="26 Sep 2009"><strong>Sep</strong></a></td>
            <td class="c" id="displayMonthEl" title="You are here: 04:14:33 Nov 14, 2009">Nov</td>
            <td class="f" nowrap="nowrap"><a href="https://web.archive.org/web/20091217020951/http://www.youtube.com/partners" title="17 Dec 2009"><strong>Dec</strong></a></td>
          </tr>
          <!-- NEXT/PREV CAPTURE NAV AND DAY OF MONTH INDICATOR -->
          <tr class="d">
            <td class="b" nowrap="nowrap"><a href="https://web.archive.org/web/20091113000545/http://www.youtube.com/partners" title="00:05:45 Nov 13, 2009"><img src="https://web-static.archive.org/_static/images/toolbar/wm_tb_prv_on.png" alt="Previous capture" width="14" height="16" border="0"></a></td>
            <td class="c" id="displayDayEl" style="width:34px;font-size:22px;white-space:nowrap;" title="You are here: 04:14:33 Nov 14, 2009">14</td>
            <td class="f" nowrap="nowrap"><a href="https://web.archive.org/web/20091117144605/http://www.youtube.com/partners" title="14:46:05 Nov 17, 2009"><img src="https://web-static.archive.org/_static/images/toolbar/wm_tb_nxt_on.png" alt="Next capture" width="14" height="16" border="0"></a></td>
          </tr>
          <!-- NEXT/PREV YEAR NAV AND YEAR INDICATOR -->
          <tr class="y">
            <td class="b" nowrap="nowrap"><a href="https://web.archive.org/web/20081112232812/http://www.youtube.com/partners" title="12 Nov 2008"><strong>2008</strong></a></td>
            <td class="c" id="displayYearEl" title="You are here: 04:14:33 Nov 14, 2009">2009</td>
            <td class="f" nowrap="nowrap"><a href="https://web.archive.org/web/20101118000900/http://www.youtube.com/partners" title="18 Nov 2010"><strong>2010</strong></a></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="r" style="display:flex;flex-flow:column nowrap;align-items:flex-end;justify-content:space-between;">
      <div id="wm-btns" style="text-align:right;height:23px;">
                <span class="xxs">
          <div id="wm-save-snapshot-success">success</div>
          <div id="wm-save-snapshot-fail">fail</div>
          <a id="wm-save-snapshot-open" href="https://web.archive.org/web/20091114041433/youtube.com/partners#" title="Share via My Web Archive" style="display: none;">
            <span class="iconochive-web"></span>
          </a>
          <a href="https://archive.org/account/login.php" title="Sign In" id="wm-sign-in" style="display: inline-block;">
            <span class="iconochive-person"></span>
          </a>
          <span id="wm-save-snapshot-in-progress" class="iconochive-web" style="display: none;"></span>
        </span>
                <a class="xxs" href="http://faq.web.archive.org/" title="Get some help using the Wayback Machine" style="top:-6px;"><span class="iconochive-question" style="color:rgb(87,186,244);font-size:160%;"></span></a>
        <a id="wm-tb-close" href="https://web.archive.org/web/20091114041433/youtube.com/partners#close" style="top:-2px;" title="Close the toolbar"><span class="iconochive-remove-circle" style="color:#888888;font-size:240%;"></span></a>
      </div>
      <div id="wm-share" class="xxs">
        <a href="https://web.archive.org/web/20091114041433/http://web.archive.org/screenshot/http://youtube.com/partners" id="wm-screenshot" title="screenshot" style="visibility: hidden;">
          <span class="wm-icon-screen-shot"></span>
        </a>
        <a href="https://web.archive.org/web/20091114041433/youtube.com/partners#" id="wm-video" title="video">
          <span class="iconochive-movies"></span>
        </a>
        <a id="wm-share-facebook" href="https://web.archive.org/web/20091114041433/youtube.com/partners#" data-url="https://web.archive.org/web/20091114041433/http://www.youtube.com/partners" title="Share on Facebook" style="margin-right:5px;" target="_blank"><span class="iconochive-facebook" style="color:#3b5998;font-size:160%;"></span></a>
        <a id="wm-share-twitter" href="https://web.archive.org/web/20091114041433/youtube.com/partners#" data-url="https://web.archive.org/web/20091114041433/http://www.youtube.com/partners" title="Share on Twitter" style="margin-right:5px;" target="_blank"><span class="iconochive-twitter" style="color:#1dcaff;font-size:160%;"></span></a>
      </div>
      <div style="padding-right:2px;text-align:right;white-space:nowrap;">
        <a id="wm-expand" class="wm-btn wm-closed" href="https://web.archive.org/web/20091114041433/youtube.com/partners#expand"><span id="wm-expand-icon" class="iconochive-down-solid"></span> <span class="xxs" style="font-size:80%;">About this capture</span></a>
      </div>
    </div>
  </div>
    <div id="wm-capinfo" style="border-top:1px solid #777;display:none; overflow: hidden">
        <div id="wm-capinfo-notice" source="api"></div>
                <div id="wm-capinfo-collected-by">
    <div style="background-color:#666;color:#fff;font-weight:bold;text-align:center">COLLECTED BY</div>
    <div style="padding:3px;position:relative" id="wm-collected-by-content">
            <div style="display:inline-block;vertical-align:top;width:50%;">
      <span class="c-logo" style="background-image:url(https://archive.org/services/img/AIT-NorthCarolinaStateArchivesandStateLibraryofNorthCarolina);"></span>
    Organization: <a style="color:#33f;" href="https://archive.org/details/AIT-NorthCarolinaStateArchivesandStateLibraryofNorthCarolina" target="_new"><span class="wm-title">AIT-NorthCarolinaStateArchivesandStateLibraryofNorthCarolina</span></a>
        </div>
      <div style="display:inline-block;vertical-align:top;width:49%;">
      <span class="c-logo" style="background-image:url(https://archive.org/services/img/AIT-194-NorthCarolinaStateGovernmentWebSiteArchive)"></span>
    <div>Collection: <a style="color:#33f;" href="https://archive.org/details/AIT-194-NorthCarolinaStateGovernmentWebSiteArchive" target="_new"><span class="wm-title">AIT-194-NorthCarolinaStateGovernmentWebSiteArchive</span></a></div>
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
  </div></div></div><link rel="stylesheet" type="text/css" href="./YouTube - Partner Program_files/banner-styles.css"><link rel="stylesheet" type="text/css" href="./YouTube - Partner Program_files/iconochive.css"><div class="wb-autocomplete-suggestions " style="left: 0px; top: 217px; width: 0px;"></div></template>
</div><div id="wm-ipp-print"></div>
<script type="text/javascript">//<![CDATA[
__wm.bt(750,27,25,2,"web","http://youtube.com/partners","20091114041433",1996,"https://web-static.archive.org/_static/",["https://web-static.archive.org/_static/css/banner-styles.css?v=p7PEIJWi","https://web-static.archive.org/_static/css/iconochive.css?v=3PDvdIFv"], false);
  __wm.rw(1);
//]]></script>
<!-- END WAYBACK TOOLBAR INSERT -->
 
  <!-- begin masthead section -->
  <!--[if lt IE 8]><div id="ie"><![endif]-->
  <form name="logoutForm" method="post" action="https://web.archive.org/web/20091114041433/http://youtube.com/">
    <input type="hidden" name="action_logout" value="1">
  <input name="session_token" type="hidden" value="hmRBUmMIof68kr0DTXuCGV9ha4V8MTI1ODI1ODQ3Mw=="></form>
  <div id="page" class="">
      </div> 
  
  <!-- end masthead section -->
  <div id="baseDiv" class="date-20091113 video-info ">
    <!-- begin top section -->
      

  
  

  


      <script type="text/javascript" src="/yt/js/ga.js.download"></script>


<script type="text/javascript">
yt.setConfig('ANALYTICS_PAGE_TRACKER', _gat._getTracker("UA-1266547-1"));
yt.getConfig('ANALYTICS_PAGE_TRACKER')._initData();
yt.analytics.urchinTracker = function(a) {
  yt.getConfig('ANALYTICS_PAGE_TRACKER')._trackPageview(a);
};
</script>

<script type="text/javascript">
yt.getConfig('ANALYTICS_PAGE_TRACKER')._trackPageview("" + "/About" + "/" + "Partners");
</script>



  
 
<div id="yt-static-sidebar-nav">
    
<div class="yt-static-sidebar-subhead">
 <?php require($_SERVER['DOCUMENT_ROOT'] . "/static/mod/tsidebar.php"); ?>
  </div>

  <div class="yts-heading-menu">
    
    <h2>Partnerships</h2>
    
    <ul>
      <li class="first">
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/partners" class="selected">
          Overview</a>
      </li>
      <li>
  
    <a href="https://web.archive.org/web/20091114041433/http://youtube.com/t/partnerships_benefits">Partner Benefits</a>
  
</li>
      <li>
  
    <a href="https://web.archive.org/web/20091114041433/http://youtube.com/t/partnerships_showcase">Content Partners</a>
  
</li>
      <li>
  
    <a href="https://web.archive.org/web/20091114041433/http://youtube.com/t/partnerships_success">Success Stories</a>
  
</li>
      <li>
  
    <a href="https://web.archive.org/web/20091114041433/http://youtube.com/t/partnerships_faq">Qualifications &amp; FAQ</a>
  
</li>
      <li>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/nonprofits">
          Nonprofit Program</a>
      </li>
    </ul>
    <h1>
      
    </h1>
  </div>


  <div class="yts-main">
        <div class="yt-primary-box yts-pretty-box">
    <div class="yts-landing-intro">
      <h2>Partner With SilasTube</h2>
      
      <p>You've got great videos and a growing audience. Let SilasTube help you take it to the next level through our Partner Program.</p>
      
        <div>
              <form name="yppApplyNowForm" method="post">
                    <input type="hidden" name="page" value="start">

    <input type="hidden" name="partner_type" value="C">

    <input type="hidden" name="status" value="N">

    <input type="hidden" name="username" value="">


                <span class="heading">
                  <a class="yt-button yt-button-urgent" id="" style="" href="https://web.archive.org/web/20091114041433/youtube.com/partners#" onclick="document.yppApplyNowForm.submit(); return false;"><span>Apply now</span></a>
                </span>
              <input name="session_token" type="hidden" value="hmRBUmMIof68kr0DTXuCGV9ha4V8MTI1ODI1ODQ3Mw=="></form>
        </div>
    </div>
    
    <img src="/img/partners.png" width="370" height="252">
    <div style="clear: right;"></div>
  </div>
  
  <div class="yt-primary-box" style="margin-top: 20px; width: 743px;">
    <h3 class="yt-box-title">Content Partners</h3>
    
    <a id="yts-scroller-left" onclick="scrollPartnersBy(-1); this.focus();" style="margin-top: 42px; margin-left: -10px;"></a>
    <a id="yts-scroller-right" onclick="scrollPartnersBy(1); this.focus();" style="margin-top: 42px; margin-right: -10px;"></a>
    
    <div id="yts-partners-panels-container">
    <ul id="yts-partners-panels">
      <li>
        <div class="user-thumb-xlarge"><div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/boburnham"><img src="./YouTube - Partner Program_files/default.jpg"></a>
        </div></div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/boburnham">MickeyJr098762</a>
      </li>
      <li>
        <div class="user-thumb-xlarge"><div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/charlestrippy"><img src="./YouTube - Partner Program_files/default(1).jpg"></a>
        </div></div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/charlestrippy">charlestrippy</a>
      </li>
      <li>
        <div class="user-thumb-xlarge"><div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/collegehumor"><img src="./YouTube - Partner Program_files/default(2).jpg"></a>
        </div></div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/collegehumor">collegehumor</a>
      </li>
      <li>
        <div class="user-thumb-xlarge"><div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/communitychannel"><img src="./YouTube - Partner Program_files/default(3).jpg"></a>
        </div></div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/communitychannel">communitychannel</a>
      </li>
      <li>
        <div class="user-thumb-xlarge"><div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/davedays"><img src="./YouTube - Partner Program_files/default(4).jpg"></a>
        </div></div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/davedays">davedays</a>
      </li>
      <li>
        <div class="user-thumb-xlarge"><div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/ehow"><img src="./YouTube - Partner Program_files/1.jpg"></a>
        </div></div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/ehow">Demand Media</a>
      </li>
      <li>
        <div class="user-thumb-xlarge"><div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/fred"><img src="./YouTube - Partner Program_files/default(5).jpg"></a>
        </div></div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/fred">fred</a>
      </li>
      <li>
        <div class="user-thumb-xlarge"><div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/happyslip"><img src="./YouTube - Partner Program_files/1(1).jpg"></a>
        </div></div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/happyslip">happyslip</a>
      </li>
      <li>
        <div class="user-thumb-xlarge"><div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/hdcyt"><img src="./YouTube - Partner Program_files/1(2).jpg"></a>
        </div></div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/hdcyt">hdcyt</a>
      </li>
      <li>
        <div class="user-thumb-xlarge"><div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/hotforwords"><img src="./YouTube - Partner Program_files/default(6).jpg"></a>
        </div></div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/hotforwords">hotforwords</a>
      </li>
      <li>
        <div class="user-thumb-xlarge"><div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/householdhacker"><img src="./YouTube - Partner Program_files/default(7).jpg"></a>
        </div></div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/householdhacker">householdhacker</a>
      </li>
      <li>
        <div class="user-thumb-xlarge"><div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/neilcicierega"><img src="./YouTube - Partner Program_files/default(8).jpg"></a>
        </div></div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/neilcicierega">neilcicierega</a>
      </li>
      <li>
        <div class="user-thumb-xlarge"><div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/improveverywhere"><img src="./YouTube - Partner Program_files/1(3).jpg"></a>
        </div></div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/improveverywhere">improveverywhere</a>
      </li>
      <li>
        <div class="user-thumb-xlarge"><div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/khanacademy"><img src="./YouTube - Partner Program_files/default(9).jpg"></a>
        </div></div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/khanacademy">khanacademy</a>
      </li>
      <li>
        <div class="user-thumb-xlarge"><div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/lisanova"><img src="./YouTube - Partner Program_files/default(10).jpg"></a>
        </div></div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/lisanova">lisanova</a>
      </li>
      <li>
        <div class="user-thumb-xlarge"><div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/lonelygirl15"><img src="./YouTube - Partner Program_files/1(4).jpg"></a>
        </div></div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/lonelygirl15">lonelygirl15</a>
      </li>
      <li>
        <div class="user-thumb-xlarge"><div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/machinima"><img src="./YouTube - Partner Program_files/1(5).jpg"></a>
        </div></div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/machinima">machinima</a>
      </li>
      <li>
        <div class="user-thumb-xlarge"><div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/mileymandy"><img src="./YouTube - Partner Program_files/1(6).jpg"></a>
        </div></div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/mileymandy">mileymandy</a>
      </li>
      <li>
        <div class="user-thumb-xlarge"><div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/mondominishows"><img src="./YouTube - Partner Program_files/default(11).jpg"></a>
        </div></div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/mondominishows">mondominishows</a>
      </li>
      <li>
        <div class="user-thumb-xlarge"><div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/nalts"><img src="./YouTube - Partner Program_files/1(7).jpg"></a>
        </div></div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/nalts">nalts</a>
      </li>
      <li>
        <div class="user-thumb-xlarge"><div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/nigahiga"><img src="./YouTube - Partner Program_files/default(12).jpg"></a>
        </div></div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/nigahiga">nigahiga</a>
      </li>
      <li>
        <div class="user-thumb-xlarge"><div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/nqtv"><img src="./YouTube - Partner Program_files/default(13).jpg"></a>
        </div></div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/nqtv">nqtv</a>
      </li>
      <li>
        <div class="user-thumb-xlarge"><div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/panacea81"><img src="./YouTube - Partner Program_files/default(14).jpg"></a>
        </div></div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/panacea81">panacea81</a>
      </li>
      <li>
        <div class="user-thumb-xlarge"><div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/pogobat"><img src="./YouTube - Partner Program_files/1(8).jpg"></a>
        </div></div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/pogobat">pogobat</a>
      </li>
      <li>
        <div class="user-thumb-xlarge"><div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/simonscat"><img src="./YouTube - Partner Program_files/1(9).jpg"></a>
        </div></div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/simonscat">simonscat</a>
      </li>
      <li>
        <div class="user-thumb-xlarge"><div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/smosh"><img src="./YouTube - Partner Program_files/default(15).jpg"></a>
        </div></div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/smosh">smosh</a>
      </li>
      <li>
        <div class="user-thumb-xlarge"><div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/smpfilms"><img src="./YouTube - Partner Program_files/default(16).jpg"></a>
        </div></div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/smpfilms">smpfilms</a>
      </li>
      <li>
        <div class="user-thumb-xlarge"><div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/speedyconkiwi"><img src="./YouTube - Partner Program_files/default(17).jpg"></a>
        </div></div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/speedyconkiwi">speedyconkiwi</a>
      </li>
      <li>
        <div class="user-thumb-xlarge"><div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/sxephil"><img src="./YouTube - Partner Program_files/1(10).jpg"></a>
        </div></div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/sxephil">sxephil</a>
      </li>
      <li>
        <div class="user-thumb-xlarge"><div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/tayzonday"><img src="./YouTube - Partner Program_files/1(11).jpg"></a>
        </div></div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/tayzonday">tayzonday</a>
      </li>
      <li>
        <div class="user-thumb-xlarge"><div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/theonion"><img src="./YouTube - Partner Program_files/default(18).jpg"></a>
        </div></div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/theonion">theonion</a>
      </li>
      <li>
        <div class="user-thumb-xlarge"><div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/venetianprincess"><img src="./YouTube - Partner Program_files/1(12).jpg"></a>
        </div></div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/venetianprincess">venetianprincess</a>
      </li>
      <li>
        <div class="user-thumb-xlarge"><div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/wastetimechasingcars"><img src="./YouTube - Partner Program_files/default(19).jpg"></a>
        </div></div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/wastetimechasingcars">wastetimechasingcars</a>
      </li>
      <li>
        <div class="user-thumb-xlarge"><div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/whatthebuckshow"><img src="./YouTube - Partner Program_files/default(20).jpg"></a>
        </div></div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/whatthebuckshow">whatthebuckshow</a>
      </li>
      <li>
        <div class="user-thumb-xlarge"><div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/williamsledd"><img src="./YouTube - Partner Program_files/1(13).jpg"></a>
        </div></div>
        <a href="https://web.archive.org/web/20091114041433/http://youtube.com/user/williamsledd">williamsledd</a>
      </li>
    </ul>
    </div>
    
    <a href="https://web.archive.org/web/20091114041433/http://youtube.com/channels?s=ms&amp;t=a&amp;g=5" style="float: right; margin-top: 15px;">See our current content partners</a>
    <div class="clear"></div>
  </div>
  
  <table style="margin-top: 20px;"><tbody><tr><td style="width: 50%; padding-right: 5px;">
    <div class="yt-primary-box" style="height: 11em;">
      <h3 class="yt-box-title">Partner Benefits</h3>
    
      <p style="margin-top: 1em;">There are many benefits to becoming a SilasTube Partner. Learn about opportunities to earn money,  gain deeper insight into your content, and reach more viewers with higher quality video playback options.</p>
      
      <a href="https://web.archive.org/web/20091114041433/http://youtube.com/t/partnerships_benefits">Find out more</a>
    </div>
  </td><td style="padding-left: 5px;">
    <div class="yt-primary-box" style="height: 11em;">
      <h3 class="yt-box-title">Qualifications &amp; FAQ</h3>
      
      
      <p style="margin-top: 1em;">To qualify for the SilasTube Partner program, you must meet some minimum criteria, You must atleast have 10 subscribers, good content that is not something a 9yr old would watch, A cool personality.</p>
      
      
      <a href="https://web.archive.org/web/20091114041433/http://youtube.com/t/partnerships_faq">Find out more</a>
    </div>
  </td></tr></tbody></table>
  
  
  
  <script>
  var partnerScroller = new MooFx.BasicEffect('yts-partners-panels', 'marginLeft');
  function scrollPartnersBy(step) {
    var panels = _gel("yts-partners-panels");
    var currentMarginLeft = parseInt(panels.style.marginLeft);
    currentMarginLeft = currentMarginLeft || 0;
    var toMarginLeft = currentMarginLeft - (696 * step);
    if (toMarginLeft >= -3480 && toMarginLeft <= 0) {
      partnerScroller.custom(currentMarginLeft, toMarginLeft);
    }
  }
  </script>

    
  </div>

    <div id="promos" class="clear">
      
    </div>
    
    
    
    
    

  


    <!-- end bottom section -->
  </div>
  <div> 

  </div>
  <!--[if lt IE 8]></div><![endif]-->
      <script>
    
    
    
    
      yt.setTimeout(function() {
        window.yt.www.suggest.install(document.searchForm,
            document.searchForm.search_query,
            'yt','en','close',
            'Suggestions',
            'Web search',
            -1);
          }, 100);
  </script>
  
  <script id="legacy-user-datastore" style="behavior:url(&#39;/web/20091114041433im_/http://youtube.com/partners#default#userdata&#39;)"></script>
  
  
  
  
  



  


  <a name="pageBottom"></a>



<table id="completeTable" cellpadding="0" cellspacing="0" class="google-ac-m" style="visibility: hidden; left: 0px; top: -1px; width: 0px;"></table><iframe id="completeIFrame" style="z-index: 1999999; position: absolute; display: block; border-width: 0px; left: 0px; top: -1px; width: 0px; height: 0px;" allow="autoplay &#39;self&#39;; fullscreen &#39;self&#39;" src="./YouTube - Partner Program_files/saved_resource.html"></iframe>
  <?php require($_SERVER['DOCUMENT_ROOT'] . "/static/mod/footer.php"); ?></body></html>