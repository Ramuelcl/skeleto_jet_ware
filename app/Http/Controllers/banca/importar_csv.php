<?php // Recibe la información del formulario

function post_importar_csv()
{
    try {
        if (!check_posted_data(['csrf'], $_POST) || !Csrf::validate($_POST["csrf"])) {
            throw new Exception("Acceso no autoritzado.");
        }

        $rows     = [];
        $total    = 0;
        $inserted = 0;
        $errors   = 0;

        if (!isset($_FILES["archivo"])) {
            throw new Exception("Selecciona un archivo CSV válido.");
        }

        $file     = $_FILES["archivo"];
        $tmp      = $file["tmp_name"];
        $filename = $file["name"];
        $size     = $file["size"];

        if ($size < 0) {
            throw new Exception("Selecciona un archivo válido por favor.");
        }

        $handle = fopen($tmp, "r");

        while (($data = fgetcsv($handle)) !== false) {
            $rows[] = $data;
        }

        unset($rows[0]); // se eliminan las cabeceras
        $total = count($rows);

        if ($total <= 0) {
            throw new Exception("El archivo proporcionado está vacio.");
        }

        // Insertando información
        foreach ($rows as $r) {
            $data =
        [
          'titulo'      => $r[0],
          'contenido'   => $r[1],
          'creado'      => now(),
          'actualizado' => now()
        ];

            if (Model::add('posts', $data) === false) {
                $errors++;
                continue;
            }

            $inserted++;
        }

        Flasher::new(sprintf('Se han insertado <b>%s</b> de <b>%s</b> registros con éxito.', $inserted, $total), 'success');

        if ($errors > 0) {
            Flasher::new(sprintf('Tuvimos problemas al importar <b>%s</b> registros.', $errors), 'danger');
        }

        Redirect::back();
    } catch (Exception $e) {
        Flasher::new($e->getMessage(), 'danger');
        Redirect::back();
    }
}
