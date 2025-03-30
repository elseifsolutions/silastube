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
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- saved from url=(0078)https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/ -->
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:b="http://www.google.com/2005/gml/b" xmlns:data="http://www.google.com/2005/gml/data" xmlns:expr="http://www.google.com/2005/gml/expr" style="--wm-toolbar-height: 1px;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script src="./YouTube Blog_files/athena.js.download" type="text/javascript"></script>
<script type="text/javascript">window.addEventListener('DOMContentLoaded',function(){var v=archive_analytics.values;v.service='wb';v.server_name='wwwb-app201.us.archive.org';v.server_ms=1012;archive_analytics.send_pageview({});});</script>
<script type="text/javascript" src="./YouTube Blog_files/bundle-playback.js.download" charset="utf-8"></script>
<script type="text/javascript" src="./YouTube Blog_files/wombat.js.download" charset="utf-8"></script>
<script>window.RufflePlayer=window.RufflePlayer||{};window.RufflePlayer.config={"autoplay":"on","unmuteOverlay":"hidden"};</script>
<script type="text/javascript" src="./YouTube Blog_files/ruffle.js.download"></script>
<script type="text/javascript">
    __wm.init("https://web.archive.org/web");
  __wm.wombat("http://youtube-global.blogspot.com/","20091204014937","https://web.archive.org/","web","https://web-static.archive.org/_static/",
        "1259891377");
</script>
<link rel="stylesheet" type="text/css" href="./YouTube Blog_files/banner-styles.css">
<link rel="stylesheet" type="text/css" href="./YouTube Blog_files/iconochive.css">
<!-- End Wayback Rewrite JS Include -->

<link href="https://web.archive.org/web/20091204014937im_/http://youtube.com/favicon.ico" rel="icon" type="image/x-icon">
<link href="https://web.archive.org/web/20091204014937im_/http://youtube.com/favicon.ico" rel="shortcut icon" type="image/x-icon">
<script type="text/javascript">(function() { var a=window;function e(b){this.t={};this.tick=function(c,h,d){d=d?d:(new Date).getTime();this.t[c]=[d,h]};this.tick("start",null,b)}var f=new e;a.jstiming={Timer:e,load:f};try{a.jstiming.pt=a.gtbExternal&&a.gtbExternal.pageT()||a.external&&a.external.pageT}catch(g){};a.tickAboveFold=function(b){b=b;var c=0;if(b.offsetParent){do c+=b.offsetTop;while(b=b.offsetParent)}b=c;b<=750&&a.jstiming.load.tick("aft")};var i=false;function j(){if(!i){i=true;a.jstiming.load.tick("firstScrollTime")}}a.addEventListener?a.addEventListener("scroll",j,false):a.attachEvent("onscroll",j); })();</script>

<meta content="true" name="MSSmartTagsPreventParsing">
<meta content="blogger" name="generator">
<link href="https://web.archive.org/web/20091204014937im_/http://www.blogger.com/favicon.ico" rel="icon" type="image/vnd.microsoft.icon">
<link href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/" rel="canonical">
<link rel="alternate" type="application/atom+xml" title="YouTube Blog - Atom" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/feeds/posts/default">
<link rel="alternate" type="application/rss+xml" title="YouTube Blog - RSS" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/feeds/posts/default?alt=rss">
<link rel="service.post" type="application/atom+xml" title="YouTube Blog - Atom" href="http://www.blogger.com/feeds/8913912091036362264/posts/default">
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://www.blogger.com/rsd.g?blogID=8913912091036362264">
<link rel="openid.server" href="http://www.blogger.com/openid-server.g">
<title>YouTube Blog</title>
<link type="text/css" rel="stylesheet" href="./YouTube Blog_files/120160635-widget_css_bundle.css">
<link type="text/css" rel="stylesheet" href="./YouTube Blog_files/gsearch.css">
 <link rel="stylesheet" type="text/css" href="./YouTube Blog_files/3727950723-blog_controls.css">
 <link rel="stylesheet" type="text/css" href="./YouTube Blog_files/authorization.css">
<style type="text/css">#navbar-iframe { display:block }
</style>

<style id="page-skin-1" type="text/css"><!--
/*
-----------------------------------------------
Blogger Template Style
Name:     Rounders 2
Designer: Douglas Bowman
URL:      www.stopdesign.com
Date:     27 Feb 2004
Updated by: Blogger Team
----------------------------------------------- */
/* Variable definitions
====================
<Variable name="mainBgColor" description="Main Background Color"
type="color" default="#fff">
<Variable name="mainTextColor" description="Text Color" type="color"
default="#000">
<Variable name="postTitleColor" description="Post Title Color" type="color"
default="#333">
<Variable name="dateHeaderColor" description="Date Header Color"
type="color" default="#810">
<Variable name="borderColor" description="Post Border Color" type="color"
default="#bbb">
<Variable name="mainLinkColor" description="Link Color" type="color"
default="#b30">
<Variable name="mainVisitedLinkColor" description="Visited Link Color"
type="color" default="#c63">
<Variable name="titleBgColor" description="Page Header Background Color"
type="color" default="#710">
<Variable name="titleTextColor" description="Blog Title Color"
type="color" default="#fff">
<Variable name="topSidebarHeaderColor"
description="Top Sidebar Title Color"
type="color" default="#fff">
<Variable name="topSidebarBgColor"
description="Top Sidebar Background Color"
type="color" default="#999">
<Variable name="topSidebarTextColor" description="Top Sidebar Text Color"
type="color" default="#fff">
<Variable name="topSidebarLinkColor" description="Top Sidebar Link Color"
type="color" default="#fff">
<Variable name="topSidebarVisitedLinkColor"
description="Top Sidebar Visited Link Color"
type="color" default="#ddd">
<Variable name="bodyFont" description="Text Font" type="font"
default="normal normal 100% 'Trebuchet MS',Verdana,Arial,Sans-serif">
<Variable name="pageTitleFont" description="Blog Title Font" type="font"
default="normal bold 200% 'Trebuchet MS',Verdana,Arial,Sans-serif">
<Variable name="descriptionFont" description="Blog Description Font" type="font"
default="normal normal 100% 'Trebuchet MS',Verdana,Arial,Sans-serif">
<Variable name="headerFont" description="Sidebar Title Font" type="font"
default="normal bold 100% 'Trebuchet MS',Verdana,Arial,Sans-serif">
<Variable name="postTitleFont" description="Post Title Font" type="font"
default="normal bold 135% 'Trebuchet MS',Verdana,Arial,Sans-serif">
*/
body {
background:#fff;
margin:0;
text-align:center;
line-height: 1.5em;
font-family: arial, helvetica, san-serif;
color:#000000;
font-size/* */:/**/small;
font-size: /**/small;
}
/* Page Structure
----------------------------------------------- */
/* The images which help create rounded corners depend on the
following widths and measurements. If you want to change
these measurements, the images will also need to change.
*/
#outer-wrapper {
width:960px;
background: #fff;
margin:0 auto;
text-align:left;
font: normal normal 100% Arial, sans-serif;
}
#main-wrap1 {
width:700px;
float:left;
margin:0;
padding:0;
color:#000000;
font-size:97%;
line-height:1.5em;
word-wrap: break-word; /* fix for long text breaking sidebar float in IE */
overflow: hidden;     /* fix for long non-text content breaking IE sidebar float */
}
#main-wrap2 {
float:left;
width:100%;
padding:10px;
}
#sidebar-wrap {
width:260px;
float:right;
margin:15px 0 0;
font-size:97%;
line-height:1.5em;
word-wrap: break-word; /* fix for long text breaking sidebar float in IE */
overflow: hidden;     /* fix for long non-text content breaking IE sidebar float */
}
.main .widget {
margin-top: 4px;
width: 700px;
padding: 0;
}
.main .Blog {
margin: 0;
padding: 0;
width: 700px;
}
/* Links
----------------------------------------------- */
a:link {
color: #0033cc;
}
a:visited {
color: #0033cc;
}
a:hover {
color: #0033cc;
}
a img {
border-width:0;
}
/* Blog Header
----------------------------------------------- */
#header-wrapper {
margin:22px 0 0 0;
padding:8px 0 0 0;
color:#ffffff;
}
#header {
padding:0 15px 8px;
}
#header h1 {
margin:0;
padding:10px 30px 5px;
line-height:1.2em;
font: normal bold 200% Arial, sans-serif;
}
#header a,
#header a:visited {
text-decoration:none;
color: #ffffff;
}
#header .description {
margin:0;
padding:5px 30px 10px;
line-height:1.5em;
font: normal normal 100% Arial, sans-serif;
}
/* Posts
----------------------------------------------- */
h2.date-header {
margin:0 28px 0 0;
font-size:85%;
line-height:2em;
text-transform:uppercase;
letter-spacing:.2em;
color:#000000;
}
.post {
margin:.3em 0 0;
padding:0 14px 0 0;
border:1px dotted #ffffff;
border-width:1px 0;
}
.post h3 {
margin:0;
line-height:1.5em;
display:block;
border:1px dotted #ffffff;
border-width:0 1px 1px;
padding:2px 14px 2px 0;
color: #000000;
font: normal bold 135% Arial, sans-serif;
}
.post h3 a, .post h3 a:visited {
text-decoration:none;
color: #000000;
}
a.title-link:hover {
background-color: #ffffff;
color: #000000;
}
.post-body {
border:1px dotted #ffffff;
border-width:0 1px 1px;
border-bottom-color:#ffffff;
padding:10px 14px 1px 0;
}
html>body .post-body {
border-bottom-width:0;
}
.post p {
margin:0 0 .75em;
}
.post-footer {
background: #eee;
margin-bottom: 20px;
padding:2px 28px;
border:1px dotted #ffffff;
border-width:1px;
font-size:100%;
line-height:1.5em;
text-align: right;
color: #666;
}
.post-footer p {
margin: 0;
}
html>body .post-footer {
border-bottom-color:transparent;
}
.uncustomized-post-template .post-footer {
text-align: right;
}
.uncustomized-post-template .post-author,
.uncustomized-post-template .post-timestamp {
display: block;
float: left;
text-align:left;
margin-right: 4px;
}
.post-footer a {
color: #0033cc;
}
.post-footer a:hover {
color: #0033cc;
}
a.comment-link {
/* IE5.0/Win doesn't apply padding to inline elements,
so we hide these two declarations from it */
padding-left:14px;
}
html>body a.comment-link {
/* Respecified, for IE5/Mac's benefit */
padding-left:14px;
}
.post img {
margin:0 0 5px 0;
padding:4px;
border:1px solid #ffffff;
}
blockquote {
margin:.75em 0;
border:1px dotted #ffffff;
border-width:1px 0;
padding:5px 15px;
color: #000000;
}
.post blockquote p {
margin:.5em 0;
}
#blog-pager-newer-link {
float: left;
margin-left: 13px;
}
#blog-pager-older-link {
float: right;
margin-right: 13px;
}
#blog-pager {
text-align: center;
}
.feed-links {
clear: both;
line-height: 2.5em;
margin-left: 13px;
}
/* Comments
----------------------------------------------- */
#comments {
margin:-25px 13px 0;
border:1px dotted #ffffff;
border-width:0 1px 1px;
padding:20px 0 15px 0;
}
#comments h4 {
margin:0 0 10px;
padding:0 14px 2px 29px;
border-bottom:1px dotted #ffffff;
font-size:120%;
line-height:1.4em;
color:#000000;
}
#comments-block {
margin:0 15px 0 9px;
}
.comment-author {
margin:.5em 0;
padding:0 0 0 20px;
font-weight:bold;
}
.comment-body {
margin:0 0 1.25em;
padding:0 0 0 20px;
}
.comment-body p {
margin:0 0 .5em;
}
.comment-footer {
margin:0 0 .5em;
padding:0 0 .75em 20px;
}
.comment-footer a:link {
color: #000000;
}
.deleted-comment {
font-style:italic;
color:gray;
}
/* Profile
----------------------------------------------- */
.profile-img {
float: left;
margin: 5px 5px 5px 0;
border: 4px solid #000000;
}
.profile-datablock {
margin:0 15px .5em 0;
padding-top:8px;
}
.profile-link {
padding-left:15px;
font-weight:bold;
}
.profile-textblock {
clear: both;
margin: 0;
}
.sidebar .clear, .main .widget .clear {
clear: both;
}
#sidebartop-wrap {
margin:0px 0px 15px;
padding:0px 0px 10px;
color:#000000;
}
#sidebartop-wrap2 {
padding-top: 5px;
margin:0;
border-width:0;
}
#sidebartop h2 {
line-height:1.5em;
color:#000000;
border-bottom: 1px dotted #000000;
margin-bottom: 0.5em;
font: normal bold 100% Arial, sans-serif;
}
#sidebartop a {
color: #0033cc;
}
#sidebartop a:hover {
color: #0033cc;
}
#sidebartop a:visited {
color: #0033cc;
}
/* Sidebar Boxes
----------------------------------------------- */
.sidebar .widget {
margin:.5em 13px 1.25em;
padding:0 0px;
}
.widget-content {
margin-top: 0.5em;
}
#sidebarbottom-wrap1 {
margin:0 0 15px;
padding:10px 0 0;
color: #000000;
width: 250px;
}
#sidebarbottom-wrap2 {
padding:8px 0px 8px;
}
.sidebar h2 {
margin:0;
padding:0 0 .2em;
line-height:1.5em;
font:normal bold 100% Arial, sans-serif;
}
.sidebar ul {
list-style:none;
margin:0 0 1.25em;
padding:0 0px;
}
.sidebar ul li {
margin:0;
padding:0 0 3px 16px;
margin-bottom:3px;
border-bottom:1px dotted #ffffff;
line-height:1.4em;
}
.sidebar p {
margin:0 0 .6em;
}
#sidebar h2 {
color: #000000;
border-bottom: 1px dotted #000000;
}
/* Footer
----------------------------------------------- */
#footer-wrap1 {
clear:both;
margin:0;
padding:15px 0 0;
}
#footer-wrap2 {
padding:8px 0 0;
color:#ffffff;
}
#footer {
padding:8px 15px 8px;
}
#footer hr {display:none;}
#footer p {margin:0;}
#footer a {color:#ffffff;}
/** Page structure tweaks for layout editor wireframe */
body#layout #main-wrap1,
body#layout #sidebar-wrap,
body#layout #header-wrapper {
margin-top: 0;
}
body#layout #header, body#layout #header-wrapper,
body#layout #outer-wrapper {
margin-left:0,
margin-right: 0;
padding: 0;
}
body#layout #outer-wrapper {
width: 730px;
}
body#layout #footer-wrap1 {
padding-top: 0;
}
div.topbar {
font-size:smaller;
margin-right: -5px;
text-align:right;
white-space:nowrap;
}
div.header {
margin-bottom: 9px;
margin-left: -2px;
position:relative;
zoom: 1
}
div.header img.logo {
border: 0;
float:left;
}
div.header div.headercontent {
float:right;
margin-top:17px;
}
div.header:after{
content:".";
display:block;
height:0;
clear:both;
visibility:hidden;
}
div.pagetitle {
font-weight:bold;
}
.footer {
color: #666;
font-size: smaller;
margin-top: 40px;
text-align: center;
}
table#signupform {
left: -5px;
top: -7px;
position:relative;
}
table#signupform td{
padding: 7px 5px;
}
table#signupform td table td{
padding: 1px;
}
hr {
border: 0;
background-color:#DDDDDD;
height: 1px;
width: 100%;
text-align: left;
margin: 5px;
}
#main {
width: 960px;
margin: auto;
}
body {
margin-top: 0;
}
#masthead-container {
border-bottom: 1px solid #ccc;
margin: 0 auto 0.8333em;
width: 960px;
padding-top: 10px;
}
#masthead {
margin: 0 auto;
padding: 0 0 0.38462em; /* 9px 0px 5px @ 13px font-size */
}
#masthead-main {
float: left;
}
#masthead-search {
padding: 0.23077em 0.23077em; /* 2px 3px @ 13px font-size */
margin: 0.23077em 0; /* 3px 0px @ 13px font-size */
line-height: 2.07692em; /* 27px @ 13px font-size */
background: #EAEAEA;
border: 1px solid #CCC;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
border-radius: 3px;
}
a:link, a:visited {
color: #03c;
text-decoration: none;
}
form {
padding: 0;
}
.search-wrapper {
margin-right: -0.23em;
}
.search-term {
border: 1px solid #666;
height: 1.5em;
display: inline;
padding: 4px 1px 1px 1px;
width: 25em;
vertical-align: top;
float: left;
}
/* base button styles */
/* use inline-block if possible, simulate for FF2, reset for IE6 and IE7 */
.yt-button, a.yt-button {
padding: 0 0.8333em;
margin: 0 0.33em;
vertical-align: middle;
white-space: nowrap;
text-decoration: none;
color: #039;
background: #d8d8d8 url("/web/20091204014937im_/http://youtube-global.blogspot.com/youtube/youtube_master.png") repeat-x center -802px;
border: 1px solid #999;
-webkit-border-radius: 3px;
border-radius: 3px;
cursor: pointer;
display: -moz-inline-box;
display: inline-block;
*display: inline;
font-family: Arial, sans-serif;
}
/* fix rounded corners for FF2 */
html>body .yt-button, tt:-moz-any-link {
-moz-border-radius: 3px;
-moz-border-radius-bottomleft: 5px;
-moz-border-radius-bottomright: 5px;
}
/* reset rounded corners for FF3 */
html>body .yt-button, tt:-moz-any-link, tt:default {
-moz-border-radius: 3px;
}
/* define button height, fix for IE6 and IE7 */
.yt-button span {
font-size: 90%;
line-height: 1.9166em;
height: 1.9166em;
*display: inline-block;
}
/* fix height for FF2 */
html>body .yt-button span, tt:-moz-any-link {
padding-top: .3333em;
line-height: 1.75em;
}
/* reset height for FF3 */
html>body .yt-button span, tt:-moz-any-link, tt:default {
padding-top: 0;
line-height: 1.9166em;
}
/* fix height for IE7 */
*:first-child+html .yt-button span {
padding-top: 0;
line-height: 1.75em;
}
/* variant button types (e.g. colors) */
.yt-button-primary, a.yt-button-primary {
font-weight: bold;
color: #039;
background: #c6d7f3 url("/web/20091204014937im_/http://youtube-global.blogspot.com/youtube/youtube_master.png") repeat-x center -1602px;
border-color: #A0B1DC;
}
.yt-button-urgent, a.yt-button-urgent {
font-weight: bold;
color: #994800;
background: #FED81C url("/web/20091204014937im_/http://youtube-global.blogspot.com/youtube/youtube_master.png") repeat-x center -2202px;
border-color: #ECC101;
}
/* button and dropdown hover states */
.yt-button:hover, .yt-dropdown:hover {
text-decoration: none;
}
.yt-button:hover span, .yt-dropdown:hover .yt-button span {
text-decoration: underline;
}
.yt-button:hover, .yt-dropdown:hover .yt-button {
background-position: center -1002px;
}
.yt-button-primary:hover, .yt-dropdown-primary:hover .yt-dropdown-btn {
background-position: center -1802px;
}
.yt-button-urgent:hover, .yt-dropdown-urgent:hover .yt-dropdown-btn {
background-position: center -2402px;
}
#masthead .search-form {
display: inline;
position: relative; /* fix yt-button in IE7 */
}
#masthead-nav-main {
line-height: 1.53846em; /* 20px @ 13px font-size */
font-weight: bold;
text-align: left;
padding-left: 5px;
}
#masthead-nav-main a:hover {
text-decoration: underline;
}
#masthead-nav-main a {
margin-right: 1em;
text-decoration: none;
}
.logo{
float: left;
display: block;
margin: 0 18px 0 0;
}
.logo img{
width: 110px;
height: 54px;
background: white url('https://web.archive.org/web/20091204014937im_/http://s.ytimg.com/yt/img/master.png') no-repeat scroll 0 0;
}

