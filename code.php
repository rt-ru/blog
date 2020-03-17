    <?php
    $pixel=0;
    if ($_SERVER['HTTP_REFERER']===null){
        $pixel=$_GET['p'];
    }
    else{
        $url=$_SERVER['HTTP_REFERER'];
        $parts = parse_url($url);
        parse_str($parts['query'], $query);
        $pixel= $query['p'];
    }
    ?>