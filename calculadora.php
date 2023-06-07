<section class="container-logo-calculadora">
    <img src="img/logo4.png" alt="logo" class="logo-calculadora">
    <h1>Mi Calculadora</h1>
</section>
<section class="secti">
    <div class="container-car">
    <div>
        <h6>Trabajador tiempo completo</h6>
        <h6>Trabajador por días</h6>
    </div>
    <div>
        <p>Para trabajadores dependientes que laboren el mes completo o periodos parciales cuya remuneración supere el salario mínimo legal vigente</p>
        <p>En el caso de trabajadores de servicios domestico que trabajen mes completo la liquidación de las prestaciones sociales será equivalente a la del trabajador de tiempo completo</p>
    </div>
    <div>
        <span>1. Fecha de inicio del periodo a liquidar</span>
        <input type="date" id="iniciofecha" name="iniciofecha">
    </div>
    <div>
        <span>2. Fecha final del periodo a liquidar</span>
        <input type="date" id="fechafin" name="fechafin">
    </div> 
    <div>
        <span>3. Ingrese su salario mensual</span>
        <input type="number" id="salario" name="salario">
    </div>
    <div>
        <span>4. ¿Tiene derecho a un auxilio de transporte?</span>
        <div style="border:none">
        <input type="radio" id="si" name="dd" checked>
        <label for="si">SI</label>
        <input type="radio" id="no" name="dd">
        <label for="no">NO</label> 
        </div>       
    </div>
    <div>
        <span>5. Seleccione la clase de riesgos laborales correspondiente al sector de actividad y al cargo del trabajador.</span>
        <select name="select" id="riesgo">
            <option value="1">1</option> 
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
    </div>
    <div>
    <button class="fourth-button">Liquidación para Empleado</button>
    <button class="fourth-button">Liquidación para Empleador</button>
    </div>
    </div>
</section>