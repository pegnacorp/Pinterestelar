<?php

class UserList extends View{
	function listUsers($users){
		$i = 0;
		while(count($users)> $i){
			$usuarioActual = $users[$i];
			/*$manejadorUrl = new ManejadorUrl();
			$parametros = $manejadorUrl->getParametros();
			echo $parametros["id"];*/
			$id = $usuarioActual->id;
			echo $usuarioActual->nombre;
			echo "<a href='../user/modify/?id=".$id."'>Modificar usuario</a>";
			echo " <a href='../user/delete/?id=".$id."'>Eliminar usuario</a><br>";
			echo "--------------------------------<br/>";
			$i++;
		}
		echo "<a href='../add/?d'>Nuevo usuario</a>";
	}
}
?>