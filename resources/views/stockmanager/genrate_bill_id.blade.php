@extends('stockmanager.includes.stockmanager_master')
@section('main-container')
<div class="main-panel">
    <div class="content-wrapper">
        <!-- start form -->

        <section>
            <div class="container">
                @if(Session::has('flash_message'))
                <div class="alert {!! session('status') !!}" role="alert"><em> {!! session('flash_message') !!}</em>
                </div>
                @endif
                <div class="card">
                    <div class="card-header bg-info">
                        <h3 class="text-light">Generate Bill ID</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{url('/stockmanager/save-stock')}}" class="needs-validation" id="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="medcode">Bill Id:</label>
                                        <input type="text" class="form-control" name="bill_id" id="bill_id"
                                            placeholder="Enter Bill Idd" required>
                                        @error('medcode')
                                        <span class="text-danger">
                                            {{$bill_id}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="medname">Title:</label>
                                        <input type="text" class="form-control" name="title" id="title"
                                            placeholder="Enter title " required>
                                        @error('medname')
                                        <span class="text-danger">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="medname">Total Ammount:</label>
                                        <input type="text" class="form-control" name="total_price" id="total_price"
                                            placeholder="Enter Price" required>
                                        @error('medname')
                                        <span class="text-danger">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="medname">Upload Bill Pic:</label>
                                        <input type="file" class="form-control" name="bill_pic" id="total_price"
                                            placeholder="Enter Price" required>
                                        @error('medname')
                                        <span class="text-danger">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="medname">Paid Ammount:</label>
                                        <input type="text" class="form-control" name="paid_ammonut" id="total_price"
                                            placeholder="Enter Paid Ammount" required>
                                        @error('medname')
                                        <span class="text-danger">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="medunit">Date:</label>
                                        <input type="date" class="form-control" name="bill_date" id="bill_date"
                                            placeholder="Choose Date " required>
                                        @error('medunit')
                                        <span class="text-danger">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="price">Description:</label>
                                        <input type="text" class="form-control" name="description" id="description"
                                            placeholder="Enter Description" required>
                                        @error('price')
                                        <span class="text-danger">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="form-group col-md-12">
                                    <input type="submit" id="button" class="form-control btn btn-info">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- End form -->
    </div>
    <div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
        $(document).ready(function() {
            $('input').keyup(function() {
                var type = $("#medtype option:selected").text();
                var medunit = $("#medunit").val();
                var medquantity = $("#medquantity").val();
                var tq = medunit * medquantity;
                $("#totalquantity").val(tq + " " + type);
                var price = $("#price").val();
                var tp = medquantity * price;
                $("#totalprice").val(tp);
            });
        });
        </script>
        @endsection