--></style>
<script type="text/javascript">
if (window.jstiming) window.jstiming.load.tick('headEnd');
</script><script type="text/javascript" src="./YouTube Blog_files/XFBML"></script><link rel="stylesheet" type="text/css" href="./YouTube Blog_files/connect-css"><script type="text/javascript" src="./YouTube Blog_files/saved_resource"></script><script type="text/javascript" id="_0g2saspau" charset="UTF-8" src="./YouTube Blog_files/load"></script><link type="text/css" href="./YouTube Blog_files/default.css" rel="stylesheet"><script type="text/javascript" src="./YouTube Blog_files/default+en.I.js.download"></script></head>
<body><!-- BEGIN WAYBACK TOOLBAR INSERT -->
<script>__wm.rw(0);</script>
<div id="wm-ipp-base" lang="en" style="display: block; direction: ltr; height: 1px;"><template shadowrootmode="closed"><div id="wm-ipp" style="position:fixed;left:0;top:0;right:0;">
<div id="donato" style="position:relative;width:100%;">
  <div id="donato-base">
    <iframe id="donato-if" src="https://archive.org/includes/donate.php?as_page=1&amp;platform=wb&amp;referer=https%3A//web.archive.org/web/20091204014937/http%3A//youtube-global.blogspot.com/" scrolling="no" frameborder="0" style="width:100%; height:100%">
    </iframe>
  </div>
</div><div id="wm-ipp-inside" style="display: none;">
  <div id="wm-toolbar" style="position:relative;display:flex;flex-flow:row nowrap;justify-content:space-between;">
    <div id="wm-logo" style="/*width:110px;*/padding-top:12px;">
      <a href="https://web.archive.org/web/" title="Wayback Machine home page"><img src="https://web-static.archive.org/_static/images/toolbar/wayback-toolbar-logo-200.png" srcset="https://web-static.archive.org/_static/images/toolbar/wayback-toolbar-logo-100.png, https://web-static.archive.org/_static/images/toolbar/wayback-toolbar-logo-150.png 1.5x, https://web-static.archive.org/_static/images/toolbar/wayback-toolbar-logo-200.png 2x" alt="Wayback Machine" style="width:100px" border="0"></a>
    </div>
    <div class="c" style="display:flex;flex-flow:column nowrap;justify-content:space-between;flex:1;">
      <form class="u" style="display:flex;flex-direction:row;flex-wrap:nowrap;" target="_top" method="get" action="https://web.archive.org/web/submit" name="wmtb" id="wmtb"><input type="text" name="url" id="wmtbURL" value="http://youtube-global.blogspot.com/" onfocus="this.focus();this.select();" style="flex:1;" autocomplete="off"><input type="hidden" name="type" value="replay"><input type="hidden" name="date" value="20091204014937"><input type="submit" value="Go">
      </form>
      <div style="display:flex;flex-flow:row nowrap;align-items:flex-end;">
                <div class="s" id="wm-nav-captures" style="flex:1;"><a class="t" href="https://web.archive.org/web/*/http://youtube-global.blogspot.com/" title="See a list of every capture for this URL">3,194 captures</a><div class="r" title="Timespan for captures of this URL">12 Jul 2009 - 22 Jan 2025</div></div>
        <div class="k">
          <a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/" id="wm-graph-anchor">
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
            <td class="b" nowrap="nowrap"><a href="https://web.archive.org/web/20091101141450/http://youtube-global.blogspot.com/" title="01 Nov 2009"><strong>Nov</strong></a></td>
            <td class="c" id="displayMonthEl" title="You are here: 01:49:37 Dec 04, 2009">DEC</td>
            <td class="f" nowrap="nowrap"><a href="https://web.archive.org/web/20100121174551/http://youtube-global.blogspot.com/" title="21 Jan 2010"><strong>Jan</strong></a></td>
          </tr>
          <!-- NEXT/PREV CAPTURE NAV AND DAY OF MONTH INDICATOR -->
          <tr class="d">
            <td class="b" nowrap="nowrap"><a href="https://web.archive.org/web/20091124022714/http://youtube-global.blogspot.com/" title="02:27:14 Nov 24, 2009"><img src="https://web-static.archive.org/_static/images/toolbar/wm_tb_prv_on.png" alt="Previous capture" width="14" height="16" border="0"></a></td>
            <td class="c" id="displayDayEl" style="width:34px;font-size:22px;white-space:nowrap;" title="You are here: 01:49:37 Dec 04, 2009">04</td>
            <td class="f" nowrap="nowrap"><a href="https://web.archive.org/web/20091209194951/http://youtube-global.blogspot.com/" title="19:49:51 Dec 09, 2009"><img src="https://web-static.archive.org/_static/images/toolbar/wm_tb_nxt_on.png" alt="Next capture" width="14" height="16" border="0"></a></td>
          </tr>
          <!-- NEXT/PREV YEAR NAV AND YEAR INDICATOR -->
          <tr class="y">
            <td class="b" nowrap="nowrap">2008</td>
            <td class="c" id="displayYearEl" title="You are here: 01:49:37 Dec 04, 2009">2009</td>
            <td class="f" nowrap="nowrap"><a href="https://web.archive.org/web/20101207235249/http://youtube-global.blogspot.com/" title="07 Dec 2010"><strong>2010</strong></a></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="r" style="display:flex;flex-flow:column nowrap;align-items:flex-end;justify-content:space-between;">
      <div id="wm-btns" style="text-align:right;height:23px;">
                <span class="xxs">
          <div id="wm-save-snapshot-success">success</div>
          <div id="wm-save-snapshot-fail">fail</div>
          <a id="wm-save-snapshot-open" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/#" title="Share via My Web Archive" style="display: none;">
            <span class="iconochive-web"></span>
          </a>
          <a href="https://archive.org/account/login.php" title="Sign In" id="wm-sign-in" style="display: inline-block;">
            <span class="iconochive-person"></span>
          </a>
          <span id="wm-save-snapshot-in-progress" class="iconochive-web" style="display: none;"></span>
        </span>
                <a class="xxs" href="http://faq.web.archive.org/" title="Get some help using the Wayback Machine" style="top:-6px;"><span class="iconochive-question" style="color:rgb(87,186,244);font-size:160%;"></span></a>
        <a id="wm-tb-close" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/#close" style="top:-2px;" title="Close the toolbar"><span class="iconochive-remove-circle" style="color:#888888;font-size:240%;"></span></a>
      </div>
      <div id="wm-share" class="xxs">
        <a href="https://web.archive.org/web/20091204014937/http://web.archive.org/screenshot/http://youtube-global.blogspot.com/" id="wm-screenshot" title="screenshot" style="visibility: hidden;">
          <span class="wm-icon-screen-shot"></span>
        </a>
        <a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/#" id="wm-video" title="video">
          <span class="iconochive-movies"></span>
        </a>
        <a id="wm-share-facebook" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/#" data-url="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/" title="Share on Facebook" style="margin-right:5px;" target="_blank"><span class="iconochive-facebook" style="color:#3b5998;font-size:160%;"></span></a>
        <a id="wm-share-twitter" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/#" data-url="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/" title="Share on Twitter" style="margin-right:5px;" target="_blank"><span class="iconochive-twitter" style="color:#1dcaff;font-size:160%;"></span></a>
      </div>
      <div style="padding-right:2px;text-align:right;white-space:nowrap;">
        <a id="wm-expand" class="wm-btn wm-closed" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/#expand"><span id="wm-expand-icon" class="iconochive-down-solid"></span> <span class="xxs" style="font-size:80%;">About this capture</span></a>
      </div>
    </div>
  </div>
    <div id="wm-capinfo" style="border-top:1px solid #777;display:none; overflow: hidden">
        <div id="wm-capinfo-notice" source="api"></div>
                <div id="wm-capinfo-collected-by">
    <div style="background-color:#666;color:#fff;font-weight:bold;text-align:center">COLLECTED BY</div>
    <div style="padding:3px;position:relative" id="wm-collected-by-content">
            <div style="display:inline-block;vertical-align:top;width:50%;">
      <span class="c-logo" style="background-image:url(https://archive.org/services/img/alexacrawls);"></span>
    Organization: <a style="color:#33f;" href="https://archive.org/details/alexacrawls" target="_new"><span class="wm-title">Alexa Crawls</span></a>
    <div style="max-height:75px;overflow:hidden;position:relative;">
    <div style="position:absolute;top:0;left:0;width:100%;height:75px;background:linear-gradient(to bottom,rgba(255,255,255,0) 0%,rgba(255,255,255,0) 90%,rgba(255,255,255,255) 100%);"></div>
    Starting in 1996, <a href="http://www.alexa.com/">Alexa Internet</a> has been donating their crawl data to the Internet Archive.  Flowing in every day, these data are added to the <a href="http://web.archive.org/">Wayback Machine</a> after an embargo period.
  </div>
        </div>
      <div style="display:inline-block;vertical-align:top;width:49%;">
      <span class="c-logo" style="background-image:url(https://archive.org/services/img/alexacrawls)"></span>
    <div>Collection: <a style="color:#33f;" href="https://archive.org/details/alexacrawls" target="_new"><span class="wm-title">Alexa Crawls</span></a></div>
    <div style="max-height:75px;overflow:hidden;position:relative;">
    <div style="position:absolute;top:0;left:0;width:100%;height:75px;background:linear-gradient(to bottom,rgba(255,255,255,0) 0%,rgba(255,255,255,0) 90%,rgba(255,255,255,255) 100%);"></div>
    Starting in 1996, <a href="http://www.alexa.com/">Alexa Internet</a> has been donating their crawl data to the Internet Archive.  Flowing in every day, these data are added to the <a href="http://web.archive.org/">Wayback Machine</a> after an embargo period.
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
  </div></div></div><link rel="stylesheet" type="text/css" href="./YouTube Blog_files/banner-styles.css"><link rel="stylesheet" type="text/css" href="./YouTube Blog_files/iconochive.css"><div class="wb-autocomplete-suggestions " style="left: 0px; top: 0px; width: 0px;"></div></template>
</div><div id="wm-ipp-print">The Wayback Machine - https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/</div>
<script type="text/javascript">//<![CDATA[
__wm.bt(750,27,25,2,"web","http://youtube-global.blogspot.com/","20091204014937",1996,"https://web-static.archive.org/_static/",["https://web-static.archive.org/_static/css/banner-styles.css?v=p7PEIJWi","https://web-static.archive.org/_static/css/iconochive.css?v=3PDvdIFv"], false);
  __wm.rw(1);
//]]></script>
<!-- END WAYBACK TOOLBAR INSERT -->
 
<div class="navbar section" id="navbar"><div class="widget Navbar" id="Navbar1"><script type="text/javascript">
    function setAttributeOnload(object, attribute, val) {
      if(window.addEventListener) {
        window.addEventListener("load",
          function(){ object[attribute] = val; }, false);
      } else {
        window.attachEvent('onload', function(){ object[attribute] = val; });
      }
    }
  </script>
<iframe src="./YouTube Blog_files/navbar.html" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" height="30px" width="100%" id="navbar-iframe" allowtransparency="true" title="Blogger Navigation and Search" data-ruffle-polyfilled=""></iframe>
<div></div></div></div>
<div>

