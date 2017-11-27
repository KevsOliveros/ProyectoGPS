<script type="text/javascript">
        var areYouReallySure = false;
        function areYouSure() {
            if(allowPrompt){
                if (!areYouReallySure && true) {
                    areYouReallySure = true;
                    var confMessage = "***************************************nn E S P E R A !!! nnAntes de abandonar nuestra web, síguenos en nuestras redes sociales como Facebook, Twitter o Instagram.nnnYA PUEDES HACER CLIC EN EL BOTÓN CANCELAR SI QUIERES...nn***************************************";
                    return confMessage;
                }
            }else{
                allowPrompt = true;
            }
        }

        var allowPrompt = true;
        window.onbeforeunload = areYouSure;
</script>