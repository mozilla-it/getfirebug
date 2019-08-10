<html>
<head>
    <title>List of files</title>
    <link type="text/css" href="/img/releases/releases.css" rel="stylesheet"/>
</head>
<body>
<?php
$list = "";
$curr_path = $_SERVER['DOCUMENT_ROOT'].$_SERVER['REQUEST_URI'];
$curr_path = realpath($curr_path);

if ($handle = opendir($curr_path))
{
    while (false !== ($file = readdir($handle)))
    {
        if ($file == ".") {
            continue;
        }

        $abs_file_path = $curr_path.'/'.$file.' ';

        if (file_ext($file) == "xpi" || is_dir($abs_file_path) || $file == "..")
        {
            $list .= "<tr><td>";

            if ($file == "..") {
                $list .= "";
            } elseif (is_dir($abs_file_path)) {
                $list .= '<img src="/img/releases/category-discover.png" />';
            } else {
                $list .= '<img src="/img/releases/download.png" />';
            }

            $list .= "</td><td>";

            if ($file == "..") {
                if ($_SERVER['REQUEST_URI'] != "/releases-test/") { //xxxHonza: any better ID of the root dir?
                    $list .= '<a href="'.$file.'">Parent Direcotory</a><br/>';
                }
            } else {
                $list .= '<a href="'.$file.'">'.$file.'</a><br/>';
            }

            if (!is_dir($abs_file_path) && $file != "..")
            {
                $list .= '</td><td>';
                $list .= '<span class="lastModified">'.file_time($abs_file_path).'</span>';
            }

            $list .= "</td></tr>";
        }
    }

    closedir($handle);
}

function file_time($file)
{
    return date("m/d/Y", filectime($file));
}

function file_ext($file)
{ 
    $filename = strtolower($file);
    $exts = split("[/\\.]", $filename);
    $n = count($exts)-1;
    $exts = $exts[$n];
    return $exts;
}
?>
<div class="dirContent">
    <table>
        <?php echo $list; ?>
    </table>
</div>

</body>
</html>