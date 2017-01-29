<style>
    body {
        padding: 0;
        margin: 0;
        font-family: 'arial', sans-serif;
        font-size: 16px;
        line-height: 20px;
    }

    .main {
        width: 80%;
        margin: 48px auto;
    }

    .add-quote {
        text-align: center;
    }

    .quotes {
        text-align: center;
    }

    .quote {
        position: relative;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 0 25px #ccc;
        width: calc(25% - 48px);
        margin: 32px;
        padding: 16px;
        vertical-align: top;
        background-color: #fff;
    }

    .quote:hover {
        background-color: rgba(0,0,0,0.05);
    }

    .quote:hover .info a {
        color: rgba(0,0,0,0.5);
    }

    .quote.first-in-line {
        margin-left: 0;
    }

    .quote.last-in-line {
        margin-right: 0;
    }

    .quote .info {
        margin-top: 8px;
        font-size: 12px;
        font-family: "Roboto", sans-serif;
        color: #ccc;
    }

    .quote .info a {
        color: #ccc;
        text-decoration: underline;
    }

    .quote .info a:hover,
    .quote .info a:active {
        color: #aaa;
    }

    .quote .delete {
        position: absolute;
        top: 0;
        right: 4px;
        font-family: sans-serif;
    }

    .quote .delete a {
        color: #bbb;
        text-decoration: none;
    }

    .quote .delete a:hover,
    .quote .delete a:active {
        color: red;
    }

    .input-group {
        margin: 16px 0;
    }

    .input-group label {
        display: block;
        text-align: center;
        font-weight: bold;
    }

    .input-group input,
    .input-group textarea {
        border: 1px solid #ccc;
        border-radius: 3px;
        font-family: inherit;
        font-size: inherit;
        padding: 4px 8px;
    }

    .input-group #author {
        width: 200px;
    }

    .input-group textarea {
        width: 400px;
    }

    .btn {
        border: 1px solid #ccc;
        border-radius: 3px;
        background-color: #fff;
        padding: 8px;
        cursor: pointer;
    }

    .btn:hover,
    .btn:active {
        background-color: #ddd;
    }

    .info-box {
        text-align: center;
        margin: auto;
        padding: 16px;
        border-radius: 5px;
        width: 350px;
    }

    .info-box.fail {
        background-color: #ddd;
        color: red;
    }

    .info-box.success {
        background-color: #ddd;
        color: green;
    }

    .info-box ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .filter-bar {
        padding: 16px;
        background-color: #ddd;
        color: black;
        border-radius: 5px;
    }

    .pagination {
        font-size: 28px;
        display: block;
    }

    .pagination a {
        color: black;
        text-decoration: none;
    }

    .pagination a:hover,
    .pagination a:active {
        color: red;
    }

    .no-quotes {
        margin-top: 10px;
        text-align: center;
        font-size: 24px;
    }
</style>


{{--<script>
    function get_random_color() {
        return "#" + ((1 << 24) * Math.random() | 0).toString(16);
    }

    function random_color() {
        return 'rgba(0,0,0,0.' + Math.floor(Math.random() * (30 - 0)) + 0 + ')';
    }
console.log(random_color());
    setTimeout("$('.info-box').fadeOut(2000);", 7000);

    setInterval("$('body').animate({'background-color' : random_color()}, 5000);", 5000);
</script>--}}
