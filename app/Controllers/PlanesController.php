<?php

namespace App\Controllers;

class PlanesController extends BaseController
{

    public function verPlanes()
    {
        // Utilizar servidor HTTP
        $cliente = \Config\Services::curlrequest();
        $respuesta = $cliente->get('https://ejemploproyectos2024.x10.mx/ci4_telefonia/public/api/planes');
        $datos = json_decode($respuesta->getBody(), true);
        //  print_r($datos);
        return view('planes', ['datos' => $datos]);
    }
    public function nuevo()
    {
        return view('planes_nuevos');
    }

    public function agregar()
    {
        //Utilizar HTTP
        $cliente = \Config\Services::curlrequest();
        $datos = [
            'nombre' => $this->request->getvar('txtNombre'),
            'pago_mensual'  => $this->request->getvar('txtPagoMensual'),
            'cantidad_minutos'  => $this->request->getvar('txtCantidadMinutos'),
            'cantidad_mensajes'  => $this->request->getvar('txtCantidadMensajes')
        ];
        $respuesta = $cliente->request(
            'POST',
            'https://ejemploproyectos2024.x10.mx/ci4_telefonia/public/api/planes',
            [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json'
                ],
                'json' => $datos
            ]
        );

        echo "Datos almacenados";
    }
    public function editar($id = null)
    {
        $cliente = \Config\Services::curlrequest();
        $respuesta = $cliente->get('https://ejemploproyectos2024.x10.mx/ci4_telefonia/public/api/planes/' . $id);
        $datos = json_decode($respuesta->getBody(), true);
        //  print_r($datos);
        return view('planes_editar', ['datos' => $datos]);
    }
    public function modificar()
    {
        $cliente = \Config\Services::curlrequest();
        $id = $this->request->getvar('txtId');
        $datos = [
            'nombre' => $this->request->getvar('txtNombre'),
            'pago_mensual'  => $this->request->getvar('txtPagoMensual'),
            'cantidad_minutos'  => $this->request->getvar('txtCantidadMinutos'),
            'cantidad_mensajes'  => $this->request->getvar('txtCantidadMensajes')
        ];
        $respuesta = $cliente->request(
            'PUT',
            'https://ejemploproyectos2024.x10.mx/ci4_telefonia/public/api/planes/' . $id,
            [
                'headers' => [
                    'Content-Type' => 'application/json',
                ],
                'json' => $datos
            ]
        );

        echo "Datos almacenados";
    }
    public function eliminar($id = null)  {
        $cliente = \Config\Services::curlrequest();
        $respuesta = $cliente->request(
            'DELETE',
            'https://ejemploproyectos2024.x10.mx/ci4_telefonia/public/api/planes/' . $id,
            [
                'headers' => [
                    'Content-Type' => 'application/json',
                ],
            ]
        );

        echo "Datos eliminados";
    }
}
