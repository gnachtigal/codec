$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
    $(document).ready(function(){
        $('#btn_encript').click(function(){
            cifrar($(this));
        })
        $('#btn_decript').click(function(){
            decifrar($(this));
        })

        function cifrar(obj)
        {
            $('#txt_result').empty();
            var string = $('#txt_encript').val();
            var chave = $('#txt_key_encript').val();
            $.ajax({
                type: "POST",
                url: "cifrar.php",
                data: {'string': string, 'chave': chave},
                dataType: "json",
                success : function(data){
                    $('#txt_result').html(data);
                }
            });
        }
        function decifrar(obj)
        {
            $('#txt_result').empty();
            var string = $('#txt_decript').val();
            var chave = $('#txt_key_decript').val();
            $.ajax({
                type: "POST",
                url: "decifrar.php",
                data: {'string': string, 'chave': chave},
                dataType: "json",
                success : function(data){
                    $('#txt_result').html(data);
                }
            });
        }
    })
