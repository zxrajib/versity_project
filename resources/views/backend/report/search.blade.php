@extends('master')
@section('content')
    <div class="sl-mainpanel">
        <div class="sl-pagebody">
            <div class="sl-page-title">
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card pd-20 pd sm-40">
                        <h4>Search BY Date</h4>
                        <form action="{{route('checkReport')}}">
                            <label> Select Date</label>
                            <input type="date" class="form-control" name="date">
                            <br>
                            <button type="submit" class="btn-btn-primary">
                                Search
                            </button>
                        </form>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card pd-20 pd sm-40">
                        <h4> Search by Month</h4>
                        <form action="">
                            <label for="">Select Month</label>
                            <select name="month" id="month" class="form-control">
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                            </select>
                            <label for="">Select Year</label>
                            <select class="form-control" name="year" id="year">
                                <option value="2020">2020</option>
                                <option value="2020">2021</option>
                            </select>
                            <br>
                            <button type="submit" class="btn btn-primary">
                                Search
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card pd-20 pd sm-40">
                        <h4>Search By Year</h4>
                        <form action="">
                            <label for="">Select Year</label>
                            <select class="form-control" name="year" id="year">
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                            </select>
                            <br>
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
