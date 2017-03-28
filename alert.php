<script
			  src="https://code.jquery.com/jquery-3.2.1.min.js"
			  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
			  crossorigin="anonymous"></script>
<script>
$(window).on("blur focus", function(e) {
    var prevType = $(this).data("prevType");

    if (prevType != e.type) {   //  reduce double fire issues
        switch (e.type) {
            case "blur":
                alert('xx');
                $('div').text("Blured");
                break;
            case "focus":
                $('div').text("Focused");
                break;
        }
    }

    $(this).data("prevType", e.type);
})
</script>
