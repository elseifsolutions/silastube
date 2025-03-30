<?php require($_SERVER['DOCUMENT_ROOT'] . "/static/important/config.inc.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">


  <html lang="en">

<!-- machid: 494 -->
<head>


  
  <title>SilasTube - Popularize Yourself.</title>

  <link rel="stylesheet" href="/st/css/base_all-vfl66248.css" type="text/css">

  <link rel="search" type="application/opensearchdescription+xml" href="/opensearch?locale=en_US" title="SilasTube Video Search">
  <link rel="stylesheet" href="/st/css/newtube-vfl66248.css" type="text/css">
  <style type="text/css">
    #subsubNav {
      margin-top: 0;
      border-top: 0;
      padding-top: 0 !important;
    }
    #searchViews img {
      cursor: hand;
      cursor: pointer;
    }
    .memberCategory {
      float: left;
      width: 183px;
      padding-top: 7px;
      padding-bottom: 28px;
    }
    .memberCategoryLink {
      font-weight: bold;
      font-size: 14px;
    }
    .member-category-item {
      line-height: 16px;
    }
    .memberCategoryCount {
      color: #666;
      font-size: 12px;
      font-weight: bold;
    }
    .you-choose-wrapper { margin-top: 10px;}
    .list-name { font-size: 16px; font-weight: normal }
    #searchViews { padding: 0; }
    .ad-block { margin-top: 20px; }
  </style>

  <link rel="icon" href="http://sitetest1.meh.serv00.net/st/favicon-vfl1123.ico" type="image/x-icon">
  <link rel="shortcut icon" href="http://sitetest1.meh.serv00.net/st/favicon-vfl1123.ico" type="image/x-icon">


  <meta name="description" content="Share your videos with friends, family, and the world">
  <meta name="keywords" content="video, sharing, camera phone, video phone, free, upload">

  <link rel="alternate" type="application/rss+xml" title="SilasTube - [RSS]" href="/rssls">


  <script type="text/javascript">
      window.google={kHL:"en"};
  </script>

  <script type="text/javascript" src="http://sitetest1.meh.serv00.net/st/js/base_all_with_bidi-vfl65789.js"></script>

  <script type="text/javascript">

      function _hbLink (a,b) { return false; }
      function urchinTracker (a) { }
      function urchinTrackerDefer(a) { }

    
  var gXSRF_token = '';
  var gXSRF_field_name = '';
  var gXSRF_ql_pair = '';
  var onLoadFunctionList = onLoadFunctionList || [];

    gXSRF_token = 'f0oaB8KbGBN2dVTHfZZVqGHsVxR8MTIyODA2NTQ1MA==';
    gXSRF_field_name = 'session_token';
    onLoadFunctionList.push(function() { populate_session_token() });

    gXSRF_ql_pair = 'session_token=Wp2yr92vhJjbfXT0gtFQYXLPHoF8MA==';


    var gGoogleSuggest = true;
    var gPixelGif = 'http://sitetest1.meh.serv00.net/st/img/pixel-vfl73.gif';

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
    function membersViewType(viewType, isPartners) {
      var compactView = false;

      if (isPartners) {
        if (compactView && viewType != 'C') {
          yt.UserPrefs.setFlag(yt.UserPrefs.Flags.FLAG_GRID_VIEW_VIDEOS_AND_CHANNELS, viewType == 'L');
          yt.UserPrefs.save();

          window.location.href = "?s=mv&t=w&g=0&c=0";
          return;
        } else if (!compactView && viewType == 'C') {
          window.location.href = "?s=mv&t=w&g=0&c=0&to=1";
          return;
        }

        removeClass(_gel('searchViews'), 'view-type-L');
        removeClass(_gel('searchViews'), 'view-type-G');
        removeClass(_gel('searchViews'), 'view-type-C');
        addClass(_gel('searchViews'), 'view-type-' + viewType);
      } else {
        hideDiv(viewType == 'L' ? "btn-listview-off" : "btn-listview-on");
        showDiv(viewType == 'L' ? "btn-listview-on"    : "btn-listview-off");
        hideDiv(viewType == 'L' ? "btn-gridview-on"    : "btn-gridview-off");
        showDiv(viewType == 'L' ? "btn-gridview-off" : "btn-gridview-on");
      }

      if (_gel('video_grid')) {
        removeClass(_gel('video_grid'), viewType == 'L' ? 'membersGridView' : 'membersListView');
        addClass(    _gel('video_grid'), viewType == 'L' ? 'membersListView' : 'membersGridView');
      }

      yt.UserPrefs.setFlag(yt.UserPrefs.Flags.FLAG_GRID_VIEW_VIDEOS_AND_CHANNELS, viewType == 'L');
      yt.UserPrefs.save();

      return false;
    }
  </script>

