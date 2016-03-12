<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Persona extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Persona_modelo','persona');
    }
 
    public function index()
    {
        $this->load->helper('url');
        $this->load->view('Persona_view');
    }
 
    public function ajax_list()
    {
        $list = $this->persona->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $persona) {
            $no++;
            $row = array();
            $row[] = $persona->dni;
            $row[] = $persona->nombres;
            $row[] = $persona->paterno;
            $row[] = $persona->materno;
            $row[] = $persona->direccion;
            $row[] = $persona->Poblado;
            $row[] = $persona->Genero;
            $row[] = $persona->fechanaci;
            $row[] = $persona->Telefono;
            $row[] = $persona->Correo;
            $row[] = $persona->celular;
            $row[] = $persona->Departamento;
            $row[] = $persona->Provincia;
            $row[] = $persona->Distrito;
            $row[] = $persona->Idioma;
            $row[] = $persona->Nivel_estudio;


 
            //add html for action
            $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void()" title="Edit" onclick="edit_person('."'".$persona->idPersona."'".')"><i class="glyphicon glyphicon-pencil"></i>Modificar</a>
                  <a class="btn btn-sm btn-danger" href="javascript:void()" title="Hapus" onclick="delete_person('."'".$persona->idPersona."'".')"><i class="glyphicon glyphicon-trash"></i> Eliminar</a>';
 
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->persona->count_all(),
                        "recordsFiltered" => $this->persona->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
 
    public function ajax_edit($id)
    {
        $data = $this->persona->get_by_id($id);
        echo json_encode($data);
    }
 
    public function ajax_add()
    {
        $data = array(
                'dni' => $this->input->post('dni'),
                'nombres' => $this->input->post('nombres'),
                'paterno' => $this->input->post('paterno'),
                'materno' => $this->input->post('materno'),
                'direccion' => $this->input->post('direccion'),
                'poblado' => $this->input->post('poblado'),
                'genero' => $this->input->post('genero'),
                'fechaNaci' => $this->input->post('fechaNaci'),
                'telefono' => $this->input->post('telefono'),
                'correo' => $this->input->post('correo'),
                'celular' => $this->input->post('celular'),
                'ubigeo_idUbigeo' => $this->input->post('ubigeo_idUbigeo'),
                'LenguasNativos_idLenguaNativo' => $this->input->post('LenguasNativos_idLenguaNativo'),
                'NivelesInstruccion_idNivelInstruccion' => $this->input->post('NivelesInstruccion_idNivelInstruccion'),

            );
        $insert = $this->persona->save($data);
        echo json_encode(array("status" => TRUE));
    }
 
    public function ajax_update()
    {
        $data = array(
                'dni' => $this->input->post('dni'),
                'nombres' => $this->input->post('nombres'),
                'paterno' => $this->input->post('paterno'),
                'materno' => $this->input->post('materno'),
                'direccion' => $this->input->post('direccion'),
                'poblado' => $this->input->post('poblado'),
                'genero' => $this->input->post('genero'),
                'fechaNaci' => $this->input->post('fechaNaci'),
                'telefono' => $this->input->post('telefono'),
                'correo' => $this->input->post('correo'),
                'celular' => $this->input->post('celular'),
                'ubigeo_idUbigeo' => $this->input->post('ubigeo_idUbigeo'),
                'LenguasNativos_idLenguaNativo' => $this->input->post('LenguasNativos_idLenguaNativo'),
                'NivelesInstruccion_idNivelInstruccion' => $this->input->post('NivelesInstruccion_idNivelInstruccion'),
            );
        $this->persona->update(array('idPersona' => $this->input->post('idPersona')), $data);
        echo json_encode(array("status" => TRUE));
    }
 
    public function ajax_delete($id)
    {
        $this->persona->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }
 
}