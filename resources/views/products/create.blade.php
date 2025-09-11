<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Formulario Productos</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to right, #e0eafc, #cfdef3);
      height: 100vh;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }

    form {
      background: #ffffff;
      padding: 2rem 2.5rem;
      border-radius: 16px;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
      max-width: 480px;
      width: 100%;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    form:hover {
      transform: translateY(-4px);
      box-shadow: 0 12px 32px rgba(0, 0, 0, 0.15);
    }

    h2 {
      text-align: center;
      margin-bottom: 1.5rem;
      color: #333;
    }

    fieldset {
      border: none;
      margin: 0;
      padding: 0;
    }

    legend {
      font-weight: bold;
      color: #444;
      margin-bottom: 1rem;
      font-size: 1.1rem;
    }

    label {
      display: block;
      margin-bottom: 0.4rem;
      font-weight: 600;
      color: #555;
    }

    input[type="text"],
    input[type="file"],
    select,
    textarea {
      width: 100%;
      padding: 10px 12px;
      margin-bottom: 1.2rem;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 14px;
      background-color: #f9f9f9;
      transition: border-color 0.3s ease, background 0.3s ease;
    }

    input[type="text"]:focus,
    textarea:focus,
    select:focus {
      border-color: #007bff;
      background-color: #fff;
      outline: none;
    }

    textarea {
      resize: none;
    }

    button {
      width: 100%;
      padding: 12px;
      background: #007bff;
      border: none;
      border-radius: 8px;
      color: #fff;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s ease, transform 0.2s ease;
    }

    button:hover {
      background: #0056b3;
      transform: scale(1.03);
    }
  </style>
</head>
<body>
  <form action="" method="post">
    <h2>Registrar Producto</h2>
    <fieldset>
      <legend>Información del Producto</legend>

      <label for="name">Nombre</label>
      <input type="text" name="name" id="name" placeholder="Ej. Camiseta deportiva">

      <label for="description">Descripción</label>
      <textarea name="description" id="description" rows="4" placeholder="Breve descripción del producto"></textarea>

      <label for="price">Precio</label>
      <input type="text" name="price" id="price" placeholder="Ej. 29.99">

      <label for="category">Categoría</label>
      <select name="category" id="category">
        <option value="">-- Selecciona una categoría --</option>
        <option value="ropa">Ropa</option>
        <option value="tecnologia">Tecnología</option>
        <option value="hogar">Hogar</option>
        <option value="juguetes">Juguetes</option>
        <option value="alimentos">Alimentos</option>
      </select>

      <label for="brand">Marca</label>
      <input type="text" name="brand" id="brand" placeholder="Ej. Nike, Samsung">

      <label for="image">Imagen</label>
      <input type="file" name="image" id="image">
    </fieldset>

    <button type="submit">Guardar Producto</button>
  </form>
</body>
</html>
