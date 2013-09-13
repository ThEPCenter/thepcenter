<?php
$sql = "SELECT * FROM tb_post ORDER BY date DESC;";
$result = mysql_query($sql);
while ($p = mysql_fetch_array($result)) {
    echo '
                <article class="post clearfix">                    
                    <header>
                        <h1 class="post-title"><a href="#">' . htmlspecialchars_decode($p['title']) . '</a></h1>
                        <p class="post-meta">
                            <time class="post-date" title="'. date("H:i:s", strtotime($p['date'])) .'" datetime="'. date("Y-m-d", strtotime($p['date'])) .'" pubdate>' . thai_date($p['date']) . '</time> 
                            <em>in</em> <a href="#">'. htmlspecialchars_decode($p['category']) .'</a>
                            <em>by</em> <a href="#">' . $p['author'] . '</a>
                        </p>
                    </header>
                    ' . htmlspecialchars_decode($p['content'])
    . '
                    
                    <hr>
                </article>
                <!-- /.post -->                
    ';
}
?>

