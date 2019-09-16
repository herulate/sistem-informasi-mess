<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Data Karyawan</h3>
                </div>
                <div class="panel-body">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-pencil"></i>
                        Tambah Data
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="exampleModalLabel">Tambah Data Karyawan</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="tambah_data" method="post">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1" name="blok">Nama Karyawan</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" name="nama_karyawan">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                                            <select class="form-control" id="exampleFormControlSelect1" name="jenis_kelamin">
                                                <option></option>
                                                <option value="1">Laki-Laki</option>
                                                <option value="2">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Departement</label>
                                            <select class="form-control" id="exampleFormControlSelect1" name="dept">
                                                <option></option>
                                                <option value="ITD">ITD</option>
                                                <option value="PERSONALIA">Personalia</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Agama</label>
                                            <select class="form-control" id="exampleFormControlSelect1" name="agama">
                                                <option></option>
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
                                                <option></option>
                                                <option value="Lajang">Lajang</option>
                                                <option value="Menikah">Menikah</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIK</th>
                                <th>Nama Karyawan</th>
                                <th>Jenis Kelamin</th>
                                <th>Departement</th>
                                <th>Agama</th>
                                <th>Status</th>
                                <th>Status Mess</th>
                                <th colspan="2">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($karyawan as $k) :
                                ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $k->nik ?></td>
                                    <td><?= $k->nama_karyawan ?></td>
                                    <?php if ($k->jenis_kelamin == 1) { ?>
                                        <td>Laki-Laki</td>
                                    <?php } else { ?>
                                        <td>Perempuan</td>
                                    <?php } ?>
                                    <td><?= $k->dept ?></td>
                                    <td><?= $k->agama ?></td>
                                    <td><?= $k->status ?></td>
                                    <?php if ($k->ss == 1) { ?>
                                        <td>Sudah</td>
                                    <?php } ?>
                                    <?php if ($k->ss == 0) { ?>
                                        <td>Belum</td>
                                    <?php } ?>
                                    <td>
                                        <a href="<?= base_url(); ?>karyawan/edit_data/<?= $k->nik; ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                        <a href="<?= base_url(); ?>karyawan/delete_data/<?= $k->nik; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>