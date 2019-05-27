<!DOCTYPE html>
<html>
<body>
    <h1>Nuevo Usuario</h1>
    <hr>
        <table border="1">
            <tr>
		        <td>Nombre Usuario:</td>
                <td>
                       {{$infoU["nombreDeU"]}}  
                </td>
            </tr>
		    <tr>
		        <td>Contraseña:</td>
		        <td>
                    {{$infoU["contraseñaU"]}} 
                </td>
            </tr>
            <tr>
		        <td>Confirmar Contraseña:</td>
		        <td>
                    {{$infoU["confirmarCU"]}}      
                </td>
            </tr>
            <tr>
		        <td>Correo:</td>
		        <td>
                    {{$infoU["correoU"]}}  
                </td>
            </tr>
        </table>    
        <hr>
        @if($infoU["contraseñaU"] != $infoU["confirmarCU"])
            <p>No se registro</p>
        @endif
</body>
</html>