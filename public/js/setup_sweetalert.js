
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(".btnDeletar").click(function () {
    _this = this;
    swal.fire({
        title: 'Atenção?',
        text: "Deseja remover este item da lista?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim!'
    }).then(function (result) {
        if (result.value) {
            $.ajax({
                url: $(_this).attr('data-route') + '/' + $(_this).attr('data-id'),
                type: 'POST',
                data: { '_method': 'DELETE' },
                dataType: 'JSON',
                success: function (result) {
                    if (result == 1) {
                        swal({
                            title: "Removido(a) com sucesso",
                            icon: "success"
                        });
                        $(_this).closest('tr').remove();
                    }
                    else {
                        swal({
                            title: "Erro ao remover",
                            icon: "error"
                        });
                    }
                },
                error: function (result) {
                    swal({
                        title: "Erro remover",
                        text: result.responseJSON.message,
                        icon: "error"
                    });
                }
            });
        }
    });
});
