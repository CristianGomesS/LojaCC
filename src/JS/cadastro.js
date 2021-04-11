//Codigo Javascript:
$('#confirmar').click(goToLoginIfOkay)
$(document).ready(()=>{$('#errorDiv').hide()})
//$('#entrada').change(verificarErros);

function goToLoginIfOkay() {
    $('#errorDiv').empty(); //reseta erros
    if(!HouverErros()) location.href = './login.html';
}

function HouverErros() {
    let erros=[];
    validarNomes(erros);
    validarSenha(erros);
    validarEmail(erros);
    validarDataNascimento(erros);
    printError(erros);
    return erros.length!==0;
}


function printError(erros) {
    if(erros.length===0) {
        $('#errorDiv').hide();
        $('#errorDiv').empty();
        return;
    }
    erros.map((erro)=> {
        $('#errorDiv').append('<p>Erro: '+erro+'</p>');
    });
    $('#errorDiv').show();
}

function validarSenha(erros) {
    const senha1=$('#senha1').val();
    const senha2=$('#senha2').val();
    if(senha1.length===0 || senha2.length===0) {
        erros.push('Os campos de senhas não podem estar vazio.');
        return;
    }
    if(senha1.length<8 || senha1!==senha2) {
        erros.push('Senha deve ser possuir no minimo 8 caracteres e os dois campos devem ser iguais.');
    }
}

function validarNomes(erros) {
    const Nome=$('#Nome').val();
    const Sobrenome=$('#Sobrenome').val();
    if(Nome.length===0 || Sobrenome.length===0) {
        erros.push('Nome ou Sobrenome estão em branco.');
        return;
    }
    if(hasBadStuff(Nome) || hasBadStuff(Sobrenome)) {
        erros.push('Nome e Sobrenome não podem conter digitos ou simbolos especiais tais como *, +, #, / ou espaço.');
    }
}

function validarEmail(erros) {
    const Email=$('#email').val();
    if(Email.length===0) {
        erros.push('Campo de email está vazio.');
        return;
    }
    if(isBadEmail(Email)) {
        erros.push('Email nao possui formato valido.');
    }
}


function validarDataNascimento(erros) {
    const Data=$('#date').val();
    if(Data.length===0) {
        erros.push('Campo de data de nascimento está vazio.');
        return;
    }
    let data=Date.parse(Data);
    if((new Date()) - data< 18*365*24*60*60*1000) {
        erros.push('Idade deve ser maior do que 18 anos.');
    }
}

function hasBadStuff(string) {
    return /[\d\ \*\\\-\/\+\@\!\#\$\%\&\(\)]/.test(string);
}

function isBadEmail(email) {
    const re = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    return !re.test(String(email).toLowerCase());
}