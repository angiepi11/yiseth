<?php
namespace App\Controllers;

class Home extends BaseController
{
    public $session;
  // funcion
    public function __construct() {
      $this ->session = \config\Services::session();
     
    }
    public function index():string
    {
      $productoModel = new \App\Models\Producto();
      $data['productos'] = $productoModel->findAll();
      $data['carrito'] = $productoModel->findAll();
        

        return view('usuario/index',$data);

    }
    public function producto():string
    {
      $productoModel = new \App\Models\Producto();
      $data['productos'] = $productoModel->findAll();
      

        return view('usuario/producto',$data);

    }
    
    public function login():string
    {
        return view('usuario/login');

    }
    public function loginadmin():string
    {
        return view('admin/loginadmin');

    }
    public function registro():string
    {
        return view('usuario/registro');

    }
    public function inicio():string
    {
        return view('admin/inicio');

    }
    public function contacto():string
    {
      $contactoModel = new \App\Models\contacto();
      $data['contactos'] = $contactoModel->findAll();
       

        return view('usuario/contacto',$data);

    }
   
    public function categoria():string
    {
      $productoModel = new \App\Models\Producto();
      $data['productos'] = $productoModel->findAll();

        return view('usuario/categoria',$data);

    } 
    public function seguimiento():string
    {
        return view('usuario/seguimiento');

    }
    public function pago():string
    {
        return view('usuario/pago');


    }
    public function encriptar()
    {
        return view('admin/encriptar');
    }
    public function productos_admin():string
    {
      $productoModel = new \App\Models\Producto();
      $data['productos'] = $productoModel->findAll();
        return view('admin/productos',$data);

    }
    public function usuarios_admin():string
    {
      $usuarioModel = new \App\Models\usuario();
      $data['usuarios'] = $usuarioModel->findAll();

        return view('admin/usuarios',$data);

    }
    public function soporte_admin():string
    {
      $contactoModel = new \App\Models\contacto();
      $data['contactos'] = $contactoModel->findAll();

        return view('admin/soporte',$data);

    }
    public function adminguardar()
    {
      //cargar el modelo 
      $adminModel= model('admin');

      //  ORM
      // select *from usuario whwre correo = x;

      // seleciona un dato de la base de datos 
      $resultado1 = $adminModel->getWhere(
        ['usuario_admin'=>$this->request->getPost('usuario_admin')]); 
      // selecciona la fila 0, pero antes de debe estar un getrow  o getc
      $usuario1 = $resultado1->getRow();
     
      if($usuario1){
      //  var_dump($usuario1);
        
      //contrañena encriptada 
          if(password_verify(strval($this->request->getPost('clave')),
           $usuario1->clave)){

         $datos1 = [
           'id' => $usuario1->id_admin, 
            'usuario_admin' => $usuario1->nombre,
            
        ];
          //guardar datos de sesion
          $this->session->set($datos1);    
          return redirect()->route('inicio');
         }
        }

         $this->session->setFlashdata('admin',true);    
        return redirect()->route('loginadmin');
    }
    
  
  
    public function cerrar_sesion(){

      $this->session->remove("Id");
      $this->session->remove("usuario");
      return redirect()->route('/');
    }

    public function cerrar_sesion_admin(){

      $this->session->remove("Id");
      $this->session->remove("nombre");
      return redirect()->route('loginadmin');
    }

    public function guardarl()
    {
        //cargar el modelo 
      $usuarioModel= model('usuario');

      //  ORM
      // select *from usuario whwre correo = x;

      // seleciona un dato de la base de datos 
      $resultado = $usuarioModel->getWhere(
        ['usuario'=>$this->request->getPost('usuario')]
      ); 
      // selecciona la fila 0, pero antes de debe estar un getrow  o getc
      $usuario = $resultado->getRow();
      if($usuario){
      
      //contrañena encriptada 
        if(password_verify(strval($this->request->getPost('clave')),
         $usuario->clave)){

          $datos = [
            'id' => $usuario->id,
             'usuario' => $usuario->usuario
          
        ];
        // guardar datos de sesion
          $this->session->set($datos);    

          return redirect()->route('/');


        }
       }

        $this->session->setFlashdata('nologin',true);    
        return redirect()->route('login');
      
    
    }
    
   
   
   
    public function guardar(){
    //variables parfa guardar los nombres del formulario

    $nombre_completo=$this->request->getpost("nombre_completo");
    $correo=$this->request->getpost("correo");
    $usuario=$this->request->getpost("usuario");
    $clave= Password_hash(strval($this->request->getPost("clave")), PASSWORD_DEFAULT);
   
    //cargar el modelo 
    $usuarioModel= model('usuario');
    //el primer  valor: son columnas de la base de dato/ segundo valor: son datos que vienen del formulario usuario es el archivo usuario que creamos anteriormente

  $datos= array(
    "nombre_completo"=>$nombre_completo,
    "correo"=>$correo,
    "usuario"=>$usuario,
    "clave"=>$clave
  );

 

 // verificar si existe los ususarios 
   $resultado= $usuarioModel->getWhere(['correo' => $correo]);
   if(!$resultado->getResult()){
        $resultado= $usuarioModel->insert($datos);
         $this->session->set($datos);    
        return redirect()->route('/');
   }
   
  else {

    $this->session->setFlashdata('error',true);    
    return redirect()->route('registro');
  }
  }

