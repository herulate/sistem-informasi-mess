<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Data Penempatan Kamar Mess</h3>
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
                                    <h3 class="modal-title" id="exampleModalLabel">Tambah Data Peyewaan</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="tambah_data" method="post">
                                    <div class="modal-body">

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1" name="blok">Tanggal Masuk</label>
                                            <input type="date" class="form-control" id="exampleFormControlInput1" name="tanggal_masuk">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Pilih Karyawan</label>
                                            <select class="form-control" id="exampleFormControlSelect1" name="karyawan">
                                                <option>Silahkan Pilih Karyawan</option>
                                                <?php foreach ($mstkaryawan as $row) : ?>

                                                    <option value="<?php echo $row->nik ?>"><?php echo $row->nama_karyawan ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Pilih Kategori Mess</label>
                                            <select class="form-control" id="kategori" name="kategori">
                                                <option value='0'>Silahkan Pilih Kategori Mess</option>
                                                <?php foreach ($mstkategori as $row) :  ?>
                                                    <option value="<?php echo $row->id_kategori ?>"><?php echo $row->nama_kategori ?></option>
                                                <?php
                                                endforeach;
                                                ?>
                                            </select>
                                        </div>
                                        <div id="loading" style="margin-top: 15px;">
                                            <img src="<?= base_url(); ?>assets/img/loading.gif" width="18"> <small>Loading...</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Pilih Mess</label>
                                            <select class="form-control" id="mess" name="mess">

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Pilih Kamar Tersedia</label>
                                            <select class="form-control" id="kamar" name="kamar">

                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Pengawas</label>
                                            <select class="form-control" id="pengawas" name="pengawas">
                                                <option></option>
                                                <?php foreach ($mstpengawas as $row) : ?>
                                                    <option value="<?php echo $row->id_pengawas ?>"><?php echo $row->nama_pengawas ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="reset" class="btn btn-secondary">Reset</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
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
                                <th>Nama Karyawan</th>
                                <th>Dept</th>
                                <th>Status</th>
                                <th>Tanggal Masuk</th>
                                <th>Nama Mess</th>
                                <th>Blok</th>
                                <th>Nomor</th>
                                <th>Status</th>
                                <th colspan="2">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($penyewaan as $k) :
                                ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $k->id_kamar ?></td>
                                    <td><?= $k->nama_karyawan ?></td>
                                    <td><?= $k->dept ?></td>
                                    <td><?= $k->status ?></td>
                                    <td><?= $k->tanggal_masuk ?></td>
                                    <td><?= $k->nama_mess ?></td>
                                    <td><?= $k->blok ?></td>
                                    <td><?= $k->nomor ?></td>
                                    <?php if ($k->status_sewa == 1) { ?>
                                        <td><span class="label label-success">Done</span></td>
                                    <?php } ?>
                                    <?php if ($k->status_sewa == 0) { ?>
                                        <td><span class="label label-warning">Sudah Keluar</span></td>
                                    <?php } ?>
                                    <td>
                                        <a href="<?= base_url(); ?>penyewaan/edit_data/<?= $k->id_penyewaan; ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                        <?php if ($k->status_sewa == 1) { ?>
                                            <a href="<?= base_url(); ?>penyewaan/keluar/<?= $k->id_penyewaan; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Keluar</a>
                                        <?php } elseif ($k->status_sewa == 0) { ?>
                                            <a href="<?= base_url(); ?>penyewaan/hapus/<?= $k->id_penyewaan; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Hapus</a>
                                        <?php } ?>
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
<script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<script type="text/javascript">
    $(function() {
        $(document).ready(function() {
            $("#loading").hide();
            $('#kategori').on('change', function() {
                $("#mess").hide();
                $("#loading").show();
                id_kategori = $(this).find(":selected").val();
                $.ajax({
                    type: 'GET',
                    url: "<?= base_url(); ?>penyewaan/get_mess",
                    data: {
                        kategori: id_kategori
                    },
                    dataType: "JSON",
                    beforeSend: function(e) {
                        if (e && e.overrideMimeType) {
                            e.overrideMimeType("application/json;charset=UTF-8");
                        }
                    },
                    success: function(d, r, x) {
                        $("#loading").hide();
                        data = d.data;
                        $('#mess').empty().html('<option value="">Silahkan pilih Mess</option>').show();
                        for (i = 0; i < data.length; i++) {
                            $('#mess').append('<option value="' + data[i].id_mess + '">' + data[i].nama_mess + '</option>');
                        }
                    }

                })
            })
            $('#mess').on('change', function() {
                $("#kamar").hide();
                $("#loading").show();
                id_kategori = $('#kategori').find(":selected").val();
                id_mess = $(this).find(":selected").val();
                $.ajax({
                    type: "GET",
                    url: "<?= base_url(); ?>penyewaan/get_kamar",
                    data: {
                        kategori: id_kategori,
                        mess: id_mess
                    },
                    dataType: "JSON",
                    beforeSend: function(e) {
                        if (e && e.overrideMimeType) {
                            e.overrideMimeType("application/json;charset=UTF-8");
                        }
                    },
                    success: function(d, r, x) {
                        $("#loading").hide();
                        data = d.data;
                        $('#kamar').empty().html('<option value="">Silahkan pilih Kamar</option>').show();
                        for (i = 0; i < data.length; i++) {
                            $('#kamar').append('<option value="' + data[i].id_kamar + '">' + data[i].blok + ' | ' + data[i].nomor + '</option>');
                        }
                    }
                })
            })
        })
    })
</script>