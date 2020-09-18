<body>
    <div class="row">
        <div class="col-sm-12 mt-4">
            <h2 style="text-align: center">Data Menu</h2>
            <br>
            <?php echo "Tanggal: ".date('d-m-Y'); ?>
            <br><br>
            <div class="table-responsive mb-4">
                <table id="example" border="1px" cellspacing="0" class="table table-striped table-bordered" style="width: 100%;">
                    <thead>
                        <tr style="text-align: center">
                            <td scope="col">ID Menu</td>
                            <td scope="col">Nama Menu</td>
                            <td scope="col">Harga</td>
                            <td scope="col">Status Menu</td>
                            <td scope="col">Kategori</td>
                            <td scope="col">Gambar</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if($c_makanan){
                            foreach ($makanan as $mkn){
                        ?>
                            <tr style="text-align: center">
                                <td><?php echo $mkn->id_makanan;?></td>
                                <td><?php echo $mkn->nama_makanan;?></td>
                                <td><?php echo $mkn->harga;?></td>
                                <td><?php echo $mkn->status_makanan;?></td>
                                <td><?php echo $mkn->kategori;?></td>
                                <td><img style="width: 100px" src="<?php echo base_url('/upload/'.$mkn->gambar)?>" alt=""></td>
                            </tr>
                        <?php } }
                            else {
                                ?>
                                <!-- <tr>
                                    <td colspan="8">Data User Kosong!</td>
                                </tr> -->
                                <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>