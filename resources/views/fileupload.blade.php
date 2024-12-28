@extends('app')

@section('content')
    <section>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5 mb-5">
                 <div class="card-body">
                   <form action="{{ route('file.path') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                         <div class="mb-3">
                             <label for="" class="form-label">File Upload</label>
                             <input type="file" class="form-control" id="" name="file">
                             @error('file')
                                <span class="text-danger">{{ $message }}</span>                                 
                             @enderror
                         </div>
                         <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                 </div>
                 <table>
                    <tbody>
                        @foreach ($files as $file )
                            <td><img style="width: 100px"src="{{ asset('storage/' . $file->file_path )}}" alt=""></td>
                        @endforeach
                    </tbody>
                   <table>
                    <hr>
                    <table>
                        <tbody>
                            <td>
                                <a href="{{ route('file.download') }}">Download File</a>
                            </td>
                        </tbody>
                    </table>
                </div>
             </div>
        </div>
    </section>
@endsection
















