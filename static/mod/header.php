<?php
  if(isset($_SESSION['siteusername'])) {
        $stmt = $__db->prepare("UPDATE users SET ip = :ip WHERE username = :username");
        $stmt->bindParam(":username", $_SESSION['siteusername']);
    $stmt->bindParam(":ip",       $_SERVER["HTTP_CF_CONNECTING_IP"]);
        $stmt->execute();

    $stmt = $__db->prepare("UPDATE users SET lastlogin = now() WHERE username = :username");
        $stmt->bindParam(":username", $_SESSION['siteusername']);
        $stmt->execute();
  }

  if(isset($_SESSION['siteusername']) && !$__user_h->user_exists(@$_SESSION['siteusername'])) {
    die("<a href='/logout'>Your user has been deleted. Logout</a>");
  }
  ini_set('display_errors', 0);

?>
<div id="old-masthead">
   <a href="/" onmousedown="urchinTracker('/Events/Header/SilasTubeLogo');" class="logo"><img src="/st/img/silastubelogo.gif" width="132" height="63" border="0" alt=""/></a>
    <div id="non-logo-masthead">
      <div id="top-margin-links-wrapper">
        <div class="user-info">
          




  <div id="util-links" class="normal-utility-links">

<?php if (isset($_SESSION['username'])): ?>
    <!-- Logged-in state -->
    <span class="util-item first"><b><a class="hLink" href="/account"> <?php echo htmlspecialchars($_SESSION['username']); ?> </a></b></span>
    <span class="util-item"><a class="hLink" href="/watch_queue?all">QuickList</a> (<span id="quicklist-utility">0</span>)</span>
    <span class="util-item"><a class="hLink" href="http://help.silastube.com/support/silastube/bin/static.py?page=start.cs&amp;hl=en-US">Help</a></span>
    <span class="util-item"><a class="hLink" href="logout.php">Sign Out</a></span>
<?php else: ?>
    <!-- Not logged-in state -->
    <span class="util-item first"><b><a class="hLink" href="/signup?next=/">Sign Up</a></b></span>
    <span class="util-item"><a class="hLink" href="/watch_queue?all">QuickList</a> (<span id="quicklist-utility">0</span>)</span>
    <span class="util-item"><a class="hLink" href="http://help.silastube.com/support/silastube/bin/static.py?page=start.cs&amp;hl=en-US">Help</a></span>
    <span class="util-item"><a class="hLink" href="/login?next=/">Sign In</a></span>
<?php endif; ?>

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
      <div class="nav-item first <?php echo ($_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index') ? 'selected' : ''; ?>" id="nav-item-home">
        <span class="leftcap"></span>
        <a class="content" href="/" onmousedown="urchinTracker('/Events/Header/MainTabs/HomeTab');">Home</a>
        <span class="rightcap"></span>
      </div>
      <div class="nav-item <?php echo ($_SERVER['REQUEST_URI'] == '/browse' || $_SERVER['REQUEST_URI'] == '/browse') ? 'selected' : ''; ?><?php echo ($_SERVER['REQUEST_URI'] == '/watch?v=' || $_SERVER['REQUEST_URI'] == '/watch') ? 'selected' : ''; ?>" id="nav-item-videos">
        <div class="nav-tab">
          <span class="leftcap"></span>
          <a class="content" href="/browse" onmousedown="urchinTracker('/Events/Header/MainTabs/VideosTab');">Videos</a>
          <span class="rightcap"></span>
        </div>
      </div>
      
      <div class="nav-item <?php echo ($_SERVER['REQUEST_URI'] == '/members' || $_SERVER['REQUEST_URI'] == '/members') ? 'selected' : ''; ?>" id="nav-item-channels">
        <div class="nav-tab">
          <span class="leftcap"></span>
          <a class="content" href="/members" onmousedown="urchinTracker('/Events/Header/MainTabs/ChannelsTab');">Channels</a>
          <span class="rightcap"></span>
        </div>
      </div>
      <div class="nav-item <?php echo ($_SERVER['REQUEST_URI'] == '/community' || $_SERVER['REQUEST_URI'] == '/community') ? 'selected' : ''; ?>" id="nav-item-community">
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
        <img src="/st/img/pixel-vfl73.gif">
        <div id="upload-menu" class="action-button-menu">
          <a href="/my_videos_upload" onmousedown="urchinTracker('/Events/Header/UploadButton');">Video File</a>
          <a href="/my_videos_quick_capture" onmousedown="urchinTracker('Events/Header/QuickCaptureButton');">Quick Capture</a>
        </div>
      </span>
      <!--<span class="action-button-rightcap"></span>-->
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

  
  
  

  
  
  




