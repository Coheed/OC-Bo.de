<script type="text/javascript">
/* <![CDATA[ */
<?php if ($this->addTrackEvent): // add JS code for event tracking (also needed for external link tracking) ?>
	function gaTrackEvent(c,a){try{_gat._getTracker("<?php echo $this->id; ?>")._trackEvent(c,a);} catch(e) {}}
<?php endif; ?>
<?php if ($this->addTrackEvent): // add JS code for external tracking ?>
	function gaTrackLink(link, category, action, newwindow){gaTrackEvent(category, action); if(newwindow){setTimeout('window.open(\"' + link.href + '\");', 100);}else{setTimeout('document.location=\"' + link.href + '\"',100);}}
<?php endif; ?>
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', '<?php echo $this->id; ?>']);
<?php if ($this->anonymizeIp): // add JS code for anonymize the IP Address from own settings or from global settings ?>
	_gaq.push(['_gat._anonymizeIp']);
<?php endif; ?>
<?php if ($this->setDomainName): // add JS code for domain name ?>
	_gaq.push(['_setDomainName', '<?php echo $this->setDomainName; ?>']);
<?php endif; ?>
<?php if ($this->bounceseconds): // add JS to "define" bounce rate by sending an event (hack, see http://padicode.com/blog/analytics/the-real-bounce-rate/) ?>
	setTimeout('_gaq.push([\'_trackEvent\', \'NoBounce\', \'Over <?php echo $this->bounceseconds; ?> seconds\'])', <?php echo $this->bounceseconds * 1000; ?>);
<?php endif; ?>
	_gaq.push(['_trackPageview']);
	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
<?php if ($this->addlinktracking): // add JS code to track all external links ?>
	window.addEvent('domready',(function(){if(typeof gatTrackCategory=='undefined')var gatTrackCategory='<?php echo $this->titlelinktracking; ?>';$$('a').each(function(e){	var h=e.getAttribute('href');
if((h!=null) && h.test(/http/i) && ((typeof e.onclick=='undefined') || (!(e.onclick+'').test(/gaTrack/i)))){var oc=e.getAttribute('onclick');if(oc!=null && String(oc).test(/window.open/i))e.setAttribute('target', '_blank');if(e.onclick != '') {e.setAttribute('onclick', 'gaTrackEvent(\'<?php echo $this->titlelinktracking; ?>\'	, \'' + h + '\');' + e.getAttribute('onclick'));}else{e.onclick=null; e.setAttribute('onclick', '');e.addEvent('click',function(){
gaTrackEvent(gatTrackCategory, h);
	(function(){if(e.target=='_blank'){window.open(h)}else{document.location=h;}}).delay(100);return false;});}}});}));
<?php endif; ?>
/* ]]> */
</script>