<div class="container">
    <h2 class="form-signin-heading">Usuarios</h2>
    <div class="row">
        <div class="col-lg-12">
            <a href="<?= $data['base_url'] ?>/user/create" class="btn btn-info" >Agregar</a>
        </div>
        <div>&nbsp;</div>
    </div>
    <?php
    if (isset($data['error'])) {
        ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-dismissible alert-danger">
                    <!--                    <button type="button" class="close" data-dismiss="alert">&times;</button>-->
                    <strong><?= Helper::getValueSecurely($data, 'error', '') ?></strong>
                </div>
            </div>
        </div>
        <?php
    } else {
        ?>
        <table class="table table-striped table-hover ">
            <thead>
                <tr>
                    <th>Usuario</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Rol</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data['data'] as $key => $user) {
                    ?>
                    <tr>
                        <td><?= Helper::getValueSecurely($user, 'username', '') ?></td>
                        <td><?= Helper::getValueSecurely($user, 'firstname', '') ?></td>
                        <td><?= Helper::getValueSecurely($user, 'lastname', '') ?></td>
                        <td><?= Helper::getValueSecurely($user, 'role_name', '') ?></td>
                        <td>
                            <a href="<?= $data['base_url'] ?>/user/detail/<?= Helper::getValueSecurely($user, 'id', '') ?>" class="btn btn-success" >Ver</a>
                            <a href="<?= $data['base_url'] ?>/user/edit/<?= Helper::getValueSecurely($user, 'id', '') ?>" class="btn btn-primary" >Editar</a>
                            <a href="<?= $data['base_url'] ?>/user/delete/<?= Helper::getValueSecurely($user, 'id', '') ?>" class="btn btn-danger" >Eliminar</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <?php
    }
    ?>
</div>