<?php

class Model extends CI_Model{ 
        
        
    public function insert(Contato $use){ 
        $this->db->insert('Contato',$use);
        }
        
    public function searchAll(){
        $query = $this->db->query("Select * from Contato");
        return $query->result(); 
       }
     
    public function insert2(Usuario $usu){ 
        $this->db->insert('Usuario',$usu);
        }
        
    public function searchAll2(){
        $query = $this->db->query("Select * from Usuario");
        return $query->result(); 
        }
        
    public function getCdUsuario($login){
        $res = $this->db->query("Select cd from Usuario where login = '$login'");
        return $res->cd;
    }
        
    public function insert3(Animal $animal){
		 $this->db->insert('Animal',$animal);
	    }
	    
	public function queryAll3(){
	    $res = $this->db->query("Select * from Animal");
	    return $res->result();
	    }

    public function getUser($login,$pass){
		$this->db->where('login',$login);
		$this->db->where('pass',$pass);
		$a = $this->db->get('Usuario');
	    	if ($a->num_rows()>0){
        			if($a->row()->login === "root"){
        				return "admin";
        			}else{
        				return "comum";
        			}
		}else{
			return false;
		}
	}
    
    public function insert4(Adocao $adocao){ 
        $this->db->insert('Adocao',$adocao);
    }
    
   
    
}

?>