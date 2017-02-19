/**
 * Created by marciso on 10/02/2017.
 */

$('#nota').click(function(){
    console.log('funcionou');
    if($('#nota').is(":checked")){
        $("#notaFiscal").prop('disabled',false);
        $("#notaFiscal").val('');
    }else{
        $("#notaFiscal").prop('disabled',true);
        $("#notaFiscal").val("S/N");
    }
});

$('#course').change(function(){

    $.ajax({
        url: '../../index.php/Cliente/buscaCliente',
        type: 'POST',
        data:{
            nome: $('#course').val()
        },
        success : function (data) {
            var array = JSON.parse("[" + data + "]");

            $('#cliente').val(array[0][0]['id_clients']);
            $('#telefone').val(array[0][0]['telefone']);
        }
    });
});


$("#salvarVolume").click(function(){

    if($("#tipoVolume").val()==1) {
        var dados = {
            cliente: $('#cliente').val(),
            telefone: $('#telefone').val(),
            notafiscal: $('#notaFiscal').val(),
            desc: $('#desc').val(),
            dt_deposito: $('#dt_deposito').val(),
            tipoVolume: $('input:radio[name=tipoVolume]:checked').val(),
            tamanhoVolume: $('input:radio[name=tamanhoVolume]:checked').val()
        };

        $.ajax({
            url: 'cadastrarVolume',
            // url: 'index.php/Volume/cadastrarVolume',
            type: 'POST',
            data: dados,
            success: function (data) {
                limpaVolumeModel();
                $("#volumeSucesso").show();

                setTimeout(function () {
                    $('#inserirModal-modal').modal('toggle');
                    $("#volumeSucesso").hide();
                }, 800);
                window.location.reload();
            },
            error: function (data) {
                $("#volumeErro").show();
            }
        });
    }else{//Editando

    }

});

$('#salvarEnvio').click(function(){
    if($("#tipoVolume").val()==1) {
        var dados ={
            id_mercadoria   : $('#id_mercadoria').val(),
            veiculo         : $('#onibus_envio').val(),
            dt_envio        : $('#dt_envio').val()
        };

        $.ajax({
            url: 'cadastrarEnvio',
            type: 'POST',
            data: dados,
            success : function(data){
                limparEnvioModel();
                $('#envioSucesso').show();

                setTimeout(function(){
                    $('#despacharModal-modal').modal('toggle');
                    $("#envioSucesso").hide();
                },800);
                window.location.reload();
            },
            error: function(data){
                $('#envioErro').show();
            }
        });

    }else{//Editando

    }
});

$("#salvarRecebido").click(function(){
    if($("#tipoRecebido").val()==1) {
        var dados = {
            id_mercadoria   : $("#id_mercadoria_recebido").val(),
            dt_recebido     : $("#dt_recebido").val()
        };

        $.ajax({
            url: "cadastrarRecebido",
            type:"POST",
            data:dados,
            success: function(data){
                limparRecebidoModel();
                $('#recebidoSucesso').show();

                setTimeout(function(){
                    $('#receberModal-modal').modal('toggle');
                    $("#recebidoSucesso").hide();
                },800);
                window.location.reload();
            },
            error: function(data){
                $('#recebidoErro').show();
            }
        });
    }else{//editando

    }
});

$("#salvarEntregue").click(function(){
    if($("#tipoEntregue").val()==1){
        var dados = {
            id_mercadoria : $("#id_mercadoria_entregue").val(),
            dt_entregue : $("#dt_entregue").val()
        };

        $.ajax({
            url :"cadastrarEntregue",
            type: "POST",
            data: dados,
            success: function(data){
                limparEntregueModel();
                $('#entregueSucesso').show();

                setTimeout(function(){
                    $('#entregarModal-modal').modal('toggle');
                    $("#entregueSucesso").hide();
                },800);
                window.location.reload();
            },
            error: function(data){
                $("#entregueErro").show();
            }
        });
    }else{//editando

    }
});

$("#cancelarVolume").click(function(){
    limpaVolumeModel();
});

$("#cancelarEnvio").click(function(){
    limparEnvioModel();
});

$("#cancelarRecebido").click(function(){
    limparRecebidoModel();
});

$("#cancelarEntregue").click(function(){
    limparEntregueModel();
});

function limpaVolumeModel(){
    $('#cliente').val('');
    $('#course').val('');
    $('#telefone').val('');
    $('#notaFiscal').val('S/N');
    $('#desc').val('');
    $('#dt_deposito').val('');
    $('#tipoVolume1').prop('checked',true);
    $('#tamanhoVolume1').prop('checked',true);
    $("#volumeSucesso").hide();
    $("#volumeErro").hide();
}

function limparBuscaModel(){
    $('#cliente_busca').val('');
    $('#data_busca').val('');
    $('#onibus_busca').val('');
    $('#origem_busca').val('');
    $('#destino_busca').val('');
    $('#tp_volume1_busca').prop('checked',false);
    $('#tp_volume2_busca').prop('checked',false);
    $('#tp_volume3_busca').prop('checked',false);
    $('#tp_volume4_busca').prop('checked',false);
    $('#tm_volume1_busca').prop('checked',false);
    $('#tm_volume2_busca').prop('checked',false);
    $('#tm_volume3_busca').prop('checked',false);
}

function limparEnvioModel(){
    $('#onibus_envio').val('');
    $('#dt_envio').val('');
    $('#cliente_despacho').val('');
    $('#nota_fiscal_despacho').val('');
    $('#dt_entrada_despacho').val('');
    $('#descricao_despacho').val('');
    $('#tp_volume_despacho').val('');
    $('#tm_volume_despacho').val('');
    $("#envioSucesso").hide();
    $("#envioErro").hide();
}

function limparRecebidoModel(){
    $('#dt_recebido').val('');
}

function limparEntregueModel(){
    $("#dt_entregue").val();
}