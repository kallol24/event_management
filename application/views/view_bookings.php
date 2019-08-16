<!-- Datatable style -->
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.css">


<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="box" style="border-top:none;">
                <div class="box-header" style="margin-bottom: 10px; background: none;padding: 6px;color: black;border-left: 5px solid #3f51b5;border-bottom: 1px solid #ecf0f5;">
                    <h3 class="box-title"><i class="fa fa-capsules"></i>&ensp;Booking Details</h3>

                </div>
                <!-- /.box-header -->
                <div class="box-body" style="padding-top:0px">
                    <div class="table-responsive">
                        <table id="booking_details" class="table table-bordered table-hover" style="word-break: break-all; table-layout: fixed">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Mobile Number</th>
                                <th>Email</th>
                                <th>Tickets Booked</th>
                                <th>Event</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($details as $row): ?>
                                <tr>
                                    <td><?= $row['id']; ?></td>
                                    <td><?= $row['customer_name']; ?></td>
                                    <td><?= $row['phone']; ?></td>
                                    <td><?= $row['email']; ?></td>
                                    <td><?= $row['booking_num']; ?></td>
                                    <td><?= $row['event']; ?></td>
                                    <td class="text-center">
                                        <a data-toggle="tooltip" title="View QR" href="<?= base_url('Bookings/view_qr/').$row['id']; ?>" target="_blank" class="btn btn-primary btn-sm view_qr" id="<?= $row['id']; ?>" name="View QR"><i class="fa fa-user"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>

                        </table>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>

</section>

<!-- DataTables -->
<script src="<?= base_url() ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $("#booking_details").DataTable();


    });


</script>
