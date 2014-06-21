    <?php
    //ブラウザにはキャッシュしてほしい
    $expires = 3600000;
    header('Last-Modified: Sun Jan 15 2014 00:00:00 GMT');
    header('Expires: ' . gmdate('D, d M Y H:i:s T', time() + $expires));
    header('Cache-Control: private, max-age=' . $expires);
    header('Pragma: ');

    //これ重要
    header('Content-Type: text/javascript; charset=UTF-8');
    ?>

    //あとはいつもどおりJavascriptを書いたらよい
    function xxxx()
    {
    alert("Hello!");
    }
