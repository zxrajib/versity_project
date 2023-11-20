@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-title">Charge List</h6>
                        </div>
                        <div class="col-md-6 text-right">
                            <button class="btn btn-sm badge-danger" data-toggle="modal" data-target="#chargeCreate">
                                <a href="javaScript:void(0)" class="text-white">
                                    <i class="fas fa-plus"></i>
                                    Add
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive display nowrap"
                               style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Charge in city</th>
                                <th>Charge around city</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>


                            <tbody id="append_data">
                            @foreach($charges as $key=>$charge)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $charge->delivery_charge_in_city }}</td>
                                    <td>{{ $charge->delivery_charge_around_city }}</td>
                                    <td>{{ $charge['status'] === 0 ? 'Inactive' : 'Active' }}</td>
                                    <td>
                                        <a href="#" class="pl-1 mr-1 rounded badge-info" data-toggle="modal"
                                           data-target="#chargeEdit{{ $charge->id }}" data-id="{{ $charge->id }}" data-placement="top" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        @if($charge->status == 1)
                                                                                <a href="javascript:void(0)" class="pr-1 pl-1 rounded badge-danger" onclick="return status_change({{ $charge->id }})" data-placement="top" title="Inactive"><i class="fas fa-times"></i></a>
                                        @else
                                            <a href="javascript:void(0)" class="pr-1 pl-1 rounded badge-success"
                                               onclick="return status_change({{ $charge->id }})" data-placement="top" title="Active"><i
                                                    class="fas fa-check"></i></a>
                                        @endif
                                    </td>
                                </tr>

                                @include('partials.modals.charge.edit')

                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    @include('partials.modals.charge.create')

                </div>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <style>
        div.dataTables_wrapper div.dataTables_filter {
            width: 50% !important;
            float: right !important;
        }
    </style>
@endpush
@push('js')
    <script>
        $(document).ready(function () {
            $('#datatable-buttons').DataTable({
                dom: 'Bfrtip',
                lengthChange: false,
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
            table.buttons().container().appendTo($('div.eight.column:eq(0)', table.table().container()));
        });

        function status_change(id) {
            $.ajax({
                type: "GET",
                url: "{{ route('ajax_charge_status_change') }}",
                dataType: "json",
                data: {id: id},
                success: function (dataResults) {
                    let allData = JSON.parse(JSON.stringify(dataResults));
                    $('#append_data').html('');
                    let data_all = '';
                    $.each(allData, function (index, data) {
                        let status = '';
                        let action_btn = '';
                        if (data.status == 0) {
                            status = 'Inactive';
                            action_btn = `
                                            <a href="#" class="pl-1 mr-1 rounded badge-info" data-toggle="modal" data-target="#chargeEdit` + data.id + `" data-id="` + data.id + `" data-placement="top" title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="javascript:void(0)" class="pr-1 pl-1 rounded badge-success" onclick="return status_change(` + data.id + `)" data-placement="top" title="Active"><i class="fas fa-check"></i></a>
                                         `;
                        } else {
                            status = 'Active';
                            action_btn = `
                                            <a href="#" class="pl-1 mr-1 rounded badge-info" data-toggle="modal" data-target="#chargeEdit` + data.id + `" data-id="` + data.id + `" data-placement="top" title="Edit">
                                              <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="javascript:void(0)" class="pr-1 pl-1 rounded badge-danger" onclick="return status_change(` + data.id + `)" data-placement="top" title="Inactive"><i class="fas fa-times"></i></a>
                                          `;
                        }
                        data_all += `
                                <tr>
                                    <td>` + ++index + `</td>
                                    <td>` + data.delivery_charge_in_city + `</td>
                                    <td>` + data.delivery_charge_around_city + `</td>
                                    <td>` + status + `</td>
                                    <td>` + action_btn + `</td>
                                </tr>`;
                    })
                    $('#append_data').append(data_all);
                }
            });
        };

    </script>
@endpush
