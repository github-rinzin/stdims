<button id="go-back" class="btn ml-auto" type="button">
    <i class="fa fa-long-arrow-left"></i> Back
</button>
<script>
$(document).ready(function () {
    $('#go-back').click(function(){
        window.history.back();
    });
});
</script>