<div id="outer-wrapper">
<a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/"><img height="150" src="./YouTube Blog_files/blog_US_960x150.jpg" width="960"></a>
<div id="crosscol-wrapper" style="text-align:center">
<div class="crosscol section" id="crosscol"></div>
</div>
<div id="main-wrap1">
<div id="main-wrap2">
<div class="main section" id="main"><div id="uds-searchControl"><a name="uds-search-results"></a><div id="uds-searchResults"><div class="gsc-control"><div class="gsc-tabsAreaInvisible"><div class=" gsc-tabHeader gsc-tabhActive">This Blog</div><span class="gs-spacer"> </span></div><div class="gsc-resultsbox-invisible"><div class="gsc-resultsRoot gsc-tabData gsc-tabdActive"><table cellspacing="0" cellpadding="0" class="gsc-resultsHeader"><tbody><tr><td class="gsc-twiddleRegionCell"><div class="gsc-twiddle"><div class="gsc-title">This Blog</div></div><div class="gsc-stats"></div><div class="gsc-results-selector gsc-more-results-active"><div class="gsc-result-selector gsc-one-result" title="show one result">&nbsp;</div><div class="gsc-result-selector gsc-more-results" title="show more results">&nbsp;</div><div class="gsc-result-selector gsc-all-results" title="show all results">&nbsp;</div></div></td><td class="gsc-configLabelCell"><span class="gsc-configLabel gsc-twiddle-closed" title="settings">&nbsp;</span></td></tr></tbody></table><div class="gsc-config gsc-blogConfig" style="display: none;"><form class="gsc-config gsc-blogConfig"></form></div><div class="gsc-results gsc-blogResult"></div></div></div></div></div><div id="uds-searchClearResults" class="gsc-clear-button" style="display: none;">&nbsp;</div></div><div class="widget Blog" id="Blog1">
<div class="blog-posts hfeed">
<!-- google_ad_section_start(name=default) -->
<h2 class="date-header">Thursday, December 3, 2009</h2>
<div class="post">
<a name="8907550917921874388"></a>
<h3 class="post-title">
<a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/12/introducing-feather-lighter-way-to.html">Introducing Feather: A Lighter Way to Browse Videos</a>
</h3>
<div class="post-header-line-1"></div>
<div class="post-body">
<p></p><div>One of our priorities is ensuring that videos always load and playback quickly. However, a consequence of rolling out higher quality video, HD and, more recently, <a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/11/1080p-hd-comes-to-youtube.html">1080p</a>, is that playbacks might suffer if bandwidth or computer processing power is low. There are also a few countries where bandwidth is at a premium and videos can take several seconds to start playing.<br><br>Let's face it: in this age of instant gratification, even several seconds of loading time can feel like an eternity.<br><br>With all of this in mind, "Feather," an ultra light watch page, launches today in <a href="https://web.archive.org/web/20091204014937/http://www.youtube.com/testtube" id="b6em" target="_blank" title="TestTube">TestTube</a>, our ideas incubator where we test out new products. As you can see by the below screenshot, the player still features prominently, but will default to standard quality. Related videos, comments and other familiar features from the current watch page are kept to a minimum. All of this results in a user experience that aims to keep things simple and the videos loading and playing quickly. If we see adoption go up along with improvements in latency, we'll look to roll this out of TestTube and make it more widely available.<br></div><br><div id="e69a" style="text-align: center;"><img src="./YouTube Blog_files/ddvs693j_97dcc7grft_b" style="height: 486.939px; width: 400px;"></div><br><br><div>Take Feather for a test drive <a href="https://web.archive.org/web/20091204014937/http://www.youtube.com/feather_beta">here<span style="text-decoration: underline;"></span></a>.</div><br><i>Chris Zacharias, Engineer, recently watched <a href="https://web.archive.org/web/20091204014937/http://www.youtube.com/watch?v=bJDCMth8poM">"TWO DOOR CINEMA CLUB - I Can Talk."</a><span><span style="background-color: rgb(255, 255, 0);"></span></span></i><p></p>
<div style="clear: both;"></div>
</div>
<div class="post-footer">
<p class="post-footer-line post-footer-line-1">
<span class="post-author">
</span>
<span class="post-timestamp">
</span>
<span class="post-comment-link">
<a class="comment-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/12/introducing-feather-lighter-way-to.html#comments" onclick="">14
comments</a>
</span>
<span class="post-icons">
<span class="item-action">
<a href="https://web.archive.org/web/20091204014937/http://www.blogger.com/email-post.g?blogID=8913912091036362264&amp;postID=8907550917921874388" title="Email Post">
<span class="email-post-icon">&nbsp;</span>
</a>
</span>
<span class="item-control blog-admin pid-802314338">
<a href="https://web.archive.org/web/20091204014937/http://www.blogger.com/post-edit.g?blogID=8913912091036362264&amp;postID=8907550917921874388" title="Edit Post">
<img alt="" class="icon-action" height="18" src="./YouTube Blog_files/icon18_edit_allbkg.gif" width="18">
</a>
</span>
</span>
</p>
<p class="post-footer-line post-footer-line-2">
<span class="post-labels">
Labels:
<a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/search/label/hd" rel="tag">hd</a>
,
<a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/search/label/product%20update" rel="tag">product update</a>
,
<a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/search/label/test%20tube" rel="tag">test tube</a>
</span>
</p>
<p class="post-footer-line post-footer-line-3"></p>
</div>
</div>










</div>
<div class="blog-pager" id="blog-pager">
<span id="blog-pager-older-link">
<a class="blog-pager-older-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/search?updated-max=2009-11-30T13%3A00%3A00-08%3A00&amp;max-results=7" id="Blog1_blog-pager-older-link" title="Older Posts">Older Posts</a>
</span>
</div>
<div class="clear"></div>
<div class="blog-feeds">
<div class="feed-links">
Subscribe to:
<a class="feed-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/feeds/posts/default" target="_blank" type="application/atom+xml">Posts (Atom)</a>
</div>
</div>
</div></div>
</div>
</div>
<div id="sidebar-wrap">
<div id="sidebartop-wrap">
<div id="sidebartop-wrap2">
<div class="sidebar section" id="sidebartop"></div>
</div>
</div>
<div id="sidebarbottom-wrap1">
<div id="sidebarbottom-wrap2">
<div class="sidebar section" id="sidebar">
<div class="widget CustomSearch" id="CustomSearch1">
<h2 class="title">Search This Blog</h2>
<div class="widget-content" style="width:95%">
<div id="CustomSearch1_form"><form class="gsc-search-box" accept-charset="utf-8"><table cellspacing="0" cellpadding="0" class="gsc-search-box"><tbody><tr><td class="gsc-input"><input autocomplete="off" type="text" size="10" class=" gsc-input" name="search" title="search"></td><td class="gsc-search-button"><input type="submit" value="Search" class="gsc-search-button" title="search"></td></tr></tbody></table><table cellspacing="0" cellpadding="0" class="gsc-branding"><tbody><tr><td class="gsc-branding-user-defined"></td><td class="gsc-branding-text"><div class="gsc-branding-text">powered by</div></td><td class="gsc-branding-img-noclear"><img src="./YouTube Blog_files/small-logo.png" class="gsc-branding-img-noclear"></td></tr></tbody></table></form></div>
</div>
<style type="text/css">
      #uds-searchControl { width: 660px; }
      #uds-searchControl .gs-result .gs-title,
      #uds-searchControl .gs-result .gs-title *,
      #uds-searchControl .gsc-results .gsc-trailing-more-results,
      #uds-searchControl .gsc-results .gsc-trailing-more-results * {
        color:#0033cc;
      }

      #uds-searchControl .gs-result .gs-title a:visited,
      #uds-searchControl .gs-result .gs-title a:visited * {
        color:#0033cc;
      }

      #uds-searchControl .gs-relativePublishedDate,
      #uds-searchControl .gs-publishedDate {
        color: #000000;
      }

      #uds-searchControl .gs-result a.gs-visibleUrl,
      #uds-searchControl .gs-result .gs-visibleUrl {
        color: #000000;
      }

      #uds-searchControl .gsc-results {
        border-color: #ffffff;
        background-color: #ffffff;
      }

      #uds-searchControl .gsc-tabhActive {
        border-color: #ffffff;
        border-top-color: #000000;
        background-color: #ffffff;
        color: #000000;
      }

      #uds-searchControl .gsc-tabhInactive {
        border-color: #ffffff;
        background-color: transparent;
        color: #0033cc;
      }

      #uds-searchClearResults {
        border-color: #ffffff;
      }

      #uds-searchClearResults:hover {
        border-color: #000000;
      }

      #uds-searchControl .gsc-cursor-page {
        color: #0033cc;
      }

      #uds-searchControl .gsc-cursor-current-page {
        color: #000000;
      }
    </style>
<div class="clear"></div>
<span class="widget-item-control">
<span class="item-control blog-admin">
<a class="quickedit" href="https://web.archive.org/web/20091204014937/http://www.blogger.com/rearrange?blogID=8913912091036362264&amp;widgetType=CustomSearch&amp;widgetId=CustomSearch1&amp;action=editWidget" onclick="return _WidgetManager._PopupConfig(document.getElementById(&quot;CustomSearch1&quot;));" target="configCustomSearch1" title="Edit">
<img alt="" height="18" src="./YouTube Blog_files/icon18_wrench_allbkg.png" width="18">
</a>
</span>
</span>
<div class="clear"></div>
</div><div class="widget HTML" id="HTML1">
<div class="widget-content">
<p><a href="https://web.archive.org/web/20091204014937/http://feeds.feedburner.com/youtube/PKJx"><img width="88" style="border:0" alt="" src="./YouTube Blog_files/PKJx" height="26"></a></p>
</div>
<div class="clear"></div>
<span class="widget-item-control">
<span class="item-control blog-admin">
<a class="quickedit" href="https://web.archive.org/web/20091204014937/http://www.blogger.com/rearrange?blogID=8913912091036362264&amp;widgetType=HTML&amp;widgetId=HTML1&amp;action=editWidget" onclick="return _WidgetManager._PopupConfig(document.getElementById(&quot;HTML1&quot;));" target="configHTML1" title="Edit">
<img alt="" height="18" src="./YouTube Blog_files/icon18_wrench_allbkg.png" width="18">
</a>
</span>
</span>
<div class="clear"></div>
</div><div class="widget Subscribe" id="Subscribe1">
<div style="white-space:nowrap">
<h2 class="title">Subscribe To</h2>
<div class="widget-content">
<div class="subscribe-wrapper subscribe-type-POST">
<div class="subscribe expanded subscribe-type-POST" id="SW_READER_LIST_Subscribe1POST" style="display:none;">
<div class="top">
<span class="inner" onclick="return(_SW_toggleReaderList(event, &quot;Subscribe1POST&quot;));">
<img class="subscribe-dropdown-arrow" src="./YouTube Blog_files/arrow_dropdown.gif">
<img align="absmiddle" alt="" border="0" class="feed-icon" src="./YouTube Blog_files/icon_feed12.png">
Posts
</span>
<ul class="feed-reader-links">
<a class="feed-reader-link" href="https://web.archive.org/web/20091204014937/http://www.google.com/ig/add?source=bstp&amp;feedurl=http%3A%2F%2Fyoutube-global.blogspot.com%2Ffeeds%2Fposts%2Fdefault" target="_blank">
<img src="./YouTube Blog_files/subscribe-google.png">
</a>
<a class="feed-reader-link" href="https://web.archive.org/web/20091204014937/http://www.bloglines.com/sub/http://youtube-global.blogspot.com/feeds/posts/default" target="_blank">
<img src="./YouTube Blog_files/subscribe-bloglines.png">
</a>
<a class="feed-reader-link" href="https://web.archive.org/web/20091204014937/http://www.netvibes.com/subscribe.php?url=http%3A%2F%2Fyoutube-global.blogspot.com%2Ffeeds%2Fposts%2Fdefault" target="_blank">
<img src="./YouTube Blog_files/subscribe-netvibes.png">
</a>
<a class="feed-reader-link" href="https://web.archive.org/web/20091204014937/http://www.newsgator.com/ngs/subscriber/subext.aspx?url=http%3A%2F%2Fyoutube-global.blogspot.com%2Ffeeds%2Fposts%2Fdefault" target="_blank">
<img src="./YouTube Blog_files/subscribe-newsgator.png">
</a>
<a class="feed-reader-link" href="https://web.archive.org/web/20091204014937/http://add.my.yahoo.com/content?url=http%3A%2F%2Fyoutube-global.blogspot.com%2Ffeeds%2Fposts%2Fdefault" target="_blank">
<img src="./YouTube Blog_files/subscribe-yahoo.png">
</a>
<a class="feed-reader-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/feeds/posts/default" target="_blank">
<img align="absmiddle" class="feed-icon" src="./YouTube Blog_files/icon_feed12.png">
                Atom
              </a>
</ul>
</div>
<div class="bottom"></div>
</div>
<div class="subscribe" id="SW_READER_LIST_CLOSED_Subscribe1POST" onclick="return(_SW_toggleReaderList(event, &quot;Subscribe1POST&quot;));">
<div class="top">
<span class="inner">
<img class="subscribe-dropdown-arrow" src="./YouTube Blog_files/arrow_dropdown.gif">
<span onclick="return(_SW_toggleReaderList(event, &quot;Subscribe1POST&quot;));">
<img align="absmiddle" alt="" border="0" class="feed-icon" src="./YouTube Blog_files/icon_feed12.png">
Posts
</span>
</span>
</div>
<div class="bottom"></div>
</div>
</div>
<div class="subscribe-wrapper subscribe-type-COMMENT">
<div class="subscribe expanded subscribe-type-COMMENT" id="SW_READER_LIST_Subscribe1COMMENT" style="display:none;">
<div class="top">
<span class="inner" onclick="return(_SW_toggleReaderList(event, &quot;Subscribe1COMMENT&quot;));">
<img class="subscribe-dropdown-arrow" src="./YouTube Blog_files/arrow_dropdown.gif">
<img align="absmiddle" alt="" border="0" class="feed-icon" src="./YouTube Blog_files/icon_feed12.png">
All Comments
</span>
<ul class="feed-reader-links">
<a class="feed-reader-link" href="https://web.archive.org/web/20091204014937/http://www.google.com/ig/add?source=bstp&amp;feedurl=http%3A%2F%2Fyoutube-global.blogspot.com%2Ffeeds%2Fcomments%2Fdefault" target="_blank">
<img src="./YouTube Blog_files/subscribe-google.png">
</a>
<a class="feed-reader-link" href="https://web.archive.org/web/20091204014937/http://www.bloglines.com/sub/http://youtube-global.blogspot.com/feeds/comments/default" target="_blank">
<img src="./YouTube Blog_files/subscribe-bloglines.png">
</a>
<a class="feed-reader-link" href="https://web.archive.org/web/20091204014937/http://www.netvibes.com/subscribe.php?url=http%3A%2F%2Fyoutube-global.blogspot.com%2Ffeeds%2Fcomments%2Fdefault" target="_blank">
<img src="./YouTube Blog_files/subscribe-netvibes.png">
</a>
<a class="feed-reader-link" href="https://web.archive.org/web/20091204014937/http://www.newsgator.com/ngs/subscriber/subext.aspx?url=http%3A%2F%2Fyoutube-global.blogspot.com%2Ffeeds%2Fcomments%2Fdefault" target="_blank">
<img src="./YouTube Blog_files/subscribe-newsgator.png">
</a>
<a class="feed-reader-link" href="https://web.archive.org/web/20091204014937/http://add.my.yahoo.com/content?url=http%3A%2F%2Fyoutube-global.blogspot.com%2Ffeeds%2Fcomments%2Fdefault" target="_blank">
<img src="./YouTube Blog_files/subscribe-yahoo.png">
</a>
<a class="feed-reader-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/feeds/comments/default" target="_blank">
<img align="absmiddle" class="feed-icon" src="./YouTube Blog_files/icon_feed12.png">
                Atom
              </a>
