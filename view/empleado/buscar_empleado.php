<h1 class="page-header">Buscar Empleado</h1>

<table class="table table-striped" id="table-result">
    <thead>
        <tr>
            <th style="width:180px;">Primer Nombre</th>
            <th style="width:120px;">Segundo Nombre</th>
            <th style="width:120px;">Primer Apellido</th>
            <th style="width:120px;">Segundo Apellido</th>
            <th style="width:120px;">DPI</th>
            <th style="width:120px;">Accion</th>
        </tr>
    </thead>
    <tbody>
        <?php $registros = count($data);?>
        <?php $numeroFila = 1;?>
        <?php for ($i=0; $i < $registros; $i++): ?>
            <tr>
                <td>
                    <?php echo $numeroFila; ?>
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
                <td>
                    <a type="button" class="btn btn-danger btn-xs">
                        <i class="fa fa-times" aria-hidden="true"></i>
                        Eliminar
                    </a>
                    <a type="button" class="btn btn-warning btn-xs" href="?c=empleado&a=Editar&id=<?php echo $data[$i]['id'] ?>">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        Editar
                    </a>
                </td>
            </tr>
            <?php $numeroFila++;?>
        <?php endfor; ?>
    </tbody>
</table>
