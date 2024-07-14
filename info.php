<?php
// ここで必要なデータを取得する
$client = get_field('exhib-client');
$name = get_field('exhib-name');
$address = get_field('exhib-addr');
$boots = get_field('exhib-boots');
$surface = get_field('exhib-surface');
$width = get_field('exhib-width');
$height = get_field('exhib-height');

// テーブル形式で情報を出力する
?>

<table class="exhib-tbl">
    <?php if ($client): ?>
    <tr>
        <td>クライアント名:</td>
        <td><?php echo esc_html($client); ?></td>
    </tr>
    <?php endif; ?>

    <?php if ($name): ?>
    <tr>
        <td>展示会名:</td>
        <td><?php echo esc_html($name); ?></td>
    </tr>
    <?php endif; ?>

    <?php if ($address): ?>
    <tr>
        <td>開催場所:</td>
        <td><?php echo esc_html($address); ?></td>
    </tr>
    <?php endif; ?>

    <?php if ($boots): ?>
    <tr>
        <td>小間数:</td>
        <td><?php echo esc_html($boots); ?></td>
    </tr>
    <?php endif; ?>

    <?php if ($surface): ?>
    <tr>
        <td>開放面:</td>
        <td><?php echo esc_html($surface); ?></td>
    </tr>
    <?php endif; ?>

    <?php if ($width && $height): ?>
    <tr>
        <td>サイズ:</td>
        <td><?php echo esc_html($width); ?>m X <?php echo esc_html($height); ?>m</td>
    </tr>
    <?php endif; ?>

    <?php if ($width && $height): ?>
    <tr>
        <td>面積:</td>
        <td><?php echo floatval($width) * floatval($height); ?>m<sup>2</sup></td>
    </tr>
    <?php endif; ?>
</table>