<footer>
        <br>
        <p>&copy;Manasha Siriwardana <br>
         Computer Applications <br>
        HAMK University</p>

        <?php

            $filename=basename($_SERVER['PHP_SELF']);
            $time = date("F d Y H:i:s.", filemtime($filename));

            echo $filename . " was last modified on: " . $time . "<br>" ;

        ?>
        <br>

    </footer>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 

</body>
</html>