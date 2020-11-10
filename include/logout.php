<?php
//check session
@session_start();
//kill all sessions
@session_destroy();
?>
<script>
    window.history.back();
</script>
