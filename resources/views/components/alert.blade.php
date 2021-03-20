@if (session('msg'))
<div class="alert alert-warning alert-dismissible fade show w-100" role="alert">
    {{ session('msg') }}
    <button id="btn-close" type="button" class="btn-close float-right btn mb-2 pt-0" data-bs-dismiss="alert" aria-label="Close">x</button>
    </div>
@endif

<script type="text/javascript">
    $("#btn-close").click(function(){
        $(".alert-dismissible").hide();
    });
</script>