@extends('admin.layouts.app')

@section('content')
    <h2 class="mb-4">Registrar Producto</h2>
    <div class="card">
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">


                <form method="POST" enctype="multipart/form-data">


                    <!-- Nombre del Producto -->
                    <div class="input-group input-group-outline mb-3">
                        <label for="name" class="form-label">Nombre del Producto</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <!-- Descripción del Producto -->
                    <div class="input-group input-group-outline mb-3">
                        <label for="description" class="form-label">Descripción</label>
                        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                    </div>

                    <!-- Precio del Producto -->
                    <div class="input-group input-group-outline mb-3">
                        <label for="price" class="form-label">Precio</label>
                        <input type="number" class="form-control" id="price" name="price" step="0.01"
                            min="0" required>
                    </div>


                    <!-- Marca del Producto -->
                    <div class="input-group input-group-outline mb-3">

                        <select class="form-control" id="brandCategory">
                            <option value="" selected disabled>-- Selecciona una marca --</option>
                            @foreach ($brands as $item)
                                <option value="{{$item->id}}" >{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>


                    <!-- Categoría del Producto -->
                    <div class="input-group input-group-outline mb-3">

                        <select class="form-control" id="productCategory">
                            <option value="" selected disabled>-- Selecciona una categoría --</option>
                            @foreach ($categories as $item)
                                <option value="{{$item->id}}">{{ $item->name }}</option>
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