define ('PATH', $_SERVER['DOCUMENT_ROOT'] . dirname($_SERVER['PHP_SELF']));
$dir = new DirectoryIterator(PATH);
echo '<ul>';
foreach ($dir as $fileinfo)
{   
    if (!$fileinfo->isDot()) {
       echo '<li><a href="'.$fileinfo->getFilename().'" target="_blank">'.$fileinfo->getFilename().'</a></li>'; 

       echo '</li>';
    }
}
echo '</ul>';
