<table border="0" cellpadding="0" cellspacing="0" width="100%">
  <tbody>
    <tr>
      <td colspan="3" class="subTitulos"><span class="titulos">Consultar Interviniente (Persona)</span></td>
    </tr>
    <tr>
      <td width="19%" class="subTitulos">&nbsp;</td>
      <td width="1%" class="datoFormulario">&nbsp;</td>
      <td width="80%" class="datoFormulario">&nbsp;</td>
    </tr>
    <tr>
      <td class="subTitulos" colspan="3">
<script>
function cambiarColor(color) {
}
</script>









<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>

<table width="100%" border="0">
      <tbody><tr>
        <td class="txtosFormularioNoticiaCriminal">&nbsp;</td>
        <td class="datoFormulario">&nbsp;</td>
        <td class="datoFormulario">&nbsp;</td>
      </tr>
      <tr>
        <td width="19%" class="txtosFormularioNoticiaCriminal"><span class="asteriscoNoticiaCriminal">*</span>&nbsp;Interviniente a consultar </td>
        <td width="1%" class="datoFormulario">&nbsp;</td>
        <td width="80%" class="datoFormulario">
        
          <select name="persId" id="persId" class="datoFormulario" onchange="EjecutarAccionTivi('abrirVentanaConsultarCaracteristicasMorfocromaticas', persId.selectedIndex, persId.options[persId.selectedIndex].value,'8'); habilitarRangoEdad(); habilitarCategorias('abrirVentanaConsultarCaracteristicasMorfocromaticas');">
          		<option>---Seleccione un valor de la lista---</option>
			<option value="58515703|8" selected="">JULIAN BUENAVENTURA | INDICIADO</option>
<option value="58480439|8">YOBANY YANDE | INDICIADO</option>
<option value="58479500|8">JHON RUIZ | INDICIADO</option>
<option value="58477498|8">CESAR GARCIA | INDICIADO</option>
<option value="58464152|8">JOHAN BENAVIDES | INDICIADO</option>
<option value="58310309|8">CRISTIAN MENESES | INDICIADO</option>
<option value="58310024|8">ALEXANDER REYES | INDICIADO</option>
<option value="58309908|8">OCTAVIO VELAZCO | INDICIADO</option>
<option value="53569376|8">CARLOS NIETO | INDICIADO</option>
<option value="53569377|7">EN AVERIGUACION EN AVERIGUACION | VICTIMA</option>

      	   </select>
      	
         </td>
      </tr>
      <tr>
        <td class="subTitulos">&nbsp;</td>
        <td class="datoFormulario">&nbsp;</td>
        <td class="datoFormulario">
	      <span class="txtoNotaNoticiaCriminal">Si desea consultar personas juridicas escoja la opcion del menu "Consultar" bajo el titulo (Empresa)"<o:p></o:p></span>
        </td>
      </tr>
      <tr>
        <td class="subTitulos">&nbsp;</td>
        <td class="datoFormulario">&nbsp;</td>
        <td class="datoFormulario">
          <table bgcolor="white">
            <tbody><tr>
              <td width="4%" bgcolor="red"></td>
              <td>
                <span class="txtoNotaNoticiaCriminal">Interviniente Inactivo.<o:p></o:p></span>
              </td>
            </tr>
            <tr>
              <td width="4%"></td>
              <td>
                <span class="txtoNotaNoticiaCriminal">Para los intervinientes que aparecen en rojo, podrá consultar la información pero no modificarla.<o:p></o:p></span>
              </td>
            </tr>
          </tbody></table>
        </td>
      </tr>
</tbody></table>
<hr>
<br>

</td>
    </tr>
    <tr>
      <td class="subTitulos">&nbsp;</td>
      <td class="datoFormulario">&nbsp;</td>
      <td class="datoFormulario">&nbsp;</td>
    </tr>
   


  <tr>
      <td width="19%" class="subTitulos">&nbsp;</td>
      <td width="1%" class="datoFormulario">&nbsp;</td>
      <td width="80%" class="datoFormulario">&nbsp;</td>
  </tr>
    
    
   <!--
     -
     - La siguiente fila se debe mostrar solo si esta pagina desplegara la consulta de los datos basicos de la persona
     - Eso se sabe por la accion de la pagina
    -->

    

  <tr>
      <td width="19%" class="subTitulos">&nbsp;</td>
      <td width="1%" class="datoFormulario"></td>
      <td width="80%" class="datoFormulario"></td>
  </tr>
  <tr>
      <td colspan="3" class="txtosFormularioNoticiaCriminal">&nbsp;</td>
  </tr>
  
    <!--
     -
     - La siguiente fila se debe mostrar solo si esta pagina desplegara la consulta de los datos basicos de la persona
     - Eso se sabe por la accion de la pagina
     -->
	 

   <!--
     -
     - La siguiente fila se debe mostrar solo si esta pagina desplegara la consulta de las caract. de la persona
     - Eso se sabe por la accion de la pagina
    -->

   
       <tr>
        <td colspan="3" class="">
<script language="javascript">

 /**
  * Realiza 'submit' del documento(Posee múltiples formas(FNI,FCM).)'
  * FNI(forma del jsp implicadoPersonaDetalle)
  * FCM(forma de caracteristicasMorfocromaticasDetalle.jsp)
  */

  function enviarFormaCarMon( ) {
    var frm=document.FNI;
      //---Combo interviniente
      if(!validar_combo_no_vacio(frm.persId)){
        alert(" Seleccione un interviniente ");
        return;
      }//--if
      if(validar_valor_combo(frm.persId,"---Seleccione un valor de la lista---")==true){
      alert(" Seleccione un interviniente ");
      return;
      }//--if
      submit(0);
  }//--enviarFormaCarMon
</script>


