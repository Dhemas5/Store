<section class="content-header">
    <h1>
        Members
        <small> Pelanggan Langganan</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Members</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div id="flash" data-flash="<?= $this->session->flashdata('success'); ?>">
    </div>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Members</h3>
            <div class="pull-right">
                <a href="<?= site_url('index.php/member/add') ?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-plus"> Create</i>
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($row->result() as $key => $data) { ?>
                        <tr>
                            <td style="width:5%;"><?= $no++ ?>.</td>
                            <td><?= $data->name ?></td>
                            <td><?= $data->gender ?></td>
                            <td><?= $data->phone ?></td>
                            <td><?= $data->address ?></td>
                            <td class="text-center" width="160px">
                                <a href="<?= site_url('index.php/member/edit/' . $data->member_id) ?>" class="btn btn-success btn-xs">
                                    <i class="fa fa-pencil"> Update</i>
                                </a>
                                <a href="<?= site_url('index.php/member/del/' . $data->member_id) ?>" id="btn-hapus" class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash"> Delete</i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</section>