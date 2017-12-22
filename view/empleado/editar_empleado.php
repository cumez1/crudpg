<h1 class="page-header">Nuevo Registro</h1>
<ol class="breadcrumb">
  <li><a href="?c=empleado">Empleado</a></li>
  <li class="active">Nuevo Registro</li>
</ol>
<form id="frm-producto" action="?c=empleado&a=confirmarEdicion" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Primer Nombre</label>
        <input type="text" name="primer_nombre" value="<?php echo $datoEmpleado['primer_nombre']; ?>" class="form-control" placeholder="Primer Nombre" required autofocus>
    </div>
    <div class="form-group">
        <label>Segundo Nombr</label>
        <input type="text" name="segundo_nombre" value="<?php echo $datoEmpleado['segundo_nombre']; ?>" class="form-control" placeholder="Segundo Nombre">
    </div>
    <div class="form-group">
        <label>Primer Apellido</label>
        <input type="text" name="primer_apellido" value="<?php echo $datoEmpleado['primer_apellido']; ?>" class="form-control" placeholder="Primer Apellido" required>
    </div>
    <div class="form-group">
        <label>Segundo Apellido</label>
        <input type="text" name="segundo_apellido" value="<?php echo $datoEmpleado['segundo_apellido']; ?>" class="form-control" placeholder="Segundo Apellido">
    </div>
    <div class="form-group">
        <label>DPI</label>
        <input type="text" name="dpi" value="<?php echo $datoEmpleado['dpi']; ?>" class="form-control" placeholder="DPI" required>
    </div>
    <input type="text" name="id" value="<?php echo $_REQUEST['id']; ?>" hidden>
    <hr />
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>
