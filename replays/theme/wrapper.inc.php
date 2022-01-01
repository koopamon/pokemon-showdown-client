<?php

if ((substr($_SERVER['REMOTE_ADDR'],0,11) === '69.164.163.') ||
		(substr(@$_SERVER['HTTP_X_FORWARDED_FOR'],0,11) === '69.164.163.')) {
	die('website disabled');
}

/********************************************************************
 * Header
 ********************************************************************/

function ThemeHeaderTemplate() {
	global $panels;
?>
<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title><?php if ($panels->pagetitle) echo htmlspecialchars($panels->pagetitle).' - '; ?>Pok&eacute;mon Showdown</title>

<?php if ($panels->pagedescription) { ?>
	<meta name="description" content="<?php echo htmlspecialchars($panels->pagedescription); ?>" />
<?php } ?>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.1252970180819395" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.0897861742585977" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.6844069482069515" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9553151490520506" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8497651229569902" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7018562102047246" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26211653-1']);
		_gaq.push(['_setDomainName', 'pokemonshowdown.com']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head><body>

	<div class="pfx-topbar">
		<div class="header">
			<ul class="nav">
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.004759480742363653"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.4940185309034548" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5292787515771025">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.892228497833194">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8046176056023109">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.0677677657428426">Forum</a></li>
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="http://play.pokemonshowdown.com/">Play</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
<?php
}

/********************************************************************
 * Footer
 ********************************************************************/

function ThemeScriptsTemplate() {
?>
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5130247324553476"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.012811132378280243"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.1845177035698724"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5502692016989175"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.1211071893963882"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7176590135320111"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5232181759958301"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.04126003051576799"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.07962687081373088"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.27829114803978805"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.4758167465105487"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5117597272392727"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.4236074195877908"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8662472007294011"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8457621825808661"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7104388105779922"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9675997024899345"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.012655288604135562"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5267867382262428"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
