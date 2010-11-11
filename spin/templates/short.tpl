<{include file="header.tpl"}>

<script type="text/javascript" src="ZeroClipboard.js"></script>

<div class="form">
    <div class="short_url">

      <{if $status  == 200}>
            <label> Your short Link: <input type="text" id="url" value="<{$short_url}>" /> </label>
            <img src="images/btn_copy.gif" alt="Copy" id="copy_button" />&nbsp;
            <a href="<{$short_url}>+" target="_blank"><img src="images/btn_stats.gif" alt="Get real-time click data - Analytics for hu.la links created anywhere" /></a>
    <{else}>
        <label>Something wrong...</label>
    <{/if}>

    <{if $ad}><p><{$ad}></p><{/if}>

    </div>
</div>

<script language="Javascript">
    var clip = new ZeroClipboard.Client();
    clip.setHandCursor(true);
    clip.setText( '<{$short_url}>' );
    clip.glue( 'copy_button' );
</script>

<{include file="footer.tpl"}>