</head>


<body onload="performOnLoadFunctions();" class="en_US is-english" onunload="performOnUnloadFunctions();">
 


<div id="baseDiv" class="date-20081129 video-info">
 <?php require($_SERVER['DOCUMENT_ROOT'] . "/static/mod/header.php"); ?>
<!--  
    <div id="old-masthead">
    <a href="/" onmousedown="urchinTracker('/Events/Header/SilasTubeLogo');" class="logo"><img src="http://sitetest1.meh.serv00.net/st/img/pixel-vfl73.gif" width="132" height="63" border="0" alt=""/></a>
    <div id="non-logo-masthead">
      <div id="top-margin-links-wrapper">
        <div class="user-info">
          




  <div id="util-links" class="normal-utility-links">

    <span class="util-item first"><b><a class="hLink" href="/signup?next=/members" onclick="_hbLink('SignUp','UtilityLinks');" onmousedown="urchinTracker('/Events/Header/UtilLinks/SignUp');">Sign Up</a></b></span>
    <span class="util-item"><a class="hLink" href="/watch_queue?all" onmousedown="urchinTracker('/Events/Header/UtilLinks/QuickList');">QuickList</a> (<span id="quicklist-utility">0</span>)</span>
    <span class="util-item"><a class="hLink" href="http://help.silastube.com/support/silastube/bin/static.py?page=start.cs&amp;hl=en-US" onmousedown="urchinTracker('/Events/Header/UtilLinks/Help');">Help</a></span>
      <span class="util-item"><a class="hLink" href="/login?next=/members" onmousedown="urchinTracker('/Events/Header/UtilLinks/SignIn');">Sign In</a></span>
  </div>

  <form name="logoutForm" method="post" target="_top" action="/index">
    <input type="hidden" name="action_logout" value="1">
  </form>


        </div>
        <div id="lang-locale-picker-links-wrapper">
          
    <span class="util-item first with-flag"><a href="#" class="contentRegionPickerLink eLink" onclick="loadFlagImgs();toggleDisplay('contentRegionPickerBox');return false;" onmousedown="urchinTracker('/Events/Header/UtilLinks/I18n/text');">Worldwide</a></span>
    <span class="util-item"><a href="#" class="uiLanguagePickerLink eLink" onclick="loadFlagImgs();toggleDisplay('uiLanguagePickerBox');return false;" onmousedown="urchinTracker('/Events/Header/UtilLinks/I18n/text');">English</a></span>

        </div>
            <div id="contentRegionPickerBox">
    <div class="picker-top">
      <div class="box-close-link"><a class="eLink" href="#" onclick="hideDiv('contentRegionPickerBox'); return false;">Close</a><img onclick="hideDiv('contentRegionPickerBox');" src="http://sitetest1.meh.serv00.net/st/img/pixel-vfl73.gif" alt="Close"></div>
      <h2>Set Your Country Content Preference <a href="#" class="eLink picker-help-link" onclick="toggleDisplay('region-picker-help'); return false;">(What is this?)</a></h2>
        <div id="region-picker-help">Choose which country's videos, channels, and activity filters (for example, "Most Viewed"), you would like to view.</div> 
      <div class="clearR"></div>
    </div>
  <div class="flagDiv">
      <script type="text/javascript">
        var gContentRegions = [
        [
        ['en_US','US','Worldwide (All)']        
        ]
                  ,        [
        ['en_AU','AU','Australia']                  ,        ['en_CA','CA','Canada']                  ,        ['en_IN','IN','India']                  ,        ['en_IE','IE','Ireland']                  ,        ['en_NZ','NZ','New Zealand']                  ,        ['en_GB','GB','UK']        
        ]
                  ,        [
        ['pt_BR','BR','Brazil']                  ,        ['cs_CZ','CZ','Czech Republic']                  ,        ['de_DE','DE','Germany']                  ,        ['es_ES','ES','Spain']                  ,        ['fr_FR','FR','France']                  ,        ['zh_HK','HK','Hong Kong']                  ,        ['en_IL','IL','Israel']                  ,        ['it_IT','IT','Italy']                  ,        ['ja_JP','JP','Japan']                  ,        ['ko_KR','KR','South Korea']                  ,        ['es_MX','MX','Mexico']                  ,        ['nl_NL','NL','Netherlands']                  ,        ['pl_PL','PL','Poland']                  ,        ['ru_RU','RU','Russia']                  ,        ['sv_SE','SE','Sweden']                  ,        ['zh_TW','TW','Taiwan']        
        ]
        
        ];
      </script>
      <div id="flagDivInnerContentRegion">
      </div>
  </div>
  </div>

            <div id="uiLanguagePickerBox">
    <div class="picker-top">
      <div class="box-close-link"><a class="eLink" href="#" onclick="hideDiv('uiLanguagePickerBox'); return false;">Close</a><img onclick="hideDiv('uiLanguagePickerBox');" src="http://sitetest1.meh.serv00.net/st/img/pixel-vfl73.gif" alt="Close"></div>
      <h2>Set Your Language Preference <a href="#" class="eLink picker-help-link" onclick="toggleDisplay('language-picker-help'); return false;">(What is this?)</a></h2>
      <div id="language-picker-help">Choose the language in which you want to view SilasTube. This will only change the interface, not any text entered by other users.</div>
      <div class="clearR"></div>
    </div>
  <div class="flagDiv">
      <script type="text/javascript">
        var gUILanguages = [
        ['de','Deutsch']                  ,        ['en-GB','English (UK)']                  ,        ['en','English (US)']                  ,        ['es','Español (España)']                  ,        ['es-MX','Español (Latinoamérica)']                  ,        ['fr','Français']                  ,        ['it','Italiano']                  ,        ['nl','Nederlands']                  ,        ['pl','Polski']                  ,        ['pt','Português (Brasil)']                  ,        ['ru','Pyccĸий']                  ,        ['sv','Svenska']                  ,        ['cs','Český']                  ,        ['zh-CN','中文 (简体)']                  ,        ['zh-TW','中文 (繁體)']                  ,        ['ja','日本語']                  ,        ['ko','한국어']        
        ];
      </script>
      <div id="flagDivInnerUILanguage">
      </div>
  </div>
  </div>

      </div>
    </div>
    <div class="nav" id="tab-wrapper">
      <div class="nav-item first" id="nav-item-home">
        <span class="leftcap"></span>
        <a class="content" href="/" onmousedown="urchinTracker('/Events/Header/MainTabs/HomeTab');">Home</a>
        <span class="rightcap"></span>
      </div>
      <div class="nav-item" id="nav-item-videos">
        <div class="nav-tab">
          <span class="leftcap"></span>
          <a class="content" href="/browse" onmousedown="urchinTracker('/Events/Header/MainTabs/VideosTab');">Videos</a>
          <span class="rightcap"></span>
        </div>
      </div>
      
      <div class="nav-item selected" id="nav-item-channels">
        <div class="nav-tab">
          <span class="leftcap"></span>
          <a class="content" href="/members" onmousedown="urchinTracker('/Events/Header/MainTabs/ChannelsTab');">Channels</a>
          <span class="rightcap"></span>
        </div>
      </div>
      <div class="nav-item" id="nav-item-community">
        <div class="nav-tab">
          <span class="leftcap"></span>
          <a class="content" href="/community" onmousedown="urchinTracker('/Events/Header/MainTabs/CommunityTab');">Community</a>
          <span class="rightcap"></span>
        </div>
      </div>
    </div>

    <form autocomplete="off" action="/results" method="get" name="searchForm" onsubmit="return submitRegularSearchRequest()">

    <div class="bar">
      <span class="leftcap"></span>
      <div class="search-bar">
          <div id="upload-wrapper">      
    <span id="upload-button" class="action-button">
      <span class="action-button-leftcap"></span>
      <a class="action-button-text" href="/my_videos_upload" onmousedown="urchinTracker('/Events/Header/UploadButton');">Upload</a>
      <span class="action-button-dropcap" onmouseover="setDisplay(_gel('upload-menu'), true); return false;" onmouseout="setDisplay(_gel('upload-menu'), false); return false;">
        <img src="https://web.archive.org/web/20081129171730im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif">
        <div id="upload-menu" class="action-button-menu">
          <a href="/my_videos_upload" onmousedown="urchinTracker('/Events/Header/UploadButton');">Video File</a>
          <a href="/my_videos_quick_capture" onmousedown="urchinTracker('Events/Header/QuickCaptureButton');">Quick Capture</a>
        </div>
      </span>
      <--<span class="action-button-rightcap"></span>->
    </span>
  </div>

        <div id="search-form">
          <input id="masthead-search-term" name="search_query" type="text" tabindex="1" onkeyup="top.goog.i18n.bidi.setDirAttribute(event,this)" value="" maxlength="128"/>
          <select class="search-type" name="search_type" tabindex="2">
            <option value="">Videos</option>
            <option value="search_users">Channels</option>
            <option value="search_playlists">Playlists</option>
          </select>
          <input id="search-button" type="submit" tabindex="3" value="Search"/>
        </div>
        <div class="search-settings-link">
        <a href="#" class="eLink" tabindex="4" onmousedown="urchinTracker('/Events/Header/AdvancedSearch');" onclick="return toggleAdvSearch('', '', '', '', '', '', '', '')">
          advanced
        </a></div>
      </div>
      <span class="rightcap"></span>
    </div>

    </form>

    <div id="search-advanced-form" class="hid">
      <div class="search-setting-inner alignC">Loading...</div>
    </div>

    <div class="clear"></div>
  </div> 
  <div id="search-settings-clr" class="hid"></div>

  
  
  

  
  
  
