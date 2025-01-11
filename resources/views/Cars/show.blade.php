<x-layout>
    
    <h1>Car Details</h1>
    <p><strong>Car Name:</strong> {{ $car->name }}</p>
    <img src="{{asset('storage/'.$car->photo)}}" class="img-fluid" alt="">
    <p><strong>Model:</strong> {{ $car->model->name ?? 'No model assigned' }}</p>
    <p><strong>Year:</strong> {{ $car->year }}</p>
    <p><strong>Description:</strong> {{ $car->description }}</p>

    <div class="d-flex gap-2">
        
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
        



</x-layout>


