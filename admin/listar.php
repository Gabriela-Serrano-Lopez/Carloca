<div class="content-container" style=" text-aling: center;width:100%;padding-left:5px">
                <div class="container">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="text-align: center; font-size:15px;background-color:#9DEBD1 ">
                            Panel de usuarios
                            <br>
                            <a class="btn btn-success" href="./formulario.php" style="font-size:15px; margin: 10px">Nuevo <i class="fa fa-plus"></i></a>
                            <br>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th width="4%">ID</th>
                                            <th width="18%">Usuario</th>
                                            <th width="24%">Email</th>
                                            <th width="19%">Rol</th>
                                            <th width="24%">Password</th>
											<th colspan="2">Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									require_once '../DBconect.php';
									$select_stmt=$db->prepare("SELECT id,username,email,role FROM usuario;");
									$select_stmt->execute();
									
									while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
									{
									?>
                                        <tr>
                                            <td><?php echo $row["id"]; ?></td>
                                            <td><?php echo $row["username"]; ?></td>
                                            <td><?php echo $row["email"]; ?></td>
                                            <td><?php echo $row["role"]; ?></td>
                                            <td>*******</td>
                                            <td><a class="btn btn-warning" href="<?php echo "editar.php?id=" . $row["id"]?>"><i class="fa fa-edit"></i></a></td>
				                         	<td><a class="btn btn-danger" href="<?php echo "eliminar.php?id=" . $row["id"]?>"><i class="fa fa-trash"></i></a></td>
				
										 </tr>
									<?php 
									}
									?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
		
	</div>
			
	</div>