-->
<div id="header-wrapper" class="newtube-header-wrapper">
  <div id="header-left">
    Channels
  </div>
  <div id="header-middle">
    All
<span class="list-name">&nbsp;&nbsp;-&nbsp;&nbsp;Most Viewed (This Week)</span>
  </div>
  <div id="header-right">
  </div>
  <div class="clearL"></div>
</div>

  <div class="videoModifiers">
  
      <div class="subcategory first">
          <a href="?s=ms&amp;t=w&amp;g=0">Most Subscribed</a>
      </div>
  
      <div class="subcategory">
          <span class="selected">Most Viewed</span>
      </div>
    <div class="clear"></div>

  </div>
<?php require($_SERVER['DOCUMENT_ROOT'] . "/static/mod/sidebar.php"); ?>
<div id="body-column" class="members">



  <div id="subsubNav" class="videosColor">

    <div id="viewTypeContainer">
      <div id="searchViews" class="view-type-G">
        <span id="displayLabel">Display: </span><img id="btn-listview-on" title="List View" alt="List View" class="hide" src="http://sitetest1.meh.serv00.net/st/img/pixel-vfl73.gif"><a href="#" onclick="return membersViewType('G')"><img id="btn-gridview-off" title="Grid View" alt="Grid View" class="hide" src="http://sitetest1.meh.serv00.net/st/img/pixel-vfl73.gif"></a><a href="#" onclick="return membersViewType('L')"><img id="btn-listview-off" title="List View" alt="List View" src="http://sitetest1.meh.serv00.net/st/img/pixel-vfl73.gif"></a><img id="btn-gridview-on" title="Grid View" alt="Grid View" src="http://sitetest1.meh.serv00.net/st/img/pixel-vfl73.gif">
      </div>
    </div>

    <div class="videoModifiers">
          <div class="subcategory first">
              <a href="?s=mv&amp;t=t&amp;g=0">Today</a>
          </div>
          <div class="subcategory">
              <span class="selected">This Week</span>
          </div>
          <div class="subcategory">
              <a href="?s=mv&amp;t=m&amp;g=0">This Month</a>
          </div>
          <div class="subcategory">
              <a href="?s=mv&amp;t=a&amp;g=0">All Time</a>
          </div>
      <div class="clear"></div>
    </div>

  </div> <!-- end subsubNav -->

  <div class="clear"></div>


  <div id="browseMain">
    <div id="video_grid" class="membersGridView">
        
    <div class="padB5">
    </div>

  <table cellpadding="0" cellspacing="0" border="0" width="100%">
        

  <tr valign="top"><td>
    <div class="memberContainer">
      <div class="memberBoxList">
          <div class="user-thumb-large"><div>
