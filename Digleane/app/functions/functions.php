<?php
    
    // Database Function (MySQLi)
    function banco($type, $query){
    
        $type = strtoupper($type);
    
        $servername = "#";
        $username = "#";
        $password = "#";
        $database = "#";
        
        $conn = new mysqli($servername, $username, $password, $database);
    
        if ($type == 'SELECT') {
            
    
            $result = $conn->query($query);
    
            $count = 0;
    
            while ($row = $result->fetch_assoc()) {
    
                $retorno[$count] = $row;
    
                $count++;
            }
    
            return $retorno;
    
        } else if ($type == 'UPDATE' or $type == 'DELETE' or $type == 'INSERT'){
    
            if ($conn->query($query) === TRUE) {
                if ($type == 'INSERT'){
    
                    return $conn->insert_id;
    
                } else {
    
                    return 'ok';
    
                }
            } else {
                return $conn->error;
            }
    
        } else {
    
            return "Type not found!";
    
        }
        
        $conn->close();
    }
    
    // Função para gerar o token da sessão
    function geraToken($id){
        
        $token = md5("dpa".date('d-m-Y H:m:s').$id);
        
        return $token;
        
    }
    
?>
