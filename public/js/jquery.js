$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'csrftoken': '{{ csrf_token() }}'
        }
    });
    $(".agendar").click(function (e) {
        $('.profissionais').empty();

        var id = $(".espec").val();
        $.ajax({
            type: "GET",
            url: "/clinica/profissionais/" + id,
            success: function (data) {
                var info = `${data.length} ${$(".espec option:selected").text()} encontrado${data.length > 1 ? 's' : ''}`;
                $('.data-info ').text(info);
                $.each(data, function (i, d) {
                    var color = Math.floor((Math.random() * 256) + 1);
                    var newCard = `<div class="card">
                            <div class="row no-gutters">
                                <div class="col-auto m-2">
                                    <img src="//placehold.it/50/${color}" class="img-fluid rounded-circle" alt="">
                                </div>
                                <div class="col m-2">
                                    <div class="card-block px-2 ">
                                        <strong class="card-title">${d.nome}</strong><br>
                                        <small class="card-text">CRM: ${d.documento_conselho}</small><br>
                                        <a href="#" class="btn btn-success" style="color: white; border-radius: 5px;"data-toggle="modal" data-idspec="${$(".espec").val()}" data-idprof="${d.profissional_id}" data-target="#adengamentoModal" >AGENDAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>`
                    $('.profissionais').append(newCard);
                });
            }
        });

    });
    $("#ajax-form-submit").submit(function (e) {
        var form = $("#ajax-form-submit");
        var form_data = $("#ajax-form-submit").serialize();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val()
            }
        });
        $.ajax({
            type: "POST",
            url: "/clinica/agendamento",
            data: form_data,
            success: function (data) {
                console.log(data.obj);
                if (data.code) {
                    alert(data.msg);

                } else {
                    alert(data.msg);
                }
                $('#ajax-form-submit').find("input[type=text],input[type=date] ,textarea,select").val("")
                $('#adengamentoModal').modal('hide');
            }
        });
        return false;
    });
    $('#adengamentoModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var profId = button.data('idprof');
        var especId = button.data("idspec");
        var modal = $(this);
        modal.find('input[name=professional_id]').val(profId);
        modal.find('input[name=specialty_id]').val(especId);
    });
});