@extends('admin.layouts.app')

@section('content')
    <h2 class="mb-4">Registrar Producto</h2>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('productStore') }}" method="post" enctype="multipart/form-data">
                @csrf

                <form method="POST" enctype="multipart/form-data">


                    <!-- Nombre del Producto -->
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <div class="input-group input-group-outline mb-3">
                        <label for="name" class="form-label">Nombre del Producto</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                    </div>

                    <!-- Descripción del Producto -->
                    @error('description')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <div class="input-group input-group-outline mb-3">
                        <label for="description" class="form-label">Descripción</label>
                        <textarea class="form-control" id="description" name="description" rows="3" > {{old('description')}}</textarea>
                    </div>

                    <!-- Precio del Producto -->
                    @error('price')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <div class="input-group input-group-outline mb-3">
                        <label for="price" class="form-label">Precio</label>
                        <input type="number" class="form-control" id="price" name="price" step="0.01"
                            min="0" value="{{old('price')}}">
                    </div>


                    <!-- Marca del Producto -->
                    @error('brand')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <div class="input-group input-group-outline mb-3">
                        <select name="brand" class="form-control" id="brandCategory">
                            <option selected disabled>-- Selecciona una marca --</option>
                            @foreach ($brands as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>


                    <!-- Categoría del Producto -->
                    @error('category')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <div class="input-group input-group-outline mb-3">
                        <select name="category" class="form-control" id="productCategory">
                            <option selected disabled>-- Selecciona una categoría --</option>
                            @foreach ($categories as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Botón de Envío -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Guardar Producto</button>
                    </div>
                </form>

            </form>
        </div>
    </div>
@endsection