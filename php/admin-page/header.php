<header class="header">
    <div class="left-content" onclick="homeClick()" style="cursor:pointer;">
        <img src="../../images/logo.png" onclick="homeClick()">
        <h1>VMS</h1>
    </div>
    <div class="right-content">
        <ul>
            <li>
                <a href="dashboard.php">Dashboard</a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="records.php">Records</a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="status.php">Status</a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="about.php">About us</a>
            </li>
        </ul>
    </div>
</header>

<script>
    function homeClick()
    {
        window.location.href = "../../index.php";
    }
</script>