<div class="header contenedor">
    <p>Panel Administrativo</p>
</div>
<div class="cont menu">
  <div class="inline middle">
    <img src="imagenes/logo.png">
  </div>
  <div class="inline middle">
  <a href="panel.php">Panel</a>
  </div>
  <div class="inline middle opcionesPanel">
    <div class="fecha">
      <script type="text/javascript">
        var d=new Date();
        
        var dia=new Array(7);
        dia[0]="Domingo";
        dia[1]="Lunes";
        dia[2]="Martes";
        dia[3]="Miercoles";
        dia[4]="Jueves";
        dia[5]="Viernes";
        dia[6]="Sabado";
        var mes=new Array(12);
        mes[0]="Enero";
        mes[1]="Febrero";
        mes[2]="Marzo";
        mes[3]="Abril";
        mes[4]="Mayo";
        mes[5]="Junio";
        mes[6]="Julio";
        mes[7]="Agosto";
        mes[8]="Septiembre";
        mes[9]="Octubre";
        mes[10]="Noviembre";
        mes[11]="Diciembre";
            
        document.write(dia[d.getDay()] + " " + d.getDate() + " de "  + mes[d.getMonth()] + " " + d.getFullYear() + " " + d.getHours() + ":" + d.getMinutes());
        </script>
    </div>
  </div>
  <div class="inline middle">
    <div class="inline middle">
      <a href="cerrarSesion.php">Cerrar sesión</a>
    </div>
    <div class="inline middle">
    <img class="imgCerrar" src="imagenes/cerrar.png">
    </div>
  </div>
</div>  