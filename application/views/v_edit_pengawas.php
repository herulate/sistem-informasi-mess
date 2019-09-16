<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Edit Data Mess</h3>
                </div>
                <div class="panel-body">
                    <form action="<?php echo base_url() . 'pengawas/update' ?>" method="post">
                        <div class="modal-body">
                            <?php foreach ($pengawas as $k) : ?>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">ID Pengawas</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="id_pengawas" value="<?= $k->id_pengawas ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Nama</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="nama_pengawas" value="<?= $k->nama_pengawas ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="jenis_kelamin">
                                            <option value="<?= $k->jenis_kelamin ?>"><?= $k->jenis_kelamin ?></option>
                                            <option value="">--</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>

                                <?php endforeach; ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" onclick="history.back(-1)" data-dismiss="modal">Back</button>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>