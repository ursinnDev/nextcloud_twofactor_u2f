<?php

script('twofactor_u2f', 'vendor/u2f-api');
script('twofactor_u2f', 'challenge');

?>

<input id="u2f-auth" type="hidden" value="<?php p(json_encode($_['reqs'])); ?>">

<form method="POST" id="u2f-form">
	<input id="challenge" type="hidden" name="challenge">
</form>

<fieldset class="warning">
	<p><?php p($l->t('Please plug in your U2F device and press the device button to authorize.')) ?></p>
</fieldset>
<p><?php p($l->t('Note: Chome is the only browser that supports U2F devices. You need to install the "U2F Support Add-on" on Firefox to use U2F.')) ?></p>