<style type="text/css">
<!--
body {

}
-->
</style>
<table border="0" cellpadding="0" cellspacing="0" width="100%">

    <tbody><tr>
      <td colspan="7" class="subTitulos"><span class="titulos">Crear Caracteristicas Morfocromaticas</span> </td>
    </tr>
    <tr>
      <td class="txtosFormularioNoticiaCriminal">&nbsp;</td>
      <td class="datoFormulario">&nbsp;</td>
      <td class="datoFormulario">&nbsp;</td>
      <td width="2%" class="datoFormulario">&nbsp;</td>
      <td width="15%" class="datoFormulario">&nbsp;</td>
      <td width="1%" class="datoFormulario">&nbsp;</td>
      <td width="30%" class="datoFormulario">&nbsp;</td>
    </tr>
    <tr>
      <td class="txtosFormularioNoticiaCriminal">&nbsp;</td>
      <td class="datoFormulario">&nbsp;</td>
      <td class="datoFormulario">&nbsp;</td>
      <td width="2%" class="datoFormulario">&nbsp;</td>
      <td width="15%" class="datoFormulario">&nbsp;</td>
      <td width="1%" class="datoFormulario">&nbsp;</td>
      <td width="30%" class="datoFormulario">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="7" class="subTitulos"><span class="titulos">Caracteristicas Básicas</span></td>
    </tr>
    <tr>
      <td class="txtosFormularioNoticiaCriminal">&nbsp;</td>
      <td class="datoFormulario">&nbsp;</td>
      <td class="datoFormulario">&nbsp;</td>
      <td width="2%" class="datoFormulario">&nbsp;</td>
      <td width="15%" class="datoFormulario">&nbsp;</td>
      <td width="1%" class="datoFormulario">&nbsp;</td>
      <td width="30%" class="datoFormulario">&nbsp;</td>
    </tr>
    <tr>
      <td width="11%" class="txtosFormularioNoticiaCriminal">Contextura</td>
      <td width="0%" class="datoFormulario">&nbsp;</td>
      <td width="41%" class="datoFormulario">
        <select name="1" id="1" class="datoFormulario">
          
                   <option>---Seleccione un valor de la lista---</option>
                   <option value="1">Obesa</option>
                   <option value="2">Robusta</option>
                   <option value="3">Atletica</option>
                   <option value="4">Mediana</option>
                   <option value="5">Delgada</option>
        </select>

        <!--Codigo para determinar si se debe incluir el campo oculto para actualizar el campo del id dado-->

        

      </td>
      <td width="2%" class="datoFormulario">&nbsp;</td>
      <td width="15%" class="txtosFormularioNoticiaCriminal">Estatura (cms)</td>
      <td width="1%" class="datoFormulario">&nbsp;</td>
      <td width="30%" class="datoFormulario">
	  <select name="24" id="24" class="datoFormulario">
          
                   <option>---Seleccione un valor de la lista---</option>
		
			<option value="2520">20&nbsp; cms</option>
		
			<option value="2521">21&nbsp; cms</option>
		
			<option value="2522">22&nbsp; cms</option>
		
			<option value="2523">23&nbsp; cms</option>
		
			<option value="2524">24&nbsp; cms</option>
		
			<option value="2525">25&nbsp; cms</option>
		
			<option value="2526">26&nbsp; cms</option>
		
			<option value="2527">27&nbsp; cms</option>
		
			<option value="2528">28&nbsp; cms</option>
		
			<option value="2529">29&nbsp; cms</option>
		
			<option value="2530">30&nbsp; cms</option>
		
			<option value="2531">31&nbsp; cms</option>
		
			<option value="2532">32&nbsp; cms</option>
		
			<option value="2533">33&nbsp; cms</option>
		
			<option value="2534">34&nbsp; cms</option>
		
			<option value="2535">35&nbsp; cms</option>
		
			<option value="2536">36&nbsp; cms</option>
		
			<option value="2537">37&nbsp; cms</option>
		
			<option value="2538">38&nbsp; cms</option>
		
			<option value="2539">39&nbsp; cms</option>
		
			<option value="2540">40&nbsp; cms</option>
		
			<option value="2541">41&nbsp; cms</option>
		
			<option value="2542">42&nbsp; cms</option>
		
			<option value="2543">43&nbsp; cms</option>
		
			<option value="2544">44&nbsp; cms</option>
		
			<option value="2545">45&nbsp; cms</option>
		
			<option value="2546">46&nbsp; cms</option>
		
			<option value="2547">47&nbsp; cms</option>
		
			<option value="2548">48&nbsp; cms</option>
		
			<option value="2549">49&nbsp; cms</option>
		
			<option value="2550">50&nbsp; cms</option>
		
			<option value="2551">51&nbsp; cms</option>
		
			<option value="2552">52&nbsp; cms</option>
		
			<option value="2553">53&nbsp; cms</option>
		
			<option value="2554">54&nbsp; cms</option>
		
			<option value="2555">55&nbsp; cms</option>
		
			<option value="2556">56&nbsp; cms</option>
		
			<option value="2557">57&nbsp; cms</option>
		
			<option value="2558">58&nbsp; cms</option>
		
			<option value="2559">59&nbsp; cms</option>
		
			<option value="2560">60&nbsp; cms</option>
		
			<option value="2561">61&nbsp; cms</option>
		
			<option value="2562">62&nbsp; cms</option>
		
			<option value="2563">63&nbsp; cms</option>
		
			<option value="2564">64&nbsp; cms</option>
		
			<option value="2565">65&nbsp; cms</option>
		
			<option value="2566">66&nbsp; cms</option>
		
			<option value="2567">67&nbsp; cms</option>
		
			<option value="2568">68&nbsp; cms</option>
		
			<option value="2569">69&nbsp; cms</option>
		
			<option value="2570">70&nbsp; cms</option>
		
			<option value="2571">71&nbsp; cms</option>
		
			<option value="2572">72&nbsp; cms</option>
		
			<option value="2573">73&nbsp; cms</option>
		
			<option value="2574">74&nbsp; cms</option>
		
			<option value="2575">75&nbsp; cms</option>
		
			<option value="2576">76&nbsp; cms</option>
		
			<option value="2577">77&nbsp; cms</option>
		
			<option value="2578">78&nbsp; cms</option>
		
			<option value="2579">79&nbsp; cms</option>
		
			<option value="2580">80&nbsp; cms</option>
		
			<option value="2581">81&nbsp; cms</option>
		
			<option value="2582">82&nbsp; cms</option>
		
			<option value="2583">83&nbsp; cms</option>
		
			<option value="2584">84&nbsp; cms</option>
		
			<option value="2585">85&nbsp; cms</option>
		
			<option value="2586">86&nbsp; cms</option>
		
			<option value="2587">87&nbsp; cms</option>
		
			<option value="2588">88&nbsp; cms</option>
		
			<option value="2589">89&nbsp; cms</option>
		
			<option value="2590">90&nbsp; cms</option>
		
			<option value="2591">91&nbsp; cms</option>
		
			<option value="2592">92&nbsp; cms</option>
		
			<option value="2593">93&nbsp; cms</option>
		
			<option value="2594">94&nbsp; cms</option>
		
			<option value="2595">95&nbsp; cms</option>
		
			<option value="2596">96&nbsp; cms</option>
		
			<option value="2597">97&nbsp; cms</option>
		
			<option value="2598">98&nbsp; cms</option>
		
			<option value="2599">99&nbsp; cms</option>
		
			<option value="25100">100&nbsp; cms</option>
		
			<option value="25101">101&nbsp; cms</option>
		
			<option value="25102">102&nbsp; cms</option>
		
			<option value="25103">103&nbsp; cms</option>
		
			<option value="25104">104&nbsp; cms</option>
		
			<option value="25105">105&nbsp; cms</option>
		
			<option value="25106">106&nbsp; cms</option>
		
			<option value="25107">107&nbsp; cms</option>
		
			<option value="25108">108&nbsp; cms</option>
		
			<option value="25109">109&nbsp; cms</option>
		
			<option value="25110">110&nbsp; cms</option>
		
			<option value="25111">111&nbsp; cms</option>
		
			<option value="25112">112&nbsp; cms</option>
		
			<option value="25113">113&nbsp; cms</option>
		
			<option value="25114">114&nbsp; cms</option>
		
			<option value="25115">115&nbsp; cms</option>
		
			<option value="25116">116&nbsp; cms</option>
		
			<option value="25117">117&nbsp; cms</option>
		
			<option value="25118">118&nbsp; cms</option>
		
			<option value="25119">119&nbsp; cms</option>
		
			<option value="25120">120&nbsp; cms</option>
		
			<option value="25121">121&nbsp; cms</option>
		
			<option value="25122">122&nbsp; cms</option>
		
			<option value="25123">123&nbsp; cms</option>
		
			<option value="25124">124&nbsp; cms</option>
		
			<option value="25125">125&nbsp; cms</option>
		
			<option value="25126">126&nbsp; cms</option>
		
			<option value="25127">127&nbsp; cms</option>
		
			<option value="25128">128&nbsp; cms</option>
		
			<option value="25129">129&nbsp; cms</option>
		
			<option value="25130">130&nbsp; cms</option>
		
			<option value="25131">131&nbsp; cms</option>
		
			<option value="25132">132&nbsp; cms</option>
		
			<option value="25133">133&nbsp; cms</option>
		
			<option value="25134">134&nbsp; cms</option>
		
			<option value="25135">135&nbsp; cms</option>
		
			<option value="25136">136&nbsp; cms</option>
		
			<option value="25137">137&nbsp; cms</option>
		
			<option value="25138">138&nbsp; cms</option>
		
			<option value="25139">139&nbsp; cms</option>
		
			<option value="25140">140&nbsp; cms</option>
		
			<option value="25141">141&nbsp; cms</option>
		
			<option value="25142">142&nbsp; cms</option>
		
			<option value="25143">143&nbsp; cms</option>
		
			<option value="25144">144&nbsp; cms</option>
		
			<option value="25145">145&nbsp; cms</option>
		
			<option value="25146">146&nbsp; cms</option>
		
			<option value="25147">147&nbsp; cms</option>
		
			<option value="25148">148&nbsp; cms</option>
		
			<option value="25149">149&nbsp; cms</option>
		
			<option value="25150">150&nbsp; cms</option>
		
			<option value="25151">151&nbsp; cms</option>
		
			<option value="25152">152&nbsp; cms</option>
		
			<option value="25153">153&nbsp; cms</option>
		
			<option value="25154">154&nbsp; cms</option>
		
			<option value="25155">155&nbsp; cms</option>
		
			<option value="25156">156&nbsp; cms</option>
		
			<option value="25157">157&nbsp; cms</option>
		
			<option value="25158">158&nbsp; cms</option>
		
			<option value="25159">159&nbsp; cms</option>
		
			<option value="25160">160&nbsp; cms</option>
		
			<option value="25161">161&nbsp; cms</option>
		
			<option value="25162">162&nbsp; cms</option>
		
			<option value="25163">163&nbsp; cms</option>
		
			<option value="25164">164&nbsp; cms</option>
		
			<option value="25165">165&nbsp; cms</option>
		
			<option value="25166">166&nbsp; cms</option>
		
			<option value="25167">167&nbsp; cms</option>
		
			<option value="25168">168&nbsp; cms</option>
		
			<option value="25169">169&nbsp; cms</option>
		
			<option value="25170">170&nbsp; cms</option>
		
			<option value="25171">171&nbsp; cms</option>
		
			<option value="25172">172&nbsp; cms</option>
		
			<option value="25173">173&nbsp; cms</option>
		
			<option value="25174">174&nbsp; cms</option>
		
			<option value="25175">175&nbsp; cms</option>
		
			<option value="25176">176&nbsp; cms</option>
		
			<option value="25177">177&nbsp; cms</option>
		
			<option value="25178">178&nbsp; cms</option>
		
			<option value="25179">179&nbsp; cms</option>
		
			<option value="25180">180&nbsp; cms</option>
		
			<option value="25181">181&nbsp; cms</option>
		
			<option value="25182">182&nbsp; cms</option>
		
			<option value="25183">183&nbsp; cms</option>
		
			<option value="25184">184&nbsp; cms</option>
		
			<option value="25185">185&nbsp; cms</option>
		
			<option value="25186">186&nbsp; cms</option>
		
			<option value="25187">187&nbsp; cms</option>
		
			<option value="25188">188&nbsp; cms</option>
		
			<option value="25189">189&nbsp; cms</option>
		
			<option value="25190">190&nbsp; cms</option>
		
			<option value="25191">191&nbsp; cms</option>
		
			<option value="25192">192&nbsp; cms</option>
		
			<option value="25193">193&nbsp; cms</option>
		
			<option value="25194">194&nbsp; cms</option>
		
			<option value="25195">195&nbsp; cms</option>
		
			<option value="25196">196&nbsp; cms</option>
		
			<option value="25197">197&nbsp; cms</option>
		
			<option value="25198">198&nbsp; cms</option>
		
			<option value="25199">199&nbsp; cms</option>
		
			<option value="25200">200&nbsp; cms</option>
		
			<option value="25201">201&nbsp; cms</option>
		
			<option value="25202">202&nbsp; cms</option>
		
			<option value="25203">203&nbsp; cms</option>
		
			<option value="25204">204&nbsp; cms</option>
		
			<option value="25205">205&nbsp; cms</option>
		
			<option value="25206">206&nbsp; cms</option>
		
			<option value="25207">207&nbsp; cms</option>
		
			<option value="25208">208&nbsp; cms</option>
		
			<option value="25209">209&nbsp; cms</option>
		
			<option value="25210">210&nbsp; cms</option>
		
			<option value="25211">211&nbsp; cms</option>
		
			<option value="25212">212&nbsp; cms</option>
		
			<option value="25213">213&nbsp; cms</option>
		
			<option value="25214">214&nbsp; cms</option>
		
			<option value="25215">215&nbsp; cms</option>
		
			<option value="25216">216&nbsp; cms</option>
		
			<option value="25217">217&nbsp; cms</option>
		
			<option value="25218">218&nbsp; cms</option>
		
			<option value="25219">219&nbsp; cms</option>
		
			<option value="25220">220&nbsp; cms</option>
		
			<option value="25221">221&nbsp; cms</option>
		
			<option value="25222">222&nbsp; cms</option>
		
			<option value="25223">223&nbsp; cms</option>
		
			<option value="25224">224&nbsp; cms</option>
		
			<option value="25225">225&nbsp; cms</option>
		
			<option value="25226">226&nbsp; cms</option>
		
			<option value="25227">227&nbsp; cms</option>
		
			<option value="25228">228&nbsp; cms</option>
		
			<option value="25229">229&nbsp; cms</option>
		
			<option value="25230">230&nbsp; cms</option>
		
			<option value="25231">231&nbsp; cms</option>
		
			<option value="25232">232&nbsp; cms</option>
		
			<option value="25233">233&nbsp; cms</option>
		
			<option value="25234">234&nbsp; cms</option>
		
			<option value="25235">235&nbsp; cms</option>
		
			<option value="25236">236&nbsp; cms</option>
		
			<option value="25237">237&nbsp; cms</option>
		
			<option value="25238">238&nbsp; cms</option>
		
			<option value="25239">239&nbsp; cms</option>
		
			<option value="25240">240&nbsp; cms</option>
		
			<option value="25241">241&nbsp; cms</option>
		
			<option value="25242">242&nbsp; cms</option>
		
			<option value="25243">243&nbsp; cms</option>
		
			<option value="25244">244&nbsp; cms</option>
		
			<option value="25245">245&nbsp; cms</option>
		
			<option value="25246">246&nbsp; cms</option>
		
			<option value="25247">247&nbsp; cms</option>
		
			<option value="25248">248&nbsp; cms</option>
		
			<option value="25249">249&nbsp; cms</option>
		
			<option value="25250">250&nbsp; cms</option>
		
      </select>

        <!--Codigo para determinar si se debe incluir el campo oculto para actualizar el campo del id dado-->

        
	  </td>

    </tr>
    <tr>
      <td class="txtosFormularioNoticiaCriminal">Contorno Cara </td>
      <td class="datoFormulario">&nbsp;</td>
      <td class="datoFormulario">
        <select name="2" id="2" class="datoFormulario">
           

     <option>---Seleccione un valor de la lista---</option>
          <option value="6">Redondo</option>
          <option value="7">Ovalado</option>
          <option value="8">Cuadrado</option>
          <option value="9">Asimetrico</option>
        </select>


        <!--Codigo para determinar si se debe incluir el campo oculto para actualizar el campo del id dado-->

        


      </td>
      <td width="2%" class="datoFormulario">&nbsp;</td>
      <td width="15%" class="txtosFormularioNoticiaCriminal">Color de Piel</td>
      <td width="1%" class="datoFormulario">&nbsp;</td>
      <td class="datoFormulario"><select name="3" id="3" class="datoFormulario">
    
    <option>---Seleccione un valor de la lista---</option>
        <option value="10">Albino</option>
        <option value="11">Blanco</option>
        <option value="12">Trigueño</option>
        <option value="13">Negro</option>
        <option value="14">Moreno</option>
        <option value="15">Amarillo</option>
      </select>


      <!--Codigo para determinar si se debe incluir el campo oculto para actualizar el campo del id dado-->

      



      </td>

    </tr>
    <tr>
      <td class="txtosFormularioNoticiaCriminal">Particularidades de la Piel</td>
      <td class="datoFormulario">&nbsp;</td>
      <td class="datoFormulario"><select name="4" id="4" class="datoFormulario">
     
     <option>---Seleccione un valor de la lista---</option>
        <option value="16">Acne</option>
        <option value="17">Cicatrices Acne</option>
        <option value="18">Manchada</option>
        <option value="19">Pecosa</option>
      </select>


      <!--Codigo para determinar si se debe incluir el campo oculto para actualizar el campo del id dado-->

      


      </td>
      <td width="2%" class="datoFormulario">&nbsp;</td>
      <td width="15%" class="datoFormulario">&nbsp;</td>
      <td width="1%" class="datoFormulario">&nbsp;</td>
      <td width="30%" class="datoFormulario">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td width="2%" class="datoFormulario">&nbsp;</td>
      <td width="15%" class="datoFormulario">&nbsp;</td>
      <td width="1%" class="datoFormulario">&nbsp;</td>
      <td width="30%" class="datoFormulario">&nbsp;</td>
    </tr>
    <tr>
      <td class="txtosFormularioNoticiaCriminal">Color Cabello </td>
      <td class="datoFormulario">&nbsp;</td>
      <td class="datoFormulario"><select name="5" id="5" class="datoFormulario">
    
    <option>---Seleccione un valor de la lista---</option>
        <option value="20">Albino</option>
        <option value="21">Cano</option>
        <option value="22">Entrecano</option>
        <option value="23">Rubio</option>
        <option value="24">Castaño</option>
        <option value="25">Rojizo</option>
        <option value="26">Negro</option>
        <option value="27">Tinturado</option>
      </select>


      <!--Codigo para determinar si se debe incluir el campo oculto para actualizar el campo del id dado-->

      


      </td>
      <td width="2%" class="datoFormulario">&nbsp;</td>
      <td class="txtosFormularioNoticiaCriminal">Longitud Cabello </td>
      <td width="1%" class="datoFormulario">&nbsp;</td>
      <td width="30%" class="datoFormulario">
