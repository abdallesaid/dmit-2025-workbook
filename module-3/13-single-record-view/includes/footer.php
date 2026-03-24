<?php
// Establish a connection to the database
require_once dirname(__DIR__, 3) . '/data/connect.php';
$conn = db_connect();
?>
</div>
        </section>
    </main>
    <footer class="text-bg-dark text-center mt-5 py-5">
        <h2 class="fw-light fs-5">Data from Happy Planet Index, 2019.</h2>
        <p><a class="link-light" href="https://happyplanetindex.org/hpi/">Explore the Data</a></p>
    </footer>
</body>
</html>

<?php 

// Finally, we must always close our connection to the database.
db_disconnect($conn);
?>