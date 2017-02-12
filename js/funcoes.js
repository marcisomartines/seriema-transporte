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
    $('#telefone').val('');
    $('#notaFiscal').val('S/N');
    $('#desc').val('');
    $('#tipoVolume1').prop('checked',true);
    $('#tamanhoVolume1').prop('checked',true);
    $("#volumeSucesso").hide();
    $("#volumeErro").hide();
}