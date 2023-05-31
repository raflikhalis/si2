<?php

// var_dump($data);
?>

<h2 class="judul-halaman">Hapus Keranjang</h2>

<form action="../Proses" method="post">
<input type="hidden" name="ker_id" value="<?= $data['dataKeranjang']['ker_id'] ?>">
    <table>
        <tr>
            <td>PEMBELI</td>
            <td>
                <select name="ker_id_user" disabled>
                    <option value="<?= $data['dataKeranjang']['user_id'] ?>"><?= $data['dataKeranjang']['user_nama'] ?></option>
                </select>
            </td>
        </tr>
        <tr>
            <td>PRODUK</td>
            <td>
                <select name="ker_id_produk" disabled>
                    <option value="<?= $data['dataKeranjang']['produk_id'] ?>"><?= $data['dataKeranjang']['produk_nama'] ?> - Rp<?= $data['dataKeranjang']['produk_hrg'] ?></option>
                </select>
            </td>
        </tr>
        <tr>
            <td>JUMLAH</td>
            <td><input type="number" min="0" name="ker_jml" value="<?= $data['dataKeranjang']['ker_jml'] ?>" disabled></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="btn_delete" value="HAPUS" class="btn-delete"></td>
        </tr>
    </table>
</form>

<a href="../Index" class="btn">Kembali</a>