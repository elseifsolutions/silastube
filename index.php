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
    <div>
  <div id="active_sharing_div" name="active_sharing_div"></div>
  <script type="text/javascript">
    // <![CDATA[
    var fo = new SWFObject("active_sharing.swf", "active_sharing", "550", "115", 7, "#FFFFFF");
    var showstr = "Videos being watched right now...";
    fo.addParam('wmode', 'opaque');
    fo.addVariable("t", showstr);
    fo.write("active_sharing_div");
    // ]]>
  </script>
</div>
  

      <div class="homepage-content-block sponsored-videos-block">
    <div class="homepage-block-heading homepage-block-heading-gray">Promoted Videos</div>
    <div>
      <div class="homepage-sponsored-video">
        <div class="videoIconWrapperOuter">
          <div class="videoIconWrapperInner">
          <div class="vstill"><a href="/cthru?key=AhEdyT8y55iqPsZSHBqGrOiTPvIHlTLbfNPBrKaiLy99Sw1d9WHQttV40GkgLOIBs9zDzMnemNhwWWZTcr4lAfi9BLbb7wpa3Av8ZL0vbJeZplXucyXk2FsW-NygwQBrWgHijqSC_9YHIyOy1wAXDeVe9MePKkC2symwYJY3vgPaOmniSvTIDb3SBx24g_lzXX3ou53s_Uc=" name="&amp;lid=DV+-+VideoNameFull+-+VideoCreator&amp;lpos=hp-s0" onmousedown="urchinTracker('/Events/Home/DV_click/VideoCreator/VideoNameFull');"><img src="dynamic/thumb/default.jpeg" class="vimg120"></a></div>
          </div>
        </div>
        <div class="vtitle smallText">
          <a href="/cthru?key=AhEdyT8y55iqPsZSHBqGrOiTPvIHlTLbfNPBrKaiLy99Sw1d9WHQttV40GkgLOIBs9zDzMnemNhwWWZTcr4lAfi9BLbb7wpa3Av8ZL0vbJeZplXucyXk2FsW-NygwQBrWgHijqSC_9YHIyOy1wAXDeVe9MePKkC2symwYJY3vgPaOmniSvTIDb3SBx24g_lzXX3ou53s_Uc=" name="&amp;lid=DV+-+VideoNameFull+-+VideoCreator&amp;lpos=hp-s0">Video Name ...</a>
        </div>
        <div class="vfacets">
        <a href="/user/VideoCreator" class="dg">VideoCreator</a>
        </div>
      </div>
      <div class="homepage-sponsored-video">
        <div class="videoIconWrapperOuter">
          <div class="videoIconWrapperInner">
          <div class="vstill"><a href="/cthru?key=AhEdyT8y55iqPsZSHBqGrOiTPvIHlTLbfNPBrKaiLy99Sw1d9WHQttV40GkgLOIBs9zDzMnemNhwWWZTcr4lAfi9BLbb7wpa3Av8ZL0vbJeZplXucyXk2FsW-NygwQBrWgHijqSC_9YHIyOy1wAXDeVe9MePKkC2symwYJY3vgPaOmniSvTIDb3SBx24g_lzXX3ou53s_Uc=" name="&amp;lid=DV+-+VideoNameFull+-+VideoCreator&amp;lpos=hp-s0" onmousedown="urchinTracker('/Events/Home/DV_click/VideoCreator/VideoNameFull');"><img src="dynamic/thumb/default.jpeg" class="vimg120"></a></div>
          </div>
        </div>
        <div class="vtitle smallText">
          <a href="/cthru?key=AhEdyT8y55iqPsZSHBqGrOiTPvIHlTLbfNPBrKaiLy99Sw1d9WHQttV40GkgLOIBs9zDzMnemNhwWWZTcr4lAfi9BLbb7wpa3Av8ZL0vbJeZplXucyXk2FsW-NygwQBrWgHijqSC_9YHIyOy1wAXDeVe9MePKkC2symwYJY3vgPaOmniSvTIDb3SBx24g_lzXX3ou53s_Uc=" name="&amp;lid=DV+-+VideoNameFull+-+VideoCreator&amp;lpos=hp-s0">Video Name ...</a>
        </div>
        <div class="vfacets">
        <a href="/user/VideoCreator" class="dg">VideoCreator</a>
        </div>
      </div>
      <div class="homepage-sponsored-video">
        <div class="videoIconWrapperOuter">
          <div class="videoIconWrapperInner">
          <div class="vstill"><a href="/cthru?key=AhEdyT8y55iqPsZSHBqGrOiTPvIHlTLbfNPBrKaiLy99Sw1d9WHQttV40GkgLOIBs9zDzMnemNhwWWZTcr4lAfi9BLbb7wpa3Av8ZL0vbJeZplXucyXk2FsW-NygwQBrWgHijqSC_9YHIyOy1wAXDeVe9MePKkC2symwYJY3vgPaOmniSvTIDb3SBx24g_lzXX3ou53s_Uc=" name="&amp;lid=DV+-+VideoNameFull+-+VideoCreator&amp;lpos=hp-s0" onmousedown="urchinTracker('/Events/Home/DV_click/VideoCreator/VideoNameFull');"><img src="dynamic/thumb/default.jpeg" class="vimg120"></a></div>
          </div>
        </div>
        <div class="vtitle smallText">
          <a href="/cthru?key=AhEdyT8y55iqPsZSHBqGrOiTPvIHlTLbfNPBrKaiLy99Sw1d9WHQttV40GkgLOIBs9zDzMnemNhwWWZTcr4lAfi9BLbb7wpa3Av8ZL0vbJeZplXucyXk2FsW-NygwQBrWgHijqSC_9YHIyOy1wAXDeVe9MePKkC2symwYJY3vgPaOmniSvTIDb3SBx24g_lzXX3ou53s_Uc=" name="&amp;lid=DV+-+VideoNameFull+-+VideoCreator&amp;lpos=hp-s0">Video Name ...</a>
        </div>
        <div class="vfacets">
        <a href="/user/VideoCreator" class="dg">VideoCreator</a>
        </div>
      </div>
      <div class="homepage-sponsored-video">
        <div class="videoIconWrapperOuter">
          <div class="videoIconWrapperInner">
          <div class="vstill"><a href="/cthru?key=AhEdyT8y55iqPsZSHBqGrOiTPvIHlTLbfNPBrKaiLy99Sw1d9WHQttV40GkgLOIBs9zDzMnemNhwWWZTcr4lAfi9BLbb7wpa3Av8ZL0vbJeZplXucyXk2FsW-NygwQBrWgHijqSC_9YHIyOy1wAXDeVe9MePKkC2symwYJY3vgPaOmniSvTIDb3SBx24g_lzXX3ou53s_Uc=" name="&amp;lid=DV+-+VideoNameFull+-+VideoCreator&amp;lpos=hp-s0" onmousedown="urchinTracker('/Events/Home/DV_click/VideoCreator/VideoNameFull');"><img src="dynamic/thumb/default.jpeg" class="vimg120"></a></div>
          </div>
        </div>
        <div class="vtitle smallText">
          <a href="/cthru?key=AhEdyT8y55iqPsZSHBqGrOiTPvIHlTLbfNPBrKaiLy99Sw1d9WHQttV40GkgLOIBs9zDzMnemNhwWWZTcr4lAfi9BLbb7wpa3Av8ZL0vbJeZplXucyXk2FsW-NygwQBrWgHijqSC_9YHIyOy1wAXDeVe9MePKkC2symwYJY3vgPaOmniSvTIDb3SBx24g_lzXX3ou53s_Uc=" name="&amp;lid=DV+-+VideoNameFull+-+VideoCreator&amp;lpos=hp-s0">Video Name ...</a>
        </div>
        <div class="vfacets">
        <a href="/user/VideoCreator" class="dg">VideoCreator</a>
        </div>
      </div>
    <div class="spacer-sm"></div>
    </div>
  </div>


  <div id="homepage-featured-heading">
      <div id="homepage-featured-more-top"><a id="hpVideoListMoreLink" href="/browse?s=rf" onmousedown="urchinTracker('/Events/Home/SeeMore/Featured/Top');">See More Featured Videos</a></div>
    <h1 id="hpVideoListHead">Featured Videos</h1>
  </div>

  <div id="homepage-featured-tabs">
    <a href="#" id="hpTopFavoritesLink" name="&amp;lid=hpTopFavoritesTab&amp;lpos=hpTabs" onclick="swapVideoList(this); return false;">Top Favorited</a>
    <a href="#" id="hpMostDiscussedLink" name="&amp;lid=hpMostDiscussedTab&amp;lpos=hpTabs" onclick="swapVideoList(this); return false;">Most Discussed</a>
    <a href="#" id="hpMostViewedLink" name="&amp;lid=hpMostViewedTab&amp;lpos=hpTabs" onclick="swapVideoList(this); return false;">Most Viewed</a>
    <a href="#" id="hpFeaturedLink" name="&amp;lid=hpFeaturedTab&amp;lpos=hpTabs" onclick="swapVideoList(this); return false;" class="first hilite">Featured</a>
    <div class="clear"></div>
  </div>



  <div id="homepage-video-list" class="browseListView">
    <div id="hpFeatured">

      





  <div class="vlentry">




    <div class="vlcontainer"><div class="v120WideEntry"><div class="v120WrapperOuter"><div class="v120WrapperInner"><a id="video-watch-url-VideoID" href="/watch?v=VideoID" onmousedown="urchinTracker('/Events/VideoClicks/index/image/VideoName');"><img src="dynamic/thumb/default.jpeg" class="vimg120" title="VideoName" alt="video"></a><div id="quicklist-icon-VideoID" class="addtoQL90"><a id="add-to-quicklist-VideoID" href="#" ql="VideoID" title="Add Video to QuickList"><img class="QLIconImg" src="/yt/img/pixel-vfl73.gif" border="0" onclick="clicked_add_icon(this, this.parentNode.getAttribute('ql'), 0, 'http://i1.ytimg.com/vi/VideoID/default.jpg', 'VideoName');return false;" onmouseover="mouseOverQuickAdd(this)" onmouseout="mouseOutQuickAdd(this)"></a><div class="hid quicklist-inlist"><a href="/watch_queue?all">Added</a></div></div>

