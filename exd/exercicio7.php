<?php
header('Content-Type: text/html;charset=utf-8');
//codigo para incluir utf-8 no código
?>


  <form id="cadastrar" name="cadastrar" action="cadastrou.php" target="_self" method="GET">
        <table>
            <label for="moto">produto:</label>
            <select id="moto" name="moto">
              <option value="" selected disabled>selecione</option>
              <optgroup label="motos esportivas">
              <option value="Yamaha YZF R-3">Yamaha YZF R-3</option>
              <option value="Kawasaki Ninja 400 ">Kawasaki Ninja 400 </option>
              <option value="Suzuki GSX-R 1000 R">Suzuki GSX-R 1000 R</option>
              </optgroup>
              <optgroup label="motos custom">
              <option value="Harley-Davidson Ultra Limited">Harley-Davidson Ultra Limited</option>
              <option value="Dafra Horizon 150">Dafra Horizon 150</option>
              <option value="Haojue Chopper Road">Haojue Chopper Road</option>
              </optgroup>
              <optgroup label="motos touring">
              <option value="HONDA GOLD WING">HONDA GOLD WING</option>
              <option value="DUCATI MULTISTRADA">banana</option>
              <option value="BMW R">BMW R</option>
              </optgroup>
            </select>
            <input id="enviar" name="" type="submit" value="Enviar">
            <input id="limpar" name="" type="reset" value="Limpar">
        </table>
  </form>