<select name="6" id="6" class="datoFormulario">
    
    <option>---Seleccione un valor de la lista---</option>
        <option value="28">Rapado</option>
        <option value="29">Corto</option>
        <option value="30">Mediano</option>
        <option value="31">Largo</option>
        </select>

        <!--Codigo para determinar si se debe incluir el campo oculto para actualizar el campo del id dado-->

        


      </td>
    </tr>
    <tr>
      <td class="txtosFormularioNoticiaCriminal">Forma Cabello </td>
      <td class="datoFormulario">&nbsp;</td>
      <td class="datoFormulario"><select name="7" id="7" class="datoFormulario">
    
    <option>---Seleccione un valor de la lista---</option>
        <option value="32">Lacio</option>
        <option value="33">Liso</option>
        <option value="34">Ondulado</option>
        <option value="35">Lanoso</option>
        <option value="36">Crespo</option>
      </select>

      <!--Codigo para determinar si se debe incluir el campo oculto para actualizar el campo del id dado-->

        

      </td>
      <td width="2%" class="datoFormulario">&nbsp;</td>
      <td class="txtosFormularioNoticiaCriminal">Calvicie</td>
      <td width="1%" class="datoFormulario">&nbsp;</td>
      <td width="30%" class="datoFormulario">
		<select name="8" id="8" class="datoFormulario">
    
    <option>---Seleccione un valor de la lista---</option>
        <option value="37">Total</option>
        <option value="38">Coronal</option>
        <option value="39">Fronto Coro</option>
        <option value="40">Frontal</option>
        <option value="41">Bilateral</option>
      </select>


      <!--Codigo para determinar si se debe incluir el campo oculto para actualizar el campo del id dado-->

        


      </td>
    </tr>
    <tr>
      <td class="txtosFormularioNoticiaCriminal">Color</td>
      <td class="datoFormulario">&nbsp;</td>
      <td class="datoFormulario"><select name="9" id="9" class="datoFormulario">
    
    <option>---Seleccione un valor de la lista---</option>
        <option value="42">Negro</option>
        <option value="43">Castaño</option>
        <option value="44">Claro</option>
        <option value="45">Rojizo</option>
            </select>

            <!--Codigo para determinar si se debe incluir el campo oculto para actualizar el campo del id dado-->

        


            </td>
      <td width="2%" class="datoFormulario">&nbsp;</td>
      <td class="txtosFormularioNoticiaCriminal">Particularidad Cabello </td>
      <td width="1%" class="datoFormulario">&nbsp;</td>
      <td width="30%" class="datoFormulario">
	  <select name="10" id="10" class="datoFormulario">
        
        <option>---Seleccione un valor de la lista---</option>
        <option value="46">Bisoñe</option>
        <option value="47">Transplante</option>
        <option value="48">Peluca</option>
      </select>


      <!--Codigo para determinar si se debe incluir el campo oculto para actualizar el campo del id dado-->

        


      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td class="txtosFormularioNoticiaCriminal">Color Ojos </td>
      <td class="datoFormulario">&nbsp;</td>
      <td class="datoFormulario"><select name="11" id="11" class="datoFormulario">
    
    <option>---Seleccione un valor de la lista---</option>
        <option value="49">Miel</option>
        <option value="50">Cafes</option>
        <option value="51">Grises</option>
        <option value="52">Azules</option>
        <option value="53">Verdes</option>
      </select>

       <!--Codigo para determinar si se debe incluir el campo oculto para actualizar el campo del id dado-->

        


      </td>
      <td width="2%" class="datoFormulario">&nbsp;</td>
      <td class="txtosFormularioNoticiaCriminal">Tamano Ojos </td>
      <td width="1%" class="datoFormulario">&nbsp;</td>
      <td width="30%" class="datoFormulario">
		<select name="12" id="12" class="datoFormulario">
    
    <option>---Seleccione un valor de la lista---</option>
        <option value="64">Grandes</option>
        <option value="65">Medianos</option>
        <option value="66">Pequeños</option>
      </select>


      <!--Codigo para determinar si se debe incluir el campo oculto para actualizar el campo del id dado-->

        


      </td>
    </tr>
    <tr>
      <td class="txtosFormularioNoticiaCriminal">Particularidad</td>
      <td class="datoFormulario">&nbsp;</td>
      <td class="datoFormulario"><select name="13" id="13" class="datoFormulario">
    
    <option>---Seleccione un valor de la lista---</option>
        <option value="54">Ojo de vidrio</option>
        <option value="55">Falta Ojo Izquierdo</option>
        <option value="56">Falta Ojo Derecho</option>
        <option value="57">Diferente Color</option>
        <option value="58">Lente Contacto</option>
        <option value="59">Parpado Caido</option>
        <option value="60">Usa Gafas</option>
        <option value="61">Cataratas</option>
        <option value="62">Bizco</option>
        <option value="63">Ciego</option>
      </select>


      <!--Codigo para determinar si se debe incluir el campo oculto para actualizar el campo del id dado-->

        


      </td>

      <td width="2%" class="datoFormulario">&nbsp;</td>
      <td class="txtosFormularioNoticiaCriminal">Nariz</td>
      <td width="1%" class="datoFormulario">&nbsp;</td>
      <td width="30%" class="datoFormulario">
	  <select name="14" id="14" class="datoFormulario">
    
    <option>---Seleccione un valor de la lista---</option>
        <option value="67">Desv. Derecha</option>
        <option value="68">DEsv. Izquierda</option>
        <option value="69">Achatada</option>
        <option value="70">Operada</option>
      </select>


      <!--Codigo para determinar si se debe incluir el campo oculto para actualizar el campo del id dado-->

        


      </td>
    </tr>
    <tr>
      <td class="txtosFormularioNoticiaCriminal">Boca</td>
      <td class="datoFormulario">&nbsp;</td>
      <td class="datoFormulario"><select name="15" id="15" class="datoFormulario">
        
    <option>---Seleccione un valor de la lista---</option>
        <option value="71">Grande</option>
        <option value="72">Mediana</option>
        <option value="73">Pequeña</option>
      </select>


      <!--Codigo para determinar si se debe incluir el campo oculto para actualizar el campo del id dado-->

        


      </td>

      <td width="2%" class="datoFormulario">&nbsp;</td>
      <td class="txtosFormularioNoticiaCriminal">Orejas</td>
      <td width="1%" class="datoFormulario">&nbsp;</td>
      <td width="30%" class="datoFormulario">
      <select name="16" id="16" class="datoFormulario">
       
      <option>---Seleccione un valor de la lista---</option>
        <option value="93">Peludas</option>
        <option value="94">Perforadas</option>
        <option value="95">Protesis Auditivas</option>
      </select>


      <!--Codigo para determinar si se debe incluir el campo oculto para actualizar el campo del id dado-->

        


      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td class="datoFormulario">&nbsp;</td>
      <td class="datoFormulario">&nbsp;</td>
      <td class="datoFormulario">&nbsp;</td>
      <td class="datoFormulario">&nbsp;</td>
    </tr>
    <tr>
      <td class="txtosFormularioNoticiaCriminal">Barba</td>
      <td class="datoFormulario">&nbsp;</td>
      <td class="datoFormulario">&nbsp;</td>
	  <td class="datoFormulario">&nbsp;</td>
	  <td class="datoFormulario">&nbsp;</td>
	  <td class="datoFormulario">&nbsp;</td>
	  <td class="datoFormulario">&nbsp;</td>
    </tr>
    <tr>
      <td class="txtosFormularioNoticiaCriminal">Capilaridad de Barba </td>
      <td class="datoFormulario">&nbsp;</td>
      <td class="datoFormulario"><select name="17" id="17" class="datoFormulario">
        
    <option>---Seleccione un valor de la lista---</option>
        <option value="74">Poblada</option>
        <option value="75">Despoblada</option>
      </select>

      <!--Codigo para determinar si se debe incluir el campo oculto para actualizar el campo del id dado-->

        


      </td>
      <td width="2%" class="datoFormulario">&nbsp;</td>
      <td class="txtosFormularioNoticiaCriminal">Estilo</td>
      <td width="1%" class="datoFormulario">&nbsp;</td>
      <td width="30%" class="datoFormulario">
      <select name="18" id="18" class="datoFormulario">
        
    <option>---Seleccione un valor de la lista---</option>
        <option value="76">Chivera</option>
        <option value="77">Candado</option>
        <option value="78">Patillas</option>
      </select>

      <!--Codigo para determinar si se debe incluir el campo oculto para actualizar el campo del id dado-->

        


      </td>
    </tr>
    <tr>
      <td class="txtosFormularioNoticiaCriminal">Longitud</td>
      <td class="datoFormulario">&nbsp;</td>
      <td class="datoFormulario"><select name="19" id="19" class="datoFormulario">
        
    <option>---Seleccione un valor de la lista---</option>
        <option value="79">Larga</option>
        <option value="80">Corta</option>
        <option value="81">Mediana</option>
        <option value="82">Rasurada</option>
      </select>

      <!--Codigo para determinar si se debe incluir el campo oculto para actualizar el campo del id dado-->

        


      </td>
      <td width="2%" class="datoFormulario">&nbsp;</td>
      <td class="txtosFormularioNoticiaCriminal">Particularidad </td>
      <td width="1%" class="datoFormulario">&nbsp;</td>
      <td width="30%" class="datoFormulario">
      <select name="20" id="20" class="datoFormulario">
        
        <option>---Seleccione un valor de la lista---</option>
        <option value="83">Cano</option>
        <option value="84">Entrecaco</option>
      </select>

      <!--Codigo para determinar si se debe incluir el campo oculto para actualizar el campo del id dado-->

        

      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td class="datoFormulario">&nbsp;</td>
      <td class="datoFormulario">&nbsp;</td>
      <td class="datoFormulario">&nbsp;</td>
      <td class="datoFormulario">&nbsp;</td>
    </tr>
    <tr>
      <td class="txtosFormularioNoticiaCriminal">Bigote</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td class="datoFormulario">&nbsp;</td>
      <td class="datoFormulario">&nbsp;</td>
      <td class="datoFormulario">&nbsp;</td>
      <td class="datoFormulario">&nbsp;</td>

    </tr>
    <tr>
      <td class="txtosFormularioNoticiaCriminal">Capilaridad de Bigote </td>
      <td class="datoFormulario">&nbsp;</td>
      <td class="datoFormulario"><select name="21" id="21" class="datoFormulario">
        
    <option>---Seleccione un valor de la lista---</option>
        <option value="85">Poblado</option>
        <option value="86">Despoblado</option>
      </select>


      <!--Codigo para determinar si se debe incluir el campo oculto para actualizar el campo del id dado-->

        

      </td>
      <td width="2%" class="datoFormulario">&nbsp;</td>
      <td class="txtosFormularioNoticiaCriminal">Longitud</td>
      <td width="1%" class="datoFormulario">&nbsp;</td>
      <td width="30%" class="datoFormulario">
	  <select name="22" id="22" class="datoFormulario">
        
    <option>---Seleccione un valor de la lista---</option>
        <option value="87">Largo</option>
        <option value="88">Corto</option>
        <option value="89">Mediano</option>
        <option value="90">Rasurado</option>
      </select>

      <!--Codigo para determinar si se debe incluir el campo oculto para actualizar el campo del id dado-->

        


      </td>
    </tr>
    <tr>
      <td class="txtosFormularioNoticiaCriminal">Particularidad </td>
      <td class="datoFormulario">&nbsp;</td>
      <td class="datoFormulario"><select name="23" id="23" class="datoFormulario">
         
    <option>---Seleccione un valor de la lista---</option>
        <option value="91">Cano</option>
        <option value="92">Entrecano</option>
      </select>

      <!--Codigo para determinar si se debe incluir el campo oculto para actualizar el campo del id dado-->

        

      </td>
      <td class="datoFormulario">&nbsp;</td>
      <td class="datoFormulario">&nbsp;</td>
      <td class="datoFormulario">&nbsp;</td>
      <td class="datoFormulario">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td class="datoFormulario">&nbsp;</td>
      <td class="datoFormulario">&nbsp;</td>
      <td class="datoFormulario">&nbsp;</td>
      <td class="datoFormulario">&nbsp;</td>
	</tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td class="datoFormulario">&nbsp;</td>
      <td class="datoFormulario">&nbsp;</td>
      <td class="datoFormulario">&nbsp;</td>
      <td class="datoFormulario">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="7" class="subtitulos"><span class="titulos"> Señales Particulares </span> </td>
    </tr>
    <tr>
      <td colspan="7"><table width="100%" border="0">
        <tbody><tr>
          <td class="txtosFormularioNoticiaCriminal">&nbsp;</td>
          <td class="txtosFormularioNoticiaCriminal">&nbsp;</td>
          <td class="txtosFormularioNoticiaCriminal">&nbsp;</td>
        </tr>
        <tr>
          <td width="20%" class="subtitulos">&nbsp;</td>
          <td width="31%" class="subtitulos"><span class="titulos">Ubicacion</span></td>
          <td width="19%" class="subtitulos"><span class="titulos">Caracteriticas</span></td>
        </tr>

        <tr>
          <td height="24" class="txtosFormularioNoticiaCriminal">Lunares</td>
          <td class="datoFormulario">
            
          <input type="text" name="camoUbicacionLunares" maxlength="33" size="50" value="" class="datoFormulario">
      
     </td>
          <td class="datoFormulario">
     
          <input type="text" name="camoObservacionesLunares" maxlength="33" size="50" value="" class="datoFormulario">
    
      </td>
        </tr>
        <tr>
          <td height="25" class="txtosFormularioNoticiaCriminal">Pecas</td>
          <td class="datoFormulario">

       
          <input type="text" name="camoUbicacionPecas" maxlength="33" size="50" value="" class="datoFormulario">
    
    </td>
          <td class="datoFormulario">
      
          <input type="text" name="camoObservacionesPecas" maxlength="33" size="50" value="" class="datoFormulario">
    
      </td>
        </tr>
        <tr>
          <td class="txtosFormularioNoticiaCriminal">Manchas</td>
          <td class="datoFormulario">
      
          <input type="text" name="camoUbicacionManchas" maxlength="33" size="50" value="" class="datoFormulario">
    
      </td>
          <td class="datoFormulario">
      
          <input type="text" name="camoObservacionesManchas" maxlength="33" size="50" value="" class="datoFormulario">
    
      </td>
        </tr>
        <tr>
          <td height="24" class="txtosFormularioNoticiaCriminal">Quemaduras</td>
          <td class="datoFormulario">
      
         <input type="text" name="camoUbicacionQuemaduras" maxlength="33" size="50" value="" class="datoFormulario">
    

     </td>
          <td class="datoFormulario">
       
          <input type="text" name="camoObservacionesQuemaduras" maxlength="33" size="50" value="" class="datoFormulario">
    
      </td>
        </tr>
        <tr>
          <td class="txtosFormularioNoticiaCriminal">Tatuajes</td>
          <td class="datoFormulario">
      
          <input type="text" name="camoUbicacionTatuajes" maxlength="33" size="50" value="" class="datoFormulario">
    

      </td>
          <td class="datoFormulario">
      
          <input type="text" name="camoObservacionesTatuajes" maxlength="33" size="50" value="" class="datoFormulario">
    
      </td>
        </tr>
        <tr>
          <td class="txtosFormularioNoticiaCriminal">Cicatrices</td>
          <td class="datoFormulario">
       
          <input type="text" name="camoUbicacionCicatrices" maxlength="33" size="50" value="" class="datoFormulario">
    
      </td>
          <td class="datoFormulario">
      
          <input type="text" name="camoObservacionesCicatrices" maxlength="33" size="50" value="" class="datoFormulario">
    
      </td>
        </tr>
        <tr>
          <td height="24" class="txtosFormularioNoticiaCriminal">Heridas en Cicatrizacion</td>
          <td class="datoFormulario">
      
          <input type="text" name="camoUbicacionHeridas" maxlength="33" size="50" value="" class="datoFormulario">
    
      </td>
          <td class="datoFormulario">
      
          <input type="text" name="camoObservacionesHeridas" maxlength="33" size="50" value="" class="datoFormulario">
    
      </td>
        </tr>
        <tr>
          <td class="txtosFormularioNoticiaCriminal">Protesis</td>
          <td class="datoFormulario">
      
          <input type="text" name="camoUbicacionProtesis" maxlength="33" size="50" value="" class="datoFormulario">
    
      </td>
          <td class="datoFormulario">
      
          <input type="text" name="camoObservacionesProtesis" maxlength="33" size="50" value="" class="datoFormulario">
    
      </td>
        </tr>
        <tr>
          <td class="txtosFormularioNoticiaCriminal">Malformaciones</td>
          <td class="datoFormulario">
      
          <input type="text" name="camoUbicacionMalformaciones" maxlength="33" size="50" value="" class="datoFormulario">
    
      </td>
          <td class="datoFormulario">
      
          <input type="text" name="camoObservacionesMalformaciones" maxlength="33" size="50" value="" class="datoFormulario">
    
      </td>
        </tr>
        <tr>
          <td height="24" class="txtosFormularioNoticiaCriminal">Discapacidades</td>
          <td class="datoFormulario">
      
            <input type="text" name="camoUbicacionDiscapacidades" maxlength="33" size="50" value="" class="datoFormulario">
      
        </td>
      <td class="datoFormulario">
      
          <input type="text" name="camoObservacionesDiscapacidades" maxlength="33" size="50" value="" class="datoFormulario">
    
      </td>
        </tr>
        <tr>
          <td class="txtosFormularioNoticiaCriminal">Amputaciones</td>
          <td class="datoFormulario">
      
            <input type="text" name="camoUbicacionAmputaciones" maxlength="33" size="50" value="" class="datoFormulario">
      
      </td>
          <td class="datoFormulario">
      
          <input type="text" name="camoObservacionesAmputaciones" maxlength="33" size="50" value="" class="datoFormulario">
    
      </td>
        </tr>
        <tr>
          <td class="txtosFormularioNoticiaCriminal">Presenta Estrias </td>
          <td class="datoFormulario">
      
              <input type="text" name="camoUbicacionEstrias" maxlength="33" size="50" value="" class="datoFormulario">
        
        </td><td class="datoFormulario">
      
          <input type="text" name="camoObservacionesEstrias" maxlength="33" size="50" value="" class="datoFormulario">
    
      </td>
        </tr>
        <tr>
          <td height="24" class="txtosFormularioNoticiaCriminal">Cabellosidades</td>
          <td class="datoFormulario">
      
                <input type="text" name="camoUbicacionCabellosidades" maxlength="33" size="50" value="" class="datoFormulario">
          
        </td><td class="datoFormulario">
      
          <input type="text" name="camoObservacionesCabellosidades" maxlength="33" size="50" value="" class="datoFormulario">
    
      </td>
        </tr>
        <tr>
          <td class="txtosFormularioNoticiaCriminal">Vellosidad</td>
          <td class="datoFormulario">
      
                <input type="text" name="camoUbicacionVellosidad" maxlength="33" size="50" value="" class="datoFormulario">
          
      </td>
          <td class="datoFormulario">
      
          <input type="text" name="camoObservacionesVellosidad" maxlength="33" size="50" value="" class="datoFormulario">
    
      </td>
        </tr>
        <tr>
          <td class="txtosFormularioNoticiaCriminal">Unas Encarnadas </td>
          <td class="datoFormulario">
      
                <input type="text" name="camoUbicacionEncarnadas" maxlength="33" size="50" value="" class="datoFormulario">
          
      </td>
          <td class="datoFormulario">
      
          <input type="text" name="camoObservacionesEncarnadas" maxlength="33" size="50" value="" class="datoFormulario">
    
      </td>
        </tr>
        <tr>
          <td class="txtosFormularioNoticiaCriminal">Unas Mordidas </td>
          <td class="datoFormulario">
      
                <input type="text" name="camoUbicacionMordidas" maxlength="33" size="50" value="" class="datoFormulario">
          
      </td>
          <td class="datoFormulario">
      
          <input type="text" name="camoObservacionesMordidas" maxlength="33" size="50" value="" class="datoFormulario">
    
      </td>
        </tr>
        <tr>
          <td class="txtosFormularioNoticiaCriminal">Unas Pintadas </td>
          <td class="datoFormulario">
       
                <input type="text" name="camoUbicacionPintadas" maxlength="33" size="50" value="" class="datoFormulario">
          
      </td>
          <td class="datoFormulario">
      
          <input type="text" name="camoObservacionesPintadas" maxlength="33" size="50" value="" class="datoFormulario">
    
      </td>
        </tr>
        <tr>
          <td height="24" class="txtosFormularioNoticiaCriminal">Unas Artificiales </td>
          <td class="datoFormulario">
         
                  <input type="text" name="camoUbicacionArtificiales" maxlength="33" size="50" value="" class="datoFormulario">
            
      </td><td class="datoFormulario">
      
          <input type="text" name="camoObservacionesArtificiales" maxlength="33" size="50" value="" class="datoFormulario">
    
      </td>
        </tr>
        <tr>
          <td class="txtosFormularioNoticiaCriminal">Ausencia de Unas </td>
          <td class="datoFormulario">
      
                  <input type="text" name="camoUbicacionAusencia" maxlength="33" size="50" value="" class="datoFormulario">
            
      </td>
          <td class="datoFormulario">
      
          <input type="text" name="camoObservacionesAusencia" maxlength="33" size="50" value="" class="datoFormulario">
    
      </td>
        </tr>
      </tbody></table>
      <p></p></td>
    </tr>
    <tr>
    </tr></tbody></table><table border="0" cellpadding="0" cellspacing="0" width="100%">
     <tbody>

      <tr>
        <td height="20" width="290"></td>
        <td height="38">
    
          <span class="txtosFormularioNoticiaCriminal">
          
             <input type="button" class="boton" value="Modificar" onclick="enviarFormaCarMon()">
          </span>

          
       </td>
      </tr>
     </tbody>
    </table>
   </td></tr>
</tbody></table>