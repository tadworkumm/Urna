<?php 
$numeros = filter_input(INPUT_GET,'numeros');
$contbranco=0;
$contnulo=0;

echo 'Todos os candidatos: Dilma Rouself = 13 '
. 'Tixinha brazÃ²ide = 24 '
. 'VetÃ³rico Piruleta = 45 ';
echo "NÃºmero digitado ".$numeros;


    
     
                                      if(($numeros === '13') or ($numeros === '24') or ($numeros === '45')){
                                       
                                        $arquivo= "votosvalidos.txt";
                                        $conteudo=$numeros+1;
                                        $abertura=fopen("$arquivo","a+");
                                        $gravacao=fwrite($abertura,$conteudo);
                                       
                                         #Reposiciona o ponteiro no inÃ­cio do arquivo
                                         fseek($abertura,0);
                                         $leitura=fread($abertura,filesize($arquivo));
                                         fclose($abertura);
                                         
                                         
    
                        }else if(($numeros === "branco")){
                            $arquivo= "votosbranco.txt";
                                        $conteudo=$contbranco+1;
                                        $abertura=fopen("$arquivo","a+");
                                        $gravacao=fwrite($abertura,$conteudo);
                                       echo "Numero de caracteres gravados:$gravacao";
                                         #Reposiciona o ponteiro no inÃ­cio do arquivo
                                         fseek($abertura,0);
                                         $leitura=fread($abertura,filesize($arquivo));
                                         fclose($abertura);
                        }else{
                            $arquivo= "votosnulos.txt";
                                        $conteudo=$contnulo+1;
                                        $abertura=fopen("$arquivo","a+");
                                        $gravacao=fwrite($abertura,$conteudo);
                                       
                                         #Reposiciona o ponteiro no inÃ­cio do arquivo
                                         fseek($abertura,0);
                                         $leitura=fread($abertura,filesize($arquivo));
                                         fclose($abertura);
                        }
                        
                                         
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Urna Eletronica</title>
    </head>
    <body onkeypress="return false" >
  <fieldset style="background-color: #CDC5BF">
    <legend>Urna </legend>
    
        <form name="ur" action="Urna_Eletronica.php" cursor: url("aero_pen_xl") method="get"/>
          
        <div id="urna">
            <div id="monitor">
                <input type="text" name="numeros" style="border:1px solid black; height:300px  ;width:500px;font-size:100 "/>
            </div>

            
            <table   style="border:1px solid black;margin-left:800;margin-top:-300px;background-color:#00000 ">
            <tr>
                <td><input type="button" name="valor1" value="1" onclick="ur.numeros.value+='1'" style="width:150px; height:150px;margin-white:30px"/></td>
                 <td><input type="button" name="valor2" value="2" onclick="ur.numeros.value+='2'" style="width:150px; height:150px"/></td>
                  <td><input type="button" name="valor3" value="3" onclick="ur.numeros.value+='3'" style="width:150px; height:150px"/></td>
            </tr>
            <tr>
                   <td><input type="button" name="valor4" value="4" onclick="ur.numeros.value+='4'" style="width:150px; height:150px;margin-white:30px"/></td>
                    <td><input type="button" name="valor5" value="5" onclick="ur.numeros.value+='5'" style="width:150px; height:150px"/></td>
                     <td><input type="button" name="valor6" value="6" onclick="ur.numeros.value+='6'" style="width:150px; height:150px"/></td>
            </tr>
            <tr>
                <td><input type="button" name="valor7" value="7" onclick="ur.numeros.value+='7'" style="width:150px; height:150px;margin-white:30px"/></td>
                    <td><input type="button" name="valor8" value="8" onclick="ur.numeros.value+='8'" style="width:150px; height:150px"/></td>
                     <td><input type="button" name="valor9" value="9" onclick="ur.numeros.value+='9'" style="width:150px; height:150px"/></td>
            </tr>
            <tr>
                <td><input type="submit" name="branco" value="branco" onclick="ur.numeros.value+='branco'" style="width:150px; height:150px;margin-white:30px; font-family:algerian; background-color:FFFFFF"/></td>
                <td><input type="reset" name="corrige" value="corrige"  style="width:150px; height:150px;font-family:algerian; background-color:#FFA500"/></td>
                <td><input type="submit" name="confirma" value="confirma"  style="width:150px; height:150px;font-family:algerian; background-color:#00FF00"/></td>
            </tr>
            <table/>

            
      <div/>
      </form> 
    </body>
    <fieldset/>
</html>
