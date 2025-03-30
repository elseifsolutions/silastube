<?php require($_SERVER['DOCUMENT_ROOT'] . "/static/important/config.inc.php"); ?>
<?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to signup page
    header("Location: signup.php");
    exit();
}
?>

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
  <h1>i didn't have time to finish this so you guys can finish it, thank me later for archiving this page!</h1>
<div id="homepage-main-content">
<!DOCTYPE html>
<html lang="en" dir="ltr"><!-- machid: sWkFSZzctYUFHdmo4Ml9Zcm1XbC1raldNQklVRUN0LWRMak1NVnh0WkJuQTNicTg0X1E3UDZ3 --><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script src="./YouTube - _Upload your video___files/athena.js.download" type="text/javascript"></script>
<script type="text/javascript">window.addEventListener('DOMContentLoaded',function(){var v=archive_analytics.values;v.service='wb';v.server_name='wwwb-app28.us.archive.org';v.server_ms=1722;archive_analytics.send_pageview({});});</script>
<script type="text/javascript" src="/yt/js/bundle-playback.js.download" charset="utf-8"></script>
<script type="text/javascript" src="./YouTube - _Upload your video___files/wombat.js.download" charset="utf-8"></script>
<script>window.RufflePlayer=window.RufflePlayer||{};window.RufflePlayer.config={"autoplay":"on","unmuteOverlay":"hidden"};</script>
<script type="text/javascript" src="./YouTube - _Upload your video___files/ruffle.js.download"></script>
<script type="text/javascript">
    __wm.init("meh.serv00.net");
  __wm.wombat("http://upload.youtube.com/my_videos_upload","20100805073632","https://web.archive.org/","web","/_static/",
        "1280993792");
