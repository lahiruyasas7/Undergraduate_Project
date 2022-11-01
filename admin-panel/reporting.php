
<?php

include "includes/header.php";
include "includes/sidebar.php";
include "includes/navbar.php";

require "Database/dbconfig.php";

?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-5">
                        <h1 class="h3 mb-0 text-gray-900">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                            <i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                        
</div>

<form action="makepdf.php" method="POST">
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">Select the Company</label>
      <select id="disabledSelect" class="form-select" name="selection">
        <option>Pizza Hut</option>
        <option>KFC</option>
        <option>Machan</option>
        <option>Dominos</option>
      </select>
    </div>
  <button type="submit" name="submit" class="btn btn-primary">Download</button>
</form>

<?php

include "includes/scripts.php";

?> 

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

</body>

</html>

  


