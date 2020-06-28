<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kader extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MSudi');
	}


public function DataKader()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$id_kader=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_kader','id_kader',$id_kader)->row();
			$data['detail']['id_kader']= $tampil->id_kader;
            		$data['detail']['nama']= $tampil->nama;
            		$data['detail']['no_tlp']= $tampil->no_tlp;
            		$data['detail']['alamat']= $tampil->alamat;
			$data['content']='Kader/VFormUpdateKader';
		}
		else
		{	
			$data['DataKader']=$this->MSudi->GetData('tbl_kader');
			$data['content']='Kader/VKader';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddKader()
	{
		$data['content']='Kader/VFormAddKader';
		$this->load->view('VBackend',$data);
	}
	public function AddDataKader()
	{
		 $add['id_kader']=$this->input->post('id_kader');
         	 $add['nama']= $this->input->post('nama');
         	 $add['no_tlp']= $this->input->post('no_tlp');  
         	 $add['alamat']= $this->input->post('alamat');
        	 $this->MSudi->AddData('tbl_kader',$add);
        	 redirect(site_url('Kader/DataKader'));
	}



	public function UpdateDataKader()
	{
		 $id_kader=$this->input->post('id_kader');
		 $update['nama']= $this->input->post('nama');
         	 $update['no_tlp']= $this->input->post('no_tlp');
         	 $update['alamat']= $this->input->post('alamat');
          	 $this->MSudi->UpdateData('tbl_kader','id_kader',$id_kader,$update);
		 redirect(site_url('Kader/DataKader'));
	}


	public function DeleteDataKader()
	{
		 $id_kader=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_kader','id_kader',$id_kader);
        	 redirect(site_url('Kader/DataKader'));
	}

}