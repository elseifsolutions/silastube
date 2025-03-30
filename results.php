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
<div id="homepage-main-content">
<!-- saved from url=(0073)https://web.archive.org/web/20090501204849/http://www.youtube.com/results -->
<html lang="en" style="--wm-toolbar-height: 1px;"><!-- machid: Sk5iZWJSNkNDZnBpcm1MNEMwUkJraFlpYnpsZEZDb2pRN0pSUXFRekpmWVFtcXZvaGk1OF9n --><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script src="yt/js/athena.js.download" type="text/javascript"></script>
<script type="text/javascript">window.addEventListener('DOMContentLoaded',function(){var v=archive_analytics.values;v.service='wb';v.server_name='wwwb-app216.us.archive.org';v.server_ms=776;archive_analytics.send_pageview({});});</script>
<script type="text/javascript" src="/yt/js/bundle-playback.js.download" charset="utf-8"></script>
<script type="text/javascript" src="/yt/js/wombat.js.download" charset="utf-8"></script>
<script type="text/javascript">
    __wm.init("https://web.archive.org/web");
  __wm.wombat("http://www.youtube.com/results","20090501204849","https://web.archive.org/","web","https://web-static.archive.org/_static/",
        "1241210929");
</script>
<link rel="stylesheet" type="text/css" href="/yt/css/banner-styles.css">
<link rel="stylesheet" type="text/css" href="/yt/css/iconochive.css">
<!-- Start Wayback Rewrite JS Include -->
<script type="text/javascript" src="/yt/js/jwplayer.js.download" charset="utf-8"></script>
<script type="text/javascript" src="/yt/js/bundle-video.js.download" charset="utf-8"></script>
<script type="text/javascript">
_wmVideos_.init({ prefix:"/web" });
</script>
<!-- End Wayback Rewrite JS Include -->


  


    <link rel="stylesheet" href="/yt/css/www-core-vfl94221.css" type="text/css">

    
    
    









    <script type="text/javascript" src="/yt/js/base_all_with_bidi-vfl94368.js.download"></script>




    <script type="text/javascript">
      var gIsGoogleAnalyticsEnabled = false;
      
  var gXSRF_token = '';
  var gXSRF_field_name = '';
  var gXSRF_ql_pair = '';
  var onLoadFunctionList = onLoadFunctionList || [];

    gXSRF_token = 'edlrE8TtBxQ8bN9Y7GSu8iTR6dJ8MTI0MTI5NzMyOQ==';
    gXSRF_field_name = 'session_token';
    onLoadFunctionList.push(function() { populate_session_token() });

    gXSRF_ql_pair = 'session_token=gvLRhqaZ30vyGjpmioaDnCqkX8J8MA==';


    </script>

    
  






<script type="text/javascript">
  function showDropdown(event, element) {
    removeClass(_gel('search-by-container'), 'show-dropdown');
    removeClass(_gel('sort-by-container'), 'show-dropdown');
    removeClass(_gel('search-type-container'), 'show-dropdown');
    if (element) addClass(element, 'show-dropdown');
    if (!event) event = window.event;
    event.cancelBubble = true;
    if (event.stopPropagation) event.stopPropagation();
  }
  addListener(document, "mouseover", function(e) {
    var element = e.target || e.srcElement;

    if (!hasAncestor(element, 'search-by-container') && _gel('search-by-container')) {
      removeClass(_gel('search-by-container'), 'show-dropdown');
    }
  
    if (!hasAncestor(element, 'sort-by-container') && _gel('sort-by-container')) {
      removeClass(_gel('sort-by-container'), 'show-dropdown'); 
    }

    if (!hasAncestor(element, 'search-type-container') && _gel('search-type-container')) {
      removeClass(_gel('search-type-container'), 'show-dropdown');
    }
    
    if (!hasAncestor(element, 'category-container') && _gel('category-container')) {
      removeClass(_gel('category-container'), 'show-dropdown');
    }
  });

  var gGoogleSuggest = true;

  var gReturnToOriginalEpisodeLink = 'Return to <a class="nowrap" onclick="onOriginalEpisode(this);return false;" href="#">original search result</a>';

  var gResultsSafeSearchOn = false;
  var gResultsURLSafeSearchOff = '/results?safe_search=off';
  var gResultsURLSafeSearchOn = '/results?safe_search=on';

  var gGeoTooltipText =  'Move this marker to a new location then click Search to find videos recorded in that area.';
  var gGeoTooltipMoreText= 'Zoom in/out to change the radius for your search.';
  var gGeoTooltipButton = "<div class='alignC' style='margin-top: 4px'><button onclick='onGeoTooltipSearch(this);'>" + 'Search' + "</button></div>";
  var gGeoTooltipMore = "<a href='#' onclick='marker.openInfoWindowHtml(gGeoTooltipMore); return false;'>" + 'more' + "&raquo;</a>";
  var gGeoTooltip = "<div style='width: 200px; padding-right: 10px'>" + gGeoTooltipText + gGeoTooltipMore + gGeoTooltipButton + "</div>";
  var gGeoTooltipMore = "<div style='width: 200px; padding-right: 10px'>" + gGeoTooltipText + gGeoTooltipMoreText + gGeoTooltipButton + "</div>";
  var gGeoSelectedLocationText = 'Selected location';


</script>



  <link rel="search" type="application/opensearchdescription+xml" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/opensearch?locale=en_US" title="YouTube Video Search">
  <link rel="icon" href="https://web.archive.org/web/20090501204849im_/http://s.ytimg.com/yt/favicon-vfl86270.ico" type="image/x-icon">
  <link rel="shortcut icon" href="https://web.archive.org/web/20090501204849im_/http://s.ytimg.com/yt/favicon-vfl86270.ico" type="image/x-icon">

  <link rel="alternate" type="application/rss+xml" title="YouTube - " href="https://web.archive.org/web/20090501204849/http://gdata.youtube.com/feeds/base/videos?q=&amp;client=ytapi-youtube-search&amp;alt=rss&amp;v=2">

    <link rel="alternate" media="handheld" href="https://web.archive.org/web/20090501204849/http://m.youtube.com/results?desktop_uri=%2Fresults&amp;">



    <meta name="description" content="Share your videos with friends, family, and the world">

  <meta name="keywords" content="video, sharing, camera phone, video phone, free, upload">

<style></style></head>


<body onload="performOnLoadFunctions();" class="en_US is-english" onunload="performOnUnloadFunctions();"><!-- BEGIN WAYBACK TOOLBAR INSERT -->
<script>__wm.rw(0);</script>
<div id="wm-ipp-base" lang="en" style="display: block; direction: ltr; height: 1px;"><template shadowrootmode="closed"><div id="wm-ipp" style="position:fixed;left:0;top:0;right:0;">
<div id="donato" style="position:relative;width:100%;">
  <div id="donato-base">
    <iframe id="donato-if" src="https://archive.org/includes/donate.php?as_page=1&amp;platform=wb&amp;referer=https%3A//web.archive.org/web/20090501204849/http%3A//www.youtube.com/results" scrolling="no" frameborder="0" style="width:100%; height:100%">
    </iframe>
  </div>
</div><div id="wm-ipp-inside" style="display: none;">
  <div id="wm-toolbar" style="position:relative;display:flex;flex-flow:row nowrap;justify-content:space-between;">
    <div id="wm-logo" style="/*width:110px;*/padding-top:12px;">
      <a href="https://web.archive.org/web/" title="Wayback Machine home page"><img src="https://web-static.archive.org/_static/images/toolbar/wayback-toolbar-logo-200.png" srcset="https://web-static.archive.org/_static/images/toolbar/wayback-toolbar-logo-100.png, https://web-static.archive.org/_static/images/toolbar/wayback-toolbar-logo-150.png 1.5x, https://web-static.archive.org/_static/images/toolbar/wayback-toolbar-logo-200.png 2x" alt="Wayback Machine" style="width:100px" border="0"></a>
    </div>
    <div class="c" style="display:flex;flex-flow:column nowrap;justify-content:space-between;flex:1;">
      <form class="u" style="display:flex;flex-direction:row;flex-wrap:nowrap;" target="_top" method="get" action="https://web.archive.org/web/submit" name="wmtb" id="wmtb"><input type="text" name="url" id="wmtbURL" value="http://www.youtube.com/results" onfocus="this.focus();this.select();" style="flex:1;" autocomplete="off"><input type="hidden" name="type" value="replay"><input type="hidden" name="date" value="20090501204849"><input type="submit" value="Go">
      </form>
      <div style="display:flex;flex-flow:row nowrap;align-items:flex-end;">
                <div class="s" id="wm-nav-captures" style="flex:1;"><a class="t" href="https://web.archive.org/web/*/http://www.youtube.com/results" title="See a list of every capture for this URL">24,174 captures</a><div class="r" title="Timespan for captures of this URL">17 Dec 2005 - 25 Jan 2025</div></div>
        <div class="k">
          <a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results" id="wm-graph-anchor">
            <div id="wm-ipp-sparkline" title="Explore captures for this URL" style="position: relative">
              <canvas id="wm-sparkline-canvas" width="750" height="27" border="0"></canvas>
            <div class="yt" style="display: none; width: 25px; height: 27px;"></div><div class="mt" style="display: none; width: 2px; height: 27px;"></div></div>
          </a>
        </div>
      </div>
    </div>
    <div class="n">
      <table>
        <tbody>
          <!-- NEXT/PREV MONTH NAV AND MONTH INDICATOR -->
          <tr class="m">
            <td class="b" nowrap="nowrap"><a href="https://web.archive.org/web/20090327203213/http://www.youtube.com/results" title="27 Mar 2009"><strong>Mar</strong></a></td>
            <td class="c" id="displayMonthEl" title="You are here: 20:48:49 May 01, 2009">MAY</td>
            <td class="f" nowrap="nowrap"><a href="https://web.archive.org/web/20090604182010/http://www.youtube.com/results" title="04 Jun 2009"><strong>Jun</strong></a></td>
          </tr>
          <!-- NEXT/PREV CAPTURE NAV AND DAY OF MONTH INDICATOR -->
          <tr class="d">
            <td class="b" nowrap="nowrap"><a href="https://web.archive.org/web/20090423011321/http://www.youtube.com/results" title="01:13:21 Apr 23, 2009"><img src="https://web-static.archive.org/_static/images/toolbar/wm_tb_prv_on.png" alt="Previous capture" width="14" height="16" border="0"></a></td>
            <td class="c" id="displayDayEl" style="width:34px;font-size:22px;white-space:nowrap;" title="You are here: 20:48:49 May 01, 2009">01</td>
            <td class="f" nowrap="nowrap"><a href="https://web.archive.org/web/20090507100212/http://www.youtube.com/results" title="10:02:12 May 07, 2009"><img src="https://web-static.archive.org/_static/images/toolbar/wm_tb_nxt_on.png" alt="Next capture" width="14" height="16" border="0"></a></td>
          </tr>
          <!-- NEXT/PREV YEAR NAV AND YEAR INDICATOR -->
          <tr class="y">
            <td class="b" nowrap="nowrap"><a href="https://web.archive.org/web/20071024170613/http://www.youtube.com/results" title="24 Oct 2007"><strong>2007</strong></a></td>
            <td class="c" id="displayYearEl" title="You are here: 20:48:49 May 01, 2009">2009</td>
            <td class="f" nowrap="nowrap"><a href="https://web.archive.org/web/20100618213531/http://www.youtube.com/results" title="18 Jun 2010"><strong>2010</strong></a></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="r" style="display:flex;flex-flow:column nowrap;align-items:flex-end;justify-content:space-between;">
      <div id="wm-btns" style="text-align:right;height:23px;">
                <span class="xxs">
          <div id="wm-save-snapshot-success">success</div>
          <div id="wm-save-snapshot-fail">fail</div>
          <a id="wm-save-snapshot-open" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" title="Share via My Web Archive" style="display: none;">
            <span class="iconochive-web"></span>
          </a>
          <a href="https://archive.org/account/login.php" title="Sign In" id="wm-sign-in" style="display: inline-block;">
            <span class="iconochive-person"></span>
          </a>
          <span id="wm-save-snapshot-in-progress" class="iconochive-web" style="display: none;"></span>
        </span>
                <a class="xxs" href="http://faq.web.archive.org/" title="Get some help using the Wayback Machine" style="top:-6px;"><span class="iconochive-question" style="color:rgb(87,186,244);font-size:160%;"></span></a>
        <a id="wm-tb-close" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#close" style="top:-2px;" title="Close the toolbar"><span class="iconochive-remove-circle" style="color:#888888;font-size:240%;"></span></a>
      </div>
      <div id="wm-share" class="xxs">
        <a href="https://web.archive.org/web/20090501204849/http://web.archive.org/screenshot/http://www.youtube.com/results" id="wm-screenshot" title="screenshot" style="visibility: hidden;">
          <span class="wm-icon-screen-shot"></span>
        </a>
        <a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" id="wm-video" title="video">
          <span class="iconochive-movies"></span>
        </a>
        <a id="wm-share-facebook" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" data-url="https://web.archive.org/web/20090501204849/http://www.youtube.com/results" title="Share on Facebook" style="margin-right:5px;" target="_blank"><span class="iconochive-facebook" style="color:#3b5998;font-size:160%;"></span></a>
        <a id="wm-share-twitter" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" data-url="https://web.archive.org/web/20090501204849/http://www.youtube.com/results" title="Share on Twitter" style="margin-right:5px;" target="_blank"><span class="iconochive-twitter" style="color:#1dcaff;font-size:160%;"></span></a>
      </div>
      <div style="padding-right:2px;text-align:right;white-space:nowrap;">
        <a id="wm-expand" class="wm-btn wm-closed" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#expand"><span id="wm-expand-icon" class="iconochive-down-solid"></span> <span class="xxs" style="font-size:80%;">About this capture</span></a>
      </div>
    </div>
  </div>
    <div id="wm-capinfo" style="border-top:1px solid #777;display:none; overflow: hidden">
        <div id="wm-capinfo-notice" source="api"></div>
                <div id="wm-capinfo-collected-by">
    <div style="background-color:#666;color:#fff;font-weight:bold;text-align:center">COLLECTED BY</div>
    <div style="padding:3px;position:relative" id="wm-collected-by-content">
      <div style="display:inline-block;vertical-align:top;width:49%;">
      <span class="c-logo" style="background-image:url(https://archive.org/services/img/web_tran)"></span>
    <div>Collection: <a style="color:#33f;" href="https://archive.org/details/web_tran" target="_new"><span class="wm-title">web_tran</span></a></div>
    <div style="max-height:75px;overflow:hidden;position:relative;">
    <div style="position:absolute;top:0;left:0;width:100%;height:75px;background:linear-gradient(to bottom,rgba(255,255,255,0) 0%,rgba(255,255,255,0) 90%,rgba(255,255,255,255) 100%);"></div>
    Crawl performed by Internet Archive.  This data is currently not publicly accessible.
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
  </div></div></div><link rel="stylesheet" type="text/css" href="./YouTube_files/banner-styles.css"><link rel="stylesheet" type="text/css" href="/yt/iconochive.css"><div class="wb-autocomplete-suggestions " style="left: 0px; top: 1513px; width: 0px;"></div></template>
