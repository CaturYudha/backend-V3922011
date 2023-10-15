<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?=base_url('update-product/'.$product->id)?>">
        <label for="nama_product">Nama Produk</label>
        <input name="nama_product" value="<?=$product->nama_product?>" type="text"></input>
        <label for="deskripsi_product">Deskripsi Produk</label>
        <input name="description" value="<?=$product->description?>" type="text"></input>
        <button type="submit" >Update</button>
    </form>
</body>
</html>