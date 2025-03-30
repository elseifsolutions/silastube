<div id="baseDiv" class="date-20100818 video-info ">
        
  

    </div>
    <div id="edit_controls" class="edit_controls_outer" style="background-color: rgb(239, 239, 239);">
    <div class="edit_controls_top_border">&nbsp;</div>
    <div class="channel_tabs">
        
  
  
  
  <div class="yt-alert yt-alert-info yt-rounded hid" style="display: none;">
      <img src="/YouTube - YujiTanaka19920818&#39;s Channel_files/pixel-vfl73.gif" class="icon master-sprite" alt="Alert icon">
    
    <div id="bulletin_promo_message" class="yt-alert-content">
            New! Communicate with your subscribers by posting bulletins to their YouTube homepages. <a href="https://web.archive.org/web/20100818174042/http://www.google.com/support/youtube/bin/answer.py?&amp;answer=178035">Learn more.</a>
    </div>
    
      <button onclick="_hidediv(this.parentNode);deactive_bulletin_promo();" class="close master-sprite">
        close
      </button>
  </div>

      <div id="edit-save-messages" style="display:none">&nbsp;</div>
      <div class="channel_tabs_inner" dir="ltr">
          <div class="channel_settings_tab_spacer" style="width:2px">&nbsp;</div>
            <div id="channel_tab_bulletin" title="Post Bulletin for Subscribers and Friends" class="channel_settings_tab" onclick="channel_edit_tab(&#39;bulletin&#39;)" dir="ltr">
    Post Bulletin
  </div>

          <div class="channel_settings_tab_spacer">&nbsp;</div>
          <div id="channel_tab_info" class="channel_settings_tab" onclick="channel_edit_tab(&#39;info&#39;)" dir="ltr">
    Settings
  </div>

          <div id="channel_tab_colors" class="channel_settings_tab" onclick="channel_edit_tab(&#39;colors&#39;)" dir="ltr">
    Themes and Colors
  </div>

          <div id="channel_tab_layout" class="channel_settings_tab" onclick="channel_edit_tab(&#39;layout&#39;)" dir="ltr">
    Modules
  </div>

          <div id="channel_tab_playnav" class="channel_settings_tab" onclick="channel_edit_tab(&#39;playnav&#39;)" dir="ltr">
    Videos and Playlists
  </div>

      </div>
      <div class="hLink floatR" onclick="channel_edit_tab(&#39;close&#39;)" id="channel_edit_close" style="padding-top: 0.75em; font-size: 11px; display: none;">Close</div>
      <div class="spacer">&nbsp;</div>
            <div id="tab_contents_bulletin" style="display: none;" class="channel_tab_content">
    <div id="bulletin-messages" style="display:none"></div>


  <form name="bulletin" id="post_feed_bulletin_tab" onsubmit="return false">
    <table width="100%"><tbody><tr>
      <td width="50%" style="padding: 10px 10px 7px 10px" valign="top">
        <div>
          <textarea id="bulletin_input__" rows="3" class="msg_input msg_placeholder" onfocus="swap_input_for_placeholder(&#39;bulletin_input&#39;)">Enter message</textarea>
          <textarea id="bulletin_input" rows="3" class="msg_input" style="display:none" onfocus="feed_bulletin_preview_onfocus(this)" onblur="feed_bulletin_preview_onblur(this)" onkeyup="goog.i18n.bidi.setDirAttribute(event,this);_gel(&#39;preview_bulletin_message&#39;).dir=this.dir;feed_bulletin_maxlength(this);"></textarea>
          <input id="bulletin_default" type="hidden" value="Enter message">
        </div>
        <div>
          <input type="text" id="bulletin_video_input__" value="Enter YouTube video URL (optional)" maxlength="250" class="msg_input msg_placeholder" onfocus="swap_input_for_placeholder(&#39;bulletin_video_input&#39;)">
          <input type="text" id="bulletin_video_input" value="" maxlength="250" class="msg_input" style="display:none" onfocus="feed_bulletin_preview_video_onfocus(this)" onblur="feed_bulletin_preview_video_onblur(this)" onkeyup="goog.i18n.bidi.setDirAttribute(event,this)">
          <input id="bulletin_video_default" type="hidden" value="Enter YouTube video URL (optional)">
        </div>
        <div class="channel_bulletin_post">
            <button type="button" class=" yt-uix-button yt-uix-button-primary" onclick="post_feed_bulletin_from_tab();return false;"><span class="yt-uix-button-content">Post Bulletin</span></button>
or
    <a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user#" onclick="cancel_feed_bulletin_from_tab();return false">cancel</a>
  <div class="save_overlay">
<center><img src="/YouTube - YujiTanaka19920818&#39;s Channel_files/icn_loading_animated-vfl24663.gif"></center>
</div>


        </div>
      </td>
      <td width="50%" style="padding: 10px 10px 7px 0" valign="top">
        <div id="bulletin_preview">
          <div style="margin:8px">
            <div id="bulletin_preview_title">Bulletin Preview</div>
            <div class="feed_title">
              <span dir="ltr">YujiTanaka19920818</span> <span id="preview_bulletin_message"></span>
            </div>
            <img id="preview_bulletin_loading" style="display:none" src="./YouTube - YujiTanaka19920818&#39;s Channel_files/icn_loading_animated-vfl24663.gif">
            <div id="preview_bulletin_video"></div>
            <div class="cb">&nbsp;</div>
          </div>
        </div>
        <div>