</div><div id="wm-ipp-print"></div>
<script type="text/javascript">//<![CDATA[
__wm.bt(750,27,25,2,"web","http://www.youtube.com/results","20090501204849",1996,"https://web-static.archive.org/_static/",["https://web-static.archive.org/_static/css/banner-styles.css?v=p7PEIJWi","https://web-static.archive.org/_static/css/iconochive.css?v=3PDvdIFv"], false);
  __wm.rw(1);
//]]></script>
<!-- END WAYBACK TOOLBAR INSERT -->
 






<div id="baseDiv" class="date-20090501 video-info ">
  

  
   



  
  
  



<noscript>
  <div class="errorBox">
    Hello, you seem to have JavaScript turned off.  Please enable it to see search results properly.
  </div>
</noscript>

<div id="search-section-header">


  <div class="name">
      <span class="search-query">“”</span> results
  
  

      <strong>1 - 20</strong> of about <strong>4,210</strong>

  </div>
  <div class="clear"></div>
</div>


  <table id="search-options-container" cellpadding="0" cellspacing="0">
    <tbody><tr>
      <td class="search-main-tabs">
            <div class="search-type-selected">All</div>

            <div class="search-type-not-selected"><a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results?search_type=search_users" onmousedown="urchinTracker(&#39;/Events/Results/ChannelsTab&#39;);">Channels</a></div>

            <div class="search-type-not-selected"><a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results?search_type=search_playlists" onmousedown="urchinTracker(&#39;/Events/Results/PlaylistsTab&#39;);">Playlists</a></div>

        <div class="clearL"></div>
      </td>

      <td class="search-sort">

        <span id="search-by-container" class="sort-by">
          <div id="search-by-dropdown" class="dropdown">
            <div class="first"><a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results?search_type=videos&amp;search_sort=video_date_uploaded" onmousedown="urchinTracker(&#39;/Events/Results/Modifiers/DateAdded&#39;);">Newest</a></div>
            <div><a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results?search_type=videos&amp;search_sort=video_date_uploaded_reverse" onmousedown="urchinTracker(&#39;/Events/Results/Modifiers/DateAddedReverse&#39;);">Oldest</a></div>
            <div><a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results?search_type=videos&amp;search_sort=video_view_count" onmousedown="urchinTracker(&#39;/Events/Results/Modifiers/ViewCount&#39;);">View Count</a></div>
            <div><a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results?search_type=videos&amp;search_sort=video_avg_rating" onmousedown="urchinTracker(&#39;/Events/Results/Modifiers/Rating&#39;);">Rating</a></div>
            <div><a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results?search_type=videos" onmousedown="urchinTracker(&#39;/Events/Results/Modifiers/Relevance&#39;);">Relevance</a></div>
          </div>
          <div class="dropdown-link">
            <a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" class="text" onmouseover="showDropdown(event, _gel(&#39;search-by-container&#39;)); return false;" onclick="showDropdown(event, _gel(&#39;search-by-container&#39;)); return false;"><span class="search-sort-title">Sort by:</span><br><span class="search-sort-value">Relevance</span><span style="font-size: 9px;">▼</span></a> 
          </div>
        </span>

        <span id="sort-by-container" class="sort-by">
          <div id="sort-by-dropdown" class="dropdown hidden">
            <div class="first"><a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results?uploaded=d&amp;search_type=videos" onmousedown="urchinTracker(&#39;/Events/Results/Modifiers/Today&#39;);">Today</a></div>
            <div><a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results?uploaded=w&amp;search_type=videos" onmousedown="urchinTracker(&#39;/Events/Results/Modifiers/ThisWeek&#39;);">This week</a></div>
            <div><a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results?uploaded=m&amp;search_type=videos" onmousedown="urchinTracker(&#39;/Events/Results/Modifiers/ThisMonth&#39;);">This month</a></div>
            <div><a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results?search_type=videos" onmousedown="urchinTracker(&#39;/Events/Results/Modifiers/Anytime&#39;);">Anytime</a></div>
          </div>
          <div class="dropdown-link">
            <a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" class="text" onmouseover="showDropdown(event, _gel(&#39;sort-by-container&#39;)); return false;" onclick="showDropdown(event, _gel(&#39;sort-by-container&#39;)); return false"><span class="search-sort-title">Uploaded:</span><br><span class="search-sort-value">Anytime</span><span style="font-size: 9px;">▼</span></a>
          </div>            
        </span>

        <span id="search-type-container" class="sort-by">
          <div id="search-type-dropdown" class="dropdown hidden">
            <div class="first"><a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results?search_type=videos&amp;partner=1" onmousedown="urchinTracker(&#39;/Events/Results/Modifiers/PartnerVideos&#39;);">Partner Videos</a></div>
            <div><a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results?search_type=videos&amp;annotations=1" onmousedown="urchinTracker(&#39;/Events/Results/Modifiers/Annotations&#39;);">Annotations</a></div>
            <div><a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results?search_type=videos&amp;closed_captions=1" onmousedown="urchinTracker(&#39;/Events/Results/Modifiers/ClosedCaptions&#39;);">Closed Captions</a></div>
            <div><a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results?search_type=videos&amp;high_definition=1" onmousedown="urchinTracker(&#39;/Events/Results/Modifiers/HighDefinition&#39;);">HD</a></div>
            <div><a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results?search_type=videos">All</a></div>
          </div>
          
          <div class="dropdown-link">
            <a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" class="text" onmouseover="showDropdown(event, _gel(&#39;search-type-container&#39;)); return false;" onclick="showDropdown(event, _gel(&#39;search-type-container&#39;)); return false"><span class="search-sort-title">Type:</span><br><span class="search-sort-value">                              All
              </span><span style="font-size: 9px;">▼</span></a>
          </div>            
        </span>

        <div class="clear"></div>
      </td>
      <td id="search-advanced">
        <a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" class="hLink" onclick="return toggleAdvSearch(&#39;&#39;, &#39;&#39;, &#39;&#39;, &#39;&#39;, &#39;&#39;, &#39;&#39;, &#39;relevance&#39;, &#39;&#39;)" onmousedown="urchinTracker(&#39;/Events/Results/AdvancedOptions&#39;)">
          Advanced Options
        </a>
      </td>
    </tr>
  </tbody></table>

  <div id="search-advanced-form" class="hid">
    <div class="search-setting-inner alignC">Loading...</div>
  </div>


  <div id="translate-checkbox-span" class="hid" style="margin:0 0 1px 0; padding:0">    <label id="translate-checkbox-label" for="translate-checkbox"><input id="translate-checkbox" onclick="translateAll(&quot;en&quot;, &quot;session_token=x-kW3tlMSVi2JQuB8cBkKxZLrXZ8MA==&quot;)" type="checkbox" style="vertical-align:middle; padding:0px; margin: -1px 3px 0 0;"><b>Translate results</b> into my language</label>
  </div>




<div id="results-main-content">
  







    

    
      <div id="video_grid" class="list-view"> <!-- start search results -->







          
<div class="video-cell" style="width:19.6%">





  <div class="video-entry">




      <div class="v120WideEntry"><div class="v120WrapperOuter"><div class="v120WrapperInner"><a id="video-url-OR8npn4RK6I" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=OR8npn4RK6I" rel="nofollow"><img title="Definition Fail" src="./YouTube_files/default.jpg" class="vimg120" qlicon="OR8npn4RK6I" alt="Definition Fail"></a><div id="quicklist-icon-OR8npn4RK6I" class="addtoQL90"><a id="add-to-quicklist-OR8npn4RK6I" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" ql="OR8npn4RK6I" title="Add Video to QuickList"><button class="master-sprite QLIconImg" title="" onclick="clicked_add_icon(this, this.parentNode.getAttribute(&#39;ql&#39;), 0, &#39;https://web.archive.org/web/20090501204849/http://i4.ytimg.com/vi/OR8npn4RK6I/default.jpg&#39;, &#39;Definition Fail&#39;);return false;" onmouseover="mouseOverQuickAdd(this)" onmouseout="mouseOutQuickAdd(this)" onmousedown="urchinTracker(&#39;/Events/results/QuickList+AddTo&#39;)"></button></a><div class="hid quicklist-inlist"><a id="add-to-quicklist-OR8npn4RK6I" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" ql="OR8npn4RK6I" title="Add Video to QuickList"></a><a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch_queue?all">Added</a></div></div>
<div class="video-time"><span id="video-run-time-OR8npn4RK6I">0:44</span></div></div></div></div>

    <div class="video-main-content" id="video-main-content-OR8npn4RK6I">


      <div class="video-title video-title-results">
        <div class="video-short-title">
            <span id="translated_short_prefix_OR8npn4RK6I" style="font-size: 10px;" class="hid">[TRANSLATED]</span>
            <a id="video-short-title-OR8npn4RK6I" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=OR8npn4RK6I" title="Definition Fail" rel="nofollow">Definition Fail</a>
        </div>
        <div class="video-long-title">
            <span id="translated_long_prefix_OR8npn4RK6I" style="font-size: 10px;" class="hid">[TRANSLATED]</span>
            <a id="video-long-title-OR8npn4RK6I" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=OR8npn4RK6I" title="Definition Fail" rel="nofollow">Definition Fail</a>
        </div>
      </div>

        <div id="video-description-OR8npn4RK6I" class="video-description">
          For more, visit failblog.org
        </div>


      <div class="video-facets">

          <span id="video-average-rating-OR8npn4RK6I" class="video-rating-list ">
                  

  <div>

  
<button class="master-sprite ratingVS ratingVS-4.5" title="4.5"></button>



  </div>


          </span>

            <span id="video-added-time-OR8npn4RK6I" class="video-date-added">4 weeks ago</span>

          <span id="video-num-views-OR8npn4RK6I" class="video-view-count">1,386,512 views</span>

          <span class="video-username"><a id="video-from-username-OR8npn4RK6I" class="hLink" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/user/failvideo">failvideo</a></span>

          <span id="video-average-rating-OR8npn4RK6I" class="video-rating-grid ">
                  

  <div>

  
<button class="master-sprite ratingVS ratingVS-4.5" title="4.5"></button>



  </div>


          </span>


      </div>  

    </div>  
    <div class="video-clear-list-left"></div>



  </div>  
</div>  







          
<div class="video-cell" style="width:19.6%">





  <div class="video-entry">




      <div class="v120WideEntry"><div class="v120WrapperOuter"><div class="v120WrapperInner"><a id="video-url-rU3WgN--sFs" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=rU3WgN--sFs" rel="nofollow"><img title="Uppercut Fail" src="./YouTube_files/default(1).jpg" class="vimg120" qlicon="rU3WgN--sFs" alt="Uppercut Fail"></a><div id="quicklist-icon-rU3WgN--sFs" class="addtoQL90"><a id="add-to-quicklist-rU3WgN--sFs" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" ql="rU3WgN--sFs" title="Add Video to QuickList"><button class="master-sprite QLIconImg" title="" onclick="clicked_add_icon(this, this.parentNode.getAttribute(&#39;ql&#39;), 0, &#39;https://web.archive.org/web/20090501204849/http://i3.ytimg.com/vi/rU3WgN--sFs/default.jpg&#39;, &#39;Uppercut Fail&#39;);return false;" onmouseover="mouseOverQuickAdd(this)" onmouseout="mouseOutQuickAdd(this)" onmousedown="urchinTracker(&#39;/Events/results/QuickList+AddTo&#39;)"></button></a><div class="hid quicklist-inlist"><a id="add-to-quicklist-rU3WgN--sFs" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" ql="rU3WgN--sFs" title="Add Video to QuickList"></a><a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch_queue?all">Added</a></div></div>
<div class="video-time"><span id="video-run-time-rU3WgN--sFs">0:28</span></div></div></div></div>

    <div class="video-main-content" id="video-main-content-rU3WgN--sFs">


      <div class="video-title video-title-results">
        <div class="video-short-title">
            <span id="translated_short_prefix_rU3WgN--sFs" style="font-size: 10px;" class="hid">[TRANSLATED]</span>
            <a id="video-short-title-rU3WgN--sFs" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=rU3WgN--sFs" title="Uppercut Fail" rel="nofollow">Uppercut Fail</a>
        </div>
        <div class="video-long-title">
            <span id="translated_long_prefix_rU3WgN--sFs" style="font-size: 10px;" class="hid">[TRANSLATED]</span>
            <a id="video-long-title-rU3WgN--sFs" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=rU3WgN--sFs" title="Uppercut Fail" rel="nofollow">Uppercut Fail</a>
        </div>
      </div>

        <div id="video-description-rU3WgN--sFs" class="video-description">
          For more, visit failblog.org View the original here www.youtube.com
        </div>


      <div class="video-facets">

          <span id="video-average-rating-rU3WgN--sFs" class="video-rating-list ">
                  

  <div>

  
<button class="master-sprite ratingVS ratingVS-5.0" title="5.0"></button>



  </div>


          </span>

            <span id="video-added-time-rU3WgN--sFs" class="video-date-added">3 weeks ago</span>

          <span id="video-num-views-rU3WgN--sFs" class="video-view-count">1,123,078 views</span>

          <span class="video-username"><a id="video-from-username-rU3WgN--sFs" class="hLink" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/user/failvideo">failvideo</a></span>

          <span id="video-average-rating-rU3WgN--sFs" class="video-rating-grid ">
                  

  <div>

  
<button class="master-sprite ratingVS ratingVS-5.0" title="5.0"></button>



  </div>


          </span>


      </div>  

    </div>  
    <div class="video-clear-list-left"></div>



  </div>  
</div>  







          
<div class="video-cell" style="width:19.6%">





  <div class="video-entry">




      <div class="v120WideEntry"><div class="v120WrapperOuter"><div class="v120WrapperInner"><a id="video-url-nBArqeadTYA" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=nBArqeadTYA" rel="nofollow"><img title="Snorkeling Fail" src="./YouTube_files/default(2).jpg" class="vimg120" qlicon="nBArqeadTYA" alt="Snorkeling Fail"></a><div id="quicklist-icon-nBArqeadTYA" class="addtoQL90"><a id="add-to-quicklist-nBArqeadTYA" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" ql="nBArqeadTYA" title="Add Video to QuickList"><button class="master-sprite QLIconImg" title="" onclick="clicked_add_icon(this, this.parentNode.getAttribute(&#39;ql&#39;), 0, &#39;https://web.archive.org/web/20090501204849/http://i3.ytimg.com/vi/nBArqeadTYA/default.jpg&#39;, &#39;Snorkeling Fail&#39;);return false;" onmouseover="mouseOverQuickAdd(this)" onmouseout="mouseOutQuickAdd(this)" onmousedown="urchinTracker(&#39;/Events/results/QuickList+AddTo&#39;)"></button></a><div class="hid quicklist-inlist"><a id="add-to-quicklist-nBArqeadTYA" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" ql="nBArqeadTYA" title="Add Video to QuickList"></a><a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch_queue?all">Added</a></div></div>
<div class="video-time"><span id="video-run-time-nBArqeadTYA">0:20</span></div></div></div></div>

    <div class="video-main-content" id="video-main-content-nBArqeadTYA">


      <div class="video-title video-title-results">
        <div class="video-short-title">
            <span id="translated_short_prefix_nBArqeadTYA" style="font-size: 10px;" class="hid">[TRANSLATED]</span>
            <a id="video-short-title-nBArqeadTYA" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=nBArqeadTYA" title="Snorkeling Fail" rel="nofollow">Snorkeling Fail</a>
        </div>
        <div class="video-long-title">
            <span id="translated_long_prefix_nBArqeadTYA" style="font-size: 10px;" class="hid">[TRANSLATED]</span>
            <a id="video-long-title-nBArqeadTYA" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=nBArqeadTYA" title="Snorkeling Fail" rel="nofollow">Snorkeling Fail</a>
        </div>
      </div>

        <div id="video-description-nBArqeadTYA" class="video-description">
          For more, visit failblog.org http
        </div>


      <div class="video-facets">

          <span id="video-average-rating-nBArqeadTYA" class="video-rating-list ">
                  

  <div>

  
<button class="master-sprite ratingVS ratingVS-4.5" title="4.5"></button>



  </div>


          </span>

            <span id="video-added-time-nBArqeadTYA" class="video-date-added">1 week ago</span>

          <span id="video-num-views-nBArqeadTYA" class="video-view-count">812,825 views</span>

          <span class="video-username"><a id="video-from-username-nBArqeadTYA" class="hLink" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/user/failblog">failblog</a></span>

          <span id="video-average-rating-nBArqeadTYA" class="video-rating-grid ">
                  

  <div>

  
<button class="master-sprite ratingVS ratingVS-4.5" title="4.5"></button>



  </div>


          </span>


      </div>  

    </div>  
    <div class="video-clear-list-left"></div>



  </div>  
</div>  







          
<div class="video-cell" style="width:19.6%">





  <div class="video-entry">




      <div class="v120WideEntry"><div class="v120WrapperOuter"><div class="v120WrapperInner"><a id="video-url-ZVzdUGzbOYI" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=ZVzdUGzbOYI" rel="nofollow"><img title="Goal Celebration Fail" src="./YouTube_files/default(3).jpg" class="vimg120" qlicon="ZVzdUGzbOYI" alt="Goal Celebration Fail"></a><div id="quicklist-icon-ZVzdUGzbOYI" class="addtoQL90"><a id="add-to-quicklist-ZVzdUGzbOYI" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" ql="ZVzdUGzbOYI" title="Add Video to QuickList"><button class="master-sprite QLIconImg" title="" onclick="clicked_add_icon(this, this.parentNode.getAttribute(&#39;ql&#39;), 0, &#39;https://web.archive.org/web/20090501204849/http://i3.ytimg.com/vi/ZVzdUGzbOYI/default.jpg&#39;, &#39;Goal Celebration Fail&#39;);return false;" onmouseover="mouseOverQuickAdd(this)" onmouseout="mouseOutQuickAdd(this)" onmousedown="urchinTracker(&#39;/Events/results/QuickList+AddTo&#39;)"></button></a><div class="hid quicklist-inlist"><a id="add-to-quicklist-ZVzdUGzbOYI" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" ql="ZVzdUGzbOYI" title="Add Video to QuickList"></a><a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch_queue?all">Added</a></div></div>
<div class="video-time"><span id="video-run-time-ZVzdUGzbOYI">0:30</span></div></div></div></div>

    <div class="video-main-content" id="video-main-content-ZVzdUGzbOYI">


      <div class="video-title video-title-results">
        <div class="video-short-title">
            <span id="translated_short_prefix_ZVzdUGzbOYI" style="font-size: 10px;" class="hid">[TRANSLATED]</span>
            <a id="video-short-title-ZVzdUGzbOYI" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=ZVzdUGzbOYI" title="Goal Celebration Fail" rel="nofollow">Goal Celebration Fail</a>
        </div>
        <div class="video-long-title">
            <span id="translated_long_prefix_ZVzdUGzbOYI" style="font-size: 10px;" class="hid">[TRANSLATED]</span>
            <a id="video-long-title-ZVzdUGzbOYI" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=ZVzdUGzbOYI" title="Goal Celebration Fail" rel="nofollow">Goal Celebration Fail</a>
        </div>
      </div>

        <div id="video-description-ZVzdUGzbOYI" class="video-description">
          For more, visit failblog.org Vote for Fail Blog to win the webbys at pv <b>...</b>
        </div>


      <div class="video-facets">

          <span id="video-average-rating-ZVzdUGzbOYI" class="video-rating-list ">
                  

  <div>

  
<button class="master-sprite ratingVS ratingVS-4.5" title="4.5"></button>



  </div>


          </span>

            <span id="video-added-time-ZVzdUGzbOYI" class="video-date-added">1 week ago</span>

          <span id="video-num-views-ZVzdUGzbOYI" class="video-view-count">773,491 views</span>

          <span class="video-username"><a id="video-from-username-ZVzdUGzbOYI" class="hLink" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/user/failblog">failblog</a></span>

          <span id="video-average-rating-ZVzdUGzbOYI" class="video-rating-grid ">
                  

  <div>

  
<button class="master-sprite ratingVS ratingVS-4.5" title="4.5"></button>



  </div>


          </span>


      </div>  

    </div>  
    <div class="video-clear-list-left"></div>



  </div>  
</div>  







          
<div class="video-cell" style="width:19.6%">





  <div class="video-entry">




      <div class="v120WideEntry"><div class="v120WrapperOuter"><div class="v120WrapperInner"><a id="video-url-QQUvB1ot-Hg" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=QQUvB1ot-Hg" rel="nofollow"><img title="&quot;who&#39;s this&quot; and my mum... yes, you heard me, my mum" src="./YouTube_files/default(4).jpg" class="vimg120" qlicon="QQUvB1ot-Hg" alt="&quot;who&#39;s this&quot; and my mum... yes, you heard me, my mum"></a><div id="quicklist-icon-QQUvB1ot-Hg" class="addtoQL90"><a id="add-to-quicklist-QQUvB1ot-Hg" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" ql="QQUvB1ot-Hg" title="Add Video to QuickList"><button class="master-sprite QLIconImg" title="" onclick="clicked_add_icon(this, this.parentNode.getAttribute(&#39;ql&#39;), 0, &#39;https://web.archive.org/web/20090501204849/http://i2.ytimg.com/vi/QQUvB1ot-Hg/default.jpg&#39;, &#39;&quot;who\&#39;s this&quot; and my mum... yes, you heard me, my mum&#39;);return false;" onmouseover="mouseOverQuickAdd(this)" onmouseout="mouseOutQuickAdd(this)" onmousedown="urchinTracker(&#39;/Events/results/QuickList+AddTo&#39;)"></button></a><div class="hid quicklist-inlist"><a id="add-to-quicklist-QQUvB1ot-Hg" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" ql="QQUvB1ot-Hg" title="Add Video to QuickList"></a><a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch_queue?all">Added</a></div></div>
<div class="video-time"><span id="video-run-time-QQUvB1ot-Hg">3:05</span></div></div></div></div>

    <div class="video-main-content" id="video-main-content-QQUvB1ot-Hg">


      <div class="video-title video-title-results">
        <div class="video-short-title">
            <span id="translated_short_prefix_QQUvB1ot-Hg" style="font-size: 10px;" class="hid">[TRANSLATED]</span>
            <a id="video-short-title-QQUvB1ot-Hg" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=QQUvB1ot-Hg" title="&quot;who&#39;s this&quot; and my mum... yes, you heard me, my mum" rel="nofollow">"who's this" and my mum... yes, you heard me <b>...</b></a>
        </div>
        <div class="video-long-title">
            <span id="translated_long_prefix_QQUvB1ot-Hg" style="font-size: 10px;" class="hid">[TRANSLATED]</span>
            <a id="video-long-title-QQUvB1ot-Hg" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=QQUvB1ot-Hg" title="&quot;who&#39;s this&quot; and my mum... yes, you heard me, my mum" rel="nofollow">"who's this" and my mum... yes, you heard me <b>...</b></a>
            <img src="./YouTube_files/hd_video_result_page_logo-vfl87445.png" width="18" height="15" style="vertical-align:text-top">
        </div>
      </div>

        <div id="video-description-QQUvB1ot-Hg" class="video-description">
          did you guys ever do that "my mother, your mother lives down the street <b>...</b>
        </div>


      <div class="video-facets">

          <span id="video-average-rating-QQUvB1ot-Hg" class="video-rating-list ">
                  

  <div>

  
<button class="master-sprite ratingVS ratingVS-5.0" title="5.0"></button>



  </div>


          </span>

            <span id="video-added-time-QQUvB1ot-Hg" class="video-date-added">2 weeks ago</span>

          <span id="video-num-views-QQUvB1ot-Hg" class="video-view-count">592,545 views</span>

          <span class="video-username"><a id="video-from-username-QQUvB1ot-Hg" class="hLink" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/user/communitychannel">communitychannel</a></span>

          <span id="video-average-rating-QQUvB1ot-Hg" class="video-rating-grid ">
                  

  <div>

  
<button class="master-sprite ratingVS ratingVS-5.0" title="5.0"></button>



  </div>


          </span>


      </div>  

    </div>  
    <div class="video-clear-list-left"></div>



  </div>  
</div>  







          
<div class="video-cell" style="width:19.6%">





  <div class="video-entry">




      <div class="v120WideEntry"><div class="v120WrapperOuter"><div class="v120WrapperInner"><a id="video-url-fK1ujbPgLgo" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=fK1ujbPgLgo" rel="nofollow"><img title="Molly the cat, meet the printer..." src="./YouTube_files/default(5).jpg" class="vimg120" qlicon="fK1ujbPgLgo" alt="Molly the cat, meet the printer..."></a><div id="quicklist-icon-fK1ujbPgLgo" class="addtoQL90"><a id="add-to-quicklist-fK1ujbPgLgo" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" ql="fK1ujbPgLgo" title="Add Video to QuickList"><button class="master-sprite QLIconImg" title="" onclick="clicked_add_icon(this, this.parentNode.getAttribute(&#39;ql&#39;), 0, &#39;https://web.archive.org/web/20090501204849/http://i3.ytimg.com/vi/fK1ujbPgLgo/default.jpg&#39;, &#39;Molly the cat, meet the printer...&#39;);return false;" onmouseover="mouseOverQuickAdd(this)" onmouseout="mouseOutQuickAdd(this)" onmousedown="urchinTracker(&#39;/Events/results/QuickList+AddTo&#39;)"></button></a><div class="hid quicklist-inlist"><a id="add-to-quicklist-fK1ujbPgLgo" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" ql="fK1ujbPgLgo" title="Add Video to QuickList"></a><a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch_queue?all">Added</a></div></div>
<div class="video-time"><span id="video-run-time-fK1ujbPgLgo">0:52</span></div></div></div></div>

    <div class="video-main-content" id="video-main-content-fK1ujbPgLgo">


      <div class="video-title video-title-results">
        <div class="video-short-title">
            <span id="translated_short_prefix_fK1ujbPgLgo" style="font-size: 10px;" class="hid">[TRANSLATED]</span>
            <a id="video-short-title-fK1ujbPgLgo" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=fK1ujbPgLgo" title="Molly the cat, meet the printer..." rel="nofollow">Molly the cat, meet the printer...</a>
        </div>
        <div class="video-long-title">
            <span id="translated_long_prefix_fK1ujbPgLgo" style="font-size: 10px;" class="hid">[TRANSLATED]</span>
            <a id="video-long-title-fK1ujbPgLgo" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=fK1ujbPgLgo" title="Molly the cat, meet the printer..." rel="nofollow">Molly the cat, meet the printer...</a>
        </div>
      </div>

        <div id="video-description-fK1ujbPgLgo" class="video-description">
          For more, visit icanhascheezburger.com View the original here www.youtube.com
        </div>


      <div class="video-facets">

          <span id="video-average-rating-fK1ujbPgLgo" class="video-rating-list ">
                  

  <div>

  
<button class="master-sprite ratingVS ratingVS-5.0" title="5.0"></button>



  </div>


          </span>

            <span id="video-added-time-fK1ujbPgLgo" class="video-date-added">2 weeks ago</span>

          <span id="video-num-views-fK1ujbPgLgo" class="video-view-count">536,904 views</span>

          <span class="video-username"><a id="video-from-username-fK1ujbPgLgo" class="hLink" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/user/cheezburger">cheezburger</a></span>

          <span id="video-average-rating-fK1ujbPgLgo" class="video-rating-grid ">
                  

  <div>

  
<button class="master-sprite ratingVS ratingVS-5.0" title="5.0"></button>



  </div>


          </span>


      </div>  

    </div>  
    <div class="video-clear-list-left"></div>



  </div>  
</div>  







          
<div class="video-cell" style="width:19.6%">





  <div class="video-entry">




      <div class="v120WideEntry"><div class="v120WrapperOuter"><div class="v120WrapperInner"><a id="video-url-8-X2odc61YA" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=8-X2odc61YA" rel="nofollow"><img title="Diver Fail" src="./YouTube_files/default(6).jpg" class="vimg120" qlicon="8-X2odc61YA" alt="Diver Fail"></a><div id="quicklist-icon-8-X2odc61YA" class="addtoQL90"><a id="add-to-quicklist-8-X2odc61YA" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" ql="8-X2odc61YA" title="Add Video to QuickList"><button class="master-sprite QLIconImg" title="" onclick="clicked_add_icon(this, this.parentNode.getAttribute(&#39;ql&#39;), 0, &#39;https://web.archive.org/web/20090501204849/http://i1.ytimg.com/vi/8-X2odc61YA/default.jpg&#39;, &#39;Diver Fail&#39;);return false;" onmouseover="mouseOverQuickAdd(this)" onmouseout="mouseOutQuickAdd(this)" onmousedown="urchinTracker(&#39;/Events/results/QuickList+AddTo&#39;)"></button></a><div class="hid quicklist-inlist"><a id="add-to-quicklist-8-X2odc61YA" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" ql="8-X2odc61YA" title="Add Video to QuickList"></a><a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch_queue?all">Added</a></div></div>
<div class="video-time"><span id="video-run-time-8-X2odc61YA">0:37</span></div></div></div></div>

    <div class="video-main-content" id="video-main-content-8-X2odc61YA">


      <div class="video-title video-title-results">
        <div class="video-short-title">
            <span id="translated_short_prefix_8-X2odc61YA" style="font-size: 10px;" class="hid">[TRANSLATED]</span>
            <a id="video-short-title-8-X2odc61YA" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=8-X2odc61YA" title="Diver Fail" rel="nofollow">Diver Fail</a>
        </div>
        <div class="video-long-title">
            <span id="translated_long_prefix_8-X2odc61YA" style="font-size: 10px;" class="hid">[TRANSLATED]</span>
            <a id="video-long-title-8-X2odc61YA" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=8-X2odc61YA" title="Diver Fail" rel="nofollow">Diver Fail</a>
        </div>
      </div>

        <div id="video-description-8-X2odc61YA" class="video-description">
          For more, visit failblog.org http
        </div>


      <div class="video-facets">

          <span id="video-average-rating-8-X2odc61YA" class="video-rating-list ">
                  

  <div>

  
<button class="master-sprite ratingVS ratingVS-4.5" title="4.5"></button>



  </div>


          </span>

            <span id="video-added-time-8-X2odc61YA" class="video-date-added">2 weeks ago</span>

          <span id="video-num-views-8-X2odc61YA" class="video-view-count">486,359 views</span>

          <span class="video-username"><a id="video-from-username-8-X2odc61YA" class="hLink" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/user/failblog">failblog</a></span>

          <span id="video-average-rating-8-X2odc61YA" class="video-rating-grid ">
                  

  <div>

  
<button class="master-sprite ratingVS ratingVS-4.5" title="4.5"></button>



  </div>


          </span>


      </div>  

    </div>  
    <div class="video-clear-list-left"></div>



  </div>  
</div>  







          
<div class="video-cell" style="width:19.6%">





  <div class="video-entry">




      <div class="v120WideEntry"><div class="v120WrapperOuter"><div class="v120WrapperInner"><a id="video-url-_LTL_1ZApV0" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=_LTL_1ZApV0" rel="nofollow"><img title="Prom Fail" src="./YouTube_files/default(7).jpg" class="vimg120" qlicon="_LTL_1ZApV0" alt="Prom Fail"></a><div id="quicklist-icon-_LTL_1ZApV0" class="addtoQL90"><a id="add-to-quicklist-_LTL_1ZApV0" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" ql="_LTL_1ZApV0" title="Add Video to QuickList"><button class="master-sprite QLIconImg" title="" onclick="clicked_add_icon(this, this.parentNode.getAttribute(&#39;ql&#39;), 0, &#39;https://web.archive.org/web/20090501204849/http://i4.ytimg.com/vi/_LTL_1ZApV0/default.jpg&#39;, &#39;Prom Fail&#39;);return false;" onmouseover="mouseOverQuickAdd(this)" onmouseout="mouseOutQuickAdd(this)" onmousedown="urchinTracker(&#39;/Events/results/QuickList+AddTo&#39;)"></button></a><div class="hid quicklist-inlist"><a id="add-to-quicklist-_LTL_1ZApV0" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" ql="_LTL_1ZApV0" title="Add Video to QuickList"></a><a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch_queue?all">Added</a></div></div>
<div class="video-time"><span id="video-run-time-_LTL_1ZApV0">0:31</span></div></div></div></div>

    <div class="video-main-content" id="video-main-content-_LTL_1ZApV0">


      <div class="video-title video-title-results">
        <div class="video-short-title">
            <span id="translated_short_prefix__LTL_1ZApV0" style="font-size: 10px;" class="hid">[TRANSLATED]</span>
            <a id="video-short-title-_LTL_1ZApV0" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=_LTL_1ZApV0" title="Prom Fail" rel="nofollow">Prom Fail</a>
        </div>
        <div class="video-long-title">
            <span id="translated_long_prefix__LTL_1ZApV0" style="font-size: 10px;" class="hid">[TRANSLATED]</span>
            <a id="video-long-title-_LTL_1ZApV0" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=_LTL_1ZApV0" title="Prom Fail" rel="nofollow">Prom Fail</a>
        </div>
      </div>

        <div id="video-description-_LTL_1ZApV0" class="video-description">
          For more, visit failblog.org http
        </div>


      <div class="video-facets">

          <span id="video-average-rating-_LTL_1ZApV0" class="video-rating-list ">
                  

  <div>

  
<button class="master-sprite ratingVS ratingVS-4.0" title="4.0"></button>



  </div>


          </span>

            <span id="video-added-time-_LTL_1ZApV0" class="video-date-added">4 weeks ago</span>

          <span id="video-num-views-_LTL_1ZApV0" class="video-view-count">448,486 views</span>

          <span class="video-username"><a id="video-from-username-_LTL_1ZApV0" class="hLink" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/user/failvideo">failvideo</a></span>

          <span id="video-average-rating-_LTL_1ZApV0" class="video-rating-grid ">
                  

  <div>

  
<button class="master-sprite ratingVS ratingVS-4.0" title="4.0"></button>



  </div>


          </span>


      </div>  

    </div>  
    <div class="video-clear-list-left"></div>



  </div>  
</div>  







          
<div class="video-cell" style="width:19.6%">





  <div class="video-entry">




      <div class="v120WideEntry"><div class="v120WrapperOuter"><div class="v120WrapperInner"><a id="video-url-PeT1t0lQn5Q" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=PeT1t0lQn5Q" rel="nofollow"><img title="The Dark Knight Meets Superman Part 2" src="./YouTube_files/default(8).jpg" class="vimg120" qlicon="PeT1t0lQn5Q" alt="The Dark Knight Meets Superman Part 2"></a><div id="quicklist-icon-PeT1t0lQn5Q" class="addtoQL90"><a id="add-to-quicklist-PeT1t0lQn5Q" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" ql="PeT1t0lQn5Q" title="Add Video to QuickList"><button class="master-sprite QLIconImg" title="" onclick="clicked_add_icon(this, this.parentNode.getAttribute(&#39;ql&#39;), 0, &#39;https://web.archive.org/web/20090501204849/http://i1.ytimg.com/vi/PeT1t0lQn5Q/default.jpg&#39;, &#39;The Dark Knight Meets Superman Part 2&#39;);return false;" onmouseover="mouseOverQuickAdd(this)" onmouseout="mouseOutQuickAdd(this)" onmousedown="urchinTracker(&#39;/Events/results/QuickList+AddTo&#39;)"></button></a><div class="hid quicklist-inlist"><a id="add-to-quicklist-PeT1t0lQn5Q" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" ql="PeT1t0lQn5Q" title="Add Video to QuickList"></a><a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch_queue?all">Added</a></div></div>
<div class="video-time"><span id="video-run-time-PeT1t0lQn5Q">3:35</span></div></div></div></div>

    <div class="video-main-content" id="video-main-content-PeT1t0lQn5Q">


      <div class="video-title video-title-results">
        <div class="video-short-title">
            <span id="translated_short_prefix_PeT1t0lQn5Q" style="font-size: 10px;" class="hid">[TRANSLATED]</span>
            <a id="video-short-title-PeT1t0lQn5Q" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=PeT1t0lQn5Q" title="The Dark Knight Meets Superman Part 2" rel="nofollow">The Dark Knight Meets Superman Part 2</a>
        </div>
        <div class="video-long-title">
            <span id="translated_long_prefix_PeT1t0lQn5Q" style="font-size: 10px;" class="hid">[TRANSLATED]</span>
            <a id="video-long-title-PeT1t0lQn5Q" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=PeT1t0lQn5Q" title="The Dark Knight Meets Superman Part 2" rel="nofollow">The Dark Knight Meets Superman Part 2</a>
        </div>
      </div>

        <div id="video-description-PeT1t0lQn5Q" class="video-description">
          The Justice League and a completely ordinary human save the city. See more <b>...</b>
        </div>


      <div class="video-facets">

          <span id="video-average-rating-PeT1t0lQn5Q" class="video-rating-list ">
                  

  <div>

  
<button class="master-sprite ratingVS ratingVS-4.5" title="4.5"></button>



  </div>


          </span>

            <span id="video-added-time-PeT1t0lQn5Q" class="video-date-added">2 weeks ago</span>

          <span id="video-num-views-PeT1t0lQn5Q" class="video-view-count">447,377 views</span>

          <span class="video-username"><a id="video-from-username-PeT1t0lQn5Q" class="hLink" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/user/collegehumor">collegehumor</a></span>

          <span id="video-average-rating-PeT1t0lQn5Q" class="video-rating-grid ">
                  

  <div>

  
<button class="master-sprite ratingVS ratingVS-4.5" title="4.5"></button>



  </div>


          </span>


      </div>  

    </div>  
    <div class="video-clear-list-left"></div>



  </div>  
</div>  







          
<div class="video-cell" style="width:19.6%">





  <div class="video-entry">




      <div class="v120WideEntry"><div class="v120WrapperOuter"><div class="v120WrapperInner"><a id="video-url-MfDNDj9XlvM" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=MfDNDj9XlvM" rel="nofollow"><img title="Traffic Report Fail" src="./YouTube_files/default(9).jpg" class="vimg120" qlicon="MfDNDj9XlvM" alt="Traffic Report Fail"></a><div id="quicklist-icon-MfDNDj9XlvM" class="addtoQL90"><a id="add-to-quicklist-MfDNDj9XlvM" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" ql="MfDNDj9XlvM" title="Add Video to QuickList"><button class="master-sprite QLIconImg" title="" onclick="clicked_add_icon(this, this.parentNode.getAttribute(&#39;ql&#39;), 0, &#39;https://web.archive.org/web/20090501204849/http://i2.ytimg.com/vi/MfDNDj9XlvM/default.jpg&#39;, &#39;Traffic Report Fail&#39;);return false;" onmouseover="mouseOverQuickAdd(this)" onmouseout="mouseOutQuickAdd(this)" onmousedown="urchinTracker(&#39;/Events/results/QuickList+AddTo&#39;)"></button></a><div class="hid quicklist-inlist"><a id="add-to-quicklist-MfDNDj9XlvM" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" ql="MfDNDj9XlvM" title="Add Video to QuickList"></a><a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch_queue?all">Added</a></div></div>
<div class="video-time"><span id="video-run-time-MfDNDj9XlvM">0:59</span></div></div></div></div>

    <div class="video-main-content" id="video-main-content-MfDNDj9XlvM">


      <div class="video-title video-title-results">
        <div class="video-short-title">
            <span id="translated_short_prefix_MfDNDj9XlvM" style="font-size: 10px;" class="hid">[TRANSLATED]</span>
            <a id="video-short-title-MfDNDj9XlvM" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=MfDNDj9XlvM" title="Traffic Report Fail" rel="nofollow">Traffic Report Fail</a>
        </div>
        <div class="video-long-title">
            <span id="translated_long_prefix_MfDNDj9XlvM" style="font-size: 10px;" class="hid">[TRANSLATED]</span>
            <a id="video-long-title-MfDNDj9XlvM" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=MfDNDj9XlvM" title="Traffic Report Fail" rel="nofollow">Traffic Report Fail</a>
        </div>
      </div>

        <div id="video-description-MfDNDj9XlvM" class="video-description">
          For more, visit failblog.org
        </div>


      <div class="video-facets">

          <span id="video-average-rating-MfDNDj9XlvM" class="video-rating-list ">
                  

  <div>

  
<button class="master-sprite ratingVS ratingVS-4.5" title="4.5"></button>



  </div>


          </span>

            <span id="video-added-time-MfDNDj9XlvM" class="video-date-added">3 weeks ago</span>

          <span id="video-num-views-MfDNDj9XlvM" class="video-view-count">445,890 views</span>

          <span class="video-username"><a id="video-from-username-MfDNDj9XlvM" class="hLink" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/user/failblog">failblog</a></span>

          <span id="video-average-rating-MfDNDj9XlvM" class="video-rating-grid ">
                  

  <div>

  
<button class="master-sprite ratingVS ratingVS-4.5" title="4.5"></button>



  </div>


          </span>


      </div>  

    </div>  
    <div class="video-clear-list-left"></div>



  </div>  
</div>  







          
<div class="video-cell" style="width:19.6%">





  <div class="video-entry">




      <div class="v120WideEntry"><div class="v120WrapperOuter"><div class="v120WrapperInner"><a id="video-url-zoGfqvh2ME8" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=zoGfqvh2ME8" rel="nofollow"><img title="communitychannel makeup like a celeb in 1 minute *SARCASM*" src="./YouTube_files/default(10).jpg" class="vimg120" qlicon="zoGfqvh2ME8" alt="communitychannel makeup like a celeb in 1 minute *SARCASM*"></a><div id="quicklist-icon-zoGfqvh2ME8" class="addtoQL90"><a id="add-to-quicklist-zoGfqvh2ME8" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" ql="zoGfqvh2ME8" title="Add Video to QuickList"><button class="master-sprite QLIconImg" title="" onclick="clicked_add_icon(this, this.parentNode.getAttribute(&#39;ql&#39;), 0, &#39;https://web.archive.org/web/20090501204849/http://i3.ytimg.com/vi/zoGfqvh2ME8/default.jpg&#39;, &#39;communitychannel makeup like a celeb in 1 minute *SARCASM*&#39;);return false;" onmouseover="mouseOverQuickAdd(this)" onmouseout="mouseOutQuickAdd(this)" onmousedown="urchinTracker(&#39;/Events/results/QuickList+AddTo&#39;)"></button></a><div class="hid quicklist-inlist"><a id="add-to-quicklist-zoGfqvh2ME8" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" ql="zoGfqvh2ME8" title="Add Video to QuickList"></a><a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch_queue?all">Added</a></div></div>
<div class="video-time"><span id="video-run-time-zoGfqvh2ME8">2:04</span></div></div></div></div>

    <div class="video-main-content" id="video-main-content-zoGfqvh2ME8">


      <div class="video-title video-title-results">
        <div class="video-short-title">
            <span id="translated_short_prefix_zoGfqvh2ME8" style="font-size: 10px;" class="hid">[TRANSLATED]</span>
            <a id="video-short-title-zoGfqvh2ME8" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=zoGfqvh2ME8" title="communitychannel makeup like a celeb in 1 minute *SARCASM*" rel="nofollow">communitychannel makeup like a celeb in 1 minute *SARCASM*</a>
        </div>
        <div class="video-long-title">
            <span id="translated_long_prefix_zoGfqvh2ME8" style="font-size: 10px;" class="hid">[TRANSLATED]</span>
            <a id="video-long-title-zoGfqvh2ME8" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=zoGfqvh2ME8" title="communitychannel makeup like a celeb in 1 minute *SARCASM*" rel="nofollow">communitychannel makeup like a celeb in 1 minute *SARCASM*</a>
            <img src="./YouTube_files/hd_video_result_page_logo-vfl87445.png" width="18" height="15" style="vertical-align:text-top">
        </div>
      </div>

        <div id="video-description-zoGfqvh2ME8" class="video-description">
          Only a joke. I think makeup tutorials are great and help lots of people who <b>...</b>
        </div>


      <div class="video-facets">

          <span id="video-average-rating-zoGfqvh2ME8" class="video-rating-list ">
                  

  <div>

  
<button class="master-sprite ratingVS ratingVS-5.0" title="5.0"></button>



  </div>


          </span>

            <span id="video-added-time-zoGfqvh2ME8" class="video-date-added">3 weeks ago</span>

          <span id="video-num-views-zoGfqvh2ME8" class="video-view-count">426,075 views</span>

          <span class="video-username"><a id="video-from-username-zoGfqvh2ME8" class="hLink" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/user/communitychannel">communitychannel</a></span>

          <span id="video-average-rating-zoGfqvh2ME8" class="video-rating-grid ">
                  

  <div>

  
<button class="master-sprite ratingVS ratingVS-5.0" title="5.0"></button>



  </div>


          </span>


      </div>  

    </div>  
    <div class="video-clear-list-left"></div>



  </div>  
</div>  







          
<div class="video-cell" style="width:19.6%">





  <div class="video-entry">




      <div class="v120WideEntry"><div class="v120WrapperOuter"><div class="v120WrapperInner"><a id="video-url--BIE_YpICmU" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=-BIE_YpICmU" rel="nofollow"><img title="u s of a trip." src="./YouTube_files/default(11).jpg" class="vimg120" qlicon="-BIE_YpICmU" alt="u s of a trip."></a><div id="quicklist-icon--BIE_YpICmU" class="addtoQL90"><a id="add-to-quicklist--BIE_YpICmU" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" ql="-BIE_YpICmU" title="Add Video to QuickList"><button class="master-sprite QLIconImg" title="" onclick="clicked_add_icon(this, this.parentNode.getAttribute(&#39;ql&#39;), 0, &#39;https://web.archive.org/web/20090501204849/http://i2.ytimg.com/vi/-BIE_YpICmU/default.jpg&#39;, &#39;u s of a trip.&#39;);return false;" onmouseover="mouseOverQuickAdd(this)" onmouseout="mouseOutQuickAdd(this)" onmousedown="urchinTracker(&#39;/Events/results/QuickList+AddTo&#39;)"></button></a><div class="hid quicklist-inlist"><a id="add-to-quicklist--BIE_YpICmU" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" ql="-BIE_YpICmU" title="Add Video to QuickList"></a><a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch_queue?all">Added</a></div></div>
<div class="video-time"><span id="video-run-time--BIE_YpICmU">3:52</span></div></div></div></div>

    <div class="video-main-content" id="video-main-content--BIE_YpICmU">


      <div class="video-title video-title-results">
        <div class="video-short-title">
            <span id="translated_short_prefix_-BIE_YpICmU" style="font-size: 10px;" class="hid">[TRANSLATED]</span>
            <a id="video-short-title--BIE_YpICmU" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=-BIE_YpICmU" title="u s of a trip." rel="nofollow">us of a trip.</a>
        </div>
        <div class="video-long-title">
            <span id="translated_long_prefix_-BIE_YpICmU" style="font-size: 10px;" class="hid">[TRANSLATED]</span>
            <a id="video-long-title--BIE_YpICmU" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=-BIE_YpICmU" title="u s of a trip." rel="nofollow">us of a trip.</a>
        </div>
      </div>

        <div id="video-description--BIE_YpICmU" class="video-description">
          Hey yo. Next video will be back to normal (hopefully) jamie's channel: www <b>...</b>
        </div>


      <div class="video-facets">

          <span id="video-average-rating--BIE_YpICmU" class="video-rating-list ">
                  

  <div>

  
<button class="master-sprite ratingVS ratingVS-5.0" title="5.0"></button>



  </div>


          </span>

            <span id="video-added-time--BIE_YpICmU" class="video-date-added">6 days ago</span>

          <span id="video-num-views--BIE_YpICmU" class="video-view-count">398,604 views</span>

          <span class="video-username"><a id="video-from-username--BIE_YpICmU" class="hLink" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/user/communitychannel">communitychannel</a></span>

          <span id="video-average-rating--BIE_YpICmU" class="video-rating-grid ">
                  

  <div>

  
<button class="master-sprite ratingVS ratingVS-5.0" title="5.0"></button>



  </div>


          </span>


      </div>  

    </div>  
    <div class="video-clear-list-left"></div>



  </div>  
</div>  







          
<div class="video-cell" style="width:19.6%">





  <div class="video-entry">




      <div class="v120WideEntry"><div class="v120WrapperOuter"><div class="v120WrapperInner"><a id="video-url-wJfYAJJYMqg" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=wJfYAJJYMqg" rel="nofollow"><img title="Free Hugs Prank: $2 Deluxe Hugs" src="./YouTube_files/default(12).jpg" class="vimg120" qlicon="wJfYAJJYMqg" alt="Free Hugs Prank: $2 Deluxe Hugs"></a><div id="quicklist-icon-wJfYAJJYMqg" class="addtoQL90"><a id="add-to-quicklist-wJfYAJJYMqg" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" ql="wJfYAJJYMqg" title="Add Video to QuickList"><button class="master-sprite QLIconImg" title="" onclick="clicked_add_icon(this, this.parentNode.getAttribute(&#39;ql&#39;), 0, &#39;https://web.archive.org/web/20090501204849/http://i4.ytimg.com/vi/wJfYAJJYMqg/default.jpg&#39;, &#39;Free Hugs Prank: $2 Deluxe Hugs&#39;);return false;" onmouseover="mouseOverQuickAdd(this)" onmouseout="mouseOutQuickAdd(this)" onmousedown="urchinTracker(&#39;/Events/results/QuickList+AddTo&#39;)"></button></a><div class="hid quicklist-inlist"><a id="add-to-quicklist-wJfYAJJYMqg" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" ql="wJfYAJJYMqg" title="Add Video to QuickList"></a><a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch_queue?all">Added</a></div></div>
<div class="video-time"><span id="video-run-time-wJfYAJJYMqg">3:40</span></div></div></div></div>

    <div class="video-main-content" id="video-main-content-wJfYAJJYMqg">


      <div class="video-title video-title-results">
        <div class="video-short-title">
            <span id="translated_short_prefix_wJfYAJJYMqg" style="font-size: 10px;" class="hid">[TRANSLATED]</span>
            <a id="video-short-title-wJfYAJJYMqg" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=wJfYAJJYMqg" title="Free Hugs Prank: $2 Deluxe Hugs" rel="nofollow">Free Hugs Prank: $2 Deluxe Hugs</a>
        </div>
        <div class="video-long-title">
            <span id="translated_long_prefix_wJfYAJJYMqg" style="font-size: 10px;" class="hid">[TRANSLATED]</span>
            <a id="video-long-title-wJfYAJJYMqg" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=wJfYAJJYMqg" title="Free Hugs Prank: $2 Deluxe Hugs" rel="nofollow">Free Hugs Prank: $2 Deluxe Hugs</a>
        </div>
      </div>

        <div id="video-description-wJfYAJJYMqg" class="video-description">
          Just havin' fun with the Free Hugs Guy! I'm gonna need MORE COWBELL: tinyurl <b>...</b>
        </div>


      <div class="video-facets">

          <span id="video-average-rating-wJfYAJJYMqg" class="video-rating-list ">
                  

  <div>

  
<button class="master-sprite ratingVS ratingVS-5.0" title="5.0"></button>



  </div>


          </span>

            <span id="video-added-time-wJfYAJJYMqg" class="video-date-added">5 days ago</span>

          <span id="video-num-views-wJfYAJJYMqg" class="video-view-count">382,874 views</span>

          <span class="video-username"><a id="video-from-username-wJfYAJJYMqg" class="hLink" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/user/MediocreFilms">MediocreFilms</a></span>

          <span id="video-average-rating-wJfYAJJYMqg" class="video-rating-grid ">
                  

  <div>

  
<button class="master-sprite ratingVS ratingVS-5.0" title="5.0"></button>



  </div>


          </span>


      </div>  

    </div>  
    <div class="video-clear-list-left"></div>



  </div>  
</div>  







          
<div class="video-cell" style="width:19.6%">





  <div class="video-entry">




      <div class="v120WideEntry"><div class="v120WrapperOuter"><div class="v120WrapperInner"><a id="video-url-_KIYFRhkA54" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=_KIYFRhkA54" rel="nofollow"><img title="She is all about cleav*ge" src="./YouTube_files/default(13).jpg" class="vimg120" qlicon="_KIYFRhkA54" alt="She is all about cleav*ge"></a><div id="quicklist-icon-_KIYFRhkA54" class="addtoQL90"><a id="add-to-quicklist-_KIYFRhkA54" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" ql="_KIYFRhkA54" title="Add Video to QuickList"><button class="master-sprite QLIconImg" title="" onclick="clicked_add_icon(this, this.parentNode.getAttribute(&#39;ql&#39;), 0, &#39;https://web.archive.org/web/20090501204849/http://i4.ytimg.com/vi/_KIYFRhkA54/default.jpg&#39;, &#39;She is all about cleav*ge&#39;);return false;" onmouseover="mouseOverQuickAdd(this)" onmouseout="mouseOutQuickAdd(this)" onmousedown="urchinTracker(&#39;/Events/results/QuickList+AddTo&#39;)"></button></a><div class="hid quicklist-inlist"><a id="add-to-quicklist-_KIYFRhkA54" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" ql="_KIYFRhkA54" title="Add Video to QuickList"></a><a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch_queue?all">Added</a></div></div>
<div class="video-time"><span id="video-run-time-_KIYFRhkA54">1:33</span></div></div></div></div>

    <div class="video-main-content" id="video-main-content-_KIYFRhkA54">


      <div class="video-title video-title-results">
        <div class="video-short-title">
            <span id="translated_short_prefix__KIYFRhkA54" style="font-size: 10px;" class="hid">[TRANSLATED]</span>
            <a id="video-short-title-_KIYFRhkA54" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=_KIYFRhkA54" title="She is all about cleav*ge" rel="nofollow">She is all about cleav*ge</a>
        </div>
        <div class="video-long-title">
            <span id="translated_long_prefix__KIYFRhkA54" style="font-size: 10px;" class="hid">[TRANSLATED]</span>
            <a id="video-long-title-_KIYFRhkA54" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=_KIYFRhkA54" title="She is all about cleav*ge" rel="nofollow">She is all about cleav*ge</a>
            <img src="./YouTube_files/hd_video_result_page_logo-vfl87445.png" width="18" height="15" style="vertical-align:text-top">
        </div>
      </div>

        <div id="video-description-_KIYFRhkA54" class="video-description">
          www.dictionarygirl.com http to request words
        </div>


      <div class="video-facets">

          <span id="video-average-rating-_KIYFRhkA54" class="video-rating-list ">
                  

  <div>

  
<button class="master-sprite ratingVS ratingVS-4.5" title="4.5"></button>



  </div>


          </span>

            <span id="video-added-time-_KIYFRhkA54" class="video-date-added">5 days ago</span>

          <span id="video-num-views-_KIYFRhkA54" class="video-view-count">358,179 views</span>

          <span class="video-username"><a id="video-from-username-_KIYFRhkA54" class="hLink" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/user/hotforwords">hotforwords</a></span>

          <span id="video-average-rating-_KIYFRhkA54" class="video-rating-grid ">
                  

  <div>

  
<button class="master-sprite ratingVS ratingVS-4.5" title="4.5"></button>



  </div>


          </span>


      </div>  

    </div>  
    <div class="video-clear-list-left"></div>



  </div>  
</div>  







          
<div class="video-cell" style="width:19.6%">





  <div class="video-entry">




      <div class="v120WideEntry"><div class="v120WrapperOuter"><div class="v120WrapperInner"><a id="video-url-QMe9x0uV6YE" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=QMe9x0uV6YE" rel="nofollow"><img title="ALPINIST (REMI GAILLARD)" src="./YouTube_files/default(14).jpg" class="vimg120" qlicon="QMe9x0uV6YE" alt="ALPINIST (REMI GAILLARD)"></a><div id="quicklist-icon-QMe9x0uV6YE" class="addtoQL90"><a id="add-to-quicklist-QMe9x0uV6YE" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" ql="QMe9x0uV6YE" title="Add Video to QuickList"><button class="master-sprite QLIconImg" title="" onclick="clicked_add_icon(this, this.parentNode.getAttribute(&#39;ql&#39;), 0, &#39;https://web.archive.org/web/20090501204849/http://i2.ytimg.com/vi/QMe9x0uV6YE/default.jpg&#39;, &#39;ALPINIST (REMI GAILLARD)&#39;);return false;" onmouseover="mouseOverQuickAdd(this)" onmouseout="mouseOutQuickAdd(this)" onmousedown="urchinTracker(&#39;/Events/results/QuickList+AddTo&#39;)"></button></a><div class="hid quicklist-inlist"><a id="add-to-quicklist-QMe9x0uV6YE" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" ql="QMe9x0uV6YE" title="Add Video to QuickList"></a><a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch_queue?all">Added</a></div></div>
<div class="video-time"><span id="video-run-time-QMe9x0uV6YE">1:40</span></div></div></div></div>

    <div class="video-main-content" id="video-main-content-QMe9x0uV6YE">


      <div class="video-title video-title-results">
        <div class="video-short-title">
            <span id="translated_short_prefix_QMe9x0uV6YE" style="font-size: 10px;" class="hid">[TRANSLATED]</span>
            <a id="video-short-title-QMe9x0uV6YE" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=QMe9x0uV6YE" title="ALPINIST (REMI GAILLARD)" rel="nofollow">ALPINIST (REMI GAILLARD)</a>
        </div>
        <div class="video-long-title">
            <span id="translated_long_prefix_QMe9x0uV6YE" style="font-size: 10px;" class="hid">[TRANSLATED]</span>
            <a id="video-long-title-QMe9x0uV6YE" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=QMe9x0uV6YE" title="ALPINIST (REMI GAILLARD)" rel="nofollow">ALPINIST (REMI GAILLARD)</a>
        </div>
      </div>

        <div id="video-description-QMe9x0uV6YE" class="video-description">
          Dangerously funny videos created and produced by Rémi GAILLARD. The show <b>...</b>
        </div>


      <div class="video-facets">

          <span id="video-average-rating-QMe9x0uV6YE" class="video-rating-list ">
                  

  <div>

  
<button class="master-sprite ratingVS ratingVS-5.0" title="5.0"></button>



  </div>


          </span>

            <span id="video-added-time-QMe9x0uV6YE" class="video-date-added">3 weeks ago</span>

          <span id="video-num-views-QMe9x0uV6YE" class="video-view-count">346,749 views</span>

          <span class="video-username"><a id="video-from-username-QMe9x0uV6YE" class="hLink" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/user/nqtv">nqtv</a></span>

          <span id="video-average-rating-QMe9x0uV6YE" class="video-rating-grid ">
                  

  <div>

  
<button class="master-sprite ratingVS ratingVS-5.0" title="5.0"></button>



  </div>


          </span>


      </div>  

    </div>  
    <div class="video-clear-list-left"></div>



  </div>  
</div>  







          
<div class="video-cell" style="width:19.6%">





  <div class="video-entry">




      <div class="v120WideEntry"><div class="v120WrapperOuter"><div class="v120WrapperInner"><a id="video-url-J_M_FF1o27I" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=J_M_FF1o27I" rel="nofollow"><img title="Skateboard Reporter Fail" src="./YouTube_files/default(15).jpg" class="vimg120" qlicon="J_M_FF1o27I" alt="Skateboard Reporter Fail"></a><div id="quicklist-icon-J_M_FF1o27I" class="addtoQL90"><a id="add-to-quicklist-J_M_FF1o27I" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" ql="J_M_FF1o27I" title="Add Video to QuickList"><button class="master-sprite QLIconImg" title="" onclick="clicked_add_icon(this, this.parentNode.getAttribute(&#39;ql&#39;), 0, &#39;https://web.archive.org/web/20090501204849/http://i3.ytimg.com/vi/J_M_FF1o27I/default.jpg&#39;, &#39;Skateboard Reporter Fail&#39;);return false;" onmouseover="mouseOverQuickAdd(this)" onmouseout="mouseOutQuickAdd(this)" onmousedown="urchinTracker(&#39;/Events/results/QuickList+AddTo&#39;)"></button></a><div class="hid quicklist-inlist"><a id="add-to-quicklist-J_M_FF1o27I" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" ql="J_M_FF1o27I" title="Add Video to QuickList"></a><a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch_queue?all">Added</a></div></div>
<div class="video-time"><span id="video-run-time-J_M_FF1o27I">0:50</span></div></div></div></div>

    <div class="video-main-content" id="video-main-content-J_M_FF1o27I">


      <div class="video-title video-title-results">
        <div class="video-short-title">
            <span id="translated_short_prefix_J_M_FF1o27I" style="font-size: 10px;" class="hid">[TRANSLATED]</span>
            <a id="video-short-title-J_M_FF1o27I" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=J_M_FF1o27I" title="Skateboard Reporter Fail" rel="nofollow">Skateboard Reporter Fail</a>
        </div>
        <div class="video-long-title">
            <span id="translated_long_prefix_J_M_FF1o27I" style="font-size: 10px;" class="hid">[TRANSLATED]</span>
            <a id="video-long-title-J_M_FF1o27I" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=J_M_FF1o27I" title="Skateboard Reporter Fail" rel="nofollow">Skateboard Reporter Fail</a>
        </div>
      </div>

        <div id="video-description-J_M_FF1o27I" class="video-description">
          For more, visit failblog.org
        </div>


      <div class="video-facets">

          <span id="video-average-rating-J_M_FF1o27I" class="video-rating-list ">
                  

  <div>

  
<button class="master-sprite ratingVS ratingVS-5.0" title="5.0"></button>



  </div>


          </span>

            <span id="video-added-time-J_M_FF1o27I" class="video-date-added">1 month ago</span>

          <span id="video-num-views-J_M_FF1o27I" class="video-view-count">332,157 views</span>

          <span class="video-username"><a id="video-from-username-J_M_FF1o27I" class="hLink" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/user/failblog">failblog</a></span>

          <span id="video-average-rating-J_M_FF1o27I" class="video-rating-grid ">
                  

  <div>

  
<button class="master-sprite ratingVS ratingVS-5.0" title="5.0"></button>



  </div>


          </span>


      </div>  

    </div>  
    <div class="video-clear-list-left"></div>



  </div>  
</div>  







          
<div class="video-cell" style="width:19.6%">





  <div class="video-entry">




      <div class="v120WideEntry"><div class="v120WrapperOuter"><div class="v120WrapperInner"><a id="video-url--Cj3hGpCHYQ" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=-Cj3hGpCHYQ" rel="nofollow"><img title="Peep Microwave Disaster" src="./YouTube_files/default(16).jpg" class="vimg120" qlicon="-Cj3hGpCHYQ" alt="Peep Microwave Disaster"></a><div id="quicklist-icon--Cj3hGpCHYQ" class="addtoQL90"><a id="add-to-quicklist--Cj3hGpCHYQ" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" ql="-Cj3hGpCHYQ" title="Add Video to QuickList"><button class="master-sprite QLIconImg" title="" onclick="clicked_add_icon(this, this.parentNode.getAttribute(&#39;ql&#39;), 0, &#39;https://web.archive.org/web/20090501204849/http://i2.ytimg.com/vi/-Cj3hGpCHYQ/default.jpg&#39;, &#39;Peep Microwave Disaster&#39;);return false;" onmouseover="mouseOverQuickAdd(this)" onmouseout="mouseOutQuickAdd(this)" onmousedown="urchinTracker(&#39;/Events/results/QuickList+AddTo&#39;)"></button></a><div class="hid quicklist-inlist"><a id="add-to-quicklist--Cj3hGpCHYQ" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" ql="-Cj3hGpCHYQ" title="Add Video to QuickList"></a><a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch_queue?all">Added</a></div></div>
<div class="video-time"><span id="video-run-time--Cj3hGpCHYQ">1:43</span></div></div></div></div>

    <div class="video-main-content" id="video-main-content--Cj3hGpCHYQ">


      <div class="video-title video-title-results">
        <div class="video-short-title">
            <span id="translated_short_prefix_-Cj3hGpCHYQ" style="font-size: 10px;" class="hid">[TRANSLATED]</span>
            <a id="video-short-title--Cj3hGpCHYQ" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=-Cj3hGpCHYQ" title="Peep Microwave Disaster" rel="nofollow">Peep Microwave Disaster</a>
        </div>
        <div class="video-long-title">
            <span id="translated_long_prefix_-Cj3hGpCHYQ" style="font-size: 10px;" class="hid">[TRANSLATED]</span>
            <a id="video-long-title--Cj3hGpCHYQ" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=-Cj3hGpCHYQ" title="Peep Microwave Disaster" rel="nofollow">Peep Microwave Disaster</a>
            <img src="./YouTube_files/hd_video_result_page_logo-vfl87445.png" width="18" height="15" style="vertical-align:text-top">
        </div>
      </div>

        <div id="video-description--Cj3hGpCHYQ" class="video-description">
          WARNING! DO NOT TRY AT HOME! We put a Peep in a modified 100000 watt microwave!
        </div>


      <div class="video-facets">

          <span id="video-average-rating--Cj3hGpCHYQ" class="video-rating-list ">
                  

  <div>

  
<button class="master-sprite ratingVS ratingVS-4.5" title="4.5"></button>



  </div>


          </span>

            <span id="video-added-time--Cj3hGpCHYQ" class="video-date-added">3 weeks ago</span>

          <span id="video-num-views--Cj3hGpCHYQ" class="video-view-count">331,573 views</span>

          <span class="video-username"><a id="video-from-username--Cj3hGpCHYQ" class="hLink" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/user/daneboe">daneboe</a></span>

          <span id="video-average-rating--Cj3hGpCHYQ" class="video-rating-grid ">
                  

  <div>

  
<button class="master-sprite ratingVS ratingVS-4.5" title="4.5"></button>



  </div>


          </span>


      </div>  

    </div>  
    <div class="video-clear-list-left"></div>



  </div>  
</div>  







          
<div class="video-cell" style="width:19.6%">





  <div class="video-entry">




      <div class="v120WideEntry"><div class="v120WrapperOuter"><div class="v120WrapperInner"><a id="video-url-ZXFrpH5Kidw" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=ZXFrpH5Kidw" rel="nofollow"><img title="Xylophone Kitteh" src="./YouTube_files/default(17).jpg" class="vimg120" qlicon="ZXFrpH5Kidw" alt="Xylophone Kitteh"></a><div id="quicklist-icon-ZXFrpH5Kidw" class="addtoQL90"><a id="add-to-quicklist-ZXFrpH5Kidw" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" ql="ZXFrpH5Kidw" title="Add Video to QuickList"><button class="master-sprite QLIconImg" title="" onclick="clicked_add_icon(this, this.parentNode.getAttribute(&#39;ql&#39;), 0, &#39;https://web.archive.org/web/20090501204849/http://i3.ytimg.com/vi/ZXFrpH5Kidw/default.jpg&#39;, &#39;Xylophone Kitteh&#39;);return false;" onmouseover="mouseOverQuickAdd(this)" onmouseout="mouseOutQuickAdd(this)" onmousedown="urchinTracker(&#39;/Events/results/QuickList+AddTo&#39;)"></button></a><div class="hid quicklist-inlist"><a id="add-to-quicklist-ZXFrpH5Kidw" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" ql="ZXFrpH5Kidw" title="Add Video to QuickList"></a><a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch_queue?all">Added</a></div></div>
<div class="video-time"><span id="video-run-time-ZXFrpH5Kidw">0:34</span></div></div></div></div>

    <div class="video-main-content" id="video-main-content-ZXFrpH5Kidw">


      <div class="video-title video-title-results">
        <div class="video-short-title">
            <span id="translated_short_prefix_ZXFrpH5Kidw" style="font-size: 10px;" class="hid">[TRANSLATED]</span>
            <a id="video-short-title-ZXFrpH5Kidw" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=ZXFrpH5Kidw" title="Xylophone Kitteh" rel="nofollow">Xylophone Kitteh</a>
        </div>
        <div class="video-long-title">
            <span id="translated_long_prefix_ZXFrpH5Kidw" style="font-size: 10px;" class="hid">[TRANSLATED]</span>
            <a id="video-long-title-ZXFrpH5Kidw" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=ZXFrpH5Kidw" title="Xylophone Kitteh" rel="nofollow">Xylophone Kitteh</a>
        </div>
      </div>

        <div id="video-description-ZXFrpH5Kidw" class="video-description">
          For more, visit icanhascheezburger.com View the original here www.youtube.com
        </div>


      <div class="video-facets">

          <span id="video-average-rating-ZXFrpH5Kidw" class="video-rating-list ">
                  

  <div>

  
<button class="master-sprite ratingVS ratingVS-4.5" title="4.5"></button>



  </div>


          </span>

            <span id="video-added-time-ZXFrpH5Kidw" class="video-date-added">1 week ago</span>

          <span id="video-num-views-ZXFrpH5Kidw" class="video-view-count">320,217 views</span>

          <span class="video-username"><a id="video-from-username-ZXFrpH5Kidw" class="hLink" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/user/cheezburger">cheezburger</a></span>

          <span id="video-average-rating-ZXFrpH5Kidw" class="video-rating-grid ">
                  

  <div>

  
<button class="master-sprite ratingVS ratingVS-4.5" title="4.5"></button>



  </div>


          </span>


      </div>  

    </div>  
    <div class="video-clear-list-left"></div>



  </div>  
</div>  







          
<div class="video-cell" style="width:19.6%">





  <div class="video-entry">




      <div class="v120WideEntry"><div class="v120WrapperOuter"><div class="v120WrapperInner"><a id="video-url-vnOyMSEWNTs" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=vnOyMSEWNTs" rel="nofollow"><img title="Black and White People Furniture - Bizarre Commercial" src="./YouTube_files/default(18).jpg" class="vimg120" qlicon="vnOyMSEWNTs" alt="Black and White People Furniture - Bizarre Commercial"></a><div id="quicklist-icon-vnOyMSEWNTs" class="addtoQL90"><a id="add-to-quicklist-vnOyMSEWNTs" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" ql="vnOyMSEWNTs" title="Add Video to QuickList"><button class="master-sprite QLIconImg" title="" onclick="clicked_add_icon(this, this.parentNode.getAttribute(&#39;ql&#39;), 0, &#39;https://web.archive.org/web/20090501204849/http://i3.ytimg.com/vi/vnOyMSEWNTs/default.jpg&#39;, &#39;Black and White People Furniture - Bizarre Commercial&#39;);return false;" onmouseover="mouseOverQuickAdd(this)" onmouseout="mouseOutQuickAdd(this)" onmousedown="urchinTracker(&#39;/Events/results/QuickList+AddTo&#39;)"></button></a><div class="hid quicklist-inlist"><a id="add-to-quicklist-vnOyMSEWNTs" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" ql="vnOyMSEWNTs" title="Add Video to QuickList"></a><a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch_queue?all">Added</a></div></div>
<div class="video-time"><span id="video-run-time-vnOyMSEWNTs">1:30</span></div></div></div></div>

    <div class="video-main-content" id="video-main-content-vnOyMSEWNTs">


      <div class="video-title video-title-results">
        <div class="video-short-title">
            <span id="translated_short_prefix_vnOyMSEWNTs" style="font-size: 10px;" class="hid">[TRANSLATED]</span>
            <a id="video-short-title-vnOyMSEWNTs" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=vnOyMSEWNTs" title="Black and White People Furniture - Bizarre Commercial" rel="nofollow">Black and White People Furniture - Bizarre Commercial</a>
        </div>
        <div class="video-long-title">
            <span id="translated_long_prefix_vnOyMSEWNTs" style="font-size: 10px;" class="hid">[TRANSLATED]</span>
            <a id="video-long-title-vnOyMSEWNTs" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=vnOyMSEWNTs" title="Black and White People Furniture - Bizarre Commercial" rel="nofollow">Black and White People Furniture - Bizarre Commercial</a>
            <img src="./YouTube_files/hd_video_result_page_logo-vfl87445.png" width="18" height="15" style="vertical-align:text-top">
        </div>
      </div>

        <div id="video-description-vnOyMSEWNTs" class="video-description">
          Pre-qualify for financing right NOW at: redhouse.prbc.com We produced this <b>...</b>
        </div>


      <div class="video-facets">

          <span id="video-average-rating-vnOyMSEWNTs" class="video-rating-list ">
                  

  <div>

  
<button class="master-sprite ratingVS ratingVS-4.5" title="4.5"></button>



  </div>


          </span>

            <span id="video-added-time-vnOyMSEWNTs" class="video-date-added">1 week ago</span>

          <span id="video-num-views-vnOyMSEWNTs" class="video-view-count">317,987 views</span>

          <span class="video-username"><a id="video-from-username-vnOyMSEWNTs" class="hLink" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/user/RhettandLink">RhettandLink</a></span>

          <span id="video-average-rating-vnOyMSEWNTs" class="video-rating-grid ">
                  

  <div>

  
<button class="master-sprite ratingVS ratingVS-4.5" title="4.5"></button>



  </div>


          </span>


      </div>  

    </div>  
    <div class="video-clear-list-left"></div>



  </div>  
</div>  







          
<div class="video-cell" style="width:19.6%">





  <div class="video-entry">




      <div class="v120WideEntry"><div class="v120WrapperOuter"><div class="v120WrapperInner"><a id="video-url-ftSaxOMD2QA" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=ftSaxOMD2QA" rel="nofollow"><img title="My WORST Date" src="./YouTube_files/default(19).jpg" class="vimg120" qlicon="ftSaxOMD2QA" alt="My WORST Date"></a><div id="quicklist-icon-ftSaxOMD2QA" class="addtoQL90"><a id="add-to-quicklist-ftSaxOMD2QA" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" ql="ftSaxOMD2QA" title="Add Video to QuickList"><button class="master-sprite QLIconImg" title="" onclick="clicked_add_icon(this, this.parentNode.getAttribute(&#39;ql&#39;), 0, &#39;https://web.archive.org/web/20090501204849/http://i3.ytimg.com/vi/ftSaxOMD2QA/default.jpg&#39;, &#39;My WORST Date&#39;);return false;" onmouseover="mouseOverQuickAdd(this)" onmouseout="mouseOutQuickAdd(this)" onmousedown="urchinTracker(&#39;/Events/results/QuickList+AddTo&#39;)"></button></a><div class="hid quicklist-inlist"><a id="add-to-quicklist-ftSaxOMD2QA" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results#" ql="ftSaxOMD2QA" title="Add Video to QuickList"></a><a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch_queue?all">Added</a></div></div>
<div class="video-time"><span id="video-run-time-ftSaxOMD2QA">4:40</span></div></div></div></div>

    <div class="video-main-content" id="video-main-content-ftSaxOMD2QA">


      <div class="video-title video-title-results">
        <div class="video-short-title">
            <span id="translated_short_prefix_ftSaxOMD2QA" style="font-size: 10px;" class="hid">[TRANSLATED]</span>
            <a id="video-short-title-ftSaxOMD2QA" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=ftSaxOMD2QA" title="My WORST Date" rel="nofollow">My WORST Date</a>
        </div>
        <div class="video-long-title">
            <span id="translated_long_prefix_ftSaxOMD2QA" style="font-size: 10px;" class="hid">[TRANSLATED]</span>
            <a id="video-long-title-ftSaxOMD2QA" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=ftSaxOMD2QA" title="My WORST Date" rel="nofollow">My WORST Date</a>
        </div>
      </div>

        <div id="video-description-ftSaxOMD2QA" class="video-description">
          My Worst DATE! All you guys can enter the contest at: www.take180.com be <b>...</b>
        </div>


      <div class="video-facets">

          <span id="video-average-rating-ftSaxOMD2QA" class="video-rating-list ">
                  

  <div>

  
<button class="master-sprite ratingVS ratingVS-4.0" title="4.0"></button>



  </div>


          </span>

            <span id="video-added-time-ftSaxOMD2QA" class="video-date-added">1 month ago</span>

          <span id="video-num-views-ftSaxOMD2QA" class="video-view-count">310,925 views</span>

          <span class="video-username"><a id="video-from-username-ftSaxOMD2QA" class="hLink" href="https://web.archive.org/web/20090501204849/http://www.youtube.com/user/ndtitanlady">ndtitanlady</a></span>

          <span id="video-average-rating-ftSaxOMD2QA" class="video-rating-grid ">
                  

  <div>

  
<button class="master-sprite ratingVS ratingVS-4.0" title="4.0"></button>



  </div>


          </span>


      </div>  

    </div>  
    <div class="video-clear-list-left"></div>



  </div>  
</div>  

    
  </div> <!-- end search results -->

    

  
  

  

  
  
  
</div>

<div id="search-pva">


  
    
      
        
      
      
  <div class="grayText" style="margin-bottom: 1em; text-align: right;"><a href="https://web.archive.org/web/20090501204849/http://www.google.com/support/youtube/bin/answer.py?hl=en&amp;answer=143421" class="grayText">Featured Videos</a></div>
    
<div style="margin-bottom:20px">
  <table cellspacing="0" cellpadding="0" width="350"><tbody><tr style="vertical-align: top;">
    <td class="spons-vid-thumb">
      
  
  <div class="v120WrapperOuter"><div class="v120WrapperInner"><a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=QQUvB1ot-Hg&amp;feature=fvsr" title="&quot;who&#39;s this&quot; and my mum... yes, you heard me ..."><img class="vimg120" alt="&quot;who&#39;s this&quot; and my mum... yes, you heard me ..." src="./YouTube_files/default(4).jpg"></a>    <div class="video-time" style="margin-top: -23px;"><span>3:05</span></div>    </div></div>

    </td>
    <td style="width:4px"></td>
    <td style="padding-top: 2px;">
      <a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=QQUvB1ot-Hg&amp;feature=fvsr" class="pyv-title">"who's this" and my mum... yes, you heard me <b>...</b></a><br>
      
      <div>did you guys ever do that "my mother, your mother lives down the street <b>...</b>&nbsp;</div>
      
      
  
    <table cellspacing="0" cellpadding="0" class="pyv-metadata">
      
      <tbody><tr>
        <td>
          
          2 weeks ago
          
        </td>
        <td style="text-align: right;">
          
            588,618
          
        </td>
      </tr>
      
      <tr>
      
      <td>
            

  <div>

  
<button class="master-sprite ratingVS ratingVS-5.0" title="5.0"></button>



  </div>


      </td>
      <td style="text-align: right;">
      
        <span class="vlfrom">
          
          <a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/user/communitychannel?feature=chclk">communitychannel</a>
          
        </span>
      </td>
      </tr>
    </tbody></table>
  

    </td>
  </tr></tbody></table>
</div>

      
<div style="margin-bottom:20px">
  <table cellspacing="0" cellpadding="0" width="350"><tbody><tr style="vertical-align: top;">
    <td class="spons-vid-thumb">
      
  
  <div class="v120WrapperOuter"><div class="v120WrapperInner"><a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=PeT1t0lQn5Q&amp;feature=fvsr" title="The Dark Knight Meets Superman Part 2"><img class="vimg120" alt="The Dark Knight Meets Superman Part 2" src="./YouTube_files/default(8).jpg"></a>    <div class="video-time" style="margin-top: -23px;"><span>3:35</span></div>    </div></div>

    </td>
    <td style="width:4px"></td>
    <td style="padding-top: 2px;">
      <a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=PeT1t0lQn5Q&amp;feature=fvsr" class="pyv-title">The Dark Knight Meets Superman Part 2</a><br>
      
      <div>The Justice League and a completely ordinary human save the city. See more <b>...</b>&nbsp;</div>
      
      
  
    <table cellspacing="0" cellpadding="0" class="pyv-metadata">
      
      <tbody><tr>
        <td>
          
          2 weeks ago
          
        </td>
        <td style="text-align: right;">
          
            447,377
          
        </td>
      </tr>
      
      <tr>
      
      <td>
            

  <div>

  
<button class="master-sprite ratingVS ratingVS-4.5" title="4.5"></button>



  </div>


      </td>
      <td style="text-align: right;">
      
        <span class="vlfrom">
          
          <a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/user/collegehumor?feature=chclk">collegehumor</a>
          
        </span>
      </td>
      </tr>
    </tbody></table>
  

    </td>
  </tr></tbody></table>
</div>

      
<div style="margin-bottom:20px">
  <table cellspacing="0" cellpadding="0" width="350"><tbody><tr style="vertical-align: top;">
    <td class="spons-vid-thumb">
      
  
  <div class="v120WrapperOuter"><div class="v120WrapperInner"><a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=-BIE_YpICmU&amp;feature=fvsr" title="us of a trip."><img class="vimg120" alt="us of a trip." src="./YouTube_files/default(11).jpg"></a>    <div class="video-time" style="margin-top: -23px;"><span>3:52</span></div>    </div></div>

    </td>
    <td style="width:4px"></td>
    <td style="padding-top: 2px;">
      <a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=-BIE_YpICmU&amp;feature=fvsr" class="pyv-title">us of a trip.</a><br>
      
      <div>Hey yo. Next video will be back to normal (hopefully) jamie's channel: www <b>...</b>&nbsp;</div>
      
      
  
    <table cellspacing="0" cellpadding="0" class="pyv-metadata">
      
      <tbody><tr>
        <td>
          
          6 days ago
          
        </td>
        <td style="text-align: right;">
          
            389,059
          
        </td>
      </tr>
      
      <tr>
      
      <td>
            

  <div>

  
<button class="master-sprite ratingVS ratingVS-5.0" title="5.0"></button>



  </div>


      </td>
      <td style="text-align: right;">
      
        <span class="vlfrom">
          
          <a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/user/communitychannel?feature=chclk">communitychannel</a>
          
        </span>
      </td>
      </tr>
    </tbody></table>
  

    </td>
  </tr></tbody></table>
</div>

      
<div style="margin-bottom:20px">
  <table cellspacing="0" cellpadding="0" width="350"><tbody><tr style="vertical-align: top;">
    <td class="spons-vid-thumb">
      
  
  <div class="v120WrapperOuter"><div class="v120WrapperInner"><a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=wJfYAJJYMqg&amp;feature=fvsr" title="Free Hugs Prank: $2 Deluxe Hugs"><img class="vimg120" alt="Free Hugs Prank: $2 Deluxe Hugs" src="./YouTube_files/default(12).jpg"></a>    <div class="video-time" style="margin-top: -23px;"><span>3:40</span></div>    </div></div>

    </td>
    <td style="width:4px"></td>
    <td style="padding-top: 2px;">
      <a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=wJfYAJJYMqg&amp;feature=fvsr" class="pyv-title">Free Hugs Prank: $2 Deluxe Hugs</a><br>
      
      <div>Just havin' fun with the Free Hugs Guy! I'm gonna need MORE COWBELL: tinyurl <b>...</b>&nbsp;</div>
      
      
  
    <table cellspacing="0" cellpadding="0" class="pyv-metadata">
      
      <tbody><tr>
        <td>
          
          5 days ago
          
        </td>
        <td style="text-align: right;">
          
            350,503
          
        </td>
      </tr>
      
      <tr>
      
      <td>
            

  <div>

  
<button class="master-sprite ratingVS ratingVS-5.0" title="5.0"></button>



  </div>


      </td>
      <td style="text-align: right;">
      
        <span class="vlfrom">
          
          <a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/user/MediocreFilms?feature=chclk">MediocreFilms</a>
          
        </span>
      </td>
      </tr>
    </tbody></table>
  

    </td>
  </tr></tbody></table>
</div>

      
<div style="margin-bottom:20px">
  <table cellspacing="0" cellpadding="0" width="350"><tbody><tr style="vertical-align: top;">
    <td class="spons-vid-thumb">
      
  
  <div class="v120WrapperOuter"><div class="v120WrapperInner"><a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=vnOyMSEWNTs&amp;feature=fvsr" title="Black and White People Furniture - Bizarre Commercial"><img class="vimg120" alt="Black and White People Furniture - Bizarre Commercial" src="./YouTube_files/default(18).jpg"></a>    <div class="video-time" style="margin-top: -23px;"><span>1:30</span></div>    </div></div>

    </td>
    <td style="width:4px"></td>
    <td style="padding-top: 2px;">
      <a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=vnOyMSEWNTs&amp;feature=fvsr" class="pyv-title">Black and White People Furniture - Bizarre Commercial</a><br>
      
      <div>Pre-qualify for financing right NOW at: redhouse.prbc.com We produced this <b>...</b>&nbsp;</div>
      
      
  
    <table cellspacing="0" cellpadding="0" class="pyv-metadata">
      
      <tbody><tr>
        <td>
          
          1 week ago
          
        </td>
        <td style="text-align: right;">
          
            262,409
          
        </td>
      </tr>
      
      <tr>
      
      <td>
            

  <div>

  
<button class="master-sprite ratingVS ratingVS-4.5" title="4.5"></button>



  </div>


      </td>
      <td style="text-align: right;">
      
        <span class="vlfrom">
          
          <a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/user/RhettandLink?feature=chclk">RhettandLink</a>
          
        </span>
      </td>
      </tr>
    </tbody></table>
  

    </td>
  </tr></tbody></table>
</div>

      
<div style="margin-bottom:20px">
  <table cellspacing="0" cellpadding="0" width="350"><tbody><tr style="vertical-align: top;">
    <td class="spons-vid-thumb">
      
  
  <div class="v120WrapperOuter"><div class="v120WrapperInner"><a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=wqMpcZtJ3W4&amp;feature=fvsr" title="crowds LOVE ugly people (britain&#39;s got talent parody)"><img class="vimg120" alt="crowds LOVE ugly people (britain&#39;s got talent parody)" src="./YouTube_files/default(20).jpg"></a>    <div class="video-time" style="margin-top: -23px;"><span>2:11</span></div>    </div></div>

    </td>
    <td style="width:4px"></td>
    <td style="padding-top: 2px;">
      <a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/watch?v=wqMpcZtJ3W4&amp;feature=fvsr" class="pyv-title">crowds LOVE ugly people (britain's got talent parody)</a><br>
      
      <div>i'm only doing this to get closer to susan boyle. Sorry guys, I know i said <b>...</b>&nbsp;</div>
      
      
  
    <table cellspacing="0" cellpadding="0" class="pyv-metadata">
      
      <tbody><tr>
        <td>
          
          2 days ago
          
        </td>
        <td style="text-align: right;">
          
            265,622
          
        </td>
      </tr>
      
      <tr>
      
      <td>
            

  <div>

  
<button class="master-sprite ratingVS ratingVS-5.0" title="5.0"></button>



  </div>


      </td>
      <td style="text-align: right;">
      
        <span class="vlfrom">
          
          <a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/user/communitychannel?feature=chclk">communitychannel</a>
          
        </span>
      </td>
      </tr>
    </tbody></table>
  

    </td>
  </tr></tbody></table>
</div>

  

      
      
        
          
  
  
  <!-- Begin ad tag -->
    <div id="ad_creative_1" class="ad-div">

  

    
      <input type="hidden" id="pvaHl" value="en">
  <input type="hidden" id="pvaTag" value="http://ad-yt-bfp.doubleclick.net/adj/com.ytsrc.enter/movies;sz=300x250;kl=N;klg=en;kt=K;kga=-1;kr=A;kw=;kgg=-1;kcr=us;dc_dedup=1;kmyd=ad_creative_1;tile=1;dcopt=ist;">
  <input type="hidden" id="burl" value="http://www.youtube.com/pva/">
  <input type="hidden" id="canv" value="False">
  <input type="hidden" id="tdl" value="http://www.youtube.com/">
  <input type="hidden" id="yeurl" value="http://s.ytimg.com/yt/swf/yvaexpandable-vfl94010.swf">
  <input type="hidden" id="plord" value="AAy03yAHYkY">


        <script type="text/javascript">
      var google_language = "en";
    </script>

  
  <script type="text/javascript">
    ord=Math.random()*10000000000000000;
    document.write('<script language="JavaScript" src="https://web.archive.org/web/20090501204849/http://ad-yt-bfp.doubleclick.net/adj/com.ytsrc.enter/movies;sz=300x250;kl=N;klg=en;kt=K;kga=-1;kr=A;kw=;kgg=-1;kcr=us;dc_dedup=1;kmyd=ad_creative_1;tile=1;dcopt=ist;ord=' + ord + '?" type="text/javascript"><\/script>');
  </script><script language="JavaScript" src="./YouTube_files/movies" type="text/javascript"></script>

      <div style="font-size: 10px; padding-top: 3px;" class="alignC grayText">
        <a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/t/ads_preferences">Advertisement</a>
      </div>
    </div>

  <!-- End ad tag -->

        
    
  
</div>


<div class="searchFooterBox">
      <div class="pagingDiv">
      <span class="pagerLabel smallText label"> Pages: </span>


        <span class="pagerCurrent">1</span>
            <a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results?&amp;page=2" class="pagerNotCurrent" onmousedown="urchinTracker(&#39;/Events/Results/Pagination&#39;)">2</a>
            <a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results?&amp;page=3" class="pagerNotCurrent" onmousedown="urchinTracker(&#39;/Events/Results/Pagination&#39;)">3</a>
            <a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results?&amp;page=4" class="pagerNotCurrent" onmousedown="urchinTracker(&#39;/Events/Results/Pagination&#39;)">4</a>
            <a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results?&amp;page=5" class="pagerNotCurrent" onmousedown="urchinTracker(&#39;/Events/Results/Pagination&#39;)">5</a>
            <a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results?&amp;page=6" class="pagerNotCurrent" onmousedown="urchinTracker(&#39;/Events/Results/Pagination&#39;)">6</a>
            <a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results?&amp;page=7" class="pagerNotCurrent" onmousedown="urchinTracker(&#39;/Events/Results/Pagination&#39;)">7</a>

    
      ...
          <a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results?&amp;page=2" class="pagerNotCurrent" onmousedown="urchinTracker(&#39;/Events/Results/Pagination&#39;)">Next</a>
    
    </div>

    <div id="search-duplicates-message">Some search results have been omitted that contain duplicates.  If you like, you can <a href="https://web.archive.org/web/20090501204849/http://www.youtube.com/results?search_filter=0" onmousedown="urchinTracker(&#39;/Events/Results/DuplicatesRepeatSearch&#39;)">repeat the search</a> with the omitted results included</div>
</div>












    <div class="clear"></div>
  
  
  


  
</div> <!-- end baseDiv -->

<script type="text/javascript">

  // disable this feature for other browsers (webkit, firefox 2) to keep the browser speedy as possible
  if (document.documentElement["getBoundingClientRect"]) {
    addListener(window, 'scroll', thumbnailDelayLoad.loadImages);
    addListener(window, 'resize', thumbnailDelayLoad.loadImages);
  }
  thumbnailDelayLoad.loadImages();

</script>



<a name="pageBottom"></a>



  




  <script type="text/javascript">
    window.setTimeout(
      "window.google.ac.install(document.searchForm,document.searchForm.search_query,'yt','en','close', \
      'Suggestions', \
      'Web search', \
      -1, \
      false)", 100);
  </script>




<table id="completeTable" cellpadding="0" cellspacing="0" class="google-ac-m" style="visibility: hidden; left: 0px; top: -1px; width: 0px;"></table><iframe id="completeIFrame" style="z-index: 1; position: absolute; display: block; border-width: 0px; left: 0px; top: -1px; width: 0px; height: 0px;" allow="autoplay &#39;self&#39;; fullscreen &#39;self&#39;" src="./YouTube_files/saved_resource.html"></iframe>
  <?php require($_SERVER['DOCUMENT_ROOT'] . "/static/mod/footer.php"); ?></body></html>