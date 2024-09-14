<x-layout>
<div class="container">
    <h3 style="text-align: center"  class="mt-5">Employee Management</h3>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="form-area">
                <form action="{{ route('employee.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Employee name</label>
                            <input type="text" name="emp_name" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">DOB</label>
                            <input type="date" name="dob" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="">Phone</label>
                            <input type="text" name="phone" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-4">
                            <input type="submit" class="btn btn-primary" value="Register">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Employee Name</th>
            <th>Date of Birth</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($employees as $employee )
        <tr>
            <td>{{ $employee->id }}</td>
            <td>{{ $employee->emp_name }}</td>
            <td>{{ $employee->dob }}</td>
            <td>{{ $employee->phone }}</td>
            <td>
                <div class="btn-group">
                <a class="btn btn-success btn-sm" href="{{ route('employee.edit', $employee->id) }}">Edit</a>
                <form action="{{ route('employee.destroy', $employee->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                </form>
            </div>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>
</x-layout>

@push('css')
    <style>
        .form-area{
            padding: 20px;
            margin-top: 20px;
              background-color:#FFFF00;
        }
        .bi-trash-fill{
            color:red;
            font-size: 18px;
        }
        .bi-pencil{
            color:green;
            font-size: 18px;
            margin-left: 20px;
        }
    </style>
@endpush
