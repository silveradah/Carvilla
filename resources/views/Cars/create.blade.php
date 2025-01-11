<x-layout>
    <h1>Add a New Car</h1>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Add a New Car</h1>
        <form action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data" class="row g-3">
            @csrf
            <div class="col-md-6">
                <label for="name" class="form-label">Car Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" placeholder="Enter car name"
                    required>
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="year" class="form-label">Year</label>
                <input type="text" name="year" id="year" class="form-control" value="{{old('year')}}" placeholder="Enter car year"
                    required>
                    @error('year')
                         <div class="text-danger">{{ $message }}</div>
                    @enderror
            </div>

            <div class="col-md-6">
                <label for="transmission" class="form-label">Transmission</label>
                <input type="text" name="transmission" id="transmission" class="form-control" value="{{old('transmission')}}"
                    placeholder="Enter transmission type">
                    @error('transmission')
                         <div class="text-danger">{{ $message }}</div>
                    @enderror
            </div>

            <div class="col-md-6">
                <label for="body_type" class="form-label">Body Type</label>
                <input type="text" name="body_type" id="body_type" class="form-control" value="{{old('body_type')}}"
                    placeholder="Enter body type">
                    @error('body_type')
                         <div class="text-danger">{{ $message }}</div>
                    @enderror
            </div>

            <div class="col-md-6">
                <label for="make" class="form-label">Make</label>
                <input type="text" name="make" id="make" class="form-control" value="{{old('make')}}" placeholder="Enter car make">
                @error('make')
                         <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="condition" class="form-label">Condition</label>
                <input type="text" name="condition" id="condition" class="form-control" value="{{old('condition')}}"
                    placeholder="Enter car condition">
                    @error('condition')
                         <div class="text-danger">{{ $message }}</div>
                    @enderror
            </div>

            <div class="col-md-6">
                <label for="model" class="form-label">Model</label>
                <input type="text" name="model" id="model" class="form-control" value="{{old('model')}}" placeholder="Enter car model"
                    required>
                    @error('model')
                         <div class="text-danger">{{ $message }}</div>
                    @enderror
            </div>

            <div class="col-md-6">
                <label for="price" class="form-label">Price</label>
                <input type="text" name="price" id="price" class="form-control" value="{{old('price')}}" placeholder="Enter car price"
                    required>
                    @error('price')
                         <div class="text-danger">{{ $message }}</div>
                    @enderror
            </div>

            <div class="col-12">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control" value="{{old('description')}}" rows="3"
                    placeholder="Enter a brief description"></textarea>
                    @error('description')
                         <div class="text-danger">{{ $message }}</div>
                    @enderror
            </div>

            <div class="col-md-6">
                <label for="speed" class="form-label">Speed</label>
                <input type="text" name="speed" id="speed" class="form-control" value="{{old('speed')}}" placeholder="Enter car speed">
                @error('speed')
                         <div class="text-danger">{{ $message }}</div>
                    @enderror
            </div>

            <div class="col-md-6">
                <label for="engine" class="form-label">Engine</label>
                <input type="text" name="engine" id="engine" class="form-control" value="{{old('engine')}}"
                    placeholder="Enter engine type">
                    @error('engine')
                         <div class="text-danger">{{ $message }}</div>
                    @enderror
            </div>

            <div class="col-12">
                <label for="photo" class="form-label">Photo</label>
                <input type="file" name="photo" id="photo" class="form-control" value="{{old('photo')}}" required>
                @error('file')
                         <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </div>
        </form>
    </div>

</x-layout>
                                    