<!DOCTYPE html>
<html lang="ja">

<?php
include("./_inc/_header.inc");
?>

<body>
<div id="wapper" style="padding: 10px; margin: 10px;">
<form class="order" name="order_form" action="./order_exec.php" method="POST">
<!-- loop(main item) -->
<div id="main-item">
<div class="main-item-contents" style="margin: 5px; float: left; max-width: 300px; max-height: 400px;">
<p>
<img src="./img/sample_1.jpg" width="280" height="210" alt=""><br />
サンプル商品１<br />
これはサンプル商品１の説明です<br />
<span>3個：3000円</span>
<input type="hidden" name="sample_1" value="3">
</p>
</div>
<div class="main-item-contents" style="margin: 5px; float: left; max-width: 300px; max-height: 400px;">
<p>
<img src="./img/sample_2.jpg" width="280" height="210" alt=""><br />
サンプル商品２<br />
これはサンプル商品２の説明です<br />
<span>1個：800円</span>
<input type="hidden" name="sample_2" value="1">
</p>
</div>
</div><!-- /.main_item -->
<!-- loop(main item) end -->
<!-- loop(sub item) -->
<div id="sub-item" style="clear: both;">
<div class="sub-item-contents" style="margin: 5px; float: left; max-width: 250px; max-height: 360px;">
<p>
<img src="./img/sample_mini_2.jpg" width="240" height="180" alt=""><br />
サンプルミニ商品２<br />
これはサンプルミニ商品２の説明です<br />
<span>4個：1600円</span>
<input type="hidden" name="sample_mini_2" value="4">
</p>
</div>
</div><!-- /.sub_item -->
<!-- loop(sub item) end -->
<div class="form-action" style="clear: both;">
<input class="btn" type="submit" style="align: center; font-size: 25px; height: 30px; width: 200px;" value="注文確定" />
</div>
</form>
</div><!-- /.wapper -->
</body>

<?php
include("./_inc/_header.inc");
?>

</html>