</script>
<link rel="stylesheet" type="text/css" href="/yt/css/banner-styles.css">
<link rel="stylesheet" type="text/css" href="./YouTube - _Upload your video___files/iconochive.css">
<!-- Start Wayback Rewrite JS Include -->
<script type="text/javascript" src="./YouTube - _Upload your video___files/jwplayer.js.download" charset="utf-8"></script>
<script type="text/javascript" src="./YouTube - _Upload your video___files/bundle-video.js.download" charset="utf-8"></script>
<script type="text/javascript">
_wmVideos_.init({ prefix:"/web" });
</script>
<!-- End Wayback Rewrite JS Include -->

    

   

        <link id="www-core-css" rel="stylesheet" href="/yt/css/www-core-vfl181479.css">


      <link rel="stylesheet" href="/yt/css/www-the-rest-vfl181382.css">

      <link rel="stylesheet" href="/yt/css/www-upload-new-vfl180318.css">


  


    
  <link rel="search" type="application/opensearchdescription+xml" href="/web/20100805073632/http://www.youtube.com/opensearch?locale=en_US" title="YouTube Video Search">
  <link rel="icon" href="/yt/favicon-vfl147246.ico" type="image/x-icon">
  <link rel="shortcut icon" href="/yt/favicon-vfl147246.ico" type="image/x-icon">
    <link rel="alternate" media="handheld" href="/my_videos_upload?desktop_uri=%2Fmy_videos_upload&amp;gl=CA">
  
    <meta name="description" content="Share your videos with friends, family, and the world">

    <meta name="keywords" content="video, free, simple, fast, share, sharing, upload, send, host, hosting">

  

          <script id="www-core-js" src="./YouTube - _Upload your video___files/www-core-vfl181437.js.download"></script>


  <!-- begin postpage section -->
  <script>
    
    yt.setConfig({
      'XSRF_TOKEN': 'V0zoS27z9sL21Cnawr1v-hVMBS18MTI4MTA4MDE5Mg==',
      'XSRF_FIELD_NAME': 'session_token'
    });
    yt.pubsub.subscribe('init', yt.www.xsrf.populateSessionToken);


    yt.setConfig('XSRF_QL_PAIR', 'session_token=7cas5AETIBoks8en_PrluLuJztd8MA==');



    yt.setConfig('LOGGED_IN', true);
  </script>

      <!--<base href="https://web.archive.org/web/20100805073632/http://www.youtube.com/">--><base href=".">
      <script id="www-upload-new-js" src="./YouTube - _Upload your video___files/www-upload-new-vfl180237.js.download"></script>

    <script type="text/javascript">

      yt.setMsg({
        'WARN_UPLOAD_CANCELLED': 'The upload was cancelled.',
        'ERROR_UPLOAD_FAILED': 'The upload failed due to an unknown error.',
        'ERROR_FILE_TOO_LARGE': 'The upload failed because the file is too large.',
        'WARN_INVALID_FORMAT': 'The file you are uploading may not be a valid video file.',
        'SUCCESS_UPLOAD_COMPLETE': 'Your file has been uploaded. We are now processing the video...',
        'SUCCESS_PROCESSING_COMPLETE': 'Your video will be live in a moment at:',
        'PROCESSING_VIDEO': 'Processing video...',
        'SUCCESS_SETTINGS_SAVED': 'Your video settings have been saved.',
        'WARN_SETTINGS_PENDING': 'Changes pending: your video settings will be saved once your upload is completed.',
        'ERROR_SETTINGS_SAVED': 'There was an error saving your video settings.',
        'SAVING_IN_PROGRESS': 'Saving...',
        'SAVE_CHANGES': 'Save changes',
        'RETRY': 'Upload queued: your upload will be retried after the remaining videos have completed.',
        'STARTING_UPLOAD': 'Starting upload...',
        'UPLOAD_TIME_REMAINING': 'About *** min. remaining...',
        'LESS_THAN_ONE_MINUTE': 'Less than a minute remaining...',
        'FINISHING_UPLOAD': 'Finishing upload...',
        'COMPLETED_UPLOAD': 'Upload completed',
        'PROCESSING_TIME_REMAINING': 'About *** min. remaining...',

        'ERROR_REVSHARE_SETTINGS_SAVED': 'There was an error saving your revenue sharing settings.',

        'UPLOAD_IN_PROGRESS_WARNING': 'Your upload is still in progress and will be lost if you navigate away from this page. Click \"Cancel\" to continue your upload.',

        'FINISHING_PROCESSING': 'Finishing processing...',
        'COMPLETED_PROCESSING': 'Processing completed'
      });

      yt.setMsg({

        'UF_ISSUE_1': 'The file you uploaded contains only audio and no video.',
        'UF_ISSUE_2': 'You uploaded an image file, not a video file.',
        'UF_ISSUE_3': 'The file you uploaded is too short.',
        'UF_ISSUE_4': 'You uploaded a MS movie maker project file, not a video file. The section on MS movie maker in <a href=\"http:\/\/www.google.com\/support\/youtube\/bin\/answer.py?hl=en&answer=55744\" target=\"_blank\">this article<\/a> will help you fix the problem.',
        'UF_ISSUE_5': 'The file you uploaded is not a properly formatted video file.',
        'UF_ISSUE_6': 'You uploaded a document file, not a video file. <a href=\"http:\/\/www.google.com\/support\/youtube\/bin\/answer.py?hl=en&answer=55744\" target=\"_blank\">This article<\/a> should help you.',
        'UF_ISSUE_7': 'You uploaded an archive file, not a video file. <a href=\"http:\/\/www.google.com\/support\/youtube\/bin\/answer.py?hl=en&answer=55744\" target=\"_blank\">This article<\/a> should help you.',
        'UF_ISSUE_101': 'We did not recognize the container format for this file, but we will go ahead and try processing it anyway. See <a href=\"http:\/\/www.google.com\/support\/youtube\/bin\/answer.py?hl=en&answer=132460\" target=\"_blank\">this article<\/a> on recommended formats for more information.',
        'UF_ISSUE_102': 'We did not recognize the video codec format for this file, but we will go ahead and try processing it anyway. See <a href=\"http:\/\/www.google.com\/support\/youtube\/bin\/answer.py?hl=en&answer=132460\" target=\"_blank\">this article<\/a> on recommended formats for more information.',
        'UF_ISSUE_103': 'We did not recognize the audio codec format for this file, but we will go ahead and try processing it anyway. See <a href=\"http:\/\/www.google.com\/support\/youtube\/bin\/answer.py?hl=en&answer=132460\" target=\"_blank\">this article<\/a> on recommended formats for more information.',
        'UF_ISSUE_104': 'We see inconsistencies in the aspect ratios in your uploaded video file. If you see something odd about your file, you might want to take a look at <a href=\"http:\/\/www.google.com\/support\/youtube\/bin\/answer.py?hl=en&answer=146402\" target=\"_blank\">this article<\/a> for more information.'

      });

      var options = {
        'javaUrl': '/web/20100805073632/http://www.youtube.com/redirect?q=http%3A%2F%2Fs.ytimg.com%2Fyt%2Fuploaderapi-vfl162728.jar&amp;event=upload_jar&amp;usg=fEigxnhkXdixdNF0zRQF4OGD8PM=',
        'flashUrl': '/web/20100805073632/http://s.ytimg.com/yt/swf/uploaderapi-vfl151036.swf',
        'rupioUrl': '/web/20100805073632/http://upload.youtube.com/upload/rupio',
        'locale': 'en_US',
        'uploadKey': 'E72FD322251E43A5-FD58142723DB792F',
        'restrictMechanism': '',
        'returnAddress': 'upload.youtube.com',
        'baseDomain': 'https://web.archive.org/web/20100805073632/http://www.youtube.com',
        'sessionKey': 'ut2Amuu0Vgxk1280993792.43',
        'firstTime': false,
        'isReadOnly': false,
        'processingUrl' : 'https://web.archive.org/web/20100805073632/http://upload.youtube.com/api/upload_feedback',
        'parentVideoId' : '',
        'allowOffWeb' : 'True',
        'enableXhr': false,
        'hasSeriesPlaylist' : false
      };

      var uploader = new yt.www.upload.Uploader(options);
    </script>
  
        <script type="text/javascript">
  (function() {

    var updateInfo = function(el, info) {
      if (el) {
        if (info.connected_as != '') {
          el.innerHTML = info.connected_as;
        }

        if (!info.is_connected) {
          var spinny_el = _gel('autoshare-spare-spinny');
          if (spinny_el) {
            el.innerHTML = spinny_el.innerHTML;
          } else {
            el.innerHTML = '-';
          }
        }
      }
    }

    var canConnectCallback = function(the_autoshare, service) {
      var is_gaia_user = the_autoshare.isGaiaUser();
      yt.style.setDisplayed('autoshare-google-nag', !is_gaia_user);
      yt.style.setDisplayed('autoshare-google-linked', false);
      yt.style.setDisplayed('autoshare-facebook-publish-nag', false);
      yt.style.setDisplayed('autoshare-facebook-feed-nag', false);
      yt.style.setDisplayed('autoshare-service-sharing-spinny-' + service, true);
      return is_gaia_user;
    }

    var serviceChangedCallback = function(the_autoshare) {
      var service_info = the_autoshare.getServiceInfo();
      for (var service in service_info) {
        var info = service_info[service];

        updateInfo(_gel('autoshare-service-sharing-info-' + service), info);
        yt.style.setDisplayed('autoshare-service-sharing-info-' + service, info.is_connected);
        yt.style.setDisplayed('autoshare-service-sharing-info-separator-' + service, info.is_connected);
        yt.style.setDisplayed('autoshare-service-sharing-disconnect-' + service, info.is_connected);
        yt.style.setDisplayed('autoshare-service-sharing-connect-' + service, !info.is_connected);
        yt.style.setDisplayed('autoshare-service-sharing-disable-' + service, info.is_connected && info.is_autosharing);
        yt.style.setDisplayed('autoshare-service-sharing-enable-' + service, info.is_connected && !info.is_autosharing);
        yt.style.setDisplayed('autoshare-service-sharing-spinny-' + service, false);

        if (service == 'facebook') {
          if (typeof(info.has_publish) != 'undefined') {
            yt.style.setDisplayed('autoshare-facebook-publish-nag', info.is_connected && info.is_autosharing && !info.has_publish);
          }
          if (typeof(info.has_feed) != 'undefined' && typeof(info.has_offline) != 'undefined') {
            yt.style.setDisplayed('autoshare-facebook-feed-nag', info.is_connected && (!info.has_feed || !info.has_offline));
          }
        }
      }
    }

    var gaiaChangedCallback = function(the_autoshare) {
      var is_gaia_user = the_autoshare.isGaiaUser();
      yt.style.setDisplayed('autoshare-google-nag', !is_gaia_user);
      yt.style.setDisplayed('autoshare-google-linked', is_gaia_user);
    }

    if (typeof(window.autoshare) == 'undefined') {
      var session_token = 'WVKMtC_XiSKF9aopp1x0vSamRK58MA==';
      var root_url = 'https://web.archive.org/web/20100805073632/http://upload.youtube.com';
      var locale = 'en_US';
      var service_info = {"orkut": {"connected_as": "", "is_connected": false, "is_autosharing": false}, "twitter": {"connected_as": "", "is_connected": false, "is_autosharing": false}, "facebook": {"connected_as": "", "is_connected": false, "is_autosharing": false}, "reader": {"connected_as": "", "is_connected": false, "is_autosharing": false}};
      var is_gaia_user = false;
      var facebook_app_key = '7ff82e59b6b2fbd316cca35309e95df3';
      var tp_domain = 's.youtube-3rd-party.com';

      window.autoshare = new yt.sharing.AutoShare(
        session_token, root_url, locale, service_info,
        is_gaia_user, facebook_app_key, tp_domain);
    }

    window.autoshare.addCanConnectCallback(canConnectCallback);
    window.autoshare.addServiceChangedCallback(serviceChangedCallback);
    window.autoshare.addGaiaChangedCallback(gaiaChangedCallback);

      yt.pubsub.subscribe('init', function() { window.autoshare.doOnLoad(true); });
  })();
  </script>




    

</head>
<body class="date-20100805 en_US is-english watch5-active" dir="ltr"><!-- BEGIN WAYBACK TOOLBAR INSERT -->
<script>__wm.rw(0);</script>
<div id="wm-ipp-base" lang="en" style="display: block; direction: ltr; height: 1px;"><template shadowrootmode="closed"><div id="wm-ipp" style="position:fixed;left:0;top:0;right:0;" class="">
<div id="donato" style="position:relative;width:100%;">
  <div id="donato-base">
    <iframe id="donato-if" src="/web/20100805073632/upload.youtube.com/my_videos_upload" scrolling="no" frameborder="0" style="width:100%; height:100%">
    </iframe>
  </div>
