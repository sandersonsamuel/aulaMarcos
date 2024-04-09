<?php 

$con = mysqli_connect("localhost", "root", "");

if (!$con){
  die("Erro:" .mysqli_error($con));
}

echo "<h1>Conexao estabelecida com sucesso.</h1>";

if (!mysqli_select_db($con, "conexao_aula")){
  die("Erro:" .mysqli_error($con));
}

echo "<br/> Banco selecionado com sucesso.";

$rua = "Rua Mato";
$cidade = "Matões";
$cep = "65609-082";

/* $comando = "INSERT INTO endereco (rua, cidade, cep) VALUES ('$rua', '$cidade', '$cep')";

$res = mysqli_query($con, $comando);

if ($res){
  echo "<br/>Dados inseridos com sucesso";
}else{
  echo "<br/>Erro: ".mysqli_error($con);
}
 */

/* $nome = "Maria José da Silva";
$telefone = "1234-9845";
$id = 1;

$comando = "UPDATE contato SET nome='$nome', telefone='$telefone' WHERE id_contato= $id";

$res = mysqli_query($con, $comando);

if ($res){
  echo "<br/> Atualização realizada com sucesso";
}else{
  echo "<br/>Erro: ". mysqli_error($con);
}

echo "<br/>Linhas Afetadas: " .mysqli_affected_rows($con); */

/* $id_endereco = mysqli_insert_id($con);
 */
/* $comandoContato = "INSERT INTO contato (nome, telefone, id_endereco) VALUES ('$nome', '$telefone', '$id_endereco')";

$res = mysqli_query($con, $comandoContato);

if ($res){
  echo "<br/> Inclusão realizada com sucesso";
}else{
  echo "<br/> Erro: ".mysqli_error($con);
} */

$id = 3;
$comando = "DELETE FROM contato WHERE id_contato = $id";
$res = mysqli_query($con, $comando);
if ($res){
  echo "<br/>Deletado com sucesso";
}else{
  echo "<br/>Error: ".mysqli_error($con);
}

mysqli_close($con);