Bulletin will be posted to your subscribers' (0) and friends' (0) homepages, optional subscription emails, and your channel page.
          <a href="https://web.archive.org/web/20100818174042/http://www.google.com/support/youtube/bin/answer.py?&amp;answer=178035">Learn more.</a>
        </div>
      </td>
    </tr></tbody></table>
  </form>

    </div>


    <script type="text/javascript">
      yt.pubsub.subscribe('init', function() { channel_edit_tab('bulletin'); });
    </script>

          <div id="tab_contents_info" style="display:none;" class="channel_tab_content">
    <div id="info-messages" style="display:none"></div>

  <form name="settings" id="channel_settings" onsubmit="return false">
  <table width="100%"><tbody><tr>
    <td width="50%" style="padding: 10px 10px 7px 10px;border-right:1px dotted #bbb" valign="top">
      <div class="settings_label">URL:</div>
      <div class="settings_control"><a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user/YujiTanaka19920818">http://www.youtube.com/user/YujiTanaka19920818</a></div>
      <div class="settings_separator">&nbsp;</div>
      <div class="settings_label">Title:</div>
      <div class="settings_control"><input name="title" id="channel_title_input" value="" style="width:200px" onkeypress="settings_tab_keypress();return length_check(event, this, 30)" onkeyup="goog.i18n.bidi.setDirAttribute(event,this)"></div>
      <div class="settings_separator">&nbsp;</div>
      <div class="settings_label">Channel Type:</div>
      <div class="settings_control">  <span>
    <select id="channel_type" name="channel_type" onchange="">
      <option selected="" value="u">YouTuber</option>
      <option value="d">Director</option>
      <option value="m">Musician</option>
      <option value="c">Comedian</option>
      <option value="g">Guru</option>
      <option value="j">Reporter</option>
    </select>
  </span>
</div>
      <div class="settings_separator">&nbsp;</div>
      <div class="settings_label">Make Channel Visible:</div>
      <div class="settings_control">
        <input name="channel_hidden" id="channel_hidden_n" type="radio" checked="" value="no"><label for="channel_hidden_n">Yes</label>
        <input name="channel_hidden" id="channel_hidden_y" type="radio" value="yes"><label for="channel_hidden_y">No</label>
      </div>
    </td>
    <td width="50%" style="padding: 10px 10px 7px 10px" valign="top">
      <div class="settings_label">Channel Tags:
        <div style="font-size:80%;color:#666">(space separated)</div>
      </div>
      <div class="settings_control"><textarea name="keywords" rows="4" cols="250" style="width:350px" onkeypress="settings_tab_keypress();return length_check(event, this, 100)" onkeyup="goog.i18n.bidi.setDirAttribute(event,this)"></textarea><br>
        <span style="font-size:90%;color:#333">Tags are keywords used to help people find your channel.</span>
      </div>
      <div class="settings_separator">&nbsp;</div>
      <div class="settings_label">Let others find my channel on YouTube if they have my email address</div>
      <div class="settings_control"><input id="find_me_via_email" type="checkbox" name="find_me_via_email" checked="" value="agreed"></div>
    </td>
  </tr></tbody></table>
  <div class="settings_separator_save">&nbsp;</div>
  <div class="channel_settings_save">
        <button type="button" class=" yt-uix-button yt-uix-button-primary" onclick="save_channel_settings();return false;"><span class="yt-uix-button-content">Save Changes</span></button>
or
        <a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user#" onclick="channel_edit_tab(&#39;close&#39;, true);return false">cancel</a>
    <div class="save_overlay">