</div></div>
      </div>

      <div class="vldescbox" id="vldescbox_VideoID">


        <div class="vltitle">
          <div class="vlshortTitle">
              <span id="translated_short_prefix_VideoID" class="small hide">[TRANSLATED]</span>
            <a id="video-short-title-VideoID" href="/watch?v=VideoID" onmousedown="urchinTracker('/Events/VideoClicks/index/title/VideoName');" title="VideoName">VideoName</a>
          </div>
          <div class="vllongTitle">
              <span id="translated_long_prefix_VideoID" class="small hide">[TRANSLATED]</span>
            <a id="video-long-title-VideoID" href="/watch?v=VideoID" onmousedown="urchinTracker('/Events/VideoClicks/index/title/VideoName');" title="VideoName">VideoName</a>
          </div>
        </div>


        <div id="video-description-VideoID" class="vldesc">
          
        <span id="BeginvidDescD2hG8urYp4">
  Short Video Description With Extra Description
Stuff Stuff Stuff Stuff

Stuff Stuff
  </span>

      <span id="RemainvidDescVideoID" style="display: none">Short Video Description With Extra Description<br/>Stuff Stuff Stuff Stuff<br/><br/>Stuff Stuff Stuff Stuff Stuff Stuff Stuff<br/><br/>Stuff Stuff Stuff Stuff Stuff Stuff Stuff <br/><br/>Stuff Stuff Stuff Stuff Stuff Stuff Stuff</span>
      <span id="MorevidDescVideoID" class="smallText">(<a href="#" class="eLink" onclick="showDiv('RemainvidDescVideoID'); hideDiv('MorevidDescVideoID'); hideDiv('BeginvidDescVideoID'); showDiv('LessvidDescVideoID'); return false;">more</a>)</span>
      <span id="LessvidDescVideoID" style="display: none" class="smallText">(<a href="#" class="eLink" onclick="hideDiv('RemainvidDescVideoID'); hideDiv('LessvidDescVideoID'); showDiv('BeginvidDescD2hG8urYp4'); showDiv('MorevidDescVideoID'); return false;">less</a>)</span>


        </div>



      </div>

      <div class="vlclearaltl"></div>



    </div>

    <div class="vlfacets">
      <div class="vladded">

      </div>
        <div><span class="grayText vlfromlbl">From:</span><span class="vlfrom"><a id="video-from-username-VideoID" href="/user/VideoCreator" onmousedown="urchinTracker('/Events/VideoClicks/index/username/VideoName');">VideoCreator</a></span></div>
        <div class="clearL"></div>

      <span class="grayText vlviewlbl">Views:</span><span id="video-num-views-VideoID" class="vlviewcount">0</span><br/>



      <div id="video-average-rating-VideoID" class="video-thumb-duration-rating">
                

  <div>

  