<a href="/user/channelname1234567">
      <img src="dynamic/profile/profile.jpg" alt="channelname1234567">
</a>
  </div></div>

      </div>
      <div class="vldescbox">
        <div class="vltitle">
          <a href="/user/channelname1435687">channelname1234...</a>
        </div>

        <div class="vltitlealt">
          <a href="/user/channelname1234567">channelname1234567</a>
        </div>
        <div class="vldesc">
            Channel Description
        </div>

      </div>
      <div class="vlclearalt"></div>
      <div class="memberBoxGrid">
          <div class="user-thumb-large"><div>
<a href="/user/channelname1234567">
      <img src="dynamic/profile/profile.jpg" alt="channelname1234567">
</a>
  </div></div>

      </div>
      <div class="vlclearalt"></div>
      <div class="vlfacets">
        <div class="memberBoxTypeContainer">
          <div class="memberStat"><span class="grayText">Type:</span> Standard</div>
        </div>
        <div class="memberBoxTypeContainerAlt"><a href="/user/channelname1234567">channelname1234...</a></div>
        <div class="memberBoxTypeContainerAlt memberListGroupType">Standard</div>
          <div class="memberStat"><span class="grayText">              Videos:
</span> 1</div>
          <div class="memberStat"><span class="grayText">              Video views:
