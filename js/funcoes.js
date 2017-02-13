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
    console.log($('#course').val());
    $.ajax({
        url: 'index.php/Cliente/buscaCliente',
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
    var dados = {
        cliente       : $('#cliente').val(),
        telefone      : $('#telefone').val(),
        notafiscal    : $('#notaFiscal').val(),
        desc          : $('#desc').val(),
        tipoVolume    : $('input:radio[name=tipoVolume]:checked').val(),
        tamanhoVolume : $('input:radio[name=tamanhoVolume]:checked').val()
    };

    $.ajax({
        url: 'index.php/Volume/cadastrarVolume',
        type: 'POST',
        data: dados,
        success: function(data){
            limpaVolumeModel();
            $("#volumeSucesso").show();

            setTimeout(function(){
                $('#inserirModal-modal').modal('toggle');
                $("#volumeSucesso").hide();
            }, 800);
        },
        error: function(data){
            $("#volumeErro").show();
        }
    });

});

$("#cancelarVolume").click(function(){
    limpaVolumeModel();
});

function limpaVolumeModel(){
    $('#cliente').val('');
    $('#course').val('');
    $('#telefone').val('');
    $('#notaFiscal').val('S/N');
    $('#desc').val('');
    $('#tipoVolume1').prop('checked',true);
    $('#tamanhoVolume1').prop('checked',true);
    $("#volumeSucesso").hide();
    $("#volumeErro").hide();
}