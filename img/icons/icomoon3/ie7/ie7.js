/* To avoid CSS expressions while still supporting IE 7 and IE 6, use this script */
/* The script tag referring to this file must be placed before the ending body tag. */

/* Use conditional comments in order to target IE 7 and older:
	<!--[if lt IE 8]><!-->
	<script src="ie7/ie7.js"></script>
	<!--<![endif]-->
*/

(function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'icomoon\'">' + entity + '</span>' + html;
	}
	var icons = {
		'icon-articles': '&#xe600;',
		'icon-author': '&#xe601;',
		'icon-book': '&#xe602;',
		'icon-coaching': '&#xe603;',
		'icon-consulting': '&#xe604;',
		'icon-culture': '&#xe605;',
		'icon-development': '&#xe606;',
		'icon-employee': '&#xe607;',
		'icon-empower': '&#xe608;',
		'icon-engagement': '&#xe609;',
		'icon-events': '&#xe60a;',
		'icon-facilitation': '&#xe60b;',
		'icon-hammer': '&#xe60c;',
		'icon-impact': '&#xe60d;',
		'icon-keyhole': '&#xe60e;',
		'icon-media': '&#xe60f;',
		'icon-programs': '&#xe610;',
		'icon-resources': '&#xe611;',
		'icon-sheild': '&#xe612;',
		'icon-speaking': '&#xe613;',
		'icon-training': '&#xe614;',
		'icon-woman': '&#xe615;',
		'icon-workshop': '&#xe616;',
		'0': 0
		},
		els = document.getElementsByTagName('*'),
		i, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
}());
