{include file="header.tpl"}
<div class="container text-center">
    <div class="row align-items-start">
        <div class="col-4">
            {include file="agregarVenta.tpl"}
        </div>

        <div class="col-8">
            <table class="table text-center">
                <tr>
                    <th>Monto</th>
                    <th>Tipo de pago</th>
                    <th>Fecha</th>
                </tr>
                {foreach $ventas item=venta}
                    <tr>
                        <td>{$venta->monto}</td>
                        <td>{$venta->tipoVenta}</td>
                        <td>{$venta->fecha}</td>
                    </tr>
                {/foreach}

            </table>
        </div>
    </div>
</div>

{include file="footer.tpl"}