  public function productos()
  {
    

    return view('productos', $data);
  }
  
public function agregarproducto(){

  // aqui se esta Configurando la subida de la iamgen 
  $imagen = $this->request->getFile('imagen');
  $imagenDatos = file_get_contents($imagen->getPathname());
    
                                       // Obtener los datos del formulario
                                       $data = [
/*NOMBRES DE LA BASE DE DATOS -->*/    'nombre' => $this->request->getPost('nombre'),
                                      'precio_actual' => $this->request->getPost('precio_actual'),
                                      'precio_anterior' => $this->request->getPost('precio_anterior'),  /*<-- NOMBRES DEL FORMULARIO*/ 
                                      'descripcion' => $this->request->getPost('descripcion'),
                                      // 'categoria' => $this->request->getPost('categoria'),
                                      'imagen' => $imagenDatos,
  ];
   // Cargar el modelo del producto

   $productoModel = model('producto');
   // Insertar en la base de datos
   $productoModel->insert($data);
  // Redirigir a la página principal o donde desees en la carpeta 'panel'
   return redirect()->to('productos_admin');
  }

  public function enviar()
    {
        $nombre_completo = $this->request->getPost('nombre_completo');
        $correo = $this->request->getPost('correo');
        $asunto = $this->request->getPost('asunto');
        $detalles = $this->request->getPost('detalles');
      // Cargar el modelo
       $contactoModel = model('contacto');

        $datos= array(
         "nombre_completo"=>$nombre_completo,
         "correo"=>$correo,
         "asunto"=>$asunto,
         "detalles"=>$detalles,

    );
    if ($contactoModel->insert($datos)) {


    return redirect()->to('contacto')->with('mensaje', 'Mensaje enviado con exito!');
    // Cambia 'usuario/contact' por la URL a la que deseas redirigir.
    } }


    
   