</div><div id="wm-ipp-inside" style="display: none;">
  <div id="wm-toolbar" style="position:relative;display:flex;flex-flow:row nowrap;justify-content:space-between;">
    <div id="wm-logo" style="/*width:110px;*/padding-top:12px;">
      <a href="https://web.archive.org/web/" title="Wayback Machine home page"><img src="https://web.archive.org/_static/images/toolbar/wayback-toolbar-logo-200.png" srcset="/_static/images/toolbar/wayback-toolbar-logo-100.png, /_static/images/toolbar/wayback-toolbar-logo-150.png 1.5x, /_static/images/toolbar/wayback-toolbar-logo-200.png 2x" alt="Wayback Machine" style="width:100px" border="0"></a>
    </div>
    <div class="c" style="display:flex;flex-flow:column nowrap;justify-content:space-between;flex:1;">
      <form class="u" style="display:flex;flex-direction:row;flex-wrap:nowrap;" target="_top" method="get" action="/web/submit" name="wmtb" id="wmtb"><input type="text" name="url" id="wmtbURL" value="http://upload.youtube.com/my_videos_upload" onfocus="this.focus();this.select();" style="flex:1;" autocomplete="off"><input type="hidden" name="type" value="replay"><input type="hidden" name="date" value="20100805073632"><input type="submit" value="Go">
      </form>
      <div style="display:flex;flex-flow:row nowrap;align-items:flex-end;">
                <div class="s" id="wm-nav-captures" style="flex:1;"><a class="t" href="/my_videos_upload" title="See a list of every capture for this URL">1,498 captures</a><div class="r" title="Timespan for captures of this URL">4 Aug 2009 - 31 Dec 2024</div></div>
        <div class="k">
          <a href="/my_videos_upload" id="wm-graph-anchor">
            <div id="wm-ipp-sparkline" title="Explore captures for this URL" style="position: relative">
              <canvas id="wm-sparkline-canvas" width="750" height="27" border="0"></canvas>
            <div class="yt" style="display: none; width: 25px; height: 27px; left: 725px;"></div><div class="mt" style="display: none; width: 2px; height: 27px; left: 740px;"></div></div>
          </a>
        </div>
      </div>
    </div>
    <div class="n">
      <table>
        <tbody>
          <!-- NEXT/PREV MONTH NAV AND MONTH INDICATOR -->
          <tr class="m">
            <td class="b" nowrap="nowrap"><a href="https://web.archive.org/web/20100628202426/http://upload.youtube.com/my_videos_upload" title="28 Jun 2010"><strong>Jun</strong></a></td>
            <td class="c" id="displayMonthEl" title="You are here: 07:36:32 Aug 05, 2010">Aug</td>
            <td class="f" nowrap="nowrap"><a href="https://web.archive.org/web/20100913082040/http://upload.youtube.com/my_videos_upload" title="13 Sep 2010"><strong>Sep</strong></a></td>
          </tr>
          <!-- NEXT/PREV CAPTURE NAV AND DAY OF MONTH INDICATOR -->
          <tr class="d">
            <td class="b" nowrap="nowrap"><a href="https://web.archive.org/web/20100725215727/http://upload.youtube.com/my_videos_upload" title="21:57:27 Jul 25, 2010"><img src="https://web.archive.org/_static/images/toolbar/wm_tb_prv_on.png" alt="Previous capture" width="14" height="16" border="0"></a></td>
            <td class="c" id="displayDayEl" style="width:34px;font-size:22px;white-space:nowrap;" title="You are here: 07:36:32 Aug 05, 2010">05</td>
            <td class="f" nowrap="nowrap"><a href="https://web.archive.org/web/20100913082040/http://upload.youtube.com/my_videos_upload" title="08:20:40 Sep 13, 2010"><img src="https://web.archive.org/_static/images/toolbar/wm_tb_nxt_on.png" alt="Next capture" width="14" height="16" border="0"></a></td>
          </tr>
          <!-- NEXT/PREV YEAR NAV AND YEAR INDICATOR -->
          <tr class="y">
            <td class="b" nowrap="nowrap"><a href="https://web.archive.org/web/20090804075938/http://upload.youtube.com:80/my_videos_upload" title="04 Aug 2009"><strong>2009</strong></a></td>
            <td class="c" id="displayYearEl" title="You are here: 07:36:32 Aug 05, 2010">2010</td>
            <td class="f" nowrap="nowrap"><a href="https://web.archive.org/web/20110805083729/http://upload.youtube.com/my_videos_upload" title="05 Aug 2011"><strong>2011</strong></a></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="r" style="display:flex;flex-flow:column nowrap;align-items:flex-end;justify-content:space-between;">
      <div id="wm-btns" style="text-align:right;height:23px;">
                <span class="xxs">
          <div id="wm-save-snapshot-success">success</div>
          <div id="wm-save-snapshot-fail">fail</div>
          <a id="wm-save-snapshot-open" href="https://web.archive.org/web/20100805073632/http://www.youtube.com/#" title="Share via My Web Archive" style="display: none;">
            <span class="iconochive-web"></span>
          </a>
          <a href="https://archive.org/account/login.php" title="Sign In" id="wm-sign-in" style="display: inline-block;">
            <span class="iconochive-person"></span>
          </a>
          <span id="wm-save-snapshot-in-progress" class="iconochive-web" style="display: none;"></span>
        </span>
                <a class="xxs" href="http://faq.web.archive.org/" title="Get some help using the Wayback Machine" style="top:-6px;"><span class="iconochive-question" style="color:rgb(87,186,244);font-size:160%;"></span></a>
        <a id="wm-tb-close" href="https://web.archive.org/web/20100805073632/http://www.youtube.com/#close" style="top:-2px;" title="Close the toolbar"><span class="iconochive-remove-circle" style="color:#888888;font-size:240%;"></span></a>
      </div>
      <div id="wm-share" class="xxs">
        <a href="https://web.archive.org/web/20100805073632/http://web.archive.org/screenshot/http://upload.youtube.com/my_videos_upload" id="wm-screenshot" title="screenshot" style="visibility: hidden;">
          <span class="wm-icon-screen-shot"></span>
        </a>
        <a href="https://web.archive.org/web/20100805073632/http://www.youtube.com/#" id="wm-video" title="video">
          <span class="iconochive-movies"></span>
        </a>
        <a id="wm-share-facebook" href="https://web.archive.org/web/20100805073632/http://www.youtube.com/#" data-url="https://web.archive.org/web/20100805073632/http://upload.youtube.com/my_videos_upload" title="Share on Facebook" style="margin-right:5px;" target="_blank"><span class="iconochive-facebook" style="color:#3b5998;font-size:160%;"></span></a>
        <a id="wm-share-twitter" href="https://web.archive.org/web/20100805073632/http://www.youtube.com/#" data-url="https://web.archive.org/web/20100805073632/http://upload.youtube.com/my_videos_upload" title="Share on Twitter" style="margin-right:5px;" target="_blank"><span class="iconochive-twitter" style="color:#1dcaff;font-size:160%;"></span></a>
      </div>
      <div style="padding-right:2px;text-align:right;white-space:nowrap;">
        <a id="wm-expand" class="wm-btn wm-closed" href="https://web.archive.org/web/20100805073632/http://www.youtube.com/#expand"><span id="wm-expand-icon" class="iconochive-down-solid"></span> <span class="xxs" style="font-size:80%;">About this capture</span></a>
      </div>
    </div>
  </div>
    <div id="wm-capinfo" style="border-top:1px solid #777;display:none; overflow: hidden">
        <div id="wm-capinfo-notice" source="api"></div>
                <div id="wm-capinfo-collected-by">
    <div style="background-color:#666;color:#fff;font-weight:bold;text-align:center">COLLECTED BY</div>
    <div style="padding:3px;position:relative" id="wm-collected-by-content">
            <div style="display:inline-block;vertical-align:top;width:50%;">
      <span class="c-logo" style="background-image:url(https://archive.org/services/img/ArchiveIt-Partner-120);"></span>
    Organization: <a style="color:#33f;" href="https://archive.org/details/ArchiveIt-Partner-120" target="_new"><span class="wm-title">University of Iowa Libraries</span></a>
    <div style="max-height:75px;overflow:hidden;position:relative;">
    <div style="position:absolute;top:0;left:0;width:100%;height:75px;background:linear-gradient(to bottom,rgba(255,255,255,0) 0%,rgba(255,255,255,0) 90%,rgba(255,255,255,255) 100%);"></div>
    University of Iowa Libraries<br><br>Archive-It Partner Since: May, 2006<br>Organization Type: Colleges &amp; Universities<br>Organization URL:<a href="http://www.lib.uiowa.edu/">http://www.lib.uiowa.edu</a><br><br>The University of Iowa Libraries is the largest library system in Iowa and 14th in materials expenditures among U.S. public research libraries. The University's Main Library, Hardin Library for the Health Sciences, 5 branch libraries, and the Law Library contain more than 5 million volumes.<br><br>
  </div>
        </div>
      <div style="display:inline-block;vertical-align:top;width:49%;">
      <span class="c-logo" style="background-image:url(https://archive.org/services/img/ArchiveIt-Collection-1092)"></span>
    <div>Collection: <a style="color:#33f;" href="https://archive.org/details/ArchiveIt-Collection-1092" target="_new"><span class="wm-title">Flood of 2008 Collection</span></a></div>
    <div style="max-height:75px;overflow:hidden;position:relative;">
    <div style="position:absolute;top:0;left:0;width:100%;height:75px;background:linear-gradient(to bottom,rgba(255,255,255,0) 0%,rgba(255,255,255,0) 90%,rgba(255,255,255,255) 100%);"></div>
    University of Iowa Web pages created in the aftermath of the historic June, 2008 flood, including photographs, information about flood recovery services, financial aid, changes in class and activity schedules, and other related information.
  </div>
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
  </div></div></div><link rel="stylesheet" type="text/css" href="./YouTube - _Upload your video___files/banner-styles.css"><link rel="stylesheet" type="text/css" href="./YouTube - _Upload your video___files/iconochive.css"><div class="wb-autocomplete-suggestions " style="left: 0px; top: 0px; width: 0px;"></div></template>
