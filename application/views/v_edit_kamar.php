<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Edit Data Mess</h3>
                </div>
                <div class="panel-body">
                    <form action="<?php echo base_url() . 'kamar/update' ?>" method="post">
                        <div class="modal-body">
                            <?php foreach ($kamar as $k) : ?>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">ID Kamar</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="id_kamar" value="<?= $k->id_kamar ?>" readonly>
                                </div>
                                <div class="form-group">

                                    <label for="exampleFormControlSelect1">Nama Mess</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="mess">
                                        <option value="<?= $k->mess ?>"><?= $k->nama_mess ?> | <?= $k->alamat_mess ?> | <?= $k->nama_kategori ?></option>
                                        <option value="">--</option>
                                        <?php foreach ($mstmess as $row) : ?>
                                            <option value="<?= $row->id_mess ?>"><?= $row->nama_mess ?> | <?= $row->alamat_mess ?> | <?= $row->nama_kategori ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Isi Kamar</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="mess">
                                        <?php if ($k->max == 1) { ?>
                                            <option value="<?= $k->max ?>">1 Orang</option>
                                        <?php
                                            } ?>
                                        <?php if ($k->max == 2) { ?>
                                            <option value="<?= $k->max ?>">2 Orang</option>
                                        <?php
                                            } ?>
                                        <option value="">--</option>
                                        <option value="1">1 Orang</option>
                                        <option value="2">2 Orang</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1" name="kapasitas">Blok</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="blok" value="<?= $k->blok ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1" name="kapasitas">Nomor</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nomor" value="<?= $k->nomor ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Status Kamar</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="status_kamar">
                                        <?php if ($k->status_kamar == 1) { ?>
                                            <option value="<?= $k->status_kamar ?>">Penuh</option>
                                        <?php }
                                            if ($k->status_kamar == 0) { ?>
                                            <option value="<?= $k->status_kamar ?>">Ada Slot</option>
                                        <?php } ?>
                                        <option value="">--</option>
                                        <option value="1">Penuh</option>
                                        <option value="0">Ada Slot</option>
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