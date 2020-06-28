<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MSudi');
	}


public function DataPasien()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$nik=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_pasien','nik',$nik)->row();
			$data['detail']['nik']= $tampil->nik;
            		$data['detail']['nama']= $tampil->nama;
            		$data['detail']['status']= $tampil->status;
            		$data['detail']['alamat']= $tampil->alamat;
			$data['content']='Pasien/VFormUpdatePasien';
		}
		else
		{	
			$data['DataPasien']=$this->MSudi->GetData('tbl_pasien');
			$data['content']='Pasien/VPasien';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddPasien()
	{
		$data['content']='Pasien/VFormAddPasien';
		$this->load->view('VBackend',$data);
	}
	public function AddDataPasien()
	{
		 $add['nik']=$this->input->post('nik');
         	 $add['nama']= $this->input->post('nama');
         	 $add['status']= $this->input->post('status');  
         	 $add['alamat']= $this->input->post('alamat');
        	 $this->MSudi->AddData('tbl_pasien',$add);
        	 redirect(site_url('Pasien/DataPasien'));
	}



	public function UpdateDataPasien()
	{
		 $nik=$this->input->post('nik');
		 $update['nama']= $this->input->post('nama');
         	 $update['status']= $this->input->post('status');
         	 $update['alamat']= $this->input->post('alamat');
          	 $this->MSudi->UpdateData('tbl_pasien','nik',$nik,$update);
		 redirect(site_url('Pasien/DataPasien'));
	}


	public function DeleteDataPasien()
	{
		 $nik=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_pasien','nik',$nik);
        	 redirect(site_url('Pasien/DataPasien'));
	}

}