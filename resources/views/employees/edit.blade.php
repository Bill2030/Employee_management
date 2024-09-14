<x-layout>
    <div class="container">
        <h3  class="mt-5">Employee Edit</h3>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="form-area">
                    <form action="{{ route('employee.update', $employee->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Employee name</label>
                                <input type="text" name="emp_name" class="form-control" value="{{ old('emp_name', $employee->emp_name) }}">
                            </div>
                            <div class="col-md-6">
                                <label for="">DOB</label>
                                <input type="date" name="dob" class="form-control" value="{{ old('dob', $employee->dob) }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">Phone</label>
                                <input type="text" name="phone" class="form-control" value="{{ old('phone', $employee->phone) }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-4">
                                <input type="submit" class="btn btn-warning" value="Update">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>


@push('css')
    <style>
        .form-area{
            padding: 20px;
            margin-top: 20px;
            background-color:#b3e5fc;
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
