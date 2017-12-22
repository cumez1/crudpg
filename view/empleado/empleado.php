<h1 class="page-header">Empleado</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=empleado&a=Nuevo">Nuevo Empleado</a>
</div>

<table class="table table-striped" id="table-result">
    <thead>
        <tr>
            <th style="width:180px;">#</th>
            <th style="width:180px;">Primer Nombre</th>
            <th style="width:120px;">Segundo Nombre</th>
            <th style="width:120px;">Primer Apellido</th>
            <th style="width:120px;">Segundo Apellido</th>
            <th style="width:120px;">DPI</th>
        </tr>
    </thead>
    <tbody>
        <?php $registros = count($data);?>
        <?php $numero = 1; ?>
        <?php for ($i=0; $i < $registros; $i++): ?>
            <tr>
                <td>
                    <?php echo $numero; ?>
                </td>
                <td>
                    <?php echo $data[$i]['primer_nombre']; ?>
                </td>
                <td>
                    <?php echo $data[$i]['segundo_nombre']; ?>
                </td>
                <td>
                    <?php echo $data[$i]['primer_apellido']; ?>
                </td>
                <td>
                    <?php echo $data[$i]['segundo_apellido']; ?>
                </td>
                <td>
                    <?php echo $data[$i]['dpi']; ?>
                </td>
            </tr>
            <?php $numero++; ?>
        <?php endfor; ?>
    </tbody>
</table>
