<section class="section-b-space" id="pnlcheckout">
    <div class="container">
        <div class="checkout-page">
            <div class="checkout-form">
                <form>
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <div class="checkout-title">
                                <h3>Detalle de Invoice</h3>
                            </div>
                            <div class="row check-out">
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Nombres</div>
                                    <input type="text" id="vent_nom" name="vent_nom" value="Jonathan" placeholder="Nombre" required>
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Apellidos</div>
                                    <input type="text" id="vent_ape" name="vent_ape" value="Ramirez" placeholder="Apellidos" required>
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Telefono</div>
                                    <input type="text" id="vent_telf" name="vent_telf" value="1234567890" placeholder="Telefono" required>
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Email</div>
                                    <input type="text" id="vent_email" name="vent_email" value="ejemplo@gmail.com" placeholder="Email" required>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Pais</div>
                                    <select id="vent_pais" name="vent_pais" required>
                                        <option selected>Mexico</option>
                                        <option>Estados Unidos</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Direccion</div>
                                    <input type="text" id="vent_dire" name="vent_dire" value="Calle y numero" placeholder="Calle y numero" required>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Departamento</div>
                                    <input type="text" id="vent_depa" name="vent_depa" value="Depa" placeholder="Departamento" required>
                                </div>
                                <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                    <div class="field-label">Estado</div>
                                    <input type="text" id="vent_provin" name="vent_provin" value="Estado" placeholder="Estado" required>
                                </div>
                                <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                    <div class="field-label">Codigo Postal</div>
                                    <input type="text" id="vent_codpostal" name="vent_codpostal" value="00000" placeholder="Codigo Postal" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <div class="checkout-details">
                                <div class="order-box">
                                    <div class="title-box">
                                        <div>Producto <span>Total</span></div>
                                    </div>
                                    <ul class="qty" id="listdetallecheckout">
                                        
                                    </ul>
                                    <ul class="sub-total">
                                        <li>Subtotal <span class="count" id="det_subtotal_checkout">USD 00.00</span></li>
                                    </ul>
                                    <ul class="total">
                                        <li>Total <span class="count" id="det_total_checkout">USD 00.00</span></li>
                                    </ul>
                                </div>
                                <div class="payment-box">
                                    <div class="upper-box">
                                        <div class="payment-options">
                                            <ul>
                                                <li>
                                                    <div class="radio-option paypal">
                                                        <input type="radio" name="payment-group" id="payment-3" checked>
                                                        <label for="payment-3">PayPal<span class="image"><img src="../../public/images/paypal.png" alt=""></span></label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row cart-buttons">
                                        <div class="col-6"><a href="#" class="btn-solid btn" id="btnregresar">Regresar</a></div>
                                        <div class="col-6"><a href="#" class="btn-solid btn" id="btnpaypal">Realizar Pedido</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