</ul>
</div>
<div class="bottom"></div>
</div>
<div class="subscribe" id="SW_READER_LIST_CLOSED_Subscribe1COMMENT" onclick="return(_SW_toggleReaderList(event, &quot;Subscribe1COMMENT&quot;));">
<div class="top">
<span class="inner">
<img class="subscribe-dropdown-arrow" src="./YouTube Blog_files/arrow_dropdown.gif">
<span onclick="return(_SW_toggleReaderList(event, &quot;Subscribe1COMMENT&quot;));">
<img align="absmiddle" alt="" border="0" class="feed-icon" src="./YouTube Blog_files/icon_feed12.png">
All Comments
</span>
</span>
</div>
<div class="bottom"></div>
</div>
</div>
<div style="clear:both"></div>
</div>
</div>
<div class="clear"></div>
<span class="widget-item-control">
<span class="item-control blog-admin">
<a class="quickedit" href="https://web.archive.org/web/20091204014937/http://www.blogger.com/rearrange?blogID=8913912091036362264&amp;widgetType=Subscribe&amp;widgetId=Subscribe1&amp;action=editWidget" onclick="return _WidgetManager._PopupConfig(document.getElementById(&quot;Subscribe1&quot;));" target="configSubscribe1" title="Edit">
<img alt="" height="18" src="./YouTube Blog_files/icon18_wrench_allbkg.png" width="18">
</a>
</span>
</span>
<div class="clear"></div>
</div><div class="widget LinkList" id="LinkList4">
<h2>Community Gatherings</h2>
<div class="widget-content">
<ul>
<li><a href="https://web.archive.org/web/20091204014937/http://www.youtube.com/watch?v=6M7uQMjVaKY">Oakland, CA - Dec. 12, 2009</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://www.youtube.com/youtubegatherings">Past Gatherings</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://www.youtube.com/youtubegatherings"><b>Hosting a meetup? Leave a comment on this channel with details</b></a></li>
</ul>
<div class="clear"></div>
<span class="widget-item-control">
<span class="item-control blog-admin">
<a class="quickedit" href="https://web.archive.org/web/20091204014937/http://www.blogger.com/rearrange?blogID=8913912091036362264&amp;widgetType=LinkList&amp;widgetId=LinkList4&amp;action=editWidget" onclick="return _WidgetManager._PopupConfig(document.getElementById(&quot;LinkList4&quot;));" target="configLinkList4" title="Edit">
<img alt="" height="18" src="./YouTube Blog_files/icon18_wrench_allbkg.png" width="18">
</a>
</span>
</span>
<div class="clear"></div>
</div>
</div><div class="widget Feed" id="Feed1">
<h2>Twitter / youtube</h2>
<div class="widget-content" id="Feed1_feedItemListDisplay">
<span style="filter: alpha(25); opacity: 0.25;">
<a href="https://web.archive.org/web/20091204014937/http://twitter.com/statuses/user_timeline/10228272.rss">Loading...</a>
</span>
</div>
<div class="clear"></div>
<span class="widget-item-control">
<span class="item-control blog-admin">
<a class="quickedit" href="https://web.archive.org/web/20091204014937/http://www.blogger.com/rearrange?blogID=8913912091036362264&amp;widgetType=Feed&amp;widgetId=Feed1&amp;action=editWidget" onclick="return _WidgetManager._PopupConfig(document.getElementById(&quot;Feed1&quot;));" target="configFeed1" title="Edit">
<img alt="" height="18" src="./YouTube Blog_files/icon18_wrench_allbkg.png" width="18">
</a>
</span>
</span>
<div class="clear"></div>
</div><div class="widget LinkList" id="LinkList1">
<h2>What We're Watching</h2>
<div class="widget-content">
<ul>
<li><a href="https://web.archive.org/web/20091204014937/http://www.youtube.com/adoptafeature">Adopt a Feature</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://www.youtube.com/citizentube">Citizentube</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://www.youtube.com/user/EDU">EDU</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://www.youtube.com/movies">Movies</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://www.youtube.com/user/MusicTuesday">MusicTuesday</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://www.youtube.com/news">News</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://www.youtube.com/user/ytscreeningroom">Screening Room</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://www.youtube.com/shows">Shows</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://www.youtube.com/youtube">YouTube Channel</a></li>
</ul>
<div class="clear"></div>
<span class="widget-item-control">
<span class="item-control blog-admin">
<a class="quickedit" href="https://web.archive.org/web/20091204014937/http://www.blogger.com/rearrange?blogID=8913912091036362264&amp;widgetType=LinkList&amp;widgetId=LinkList1&amp;action=editWidget" onclick="return _WidgetManager._PopupConfig(document.getElementById(&quot;LinkList1&quot;));" target="configLinkList1" title="Edit">
<img alt="" height="18" src="./YouTube Blog_files/icon18_wrench_allbkg.png" width="18">
</a>
</span>
</span>
<div class="clear"></div>
</div>
</div><div class="widget LinkList" id="LinkList2">
<h2>What We're Reading</h2>
<div class="widget-content">
<ul>
<li><a href="https://web.archive.org/web/20091204014937/http://www.citizentube.com/">Citizentube</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://www.youtube.com/creatorscorner">Creator's Corner</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://www.youtube.com/bizblog">Partner &amp; Advertiser Blog</a></li>
</ul>
<div class="clear"></div>
<span class="widget-item-control">
<span class="item-control blog-admin">
<a class="quickedit" href="https://web.archive.org/web/20091204014937/http://www.blogger.com/rearrange?blogID=8913912091036362264&amp;widgetType=LinkList&amp;widgetId=LinkList2&amp;action=editWidget" onclick="return _WidgetManager._PopupConfig(document.getElementById(&quot;LinkList2&quot;));" target="configLinkList2" title="Edit">
<img alt="" height="18" src="./YouTube Blog_files/icon18_wrench_allbkg.png" width="18">
</a>
</span>
</span>
<div class="clear"></div>
</div>
</div><div class="widget BlogArchive" id="BlogArchive1">
<h2>Blog Archive</h2>
<div class="widget-content">
<div id="ArchiveList">
<div id="BlogArchive1_ArchiveList">
<ul>
<li class="archivedate expanded">
<a class="toggle" href="javascript:void(0)">
<span class="zippy toggle-open">▼&nbsp;</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/search?updated-min=2009-01-01T00%3A00%3A00-08%3A00&amp;updated-max=2010-01-01T00%3A00%3A00-08%3A00&amp;max-results=50">2009</a>
<span class="post-count" dir="ltr">(261)</span>
<ul>
<li class="archivedate expanded">
<a class="toggle" href="javascript:void(0)">
<span class="zippy toggle-open">▼&nbsp;</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009_12_01_archive.html">December</a>
<span class="post-count" dir="ltr">(6)</span>
<ul class="posts">
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/12/introducing-feather-lighter-way-to.html">Introducing Feather: A Lighter Way to Browse Video...</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/12/connect-with-world-leaders-on-climate.html">Connect with World Leaders on the Climate Debate</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/12/learn-how-to-be-tech-reviewer.html">Learn How to Be a Tech Reviewer</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/12/count-down-memorable-videos-of-year.html">Count Down Memorable Videos of the Year</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/12/live-stream-to-save-lives-alicia-keys.html">A Live Stream to Save Lives: Alicia Keys and YouTu...</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/12/join-morgan-freeman-to-bring-human.html">Join Morgan Freeman to Bring Human Rights Work to ...</a></li>
</ul>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009_11_01_archive.html">November</a>
<span class="post-count" dir="ltr">(20)</span>
<ul class="posts">
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/11/spaghetti-western-viewing-party-tonight.html">Spaghetti Western Viewing Party Tonight</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/11/youtube-community-gives-thanks-to-those.html">YouTube Community Gives Thanks to Those That Help ...</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/11/giving-thanks.html">Giving Thanks</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/11/alicia-keys-live-on-youtube.html">Alicia Keys Live! on YouTube</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/11/iraqi-government-on-youtube.html">Iraqi Government on YouTube</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/11/from-bacon-infused-drinks-to-saving.html">From Bacon-Infused Drinks to Saving Money -- What ...</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/11/innovation-in-accessibility.html">Innovation in accessibility</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/11/hub-for-parents-launches.html">Hub for parents launches</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/11/curator-of-month-michael-wesch.html">Curator of the Month: Michael Wesch</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/11/connecting-citizens-and-journalists.html">Connecting citizens and journalists with YouTube D...</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/11/holiday-solutions-channel-debuts.html">"Holiday Solutions" channel debuts</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/11/1080p-hd-comes-to-youtube.html">1080p HD Is Coming to YouTube</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/11/how-we-think-about-social.html">How We Think About Social</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/11/youtube-salutes-vets-and-their.html">YouTube Salutes Vets and Their Supporters</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/11/were-hiring-engineers.html">We're Hiring Engineers!</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/11/last-chance-for-bram-stokers-dracula.html">Last Chance for "Bram Stoker's Dracula"</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/11/android-20-introduces-improvements-for.html">Android 2.0 Introduces Improvements for Mobile Vid...</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/11/funny-or-die-joins-youtube.html">Funny or Die Joins YouTube</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/11/help-hungry-this-thanksgiving.html">Help the Hungry This Thanksgiving</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/11/can-you-beat-michael-phelps.html">Can You Beat Michael Phelps?</a></li>
</ul>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009_10_01_archive.html">October</a>
<span class="post-count" dir="ltr">(23)</span>
<ul class="posts">
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/10/now-playing-bram-stokers-dracula.html">Now Playing: "Bram Stoker's Dracula"</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/10/doha-tribeca-film-festival-hits-youtube.html">The Doha Tribeca Film Festival Hits the YouTube Sc...</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/10/we-interrupt-this-broadcast-to-thank.html">We Interrupt This Broadcast to Thank the PowerPost...</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/10/today-animals-take-center-stage-on.html">Today, Animals Take Center Stage on the Homepage</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/10/u2-plays-live-on-youtube-tonight.html">U2 Plays Live on YouTube</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/10/hollywood-honors-top-come-clean-4-congo.html">Hollywood Honors Top "Come Clean 4 Congo" Video</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/10/celebrating-free-expression-20-years.html">Celebrating free expression 20 years after the fal...</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/10/thanks-youtube-140000-children-have.html">Thanks, YouTube! 140,000 Children Have Lunch Becau...</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/10/search-comments-on-youtube-in-real-time.html">Search Comments on YouTube in Real-Time</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/10/u2-on-youtube-live.html">U2 on YouTube -- Live!</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/10/wanted-travel-videos-of-american.html">Wanted: Travel Videos of American Journeys</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/10/taxi-driver-viewing-party-tonight.html">Taxi Driver Viewing Party Tonight!</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/10/can-billion-views-help-billion-people.html">Can a Billion Views Help a Billion People?</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/10/key-to-curation-is-curiosity-meet-our.html">"The Key to Curation Is Curiosity" Meet Our Curato...</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/10/go-mobile-its-tips-tricks-week-for.html">Go Mobile! It's Tips &amp; Tricks Week for YouTube on ...</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/10/y000000000utube.html">Y,000,000,000uTube</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/10/you-talking-to-me.html">You Talking To Me?</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/10/webinar-on-basic-shooting-techniques.html">Webinar on Basic Shooting Techniques: Join Us!</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/10/follow-announcement-of-nobel-prizes-in.html">Follow the Announcement of Nobel Prizes in Real-Ti...</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/10/inside-user-research-at-youtube.html">Inside User Research at YouTube</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/10/release-notes-10109.html">Release Notes: 10/1/09</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/09/global-classroom-gets-bigger-with.html">The Global Classroom on YouTube EDU</a></li>
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/10/wanted-puppy-and-kitty-videos-for-good_2651.html">Wanted: Puppy and Kitty Videos for Good</a></li>
</ul>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009_09_01_archive.html">September</a>
<span class="post-count" dir="ltr">(20)</span>
<ul class="posts">
<li><a href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009/09/hackday-yields-easier-way-of-sharing.html">Hackday Yields Easier Way of Sharing Private Video...</a></li>
</ul>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009_08_01_archive.html">August</a>
<span class="post-count" dir="ltr">(24)</span>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009_07_01_archive.html">July</a>
<span class="post-count" dir="ltr">(21)</span>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009_06_01_archive.html">June</a>
<span class="post-count" dir="ltr">(26)</span>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009_05_01_archive.html">May</a>
<span class="post-count" dir="ltr">(20)</span>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009_04_01_archive.html">April</a>
<span class="post-count" dir="ltr">(25)</span>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009_03_01_archive.html">March</a>
<span class="post-count" dir="ltr">(31)</span>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009_02_01_archive.html">February</a>
<span class="post-count" dir="ltr">(24)</span>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2009_01_01_archive.html">January</a>
<span class="post-count" dir="ltr">(21)</span>
</li>
</ul>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/search?updated-min=2008-01-01T00%3A00%3A00-08%3A00&amp;updated-max=2009-01-01T00%3A00%3A00-08%3A00&amp;max-results=50">2008</a>
<span class="post-count" dir="ltr">(251)</span>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2008_12_01_archive.html">December</a>
<span class="post-count" dir="ltr">(20)</span>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2008_11_01_archive.html">November</a>
<span class="post-count" dir="ltr">(21)</span>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2008_10_01_archive.html">October</a>
<span class="post-count" dir="ltr">(29)</span>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2008_09_01_archive.html">September</a>
<span class="post-count" dir="ltr">(28)</span>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2008_08_01_archive.html">August</a>
<span class="post-count" dir="ltr">(22)</span>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2008_07_01_archive.html">July</a>
<span class="post-count" dir="ltr">(25)</span>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2008_06_01_archive.html">June</a>
<span class="post-count" dir="ltr">(19)</span>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2008_05_01_archive.html">May</a>
<span class="post-count" dir="ltr">(21)</span>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2008_04_01_archive.html">April</a>
<span class="post-count" dir="ltr">(24)</span>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2008_03_01_archive.html">March</a>
<span class="post-count" dir="ltr">(14)</span>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2008_02_01_archive.html">February</a>
<span class="post-count" dir="ltr">(12)</span>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2008_01_01_archive.html">January</a>
<span class="post-count" dir="ltr">(16)</span>
</li>
</ul>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/search?updated-min=2007-01-01T00%3A00%3A00-08%3A00&amp;updated-max=2008-01-01T00%3A00%3A00-08%3A00&amp;max-results=50">2007</a>
<span class="post-count" dir="ltr">(131)</span>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2007_12_01_archive.html">December</a>
<span class="post-count" dir="ltr">(16)</span>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2007_11_01_archive.html">November</a>
<span class="post-count" dir="ltr">(13)</span>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2007_10_01_archive.html">October</a>
<span class="post-count" dir="ltr">(15)</span>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2007_09_01_archive.html">September</a>
<span class="post-count" dir="ltr">(12)</span>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2007_08_01_archive.html">August</a>
<span class="post-count" dir="ltr">(9)</span>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2007_07_01_archive.html">July</a>
<span class="post-count" dir="ltr">(11)</span>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2007_06_01_archive.html">June</a>
<span class="post-count" dir="ltr">(16)</span>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2007_05_01_archive.html">May</a>
<span class="post-count" dir="ltr">(10)</span>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2007_04_01_archive.html">April</a>
<span class="post-count" dir="ltr">(11)</span>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2007_03_01_archive.html">March</a>
<span class="post-count" dir="ltr">(7)</span>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2007_02_01_archive.html">February</a>
<span class="post-count" dir="ltr">(5)</span>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2007_01_01_archive.html">January</a>
<span class="post-count" dir="ltr">(6)</span>
</li>
</ul>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/search?updated-min=2006-01-01T00%3A00%3A00-08%3A00&amp;updated-max=2007-01-01T00%3A00%3A00-08%3A00&amp;max-results=37">2006</a>
<span class="post-count" dir="ltr">(37)</span>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2006_12_01_archive.html">December</a>
<span class="post-count" dir="ltr">(2)</span>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2006_11_01_archive.html">November</a>
<span class="post-count" dir="ltr">(5)</span>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2006_10_01_archive.html">October</a>
<span class="post-count" dir="ltr">(7)</span>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2006_09_01_archive.html">September</a>
<span class="post-count" dir="ltr">(3)</span>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2006_08_01_archive.html">August</a>
<span class="post-count" dir="ltr">(3)</span>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2006_07_01_archive.html">July</a>
<span class="post-count" dir="ltr">(1)</span>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2006_06_01_archive.html">June</a>
<span class="post-count" dir="ltr">(3)</span>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2006_05_01_archive.html">May</a>
<span class="post-count" dir="ltr">(3)</span>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2006_04_01_archive.html">April</a>
<span class="post-count" dir="ltr">(2)</span>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2006_03_01_archive.html">March</a>
<span class="post-count" dir="ltr">(3)</span>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2006_02_01_archive.html">February</a>
<span class="post-count" dir="ltr">(3)</span>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2006_01_01_archive.html">January</a>
<span class="post-count" dir="ltr">(2)</span>
</li>
</ul>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/search?updated-min=2005-01-01T00%3A00%3A00-08%3A00&amp;updated-max=2006-01-01T00%3A00%3A00-08%3A00&amp;max-results=15">2005</a>
<span class="post-count" dir="ltr">(15)</span>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2005_12_01_archive.html">December</a>
<span class="post-count" dir="ltr">(1)</span>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2005_11_01_archive.html">November</a>
<span class="post-count" dir="ltr">(2)</span>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2005_10_01_archive.html">October</a>
<span class="post-count" dir="ltr">(1)</span>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2005_09_01_archive.html">September</a>
<span class="post-count" dir="ltr">(1)</span>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2005_08_01_archive.html">August</a>
<span class="post-count" dir="ltr">(3)</span>
</li>
</ul>
<ul>
<li class="archivedate collapsed">
<a class="toggle" href="javascript:void(0)">
<span class="zippy">

          ►&nbsp;
        
</span>
</a>
<a class="post-count-link" href="https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/2005_07_01_archive.html">July</a>
<span class="post-count" dir="ltr">(7)</span>
</li>
</ul>
</li>
</ul>
</div>
</div>
<div class="clear"></div>
<span class="widget-item-control">
<span class="item-control blog-admin">
<a class="quickedit" href="https://web.archive.org/web/20091204014937/http://www.blogger.com/rearrange?blogID=8913912091036362264&amp;widgetType=BlogArchive&amp;widgetId=BlogArchive1&amp;action=editWidget" onclick="return _WidgetManager._PopupConfig(document.getElementById(&quot;BlogArchive1&quot;));" target="configBlogArchive1" title="Edit">
<img alt="" height="18" src="./YouTube Blog_files/icon18_wrench_allbkg.png" width="18">
</a>
</span>
</span>
<div class="clear"></div>
</div>
</div><div class="widget Followers" id="Followers1">
<h2 class="title">Followers</h2>
<div class="widget-content">
<div id="Followers1-wrapper">
<div style="margin-right:2px;">
<script type="text/javascript">
        if (!window.google || !google.friendconnect) {
          document.write('<script type="text/javascript"' +
              'src="https://web.archive.org/web/20091204014937/http://www.google.com/friendconnect/script/friendconnect.js">' +
              '</scr' + 'ipt>');
        }
      </script><script type="text/javascript" src="./YouTube Blog_files/friendconnect.js.download"></script>
<script type="text/javascript">
      if (!window.registeredBloggerCallbacks) {
        window.registeredBloggerCallbacks = true;

        

        
        gadgets.rpc.register('requestReload', function() {
          document.location.reload();
        });

        
        gadgets.rpc.register('requestSignOut', function(siteId) {
          
          google.friendconnect.container.openSocialSiteId = siteId;
          google.friendconnect.requestSignOut();
        });
      }
    </script>