</span> 0</div>
      </div>
      <div class="vlclear"></div>
    </div>


        


    <div class="memberContainer">
      <div class="memberBoxList">
          <div class="user-thumb-large"><div>
<a href="/user/channelname1234567">
      <img src="dynamic/profile/profile.jpg" alt="channelname1234567">
</a>
  </div></div>

      </div>
      <div class="vldescbox">
        <div class="vltitle">
          <a href="/user/channelname1435687">channelname1234...</a>
        </div>

        <div class="vltitlealt">
          <a href="/user/channelname1234567">channelname1234567</a>
        </div>
        <div class="vldesc">
            Channel Description
        </div>

      </div>
      <div class="vlclearalt"></div>
      <div class="memberBoxGrid">
          <div class="user-thumb-large"><div>
<a href="/user/channelname1234567">
      <img src="dynamic/profile/profile.jpg" alt="channelname1234567">
</a>
  </div></div>

      </div>
      <div class="vlclearalt"></div>
      <div class="vlfacets">
        <div class="memberBoxTypeContainer">
          <div class="memberStat"><span class="grayText">Type:</span> Standard</div>
        </div>
        <div class="memberBoxTypeContainerAlt"><a href="/user/channelname1234567">channelname1234...</a></div>
        <div class="memberBoxTypeContainerAlt memberListGroupType">Standard</div>
          <div class="memberStat"><span class="grayText">              Videos:
</span> 1</div>
          <div class="memberStat"><span class="grayText">              Video views:
</span> 0</div>
      </div>
      <div class="vlclear"></div>
    </div>


        


    <div class="memberContainer">
      <div class="memberBoxList">
          <div class="user-thumb-large"><div>
<a href="/user/channelname1234567">
      <img src="dynamic/profile/profile.jpg" alt="channelname1234567">
</a>
  </div></div>

      </div>
      <div class="vldescbox">
        <div class="vltitle">
          <a href="/user/channelname1435687">channelname1234...</a>
        </div>

        <div class="vltitlealt">
          <a href="/user/channelname1234567">channelname1234567</a>
        </div>
        <div class="vldesc">
            Channel Description
        </div>

      </div>
      <div class="vlclearalt"></div>
      <div class="memberBoxGrid">
          <div class="user-thumb-large"><div>
<a href="/user/channelname1234567">
      <img src="dynamic/profile/profile.jpg" alt="channelname1234567">
