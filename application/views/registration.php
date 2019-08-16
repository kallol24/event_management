<?php
    $event_name="rock_concert_10Sept";
?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-sm-8" style="margin-top: 2%;">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Registration Form</h3>
                </div>
                <!-- form start -->
                <?php echo form_open(base_url('Landing_page/add_details'), 'class="form-horizontal"');  ?>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="customer_name" class="col-sm-4 control-label">Name</label>

                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="customer_name" name="customer_name" value="<?php echo set_value('customer_name'); ?>" placeholder="">
                                <span class="text-danger"><?php echo form_error("customer_name");?></span>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="phone" class="col-sm-4 control-label">Phone Number</label>

                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="phone" name="phone" value="<?php echo set_value('phone'); ?>" placeholder="">
                                <span class="text-danger"><?php echo form_error("phone");?></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-4 control-label">Email</label>

                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="email" name="email" value="<?php echo set_value('email'); ?>" placeholder="">
                                <span class="text-danger"><?php echo form_error("email");?></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="booking_num" class="col-sm-4 control-label">Number of Person</label>
                            <div class="col-sm-12">
                            <select class="form-control" id="booking_num" name="booking_num">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="submit" id="cancel" class="btn btn-info pull-left" name="cancel" value="Go Back">
                                <input type="submit" id="pay_button" class="btn btn-info pull-right" name="submit" value="">
                            </div>
                            <input type="hidden" id="amount" name="amount" value="">

                            <input type="hidden" id="<?php echo $event_name; ?>" name="event_name" value="<?php echo $event_name; ?>">
                        </div>
                    </div>
                    <!-- /.box-body -->
                <?php echo form_close( ); ?>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $("#amount").val(500);
        $("#pay_button").val("Pay 500");
        $(document).on('click','#booking_num',function(){
            $num=$('#booking_num option:selected').text();
            $("#pay_button").val("Pay "+($num*500));
            $("#amount").val($num*500);
        });
    })
</script>
