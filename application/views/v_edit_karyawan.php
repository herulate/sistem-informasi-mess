<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Edit Data Mess</h3>
                </div>
                <div class="panel-body">
                    <form action="<?php echo base_url() . 'karyawan/update' ?>" method="post">
                        <div class="modal-body">
                            <?php foreach ($karyawan as $k) : ?>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">NIK</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nik" value="<?= $k->nik ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Nama</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="nama_karyawan" value="<?= $k->nama_karyawan ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="jenis_kelamin">
                                            <?php if ($k->jenis_kelamin == 1) { ?>
                                                <option value="1">Laki-Laki</option>
                                            <?php }
                                                if ($k->jenis_kelamin == 2) { ?>
                                                <option value="2">Perempuan</option>
                                            <?php } ?>
                                            <option value="<?= $k->jenis_kelamin ?>"></option>
                                            <option value="">--</option>
                                            <option value="1">Laki-Laki</option>
                                            <option value="2">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Departement</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="dept">
                                            <option value="<?= $k->dept ?>"><?= $k->dept ?></option>
                                            <option value="">--</option>
                                            <option value="ITD">ITD</option>
                                            <option value="PERSONALIA">PERSONALIA</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Agama</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="agama">
                                            <option value="<?= $k->agama ?>"><?= $k->agama ?></option>
                                            <option value="">--</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Khatolik">Khatolik</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Budha">Budha</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Status</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="status">
                                            <option value="<?= $k->status ?>"><?= $k->status ?></option>
                                            <option value="">--</option>
                                            <option value="Lajang">Lajang</option>
                                            <option value="Menikah">Menikah</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Status Penempatan</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="ss">
                                            <?php if ($k->ss == 1) { ?>
                                                <option value="<?= $k->ss ?>">Sudah</option>
                                            <?php }
                                                if ($k->ss == 0) { ?>
                                                <option value="<?= $k->ss ?>">Belum</option>
                                            <?php } ?>
                                            <option value="">--</option>
                                            <option value="1">Sudah</option>
                                            <option value="0">Belum</option>
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