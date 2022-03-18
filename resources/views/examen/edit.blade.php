 <style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}


.form-register {
  width: 400px;
  background: #921313;
  padding: 30px;
  margin: auto;
  margin-top: 100px;
  border-radius: 4px;
  font-family: 'calibri';
  color: white;
  box-shadow: 7px 13px 37px #000;
}

.form-register h4 {
  font-size: 22px;
  margin-bottom: 20px;
}

.controls {
  width: 100%;
  background: #ffffff;
  padding: 10px;
  border-radius: 4px;
  margin-bottom: 16px;
  border: 1px solid #1f53c5;
  font-family: 'calibri';
  font-size: 18px;
  color: rgb(0, 0, 0);
}

.form-register p {
  height: 40px;
  text-align: center;
  font-size: 18px;
  line-height: 40px;
}

.form-register a {
  color: rgb(0, 0, 0);
  text-decoration: none;
}

.form-register a:hover {
  color: white;
  text-decoration: underline;
}

.form-register .botons {
  width: 100%;
  background: #1f53c5;
  border: none;
  padding: 12px;
  color: white;
  margin: 16px 0;
  font-size: 16px;
}
 </style>
 <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="style.css">
      <title>Editar datos netflix</title>
    </head>
    <body style="background-color: #921313;"|>
      <section class="form-register">
        <h4>Editar mis Datos</h4>
        <form action="{{ route('netflix.update', ['netflix']) }}" enctype="multipart/form-data" class="row" method="POST">
            @method('PUT')
            @csrf
              <input class="controls placeholder" type="text" name="nick_name" id="nick_name" placeholder="Ingrese su Apodo" value="">
              <input class="controls placeholder" type="text" name="name" id="name" placeholder="Ingrese su Nombre" value="{}">
              <input class="controls placeholder" type="text" name="last_name" id="last_name" placeholder="Ingrese su Apellido" value="}">
              <input class="controls placeholder" type="number" name="phone" id="phone" placeholder="Ingrese su N° Telefono" value="">
              <input class="controls placeholder" type="number" name="dni" id="dni" placeholder="Ingrese su N° DNI" value="">
        </form>
      </section>

    </body>
    </html>