<img class="ratingVS ratingVS-0.0" alt="0.0" src="http://s.ytimg.com/yt/img/pixel-vfl73.gif"/>



  </div>





        <div id="video-run-time-VideoID" class="runtime">00:00</div>
      </div>
      <div class="vlclearalt"></div>



    </div>

    <div class="vlclearaltl"></div>




  </div> <!-- end vEntry -->


    </div>
  </div> <!-- end Video List -->
  <div id="homepage-featured-more-bottom">
    <div class="floatR"><a href="/browse?s=rf" onmousedown="urchinTracker('/Events/Home/SeeMore/Featured/Bottom');">See More Featured Videos</a></div>
    <div class="clear"></div>
  </div>
</div>


<div id="homepage-side-content">
  
  <!-- Begin ad tag -->
    <iframe style="border: 0px; overflow: hidden;" src="/player/videoplayer" height="260" width="300"></iframe>
    <h1>Video Name</h1>

  <!-- End ad tag -->


    <div class="homepage-content-block">
            <div class="signInBoxBorder">
  <div class="signInBoxContent">
      <strong>Want to personalize this homepage?</strong><br/>
    <a href="/login?next=/"><strong>Sign in to SilasTube now!</strong></a>
    <div class="homepage-border-dotted"></div>
    <span class="smgrayText">
    <a href="https://www.google.com/accounts/ServiceLogin?service=silastube&amp;hl=en_US&amp;passive=true&amp;ltmpl=&amp;continue=http%3A//sitetest1.meh.serv00.net/signup%3Fhl%3Den_US%26warned%3D&amp;">Sign in with your Scratchsoft Account!</a>
    </span>
    <a href="#" onclick="window.open('/t/help_gaia','login_help','width=580,height=480,resizable=yes,scrollbars=yes,status=0').focus();" rel="nofollow"><img src="/yt/img/pixel-vfl73.gif" border="0" class="alignMid gaiaHelpBtn" alt=""></a>
  </div>      </div>  

    </div> <!-- end homepage-content-block -->



  
  <!-- Begin ad tag -->
    <div id="ad_creative_2" class="ad-div homepage-content-block ad-block">

  

  


  
  <script type="text/javascript">
    ord=Math.random()*10000000000000000;
    document.write('<script language="JavaScript" src="http://n4061ad.doubleclick.net/adj/com.sthome/promo1;sz=300x50;sz=300x100;kl=N;klg=en;kt=K;dcdupd=1;kga=-1;kgg=-1;kcr=us;kmyd=ad_creative_2;tile=2;ord=' + ord + '?" type="text/javascript"><\/script>');
  </script>


    </div>

  <!-- End ad tag -->


  
  <!-- Begin ad tag -->
