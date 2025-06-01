$(document).ready(function() {
    $('#nascimento').on('change', function() {
        const nascimento = new Date(this.value);
        const hoje = new Date();
        let idade = hoje.getFullYear() - nascimento.getFullYear();
        const m = hoje.getMonth() - nascimento.getMonth();
        if (m < 0 || (m === 0 && hoje.getDate() < nascimento.getDate())) {
            idade--;
        }
        $('#idade').val(idade);
    });

    $('#add-exp').click(function() {
        $('#experiencias').append('<div class="input-group mb-2"><input type="text" name="experiencias[]" class="form-control" placeholder="Nova experiência"></div>');
    });
});