</div><div id="wm-ipp-print"></div>
<script type="text/javascript">//<![CDATA[
__wm.bt(750,27,25,2,"web","http://upload.youtube.com/my_videos_upload","20100805073632",1996,"/_static/",["/_static/css/banner-styles.css?v=S1zqJCYt","/_static/css/iconochive.css?v=3PDvdIFv"], false);
  __wm.rw(1);
//]]></script>
<!-- END WAYBACK TOOLBAR INSERT -->
 
  <!--[if IE]><div id="ie"><![endif]-->
  <!-- begin prepage section -->
  <form name="logoutForm" method="post" action="https://web.archive.org/web/20100805073632/http://www.youtube.com/">
    <input type="hidden" name="action_logout" value="1">
  </form>
  <!-- end prepage section -->
  <div id="page" class="">
      
  
  </div>
  <div id="baseDiv" class="date-20100805 video-info ">
      

        <div id="upload-page">


      <h1 class="header">
Video File Upload
      </h1>
      <div id="top-row">

      </div>

      <div id="left-col">

        

  
  
  
  <div id="restrict-error-gears" style="display: none;" class="yt-alert yt-alert-warn yt-rounded">
      <img src="./YouTube - _Upload your video___files/pixel-vfl73.gif" class="icon master-sprite" alt="Alert icon">
    
    <div id="restrict-error-message" class="yt-alert-content">
            You do not have Gears installed or enabled.
    </div>
    
      <button onclick="_hidediv(this.parentNode);" class="close master-sprite">
        close
      </button>
  </div>


  
  
  
  <div id="restrict-error-java" style="display: none;" class="yt-alert yt-alert-warn yt-rounded">
      <img src="./YouTube - _Upload your video___files/pixel-vfl73.gif" class="icon master-sprite" alt="Alert icon">
    
    <div id="restrict-error-message" class="yt-alert-content">
            You do not have Java installed or enabled. You can <a href="https://web.archive.org/web/20100805073632/http://www.google.com/support/youtube/bin/answer.py?answer=185316">learn more</a> about enabling Java, or go back and try the <a href="https://web.archive.org/web/20100805073632/http://upload.youtube.com/my_videos_upload">standard upload page</a>.

    </div>
    
      <button onclick="_hidediv(this.parentNode);" class="close master-sprite">
        close
      </button>
  </div>


  
  
  
  <div id="restrict-error-xhr" style="display: none;" class="yt-alert yt-alert-warn yt-rounded">
      <img src="./YouTube - _Upload your video___files/pixel-vfl73.gif" class="icon master-sprite" alt="Alert icon">
    
    <div id="restrict-error-message" class="yt-alert-content">
            You are not using an HTML5 compatible browser.
    </div>
    
      <button onclick="_hidediv(this.parentNode);" class="close master-sprite">
        close
      </button>
  </div>


  
  
  
  <div id="alert-template" style="display: none;" class="yt-alert yt-alert-warn yt-rounded">
      <img src="./YouTube - _Upload your video___files/pixel-vfl73.gif" class="icon master-sprite" alt="Alert icon">
    
    <div class="yt-alert-content">
    </div>
    
      <button onclick="_hidediv(this.parentNode);" class="close master-sprite">
        close
      </button>
  </div>




<div id="active-uploads-contain"></div>

<div id="upload-item-template" class="upload-item-container upload-outer-box hid">
  <div class="upload-inner-box">

    <div class="upload-drop hid">
      <div>Select a file to upload.</div>
    </div>

    <div class="upload-container hid">
      <h2>
        <img class="title-image" src="./YouTube - _Upload your video___files/icn_file-vfl151459.png">
        <span class="upload-title"></span>
        <span class="upload-size-contain"><span class="upload-size"></span></span>
      </h2>

      <div class="alert-container"></div>

      <div class="flash-file-size-warning hid">
        
  
  
  
  <div id="flash-file-size-warning" class="yt-alert yt-alert-warn yt-rounded">
      <img src="./YouTube - _Upload your video___files/pixel-vfl73.gif" class="icon master-sprite" alt="Alert icon">
    
    <div class="yt-alert-content">
          This file is over 1GB. If you experience problems with this upload, try the <a href="https://web.archive.org/web/20100805073632/http://upload.youtube.com/my_videos_upload?restrict=java">Advanced Uploader</a> to handle a file of this size.
  <a href="https://web.archive.org/web/20100805073632/http://www.google.com/support/youtube/bin/answer.py?answer=185316">Learn more</a>

    </div>
    
      <button onclick="_hidediv(this.parentNode);" class="close master-sprite">
        close
      </button>
  </div>

      </div>

      <div class="upload-form-container">
        
    <dl class="table-display">

    <dt>Upload progress:</dt>
    <dd>
      <div class="progress-bar"><span class="progress-bar-fill"></span></div>
      <div class="progress-html hid">
        <img class="file-icon-uploading" src="./YouTube - _Upload your video___files/loader-vfl35975.gif" height="16" width="16" alt="Uploading...">
        Uploading...
      </div>
      <div class="progress-metadata">
        <span class="progress-metadata-percentage">&nbsp;&nbsp;</span>
        <span class="progress-metadata-cancel jslink">cancel</span>
      </div>
      <div class="clearL"></div>
      <div class="progress-metadata-status">&nbsp;</div>
    </dd>

    <dt>Preview:</dt>
    <dd>
      <div class="live-thumbnail-container-wrapper">
        <div class="live-thumbnail-container">
