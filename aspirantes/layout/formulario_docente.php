<!DOCTYPE html>
<html lang="es" dir="ltr">    <!--ltr iza derecha  rtl dera a izq  auto usuario decide -->
	<head>
		<meta charset="utf-8"/>
		<meta charset="iso-8559-1"/>
		<meta name="description" content="Pagina de pre-registro Colegio Baja California"/>
		<meta name="keywords" content="Pre registro web"/>
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		
		<meta http-equiv="Expires" content="0">
        <meta http-equiv="Last-Modified" content="0">
        <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
        <meta http-equiv="Pragma" content="no-cache">
        
        
        <script>
           miEdad;
           /*
            function ShowSelected()
                {
                 Para obtener el valor 
                var cod = document.getElementById("nivel").value;
                alert(cod);
                 
                // Para obtener el texto 
                var combo = document.getElementById("nivel");
                var selected = combo.options[combo.selectedIndex].text;
                alert(selected);
                }*/
              
                
       
              
              function dameEdad()
               {
                  
                   
                   var an = document.getElementById("miYear").value; //año ingresado en input de fecha nacimiento
                   var year = new Date().getFullYear();      //año actual
                   miEdad = parseInt(year)-parseInt(an); //años calculados
                   //var s = document.getElementById("nivel");
                   var option = document.createElement("option");
                   var s = document.getElementById("nivel");
              
                  //elemento var = document.getElementById("top");
                    //while (s.firstChild) {
                      //s.removeChild(2);
                    //}
                                      
                  if (miEdad>=3 && miEdad<6)
                     {
                              if(s.value=="KINDER")
                               {
                                 
                               }else
                               {
                                  option.value="KINDER";
                                  option.text="KINDER";
                                  s.appendChild(option) // y aqui lo añadiste 
                               }
                           
                              
                    }
                

                  if (miEdad>=6 && miEdad<12)
                     {
                        if(s.value=="PRIMARIA")
                        {
                            
                        }else
                        {
                         option.value="PRIMARIA";
                         option.text="PRIMARIA";
                         s.appendChild(option) // y aqui lo añadiste
                        }
                       
                    }
              
              
              
                   if (miEdad>=12 && miEdad<16)
                     {
                        
                        if(s.value=="SECUNDARIA")
                         {
                             
                         }else
                         {
                            option.value="SECUNDARIA";
                            option.text="SECUNDARIA";
                            s.appendChild(option) // y aqui lo añadiste 
                         }
                        
                    }
              
               }
               
           
              
              function cargarNivel() 
                   {
                       var array = ["KINDER", "PRIMARIA", "SECUNDARIA"];    
                     
                        array.sort();
                        addOptions("grd", array);
                    }
              
              //Función para agregar opciones a un <select>.
            function addOptions(domElement, array) 
                  {
                    var selector = document.getElementsByName(domElement)[0];
                    for (ni in array) 
                        {
                            var opcion = document.createElement("option");
                            opcion.text = array[ni];
                            // Añadimos un value a los option para hacer mas facil escoger los pueblos
                            opcion.value = "";
                            selector.add(opcion);
                        }
                  }
              
              
              function cargarGrados()
                  {
                       var listaGrados = 
                               {
                                KINDER: ["1", "2", "3"],
                                PRIMARIA: ["1", "2", "3","4","5","6"],
                                SECUNDARIA: ["1", "2", "3"]
                               } 
                      
                    /*if (miEdad>3 && miEdad<6)  
                    {
                          var listaGrados = 
                               {
                                KINDER: ["1", "2", "3"]
                               }
                    }
                  
                     if (miEdad>=6 && miEdad<12)
                     {
                             var listaGrados = 
                               {
                                 PRIMARIA: ["1", "2", "3","4","5","6"]
                               }
                     }
                     
                     
                     if (miEdad>=12 && miEdad<16)
                     {
                         var listaGrados = 
                               {
                                 SECUNDARIA: ["1", "2", "3"]
                               }
                     }*/
                     
                  
                 var provincias = document.getElementById('nivel');
                 var pueblos = document.getElementById('grado');
                 var provinciaSeleccionada = provincias.value;
                
                
                  // Se limpian los grados
                  
                 pueblos.innerHTML = '<option value="" disabled="disabled" selected="selected" >--Seleccione un grado--</option>'
    
    
    
              if(provinciaSeleccionada !== '')
                {
                     
                      provinciaSeleccionada = listaGrados[provinciaSeleccionada]
                      provinciaSeleccionada.sort()
                      
                   
                    
                      // Insertamos grados
                      provinciaSeleccionada.forEach(function(pueblo){
                        let opcion = document.createElement('option')
                        opcion.value = pueblo
                        opcion.text = pueblo
                        pueblos.add(opcion)
                      });
                }
    
           
                  }
           // Iniciar la carga de provincias solo para comprobar que funciona
          cargarGrados();
    
    
        </script>
        
        
        
        
   </head>
   
   <body>
      <!-- form -->
      <div class="container main-bothside">
     
         <form action="" method="post">
            <div class="main-title">
               <h2 class="text-center"> Datos del docente</h2>
            </div>
			
            <div class="row ">
           
                <div class="col-12 col-lg-4 col-md-4">
                  <input type="text" class="form-control" placeholder="Nombre" maxlength="30" minlength="2" required="" name="nombres">
               </div> 
               <div class="col-12 col-lg-4 col-md-4">
                  <input type="text" class="form-control" placeholder="Apellido Paterno" maxlength="30" minlength="2" required="" name="ap">
               </div>
               <div class="col-12 col-lg-4 col-md-4">
                  <input type="text" class="form-control" placeholder="Apellido Materno" maxlength="30" minlength="2" name="am">
               </div>
            </div>
               <br>
               <h8>Fecha de Nacimiento</h8>
            <div class="row ">
                  
                
                     <div class="col-4 col-md-2 col-lg-2">
                     
                        <select class="form-control" placeholder="SIA" buttom" name="dd">
                        <option disabled="disabled" selected="">DIA</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                        </select>
                     </div>

                     <div class="col-5 col-md-3 col-lg-2">
                        <select class="form-control" buttom" name="comboMes">
                        <option disabled="disabled" selected="">--MES--</option>
                              <option value="ENERO">ENERO</option>
                           <option value="FEBRERO">FEBRERO</option>
                           <option value="MARZO">MARZO</option>
                           <option value="ABRIL">ABRIL</option>
                           <option value="MAYO">MAYO</option>
                           <option value="JUNIO">JUNIO</option>
                           <option value="JULIO">JULIO</option>
                           <option value="AGOSTO">AGOSTO</option>
                           <option value="SEPTIEMBRE">SEPTIEMBRE</option>
                           <option value="OCTUBRE">OCTUBRE</option>
                           <option value="NOVIEMBRE">NOVIEMBRE</option>
                           <option value="DICIEMBRE">DICIEMBRE</option>
                           </select>
                     </div>

                     <div class="col-3 col-md-3 col-lg-2">
                        <input type="text" name="an" id="miYear" class="form-control"  placeholder="Año" minlength="4" maxlength="4" pattern="[0-9]+" onkeypress="return check(event)" required="" >
                     </div>

                     
                  </div>
               
               
             