<center><img src="/YouTube - YujiTanaka19920818&#39;s Channel_files/icn_loading_animated-vfl24663.gif"></center>
</div>


  </div>
  <div class="cb">&nbsp;</div>
  </form>
    </div>


          <div id="tab_contents_colors" style="display:none;" class="channel_tab_content">
    <div id="colors-messages" style="display:none"></div>

  <div id="theme_container">  <div id="default" class="theme_selector_div theme_selected" style="font-family:arial" onclick="set_theme_obj(this.id);"><div style="background-color: #CCCCCC;color:#333333;padding: 3px;line-height:120%"><div style="background-color: #999999;color: #000000;padding:3px;font-size:10px"><div style="float:right;width:4em;background-color:#eeeeff;font-size:9px;padding-left:1px;color:#333333"><span style="color:#000000;font-size:120%">A</span> &nbsp;<span style="color:#0000cc;text-decoration:underline">url</span><br>abc</div><span style="color:#0000cc;text-decoration:underline">url</span><br>abc</div></div><div style="text-align:center;"><span class="theme_title" style="padding:2px;height:2em;overflow:hidden">Grey</span><br><a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user#" class="hLink" onclick="delete_theme(&#39;default&#39;);return false;" style="font-size: 75%; visibility: hidden; display: none;" id="delete_default">delete</a></div></div><div id="blue" class="theme_selector_div" style="font-family:arial" onclick="set_theme_obj(this.id);"><div style="background-color: #003366;color:#ffffff;padding: 3px;line-height:120%"><div style="background-color: #0066CC;color: #ffffff;padding:3px;font-size:10px"><div style="float:right;width:4em;background-color:#3D8BD8;font-size:9px;padding-left:1px;color:#ffffff"><span style="color:#ffffff;font-size:120%">A</span> &nbsp;<span style="color:#99C2EB;text-decoration:underline">url</span><br>abc</div><span style="color:#0000CC;text-decoration:underline">url</span><br>abc</div></div><div style="text-align:center;"><span class="theme_title" style="padding:2px;height:2em;overflow:hidden">Blue</span><br><a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user#" class="hLink" onclick="delete_theme(&#39;blue&#39;);return false;" style="font-size:75%;visibility:hidden" id="delete_blue">delete</a></div></div><div id="scary" class="theme_selector_div" style="font-family:arial" onclick="set_theme_obj(this.id);"><div style="background-color: #660000;color:#FFFFFF;padding: 3px;line-height:120%"><div style="background-color: #990000;color: #FFFFFF;padding:3px;font-size:10px"><div style="float:right;width:4em;background-color:#660000;font-size:9px;padding-left:1px;color:#FFFFFF"><span style="color:#FFFFFF;font-size:120%">A</span> &nbsp;<span style="color:#FF0000;text-decoration:underline">url</span><br>abc</div><span style="color:#FF0000;text-decoration:underline">url</span><br>abc</div></div><div style="text-align:center;"><span class="theme_title" style="padding:2px;height:2em;overflow:hidden">Red</span><br><a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user#" class="hLink" onclick="delete_theme(&#39;scary&#39;);return false;" style="font-size:75%;visibility:hidden" id="delete_scary">delete</a></div></div><div id="sunlight" class="theme_selector_div" style="font-family:arial" onclick="set_theme_obj(this.id);"><div style="background-color: #FFE599;color:#E69138;padding: 3px;line-height:120%"><div style="background-color: #E69138;color: #FFFFFF;padding:3px;font-size:10px"><div style="float:right;width:4em;background-color:#FFD966;font-size:9px;padding-left:1px;color:#E69138"><span style="color:#E69138;font-size:120%">A</span> &nbsp;<span style="color:#E69138;text-decoration:underline">url</span><br>abc</div><span style="color:#FFD966;text-decoration:underline">url</span><br>abc</div></div><div style="text-align:center;"><span class="theme_title" style="padding:2px;height:2em;overflow:hidden">Sunlight</span><br><a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user#" class="hLink" onclick="delete_theme(&#39;sunlight&#39;);return false;" style="font-size:75%;visibility:hidden" id="delete_sunlight">delete</a></div></div><div id="forest" class="theme_selector_div" style="font-family:Arial" onclick="set_theme_obj(this.id);"><div style="background-color: #274E13;color:#274E13;padding: 3px;line-height:120%"><div style="background-color: #38761D;color: #ffffff;padding:3px;font-size:10px"><div style="float:right;width:4em;background-color:#6AA84F;font-size:9px;padding-left:1px;color:#274E13"><span style="color:#274E13;font-size:120%">A</span> &nbsp;<span style="color:#38761D;text-decoration:underline">url</span><br>abc</div><span style="color:#FFFFFF;text-decoration:underline">url</span><br>abc</div></div><div style="text-align:center;"><span class="theme_title" style="padding:2px;height:2em;overflow:hidden">Forest</span><br><a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user#" class="hLink" onclick="delete_theme(&#39;forest&#39;);return false;" style="font-size:75%;visibility:hidden" id="delete_forest">delete</a></div></div><div id="8bit" class="theme_selector_div" style="font-family:Courier New" onclick="set_theme_obj(this.id);"><div style="background-color: #666666;color:#666666;padding: 3px;line-height:120%"><div style="background-color: #444444;color: #FFFFFF;padding:3px;font-size:10px"><div style="float:right;width:4em;background-color:#000000;font-size:9px;padding-left:1px;color:#666666"><span style="color:#AAAAAA;font-size:120%">A</span> &nbsp;<span style="color:#FF0000;text-decoration:underline">url</span><br>abc</div><span style="color:#FF0000;text-decoration:underline">url</span><br>abc</div></div><div style="text-align:center;"><span class="theme_title" style="padding:2px;height:2em;overflow:hidden">8-bit</span><br><a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user#" class="hLink" onclick="delete_theme(&#39;8bit&#39;);return false;" style="font-size:75%;visibility:hidden" id="delete_8bit">delete</a></div></div><div id="princess" class="theme_selector_div" style="font-family:arial" onclick="set_theme_obj(this.id);"><div style="background-color: #ff99cc;color:#333366;padding: 3px;line-height:120%"><div style="background-color: #aa66cc;color: #ffffff;padding:3px;font-size:10px"><div style="float:right;width:4em;background-color:#ffffff;font-size:9px;padding-left:1px;color:#333366"><span style="color:#8a2c87;font-size:120%">A</span> &nbsp;<span style="color:#351C75;text-decoration:underline">url</span><br>abc</div><span style="color:#351C75;text-decoration:underline">url</span><br>abc</div></div><div style="text-align:center;"><span class="theme_title" style="padding:2px;height:2em;overflow:hidden">Princess</span><br><a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user#" class="hLink" onclick="delete_theme(&#39;princess&#39;);return false;" style="font-size:75%;visibility:hidden" id="delete_princess">delete</a></div></div><div id="fire" class="theme_selector_div" style="font-family:arial" onclick="set_theme_obj(this.id);"><div style="background-color: #660000;color:#ffffff;padding: 3px;line-height:120%"><div style="background-color: #FF0000;color: #ffffff;padding:3px;font-size:10px"><div style="float:right;width:4em;background-color:#FF9900;font-size:9px;padding-left:1px;color:#ffffff"><span style="color:#FFFF00;font-size:120%">A</span> &nbsp;<span style="color:#FFDBA6;text-decoration:underline">url</span><br>abc</div><span style="color:#FFFF00;text-decoration:underline">url</span><br>abc</div></div><div style="text-align:center;"><span class="theme_title" style="padding:2px;height:2em;overflow:hidden">Fire</span><br><a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user#" class="hLink" onclick="delete_theme(&#39;fire&#39;);return false;" style="font-size:75%;visibility:hidden" id="delete_fire">delete</a></div></div><div id="stealth" class="theme_selector_div" style="font-family:arial" onclick="set_theme_obj(this.id);"><div style="background-color: #000000;color:#444444;padding: 3px;line-height:120%"><div style="background-color: #444444;color: #000000;padding:3px;font-size:10px"><div style="float:right;width:4em;background-color:#666666;font-size:9px;padding-left:1px;color:#444444"><span style="color:#000000;font-size:120%">A</span> &nbsp;<span style="color:#444444;text-decoration:underline">url</span><br>abc</div><span style="color:#CCCCCC;text-decoration:underline">url</span><br>abc</div></div><div style="text-align:center;"><span class="theme_title" style="padding:2px;height:2em;overflow:hidden">Stealth</span><br><a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user#" class="hLink" onclick="delete_theme(&#39;stealth&#39;);return false;" style="font-size:75%;visibility:hidden" id="delete_stealth">delete</a></div></div><div id="clean" class="theme_selector_div" style="font-family:Arial" onclick="set_theme_obj(this.id);"><div style="background-color: #FFF;color:#000;padding: 3px;line-height:120%"><div style="background-color: #D6D6D6;color: #666;padding:3px;font-size:10px"><div style="float:right;width:4em;background-color:#FFF;font-size:9px;padding-left:1px;color:#000"><span style="color:#666;font-size:120%">A</span> &nbsp;<span style="color:#03C;text-decoration:underline">url</span><br>abc</div><span style="color:#03C;text-decoration:underline">url</span><br>abc</div></div><div style="text-align:center;"><span class="theme_title" style="padding:2px;height:2em;overflow:hidden">Clean</span><br><a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user#" class="hLink" onclick="delete_theme(&#39;clean&#39;);return false;" style="font-size:75%;visibility:hidden" id="delete_clean">delete</a></div></div></div>
  <div class="cb">&nbsp;</div>
  <div style="background-color:#eee;margin:0.5em;-moz-border-radius:3px;border-radius:3px;zoom:1">
    <div style="float:right;padding:0.7em;position:relative">
          <button type="button" class=" yt-uix-button yt-uix-button-primary" onclick="save_themes();return false;"><span class="yt-uix-button-content">Save Changes</span></button>
