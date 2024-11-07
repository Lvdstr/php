<?php
header('Content-Type: text/html;charset=utf-8');
//codigo para incluir utf-8 no código
?>


  <form id="cadastrar" name="cadastrar" action="cadastrou.php" target="_self" method="GET">
        <table>
            <label for="carro">produto:</label>
            <select id="carro" name="carro">
              <option value="" selected disabled>selecione</option>
              <optgroup label="carros elétricos">
              <option value="Renault Zoe E-Tech">Renault Zoe E-Tech</option>
              <option value="Renault Kwid E-Tech">Renault Kwid E-Tech</option>
              <option value="BYD Dolphin">BYD Dolphin</option>
              </optgroup>
              <optgroup label="carros importados">
              <option value="Ferrari LaFerrari Aperta">Ferrari LaFerrari Aperta</option>
              <option value="Lamborghini Veneno">Lamborghini Veneno</option>
              <option value="Bugatti La Voiture Noire">Bugatti La Voiture Noire</option>
              </optgroup>
              <optgroup label="hortifruti">
              <option value="Peugeot 208">Peugeot 208</option>
              <option value="Hyundai HB20S">Hyundai HB20S</option>
              <option value="Fiat Cronos">Fiat Cronos</option>
              </optgroup>
            </select>
            <input id="enviar" name="" type="submit" value="Enviar">
            <input id="limpar" name="" type="reset" value="Limpar">
        </table>
  </form>