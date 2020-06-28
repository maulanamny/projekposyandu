<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemeriksa extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MSudi');
	}


public function DataPemeriksa()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$id_periksa=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_periksa','id_periksa',$id_periksa)->row();
			$data['detail']['id_periksa']= $tampil->id_periksa;
            		$data['detail']['nama']= $tampil->nama;
            		$data['detail']['berat_badan']= $tampil->berat_badan;
            		$data['detail']['pemeriksaan_ke']= $tampil->pemeriksaan_ke;
			$data['content']='Pemeriksa/VFormUpdatePemeriksa';
		}
		else
		{	
			$data['DataPemeriksa']=$this->MSudi->GetData('tbl_periksa');
			$data['content']='Pemeriksa/VPemeriksa';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddPemeriksa()
	{
		$data['content']='Pemeriksa/VFormAddPemeriksa';
		$this->load->view('VBackend',$data);
	}
	public function AddDataPemeriksa()
	{
		 $add['id_periksa']=$this->input->post('id_periksa');
         	 $add['nama']= $this->input->post('nama');
         	 $add['berat_badan']= $this->input->post('berat_badan');  
         	 $add['pemeriksaan_ke']= $this->input->post('pemeriksaan_ke');
        	 $this->MSudi->AddData('tbl_periksa',$add);
        	 redirect(site_url('Pemeriksa/DataPemeriksa'));
	}



	public function UpdateDataPemeriksa()
	{
		 $id_periksa=$this->input->post('id_periksa');
		 $update['nama']= $this->input->post('nama');
         	 $update['berat_badan']= $this->input->post('berat_badan');
         	 $update['pemeriksaan_ke']= $this->input->post('pemeriksaan_ke');
          	 $this->MSudi->UpdateData('tbl_periksa','id_periksa',$id_periksa,$update);
		 redirect(site_url('Pemeriksa/DataPemeriksa'));
	}


	public function DeleteDataPemeriksa()
	{
		 $id_periksa=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_periksa','id_periksa',$id_periksa);
        	 redirect(site_url('Pemeriksa/DataPemeriksa'));
	}

}