<a href="https://discord.gg/wh3x527DWQ"> <img src="/static/img/discord.png" alt="Advertisment" width="300" height="60"></a>
  <!-- End ad tag -->
<!--spotlight-->
 
  <!--spotlight-->

  <div class="homepage-side-block padT10">
  <div class="homepage-yellow-block">
    <div class="homepage-block-heading" style="color:#CC6600">What's New</div>



    <div class="homepage-whatsnew-entry">
      <div class="homepage-whatsnew-image"><a href="/t/captions_about"><img src="http://sitetest1.meh.serv00.net/yt/img/whats_new/icon_whatsnew_captions-vfl56859.gif" border="0" width="30" height="37"/></a></div>
      <div class="homepage-whatsnew-desc">
        <a href="/t/captions_about"><b>Captions and Subtitles</b></a><br>
Add multi-track captions and subtitles to your videos
      </div>
    </div><div class="clear"></div>

    <div class="homepage-whatsnew-entry">
      <div class="homepage-whatsnew-image"><a href="/t/annotations_about"><img src="http://sitetest1.meh.serv00.net/yt/img/whats_new/annotation-vfl42689.gif" border="0" width="30" height="37"/></a></div>
      <div class="homepage-whatsnew-desc">
<b><a href="/t/annotations_about">Video Annotations</a></b><br/>Add interactive commentary and links to your videos
      </div>
    </div><div class="clear"></div>

        <div class="bottomBorderDotted"></div>
        <b><a href="/blog" style="color:#CC6600">Welcome To SilasTube!</a></b><br>
        We Recently Started Working On The Pages If You Find Any Bugs, Report Them In The Discord Server.
      <div class="alignR padT5">
        <a href="/blog" style="color:#CC6600">Read more in our Blog</a>
      </div>
      <div style="font-size: 1px; height: 1px;"><br/></div>
  </div><img class="homepage-yellow-block-bot"/>
