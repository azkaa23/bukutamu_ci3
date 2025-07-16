<?php
header("Content-type: text/csv");
header("Content-Disposition: attachment; filename=bukutamu.csv");
echo "id,name,email,message,created_at\n";
foreach($guests as $g){
    $line = [$g['id'],$g['name'],$g['email'], str_replace(["\n","\r"],' ', $g['message']), $g['created_at']];
    echo '"'.implode('","',$line).'"'."\n";
}
