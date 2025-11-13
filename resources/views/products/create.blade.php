@extends('admin.layouts.app')

@section('content')
    <h2 class="mb-4">Registrar Producto</h2>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('productStore') }}" method="post" enctype="multipart/form-data">
                @csrf

                <form method="POST" enctype="multipart/form-data">


                    <!-- Nombre del Producto -->
                    <div class="input-group input-group-outline mb-3">
                        <label for="name" class="form-label">Product name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                    </div>

                    <!-- Descripción del Producto -->
                    <div class="input-group input-group-outline mb-3">
                        <label for="description" class="form-label">description</label>
                        <textarea class="form-control" id="description" name="description" rows="3" > {{old('description')}}</textarea>
                    </div>

                    <!-- Precio del Producto -->
                    <div class="input-group input-group-outline mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price" name="price" step="0.01"
                            min="0" value="{{old('price')}}">
                    </div>


                    <!-- Marca del Producto -->
                    <div class="mb-3">
                        <select class="form-select" id="productBrand" required>
                            <option value="" selected disabled> --Brand-- </option>
                            <option value="electronics">Electrónica</option>
                            <option value="books">Libros</option>
                            <option value="clothing">Ropa</option>
                        </select>
                    </div>


                    <!-- Categoría del Producto -->
                    <div class="mb-3">
                        <select class="form-select" id="productCategory" required>
                            <option value="" selected disabled> --category-- </option>
                            <option value="electronics">Electrónica</option>
                            <option value="books">Libros</option>
                            <option value="clothing">Ropa</option>
                        </select>
                    </div>


                    <!-- Botón de Envío -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">create product</button>
                    </div>
                </form>

            </form>
        </div>
    </div>
@endsection