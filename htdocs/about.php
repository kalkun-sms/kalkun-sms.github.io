<?php include_once('header.php'); ?>

<script languange="javascript" src="media/js/jquery-1.3.2.min.js"></script>
<script languange="javascript">
$(document).ready(function(){
	$('a#about').click(function() {
		$('div#section-1').show();
		$('div#section-2').hide();
		$('div#section-3').hide();
		$('div#section-4').hide();
		$('div#section-5').hide();
	});

	$('a#features').click(function() {
		$('div#section-1').hide();
		$('div#section-2').show();
		$('div#section-3').hide();
		$('div#section-4').hide();
		$('div#section-5').hide();
	});

	$('a#plugins').click(function() {
		$('div#section-1').hide();
		$('div#section-2').hide();
		$('div#section-3').show();
		$('div#section-4').hide();
		$('div#section-5').hide();
	});

	$('a#requirement').click(function() {
		$('div#section-1').hide();
		$('div#section-2').hide();
		$('div#section-3').hide();
		$('div#section-4').show();
		$('div#section-5').hide();
	});

	$('a#contact').click(function() {
		$('div#section-1').hide();
		$('div#section-2').hide();
		$('div#section-3').hide();
		$('div#section-4').hide();
		$('div#section-5').show();
	});

});
</script>

<div id="wrap">
<div id="shadow"></div>
<div id="content">
<div id="main">

<div id="section-1">
<h3>What is Kalkun?</h3>
<p>Kalkun is an open source web-based SMS (<i>Short Message Service</i>) manager.</p>
<p>It uses <a href="https://wammu.eu/smsd/">Gammu SMSD</a> as SMS gateway engine to deliver and retrieve messages from your phone/modem.
Kalkun and gammu are two separate software that work together. Once Gammu is set-up on your system you can install Kalkun beside it.</p>
<p>Kalkun architecture:</p>
<div id="box_container"><span class="box">Kalkun</span>&nbsp;&#8660;&nbsp;<span class="box">DB Engine</span>&nbsp;&#8660;&nbsp;<span class="box">Gammu-SMSD</span>&nbsp;&#8660;&nbsp;<span class="box">Phone/Modem</span></div><br />

<h3>What are the advantages?</h3>
<p>Since it is web-based, you just need to put this software on one computer, the <i>server</i>.
Any other computer on your network (or even on the internet, if you need so), can access it with a web browser to use it. Another advantage is you don't need to worry about phone memory capacity, because your messages are stored in the database.</p>

<h3>License</h3>
<p>Kalkun is released under <a href="https://www.gnu.org/licenses/gpl-3.0.html">GNU General Public License v3.0 or later</a>.</p>
</div>

<div id="section-2" class="hidden">
<h3>Features</h3>
<ul>
<li>Support for MySQL, PostgreSQL and SQLite3</li>
<li>Multi user &amp; Multi modem support</li>
<li>Usual folders: inbox, outbox, sentitems, spam, trash &amp; personal folders.</li>
<li>Conversation view: SMS are grouped by phone number</li>
<li>Spam filter based on b8</li>
<li>Phonebook, contacts, groups</li>
<li>Various "compose SMS" options</li>
<li>Automatic message signature</li>
<li>Filter incoming messages</li>
<li>Keyboard shortcuts</li>
<li>API access</li>
<li>Localization</li>
</ul>
<p>See <a href="https://github.com/tenzap/Kalkun/wiki#features">features in detail</a> on the wiki.</p>

<h3>More...</h3>
<p>Please read <a href="https://github.com/kalkun-sms/Kalkun/wiki/ChangeLog">changelog</a> or <a href="https://github.com/kalkun-sms/Kalkun/wiki/Release-notes">release notes</a> for details.<br />
Any ideas to improve this features? feel free to contact us.</p>
</div>

<div id="section-3" class="hidden">
<h3>Plugins</h3>
<ul>
<li>Blacklist number: block messages from unwanted numbers</li>
<li>External script: run a personal script on incoming SMS</li>
<li>JSONRPC Api</li>
<li>Phonebook LDAP</li>
<li>Phonebook lookup</li>
<li>REST Api</li>
<li>Server alert: monitor a server/service (web server, mail server) and send an alert when it is down.</li>
<li>Simple autoreply: reply to incoming SMS automatically</li>
<li>SMS credit</li>
<li>SMS member: create an SMS-based community</li>
<li>SMS to e-mail: forward incoming SMS to e-mail</li>
<li>SMS to Twitter</li>
<li>SMS to WordPress: publish incoming SMS to Wordpress</li>
<li>SMS to XMPP</li>
<li>SOAP Api</li>
<li>STOP manager: manage incoming SMS containing word 'STOP'</li>
<li>XMLRPC Api</li>
<li>How to write a Plugin</li>

<li>Blacklist Number, block message from specific number</li>
<li>Server Alert, alert you whenever your service (eq: Web server, Mail server) is down</li>
<li>SMS Bomber, send bomb/spam message</li>
</ul>
<p>See <a href="https://github.com/tenzap/Kalkun/wiki#plugins">plugins in detail</a> on the wiki.</p>
</div>

<div id="section-4" class="hidden">
<h3>System requirements</h3>
<p><b>Server side</b> (the computer where Kalkun is placed/installed):</p>
<ul>
<li>Web server: Apache 2.x or Lighttpd is recommended</li>
<li>PHP >= 5.6 with some extensions</li>
<li>A database engine (one of MySQL, PostgreSQL or SQLite3)</li>
<li>Gammu-SMSD, part of Gammu family</li>
</ul>

<p><b>Client side</b>: you need a modern and supported web browser with javascript/AJAX and cookies enabled.
</p>
<p>See the <a href="https://github.com/tenzap/Kalkun/wiki/Requirements">detailed requirements</a> on the wiki.</p>
</div>

<div id="section-5" class="hidden">
<h3>Contact</h3>
<p>
The best way to contact us is through the <a href="https://github.com/kalkun-sms/Kalkun/issues">issues page</a> at github. In case you need to contact the original authors personally please use the following contact:</p>
<ul>
<li>Azhari Harahap: azhari&lt;at&gt;harahap.us</li>
<li>Kinshuk Bairagi: kinshuk1989&lt;at&gt;gmail.com</li>
</ul>
</div>

</div>

	<div id="sidebar">
		<div id="about_nav">
		<ul>
		<li><a id="about" href="#about">About Kalkun</a></li>
		<li><a id="features" href="#features">Features</a></li>
		<li><a id="plugins" href="#plugins">Plugins</a></li>
		<li><a id="requirement" href="#requirement">System requirements</a></li>
		<li><a id="contact" href="#contact">Contact</a></li>
		</ul>
		</div>
	</div>
	<div style="clear: both">&nbsp;</div>
</div>
</div>

<?php include_once('footer.php'); ?>