<br>

                     <div class="row">
                        <div class="col-6 col-md-3 ">
                           <span class="text-muted small-font" for="inputNacionalidad ">Nacionalidad</span>
                           <select class="form-control buttom" name="comboNacionalidad">

                                 <option disabled="disabled" selected="">--Seleccione--</option>
                                 <option value="MEXICANO">MEXICANO</option>
                                 <option value="EXTRANJERO">EXTRANJERO</option>
                           </select>
                        </div>


                        <div class="col-6 col-md-3 ">
                           <span class="text-muted small-font">Nacimiento</span>
                           <input type="text" name="ln" class="form-control" placeholder="Lugar de Nacimiento" maxlength="15" required="">
                        </div>


                     </div> 

                        <br>



                     <!-- Fila TElefono, Celular y Email -->
                     <div class="row">
           
                        <div class="col-12 col-lg-4 col-md-4">
                           <input type="text" name="tf" class="form-control" placeholder="Telefono de Casa"pattern="[0-9]{10}" onkeypress="return check(event)" maxlength="10"  >
                        </div> 
                        <div class="col-12 col-lg-4 col-md-4">
                           <input type="text" name="tm" class="form-control" placeholder="Celular" required pattern="[0-9]{10}" onkeypress="return check(event)" maxlength="10">
                        </div>
                        <div class="col-12 col-lg-4 col-md-4">
                              <input type="email" name="ce1" class="form-control" placeholder="Email"  required minlength="5" maxlength="100" required pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}">
                        </div>
                     </div>
                  <hr>