</div>


    
  <!-- Begin ad tag -->
    <div id="ad_creative_3" class="ad-div homepage-side-block">

  

  


  
  <script type="text/javascript">
    ord=Math.random()*10000000000000000;
    document.write('<script language="JavaScript" src="http://n4061ad.doubleclick.net/adj/com.sthome/promo2;sz=300x50;sz=300x100;kl=N;klg=en;kt=K;dcdupd=1;kga=-1;kgg=-1;kcr=us;kmyd=ad_creative_3;tile=3;ord=' + ord + '?" type="text/javascript"><\/script>');
  </script>


    </div>

  <!-- End ad tag -->
  



</div> <!-- end homepage-side-content -->

<div class="clear"></div>


  <!-- Begin ad tag -->

  

  


  
  <script type="text/javascript">
    ord=Math.random()*10000000000000000;
    document.write('<script language="JavaScript" src="http://n4061ad.doubleclick.net/adj/com.sthome/t1;sz=1x1;kl=N;klg=en;kt=K;dcdupd=1;kga=-1;kgg=-1;kcr=us;tile=5;ord=' + ord + '?" type="text/javascript"><\/script>');
  </script>



  <!-- End ad tag -->


    <div class="clear"></div>
  
<?php require($_SERVER['DOCUMENT_ROOT'] . "/static/mod/footer.php"); ?>


<a name="pageBottom"></a>

</body>
<script type="text/javascript">
  window.setTimeout('window.google.ac.install(document.searchForm,document.searchForm.search_query,"yt",true,"close",true,"Suggestions")', 100);
</script>



</html>