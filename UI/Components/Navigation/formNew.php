<!-- TEST FORM FOR NEW CLIENT -->
<div class="modal fade" id="addNewClient">
    <div class="modal-dialog modal-lg">
        <form action="">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Request for Analysis</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs text-center" id="nav">
        <li><a href="#analysisInfo" data-toggle="tab"><div class="h5 p-3">Information</div></a></li>
        <li><a href="#analysisSampleCollection" data-toggle="tab"><div class="h5 p-3">Sample Collection Info</div></a></li>
        <li><a href="#analysisWorkOrder" data-toggle="tab"><div class="h5 p-3">Work Order Info</div></a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
        <div class="tab-pane active p-3" id="analysisInfo">
            <div class="row">
                <div class="col-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Account Name</label>
                    <input type="text" class="form-control" id="" placeholder="Enter Account Name .." required>
                </div>
                </div>
                <div class="col-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Contact Person</label>
                    <input type="text" class="form-control" id="" placeholder="Enter Contact Person..">
                </div>
                </div>
                <div class="col-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Phone</label>
                    <input type="text" class="form-control" id="" placeholder="Enter Phone..">
                </div>
                </div>

                <div class="col-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Mobile</label>
                    <input type="text" class="form-control" id="" placeholder="Enter Mobile..">
                </div>
                </div>
                <div class="col-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Client Type</label>
                    <select class="form-control">
                    <option>Regular</option>
                    <option>Walk-In</option>
                    </select>
                </div>
                </div>
                <div class="col-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" class="form-control" id="" placeholder="Enter Email ..">
                </div>
                </div>
            </div>
        </div>
        <div class="tab-pane p-3" id="analysisSampleCollection">
            <div class="row">
                <div class="col-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Collected by</label>
                    <input type="text" class="form-control" id="" placeholder="Enter Name .." required>
                </div>
                </div>
                <div class="col-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Date Collected</label>
                    <input type="date" class="form-control" id="" placeholder="Enter Date ..">
                </div>
                </div>
                <div class="col-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Time Collected</label>
                    <input type="time" class="form-control" id="" placeholder="Enter Time ..">
                </div>
                </div>

                <div class="col-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Last Microbial Testing</label>
                    <input type="date" class="form-control" id="" placeholder="Enter Time ..">
                </div>
                </div>
                <div class="col-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Last Change of Filter</label>
                    <input type="date" class="form-control" id="" placeholder="Enter Time ..">
                </div>
                </div>
                <div class="col-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Last Change of UV</label>
                    <input type="date" class="form-control" id="" placeholder="Enter Time ..">
                </div>
                </div>
            </div>
        </div>
        <div class="tab-pane p-3" id="analysisWorkOrder">
            <div class="row">
                <div class="col-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Source of Water Sample</label>
                    <input type="text" class="form-control" id="" placeholder="Enter Source Water Sample .." required>
                </div>
                </div>
                <div class="col-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Water Purpose</label>
                    <input type="date" class="form-control" id="" placeholder="Enter Water Purpose ..">
                </div>
                </div>
                <div class="col-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Test Purpose</label>
                    <input type="time" class="form-control" id="" placeholder="Enter Test Purpose ..">
                </div>
                </div>
                <div class="col-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Customer Representative Name</label>
                    <input type="date" class="form-control" id="" placeholder="Enter Name ..">
                </div>
                </div>
            </div>
        </div>
        </div>
        
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
            <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Submit</button>
        </div>
        </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<!-- TEST FORM FOR NEW CLIENT -->
<div class="modal fade" id="addLabAcceptance">
<div class="modal-dialog modal-md">
    <form action="">
    <div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">Lab Acceptance</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="card card-primary">
        <div class="card-body">
        <div class="row">
        <div class="col-12">
        <div class="form-group">
            <label for="exampleInputEmail1">Lab Test ID</label>
            <input type="text" class="form-control" id="" placeholder="Enter Test ID .." value="124" readonly>
        </div>
        </div>
        
        <div class="col-12">
        <div class="form-group">
            <label for="exampleInputEmail1">Evaluated By</label>
            <input type="text" class="form-control" id="" placeholder="Enter Evaluator Name ..">
        </div>
        </div>
        <div class="col-12">
        <div class="form-group">
            <label for="exampleInputEmail1">Date</label>
            <input type="date" class="form-control" id="" placeholder="Enter Date ..">
        </div>
        </div>
        <div class="col-12">
        <div class="form-group">
            <label for="exampleInputEmail1">Time</label>
            <input type="time" class="form-control" id="" placeholder="Enter Time ..">
        </div>
        </div>
        <div class="col-12">
        <div class="form-group">
            <label for="exampleInputEmail1">Remarks</label>
            <textarea class="form-control" id="" row="3" placeholder="Enter Remarks .."></textarea>
        </div>
        </div>
        
        </div>
        </div>
    </div>
    <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Submit</button>
    </div>
    </div>
    </form>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>


<!-- TEST FORM FOR NEW PAYMENT -->
<div class="modal fade" id="addAnalysisPayment">
    <div class="modal-dialog modal-sm">
        <form action="">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Add Payment</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="card card-primary">
            <div class="card-body">
            <div class="row">
            <div class="col-12">
            <div class="form-group">
                <label for="exampleInputEmail1">Payment</label>
                <input type="text" class="form-control" id="" placeholder="Enter Payment Number ..">
            </div>
            </div>
            
            <div class="col-12">
            <div class="form-group">
                <label for="exampleInputEmail1">Member</label>
                <input type="text" class="form-control" id="" placeholder="Enter Member Name ..">
            </div>
            </div>
            <div class="col-12">
            <div class="form-group">
                <label for="exampleInputEmail1">Date</label>
                <input type="date" class="form-control" id="">
            </div>
            </div>
            <div class="col-4">
            <div class="form-group">
                <label for="exampleInputEmail1">Amount</label>
                <input type="number" class="form-control" id="" placeholder="00.00">
            </div>
            </div>
            <div class="col-4">
            <div class="form-group">
                <label for="exampleInputEmail1">Penalty</label>
                <input type="number" class="form-control" id="" placeholder="00.00">
            </div>
            </div>
            <div class="col-12">
            <div class="form-group">
                <label for="exampleInputEmail1">Upload Proof</label>
                <input type="file" class="form-control" id="formFile" accept=".jpg,.gif,.png" placeholder="00.00">
            </div>
            </div>
            
            </div>
            </div>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
            <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Submit</button>
        </div>
        </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
    </div>