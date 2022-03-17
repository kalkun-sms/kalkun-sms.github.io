<?php include_once('header.php'); ?>
<?php
if ($lines = @file('CURRENT'))
{
	$version = $lines[0];
	$codename = $lines[1];
}
$file_tar_gz = "kalkun_".$version.".tar.gz";
$file_tar_bz2 = "kalkun_".$version.".tar.bz2";
$file_zip = "kalkun_".$version.".zip";
$url_path = "http://sourceforge.net/projects/kalkun/files/kalkun/".$version."/";
$url_path_tar_gz = $url_path.$file_tar_gz."/download";
$url_path_tar_bz2 = $url_path.$file_tar_bz2."/download";
$url_path_tar_zip = $url_path.$file_zip."/download";
$file_path = "/home/frs/project/k/ka/kalkun/kalkun/".$version."/";
$size_tar_gz = /*filesize($file_path.$file_tar_gz);*/ '922.9KB';
$size_tar_bz2 = /*filesize($file_path.$file_tar_bz2);*/ '852.3KB';
$size_tar_zip = /*filesize($file_path.$file_zip);*/ '1.2MB';
?>
<div id="wrap">
	<div id="shadow"></div>
	<div id="content">
		<div style="display:table">
		<div style="display:table-cell">
			<h3 >Manage your SMS easily</h3>
			<p>Kalkun is open source web-based SMS (<i>Short Message Service</i>) manager.</p>
			<p>It uses <a href="https://wammu.eu/smsd/">Gammu SMSD</a> as SMS gateway engine to deliver and retrieve messages from your phone/modem.</p>
			<p><a href="about.php">Learn more about Kalkun...</a></p>
		</div>
		<div style="display:table-cell; vertical-align: middle;">
			<div id="dl-button">
				Download Kalkun<br />
				<a href="https://github.com/kalkun-sms/Kalkun/releases/latest"><small>latest release</small></a> |
				<a href="https://github.com/kalkun-sms/Kalkun/archive/refs/heads/devel.tar.gz"><small>devel snapshot</small></a>
			</div>
			<div style="text-align:center;"><a href="https://github.com/kalkun-sms/Kalkun/wiki/Changelog">Changelog</a> | <a href="https://github.com/kalkun-sms/Kalkun/wiki/Release-notes">Release notes</a></div>
			<div>&nbsp;</div>
		</div>
		</div>

		<div id="main">
		<a href="screenshots.php" title="More Screenshots"><img id="screen" src="media/images/2022-03/02-dashboard.png" />
		</a>
		<h3>Testimonial</h3>
			<div id="testimonial" style="padding: 3px;"><i>&#34;I think Kalkun is great because it is easy to configure, easy to customize, easy to use, and any target hardware used.&#34;</i>&nbsp;(<b>Simon Nandor</b> - <a href="https://www.simonszoft.hu/">Software Engineer</a>).
			</div>

		<div id="news" style="display: none;">
		<h3>News</h3>
		</div>

		</div>

		<div id="sidebar">

			<div>
			<strong>Features</strong>
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
			<a href="about.php">Complete features list...</a>
			</div>

			<div>&nbsp;</div>
			<div>
			<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FKalkun-136612446404796%2F&tabs=fb-page&width=225&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="225" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
			</div>
		</div>
		<div style="clear: both">&nbsp;</div>
	</div>

</div>

<?php include_once('footer.php'); ?>
