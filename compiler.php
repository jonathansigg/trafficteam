<?php
require_once( 'config.php' );

$compilerdir = 'html/';
if(!file_exists($compilerdir)) {
  mkdir($compilerdir, 0777);
}

$templatedir = get_dir('templates');
$dir = new DirectoryIterator($templatedir);
$templates = array();
foreach ($dir as $fileinfo) {
  if (!$fileinfo->isDot()) {
      $filename = $fileinfo->getFilename();
      $source = file_get_contents($templatedir.$filename);
      $template = preg_replace("/\.php/", "", $filename); // key
      if( preg_match("/\*\s?@templatename:\s?(.*)/", $source, $templatename) ):
        $template = preg_replace("/\.php/", "", $filename);
        $templatename = $templatename[1];
        $templates[$template] = $templatename;
      endif;
  }
}
ob_start();
foreach( $templates as $template => $value ) :
  $html = '';
  $_GET['page'] = $template;
  include 'index.php';
  $html = ob_get_contents();
  $filename = $compilerdir . $template . '.html';
  $myfile = fopen($filename, "w");
  fwrite($myfile,$html);
  fclose($myfile);
endforeach;
ob_end_clean();

ob_start();
?>
<h1>Pages</h1>
<ul>
<?php
asort($templates);
foreach( $templates as $key => $value ) :
?>
<li><a href="/proto_default/html/<?= $key ?>.html"><?= $value ?></a></li>
<?php
endforeach;
?>
</ul>
<?php
$html = ob_get_contents();
ob_end_clean();

$filename = $compilerdir . 'index.html';
$myfile = fopen($filename, "w");
fwrite($myfile,$html);
fclose($myfile);

echo '<h1>Files compiled into html/<h1>';
?>
