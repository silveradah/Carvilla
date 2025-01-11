<x-layout>
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Operation completed successfully.
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        
    @endif

    <h1>All Cars</h1>

    <form action="{{route('cars.index')}}" method="GET" class="input-group w-50" >
        <input type="search" class="form-control" name="search" id="search">
        <button class="btn btn-primary">Search</button>
    </form>

   <div class="row">
     @foreach ($cars as $car)
        <div class="col-md-4">
            <p>{{$car->name}}</p>
            <img src="{{asset('storage/'.$car->photo)}}" alt="">
            <p>{{$car->description}}</p>

            <div class="d-flex gap-2">
                <a href="{{route('cars.show', $car->id)}}"class="btn btn-sm btn-primary">Car Details</a>
                <a href="{{route('cars.edit', $car->id)}}"class="btn btn-sm btn-primary">Edit</a>

                <form action="{{route('cars.delete', $car->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">
                        DELETE
                    </button>
        
                </form>
            </div>
        </div>
        
    @endforeach
   </div >
   <div class="d-flex justify-content-center">
    {{$cars->links()}}
   </div>
</x-layout>