<script type="text/javascript">
    
    function registerGetBlogUrls() {
      gadgets.rpc.register('getBlogUrls', function() {
        var holder = {};
        
          
          
          
            holder.postFeed = "https://web.archive.org/web/20091204014937/http://www.blogger.com/feeds/8913912091036362264/posts/default";
          
          
          
            holder.commentFeed = "https://web.archive.org/web/20091204014937/http://www.blogger.com/feeds/8913912091036362264/comments/default";
          
        
        return holder;
      });
    }
  </script>
<script type="text/javascript">
  if (!window.registeredCommonBloggerCallbacks) {
    window.registeredCommonBloggerCallbacks = true;

    gadgets.rpc.register('resize_iframe', function(height) {
      var el = document.getElementById(this['f']);
      if (el) {
        el.style.height = height + 'px';
      }
    });

    // We don't do anything w/ this, but don't let it bubble up and cause an
    // exception
    // TODO(henrywong): Don't just one-off this, fix at a more comprehensive
    // level.
    gadgets.rpc.register('set_pref', function() {});

    
    gadgets.rpc.register('registerGadgetForRpcs', function(gadgetDomain, iframeName) {
      gadgets.rpc.setupReceiver(iframeName);
    });

    registerGetBlogUrls();
  }
  </script>
<div id="div-1dzwgpkr5y1of" style="width: 100%; visibility: visible;" class="gadgets-gadget-container"><div id="gfc_iframe_318403482_0_body"><iframe id="gfc_iframe_318403482_0" name="gfc_iframe_318403482_0" style="width:100%;" frameborder="0" scrolling="no" allowtransparency="true" height="260" data-ruffle-polyfilled="" src="./YouTube Blog_files/saved_resource.html"></iframe></div></div>
<script type="text/javascript">
    var skin = {};
    skin['FACE_SIZE'] = '32';
    skin['HEIGHT'] = "260";
    skin['TITLE'] = "Followers";
    skin['BORDER_COLOR'] = "transparent";
    skin['ENDCAP_BG_COLOR'] = "transparent";
    skin['ENDCAP_TEXT_COLOR'] = "#666666";
    skin['ENDCAP_LINK_COLOR'] = "#5588aa";
    skin['ALTERNATE_BG_COLOR'] = "transparent";
    
    skin['CONTENT_BG_COLOR'] = "transparent";
    skin['CONTENT_LINK_COLOR'] = "#5588aa";
    skin['CONTENT_TEXT_COLOR'] = "#666666";
    skin['CONTENT_SECONDARY_LINK_COLOR'] = "#5588aa";
    skin['CONTENT_SECONDARY_TEXT_COLOR'] = "#999999";
    skin['CONTENT_HEADLINE_COLOR'] = "#cc6600";
    skin['FONT_FACE'] = "normal normal 100% Arial, sans-serif";
    google.friendconnect.container.setParentUrl("/");
    google.friendconnect.container["renderMembersGadget"](
    {id: "div-1dzwgpkr5y1of",
     height: 260,
     
     
     
     site: "09891915503531901696",
      
     locale: 'en' },
     skin);
  </script>
