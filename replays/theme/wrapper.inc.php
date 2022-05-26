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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.18117496541248235" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6077551865547912" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.16975755920022384" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7161154782877706" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.599001171762275" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.06572034901256063" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8836449886400883"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.3968863000621694" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4220936203542598">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6260207490247855">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7630273174019249">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.08769827587174528">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6830230336569554"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.034649692693029976"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.07975026333319546"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.12093246088112397"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.16463686559709179"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6047257995808157"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7476631475372622"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.29197340416296935"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.2862106247875804"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.707505430511099"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.37861831333308626"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.18348765142459378"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.973195638142589"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.43995710065654237"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.40119837932972136"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7576917223304218"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.47667036824663245"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9329991737146297"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7082144178345473"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
