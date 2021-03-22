<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Crear Libro</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('libros.index') }}"> Index</a>
        </div>
    </div>
</div>
<form action="{{ route('libros.store') }}" method="POST">
    @csrf 
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>titulo:</strong>
                <input type="text" name="title" class="form-control" placeholder="Enter Title">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>descripcion:</strong>
               <input type="text" name="descripcion" class="form-control" placeholder="Enter Description">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>contenido:</strong>
                <input type="text" name="contenido" class="form-control" placeholder="Enter contenido">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Eviar</button>
        </div>
    </div>
   
</form>