<!doctype html>
<html lang="en">
<head>
    <title><?=isset($title)?$title:'QR' ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php foreach($result as $row): ?>
    <div class="text-center">
        <img src="<?= base_url().$row->qr; ?>" alt="" style="margin-top: 150px;">
    </div>

<?php endforeach; ?>

</body>
</html>