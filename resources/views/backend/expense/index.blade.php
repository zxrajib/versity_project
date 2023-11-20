@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-title">Expense List</h6>
                        </div>
                        <div class="col-md-6 text-right">
                            <button class="btn btn-sm badge-danger" data-toggle="modal" data-target="#expenseCreate">
                                <i class="fas fa-plus"></i>
                                Add
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
                                <th>User ID</th>
                                <th>Exp-Cat ID</th>
                                <th>Name</th>
                                <th>Details</th>
                                <th>Amount</th>
                                <th>Date</th>
                                <th>Reference</th>
                                {{--                            <th>Status</th>--}}
                                <th>Action</th>
                            </tr>
                            </thead>


                            <tbody>
                            @foreach($expenseData as $key=>$expense)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $expense->user_id }}</td>
                                    <td>{{ $expense->expense_category_id }}</td>
                                    <td>{{ $expense->name }}</td>
                                    <td>{{ $expense->details }}</td>
                                    <td>{{ $expense->amount }}</td>
                                    <td>{{ $expense->date }}</td>
                                    <td>{{ $expense->reference }}</td>
                                    {{--                            <td>{{ $expense['status'] === 0 ? 'Inactive' : 'Active' }}</td>--}}
                                    <td>
                                        <button class="" data-toggle="modal" data-target="#expenseEdit{{ $expense->id }}"
                                                data-id="{{ $expense->id }}">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        {{--                                @if($expense->status == 1)--}}
                                        {{--                                    <a href="{{ route('expense.inactive', $expense->id) }}" class="pr-1 pl-1 rounded badge-danger" data-toggle="tooltip" data-placement="top" title="Inactive"><i class="fas fa-times"></i></a>--}}
                                        {{--                                @else--}}
                                        {{--                                    <a href="{{ route('expense.active', $expense->id) }}" class="pr-1 pl-1 rounded badge-success" data-toggle="tooltip" data-placement="top" title="Active"><i class="fas fa-check"></i></a>--}}
                                        {{--                                @endif--}}
                                    </td>
                                </tr>

                                @include('partials.modals.expense.edit')

                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    @include('partials.modals.expense.create')

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
    </script>
@endpush
