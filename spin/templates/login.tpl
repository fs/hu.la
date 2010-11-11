<{include file="header.tpl"}>

	<div class="form">
		<form method="post">
                                <input name="action" type="hidden" value="auth">
                                <{if $mess}><label><{$mess}></label><br /><br /><{/if}>
				<label>Password</label>
				<input type="password" name="password" id="url" />
				<button type="submit" title="Login"><img src="images/btn_ok.gif" alt="Login" /></button>
		</form>		
	</div>

<{include file="footer.tpl"}>