</div>
</div>
<div class="clear"></div>
<span class="widget-item-control">
<span class="item-control blog-admin">
<a class="quickedit" href="https://web.archive.org/web/20091204014937/http://www.blogger.com/rearrange?blogID=8913912091036362264&amp;widgetType=Followers&amp;widgetId=Followers1&amp;action=editWidget" onclick="return _WidgetManager._PopupConfig(document.getElementById(&quot;Followers1&quot;));" target="configFollowers1" title="Edit">
<img alt="" height="18" src="./YouTube Blog_files/icon18_wrench_allbkg.png" width="18">
</a>
</span>
</span>
<div class="clear"></div>
</div>
</div><div class="widget HTML" id="HTML2">
<h2 class="title">Facebook.com/youtube</h2>
<div class="widget-content">
<script src="./YouTube Blog_files/en_US" type="text/javascript"></script><div id="FB_HiddenContainer" style="position:absolute; top:-10000px; left:-10000px; width:0px; height:0px;"><div><iframe name="loginStatus" src="./YouTube Blog_files/login_status.html" class="FB_SERVER_IFRAME" scrolling="no" frameborder="0" data-ruffle-polyfilled=""></iframe></div><div><ruffle-embed width="1" height="1" type="application/x-shockwave-flash" pluginspage="http://get.adobe.com/flashplayer" allowscriptaccess="always" name="flashXdComm" id="flashXdComm" bgcolor="#869ca7" quality="high" src="https://web.archive.org/web/20091204014937mp_/http://static.ak.fbcdn.net/swf/XdComm.swf"><template shadowrootmode="open"><style>:host{all:initial;pointer-events:inherit;--ruffle-blue:#37528c;--ruffle-orange:#ffad33;display:inline-block;font-family:Arial,sans-serif;height:400px;letter-spacing:.4px;position:relative;touch-action:none;-webkit-user-select:none;-moz-user-select:none;user-select:none;width:550px;-webkit-tap-highlight-color:transparent}:host(:-webkit-full-screen){display:block;height:100%!important;width:100%!important}.hidden{display:none!important}#container,#message-overlay,#panic,#play-button,#splash-screen,#unmute-overlay,#unmute-overlay .background{inset:0;position:absolute}#container{outline:none;overflow:hidden}#container canvas{height:100%;width:100%}#play-button,#unmute-overlay{cursor:pointer;display:none}#unmute-overlay .background{background:#000;opacity:.7}#play-button .icon,#unmute-overlay .icon{height:50%;left:50%;max-height:384px;max-width:384px;opacity:.8;position:absolute;top:50%;transform:translate(-50%,-50%);width:50%}#play-button:hover .icon,#unmute-overlay:hover .icon{opacity:1}#unmute-overlay-svg{scale:.8}#panic{background:linear-gradient(180deg,#fd3a40,#fda138);color:#fff;display:flex;flex-flow:column;font-size:20px;justify-content:space-around;text-align:center}#panic a{color:var(--ruffle-blue);font-weight:700}#panic-title{font-size:xxx-large;font-weight:700}#panic-body.details{flex:0.9;margin:0 10px}#panic-body textarea{height:100%;resize:none;width:100%}#panic ul{display:flex;justify-content:space-evenly;list-style-type:none;padding:0}#message-overlay{align-items:center;background:var(--ruffle-blue);color:var(--ruffle-orange);display:flex;justify-content:center;opacity:1;overflow:auto;position:absolute;z-index:2}#message-overlay .message{font-size:20px;max-height:100%;max-width:100%;padding:5%;text-align:center}#message-overlay p{margin:.5em 0}#message-overlay .message div{-moz-column-gap:1em;column-gap:1em;display:flex;flex-wrap:wrap;justify-content:center}#message-overlay a,#message-overlay button{background:var(--ruffle-blue);border:2px solid var(--ruffle-orange);border-radius:.6em;color:var(--ruffle-orange);cursor:pointer;font-size:1.25em;font-weight:700;margin:2% 0;padding:10px;text-decoration:none}#message-overlay a:hover,#message-overlay button:hover{background:#ffffff4c}#continue-btn{background:var(--ruffle-blue);border:2px solid var(--ruffle-orange);border-radius:20px;color:var(--ruffle-orange);cursor:pointer;font-size:20px;font-weight:700;padding:10px}#continue-btn:hover{background:#ffffff4c}#context-menu-overlay,.modal{height:100%;position:absolute;width:100%;z-index:1}#context-menu{background-color:var(--modal-background);border:1px solid gray;box-shadow:0 5px 10px -5px #000;color:rgb(var(--modal-foreground-rgb));font-size:14px;list-style:none;margin:0;padding:3px 0;position:absolute;text-align:left;white-space:nowrap}#context-menu .menu-item{color:rgb(var(--modal-foreground-rgb));padding:5px 10px}#context-menu .menu-item.disabled{color:rgba(var(--modal-foreground-rgb),.5);cursor:default}#context-menu .menu-item:not(.disabled):hover{background-color:rgba(var(--modal-foreground-rgb),.15)}#context-menu .menu-separator hr{border:none;border-bottom:1px solid rgba(var(--modal-foreground-rgb),.2);margin:3px}#splash-screen{align-items:center;background:var(
        --splash-screen-background,var(--preloader-background,var(--ruffle-blue))
    );display:flex;flex-direction:column;justify-content:center}.loadbar{background:#253559;height:20%;max-height:10px;max-width:316px;width:100%}.loadbar-inner{background:var(--ruffle-orange);height:100%;max-width:100%;width:0}.logo{display:var(--logo-display,block);max-height:150px;max-width:380px}.loading-animation{aspect-ratio:1;margin-bottom:2%;max-height:28px;max-width:28px;width:10%}.spinner{stroke-dasharray:180;stroke-dashoffset:135;stroke:var(--ruffle-orange);animation:a 1.5s linear infinite;transform-origin:50% 50%}@keyframes a{to{transform:rotate(1turn)}}#virtual-keyboard{height:1px;opacity:0;position:absolute;top:-100px;width:1px}.modal{background-color:#0008}.modal-area{background-color:var(--modal-background);border-radius:12px;box-shadow:0 2px 6px 0 #0008;color:rgb(var(--modal-foreground-rgb));left:50%;padding:8px 12px;position:relative;transform:translateX(-50%);width:-moz-fit-content;width:fit-content}#modal-area{height:300px;width:450px}.close-modal{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 -960 960 960'%3E%3Cpath d='M480-392 300-212q-18 18-44 18t-44-18-18-44 18-44l180-180-180-180q-18-18-18-44t18-44 44-18 44 18l180 180 180-180q18-18 44-18t44 18 18 44-18 44L568-480l180 180q18 18 18 44t-18 44-44 18-44-18z'/%3E%3C/svg%3E");cursor:pointer;filter:var(--modal-foreground-filter);height:16px;width:16px}.modal-button{background-color:rgba(var(--modal-foreground-rgb),.2);border-radius:6px;color:rgb(var(--modal-foreground-rgb));cursor:pointer;display:inline-block;padding:4px 8px;text-decoration:none}:not(#volume-controls)>.close-modal{position:absolute;right:16px;top:14px}.general-save-options{border-bottom:2px solid rgba(var(--modal-foreground-rgb),.3);padding-bottom:8px;text-align:center}#local-saves{border-collapse:collapse;color:inherit;display:block;height:calc(100% - 45px);min-height:30px;overflow-y:auto}#local-saves td{border-bottom:2px solid rgba(var(--modal-foreground-rgb),.15);height:30px}#local-saves td:first-child{width:100%;word-break:break-all}.save-option{cursor:pointer;display:inline-block;filter:var(--modal-foreground-filter);height:24px;opacity:.4;vertical-align:middle;width:24px}#local-saves>tr:hover .save-option{opacity:1}#download-save{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 -960 960 960'%3E%3Cpath d='M480-337q-8 0-15-2.5t-13-8.5L308-492q-12-12-11.5-28t11.5-28q12-12 28.5-12.5T365-549l75 75v-286q0-17 11.5-28.5T480-800t28.5 11.5T520-760v286l75-75q12-12 28.5-11.5T652-548q11 12 11.5 28T652-492L508-348q-6 6-13 8.5t-15 2.5M240-160q-33 0-56.5-23.5T160-240v-80q0-17 11.5-28.5T200-360t28.5 11.5T240-320v80h480v-80q0-17 11.5-28.5T760-360t28.5 11.5T800-320v80q0 33-23.5 56.5T720-160z'/%3E%3C/svg%3E")}#replace-save{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 -1080 960 1200'%3E%3Cpath d='M440-367v127q0 17 11.5 28.5T480-200t28.5-11.5T520-240v-127l36 36q6 6 13.5 9t15 2.5T599-323t13-9q11-12 11.5-28T612-388L508-492q-6-6-13-8.5t-15-2.5-15 2.5-13 8.5L348-388q-12 12-11.5 28t12.5 28q12 11 28 11.5t28-11.5zM240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h287q16 0 30.5 6t25.5 17l194 194q11 11 17 25.5t6 30.5v447q0 33-23.5 56.5T720-80zm280-560q0 17 11.5 28.5T560-600h160L520-800z'/%3E%3C/svg%3E")}#delete-save{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 -1020 960 1080'%3E%3Cpath d='M280-120q-33 0-56.5-23.5T200-200v-520q-17 0-28.5-11.5T160-760t11.5-28.5T200-800h160q0-17 11.5-28.5T400-840h160q17 0 28.5 11.5T600-800h160q17 0 28.5 11.5T800-760t-11.5 28.5T760-720v520q0 33-23.5 56.5T680-120zm120-160q17 0 28.5-11.5T440-320v-280q0-17-11.5-28.5T400-640t-28.5 11.5T360-600v280q0 17 11.5 28.5T400-280m160 0q17 0 28.5-11.5T600-320v-280q0-17-11.5-28.5T560-640t-28.5 11.5T520-600v280q0 17 11.5 28.5T560-280'/%3E%3C/svg%3E")}.replace-save{display:none}#video-modal .modal-area{box-sizing:border-box;height:95%;width:95%}#video-holder{box-sizing:border-box;height:100%;padding:36px 4px 6px}#video-holder video{background-color:#000;height:100%;width:100%}#volume-controls{align-items:center;display:flex;gap:6px}#mute-checkbox{display:none}label[for=mute-checkbox]{cursor:pointer;filter:var(--modal-foreground-filter);height:24px;line-height:0;width:24px}#volume-mute{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 -960 960 960'%3E%3Cpath d='m719.13-419.35-71.67 71.68Q634.78-335 617.13-335t-30.33-12.67q-12.67-12.68-12.67-30.33t12.67-30.33L658.48-480l-71.68-71.67q-12.67-12.68-12.67-30.33t12.67-30.33Q599.48-625 617.13-625t30.33 12.67l71.67 71.68 71.67-71.68Q803.48-625 821.13-625t30.33 12.67q12.67 12.68 12.67 30.33t-12.67 30.33L779.78-480l71.68 71.67q12.67 12.68 12.67 30.33t-12.67 30.33Q838.78-335 821.13-335t-30.33-12.67zM278-357.87H161.22q-17.66 0-30.33-12.67-12.67-12.68-12.67-30.33v-158.26q0-17.65 12.67-30.33 12.67-12.67 30.33-12.67H278l130.15-129.91q20.63-20.63 46.98-9.45 26.35 11.19 26.35 39.77v443.44q0 28.58-26.35 39.77-26.35 11.18-46.98-9.45z'/%3E%3C/svg%3E")}#volume-min{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='161 -960 960 960'%3E%3Cpath d='M438.65-357.87H321.87q-17.65 0-30.33-12.67-12.67-12.68-12.67-30.33v-158.26q0-17.65 12.67-30.33 12.68-12.67 30.33-12.67h116.78L568.8-732.04q20.63-20.63 46.98-9.45 26.35 11.19 26.35 39.77v443.44q0 28.58-26.35 39.77-26.35 11.18-46.98-9.45z'/%3E%3C/svg%3E")}#volume-mid{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='80 -960 960 960'%3E%3Cpath d='M357.98-357.87H241.2q-17.66 0-30.33-12.67-12.67-12.68-12.67-30.33v-158.26q0-17.65 12.67-30.33 12.67-12.67 30.33-12.67h116.78L487.65-731.8q20.63-20.64 47.1-9.57t26.47 39.65v443.44q0 28.58-26.47 39.65t-47.1-9.57zM741.8-480q0 42.48-20.47 80.09-20.48 37.61-54.94 60.82-10.22 5.98-20.19.25-9.98-5.73-9.98-17.44v-248.44q0-11.71 9.98-17.32 9.97-5.61 20.19.37 34.46 23.71 54.94 61.45Q741.8-522.48 741.8-480'/%3E%3C/svg%3E")}#volume-max{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='9 -960 960 960'%3E%3Cpath d='M754.22-480.5q0-78.52-41.88-143.9t-111.91-98.62q-14.47-6.74-20.47-20.96t-.53-28.93q5.74-15.72 20.34-22.46t29.58 0q92.48 42.46 147.97 127.05 55.48 84.6 55.48 187.82t-55.48 187.82q-55.49 84.59-147.97 127.05-14.98 6.74-29.58 0t-20.34-22.46q-5.47-14.71.53-28.93t20.47-20.96q70.03-33.24 111.91-98.62t41.88-143.9M286.98-357.87H170.2q-17.66 0-30.33-12.67-12.67-12.68-12.67-30.33v-158.26q0-17.65 12.67-30.33 12.67-12.67 30.33-12.67h116.78L416.65-731.8q20.63-20.64 47.1-9.57t26.47 39.65v443.44q0 28.58-26.47 39.65t-47.1-9.57zM670.8-480q0 42.48-20.47 80.09-20.48 37.61-54.94 60.82-10.22 5.98-20.19.25-9.98-5.73-9.98-17.44v-248.44q0-11.71 9.98-17.32 9.97-5.61 20.19.37 34.46 23.71 54.94 61.45Q670.8-522.48 670.8-480'/%3E%3C/svg%3E")}#volume-slider-text{text-align:center;-webkit-user-select:none;-moz-user-select:none;user-select:none;width:4.8ch}#hardware-acceleration-modal .modal-area{box-sizing:border-box;padding:16px 48px;text-align:center;width:95%}#acceleration-text{display:block;margin-bottom:8px}#clipboard-modal h2{margin-right:36px;margin-top:4px}#clipboard-modal p:last-child{margin-bottom:2px}@media (prefers-color-scheme:light){:host{--modal-background:#fafafa;--modal-foreground-rgb:0,0,0;--modal-foreground-filter:none}}@media (prefers-color-scheme:dark){:host{--modal-background:#282828;--modal-foreground-rgb:221,221,221;--modal-foreground-filter:invert(90%)}}</style><style id="dynamic-styles"></style><div id="container" class="" tabindex="-1" style="background-color: rgb(134, 156, 167);"><div id="play-button" style="display: none;"><div class="icon"><svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" viewBox="0 0 250 250" width="100%" height="100%"><defs xmlns="http://www.w3.org/2000/svg"><lineargradient xmlns="http://www.w3.org/2000/svg" id="a" gradientUnits="userSpaceOnUse" x1="125" y1="0" x2="125" y2="250" spreadMethod="pad"><stop xmlns="http://www.w3.org/2000/svg" offset="0%" stop-color="#FDA138"></stop><stop xmlns="http://www.w3.org/2000/svg" offset="100%" stop-color="#FD3A40"></stop></lineargradient><g xmlns="http://www.w3.org/2000/svg" id="b"><path xmlns="http://www.w3.org/2000/svg" fill="url(#a)" d="M250 125q0-52-37-88-36-37-88-37T37 37Q0 73 0 125t37 88q36 37 88 37t88-37q37-36 37-88M87 195V55l100 70-100 70z"></path><path xmlns="http://www.w3.org/2000/svg" fill="#FFF" d="M87 55v140l100-70L87 55z"></path></g></defs><use xmlns="http://www.w3.org/2000/svg" href="#b"></use></svg></div></div><div id="unmute-overlay"><div class="background"></div><div class="icon"><svg id="unmute-overlay-svg" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" viewBox="0 0 512 584" width="100%" height="100%"><path xmlns="http://www.w3.org/2000/svg" fill="#FFF" stroke="#FFF" d="m457.941 256 47.029-47.029c9.372-9.373 9.372-24.568 0-33.941-9.373-9.373-24.568-9.373-33.941 0l-47.029 47.029-47.029-47.029c-9.373-9.373-24.568-9.373-33.941 0-9.372 9.373-9.372 24.568 0 33.941l47.029 47.029-47.029 47.029c-9.372 9.373-9.372 24.568 0 33.941 4.686 4.687 10.827 7.03 16.97 7.03s12.284-2.343 16.971-7.029l47.029-47.03 47.029 47.029c4.687 4.687 10.828 7.03 16.971 7.03s12.284-2.343 16.971-7.029c9.372-9.373 9.372-24.568 0-33.941z"></path><path xmlns="http://www.w3.org/2000/svg" fill="#FFF" stroke="#FFF" d="m99 160h-55c-24.301 0-44 19.699-44 44v104c0 24.301 19.699 44 44 44h55c2.761 0 5-2.239 5-5v-182c0-2.761-2.239-5-5-5z"></path><path xmlns="http://www.w3.org/2000/svg" fill="#FFF" stroke="#FFF" d="m280 56h-24c-5.269 0-10.392 1.734-14.578 4.935l-103.459 79.116c-1.237.946-1.963 2.414-1.963 3.972v223.955c0 1.557.726 3.026 1.963 3.972l103.459 79.115c4.186 3.201 9.309 4.936 14.579 4.936h23.999c13.255 0 24-10.745 24-24v-352.001c0-13.255-10.745-24-24-24z"></path><text xmlns="http://www.w3.org/2000/svg" id="unmute-text" x="256" y="560" text-anchor="middle" font-size="60px" fill="#FFF" stroke="#FFF">Click to unmute</text></svg></div></div><input aria-hidden="true" id="virtual-keyboard" type="text" autocomplete="off" autocorrect="off" autocapitalize="none"><canvas width="1" height="1" style="touch-action: none; cursor: auto;"></canvas></div><div id="splash-screen" class="hidden"><svg xmlns="http://www.w3.org/2000/svg" class="logo" preserveAspectRatio="xMidYMid" viewBox="0 0 380 150"><g xmlns="http://www.w3.org/2000/svg"><path xmlns="http://www.w3.org/2000/svg" fill="#966214" d="M58.75 85.6q.75-.1 1.5-.35.85-.25 1.65-.75.55-.35 1.05-.8.5-.45.95-1 .5-.5.75-1.2-.05.05-.15.1-.1.15-.25.25l-.1.2q-.15.05-.25.1-.4 0-.8.05-.5-.25-.9-.5-.3-.1-.55-.3l-.6-.6-4.25-6.45-1.5 11.25h3.45m83.15-.2h3.45q.75-.1 1.5-.35.25-.05.45-.15.35-.15.65-.3l.5-.3q.25-.15.5-.35.45-.35.9-.75.45-.35.75-.85l.1-.1q.1-.2.2-.35.2-.3.35-.6l-.3.4-.15.15q-.5.15-1.1.1-.25 0-.4-.05-.5-.15-.8-.4-.15-.1-.25-.25-.3-.3-.55-.6l-.05-.05v-.05l-4.25-6.4-1.5 11.25m-21.15-3.95q-.3-.3-.55-.6l-.05-.05v-.05l-4.25-6.4-1.5 11.25h3.45q.75-.1 1.5-.35.85-.25 1.6-.75.75-.5 1.4-1.1.45-.35.75-.85.35-.5.65-1.05l-.45.55q-.5.15-1.1.1-.9 0-1.45-.7m59.15.3q-.75-.5-1.4-1-3.15-2.55-3.5-6.4l-1.5 11.25h21q-3.1-.25-5.7-.75-5.6-1.05-8.9-3.1m94.2 3.85h3.45q.6-.1 1.2-.3.4-.1.75-.2.35-.15.65-.3.7-.35 1.35-.8.75-.55 1.3-1.25.1-.15.25-.3-2.55-.25-3.25-1.8l-4.2-6.3-1.5 11.25m-45.3-4.85q-.5-.4-.9-.8-2.3-2.35-2.6-5.6l-1.5 11.25h21q-11.25-.95-16-4.85m97.7 4.85q-.3-.05-.6-.05-10.8-1-15.4-4.8-3.15-2.55-3.5-6.35l-1.5 11.2h21Z"></path><path xmlns="http://www.w3.org/2000/svg" fill="var(--ruffle-orange)" d="M92.6 54.8q-1.95-1.4-4.5-1.4H60.35q-1.35 0-2.6.45-1.65.55-3.15 1.8-2.75 2.25-3.25 5.25l-1.65 12h.05v.3l5.85 1.15h-9.5q-.5.05-1 .15-.5.15-1 .35-.5.2-.95.45-.5.3-.95.7-.45.35-.85.8-.35.4-.65.85-.3.45-.5.9-.15.45-.3.95l-5.85 41.6H50.3l5-35.5 1.5-11.25 4.25 6.45.6.6q.25.2.55.3.4.25.9.5.4-.05.8-.05.1-.05.25-.1l.1-.2q.15-.1.25-.25.1-.05.15-.1l.3-1.05 1.75-12.3h11.15L75.8 82.6h16.5l2.3-16.25h-.05l.8-5.7q.4-2.45-1-4.2-.35-.4-.75-.8-.25-.25-.55-.5-.2-.2-.45-.35m16.2 18.1h.05l-.05.3 5.85 1.15H105.2q-.5.05-1 .15-.5.15-1 .35-.5.2-.95.45-.5.3-1 .65-.4.4-.8.85-.25.3-.55.65-.05.1-.15.2-.25.45-.4.9-.2.45-.3.95-.1.65-.2 1.25-.2 1.15-.4 2.25l-4.3 30.6q-.25 3 1.75 5.25 1.6 1.8 4 2.15.6.1 1.25.1h27.35q3.25 0 6-2.25.35-.35.7-.55l.3-.2q2-2 2.25-4.5l1.65-11.6q.05-.05.1-.05l1.65-11.35h.05l.7-5.2 1.5-11.25 4.25 6.4v.05l.05.05q.25.3.55.6.1.15.25.25.3.25.8.4.15.05.4.05.6.05 1.1-.1l.15-.15.3-.4.3-1.05 1.3-9.05h-.05l.7-5.05h-.05l.15-1.25h-.05l1.65-11.7h-16.25l-2.65 19.5h.05v.2l-.05.1h.05l5.8 1.15H132.7q-.5.05-1 .15-.5.15-1 .35-.15.05-.3.15-.3.1-.55.25-.05 0-.1.05-.5.3-1 .65-.4.35-.7.7-.55.7-.95 1.45-.35.65-.55 1.4-.15.7-.25 1.4v.05q-.15 1.05-.35 2.05l-1.2 8.75v.1l-2.1 14.7H111.4l2.25-15.55h.05l.7-5.2 1.5-11.25 4.25 6.4v.05l.05.05q.25.3.55.6.55.7 1.45.7.6.05 1.1-.1l.45-.55.3-1.05 1.3-9.05h-.05l.7-5.05h-.05l.15-1.25h-.05l1.65-11.7h-16.25l-2.65 19.5m106.5-41.75q-2.25-2.25-5.5-2.25h-27.75q-3 0-5.75 2.25-1.3.95-2.05 2.1-.45.6-.7 1.2-.2.5-.35 1-.1.45-.15.95l-4.15 29.95h-.05l-.7 5.2h-.05l-.2 1.35h.05l-.05.3 5.85 1.15h-9.45q-2.1.05-3.95 1.6-1.9 1.55-2.25 3.55l-.5 3.5h-.05l-5.3 38.1h16.25l5-35.5 1.5-11.25q.35 3.85 3.5 6.4.65.5 1.4 1 3.3 2.05 8.9 3.1 2.6.5 5.7.75l1.75-11.25h-12.2l.4-2.95h-.05l.7-5.05h-.05q.1-.9.3-1.9.1-.75.2-1.6.85-5.9 2.15-14.9 0-.15.05-.25l.1-.9q.2-1.55.45-3.15h11.25l-3.1 20.8h16.5l4.1-28.05q.15-1.7-.4-3.15-.5-1.1-1.35-2.1m46.65 44.15q-.5.3-1 .65-.4.4-.8.85-.35.4-.7.85-.25.45-.45.9-.15.45-.3.95l-5.85 41.6h16.25l5-35.5 1.5-11.25 4.2 6.3q.7 1.55 3.25 1.8l.05-.1q.25-.4.35-.85l.3-1.05 1.8-14.05v-.05l5.35-37.45h-16.25l-6.15 44.3 5.85 1.15h-9.45q-.5.05-1 .15-.5.15-1 .35-.5.2-.95.45m5.4-38.9q.15-1.7-.4-3.15-.5-1.1-1.35-2.1-2.25-2.25-5.5-2.25h-27.75q-2.3 0-4.45 1.35-.65.35-1.3.9-1.3.95-2.05 2.1-.45.6-.7 1.2-.4.9-.5 1.95l-4.15 29.95h-.05l-.7 5.2h-.05l-.2 1.35h.05l-.05.3 5.85 1.15h-9.45q-2.1.05-3.95 1.6-1.9 1.55-2.25 3.55l-.5 3.5h-.05l-1.2 8.75v.1l-4.1 29.25h16.25l5-35.5 1.5-11.25q.3 3.25 2.6 5.6.4.4.9.8 4.75 3.9 16 4.85l1.75-11.25h-12.2l.4-2.95h-.05l.7-5.05h-.05q.15-.9.3-1.9.1-.75.25-1.6.15-1.25.35-2.65v-.05q.95-6.7 2.35-16.5h11.25l-3.1 20.8h16.5l4.1-28.05M345 66.35h-.05l1.15-8.2q.5-3-1.75-5.25-1.25-1.25-3-1.75-1-.5-2.25-.5h-27.95q-.65 0-1.3.1-2.5.35-4.7 2.15-2.75 2.25-3.25 5.25l-1.95 14.7v.05l-.05.3 5.85 1.15h-9.45q-1.9.05-3.6 1.35-.2.1-.35.25-1.9 1.55-2.25 3.55l-4.85 34.1q-.25 3 1.75 5.25 1.25 1.4 3 1.95 1.05.3 2.25.3H320q3.25 0 6-2.25 2.75-2 3.25-5l2.75-18.5h-16.5l-1.75 11H302.5l2.1-14.75h.05l.85-6 1.5-11.2q.35 3.8 3.5 6.35 4.6 3.8 15.4 4.8.3 0 .6.05h15.75L345 66.35m-16.4-.95-1.25 8.95h-11.3l.4-2.95h-.05l.7-5.05h-.1l.15-.95h11.45Z"></path></g></svg><svg xmlns="http://www.w3.org/2000/svg" class="loading-animation" viewBox="0 0 66 66"><circle xmlns="http://www.w3.org/2000/svg" class="spinner" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg><div class="loadbar"><div class="loadbar-inner" style="width: 100%;"></div></div></div><div id="save-manager" class="modal hidden"><div id="modal-area" class="modal-area"><span class="close-modal"></span><div class="general-save-options"><span class="modal-button">Download all save files</span></div><table id="local-saves"></table></div></div><div id="volume-controls-modal" class="modal hidden"><div class="modal-area"><div id="volume-controls"><input id="mute-checkbox" type="checkbox"><label id="volume-mute" for="mute-checkbox" title="Unmute" style="display: none;"></label><label id="volume-min" for="mute-checkbox" title="Mute" style="display: none;"></label><label id="volume-mid" for="mute-checkbox" title="Mute" style="display: none;"></label><label id="volume-max" for="mute-checkbox" title="Mute" style="display: inline;"></label><input id="volume-slider" type="range" min="0" max="100" step="1"><span id="volume-slider-text">100%</span><span class="close-modal"></span></div></div></div><div id="video-modal" class="modal hidden"><div class="modal-area"><span class="close-modal"></span><div id="video-holder"></div></div></div><div id="hardware-acceleration-modal" class="modal hidden"><div class="modal-area"><span class="close-modal"></span><span id="acceleration-text">It looks like hardware acceleration is disabled. While Ruffle may work, it could be very slow. You can find out how to enable hardware acceleration by following the link below:</span><a href="https://web.archive.org/web/20091204014937mp_/https://github.com/ruffle-rs/ruffle/wiki/Frequently-Asked-Questions-For-Users#chrome-hardware-acceleration" target="_blank" class="modal-button">FAQ - Chrome Hardware Acceleration</a></div></div><div id="clipboard-modal" class="modal hidden"><div class="modal-area"><span class="close-modal"></span><h2>Copying and pasting in Ruffle</h2><p id="clipboard-modal-description"></p><p><b>Ctrl+C</b><span>⁨ ⁩ for copy</span></p><p><b>Ctrl+X</b><span>⁨ ⁩ for cut</span></p><p><b>Ctrl+V</b><span>⁨ ⁩ for paste</span></p></div></div><div id="context-menu-overlay" class="hidden"><ul id="context-menu"></ul></div></template></ruffle-embed></div></div><script type="text/javascript">FB.init("8755d77ec1ffb3658b6c545594bd6dd5");</script><fb:fan connections="10" width="200" profile_id="7270241753" stream="1"></fb:fan><div style="font-size:8px; padding-left:10px"><a href="https://web.archive.org/web/20091204014937/http://www.facebook.com/youtube">YouTube</a> on Facebook</div>
</div>
<div class="clear"></div>
<span class="widget-item-control">
<span class="item-control blog-admin">
<a class="quickedit" href="https://web.archive.org/web/20091204014937/http://www.blogger.com/rearrange?blogID=8913912091036362264&amp;widgetType=HTML&amp;widgetId=HTML2&amp;action=editWidget" onclick="return _WidgetManager._PopupConfig(document.getElementById(&quot;HTML2&quot;));" target="configHTML2" title="Edit">
<img alt="" height="18" src="./YouTube Blog_files/icon18_wrench_allbkg.png" width="18">
</a>
</span>
</span>
<div class="clear"></div>
</div></div>
</div>
</div>
</div>
<div id="footer-wrap1">
<div class="footer section" id="footer"></div>
<div style="text-align: center;">
      Copyright © 2009 YouTube Inc. All rights reserved.<br>
<a href="https://web.archive.org/web/20091204014937/http://www.google.com/privacy.html">Privacy Policy</a> | <a href="https://web.archive.org/web/20091204014937/http://www.google.com/terms_of_service.html">Terms of Service</a>
</div>
<div id="footer-wrap2">
</div>
</div>
</div>
</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://web.archive.org/web/20091204014937/https://ssl." : "https://web.archive.org/web/20091204014937/http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script><script src="./YouTube Blog_files/ga.js.download" type="text/javascript"></script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-1870203-18");
pageTracker._trackPageview();
} catch(err) {}</script>
<script type="text/javascript">
if (window.jstiming) window.jstiming.load.tick('widgetJsBefore');
</script><script type="text/javascript" src="./YouTube Blog_files/1883641493-widgets.js.download"></script>
<script type="text/javascript" src="./YouTube Blog_files/jsapi"></script>
<script type="text/javascript">
_WidgetManager._Init('https://web.archive.org/web/20091204014937/http://www.blogger.com/rearrange?blogID=8913912091036362264', 'https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/','8913912091036362264');
_WidgetManager._SetPageActionUrl('https://web.archive.org/web/20091204014937/http://www.blogger.com/display?blogID=8913912091036362264', 'YRW8I8uu7Bq_mC922mAOgAYc9wE:1259891287709');
_WidgetManager._SetDataContext([{'name': 'blog', 'data': {'title': 'YouTube Blog', 'pageType': 'index', 'url': 'https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/', 'homepageUrl': 'https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/', 'enabledCommentProfileImages': true, 'searchLabel': '', 'searchQuery': '', 'pageName': '', 'pageTitle': 'YouTube Blog', 'encoding': 'UTF-8', 'locale': 'en', 'isPrivate': false, 'languageDirection': 'ltr', 'feedLinks': '\74link rel\75\42alternate\42 type\75\42application/atom+xml\42 title\75\42YouTube Blog - Atom\42 href\75\42http://youtube-global.blogspot.com/feeds/posts/default\42 /\76\n\74link rel\75\42alternate\42 type\75\42application/rss+xml\42 title\75\42YouTube Blog - RSS\42 href\75\42http://youtube-global.blogspot.com/feeds/posts/default?alt\75rss\42 /\76\n\74link rel\75\42service.post\42 type\75\42application/atom+xml\42 title\75\42YouTube Blog - Atom\42 href\75\42http://www.blogger.com/feeds/8913912091036362264/posts/default\42 /\76\n\74link rel\75\42EditURI\42 type\75\42application/rsd+xml\42 title\75\42RSD\42 href\75\42http://www.blogger.com/rsd.g?blogID\758913912091036362264\42 /\076', 'meTag': '', 'openIdOpTag': '\74link rel\75\42openid.server\42 href\75\42http://www.blogger.com/openid-server.g\42 /\76\n', 'latencyHeadScript': '\74script type\75\42text/javascript\42\76(function() { var a\75window;function e(b){this.t\75{};this.tick\75function(c,h,d){d\75d?d:(new Date).getTime();this.t[c]\75[d,h]};this.tick(\42start\42,null,b)}var f\75new e;a.jstiming\75{Timer:e,load:f};try{a.jstiming.pt\75a.gtbExternal\46\46a.gtbExternal.pageT()||a.external\46\46a.external.pageT}catch(g){};a.tickAboveFold\75function(b){b\75b;var c\0750;if(b.offsetParent){do c+\75b.offsetTop;while(b\75b.offsetParent)}b\75c;b\74\075750\46\46a.jstiming.load.tick(\42aft\42)};var i\75false;function j(){if(!i){i\75true;a.jstiming.load.tick(\42firstScrollTime\42)}}a.addEventListener?a.addEventListener(\42scroll\42,j,false):a.attachEvent(\42onscroll\42,j); })();\74/script\076'}}]);
_WidgetManager._SetSystemMarkup({'layout': {'varName': '', 'template': '\74div class\75\47widget-wrap1\47\76\n\74div class\75\47widget-wrap2\47\76\n\74div class\75\47widget-wrap3\47\76\n\74div class\75\47widget-content\47\76\n\74div class\75\47layout-title\47\76\74data:layout-title\76\74/data:layout-title\76\74/div\76\n\74a class\75\47editlink\47 expr:href\75\47data:widget.quickEditUrl\47 expr:onclick\75\47\46quot;return _WidgetManager._PopupConfig(document.getElementById(\\\46quot;\46quot; +       data:widget.instanceId + \46quot;\\\46quot;));\46quot;\47 target\75\47chooseWidget\47\76\74data:edit-link\76\74/data:edit-link\76\74/a\76\n\74/div\76\n\74/div\76\n\74/div\76\n\74/div\076'}, 'quickedit': {'varName': '', 'template': '\74div class\75\47clear\47\76\74/div\76\n\74span class\75\47widget-item-control\47\76\n\74span class\75\47item-control blog-admin\47\76\n\74a class\75\47quickedit\47 expr:href\75\47data:widget.quickEditUrl\47 expr:onclick\75\47\46quot;return _WidgetManager._PopupConfig(document.getElementById(\\\46quot;\46quot; +       data:widget.instanceId + \46quot;\\\46quot;));\46quot;\47 expr:target\75\47\46quot;config\46quot; + data:widget.instanceId\47 expr:title\75\47data:edit-link\47\76\n\74img alt\75\47\47 height\75\04718\47 src\75\47http://img1.blogblog.com/img/icon18_wrench_allbkg.png\47 width\75\04718\47/\76\n\74/a\76\n\74/span\76\n\74/span\76\n\74div class\75\47clear\47\76\74/div\076'}, 'all-head-content': {'varName': 'page', 'template': '\74data:blog.latencyHeadScript\76\74/data:blog.latencyHeadScript\76\n\74meta expr:content\75\47\46quot;text/html; charset\75\46quot; + data:page.encoding\47 http-equiv\75\47Content-Type\47/\76\n\74meta content\75\47true\47 name\75\47MSSmartTagsPreventParsing\47/\76\n\74meta content\75\47blogger\47 name\75\47generator\47/\76\n\74link href\75\47http://www.blogger.com/favicon.ico\47 rel\75\47icon\47 type\75\47image/vnd.microsoft.icon\47/\76\n\74link expr:href\75\47data:blog.url\47 rel\75\47canonical\47/\76\n\74data:blog.feedLinks\76\74/data:blog.feedLinks\76\n\74data:blog.meTag\76\74/data:blog.meTag\76\n\74data:blog.openIdOpTag\76\74/data:blog.openIdOpTag\076'}});
_WidgetManager._RegisterWidget('_CustomSearchView', new _WidgetInfo('CustomSearch1', 'sidebar',{'main': {'varName': '', 'template': '\74b:if cond\75\47data:title !\75 \46quot;\46quot;\47\76\n\74h2 class\75\47title\47\76\74data:title\76\74/data:title\76\74/h2\76\n\74/b:if\76\n\74div class\75\47widget-content\47 style\75\47width:95%\47\76\n\74div expr:id\75\47data:widget.instanceId + \46quot;_form\46quot;\47\76\n\74span class\75\47cse-status\47\76\74data:loadingMsg\76\74/data:loadingMsg\76\74/span\76\n\74/div\76\n\74/div\76\n\74style type\75\47text/css\47\76\n      #uds-searchControl { width: 660px; }\n      #uds-searchControl .gs-result .gs-title,\n      #uds-searchControl .gs-result .gs-title *,\n      #uds-searchControl .gsc-results .gsc-trailing-more-results,\n      #uds-searchControl .gsc-results .gsc-trailing-more-results * {\n        color:\74data:linkColor\76\74/data:linkColor\76;\n      }\n\n      #uds-searchControl .gs-result .gs-title a:visited,\n      #uds-searchControl .gs-result .gs-title a:visited * {\n        color:\74data:visitedLinkColor\76\74/data:visitedLinkColor\76;\n      }\n\n      #uds-searchControl .gs-relativePublishedDate,\n      #uds-searchControl .gs-publishedDate {\n        color: \74data:dateColor\76\74/data:dateColor\76;\n      }\n\n      #uds-searchControl .gs-result a.gs-visibleUrl,\n      #uds-searchControl .gs-result .gs-visibleUrl {\n        color: \74data:urlColor\76\74/data:urlColor\76;\n      }\n\n      #uds-searchControl .gsc-results {\n        border-color: \74data:borderColor\76\74/data:borderColor\76;\n        background-color: \74data:backgroundColor\76\74/data:backgroundColor\76;\n      }\n\n      #uds-searchControl .gsc-tabhActive {\n        border-color: \74data:borderColor\76\74/data:borderColor\76;\n        border-top-color: \74data:activeBorderColor\76\74/data:activeBorderColor\76;\n        background-color: \74data:backgroundColor\76\74/data:backgroundColor\76;\n        color: \74data:textColor\76\74/data:textColor\76;\n      }\n\n      #uds-searchControl .gsc-tabhInactive {\n        border-color: \74data:borderColor\76\74/data:borderColor\76;\n        background-color: transparent;\n        color: \74data:linkColor\76\74/data:linkColor\76;\n      }\n\n      #uds-searchClearResults {\n        border-color: \74data:borderColor\76\74/data:borderColor\76;\n      }\n\n      #uds-searchClearResults:hover {\n        border-color: \74data:activeBorderColor\76\74/data:activeBorderColor\76;\n      }\n\n      #uds-searchControl .gsc-cursor-page {\n        color: \74data:linkColor\76\74/data:linkColor\76;\n      }\n\n      #uds-searchControl .gsc-cursor-current-page {\n        color: \74data:textColor\76\74/data:textColor\76;\n      }\n    \74/style\76\n\74b:include name\75\47quickedit\47\76\74/b:include\076'}}, document.getElementById('CustomSearch1'), {'title': 'Search This Blog', 'includeBlog': true, 'includePostLinks': false, 'includeWeb': false, 'linkLists': [], 'blogUrl': 'https://web.archive.org/web/20091204014937/http://youtube-global.blogspot.com/', 'loadingMsg': 'Loading...', 'thisBlogMsg': 'This Blog', 'linkedFromHereMsg': 'Linked From Here', 'theWebMsg': 'The Web', 'backgroundColor': '#ffffff', 'textColor': '#000000', 'dateColor': '#000000', 'linkColor': '#0033cc', 'urlColor': '#000000', 'visitedLinkColor': '#0033cc', 'borderColor': '#ffffff', 'activeBorderColor': '#000000'}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML1', 'sidebar',{'main': {'varName': '', 'template': '\74b:if cond\75\47data:title !\75 \46quot;\46quot;\47\76\n\74h2 class\75\47title\47\76\74data:title\76\74/data:title\76\74/h2\76\n\74/b:if\76\n\74div class\75\47widget-content\47\76\n\74data:content\76\74/data:content\76\n\74/div\76\n\74b:include name\75\47quickedit\47\76\74/b:include\076'}}, document.getElementById('HTML1'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_SubscribeView', new _WidgetInfo('Subscribe1', 'sidebar',{'main': {'varName': '', 'template': '\74b:if cond\75\47data:isPublic\47\76\n\74div style\75\47white-space:nowrap\47\76\n\74b:if cond\75\47data:title !\75 \46quot;\46quot;\47\76\n\74h2 class\75\47title\47\76\74data:title\76\74/data:title\76\74/h2\76\n\74/b:if\76\n\74div class\75\47widget-content\47\76\n\74b:loop values\75\47data:feeds\47 var\75\47feed\47\76\n\74div expr:class\75\47\46quot;subscribe-wrapper subscribe-type-\46quot; + data:feed.type\47\76\n\74div expr:class\75\47\46quot;subscribe expanded subscribe-type-\46quot; + data:feed.type\47 expr:id\75\47\46quot;SW_READER_LIST_\46quot; + data:widgetId + data:feed.type\47 style\75\47display:none;\47\76\n\74div class\75\47top\47\76\n\74span class\75\47inner\47 expr:onclick\75\47\46quot;return(_SW_toggleReaderList(event, \\\46quot;\46quot; + data:widgetId +data:feed.type + \46quot;\\\46quot;));\46quot;\47\76\n\74img class\75\47subscribe-dropdown-arrow\47 expr:src\75\47data:arrowDropdownImg\47/\76\n\74img align\75\47absmiddle\47 alt\75\47\47 border\75\0470\47 class\75\47feed-icon\47 expr:src\75\47data:feedIconImg\47/\76\n\74data:feed.title\76\74/data:feed.title\76\n\74/span\76\n\74ul class\75\47feed-reader-links\47\76\n\74a class\75\47feed-reader-link\47 expr:href\75\47\46quot;http://www.google.com/ig/add?source\75bstp\46amp;feedurl\75\46quot; + data:feed.encodedUrl\47 target\75\47_blank\47\76\n\74img expr:src\75\47data:imagePathBase + \46quot;subscribe-google.png\46quot;\47/\76\n\74/a\76\n\74a class\75\47feed-reader-link\47 expr:href\75\47\46quot;http://www.bloglines.com/sub/\46quot; + data:feed.url\47 target\75\47_blank\47\76\n\74img expr:src\75\47data:imagePathBase + \46quot;subscribe-bloglines.png\46quot;\47/\76\n\74/a\76\n\74a class\75\47feed-reader-link\47 expr:href\75\47\46quot;http://www.netvibes.com/subscribe.php?url\75\46quot; + data:feed.encodedUrl\47 target\75\47_blank\47\76\n\74img expr:src\75\47data:imagePathBase + \46quot;subscribe-netvibes.png\46quot;\47/\76\n\74/a\76\n\74a class\75\47feed-reader-link\47 expr:href\75\47\46quot;http://www.newsgator.com/ngs/subscriber/subext.aspx?url\75\46quot; + data:feed.encodedUrl\47 target\75\47_blank\47\76\n\74img expr:src\75\47data:imagePathBase + \46quot;subscribe-newsgator.png\46quot;\47/\76\n\74/a\76\n\74a class\75\47feed-reader-link\47 expr:href\75\47\46quot;http://add.my.yahoo.com/content?url\75\46quot; + data:feed.encodedUrl\47 target\75\47_blank\47\76\n\74img expr:src\75\47data:imagePathBase + \46quot;subscribe-yahoo.png\46quot;\47/\76\n\74/a\76\n\74a class\75\47feed-reader-link\47 expr:href\75\47data:feed.url\47 target\75\47_blank\47\76\n\74img align\75\47absmiddle\47 class\75\47feed-icon\47 expr:src\75\47data:feedIconImg\47/\76\n                Atom\n              \74/a\76\n\74/ul\76\n\74/div\76\n\74div class\75\47bottom\47\76\74/div\76\n\74/div\76\n\74div class\75\47subscribe\47 expr:id\75\47\46quot;SW_READER_LIST_CLOSED_\46quot; + data:widgetId +data:feed.type\47 expr:onclick\75\47\46quot;return(_SW_toggleReaderList(event, \\\46quot;\46quot; + data:widgetId +data:feed.type + \46quot;\\\46quot;));\46quot;\47\76\n\74div class\75\47top\47\76\n\74span class\75\47inner\47\76\n\74img class\75\47subscribe-dropdown-arrow\47 expr:src\75\47data:arrowDropdownImg\47/\76\n\74span expr:onclick\75\47\46quot;return(_SW_toggleReaderList(event, \\\46quot;\46quot; + data:widgetId +data:feed.type + \46quot;\\\46quot;));\46quot;\47\76\n\74img align\75\47absmiddle\47 alt\75\47\47 border\75\0470\47 class\75\47feed-icon\47 expr:src\75\47data:feedIconImg\47/\76\n\74data:feed.title\76\74/data:feed.title\76\n\74/span\76\n\74/span\76\n\74/div\76\n\74div class\75\47bottom\47\76\74/div\76\n\74/div\76\n\74/div\76\n\74/b:loop\76\n\74div style\75\47clear:both\47\76\74/div\76\n\74/div\76\n\74/div\76\n\74b:include name\75\47quickedit\47\76\74/b:include\76\n\74/b:if\076'}}, document.getElementById('Subscribe1'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_LinkListView', new _WidgetInfo('LinkList4', 'sidebar',{'main': {'varName': '', 'template': '\74b:if cond\75\47data:title\47\76\74h2\76\74data:title\76\74/data:title\76\74/h2\76\74/b:if\76\n\74div class\75\47widget-content\47\76\n\74ul\76\n\74b:loop values\75\47data:links\47 var\75\47link\47\76\n\74li\76\74a expr:href\75\47data:link.target\47\76\74data:link.name\76\74/data:link.name\76\74/a\76\74/li\76\n\74/b:loop\76\n\74/ul\76\n\74b:include name\75\47quickedit\47\76\74/b:include\76\n\74/div\076'}}, document.getElementById('LinkList4'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_FeedView', new _WidgetInfo('Feed1', 'sidebar',{'main': {'varName': '', 'template': '\74h2\76\74data:title\76\74/data:title\76\74/h2\76\n\74div class\75\47widget-content\47 expr:id\75\47data:widget.instanceId + \46quot;_feedItemListDisplay\46quot;\47\76\n\74span style\75\47filter: alpha(25); opacity: 0.25;\47\76\n\74a expr:href\75\47data:feedUrl\47\76\74data:loadingMsg\76\74/data:loadingMsg\76\74/a\76\n\74/span\76\n\74/div\76\n\74b:include name\75\47quickedit\47\76\74/b:include\076'}}, document.getElementById('Feed1'), {'title': 'Twitter / youtube', 'showItemDate': false, 'showItemAuthor': false, 'feedUrl': 'https://web.archive.org/web/20091204014937/http://twitter.com/statuses/user_timeline/10228272.rss', 'numItemsShow': 5, 'loadingMsg': 'Loading...'}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_LinkListView', new _WidgetInfo('LinkList1', 'sidebar',{'main': {'varName': '', 'template': '\74b:if cond\75\47data:title\47\76\74h2\76\74data:title\76\74/data:title\76\74/h2\76\74/b:if\76\n\74div class\75\47widget-content\47\76\n\74ul\76\n\74b:loop values\75\47data:links\47 var\75\47link\47\76\n\74li\76\74a expr:href\75\47data:link.target\47\76\74data:link.name\76\74/data:link.name\76\74/a\76\74/li\76\n\74/b:loop\76\n\74/ul\76\n\74b:include name\75\47quickedit\47\76\74/b:include\76\n\74/div\076'}}, document.getElementById('LinkList1'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_LinkListView', new _WidgetInfo('LinkList2', 'sidebar',{'main': {'varName': '', 'template': '\74b:if cond\75\47data:title\47\76\74h2\76\74data:title\76\74/data:title\76\74/h2\76\74/b:if\76\n\74div class\75\47widget-content\47\76\n\74ul\76\n\74b:loop values\75\47data:links\47 var\75\47link\47\76\n\74li\76\74a expr:href\75\47data:link.target\47\76\74data:link.name\76\74/data:link.name\76\74/a\76\74/li\76\n\74/b:loop\76\n\74/ul\76\n\74b:include name\75\47quickedit\47\76\74/b:include\76\n\74/div\076'}}, document.getElementById('LinkList2'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_BlogArchiveView', new _WidgetInfo('BlogArchive1', 'sidebar',{'main': {'varName': '', 'template': '\74b:if cond\75\47data:title\47\76\n\74h2\76\74data:title\76\74/data:title\76\74/h2\76\n\74/b:if\76\n\74div class\75\47widget-content\47\76\n\74div id\75\47ArchiveList\47\76\n\74div expr:id\75\47data:widget.instanceId + \46quot;_ArchiveList\46quot;\47\76\n\74b:if cond\75\47data:style \75\75 \46quot;HIERARCHY\46quot;\47\76\n\74b:include data\75\47data\47 name\75\47interval\47\76\74/b:include\76\n\74/b:if\76\n\74b:if cond\75\47data:style \75\75 \46quot;FLAT\46quot;\47\76\n\74b:include data\75\47data\47 name\75\47flat\47\76\74/b:include\76\n\74/b:if\76\n\74b:if cond\75\47data:style \75\75 \46quot;MENU\46quot;\47\76\n\74b:include data\75\47data\47 name\75\47menu\47\76\74/b:include\76\n\74/b:if\76\n\74/div\76\n\74/div\76\n\74b:include name\75\47quickedit\47\76\74/b:include\76\n\74/div\076'}, 'flat': {'varName': 'data', 'template': '\74ul\76\n\74b:loop values\75\47data:data\47 var\75\47i\47\76\n\74li class\75\47archivedate\47\76\n\74a expr:href\75\47data:i.url\47\76\74data:i.name\76\74/data:i.name\76\74/a\76 (\74data:i.post-count\76\74/data:i.post-count\76)\n      \74/li\76\n\74/b:loop\76\n\74/ul\076'}, 'menu': {'varName': 'data', 'template': '\74select expr:id\75\47data:widget.instanceId + \46quot;_ArchiveMenu\46quot;\47\76\n\74option value\75\47\47\76\74data:title\76\74/data:title\76\74/option\76\n\74b:loop values\75\47data:data\47 var\75\47i\47\76\n\74option expr:value\75\47data:i.url\47\76\74data:i.name\76\74/data:i.name\76 (\74data:i.post-count\76\74/data:i.post-count\76)\74/option\76\n\74/b:loop\76\n\74/select\076'}, 'interval': {'varName': 'intervalData', 'template': '\74b:loop values\75\47data:intervalData\47 var\75\47i\47\76\n\74ul\76\n\74li expr:class\75\47\46quot;archivedate \46quot; + data:i.expclass\47\76\n\74b:include data\75\47i\47 name\75\47toggle\47\76\74/b:include\76\n\74a class\75\47post-count-link\47 expr:href\75\47data:i.url\47\76\74data:i.name\76\74/data:i.name\76\74/a\76\n\74span class\75\47post-count\47 dir\75\47ltr\47\76(\74data:i.post-count\76\74/data:i.post-count\76)\74/span\76\n\74b:if cond\75\47data:i.data\47\76\n\74b:include data\75\47i.data\47 name\75\47interval\47\76\74/b:include\76\n\74/b:if\76\n\74b:if cond\75\47data:i.posts\47\76\n\74b:include data\75\47i.posts\47 name\75\47posts\47\76\74/b:include\76\n\74/b:if\76\n\74/li\76\n\74/ul\76\n\74/b:loop\076'}, 'toggle': {'varName': 'interval', 'template': '\74b:if cond\75\47data:interval.toggleId\47\76\n\74b:if cond\75\47data:interval.expclass \75\75 \46quot;expanded\46quot;\47\76\n\74a class\75\47toggle\47 href\75\47javascript:void(0)\47\76\n\74span class\75\47zippy toggle-open\47\76\46#9660;\46#160;\74/span\76\n\74/a\76\n\74b:else\76\74/b:else\76\n\74a class\75\47toggle\47 href\75\47javascript:void(0)\47\76\n\74span class\75\47zippy\47\76\n\74b:if cond\75\47data:blog.languageDirection \75\75 \46quot;rtl\46quot;\47\76\n          \46#9668;\46#160;\n        \74b:else\76\74/b:else\76\n          \46#9658;\46#160;\n        \74/b:if\76\n\74/span\76\n\74/a\76\n\74/b:if\76\n\74/b:if\076'}, 'posts': {'varName': 'posts', 'template': '\74ul class\75\47posts\47\76\n\74b:loop values\75\47data:posts\47 var\75\47i\47\76\n\74li\76\74a expr:href\75\47data:i.url\47\76\74data:i.title\76\74/data:i.title\76\74/a\76\74/li\76\n\74/b:loop\76\n\74/ul\076'}}, document.getElementById('BlogArchive1'), {'languageDirection': 'ltr'}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_FollowersView', new _WidgetInfo('Followers1', 'sidebar',{'main': {'varName': '', 'template': '\74b:if cond\75\47data:title !\75 \46quot;\46quot;\47\76\n\74b:if cond\75\47data:codeSnippet !\75 \46quot;\46quot;\47\76\n\74h2 class\75\47title\47\76\74data:title\76\74/data:title\76\74/h2\76\n\74b:else\76\74/b:else\76\n\74b:if cond\75\47data:totalFollowerCount !\75 \46quot;\46quot;\47\76\n\74h2 class\75\47title\47\76\74data:title\76\74/data:title\76 (\74data:totalFollowerCount\76\74/data:totalFollowerCount\76)\74/h2\76\n\74/b:if\76\n\74/b:if\76\n\74/b:if\76\n\74div class\75\47widget-content\47\76\n\74div expr:id\75\47data:widget.instanceId + \46quot;-wrapper\46quot;\47\76\n\74b:if cond\75\47data:codeSnippet !\75 \46quot;\46quot;\47\76\n\74div style\75\47margin-right:2px;\47\76\n\74data:codeSnippet\76\74/data:codeSnippet\76\n\74/div\76\n\74b:else\76\74/b:else\76\n\74b:if cond\75\47data:totalFollowerCount \75\75 \46quot;\46quot;\47\76\n\74span class\75\47item-control following-not-admin\47\76\n\74b\76\74data:failureSnippet\76\74/data:failureSnippet\76\74/b\76\n\74/span\76\n\74span class\75\47item-control blog-admin\47\76\n\74b\76\74data:adminFailureSnippet\76\74/data:adminFailureSnippet\76\74/b\76\n\74/span\76\n\74b:else\76\74/b:else\76\n\74b:if cond\75\47data:followingLinkPresent\47\76\n\74div class\75\47follow-this profile-link item-control following-follow-this\47\76\n\74a expr:href\75\47\46quot;javascript:_FollowersView._openPopup(\\\46quot;\46quot; + data:followUri + \46quot;\\\46quot;);\46quot;\47\76\n\74data:followThisMessage\76\74/data:followThisMessage\76\n\74/a\76\n\74/div\76\n\74div class\75\47follow-this profile-link item-control following-stop-following-this\47\76\n\74a expr:href\75\47\46quot;javascript:_FollowersView._openPopup(\\\46quot;\46quot; + data:followUri + \46quot;\\\46quot;);\46quot;\47\76\n\74data:stopFollowingMessage\76\74/data:stopFollowingMessage\76\n\74/a\76\n\74/div\76\n\74/b:if\76\n\74div class\75\47followers-grid\47\76\n\74b:if cond\75\47data:totalFollowerCount \75\75 0\47\76\n\74div class\75\47profile-link item-control following-follow-this\47\76\n\74data:emptyFollowersMessage\76\74/data:emptyFollowersMessage\76\n\74/div\76\n\74/b:if\76\n\74b:loop values\75\47data:followers\47 var\75\47follower\47\76\n\74div class\75\47follower\47\76\n\74a expr:href\75\47data:follower.profileUrl\47 expr:title\75\47data:follower.displayName\47 rel\75\47nofollow\47\76\n\74img class\75\47follower-img\47 expr:alt\75\47data:follower.displayName\47 expr:height\75\47data:follower.imageHeight\47 expr:onerror\75\47\46quot;this.onerror\75null;this.src\75\\\46quot;\46quot; + data:anonFollowerImageUrl + \46quot;\\\46quot;;\46quot;\47 expr:onload\75\47\46quot;setAttributeOnload(this, \\\46quot;src\\\46quot;, \\\46quot;\46quot; + data:follower.imageUrl + \46quot;\\\46quot;)\46quot;\47 expr:width\75\47data:follower.imageWidth\47 src\75\47http://img1.blogblog.com/img/blank.gif\47/\76\n\74/a\76\n\74/div\76\n\74/b:loop\76\n\74div class\75\47clear\47\76\74/div\76\n\74/div\76\n\74div class\75\47followers-canvas profile-link\47\76\n\74data:followersFooterMessage\76\74/data:followersFooterMessage\76\n\74span class\75\47item-control following-not-admin\47\76\n\74a expr:href\75\47data:followersUri\47\76\n\74data:viewAllMessage\76\74/data:viewAllMessage\76\n\74/a\76\n\74/span\76\n\74span class\75\47item-control blog-admin\47\76\n\74a expr:href\75\47data:manageFollowersUri\47\76\n\74data:manageFollowersMessage\76\74/data:manageFollowersMessage\76\n\74/a\76\n\74/span\76\n\74/div\76\n\74/b:if\76\n\74/b:if\76\n\74/div\76\n\74b:include name\75\47quickedit\47\76\74/b:include\76\n\74/div\076'}}, document.getElementById('Followers1'), {'title': 'Followers', 'codeSnippet': '\74script type\75\42text/javascript\42\76\n        if (!window.google || !google.friendconnect) {\n          document.write(\47\74script type\75\42text/javascript\42\47 +\n              \47src\75\42http://www.google.com/friendconnect/script/friendconnect.js\42\76\47 +\n              \47\74/scr\47 + \47ipt\76\47);\n        }\n      \74/script\76\n\74script type\75\42text/javascript\42\76\n      if (!window.registeredBloggerCallbacks) {\n        window.registeredBloggerCallbacks \75 true;\n\n        \n\n        \n        gadgets.rpc.register(\47requestReload\47, function() {\n          document.location.reload();\n        });\n\n        \n        gadgets.rpc.register(\47requestSignOut\47, function(siteId) {\n          \n          google.friendconnect.container.openSocialSiteId \75 siteId;\n          google.friendconnect.requestSignOut();\n        });\n      }\n    \74/script\76\n\74script type\75\42text/javascript\42\76\n    \n    function registerGetBlogUrls() {\n      gadgets.rpc.register(\47getBlogUrls\47, function() {\n        var holder \75 {};\n        \n          \n          \n          \n            holder.postFeed \75 \42http://www.blogger.com/feeds/8913912091036362264/posts/default\42;\n          \n          \n          \n            holder.commentFeed \75 \42http://www.blogger.com/feeds/8913912091036362264/comments/default\42;\n          \n        \n        return holder;\n      });\n    }\n  \74/script\76\n\74script type\75\42text/javascript\42\76\n  if (!window.registeredCommonBloggerCallbacks) {\n    window.registeredCommonBloggerCallbacks \75 true;\n\n    gadgets.rpc.register(\47resize_iframe\47, function(height) {\n      var el \75 document.getElementById(this[\47f\47]);\n      if (el) {\n        el.style.height \75 height + \47px\47;\n      }\n    });\n\n    // We don\47t do anything w/ this, but don\47t let it bubble up and cause an\n    // exception\n    // TODO(henrywong): Don\47t just one-off this, fix at a more comprehensive\n    // level.\n    gadgets.rpc.register(\47set_pref\47, function() {});\n\n    \n    gadgets.rpc.register(\47registerGadgetForRpcs\47, function(gadgetDomain, iframeName) {\n      gadgets.rpc.setupReceiver(iframeName);\n    });\n\n    registerGetBlogUrls();\n  }\n  \74/script\76\n\74div id\75\42div-y80kq3u8vep5\42 style\75\42width: 100%; \42\76\74/div\76\n\74script type\75\42text/javascript\42\76\n    var skin \75 {};\n    skin[\47FACE_SIZE\47] \75 \04732\47;\n    skin[\47HEIGHT\47] \75 \042260\42;\n    skin[\47TITLE\47] \75 \42Followers\42;\n    skin[\47BORDER_COLOR\47] \75 \42transparent\42;\n    skin[\47ENDCAP_BG_COLOR\47] \75 \42transparent\42;\n    skin[\47ENDCAP_TEXT_COLOR\47] \75 \42#666666\42;\n    skin[\47ENDCAP_LINK_COLOR\47] \75 \42#5588aa\42;\n    skin[\47ALTERNATE_BG_COLOR\47] \75 \42transparent\42;\n    \n    skin[\47CONTENT_BG_COLOR\47] \75 \42transparent\42;\n    skin[\47CONTENT_LINK_COLOR\47] \75 \42#5588aa\42;\n    skin[\47CONTENT_TEXT_COLOR\47] \75 \42#666666\42;\n    skin[\47CONTENT_SECONDARY_LINK_COLOR\47] \75 \42#5588aa\42;\n    skin[\47CONTENT_SECONDARY_TEXT_COLOR\47] \75 \42#999999\42;\n    skin[\47CONTENT_HEADLINE_COLOR\47] \75 \42#cc6600\42;\n    skin[\47FONT_FACE\47] \75 \42normal normal 100% Arial, sans-serif\42;\n    google.friendconnect.container.setParentUrl(\42/\42);\n    google.friendconnect.container[\42renderMembersGadget\42](\n    {id: \42div-y80kq3u8vep5\42,\n     height: 260,\n     \n     \n     \n     site: \04209891915503531901696\42,\n      \n     locale: \47en\47 },\n     skin);\n  \74/script\076'}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML2', 'sidebar',{'main': {'varName': '', 'template': '\74b:if cond\75\47data:title !\75 \46quot;\46quot;\47\76\n\74h2 class\75\47title\47\76\74data:title\76\74/data:title\76\74/h2\76\n\74/b:if\76\n\74div class\75\47widget-content\47\76\n\74data:content\76\74/data:content\76\n\74/div\76\n\74b:include name\75\47quickedit\47\76\74/b:include\076'}}, document.getElementById('HTML2'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_NavbarView', new _WidgetInfo('Navbar1', 'navbar'));
_WidgetManager._RegisterWidget('_BlogView', new _WidgetInfo('Blog1', 'main'));
</script>


</body></html>