<script>
        $(function() {
            <?php if ($session->has('succes_msg')) : ?>
                swal({
                    title: "SUCCESS",
                    text: "<?= $session->getFlashdata('succes_msg') ?>",
                    icon: "success",
                    button: "OK"
                });
            <?php endif; ?>

            <?php if ($session->has('error_msg')) : ?>
                swal({
                    title: "ERROR",
                    text: "<?= $session->getFlashdata('error_msg') ?>",
                    icon: "error",
                    button: "OK"
                });
            <?php endif ?>
        });
</script>