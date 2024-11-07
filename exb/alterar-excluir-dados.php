<?php
    require 'Abrir-conexao.php';
    if(isset($_GET['deletar'])){
        $id = $_GET['deletar'];
        echo('deletou o id = '.$id);
        $sql = "DELETE FROM `bicicleta` WHERE `id` = {$id}";
        try {
            $resultado = $cs->query($sql);
            $mensagem = "produto deletado";
        } catch(PDOException $e) {
            $mensagem = "produto não deletado";
        }
    }
	if(isset($_GET['alterar'])){
        $id = $_GET['alterar'];
        $sql = "SELECT * FROM `bicicleta` WHERE `id` = {$id}";
        $dados = $cs->query($sql);
        if($dados != null)
            foreach($dados as $linha) {
                $name = $linha['nome'];
                $id = $linha['id'];
            }
        else{
            $name = "";
            $id = "";
            echo("dado não encontrado");
        }
?>
<form id="alterar" name="alterar" action="alterou.php" target="_self" method="GET">
    <table>
        <tr>
            <td>
                <label for="nome">nome:</label>
            </td>
            <td>
                <input id="id" type="hidden" name="id" value="<?php echo("{$id}"); ?>">
            </td>
            <td>
                <input id="nome" name="nome" value="<?php echo("{$name}"); ?>">
            </td>
            <td>
                <input id="enviar" name="" type="submit" value="enviar">
            </td>
            <td>
                <input id="limpar" name="" type="reset" value="limpar">
            </td>
        </tr>
    </table>
</form>
	<?php
		}
?>