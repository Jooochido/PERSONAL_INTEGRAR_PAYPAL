function init(){

}

$(document).ready(function(){
    const urlParams = new URLSearchParams(window.location.search);
    const vent_id = urlParams.get('vent_id');
    const paymentId = urlParams.get('paymentId');
    const token = urlParams.get('token');
    const PayerID = urlParams.get('PayerID');

    $.post("../../controller/venta.php?op=mostrar",{vent_id:vent_id},function(data){
        data=JSON.parse(data);
        //console.log(data);
        $('#vent_nomape').html(data.vent_nom+" "+data.vent_ape);
        $('#vent_dire').html(data.vent_dire);
        $('#vent_pais').html(data.vent_pais);
        $('#vent_depa').html(data.vent_depa);
        $('#vent_codpostal').html(data.vent_codpostal);
        $('#vent_email').html(data.vent_email);
        $('#vent_total').html("USD "+data.vent_total);
    })

    $.post("../../controller/venta.php?op=listar",{vent_id:vent_id},function(data){
        $('#listdetalle').html(data);
    })

    $.ajax({
        url:"../../controller/paypal.php?op=validar",
        method:"POST",
        data:{paymentId:paymentId,PayerID:PayerID},
        success:function(data){
            //data=JSON.parse(data);
            //console.log(data);
            actualizar(vent_id,paymentId,token,PayerID,data)
        }
    });
});

function actualizar(vent_id,paymentId,token,PayerID,json_data){
    $.ajax({
        url:"../../controller/venta.php?op=actualizar",
        method:"POST",
        data:{vent_id:vent_id,paymentId:paymentId,token:token,PayerID:PayerID,json_data:json_data},
        success:function(data){
            
        }
    });
}

init();