<!-- Domicilio del Aspirante -->
                  <div class="main-title">
                      <h2 class="text-center">Domicilio</h2>
                   </div>
            <!-- Fila CAlle, Num. Inte., Num Exterior -->
            <div class="row">
           
               <div class="col-12  col-md-8 col-lg-8">
                  <input type="text" name="cll" class="form-control" placeholder="Calle" required="" minlength="1" maxlength="100">
                </div>
                
                 <div class="col-4  col-md-2 col-lg-2">
                 
                 
                  <input type="text" name="ne" class="form-control" placeholder="Num. Ext."  maxlength="6" pattern="[0-9]+" onkeypress="return check(event)" required>
               </div>
                
                
                
               <div class="col-4  col-md-2 col-lg-2">
               <input type="text" name="ni" class="form-control" placeholder="Num. Int."   maxlength="6" >
               
                  <!--<input type="text" name="ni" class="form-control" placeholder="Num. Int."   maxlength="6" pattern="[0-9]+" onkeypress="return check(event)">-->
               </div>
              
              
            </div>
        <br>
        <!-- Fila Fraccionamiento, c.P. y Localidad -->
            <div class="row">
               
               <div class="col-12  col-md-7 col-lg-6">
                  <input type="text" name="fr" class="form-control" placeholder="Fraccionamiento / Colonia" required="" maxlength="50">
               </div> 
               <div class="col-4  col-md-3 col-lg-3">
                  <input type="text" name="cp" class="form-control" placeholder="Codigo Postal" required="" minlength="5" maxlength="6" pattern="[0-9]+" onkeypress="return check(event)">
                </div>
               <div class="col-12  col-md-3 col-lg-3">
                  <input type="text" name="loc" class="form-control" placeholder="Localidad" required="" maxlength="20">
               </div>   
            </div>

 

             <hr>
             <!-- El alumno sera inscrito -->
             <div class="row">
               <div class="col-12 col-md-4 col-lg-6 main-title" >
                  <h4>Identificacion</h4>
                  <p style="color:black; font-size:15px;"> Identificacion</p>
                  <div class="col-6  col-md-4 col-lg-2">
                  <form action="index.php" method="POST" enctype="multipart/form-data"/>
                  Añadir: <input name="archivo" id="archivo" type="file"/>
               </form>
            </div>
               </div>

               
               <div class="col-6  col-md-4 col-lg-2">

                    <form action="index.php" method="POST" enctype="multipart/form-data"/>
                    Añadir: <input name="archivo" id="archivo" type="file"/>
                    <div class>
                  <span class="text-muted small-font">Tipo de documento</span>
                  <select class="form-control" name="grd" id="grado" >
                      <option disabled="disabled" selected="selected">--Seleccione--</option>
                      <option value="PENTECOSTES">Cedula</option>
                      <option value="PENTECOSTES">Certificado</option>
                      <option value="PENTECOSTES">Otro</option>
					   </select>	 
               </div>
                  </form>
                  
               </div>
               
               

            </div>   
            <hr>
            <div class="main-title">
               <h3 class="text-center" >Horario y campo de estudio de preferencia</h3>
            </div>
            
            <div class="col-6 col-md-3 ">
                              <span class="text-muted small-font">Area de estudio</span>
                           <select class="form-control buttom" name="comboReligion" id="religion">
                              <option disabled="disabled" selected="">Seleccion</option>
                              <option value="CATOLICO">Matematicas</option>
                              <option value="MORMON">Literatura</option>
                              <option value="TESTIGO DE JEHOVA">Arte</option>
                              <option value="CRISTIANO">Deportes</option>
                              <option value="PENTECOSTES">Informatica</option>
                              <option value="BUDISTA">Geografia</option>
                              <option value="JUDIO">Ciencias</option>
                           </select>
                        </div>

            <div class="row">
                  <div class="col-12 col-md-12 col-lg-12 ">
                  <input type="radio" name="transporte2" value="1">Matutino
                  <input type="radio" name="transporte2" value="2" checked> Intermedio
                  <input type="radio" name="transporte2" value="3">Vespertino
                  </div>
            </div> 
                  

            <hr>
                  
               <div class="main-title">
               <h3 class="text-center" >Contacto de emergencia</h3>
            </div>
            <br>
            <div class="row">
                  <div class="col-12 col-md-12 col-lg-12 ">
                     <p style="color:black; font-size:15px;"> I.- Datos del primer contacto</p>
                  </div>
            </div>   
            <div class="row">   
               <div class="col-7 col-md-7 col-lg-3 ">
                  <input type="text" class="form-control"  placeholder="Nombre " maxlength="100" name="he1">
     
               </div>

               <div class="col-12 col-lg-4 col-md-4">
                           <input type="text" name="tf" class="form-control" placeholder="Telefono"pattern="[0-9]{10}" onkeypress="return check(event)" maxlength="10"  >
                        </div> 

               <div class="col-5 col-md-4  col-lg-3 ">
                  <select class="form-control" id="gradosdos" name="gradosdos"   style="font-size:14px; width:80%">
                  <option disabled="disabled" selected="">Selecciona</option>
                              <option value="CATOLICO">Hermano/a</option>
                              <option value="MORMON">Esposo/a</option>
                              <option value="TESTIGO DE JEHOVA">Padre/Madre</option>
                              <option value="CRISTIANO">Familiar</option>
                              <option value="PENTECOSTES">Amigo</option>
               
                  </select>	 
                  </div>
            </div>     
 
               
               <hr>
              
               <div class="main-title">
                     <h3 class="text-center" >Comentarios</h3>
               </div>
               <br>
               <div class="form-control-w3l">
                 <textarea name="ap1" placeholder="Texto" maxlength="200"></textarea>
               </div>

               <br>
            <input type="submit" class="btn btn-primary btn-lg"  value="Enviar Información" id="boton" name="boton" >
         </form>
      </div>
     
  </div>
	  
	 </body>
	 
	 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
  </script>
  <script type="text/javascript" src="js/index.js"></script>

     <?php
	      //$root = realpath($_SERVER["DOCUMENT_ROOT"]); 
          include("funciones/misFunciones.php"); 
                  
          if (isset($_POST['boton']))     //si se presiono el boton  enviar                           {
            {   
                
                
                $apellidoP = strtoupper($_POST["ap"]);   //apellido p
                $apellidoM = strtoupper($_POST["am"]);   //apellido m
                $nombre = strtoupper($_POST["nombres"]);   //nombre
                $nombreCompleto = $apellidoP . " " . $apellidoM . " " .  $nombre;
                $dia = $_POST["dd"];   //dia
                $mes = strtoupper($_POST["comboMes"]);   //mes
                $aaaa = $_POST["an"];   //año
                $fNacimineto = $dia . "-" . $mes . "-" . $aaaa;
                $nacionalidad = strtoupper($_POST["comboNacionalidad"]);   //nacionalidad
                $lNacimineto = strtoupper($_POST["ln"]);   //lugar nacimiento
                $religion = strtoupper($_POST["comboReligion"]);   //religion
                $escuelaProcedencia = strtoupper($_POST["escP"]);   //escuela de procedencia
                $telFijo = $_POST["tf"];   //telefono fijo
                $telMovil = $_POST["tm"];   //tel movil
                $correoA = $_POST["ce1"];   //correo electronico
                $calle = strtoupper($_POST["cll"]);   //calle
                $numE = $_POST["ne"];   //numero exterior
                $numI = $_POST["ni"];   //numero interior
                $codigoPostal = $_POST["cp"];   //codigo postal
                $fracColonia = strtoupper($_POST["fr"]);   //fraccionamiento
                $localidad = strtoupper($_POST["loc"]);   //localidad
                $nivel = strtoupper($_POST["comboGrado"]);   //grado
                $nGrado = $_POST["grd"];   //numero de grado
                
                $nombreTutor = strtoupper($_POST["nomAp"]) . " " . strtoupper($_POST["nomAp1"]);   //nombre tutor
                $tutorTM = $_POST["telM"];   //tel movil
                $tutorProfesion = strtoupper($_POST["po"]);   //profesion tutor
                $tutorTrabajo = strtoupper($_POST["tra1"]);     //trabajo del padre
                
                
                $nombreMadre = strtoupper($_POST["nomAp2"]) . " " . strtoupper($_POST["nomAp22"]);   //nombre madre
                $telMadre = $_POST["telM2"];   //tel movil
                $profesionMadre = strtoupper($_POST["po2"]);   //profesion madre
                $trabajoMadre = strtoupper($_POST["tra2"]);     //trabajo del madre
                
                $h1 = strtoupper($_POST["he1"]);   //hermano 1
                $n1 = strtoupper($_POST["niveldos"]);   //nivel 1
                $g1 = strtoupper($_POST["gradosdos"]);   //grado 2
                
                $h2 = strtoupper($_POST["he2"]);   //hermano 2
                $n2 = strtoupper($_POST["niveltres"]);   //grado 2
                $g2 = strtoupper($_POST["gradostres"]);   //grado 3
                
                $ref1 = strtoupper($_POST["ap1"]);   //referencia 1
          
                
       


                if ($n1==1)
                  {
                     $nivel1 ="KINDER";
                  }

                  if ($n1==2)
                  {
                     $nivel1 ="PRIMARIA";
                  }

                  if ($n1==3)
                  {
                     $nivel1 ="SECUNDARIA";
                  }



                


                  if ($g1==1)
                  {
                     $grado1 ="PRIMERO";
                  }

                  if ($g1==2)
                  {
                     $grado1 ="SEGUNDO";
                  }

                  if ($g1==3)
                  {
                     $grado1 ="TERCERO";
                  }
                  if ($g1==4)
                  {
                     $grado1 ="PRIMERO";
                  }

                  if ($g1==5)
                  {
                     $grado1 ="SEGUNDO";
                  }

                  if ($g1==6)
                  {
                     $grado1 ="TERCERO";
                  }
                  if ($g1==7)
                  {
                     $grado1 ="CUARTO";
                  }
                  if ($g1==8)
                  {
                     $grado1 ="QUINTO";
                  }

                  if ($g1==9)
                  {
                     $grado1 ="SEXTO";
                  }

                  if ($g1==10)
                  {
                     $grado1 ="PRIMERO";
                  }
                  if ($g1==11)
                  {
                     $grado1 ="SEGUNDO";
                  }
                   if ($g1==12)
                  {
                     $grado1 ="TERCERO";
                  }
                  
                  

                  if ($n2==1)
                  {
                     $nivel2 ="KINDER";
                  }

                  if ($n2==2)
                  {
                     $nivel2 ="PRIMARIA";
                  }

                  if ($n2==3)
                  {
                     $nivel2 ="SECUNDARIA";
                  }

                
                  if ($g2==1)
                  {
                     $grado2 ="PRIMERO";
                  }
                  if ($g2==2)
                  {
                     $grado2 ="SEGUNDO";
                  }

                  if ($g2==3)
                  {
                     $grado2 ="TERCERO";
                  }

                  if ($g2==4)
                  {
                     $grado2 ="PRIMERO";
                  }
                  if ($g2==5)
                  {
                     $grado2 ="SEGUNDO";
                  }

                  if ($g2==6)
                  {
                     $grado2 ="TERCERO";
                  }

                  if ($g2==7)
                  {
                     $grado2 ="CUARTO";
                  }
                  if ($g2==8)
                  {
                     $grado2 ="QUINTO";
                  }
                  if ($g2==9)
                  {
                     $grado2 ="SEXTO";
                  }

                  if ($g2==10)
                  {
                     $grado2 ="PRIMERO";
                  }

                  if ($g2==11)
                  {
                     $grado2 ="SEGUNDO";
                  }
                  if ($g2==12)
                  {
                     $grado2 ="TERCERO";
                  }




                  //echo $nivel1;
                
                
                if (intval($dia)>31 || intval($dia)==0)   //si edad esta 0 o maytor a 31
                    {
                       echo'<script>alert("Dia de nacimiento fuera de rango...");</script>';
                    }elseif (intval($aaaa)<2005 || intval($aaaa)>2050) 
                    {
                      echo'<script>alert("Año de nacimiento fuera de rango...");</script>';
                    }else
                    {
                        date_default_timezone_set('America/Los_Angeles');
                        $Year = strftime("%Y");
                        $Mont = strftime("%m");
                        $fecharegistro=date('d-m-Y');
                        $edadCalculada=$Year-intval($aaaa);
                        //$diferenciaMes = 9 - getMonthRange($mes);  //9 es septiembre
                        $m = getMonthRange($mes);
                        $diferenciaMes = 9 - $m;  //9 es septiembre
                        $fn = $dia.$m.$aaaa;
                        if ($diferenciaMes<0)   //negativo entonces se resta un año es mas de septiembre
                        {
                         $edadReal= strval($edadCalculada-1) . " años a Septiembre";
                        }elseif($diferenciaMes==0)    //es septiembre
                        {
                         $edadReal = strval($edadCalculada) . " años a Septiembre";
                        }else                           //es antes de septiembre
                        {
                         $edadReal = strval($edadCalculada) . " años , " . strval($diferenciaMes) . " meses a Septiembre";
                        }
                          
                          InsertaDatosAspirante($nombreCompleto,$nombre,$apellidoP,$apellidoM,$fNacimineto,$fn,getMonthRange($mes),$aaaa,$lNacimineto,$nacionalidad,$edadReal,$escuelaProcedencia,$religion,$telFijo,$telMovil,$correoA,$fecharegistro,$Mont,$Year,$calle,strval($numE),strval($numI),strval($codigoPostal),$fracColonia,$localidad,$nivel,strval($nGrado),$nombreTutor,strval($tutorTM),$tutorProfesion,$tutorTrabajo,$nombreMadre,$telMadre,$profesionMadre,$trabajoMadre,$h1,$nivel1,$grado1,$h2,$nivel2,$grado2,$ref1);
                        
                    }
            }
    ?>
	 
	 
	 
	 
	 
	 </html>
    