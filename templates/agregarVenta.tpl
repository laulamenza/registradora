<form action="agregarVenta" method="post" class="form">
    <ul class="listForm">
        <li><label>Importe<input type="number" min="0" name="monto"></label></li>
        <li> <label>Tipo de Pago
                <select name="tipoVenta" required>
                    <option value="efectivo">Efectivo</option>
                    <option value="qr">QR</option>
                    <option value="tarjeta">Tarjeta</option>
                </select>
            </label></li>
        <li> <button type="submit" class="btn btn-success">Agregar</button></li>
    </ul>
</form>
<div>
    {if  ($logueado)}
        <form action="resumenz">
            <button type="submit" class="btn btn-success">Resumen Z</button>
        </form>

    {/if}
</div>