or
        <a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user#" onclick="channel_edit_tab(&#39;close&#39;, true);return false">cancel</a>
    <div class="save_overlay" style="top:7px;padding: 5px;left:7px;width:85%;">
<center><img src="/YouTube - YujiTanaka19920818&#39;s Channel_files/icn_loading_animated-vfl24663.gif"></center>
</div>


    </div>
    <div style="float:left;padding:0.6em;font-size:14pt">
      "<input type="text" size="30" style="width:8em;display:none;border:0;font-size:14pt" id="theme_edit_name" onkeypress="update_theme_name(this, event);" value=""><span id="theme_display_name" style="display: inline;">Grey</span>"
    </div>
    <div id="theme_edit_link" style="float:left;padding:1em"><a class="hLink" href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user#" onclick="open_theme_editor();return false;">show advanced options</a></div>
    <div id="delete_link_text" style="display:none">delete</div>
    <div id="are_you_sure_you_want_to_delete_text" style="display:none">Are you sure you want to remove this?</div>
    <div id="theme_edit_link_hide" style="float:left;padding:1em;display:none"><a class="hLink" href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user#" onclick="hide_theme_editor();return false;">hide advanced options</a></div>
    <div id="theme_new_link" style="float:left;padding:1em"><a class="hLink" href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user#" onclick="create_new_theme();return false;">new theme</a></div>
    <div style="float:left;padding:1.25em 0 0 1.5em;">
      <div id="theme_progress_bar" style="display:none;background-color:#f8f8f8;border:1px solid #ccc;height:8px;font-size:1px;line-height:1px;width:80px"><div id="theme_progress_inner" style="background-color: #d0d0f8;width:0%;font-size:1px;line-height:1px;height:8px"></div></div>
    </div>
    <div class="cb"></div>
  </div>
  <div>
  <table id="theme_advanced_editor" style="display:none"><tbody><tr>
  <td width="460" align="left" valign="top" style="border-right:1px dotted #ddd;">
    <div style="padding: 0.5em 2em">
      <div style="font-size:130%">General</div>
        <div id="font_option" style="padding:2px;">
    <div style="float:left;padding:4px;">Font</div>
    <select name="font" id="font" style="float:right" onchange="edit_main_theme(&#39;font&#39;, this.value);">
        <option value="Times New Roman">Times New Roman</option>
        <option value="Arial">Arial</option>
        <option value="Verdana">Verdana</option>
        <option value="Georgia">Georgia</option>
        <option value="Courier New">Courier New</option>
    </select>
    <div class="settings_separator_light">&nbsp;</div>
  </div>

        <div id="background_color_option" style="padding:2px;">
    <div style="float:left;padding:4px;">Background color</div>
    <input type="text" style="float:right;width:50px;font-size:10px;margin-left:2px" id="background_color" name="background_color" value="#CCCCCC" onfocus="this.__old_value = this.value;" onblur="blur_color_picker(this);" onkeypress="return color_picker_keypress(this, event);">
    <div class="color_selector" onclick="popup_color_grid(&#39;background_color&#39;)">
      <div id="background_color-preview" style="width:13px;height:13px;background-color:#CCCCCC">&nbsp;</div>
    </div>
    <div class="settings_separator_light">&nbsp;</div>
  </div>

        <div id="wrapper_color_option" style="padding:2px;">
    <div style="float:left;padding:4px;">Wrapper color</div>
    <input type="text" style="float:right;width:50px;font-size:10px;margin-left:2px" id="wrapper_color" name="wrapper_color" value="#999999" onfocus="this.__old_value = this.value;" onblur="blur_color_picker(this);" onkeypress="return color_picker_keypress(this, event);">
    <div class="color_selector" onclick="popup_color_grid(&#39;wrapper_color&#39;)">
      <div id="wrapper_color-preview" style="width:13px;height:13px;background-color:#999999">&nbsp;</div>
    </div>
    <div class="settings_separator_light">&nbsp;</div>
  </div>

        <div id="wrapper_text_color_option" style="padding:2px;">
    <div style="float:left;padding:4px;">Wrapper text color</div>
    <input type="text" style="float:right;width:50px;font-size:10px;margin-left:2px" id="wrapper_text_color" name="wrapper_text_color" value="#000000" onfocus="this.__old_value = this.value;" onblur="blur_color_picker(this);" onkeypress="return color_picker_keypress(this, event);">
    <div class="color_selector" onclick="popup_color_grid(&#39;wrapper_text_color&#39;)">
      <div id="wrapper_text_color-preview" style="width:13px;height:13px;background-color:#000000">&nbsp;</div>
    </div>
    <div class="settings_separator_light">&nbsp;</div>
  </div>

        <div id="wrapper_link_color_option" style="padding:2px;">
    <div style="float:left;padding:4px;">Wrapper link color</div>
    <input type="text" style="float:right;width:50px;font-size:10px;margin-left:2px" id="wrapper_link_color" name="wrapper_link_color" value="#0000cc" onfocus="this.__old_value = this.value;" onblur="blur_color_picker(this);" onkeypress="return color_picker_keypress(this, event);">
    <div class="color_selector" onclick="popup_color_grid(&#39;wrapper_link_color&#39;)">
      <div id="wrapper_link_color-preview" style="width:13px;height:13px;background-color:#0000cc">&nbsp;</div>
    </div>
    <div class="settings_separator_light">&nbsp;</div>
  </div>

        <div id="wrapper_opacity_option" style="padding:2px;">
    <div style="float:left;padding:4px;">Wrapper transparency</div>
    <select name="wrapper_opacity" id="wrapper_opacity" style="float:right" onchange="edit_main_theme(&#39;wrapper_opacity&#39;, this.value);">
      <option value="255">None</option>
        <option value="229">10%</option>
        <option value="204">20%</option>
        <option value="178">30%</option>
        <option value="153">40%</option>
        <option value="127">50%</option>
        <option value="102">60%</option>
        <option value="76">70%</option>
        <option value="51">80%</option>
        <option value="25">90%</option>
        <option value="0">100%</option>
    </select>
    <div class="settings_separator_light">&nbsp;</div>
  </div>

        <script>
    window.background_image_counter = 1;
  </script>
  <div id="background_image_option" style="padding:2px;">
    <div style="float:left;padding:4px">Background Image:</div>
    <div id="background_upload_div" style="float:right">
      <input type="hidden" name="background_image" id="background_image" value="">
      <iframe src="/YouTube - YujiTanaka19920818&#39;s Channel_files/my_profile_theme_background_frame.html" id="background_frame" name="background_frame" frameborder="0" scrolling="no" width="245" height="23"></iframe><br>
      <div class="smallText" style="color:#666;padding:3px;width:240px">Upload an image that will display as a background on your channel (maximum 256K).</div>
    </div>
    <div class="settings_separator_light">&nbsp;</div>
  </div>
  <div id="background_repeat_option" style="padding:2px;">
    <div style="float:left;padding:4px">Repeat Background:</div>
    <div style="float:right">
      <input type="hidden" name="background_repeat" id="background_repeat" value="no-repeat">
      <input type="checkbox" name="background_repeat_check" id="background_repeat_check" onclick="var val = this.checked ? &#39;repeat&#39; : &#39;no-repeat&#39;;_gel(&#39;background_repeat&#39;).value = val;edit_main_theme(&#39;background_repeat&#39;, val);">
    </div>
    <div class="settings_separator_light">&nbsp;</div>
  </div>

    </div>
  </td>
  <td width="460" valign="top" id="css_options_parent" style="padding:0.5em 0 0.1em 2em">
    <div style="font-size:130%">Color Palettes</div>
    <select onchange="set_palette(this.value)" style="display:none">
      <option value="default" selected="">Default</option>
    </select>
    <div id="palette_colors" style="padding-left: 1em;">
        <div id="box_background_color_option" style="padding:2px;">
    <div style="float:left;padding:4px;">Background color</div>
    <input type="text" style="float:right;width:50px;font-size:10px;margin-left:2px" id="box_background_color" name="box_background_color" value="#eeeeff" onfocus="this.__old_value = this.value;" onblur="blur_color_picker(this);" onkeypress="return color_picker_keypress(this, event);">
    <div class="color_selector" onclick="popup_color_grid(&#39;box_background_color&#39;)">
      <div id="box_background_color-preview" style="width:13px;height:13px;background-color:#eeeeff">&nbsp;</div>
    </div>
    <div class="settings_separator_light">&nbsp;</div>
  </div>

        <div id="title_text_color_option" style="padding:2px;">
    <div style="float:left;padding:4px;">Title text color</div>
    <input type="text" style="float:right;width:50px;font-size:10px;margin-left:2px" id="title_text_color" name="title_text_color" value="#000000" onfocus="this.__old_value = this.value;" onblur="blur_color_picker(this);" onkeypress="return color_picker_keypress(this, event);">
    <div class="color_selector" onclick="popup_color_grid(&#39;title_text_color&#39;)">
      <div id="title_text_color-preview" style="width:13px;height:13px;background-color:#000000">&nbsp;</div>
    </div>
    <div class="settings_separator_light">&nbsp;</div>
  </div>

        <div id="link_color_option" style="padding:2px;">
    <div style="float:left;padding:4px;">Link color</div>
    <input type="text" style="float:right;width:50px;font-size:10px;margin-left:2px" id="link_color" name="link_color" value="#0000cc" onfocus="this.__old_value = this.value;" onblur="blur_color_picker(this);" onkeypress="return color_picker_keypress(this, event);">
    <div class="color_selector" onclick="popup_color_grid(&#39;link_color&#39;)">
      <div id="link_color-preview" style="width:13px;height:13px;background-color:#0000cc">&nbsp;</div>
    </div>
    <div class="settings_separator_light">&nbsp;</div>
  </div>

        <div id="body_text_color_option" style="padding:2px;">
    <div style="float:left;padding:4px;">Body text color</div>
    <input type="text" style="float:right;width:50px;font-size:10px;margin-left:2px" id="body_text_color" name="body_text_color" value="#333333" onfocus="this.__old_value = this.value;" onblur="blur_color_picker(this);" onkeypress="return color_picker_keypress(this, event);">
    <div class="color_selector" onclick="popup_color_grid(&#39;body_text_color&#39;)">
      <div id="body_text_color-preview" style="width:13px;height:13px;background-color:#333333">&nbsp;</div>
    </div>
    <div class="settings_separator_light">&nbsp;</div>
  </div>

        <div id="box_opacity_option" style="padding:2px;">
    <div style="float:left;padding:4px;">Transparency</div>
    <select name="box_opacity" id="box_opacity" style="float:right" onchange="edit_main_theme(&#39;box_opacity&#39;, this.value);">
      <option value="255">None</option>
        <option value="229">10%</option>
        <option value="204">20%</option>
        <option value="178">30%</option>
        <option value="153">40%</option>
        <option value="127">50%</option>
        <option value="102">60%</option>
        <option value="76">70%</option>
        <option value="51">80%</option>
        <option value="25">90%</option>
        <option value="0">100%</option>
    </select>
    <div class="settings_separator_light">&nbsp;</div>
  </div>

    </div>
  </td>
  </tr></tbody></table></div>
    <div id="popup_color_grid" style="display:none">
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#000000;cursor:pointer" onclick="select_popup_color(&#39;#000000&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#444444;cursor:pointer" onclick="select_popup_color(&#39;#444444&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#666666;cursor:pointer" onclick="select_popup_color(&#39;#666666&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#999999;cursor:pointer" onclick="select_popup_color(&#39;#999999&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#CCCCCC;cursor:pointer" onclick="select_popup_color(&#39;#CCCCCC&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#EEEEEE;cursor:pointer" onclick="select_popup_color(&#39;#EEEEEE&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#F3F3F3;cursor:pointer" onclick="select_popup_color(&#39;#F3F3F3&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#FFFFFF;cursor:pointer" onclick="select_popup_color(&#39;#FFFFFF&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#FF0000;cursor:pointer" onclick="select_popup_color(&#39;#FF0000&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#FF9900;cursor:pointer" onclick="select_popup_color(&#39;#FF9900&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#FFFF00;cursor:pointer" onclick="select_popup_color(&#39;#FFFF00&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#00FF00;cursor:pointer" onclick="select_popup_color(&#39;#00FF00&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#00FFFF;cursor:pointer" onclick="select_popup_color(&#39;#00FFFF&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#0000FF;cursor:pointer" onclick="select_popup_color(&#39;#0000FF&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#9900FF;cursor:pointer" onclick="select_popup_color(&#39;#9900FF&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#FF00FF;cursor:pointer" onclick="select_popup_color(&#39;#FF00FF&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#FFCCCC;cursor:pointer" onclick="select_popup_color(&#39;#FFCCCC&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#FCE5CD;cursor:pointer" onclick="select_popup_color(&#39;#FCE5CD&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#FFF2CC;cursor:pointer" onclick="select_popup_color(&#39;#FFF2CC&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#D9EAD3;cursor:pointer" onclick="select_popup_color(&#39;#D9EAD3&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#D0E0E3;cursor:pointer" onclick="select_popup_color(&#39;#D0E0E3&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#CFE2F3;cursor:pointer" onclick="select_popup_color(&#39;#CFE2F3&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#D9D2E9;cursor:pointer" onclick="select_popup_color(&#39;#D9D2E9&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#EAD1DC;cursor:pointer" onclick="select_popup_color(&#39;#EAD1DC&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#EA9999;cursor:pointer" onclick="select_popup_color(&#39;#EA9999&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#F9CB9C;cursor:pointer" onclick="select_popup_color(&#39;#F9CB9C&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#FFE599;cursor:pointer" onclick="select_popup_color(&#39;#FFE599&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#B6D7A8;cursor:pointer" onclick="select_popup_color(&#39;#B6D7A8&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#A2C4C9;cursor:pointer" onclick="select_popup_color(&#39;#A2C4C9&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#9FC5E8;cursor:pointer" onclick="select_popup_color(&#39;#9FC5E8&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#B4A7D6;cursor:pointer" onclick="select_popup_color(&#39;#B4A7D6&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#D5A6BD;cursor:pointer" onclick="select_popup_color(&#39;#D5A6BD&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#E06666;cursor:pointer" onclick="select_popup_color(&#39;#E06666&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#F6B26B;cursor:pointer" onclick="select_popup_color(&#39;#F6B26B&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#FFD966;cursor:pointer" onclick="select_popup_color(&#39;#FFD966&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#93C47D;cursor:pointer" onclick="select_popup_color(&#39;#93C47D&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#76A5AF;cursor:pointer" onclick="select_popup_color(&#39;#76A5AF&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#6FA8DC;cursor:pointer" onclick="select_popup_color(&#39;#6FA8DC&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#8E7CC3;cursor:pointer" onclick="select_popup_color(&#39;#8E7CC3&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#C27BA0;cursor:pointer" onclick="select_popup_color(&#39;#C27BA0&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#CC0000;cursor:pointer" onclick="select_popup_color(&#39;#CC0000&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#E69138;cursor:pointer" onclick="select_popup_color(&#39;#E69138&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#F1C232;cursor:pointer" onclick="select_popup_color(&#39;#F1C232&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#6AA84F;cursor:pointer" onclick="select_popup_color(&#39;#6AA84F&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#45818E;cursor:pointer" onclick="select_popup_color(&#39;#45818E&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#3D85C6;cursor:pointer" onclick="select_popup_color(&#39;#3D85C6&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#674EA7;cursor:pointer" onclick="select_popup_color(&#39;#674EA7&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#A64D79;cursor:pointer" onclick="select_popup_color(&#39;#A64D79&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#990000;cursor:pointer" onclick="select_popup_color(&#39;#990000&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#B45F06;cursor:pointer" onclick="select_popup_color(&#39;#B45F06&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#BF9000;cursor:pointer" onclick="select_popup_color(&#39;#BF9000&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#38761D;cursor:pointer" onclick="select_popup_color(&#39;#38761D&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#134F5C;cursor:pointer" onclick="select_popup_color(&#39;#134F5C&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#0B5394;cursor:pointer" onclick="select_popup_color(&#39;#0B5394&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#351C75;cursor:pointer" onclick="select_popup_color(&#39;#351C75&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#741B47;cursor:pointer" onclick="select_popup_color(&#39;#741B47&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#660000;cursor:pointer" onclick="select_popup_color(&#39;#660000&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#783F04;cursor:pointer" onclick="select_popup_color(&#39;#783F04&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#7F6000;cursor:pointer" onclick="select_popup_color(&#39;#7F6000&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#274E13;cursor:pointer" onclick="select_popup_color(&#39;#274E13&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#0C343D;cursor:pointer" onclick="select_popup_color(&#39;#0C343D&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#073763;cursor:pointer" onclick="select_popup_color(&#39;#073763&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#20124D;cursor:pointer" onclick="select_popup_color(&#39;#20124D&#39;);">&nbsp;</div>
      <div style="float:left;margin:2px;width:12px;height:12px;background-color:#4C1130;cursor:pointer" onclick="select_popup_color(&#39;#4C1130&#39;);">&nbsp;</div>
    <div class="cb">&nbsp;</div>
  </div>

    </div>


          <div id="tab_contents_layout" style="display:none;" class="channel_tab_content">
    <div id="layout-messages" style="display:none"></div>

  <form name="channel_layout" id="channel_layout" onsubmit="return false">
      <div style="font-size:110%;padding: 5px;float:left;width:300px">
        <label>
        <input name="box_status" value="user_comments" type="checkbox" checked="" onclick="add_or_remove_box(this)">
        Comments &nbsp;&nbsp;
        </label>
      </div>
      <div style="font-size:110%;padding: 5px;float:left;width:300px">
        <label>
        <input name="box_status" value="user_friends" type="checkbox" checked="" onclick="add_or_remove_box(this)">
        Friends &nbsp;&nbsp;
        </label>
      </div>
      <div style="font-size:110%;padding: 5px;float:left;width:300px">
        <label>
        <input name="box_status" value="user_groups" type="checkbox" checked="" onclick="add_or_remove_box(this)">
        Groups &nbsp;&nbsp;
        </label>
      </div>
      <div style="font-size:110%;padding: 5px;float:left;width:300px">
        <label>
        <input name="box_status" value="moderator" type="checkbox" onclick="add_or_remove_box(this)">
        Moderator &nbsp;&nbsp;
        </label>
      </div>
      <div style="font-size:110%;padding: 5px;float:left;width:300px">
        <label>
        <input name="box_status" value="user_hubber_links" type="checkbox" onclick="add_or_remove_box(this)">
        Other Channels &nbsp;&nbsp;
        </label>
      </div>
      <div style="font-size:110%;padding: 5px;float:left;width:300px">
        <label>
        <input name="box_status" value="user_recent_activity" type="checkbox" checked="" onclick="add_or_remove_box(this)">
        Recent Activity &nbsp;&nbsp;
        </label>
      </div>
      <div style="font-size:110%;padding: 5px;float:left;width:300px">
        <label>
        <input name="box_status" value="user_subscribers" type="checkbox" checked="" onclick="add_or_remove_box(this)">
        Subscribers &nbsp;&nbsp;
        </label>
      </div>
      <div style="font-size:110%;padding: 5px;float:left;width:300px">
        <label>
        <input name="box_status" value="user_subscriptions" type="checkbox" checked="" onclick="add_or_remove_box(this)">
        Subscriptions &nbsp;&nbsp;
        </label>
      </div>
    <div class="cb"></div>
    <div id="box_removed_message" style="padding:0.5em;margin:0.25em 5em;background-color:#FFFFEE;display:none">