</a>
  </div></div>

      </div>
      <div class="vlclearalt"></div>
      <div class="vlfacets">
        <div class="memberBoxTypeContainer">
          <div class="memberStat"><span class="grayText">Type:</span> Standard</div>
        </div>
        <div class="memberBoxTypeContainerAlt"><a href="/user/channelname1234567">channelname1234...</a></div>
        <div class="memberBoxTypeContainerAlt memberListGroupType">Standard</div>
          <div class="memberStat"><span class="grayText">              Videos:
</span> 1</div>
          <div class="memberStat"><span class="grayText">              Video views:
</span> 0</div>
      </div>
      <div class="vlclear"></div>
    </div>


        


    <div class="memberContainer">
      <div class="memberBoxList">
          <div class="user-thumb-large"><div>
<a href="/user/channelname1234567">
      <img src="dynamic/profile/profile.jpg" alt="channelname1234567">
</a>
  </div></div>

      </div>
      <div class="vldescbox">
        <div class="vltitle">
          <a href="/user/channelname1435687">channelname1234...</a>
        </div>

        <div class="vltitlealt">
          <a href="/user/channelname1234567">channelname1234567</a>
        </div>
        <div class="vldesc">
            Channel Description
        </div>

      </div>
      <div class="vlclearalt"></div>
      <div class="memberBoxGrid">
          <div class="user-thumb-large"><div>
<a href="/user/channelname1234567">
      <img src="dynamic/profile/profile.jpg" alt="channelname1234567">
</a>
  </div></div>

      </div>
      <div class="vlclearalt"></div>
      <div class="vlfacets">
        <div class="memberBoxTypeContainer">
          <div class="memberStat"><span class="grayText">Type:</span> Standard</div>
        </div>
        <div class="memberBoxTypeContainerAlt"><a href="/user/channelname1234567">channelname1234...</a></div>
        <div class="memberBoxTypeContainerAlt memberListGroupType">Standard</div>
          <div class="memberStat"><span class="grayText">              Videos:
</span> 1</div>
          <div class="memberStat"><span class="grayText">              Video views:
</span> 0</div>
      </div>
      <div class="vlclear"></div>
    </div>

  </td></tr>

  </table>
    <div class="searchFooterBox">
          <div class="pagingDiv">
      <span class="smallLabel"> Pages: </span>


        <span class="pagerCurrent">1</span>
            <a href="?s=mv&amp;t=w&amp;g=0&amp;c=0&amp;to=0&amp;nb=0&amp;p=2" class="pagerNotCurrent">2</a>
            <a href="?s=mv&amp;t=w&amp;g=0&amp;c=0&amp;to=0&amp;nb=0&amp;p=3" class="pagerNotCurrent">3</a>
            <a href="?s=mv&amp;t=w&amp;g=0&amp;c=0&amp;to=0&amp;nb=0&amp;p=4" class="pagerNotCurrent">4</a>
            <a href="?s=mv&amp;t=w&amp;g=0&amp;c=0&amp;to=0&amp;nb=0&amp;p=5" class="pagerNotCurrent">5</a>

    
          <a href="?s=mv&amp;t=w&amp;g=0&amp;c=0&amp;to=0&amp;nb=0&amp;p=2" class="pagerNotCurrent">Next</a>
    
    </div>

    </div>

    </div>
  </div> <!-- end mainContentWithNav -->
</div>
<div id="right-column">
    
  <!-- Begin ad tag -->
    <div id="ad_creative_1" class="ad-div">

  

  


        <script type="text/javascript">
      var google_language = "en";
    </script>

  
  <script type="text/javascript">
    ord=Math.random()*10000000000000000;
    document.write('<script language="JavaScript" src="http://n4061ad.doubleclick.net/adj/com.stmember.mostviewed/default;sz=160x600;kl=N;klg=en;kt=K;dcdupd=1;kga=-1;time=w;kgg=-1;kcr=us;kmyd=ad_creative_1;tile=1;dcopt=ist;ord=' + ord + '?" type="text/javascript"><\/script>');
  </script>


      <div class="alignC xsmallText grayText padT3">
        Advertisement
      </div>
    </div>

  <!-- End ad tag -->


