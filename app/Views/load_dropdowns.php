<script>
        $(function() {
            //alert('Document is Ready!!');
            var batch_dropdown = $('#adm_year');
            var from_yr_dropdown = $('#from_year');
            var to_yr_dropdown = $('#to_year');
            load_years(batch_dropdown);
            load_years(from_yr_dropdown);
            load_years(to_yr_dropdown);
            load_occupations();
        });

        function load_occupations() {
            $.ajax({
                url: "<?= base_url("3af0ec57083c23b5485599e028bd46e8") ?>",
                dataType: "json",
                type: "GET",
                cache: false,
                success: function(data) {
                    var occupation_dropdown = $('#current_occup');
                    $.each(data, function(i, item) {
                        occupation_dropdown.append('<option>' + item.occupation_name + '</option>');
                    });
                    let prev_val = occupation_dropdown.attr('value');
                    occupation_dropdown.val(prev_val);
                },
                error: fail_handler,
                complete: ajax_complete_handler
            });
        }

        var fail_handler = function(XmlHttpReq, status, errorThrown) {
            alert("Sorry, there was a problem! in loading Department names - " + errorThrown);
            console.log("Error: " + errorThrown);
            console.log("Status: " + status);
            console.dir(XmlHttpReq);
        }

        var ajax_complete_handler = function(XMLhttpReq, status) {
            console.log('AJAX complete');
        }

        function load_years(dropdown) {
            for (let index = 1994; index < 2023; index++) {
                dropdown.append('<option>' + index + '</option>');
            }
        }
</script>