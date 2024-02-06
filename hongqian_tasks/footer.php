<hr>
<div class="row" id="footer">
        <div class="col-sm-4">
<?php
$file_path = $_SERVER['SCRIPT_FILENAME'];
$filename = basename($file_path);
$last_modified_time = filemtime($file_path);

echo "<p>File: $filename</p>";
echo "<p>Last modified: " . date("F d Y H:i:s.", $last_modified_time) . "</p>";
?>
        </div>
        <div class="col-sm-4">
            <div id="footer-helper">
                <img src="layout_images/headerFooter/underline-title.png" id="footer-underline" alt="">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="row">
                <h4 class="footer-heading">Socials</h4>
            </div>
            <div class="row">
                <div class="socials">
                    <a href="#" id="twitter"><img src="layout_images/headerFooter/x_white.png" class="socials-logo" alt="Our Twitter account"></a>
                    <a href="#" id="instagram"><img src="layout_images/headerFooter/instagram_white.png" class="socials-logo" alt="Our Instagram account"></a>
                    <a href="#" id="facebook"><img src="layout_images/headerFooter/facebook_white.png"
                                                   class="socials-logo" alt="Our Facebook account"></a>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>