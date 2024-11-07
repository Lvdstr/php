<?php
header('Content-Type: text/html; charset=utf-8');
?>



  <form id="cadastrar" name="cadastrar" action="cadastrou.php" target="_self" method="GET">
        <table>
            <label for="produto">produto:</label>
            <select id="produto" name="produto">
              <option value="" selected disabled>selecione</option>
              <optgroup label="açougue">
              <option value="contrafile">contrafile</option>
              <option value="alcatra">alcatra</option>
              <option value="maminha">maminha</option>
              </optgroup>
              <optgroup label="padaria">
              <option value="presunto">presunto</option>
              <option value="queijo">queijo</option>
              <option value="calabresa">calabresa</option>
              </optgroup>
              <optgroup label="hortifruti">
              <option value="maça">maça</option>
              <option value="banana">banana</option>
              <option value="melancia">melancia</option>
              </optgroup>
            </select>
            <input id="enviar" name="" type="submit" value="Enviar">
            <input id="limpar" name="" type="reset" value="Limpar">
        </table>
  </form>