    public function carrito()
    {
      
        // Obtén el carrito actual de la sesión
        $carrito = $this->session->get('carrito') ?? [];
    
        // Calcular subtotal, costo de envío y total si es necesario
        $subtotal = 0;
        foreach ($carrito as $item) {
            $subtotal += $item['precio_actual'] * $item['cantidad'];
        }
    
        if($subtotal>=6000000){

            $costoEnvio = 0;
        } else{
            $costoEnvio = 1000000;
        
        }    
        $total = $subtotal + $costoEnvio;
    
        // Pasa el carrito, subtotal, costo de envío y total a la vista
        $data = [
            'carrito' => $carrito,
            'subtotal' => $subtotal,
            'costoEnvio' => $costoEnvio,
            'total' => $total,
        ];
        return view('usuario/carrito',$data);
      }
    
//
public function agregarcarrito()
{
    // Obténemos los datos del formulario
    $id = $this->request->getPost('id');
    $nombre = $this->request->getPost('nombre');
    $precio_actual = $this->request->getPost('precio_actual');
    $imagen = $this->request->getPost('imagen');
    $cantidad = $this->request->getPost('cantidad'); 

                                                                                        
    // obtengo el carrito actual de la sesión
    $carritoActual = $this->session->get('carrito') ?? [];
    

    // Agrega el producto al carrito
    $carrito = [
        'id' => $id,
        'nombre' => $nombre,
        'precio_actual' => $precio_actual,
        'imagen' => $imagen,
        'cantidad' => $cantidad, 
    ];

    $carritoActual[] = $carrito;

    // Actualiza el carrito en la sesión
    $this->session->set('carrito', $carritoActual);

    // Redirige a la vista del carrito
    return redirect()->to('carrito');
}


public function vaciar_carrito(){

  //Eliminar el carrito de la sesión
     $this->session->remove('carrito');
 
     // Redirigir de nuevo a la vista del carrito
     return redirect()->to('carrito')->with('message', 'Carrito vaciado correctamente');
}



// public function eliminarProducto($productoId)
//     {
//         // Obténgo el carrito actual de la sesión
//         $carritoActual = $this->session->get('carrito') ?? [];

//         // Busco el índice del producto en el carrito por el ID
//         $indiceProducto = array_search($productoId, array_column($carritoActual, 'id'));

//         // Si el producto está en el carrito, lo elimino 
//         if ($indiceProducto !== false) {
//             unset($carritoActual[$indiceProducto]);

//             // Actualizo el carrito en la sesión
//             $this->session->set('carrito', array_values($carritoActual));
//         }

//         // me redirijo de nuevo a la vista del carrito
//         return redirect()->to(base_url('carrito'));
//     }




// public function actualizarCarrito($productoId)
// {
//     // Obtengo la nueva cantidad del formulario
//     $nuevaCantidad = $this->request->getPost('cantidad');

//     // Obténgo el carrito actual de la sesión
//     $carritoActual = $this->session->get('carrito') ?? [];

//     // Busco el producto en el carrito por el ID
//     $indiceProducto = array_search($productoId, array_column($carritoActual, 'id'));

//     // Si el producto está en el carrito, actualizo la cantidad
//     if ($indiceProducto !== false) {
//         // aqui actualiza la cantidad
//         $carritoActual[$indiceProducto]['cantidad'] = $nuevaCantidad;
  
//         // Actualizo el carrito en la sesión
//     $this->session->set('carrito', $carritoActual);
//     }
    

    
//     // de nuevo me redirijo a la vista del carrito
//     return redirect()->to('carrito')->with('message', 'Carrito actualizado correctamente');
    
// }
    

//     // public function agregarcategoria(){
//     //   // Obtener los datos del formulario
//     //   $data = [
//     //       'nombre' => $this->request->getPost('nombre'),
//     //   ];
//     //    // Cargar el modelo utilizando el servicio 'model'
//     //    $categoriaModel = model('categoria');
      
//     //    // Insertar en la base de datos
//     //    $categoriaModel->insert($data);
      
//     //    // Redirigir a la página principal o donde desees en la carpeta 'panel'
//     //    return redirect()->to('categoria');


    
  
//     public function editar_producto()
//     {
       

      
//       $productoModel = new \App\Models\Producto();
//       $data['productos'] = $productoModel->findAll();

//         $id = $this->request->getPost('id');
//         $nombre = $this->request->getPost('nombre');
//         $precio_actual = $this->request->getPost('precio_actual');
//         $precio_anterior = $this->request->getPost('precio_anterior');
//         $descripcion = $this->request->getPost('descripcion');
//         $imagen = $this->request->getFile('imagen');

//         // Cargar la imagen y convertirla a base64
//         $imagen_binaria = base64_encode(file_get_contents($imagen));

//         // Consulta SQL para actualizar el registro
//         $data = [
//             'nombre' => $nombre,
//             'precio_actual' => $precio_actual,
//             'precio_anterior' => $precio_anterior,
//             'descripcion' => $descripcion,
//             'imagen' => $imagen_binaria,
//         ];

//         $productoModel->update($id, $data);

//         return redirect()->to('producto_admin');
//     }

        

      
 
          
  

    

        // Aquí puedes procesar el mensaje, enviar correos, almacenar en la base de datos, etc.

        // // Por ejemplo, puedes imprimir los datos en la pantalla por ahora:
        // echo "Nombre: $usuario<br>";
        // echo "Email: $email<br>";
        // echo "Mensaje: $asunto<br>";
        // echo "Mensaje: $detalles<br>";
    

 // verificar si se guardo el registro 
 
 /*   if($resultado) {
    // datos de sesion
     $datos = [
        'id' => $resultado,
         'usuario' => $nombre_completo.' '.$correo,
      
    ];
    // guardar datos de sesion
    $this->session->set($datos);    
    return redirect()->route('inicio');
   }else {
    // variable de sesion temporal
    $this->session->setFlashdata('error',true);    
    return redirect()->route('registro');
  }*/
}
 


 


