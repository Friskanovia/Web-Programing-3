    <h3>
        <center>Laporan Data Buku Perputakaan Online</center>
    </h3> 
    <br/> 
    <table border="1" width="100%"> 
        <tr> 
            <th>No</th> 
            <th>Judul Buku</th> 
            <th>Pengarang</th>
            <th>Terbit</th>
            <th>Tahun Penerbit</th> 
            <th>ISBN</th> 
            <th>Stok</th> 
        </tr> 
        <?php 
        $no = 1; 
        foreach($buku as $b){ 
        ?> 
            <tr> 
                <ths><?= $no++; ?></th>
                 <td><?= $b['judul_buku']; ?></td> 
                <td><?= $b['pengarang']; ?></td> 
                <td><?= $b['penerbit']; ?></td> 
                <td><?= $b['tahun_terbit']; ?></td> 
                <td><?= $b['isbn']; ?></td> 
                <td><?= $b['stok']; ?></td> 
            </tr> 
            <?php 
            } 
            ?> 
    </table>                                                 
