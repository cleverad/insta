<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        setTimeout(function () {
            location.reload();
        }, {% if sess %}7000{% else %}10{% endif %});

    });
</script>
{% if sess %}
<script>
    $(document).ready(function () {
        $("#result").load("http://insta.oxgroup.media/public/{{ sess }}.htm");
    }
</script>
<div id="result"></div>
<!--<iframe width="1000" height="1000" src="http://insta.oxgroup.media/public/{{ sess }}.html"></iframe>-->
{% endif %}