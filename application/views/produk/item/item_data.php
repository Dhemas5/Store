<section class="content-header">
    <h1>
        Items
        <small>Data Barang</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Items</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <?php //$this->view('messages') 
    ?>
    <div id="flash" data-flash="<?= $this->session->flashdata('success'); ?>">
    </div>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Product Item</h3>
            <div class="pull-right">
                <a href="<?= site_url('index.php/item/add') ?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-plus"> Create Product Item</i>
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Barcode</th>
                        <th>Name</th>
                        <th>Kategori</th>
                        <th>Size</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <!-- <tbody>
                    <?php $no = 1;
                    foreach ($row->result() as $key => $data) { ?>
                        <tr>
                            <td style="width:5%;"><?= $no++ ?>.</td>
                            <td>
                                <?= $data->barcode ?><br>
                                <a href="<?= site_url('index.php/item/barcode_qrcode/' . $data->item_id) ?>" class="btn btn-default btn-xs">
                                    Generate <i class="fa fa-barcode"></i>
                                </a>
                            </td>
                            <td><?= $data->name ?></td>
                            <td><?= $data->kategori_name ?></td>
                            <td><?= $data->unit_name ?></td>
                            <td class="text-right"><?= indo_currency($data->price) ?></td>
                            <td class="text-right"><?= $data->stock ?></td>
                            <td>
                                <?php if ($data->image != null) { ?>
                                    <img src="<?= base_url('uploads/product/' . $data->image) ?>" style="width:100px">
                                <?php } ?>
                            </td>
                            <td class="text-center" width="160px">
                                <a href="<?= site_url('index.php/item/edit/' . $data->item_id) ?>" class="btn btn-success btn-xs">
                                    <i class="fa fa-pencil"> Update</i>
                                </a>
                                <a href="<?= site_url('index.php/item/del/' . $data->item_id) ?>" onclick="return confirm('Yakin Hapus Data?')" class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash"> Delete</i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody> -->
            </table>
        </div>
    </div>

</section>
<script>
    $(document).ready(function() {
        $('#table1').DataTable({
            processing: true,
            serverSide: true,
            "ajax": {
                "url": "<?= site_url('index.php/item/get_ajax/') ?>",
                "type": "POST"
            },
            "columnDefs": [{
                    "targets": [5, 6],
                    "className": 'text-center'
                },
                {
                    "targets": [7, 1],
                    "className": 'text-center'
                },
                {
                    "targets": [0, 7, -1],
                    "orderable": false
                }
            ],
            "order": []
        })
    })
</script>