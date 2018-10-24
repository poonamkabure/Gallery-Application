<?php
$myfile = fopen("newfile.xml", "w") or die("Unable to open file!")
fwrite($myfile, $txt);
$txt = '<article>
-<front>
-<journal-meta>
<journal-id journal-id-type="publisher">OIIRJ</journal-id>
<journal-title>Online International Interdisciplinary Research Journal</journal-title>
<issn pub-type="ppub">2249-9598</issn>
-<publisher>
<publisher-name>Online Research Book Publication</publisher-name>
</publisher>
</journal-meta>
</front>
</article>';
fwrite($myfile, $txt);
fclose($myfile);
?>