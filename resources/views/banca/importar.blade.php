@
<div class="col-12">
  <div class="card">
    <div class="card-header">Completa el formulario</div>
    <div class="card-body">
      <form action="home/post_importar_csv" method="POST" enctype="multipart/form-data">
        <?php echo insert_inputs(); ?>

        <div class="mb-3">
          <label for="archivo">Selecciona un archivo <code>.csv</code></label>
          <input type="file" class="form-control" name="archivo" id="archivo"
            accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"
            required>
        </div>
        <button class="btn btn-success" type="submit">Importar</button>
      </form>
    </div>
  </div>
</div>
