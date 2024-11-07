<?php
header('Content-Type: text/html;charset=utf-8');
//codigo para incluir utf-8 no código
?>


  <form id="cadastrar" name="cadastrar" action="cadastrou.php" target="_self" method="GET">
        <table>
            <label for="bicicleta">bicicleta:</label>
            <select id="bicicleta" name="bicicleta">
              <option value="" selected disabled>selecione</option>
              <optgroup label="speed-bikes">
              <option value="aro 700 OGGI Disc 2022">aro 700 OGGI Disc 2022</option>
              <option value="aro 700 OGGI Stimolla 2021">aro 700 OGGI Stimolla 2021</option>
              <option value="speed Road aro 700 KSW">speed Road aro 700 KSW</option>
              </optgroup>
              <optgroup label="mountain-bikes">
              <option value="Top Fuel">Top Fuel</option>
              <option value="Supercaliber">Supercaliber</option>
              <option value="Procaliber">Procaliber</option>
              </optgroup>
              <optgroup label="e-bikes">
              <option value="Lectric XP 3.0">Lectric XP 3.0</option>
              <option value="Ride Up Roadster V2">Ride Up Roadster V2</option>
              <option value="Lectric XPremium">Lectric XPremium</option>
              </optgroup>
            </select>
            <input id="enviar" name="" type="submit" value="Enviar">
            <input id="limpar" name="" type="reset" value="Limpar">
        </table>
  </form>