<img src="./YouTube - _Upload your video___files/pixel-vfl73.gif" class="live-thumbnail"><img src="./YouTube - _Upload your video___files/pixel-vfl73.gif" class="live-thumbnail"><img src="./YouTube - _Upload your video___files/pixel-vfl73.gif" class="live-thumbnail"><img src="./YouTube - _Upload your video___files/pixel-vfl73.gif" class="live-thumbnail"><img src="./YouTube - _Upload your video___files/pixel-vfl73.gif" class="live-thumbnail">        </div>
        <div class="processing-progress hid">
          <span class="processing-progress-title">Processing</span>
          <span class="progress-metadata-percentage">&nbsp;&nbsp;</span>
          <span>—</span>
          <span class="progress-metadata-status">&nbsp;</span>
        </div>
      </div>
    </dd>
    <dt></dt>
    <dd>
      <div class="viper-message-container"></div>
    </dd>
  </dl>
  <div class="clearL"></div>



  <h3 class="video-settings-header expanded">Video information and privacy settings<img src="./YouTube - _Upload your video___files/pixel-vfl73.gif" class="master-sprite video-settings-expand"></h3>

  <div class="video-settings-container">
    <form class="video-settings-form" action="https://web.archive.org/web/20100805073632/http://upload.youtube.com/my_videos_upload_json">
      <input type="hidden" name="session_token" value="vYub83OFY6hrggLFSJzaAdoipFN8MA==">
      <input type="hidden" name="action_edit_video" value="1">
      <input name="updated_flag" type="hidden" value="0">
      <input name="video_id" type="hidden" value="">
      <input name="content_id" type="hidden" value="">

        <dl class="table-display">
    <dt>Title:</dt>
    <dd>
      <input class="video-settings-title textbox" type="text" name="title">
    </dd>

    <dt>Description:</dt>
    <dd>
      <textarea class="video-settings-description" name="description" rows="5"></textarea>
    </dd>

    <dt>Tags:</dt>
    <dd>
      <input class="video-settings-tags textbox" type="text" name="keywords" value="">
        <div class="tag-suggest-container">
          <div class="tag-suggest-title" style="display: none;">Suggestions:</div>
          <div class="tag-suggest-tags" style="display: none;">
            <span class="generating-tags">Generating tag suggestions</span>
            <img src="./YouTube - _Upload your video___files/loader-vfl35975.gif">
          </div>
          <a class="tag-suggest-add-all" style="display: none;">Add All</a>
        </div>
        <div class="clear"></div>
    </dd>

    <dt>Category:</dt>
    <dd>
      <select class="video-settings-category" name="category">
        <option value="" selected="">-- Select a category --</option>
          <option value="2">Autos &amp; Vehicles</option>
          <option value="23">Comedy</option>
          <option value="27">Education</option>
          <option value="24">Entertainment</option>
          <option value="1">Film &amp; Animation</option>
          <option value="20">Gaming</option>
          <option value="26">Howto &amp; Style</option>
          <option value="10">Music</option>
          <option value="25">News &amp; Politics</option>
          <option value="29">Nonprofits &amp; Activism</option>
          <option value="22">People &amp; Blogs</option>
          <option value="15">Pets &amp; Animals</option>
          <option value="28">Science &amp; Technology</option>
          <option value="17">Sports</option>
          <option value="19">Travel &amp; Events</option>
      </select>
    </dd>


    <dt>Privacy:</dt>
    <dd>
      <ul class="option-list video-settings-privacy">
        <li class="option"><input id="video-settings-privacy-public" class="video-settings-privacy-public radio" type="radio" name="privacy" value="public" checked="checked">
            <label for="video-settings-privacy-public">Public (anyone can search for and view - recommended)</label>
        </li>
        <li class="option"><input id="video-settings-privacy-unlisted" class="video-settings-privacy-unlisted radio" type="radio" name="privacy" value="unlisted">
          <label for="video-settings-privacy-unlisted">Unlisted (anyone with the link can view)
            <label id="unlisted-learn-more"><a href="https://web.archive.org/web/20100805073632/http://www.youtube.com/#" id="unlisted-help-link" onclick="yt.style.toggle(&#39;about-unlisted-videos&#39;);yt.style.toggle(&#39;unlisted-learn-more&#39;);yt.style.toggle(&#39;unlisted-learn-less&#39;);return false;">Learn more</a></label>
            <label id="unlisted-learn-less" style="display:none"><a href="https://web.archive.org/web/20100805073632/http://www.youtube.com/#" id="unlisted-help-link" onclick="yt.style.toggle(&#39;about-unlisted-videos&#39;);yt.style.toggle(&#39;unlisted-learn-more&#39;);yt.style.toggle(&#39;unlisted-learn-less&#39;);return false;">Learn less</a></label>
          </label>
          <div id="about-unlisted-videos" style="display:none">

              <b>"Unlisted"</b> means that only people who know the link to the video can view it.  The video will not appear in any of YouTube's public spaces, such as search results, your channel, or the Browse page, but the link can be shared with anyone.  <a href="https://web.archive.org/web/20100805073632/http://www.google.com/support/youtube/bin/answer.py?answer=181547" target="_blank">(Learn even more)</a>
            
          </div>
        </li>
        <li class="option"><input id="video-settings-privacy-private" class="video-settings-privacy-private radio" type="radio" name="privacy" value="private">
            <label for="video-settings-privacy-private">Private (only specific YouTube users can view)</label>
          </li>
      </ul>
    </dd>

  </dl>
  <div class="clearL"></div>

          <dl class="table-display">
      <dt></dt>
      <dd>
        <button type="button" class="save-changes-button yt-uix-button" onclick=";return false;"><span class="yt-uix-button-content">Save changes</span></button>
        &nbsp; or &nbsp;
        <span class="skip-save jslink">
Skip for now
        </span>
      </dd>
    </dl>
    <div class="clearL"></div>

    </form>
  </div>

    <h3>Sharing options</h3>
  <dl class="table-display last">

    <dt>URL:</dt>
    <dd>
      <input class="readonly textbox video-sharing-url" type="text" name="video-sharing-url" value="" readonly="">
    </dd>

    <dt>Embed:</dt>
    <dd>
      <input class="readonly textbox video-embed-url" type="text" name="video-embed-url" value="" readonly="">
    </dd>

  </dl>
  <div class="clearL"></div>



      </div>
    </div>
  </div>
</div>


          <div id="upload-interface" class="upload-outer-box">
    <div id="filelist-box" class="filelist-box">
      <noscript>
        
  
  
  
  <div class="yt-alert yt-alert-warn yt-rounded">
      <img src="https://web.archive.org/web/20100805073632im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" class="icon master-sprite" alt="Alert icon">
    
    <div class="yt-alert-content">
            You need Javascript enabled to upload a video.
    </div>
    
      <button onclick="_hidediv(this.parentNode);" class="close master-sprite">
        close
      </button>
  </div>

      </noscript>
    </div>

    <div id="upload-another" class="hid">
      <h4>Upload another video</h4>
      <h4 id="my-videos-link"><a href="https://web.archive.org/web/20100805073632/http://www.youtube.com/my_videos" target="_new">My videos»</a></h4>
      <div class="clear"></div>
    </div>

    <div id="starting-box" class="starting-box upload-inner-box">
      <div id="loading-message">
Loading...
      </div>

      <div id="upload-prompt-box">
        <button type="button" id="start-upload-button" onclick="yt.analytics.urchinTracker(&#39;/Events/UploadPage/UploadButton&#39;);;return false;" class=" yt-uix-button yt-uix-button-urgent"><span class="yt-uix-button-content">Upload video</span></button>
  
        &nbsp; or &nbsp;

        <a href="https://web.archive.org/web/20100805073632/http://www.youtube.com/my_webcam" id="record-from-webcam">
