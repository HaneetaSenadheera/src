</div>
        </div>


    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-column">
                    <p>Faccebook</p>
                    <p>Twitter</p>
                    <p>Instargram</p>
                    <p>You Tube</p>
                </div>
                <div class="col-md-4 footer-column">
                    <p>Directory</p>
                    <p>News</p>
                    <p>Research</p>
                </div>
                <div class="col-md-4 footer-column">
                    <p>Sign in</p>
                    <p>Blog</p>
                    <p>FAQ</p>
                </div>
            </div>
        </div>
        <?php

$file_name = basename($_SERVER['PHP_SELF']);


$file_last_modified = filemtime($file_name);


echo "File: " . $file_name . "\n";
echo "Last modified was on: " . date("l, dS F, Y, h:ia", $file_last_modified) ."\n";
?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>