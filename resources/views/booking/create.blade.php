
@extends("layouts.app")

@section("content")

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">

                        <h2>Add Booking </h2>

                    </div>
                    <div class="card-body">

                        <div class="mb-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="enter name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email: </label>
                            <input type="email" class="form-control" id="email" placeholder="enter email">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Booking Type: </label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>select booking type</option>
                                <option value="fullday">Full Day</option>
                                <option value="halfday">Half Day</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <div class="row form-group">
                                <label for="date">Date</label>
                                <div class="col-sm-4">
                                    <div class="input-group date" id="datepicker">
                                        <input type="text" class="form-control">
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-white d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 col-md-3">
                            <label for="name" class="form-label">Time:</label>
                            <input type="text" class="form-control" id="time" placeholder="enter time">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 @push('script')
<script>
	$(function(){
		$('#datepicker').datepicker();
	});
</script>
<script>
$(document).ready(function(){
    $('#time').timepicker();
});

</script>

@endpush

@endsection
