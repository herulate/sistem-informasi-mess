<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Edit Data Mess</h3>
                </div>
                <div class="panel-body">
                    <form action="<?php echo base_url() . 'mess/update' ?>" method="post">
                        <div class="modal-body">
                            <?php foreach ($mess as $m) : ?>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">ID Mess</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="id_mess" value="<?= $m->id_mess ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nama Mess</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nama_mess" value="<?= $m->nama_mess ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1" name="alamat_mess">Alamat Mess</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="alamat_mess" value="<?= $m->alamat_mess ?>">
                                </div>
                                <div class="form-group">

                                    <label for="exampleFormControlSelect1">Kategori</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="kategori">
                                        <option value="<?= $m->kategori ?>"><?= $m->nama_kategori ?></option>
                                        <option value="">--</option>
                                        <?php foreach ($kat as $row) : ?>
                                            <option value="<?= $row->id_kategori ?>"><?= $row->nama_kategori ?></option>
                                        <?php endforeach; ?>
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