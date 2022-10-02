<!DOCTYPE html>
<html>

<head>
    <title>Untitled Document</title>
</head>

<body>
    <div class="jumlah"></div>
    <div class="data"></div>
    <script src="<?php echo base_url() ?>/assets/admin/plugins/jquery/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            selesai();
        });

        function selesai() {
            setTimeout(function() {
                update_jumlah();
                // update_data();
                // selesai();
            }, 200);
        }

        function update_jumlah() {
            $.getJSON("json/jumlahData.php", function(data) {
                $(".jumlah").empty();
                var no = 1;
                $.each(data.result, function() {
                    $(".jumlah").append("<div>" + this['jumlah'] + "</div>");
                });
            });
        }

        function update_data() {
            $.getJSON("json/data.php", function(data) {
                $(".data").empty();
                var no = 1;
                // var kelas = "timeago";
                $.each(data.result, function() {
                    $(".data").append("<div>" + this['tanggal'] + "</div>");
                    // $("time.timeago").timeago("update", this['tanggal']);
                });
            });
        }
    </script>
</body>

</html>