Record from webcam
        </a>

      </div>
    </div>

    <div id="about-uploading-box">
      <h4>Videos can be...</h4>
      <ul class="constraints">
        <li class="constraint">High Definition</li>
              <li class="constraint">Up to <span dir="ltr">2 GB</span> in size.</li>
              <li class="constraint">Up to <span dir="ltr">15</span> minutes in length.</li>
        <li class="constraint">A wide variety of formats</li>
      </ul>
    </div>

    <div class="clearL"></div>

  </div>

            <div class="upload-outer-box">
    <p class="autosharing">
    <strong>AutoShare</strong>
    </p>

    <div class="upload-inner-box">
        <div class="autoshare-intro">
Want to automatically share your activity feed (your uploads, favorites, ratings, etc.) to your profile on other websites?  Choose a site to get started:
  </div>
    <div id="autoshare-spare-spinny" style="display: none;">
    <span class="autoshare-spinny" style="padding-left: 10px;">&nbsp;&nbsp;&nbsp;&nbsp;</span>
  </div>

    <div id="autoshare-sharing">
        <div id="autoshare-service-sharing-facebook" class="autoshare-service-detail">
          <div class="autoshare-service-detail">
              <div style="display: inline;">
    <div class="autoshare-service-icon">
      <img class="img-autoshare-facebook" src="./YouTube - _Upload your video___files/none-vfl36657.gif" height="16" width="16" alt="">
    </div>
    <span class="autoshare-service-name">Facebook</span>
  </div>

            <span>
              <span id="autoshare-service-sharing-info-separator-facebook">&nbsp;/&nbsp;
              </span>
              <span id="autoshare-service-sharing-info-facebook">
                <span class="autoshare-spinny" style="padding-left: 10px;">
                  &nbsp;&nbsp;&nbsp;&nbsp;
                </span>
              </span>&nbsp;-&nbsp;
                <span id="autoshare-service-sharing-disconnect-facebook">
                  <a class="hLink" href="javascript:;" onclick="autoshare.disconnectService(&#39;facebook&#39;); return false;">Disconnect accounts</a>
                </span>
                <span id="autoshare-service-sharing-connect-facebook">
                  <a class="hLink" href="javascript:;" onclick="autoshare.connectService(&#39;facebook&#39;, false); return false;">Connect accounts</a>
                </span>
                <span id="autoshare-service-sharing-disable-facebook">
 | <a class="hLink" href="javascript:;" onclick="autoshare.setConnectOnly(&#39;facebook&#39;, true); return false;">Disable AutoShare</a>
                </span>
                <span id="autoshare-service-sharing-enable-facebook">
 | <a class="hLink" href="javascript:;" onclick="autoshare.connectService(&#39;facebook&#39;); return false;">Enable AutoShare</a>
                </span>
            </span>
            <span id="autoshare-service-sharing-spinny-facebook" style="display:none;">
              <span class="autoshare-spinny" style="padding-left: 10px;">
                &nbsp;&nbsp;&nbsp;&nbsp;
              </span>
            </span>
          </div>
        </div>
        <div id="autoshare-service-sharing-twitter" class="autoshare-service-detail">
          <div class="autoshare-service-detail">
              <div style="display: inline;">
    <div class="autoshare-service-icon">
      <img class="img-autoshare-twitter" src="./YouTube - _Upload your video___files/none-vfl36657.gif" height="16" width="16" alt="">
    </div>
    <span class="autoshare-service-name">Twitter</span>
  </div>

            <span>
              <span id="autoshare-service-sharing-info-separator-twitter">&nbsp;/&nbsp;
              </span>
              <span id="autoshare-service-sharing-info-twitter">
                <span class="autoshare-spinny" style="padding-left: 10px;">
                  &nbsp;&nbsp;&nbsp;&nbsp;
                </span>
              </span>&nbsp;-&nbsp;
                <span id="autoshare-service-sharing-disconnect-twitter">
                  <a class="hLink" href="javascript:;" onclick="autoshare.disconnectService(&#39;twitter&#39;); return false;">Disconnect accounts</a>
                </span>
                <span id="autoshare-service-sharing-connect-twitter">
                  <a class="hLink" href="javascript:;" onclick="autoshare.connectService(&#39;twitter&#39;, false); return false;">Connect accounts</a>
                </span>
                <span id="autoshare-service-sharing-disable-twitter">
 | <a class="hLink" href="javascript:;" onclick="autoshare.setConnectOnly(&#39;twitter&#39;, true); return false;">Disable AutoShare</a>
                </span>
                <span id="autoshare-service-sharing-enable-twitter">
 | <a class="hLink" href="javascript:;" onclick="autoshare.connectService(&#39;twitter&#39;); return false;">Enable AutoShare</a>
                </span>
            </span>
            <span id="autoshare-service-sharing-spinny-twitter" style="display:none;">
              <span class="autoshare-spinny" style="padding-left: 10px;">
                &nbsp;&nbsp;&nbsp;&nbsp;
              </span>
            </span>
          </div>
        </div>
        <div id="autoshare-service-sharing-reader" class="autoshare-service-detail">
          <div class="autoshare-service-detail">
              <div style="display: inline;">
    <div class="autoshare-service-icon">
      <img class="img-autoshare-reader" src="./YouTube - _Upload your video___files/none-vfl36657.gif" height="16" width="16" alt="">
    </div>
    <span class="autoshare-service-name">Reader</span>
  </div>

            <span>
              <span id="autoshare-service-sharing-info-separator-reader">&nbsp;/&nbsp;
              </span>
              <span id="autoshare-service-sharing-info-reader">
                <span class="autoshare-spinny" style="padding-left: 10px;">
                  &nbsp;&nbsp;&nbsp;&nbsp;
                </span>
              </span>&nbsp;-&nbsp;
                <span id="autoshare-service-sharing-disconnect-reader">
                  <a class="hLink" href="javascript:;" onclick="autoshare.disconnectService(&#39;reader&#39;); return false;">Disconnect accounts</a>
                </span>
                <span id="autoshare-service-sharing-connect-reader">
                  <a class="hLink" href="javascript:;" onclick="autoshare.connectService(&#39;reader&#39;, false); return false;">Connect accounts</a>
                </span>
                <span id="autoshare-service-sharing-disable-reader">
 | <a class="hLink" href="javascript:;" onclick="autoshare.setConnectOnly(&#39;reader&#39;, true); return false;">Disable AutoShare</a>
                </span>
                <span id="autoshare-service-sharing-enable-reader">
 | <a class="hLink" href="javascript:;" onclick="autoshare.connectService(&#39;reader&#39;); return false;">Enable AutoShare</a>
                </span>
            </span>
            <span id="autoshare-service-sharing-spinny-reader" style="display:none;">
              <span class="autoshare-spinny" style="padding-left: 10px;">
                &nbsp;&nbsp;&nbsp;&nbsp;
              </span>
            </span>
          </div>
        </div>
        <div id="autoshare-service-sharing-orkut" class="autoshare-service-detail">
          <div class="autoshare-service-detail">
              <div style="display: inline;">
    <div class="autoshare-service-icon">
      <img class="img-autoshare-orkut" src="./YouTube - _Upload your video___files/none-vfl36657.gif" height="16" width="16" alt="">
    </div>
    <span class="autoshare-service-name">Orkut</span>
  </div>

            <span>
              <span id="autoshare-service-sharing-info-separator-orkut">&nbsp;/&nbsp;
              </span>
              <span id="autoshare-service-sharing-info-orkut">
                <span class="autoshare-spinny" style="padding-left: 10px;">
                  &nbsp;&nbsp;&nbsp;&nbsp;
                </span>
              </span>&nbsp;-&nbsp;
                <span id="autoshare-service-sharing-disconnect-orkut">
                  <a class="hLink" href="javascript:;" onclick="autoshare.disconnectService(&#39;orkut&#39;); return false;">Disconnect accounts</a>
                </span>
                <span id="autoshare-service-sharing-connect-orkut">
                  <a class="hLink" href="javascript:;" onclick="autoshare.connectService(&#39;orkut&#39;, false); return false;">Connect accounts</a>
                </span>
                <span id="autoshare-service-sharing-disable-orkut">
 | <a class="hLink" href="javascript:;" onclick="autoshare.setConnectOnly(&#39;orkut&#39;, true); return false;">Disable AutoShare</a>
                </span>
                <span id="autoshare-service-sharing-enable-orkut">
 | <a class="hLink" href="javascript:;" onclick="autoshare.connectService(&#39;orkut&#39;); return false;">Enable AutoShare</a>
                </span>
            </span>
            <span id="autoshare-service-sharing-spinny-orkut" style="display:none;">
              <span class="autoshare-spinny" style="padding-left: 10px;">
                &nbsp;&nbsp;&nbsp;&nbsp;
              </span>
            </span>
          </div>
        </div>
  </div>

    <div id="autoshare-google-nag" class="autoshare-box" style="display: none;">
    <div style="float: left;" class="autoshare-service-icon">
      <img class="img-autoshare-failure-icon" src="./YouTube - _Upload your video___files/none-vfl36657.gif" height="16" width="16" alt="">
    </div>
    <div style="float: left; width: 450px;">
      <b>A Google Account needs to be linked to your YouTube account in order to use AutoShare</b>
      <ul>
          <li><a class="hLink" href="javascript:;" onclick="autoshare.upgradeToGoogleAccount(); return false;">Get a new Google Account or link to an existing one</a> (you'll be signed out of any existing Google Account during linking)</li>
      </ul>
    </div>
      <div style="float: right;">
    <a class="hLink" href="javascript:;" onclick="yt.style.toggle(&#39;autoshare-google-nag&#39;); return false;">Close</a>
  </div>
  <div style="clear: both;"></div>

  </div>
  <div id="autoshare-google-linked" class="autoshare-box" style="display: none;">
    <div style="float: left;" class="autoshare-service-icon">
      <img class="img-autoshare-success-icon" src="./YouTube - _Upload your video___files/none-vfl36657.gif" height="16" width="16" alt="">
    </div>
    <div style="float: left; width: 450px;">
      <b>Thanks for setting up a Google Account</b>
      <ul>
        <li>Please choose a site above to get started.</li>
      </ul>
    </div>
      <div style="float: right;">
    <a class="hLink" href="javascript:;" onclick="yt.style.toggle(&#39;autoshare-google-linked&#39;); return false;">Close</a>
  </div>
  <div style="clear: both;"></div>

  </div>

    <div id="autoshare-info-box" class="autoshare-box" style="display: none;">
    <div style="float: left;" class="autoshare-service-icon">
      <img class="img-autoshare-success-icon" src="./YouTube - _Upload your video___files/none-vfl36657.gif" height="16" width="16" alt="">
    </div>
    <div class="autoshare-info-box-text">
Great, you're now connected to Buzz! The YouTube actions in your activity feed will be shared publicly on your Google profile and to your Buzz followers.
    </div>
      <div style="float: right;">
    <a class="hLink" href="javascript:;" onclick="yt.style.toggle(&#39;autoshare-info-box&#39;); return false;">Close</a>
  </div>
  <div style="clear: both;"></div>

  </div>

    <div id="autoshare-facebook-publish-nag" class="autoshare-box" style="display: none;">
    <div style="float: left;" class="autoshare-service-icon">
      <img class="img-autoshare-failure-icon" src="./YouTube - _Upload your video___files/none-vfl36657.gif" height="16" width="16" alt="">
    </div>
    <div style="float: left; width: 450px;">
      <b>Your activity won't be sent to Facebook because you didn't give full access for YouTube to post to Facebook.</b>
      <ul>
        <li><a href="javascript:;" onclick="autoshare._facebookUpgradePermissions(); return false;" class="hLink">Change Access Settings</a></li>
      </ul>
    </div>
      <div style="float: right;">
    <a class="hLink" href="javascript:;" onclick="yt.style.toggle(&#39;autoshare-facebook-publish-nag&#39;); return false;">Close</a>
  </div>
  <div style="clear: both;"></div>

  </div>


    </div>
  </div>

            <p class="instruction">Need more help? Watch <a href="https://web.archive.org/web/20100805073632/http://www.youtube.com/watch?v=SzSwnbxb9TY" target="_new">this video</a> or visit the <a href="https://web.archive.org/web/20100805073632/http://www.youtube.com/t/creators_corner" target="_new">Creator's Corner</a>.</p>

    <p class="instruction">Upload problems? Try the <a href="https://web.archive.org/web/20100805073632/http://upload.youtube.com/my_videos_upload?restrict=html_form">basic uploader</a> (works on older computers and web browsers).</p>



  <div id="sponsored-videos-box">
    <h2 class="title">Promote your Videos with Promoted Videos</h2>
    <p>Create and manage your video channel promotions on YouTube.  Your promotion will appear with search results when people look for related content.</p>
    <a href="https://web.archive.org/web/20100805073632/https://ads.youtube.com/index" target="_blank">Get started now!</a>
  </div>




      </div>
      <div id="right-col">

          <div class="upload-tools">
    <img src="./YouTube - _Upload your video___files/icn_mobile-vfl151459.png">
    <div class="upload-sidebar-content">
      <h4>SilasTube direct mobile uploads</h4>
      <p>Did you know you can upload directly from your mobile phone? this feature isn't implemented btw...</p>
      <a href="/my_videos_mobile_upload"><strong>Set up</strong></a> |
      <a href="/t/mobile">Learn more</a>
    </div>
    <div class="clearL"></div>
  </div>

          <div class="upload-tools">
    <img src="./YouTube - _Upload your video___files/icn_tools-vfl174654.gif" id="tools-icon">
    <div class="upload-sidebar-content">
      <h4>Advanced Video Upload</h4>
      <p>Support for large (&gt;2GB) files and resumable uploads (requires Java).</p>
      <a href="/my_videos_upload?restrict=java"><strong>Try now</strong></a> |
      <a href="/support/youtube/bin/answer.py?answer=185316">Learn more</a>
    </div>
    <div class="clearL"></div>
  </div>

          <div id="instructions">
    <p class="instruction">
      <strong>Important:</strong>
Do not upload any TV shows, music videos, music concerts, or commercials without permission unless they consist entirely of content you created yourself.
    </p>
    <p class="instruction">
The <a href="/t/howto_copyright">Copyright Tips page</a> and the <a href="https://web.archive.org/web/20100805073632/http://www.youtube.com/t/community_guidelines">Community Guidelines</a> can help you determine whether your video infringes someone else's copyright.
    </p>
    <p class="instruction">
By clicking "Upload Video", you are representing that this video does not violate YouTube's <a id="terms-of-use-link" href="https://web.archive.org/web/20100805073632/http://www.youtube.com/t/terms">Terms of Use</a> and that you own all copyrights in this video or have authorization to upload it.
    </p>
  </div>

            <div class="ad-block">
          


  <!-- Begin ad tag -->



  

    


        <script>
        window['google_cust_age'] = '1002';
        window['google_cust_gender'] = '1';
        window['google_language'] = 'en';
      yt.registerGlobal('google_cust_age', 'google_cust_gender', 'google_language');
    </script>


  
  <script type="text/javascript">
    if (yt.timing) {
      yt.timing['addomain']="ad-g.doubleclick.net";
    }
    ord = Math.random()*10000000000000000;
    add_timestamp = (Math.floor(Math.random() * 100) < 5);
    if (add_timestamp) {
      kts = new Date().getTime();
      document.write('<scri' + 'pt language="JavaScript" src="https://web.archive.org/web/20100805073632/http://ad-g.doubleclick.net/adj/com.ytupload.main/pos3;sz=1x1;k21=1;kgender=m;kga=1002;kar=4;klg=en;kage=30;kgg=1;kt=C;kcr=ca;dc_dedup=1;tile=1;dcopt=ist;kts='+ kts + ';ord=' + ord + '?" type="text/javascript"><\/scri' + 'pt>');
    } else {
      document.write('<scri' + 'pt language="JavaScript" src="https://web.archive.org/web/20100805073632/http://ad-g.doubleclick.net/adj/com.ytupload.main/pos3;sz=1x1;k21=1;kgender=m;kga=1002;kar=4;klg=en;kage=30;kgg=1;kt=C;kcr=ca;dc_dedup=1;tile=1;dcopt=ist;ord=' + ord + '?" type="text/javascript"><\/scri' + 'pt>');
    }
  </script><script language="JavaScript" src="./YouTube - _Upload your video___files/f.txt" type="text/javascript"></script>





  <!-- End ad tag -->

    </div>

    <div class="ad-block">
          


  <!-- Begin ad tag -->

    <div id="ad_creative_2" class="ad-div">




  

    



  
  <script type="text/javascript">
    if (yt.timing) {
      yt.timing['addomain']="ad-g.doubleclick.net";
    }
    ord = Math.random()*10000000000000000;
    add_timestamp = (Math.floor(Math.random() * 100) < 5);
    if (add_timestamp) {
      kts = new Date().getTime();
      document.write('<scri' + 'pt language="JavaScript" src="https://web.archive.org/web/20100805073632/http://ad-g.doubleclick.net/adj/tst.ytupload.main/pos3;sz=300x100;k21=1;kgender=m;kga=1002;kar=4;klg=en;kage=30;kgg=1;kt=C;kcr=ca;dc_dedup=1;kmyd=ad_creative_2;tile=2;kts='+ kts + ';ord=' + ord + '?" type="text/javascript"><\/scri' + 'pt>');
    } else {
      document.write('<scri' + 'pt language="JavaScript" src="https://web.archive.org/web/20100805073632/http://ad-g.doubleclick.net/adj/tst.ytupload.main/pos3;sz=300x100;k21=1;kgender=m;kga=1002;kar=4;klg=en;kage=30;kgg=1;kt=C;kcr=ca;dc_dedup=1;kmyd=ad_creative_2;tile=2;ord=' + ord + '?" type="text/javascript"><\/scri' + 'pt>');
    }
  </script><script language="JavaScript" src="./YouTube - _Upload your video___files/f(1).txt" type="text/javascript"></script>


    </div>



  <!-- End ad tag -->

    </div>


      </div>              
      <div id="bottom-row"></div>
    </div>



    
    
  </div>
      <div id="quicklist" class="hid passive" data-active-ajax-url="" data-passive-ajax-url="/list_ajax?action_get_quicklist=1&amp;style=bottomfeedr" data-autohide-mode="on">
    <div id="quicklist-bar-container">
      <div id="quicklist-bar">
        <span id="quicklist-info">
<span class="yt-uix-button-group quicklist-active"><button type="button" class="master-sprite start start-edge yt-uix-button yt-uix-button-media" onclick=";return false;" data-button-action="yt.www.watch.quicklist.prev"><img class="yt-uix-button-icon-quicklist-prev" src="./YouTube - _Upload your video___files/pixel-vfl73.gif" alt=""> </button><button type="button" class="master-sprite end yt-uix-button yt-uix-button-media" onclick=";return false;" data-button-action="yt.www.watch.quicklist.next"><img class="yt-uix-button-icon-quicklist-next" src="./YouTube - _Upload your video___files/pixel-vfl73.gif" alt=""> </button></span><span class="yt-uix-button-group quicklist-passive"><button type="button" class="master-sprite start start-edge end yt-uix-button yt-uix-button-media" onclick=";return false;" data-button-action="yt.www.watch.quicklist.play"><img class="yt-uix-button-icon-quicklist-play" src="./YouTube - _Upload your video___files/pixel-vfl73.gif" alt=""> </button></span><button type="button" class="reverse yt-uix-button yt-uix-button-media yt-uix-button-text" onclick=";return false;"><span class="yt-uix-button-content">    <span class="quicklist-passive">Queue</span>
</span> <img class="yt-uix-button-arrow" src="./YouTube - _Upload your video___files/pixel-vfl73.gif" alt=""><div style="display:none;" class="yt-uix-button-menu yt-uix-button-menu-media yt-uix-button-menu-text">    <ul>
      <li><span class="yt-uix-button-menu-item" onclick="yt.www.watch.quicklist.clear()">
Clear all videos from your Queue
      </span></li>
        <li><span class="yt-uix-button-menu-item" onclick="yt.www.watch.quicklist.showPassive()">
Show your Queue
        </span></li>
    </ul>
</div></button>        </span>
        <span id="quicklist-controls">
<span class="yt-uix-button-group"><button type="button" class="master-sprite start quicklist-active yt-uix-button yt-uix-button-media yt-uix-button-text" onclick=";return false;" data-button-action="yt.www.watch.quicklist.autoplay"><img class="yt-uix-button-icon-quicklist-autoplay" src="./YouTube - _Upload your video___files/pixel-vfl73.gif" alt=""> <span class="yt-uix-button-content">      <span class="quicklist-autoplay-off">Autoplay Off</span>
      <span class="quicklist-autoplay-on">Autoplay On</span>
</span></button><button type="button" class="master-sprite quicklist-active yt-uix-button yt-uix-button-media yt-uix-button-text" onclick=";return false;" data-button-action="yt.www.watch.quicklist.shuffle"><img class="yt-uix-button-icon-quicklist-shuffle" src="./YouTube - _Upload your video___files/pixel-vfl73.gif" alt=""> <span class="yt-uix-button-content">      <span class="quicklist-shuffle-off">Shuffle Off</span>
      <span class="quicklist-shuffle-on">Shuffle On</span>
</span></button><button type="button" class="master-sprite end end-edge yt-uix-button yt-uix-button-media" onclick=";return false;" data-button-action="yt.www.watch.quicklist.toggle"><img class="yt-uix-button-icon-quicklist-toggle" src="./YouTube - _Upload your video___files/pixel-vfl73.gif" alt=""> </button></span>        </span>
      </div>
    </div>
    <div id="quicklist-tray-container">
      <div id="quicklist-tray">
        <div id="quicklist-tray-passive" class="quicklist-passive"></div>
      </div>
      <div id="quicklist-loading">
        <img src="./YouTube - _Upload your video___files/pixel-vfl73.gif" alt="">
        <span>Loading...</span>
      </div>
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
  
  <script id="legacy-user-datastore" style="behavior:url(&#39;/web/20100805073632im_/http://www.youtube.com/#default#userdata&#39;)"></script>
  
  

<?php require($_SERVER['DOCUMENT_ROOT'] . "/static/mod/footer.php"); ?>

  <!-- end postpage section -->
  <!--[if IE]></div><![endif]-->



<table id="completeTable" cellpadding="0" cellspacing="0" class="yt-suggest-table" style="visibility: hidden; left: 0px; top: -1px; width: 0px;"></table><iframe id="yt-suggest-iframe" allow="autoplay &#39;self&#39;; fullscreen &#39;self&#39;" style="left: 0px; top: -1px; width: 0px; height: 0px;" src="./YouTube - _Upload your video___files/saved_resource.html"></iframe></body></html>