const $checkPassword = document.getElementById("input-show-password"),
$inputPassword = document.getElementById("password"),
$inputPasswordConfirm = document.getElementById("password_confirmation");

$checkPassword.addEventListener( 'change', function() {
    if(this.checked) {
        $inputPassword.type="text";
        $inputPasswordConfirm.type="text";
    }else{
        $inputPassword.type="password";
        $inputPasswordConfirm.type="password";
    }
});