</div>

    <div class="clear"></div>

<?php require($_SERVER['DOCUMENT_ROOT'] . "/static/mod/footer.php"); ?>
<!--  <div id="old-footer">
    <div class="search">
      <div class="promo">
        <a href="/watch?v=u7oUj1Fv7NM" onclick="_hbLink('FooterPromo','Footer');"><img src="http://sitetest1.meh.serv00.net/st/img/silastube_live-vfl65021.gif" alt="footer-promo"/></a><br/>
        <a href="/watch?v=u7oUj1Fv7NM" class="hLink smallText" onclick="_hbLink('FooterPromo','Footer');">Watch the full show!</a>
      </div>
      <form autocomplete="off" name="footer-search-form" method="get" action="/results" style="width: 73.5%;">
        <a href="http://www.google.com/webmasters/igoogle/silastube.html"><img id="igoogle_footer_img" src="http://sitetest1.meh.serv00.net/st/img/pixel-vfl73.gif" alt=""/> <em id="igoogle_footer_text">Add to iGoogle</em></a>
        <input type="text" name="search_query" maxlength="128" class="query" onkeyup="top.goog.i18n.bidi.setDirAttribute(event,this)" value="" id="footer-search-term">
        <select class="search-type" name="search_type">
          <option value="">Videos</option>
          <option value="search_users">Channels</option>
          <option value="search_playlists">Playlists</option>
        </select>
        <input onfocus="urchinTracker('/Events/Footer/Search');" type="submit" name="search" value="Search" class="submit-button">
      </form>
    </div>
    <div class="links">
      <table cellpadding="0" cellspacing="0">
        <tr>
          <th colspan="2">Your Account</th>
          <th class="separator" colspan="2">Help &amp; Info</th>
          <th class="separator" colspan="2">SilasTube</th>
        </tr>
        <tr>
          <td><a href="/my_videos">Videos</a></td>
          <td><a href="/inbox">Inbox</a></td>
          <td class="separator"><a href="http://help.silastube.com/support/silastube/bin/static.py?page=start.cs&amp;hl=en-US">Help Resources</a></td>
          <td><a href="http://help.silastube.com/group/silastube-help?hl=en_US">Community Help Forums</a></td>
          <td class="separator"><a href="/t/about">Company Info</a></td>
          <td><a href="/press_room">Press</a></td>
        </tr>
        <tr>
          <td><a href="/my_favorites">Favorites</a></td>
          <td><a href="/my_subscriptions">Subscriptions</a></td>
          <td class="separator"><a href="/t/safety">Safety Tips</a></td>
          <td><a href="/t/dmca_policy">Copyright Notices</a></td>
          <td class="separator"><a href="/testtube">TestTube</a></td>
          <td><a href="/t/contact_us">Contact</a></td>
        </tr>
        <tr>
          <td><a href="/my_playlists">Playlists</a></td>
          <td><a href="/my_account">more...</a></td>
          <td class="separator"><a href="/dev">Developer APIs</a></td>
          <td><a href="/t/community_guidelines">Community Guidelines</a></td>
          <td class="separator"><a href="/t/terms">Terms of Use</a></td>
          <td><a href="/blog">Blog</a></td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
          <td class="separator"><a href="/advertise">Advertising</a></td>
          <td><a href="/silastubeonyoursite">SilasTube On Your Site</a></td>
          <td class="separator"><a href="/t/privacy">Privacy Policy</a></td>
          <td>
            <a href="http://www.google.com/jobs/silastube">Jobs</a><br/>
          </td>
        </tr>

        <tr>
          <td colspan="2">&nbsp;</td>
          <td class="separator" colspan="2"><a href="/t/st_handbook_home">SilasTube Handbook</a></td>
          <td class="separator" colspan="2">&nbsp;</td>
        </tr>
      </table>
    </div>
  </div>
  <div id="copyright">
    &copy; 2025 SilasTube, LLC
  </div>


</div> <-- end baseDiv ->-->


<a name="pageBottom"></a>

</body>
<script type="text/javascript">
  window.setTimeout('window.google.ac.install(document.searchForm,document.searchForm.search_query,"yt",true,"close",true,"Suggestions")', 100);
</script>



</html>