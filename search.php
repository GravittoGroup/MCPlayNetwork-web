<?php
require_once 'core/init.php';
require_once 'template/header.php';
?>
<div class="container">
    <h1>検索結果</h1>
    <script>
      (function() {
        var cx = 'partner-pub-8017032553209403:4324217617';
        var gcse = document.createElement('script');
        gcse.type = 'text/javascript';
        gcse.async = true;
        gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(gcse, s);
      })();
    </script>
    <gcse:searchresults-only></gcse:searchresults-only>
</div>
<?php
require_once 'template/footer.php';
