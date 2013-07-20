<?php
	defined('_JEXEC') or die;
	
	$widgetid = $params->get('widgetid');
	$twittername = $params->get('twittername');
	
	if($widgetid == null || $twittername == null) {
		$html = '<p>Please set the settings of this module</p>';
	} else {
		$html = '<a class="twitter-timeline" href="https://twitter.com/' . $twittername . '" data-widget-id="' . $widgetid . '">Tweets by @' . $twittername . '</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?\'http\':\'https\';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>';
	}
	echo $html;
	
	$layout = $params->get('layout', 'default');
	require JModuleHelper::getLayoutPath('mod_twittershow', $layout);

?>