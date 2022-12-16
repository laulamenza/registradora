{include file="header.tpl"}

<h2>Resumen Z del día {$fecha}</h2>

<table class="table text-center">

    <tr>
        <th>Monto Efectivo</th>
        <th>Cant ventas efectivo</th>
        <th>Monto QR/tarj</th>
        <th>Cant ventas QR/tarj</th>
        <th>Monto Total</th>
    </tr>
    <tr>
        <td>${$montoEfectivo[0]}</td>
        <td>{$cantEfect[0]}</td>
        <td>${$montoOtras[0]}</td>
        <td>{$cantOtras[0]}</td>
        <td>${$montoEfectivo[0]+$montoOtras[0]}</td>
    </tr>
</table>

<form action="z" method="post">
    <input type="hidden" name="montoEfectivo" value="{$montoEfectivo[0]}">
    <input type="hidden" name="cantEfect" value="{$cantEfect[0]}">
    <input type="hidden" name="montoOtras" value="{$montoOtras[0]}">
    <input type="hidden" name="cantOtras" value="{$cantOtras[0]}">
    <input type="hidden" name="fecha" value="{$fecha}">
    <button type="submit" class="btn btn-success">Guardar registro</button>
</form>

{include file="footer.tpl"}