<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Data Kamar</h3>
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
                                    <h3 class="modal-title" id="exampleModalLabel">Tambah Data Kamar</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="tambah_data" method="post">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Mess</label>
                                            <select class="form-control" id="exampleFormControlSelect1" name="mess">
                                                <option></option>
                                                <?php foreach ($mstmess as $row) : ?>
                                                    <option value="<?php echo $row->id_mess ?>"><?php echo $row->nama_mess ?> | <?php echo $row->alamat_mess ?> | <?php echo $row->nama_kategori ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Isi Kamar</label>
                                            <select class="form-control" id="exampleFormControlSelect1" name="max">
                                                <option></option>
                                                <option value="1">1 Orang</option>
                                                <option value="2">2 Orang</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1" name="blok">Blok</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" name="blok">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1" name="nomor">Nomor</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" name="nomor">
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
                                <th>ID Kamar</th>
                                <th>Nama Mess</th>
                                <th>Alamat</th>
                                <th>Kategori</th>
                                <th>Blok</th>
                                <th>Nomor</th>
                                <th colspan="2">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($kamar as $k) :
                                ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $k->id_kamar ?></td>
                                    <td><?= $k->nama_mess ?></td>
                                    <td><?= $k->alamat_mess ?></td>
                                    <td><?= $k->nama_kategori ?></td>
                                    <td><?= $k->blok ?></td>
                                    <td><?= $k->nomor ?></td>
                                    <td>
                                        <a href="<?= base_url(); ?>kamar/edit_data/<?= $k->id_kamar; ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                        <a href="<?= base_url(); ?>kamar/delete_data/<?= $k->id_kamar; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
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