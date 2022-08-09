<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<input type="date" data-date="" data-date-format="DD-MM-YYYY" value="<?= date("Y-m-d") ?>">
<style>
    input {
    position: relative;
    width: 150px; height: 20px;
    color: white;
}

input:before {
    position: absolute;
    top: 3px; left: 3px;
    content: attr(data-date);
    display: inline-block;
    color: black;
}

input::-webkit-datetime-edit, input::-webkit-inner-spin-button, input::-webkit-clear-button {
    display: none;
}

input::-webkit-calendar-picker-indicator {
    position: absolute;
    top: 3px;
    right: 0;
    color: black;
    opacity: 1;
}
</style>

<script>
    $("input").on("change", function() {
    this.setAttribute(
        "data-date",
        moment(this.value, "YYYY-MM-DD")
        .format( this.getAttribute("data-date-format") )
    )
}).trigger("change");
</script>