Even though you removed this information from your channel, it may still be available to others in your Recent Activity feed. To manage your privacy settings, please visit your <a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/account#sharing/activity">privacy page</a>.
    </div>
    <div class="cb">&nbsp;</div>
    <div class="settings_separator_save">&nbsp;</div>
    <div class="channel_settings_save">
          <button type="button" class=" yt-uix-button yt-uix-button-primary" onclick="save_boxes();return false;"><span class="yt-uix-button-content">Save Changes</span></button>
or
        <a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user#" onclick="channel_edit_tab(&#39;close&#39;, true);return false">cancel</a>
    <div class="save_overlay">
<center><img src="/YouTube - YujiTanaka19920818&#39;s Channel_files/icn_loading_animated-vfl24663.gif"></center>
</div>


    </div>
    <div class="cb">&nbsp;</div>
  </form>
    </div>


          <div id="tab_contents_playnav" style="display:none;" class="channel_tab_content">
    <div id="playnav-messages" style="display:none"></div>


  <form name="edit_form_user_playlist_navigator" id="edit_form_user_playlist_navigator">
  <div id="playnav_settings">
    <div id="display_settings">
      <div>Which content would you like to display?</div>
      <div style="width:92%;padding:0.5em;border:1px solid #ccc;overflow:auto;background-color:#fff">
        <label>
          <input id="display_uploads" type="checkbox" onclick="update_featured(this);" name="display_lists" value="uploads" checked="">My Uploaded Videos        </label><br>
        <label>
          <input id="display_favorites" type="checkbox" onclick="update_featured(this);" name="display_lists" value="favorites" checked="">My Favorites        </label><br>
        <label>
          <input id="display_playlists" type="checkbox" onclick="update_featured(this);" name="display_lists" value="playlists">Playlists        </label>
      </div>
      <div style="padding:0.25em" id="display_all_container">
        <label>
          <input id="display_all" type="checkbox" onclick="update_featured(this);" name="display_lists" value="all" checked="">Also show "All" view        </label>
      </div>
    </div>

    <div id="featured_content">
      <div>
        Featured layout<br>
        <select name="default_view" class="playnav-edit-field">
          <option value="play" id="view_play" selected="">Player View</option>
          <option value="grid" id="view_grid">Grid View</option>
        </select>
      </div>
      <div style="padding-top: 1em">
