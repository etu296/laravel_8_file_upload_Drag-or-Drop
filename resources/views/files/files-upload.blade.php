@extends('welcome')
@section('content')

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="row mb-3">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
            <a class="btn btn-success" href="{{ route('files.Create') }}" > <i class="fas fa-upload fa-2x"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="container">
        <table class="table table-bordered table-responsive-lg thead-dark text-center">
            <thead class="thead-dark ">
                <tr>
                    <th>No</th>
                    <th>File Name</th>
                    <th>Date Created</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($files as $key=>$file)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$file->filename}}</td>
                    <td>{{date_format($file->created_at, 'jS M Y') }}</td>
                    <td>
                        <form>

                            <button type="submit" title="delete" style="border: none; background-color:transparent;">
                                <i class="fas fa-trash fa-lg text-danger"></i>

                            </button>
                        </form>
                    </td>
                </tr>
               @endforeach
            </tbody>
        </table>
    </div>
@endsection