<?php
header('Content-Type: text/html;charset=utf-8');
//codigo para incluir utf-8 no código
?>


  <form id="cadastrar" name="cadastrar" action="cadastrou.php" target="_self" method="GET">
        <table>
            <label for="apartamento">produto:</label>
            <select id="apartamento" name="apartamento">
              <option value="" selected disabled>selecione</option>
              <optgroup label="1 andar">
              <option value="apartamento-2">apartamento-2</option>
              <option value="apartamento-5">apartamento-5</option>
              <option value="apartamento-1">apartamento-1</option>
              </optgroup>
              <optgroup label="2 andar">
              <option value="apartamento-6">apartamento-6</option>
              <option value="apartamento-7">apartamento-7</option>
              <option value="apartamento-10">apartamento-10</option>
              </optgroup>
              <optgroup label="3 andar">
              <option value="apartamento-20">apartamento-20</option>
              <option value="apartamento-1350">apartamento-1350</option>
              <option value="apartamento-5000">apartamento-5000</option>
              </optgroup>
            </select>
            <input id="enviar" name="" type="submit" value="Enviar">
            <input id="limpar" name="" type="reset" value="Limpar">
        </table>
  </form>