Featured content set<br>
        <select name="default_set" class="playnav-edit-field">
          <option value="all" id="feature_all" selected="">All my stuff</option>
          <option value="uploads" id="feature_uploads">My Uploaded Videos</option>
          <option value="favorites" id="feature_favorites">My Favorites</option>
          <option value="shows" id="feature_shows" style="display:none">My Shows</option>
          <optgroup label="Playlists" id="feature_playlists" style="display:none">
            <option value="playlists" style="display:none" disabled="">All Playlists/option&gt;
          </option></optgroup>
        </select>
      </div>
      <div style="padding-top: 1em">
Featured video<br>
        <div id="featured_vid_select_box">
          <select name="featured_video_id" style="width:200px" onchange="if (this.value==&#39;OTHER111111&#39;) {_showdiv(&#39;featured_video_url&#39;)} else {_hidediv(&#39;featured_video_url&#39;)}">
            <option value="00000000000" selected="">Use the most recent video from my featured set</option>
              <option value="IP6ddOHk5gQ">【最高音賍】 Usa (うさ) ／ 白雪 ～sirayuki～ 【WhiteFlame】</option>
              <option value="Mv9qOOhvFBg">【名探偵コナン】高校生工藤新一【MAD】</option>
              <option value="s_DLy58g9ss">【名探偵コナン】真実ノムコウ【トラウMAD】</option>
              <option value="2J3aMUkCcUU">初音ミクがオリジナル曲を歌ってくれたよ「初めての恋が終わる時」</option>
              <option value="WvRNY9lSgCU">【初音ミク】 ハッピネス happiness ＠ うさ</option>
              <option value="EnXIDFeJO2k">ＢＬＥＡＣＨ　ＯＰ＋恋はスリルショックサスペンス</option>
              <option value="ah3BMRh372E">【東方アレンジ】紅音の瞳 〜Sound of Red Eye〜</option>
              <option value="ivE8_u5H7ME">マイケル　ジャクソン/ スリラー　歌詞付/THRILLER , Michael Ja...</option>
              <option value="7ZwbapWVeDA">東方vocal 11 『 恋色マスタースパーク＜SlashSpeed＞ 』</option>
              <option value="BhQpuCyO0tk">東方vocal 08 『 7 days a week 』</option>
              <option value="G0_U22YX21A">東方vocal 07 『 Phantasm Brigade 』</option>
              <option value="UlUtncZolxI">東方vocal 04 『 Bad Apple!! feat. nomico 』</option>
              <option value="qSdpGVHrh4M">東方vocal 03  『 No Life Queen 』</option>
              <option value="Ax9VQ1rPy_c">東方vocal 02 『 sweet little sister 』</option>
              <option value="lTrsM6_4_CM">東方vocal 01 『 Sweets Time 』</option>
              <option value="I_LecOgqpuk">東方vocal 89 『 Crazy Full Moon 』</option>
              <option value="ZBVyOC3DXX8">Conan x Ai Detective Conan </option>
              <option value="KzBmlc2E8Lc">played with violin　"Shangri-La" -with pian...</option>
              <option value="S61k19kdG3s">played with violin　" First Love"　 [Hikaru ...</option>
              <option value="WiNUn_2Olnk">ピアノ演奏　～　砂の器　～　『宿命　第1楽章』</option>
              <option value="7BFpeUNUOhg">横浜夜景～ベートーベン/ピアノソナタ「悲愴」第2楽章</option>
              <option value="PEwPqrucPTw">夏影piano</option>
              <option value="FpwIdPG-4HE">鳥の詩 guitar version</option>
              <option value="OF-EeipcRBM">primenotes - 『ピアノソナタ第2番 第一楽章 -鳥の詩-』 (Visua...</option>
              <option value="-2zv8eRwXwo">「楔」　奥華子</option>
            <option value="OTHER111111">Other</option>
          </select>
        </div>
        <input type="text" id="featured_video_url" name="featured_video_url" value="Copy and paste a video URL here" style="color:#999;margin-top:6px" onfocus="playnav.clearFirstTime(this)" class="playnav-edit-field hid">
      </div>
        <div style="padding-top:0.6em">
          <label><input type="checkbox" name="autoplay" value="True">Autoplay featured video
          </label>
        </div>
    </div>

    <div id="arrange_playlists" style="display:none">
      <div>Which of your playlists would you like to display?</div>
      <div style="width:90%;height:80px;padding:0.5em;border:1px solid #ccc;overflow:auto;background-color:#fff">
      </div>
    </div>
    <div class="cb">&nbsp;</div>
    <div class="settings_separator_save">&nbsp;</div>
    <div class="channel_settings_save">
          <button type="button" class=" yt-uix-button yt-uix-button-primary" onclick="save_playnav_settings();return false;"><span class="yt-uix-button-content">Save Changes</span></button>
or
        <a href="https://web.archive.org/web/20100818174042/http://www.youtube.com/user#" onclick="channel_edit_tab(&#39;close&#39;, true);return false">cancel</a>
    <div class="save_overlay">
<center><img src="/YouTube - YujiTanaka19920818&#39;s Channel_files/icn_loading_animated-vfl24663.gif"></center>
</div>


    </div>
    <div class="cb">&nbsp;</div>
  </div>
  </form>

    </div>


    </div>
    <div class="edit_controls_bottom_border">&nbsp;</div>
  </div>
  <script>
    (function() {
      var el = _gel('edit_controls');
      var duration = 2;
      animateProperty(el, el.style,
        'backgroundColor', '#cee3ff', '#efefef', 1, duration,
        'rgb6', 'linear');
      })();
  </script>



           