<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success" style="margin-left: 195px">
                <?php
                    $grand_total = 0;
                    if($keranjang = $this->cart->contents()){
                        foreach($keranjang as $item){
                            $grand_total = $grand_total + $item['subtotal'];
                        }
                        echo "<h4>Total Belanjaan : Rp. ".number_format($grand_total,0,',','.');
                    
                ?>
            </div><br><br>
            
            <div class="card shadow mb-4">
                <div class="card-body">
                    <h3 class="text-center">Input Pemesanan</h3>
                    <hr>
                    <form action="<?php echo base_url().'dashboard/simpan_order'?>" method="post" enctype="multipart/form-data">
                        <div class="form-group" >
                            <label for="">No Meja</label>
                            <input class="form-control" type="number" name="no_meja" placeholder="Masukan Nomer Meja">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal</label>
                            <input class="form-control" type="date" name="tanggal" value="<?php echo date('Y-m-d'); ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">ID User</label>
                            <input class="form-control" type="text" name="id_user" value="<?php echo $this->session->userdata('id_user');?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Keterangan</label>
                            <textarea name="keterangan" class="form-control" placeholder="Masukan keterangan" cols="20" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Total Harga</label>
                            <input class="form-control" type="number" name="total_harga" value="<?php echo $grand_total?>" readonly>
                        </div>
                        
                        <button type="submit" class="btn btn-sm btn-primary">Pesan</button>
                    </form>
                </div>
            </div>
            

            <?php
                } else {
                    echo "<h4>Keranjang Pembelanjaan Anda Masih Kosong!";
                    
                }
            ?>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>