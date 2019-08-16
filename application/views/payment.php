
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-sm-8" style="margin-top: 2%;">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Payment Form</h3>
                </div>

                <!-- form start -->
                <?php echo form_open(base_url('Landing_page/payment_gateway'), 'class="form-horizontal"');  ?>
                Pay Rs: <?php echo set_value('amount'); ?>
                <div class="box-body">
                    <div class="form-group">
                        <label for="customer_name" class="col-sm-4 control-label">Name</label>

                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="customer_name" name="customer_name" value="" placeholder="">
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="card_no" class="col-sm-4 control-label">Card Number</label>

                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="card_no" name="card_no" value="" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="OTP" class="col-sm-4 control-label">OTP</label>

                        <div class="col-sm-12">
                            <input type="email" class="form-control" id="OTP" name="OTP" value="" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="submit" id="pay_button" class="btn btn-info pull-right" name="submit" value="Pay Now">
                            <input type="submit" id="pay_button" class="btn btn-info pull-right" name="cancel" value="Cancel">
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <?php echo form_close( ); ?>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

